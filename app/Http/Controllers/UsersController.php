<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Branch;
use App\Models\Permissions;
use App\Models\Role;
use App\Models\User;
use App\Services\Password;
use Log;
use Mail;


class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',
            [
                'except' => [
                    'activate'
                ]
            ]);
    }

    public function index()
    {
        if (!\Sentinel::getUser()->hasAccess('users')) {
            \Log::error('Unauthorized access attempt',
                ['user' => \Sentinel::getUser()->username, 'action' => \Request::route()->getActionName()]);
            return redirect('/')->with('error', 'No posee permisos para realizar esta accion.');
        }
        $users = User::paginate(20);
        return view('users.index', compact('users'));
    }

    public function create()
    {
        if (!\Sentinel::getUser()->hasAccess('users.add|edit')) {
            \Log::error('Unauthorized access attempt',
                ['user' => \Sentinel::getUser()->username, 'action' => \Request::route()->getActionName()]);
            return redirect('/')->with('error', 'No posee permisos para realizar esta accion.');
        }
        $permissions = Permissions::orderBy('permission')->get();
        $branches = Branch::all(['description', 'id']);
        $branchJson = json_encode($branches);
        $rolesList = Role::all(['id', 'name']);
        $rolesJson = json_encode($rolesList);

        $data = ['permissions' => $permissions, 'branchJson' => $branchJson,
            'rolesJson' => $rolesJson];

        return view('users.create', $data);
    }

    public function store(UserRequest $request, Password $password)
    {
        if (!\Sentinel::getUser()->hasAccess('users.add|edit')) {
            \Log::error('Unauthorized access attempt',
                ['user' => \Sentinel::getUser()->username, 'action' => \Request::route()->getActionName()]);
            return redirect('/')->with('error', 'No posee permisos para realizar esta accion.');
        }
        $input = $request->all();
        $generatePass = $password->generatePassword();

        $credentials = [
            'username' => $input['username'],
            'email' => $input['email'],
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'password' => $generatePass,
        ];

        if ($user = \Sentinel::register($credentials)) {
            $expectedPermissions = array_pull($input, 'permissions');
            $expectedPermissions = empty($expectedPermissions) ? [] : $expectedPermissions;

            foreach ($expectedPermissions as $p => $v) {
                if ($v['inherited'] === '0') {
                    $user->addPermission($p, isset($v['state']) ? filter_var($v['state'],
                        FILTER_VALIDATE_BOOLEAN) : false);
                }
            }

            if (!$user->save()) {
                \Log::error('Cant update Users Permissions.', $input);
                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'Problemas al actualizar registro.');
            }
        }

        $activation = \Activation::create($user);

        $data = [
            'user' => $user,
            'password' => $generatePass,
            'link' => route('users.activate', [
                'id' => $user->id,
                'code' => $activation->code
            ])
        ];

        Mail::send('mail.activation', $data,
            function ($message) use ($user) {
                $message->to($user->email, $user->username)->subject('Activar cuenta - AreaDeportiva');
            });

        $expectedRoles = $input['roles'];
        $expectedRoles = explode(',', $expectedRoles);
        if (!empty($expectedRoles)) {
            $user->roles()->attach($expectedRoles);
            Log::info('Roles agregados a Usuario: ' . $user->username, $expectedRoles);
        }

        return redirect()->route('users.index')
            ->with('success', 'Usuario creado exitosamente.');
    }

    public function show($id)
    {
        if (!\Sentinel::getUser()->hasAccess('users.show')) {
            \Log::error('Unauthorized access attempt',
                ['user' => \Sentinel::getUser()->username, 'action' => \Request::route()->getActionName()]);
            return redirect('/')->with('error', 'No posee permisos para realizar esta accion.');
        }

        if ($user = User::find($id)) {
            Log::info("User {$id} find");
            return view('users.show', compact('user'));
        }

        Log::warning("User not found");
        return redirect()->back()->with('error', 'Usuario no encontrado');
    }

    public function edit($id)
    {
        if (!\Sentinel::getUser()->hasAccess('users.add|edit')) {
            \Log::error('Unauthorized access attempt',
                ['user' => \Sentinel::getUser()->username, 'action' => \Request::route()->getActionName()]);
            return redirect('/')->with('error', 'No posee permisos para realizar esta accion.');
        }

        if ($user = User::with('roles')->find($id)) {

            $processedPermissions = $user->getProcessedPermissions()->all();

            $permissions = Permissions::orderBy('permission')->get();

            foreach ($permissions as $permission) {
                if (array_key_exists($permission->permission, $processedPermissions)) {
                    $permission->has = $processedPermissions[$permission->permission]['state'];
                    $permission->inherited = $processedPermissions[$permission->permission]['inherited'];
                } else {
                    $permission->has = null;
                    $permission->inherited = null;
                }
            }

            $rolesList = $user->roles()->select(['id', 'name'])->get();
            $rolesIds = $rolesList->implode('id', ',');
            $rolesList = Role::all(['id', 'name']);
            $rolesJson = json_encode($rolesList);
            $data = [
                'user' => $user,
                'rolesJson' => $rolesJson,
                'rolesIds' => $rolesIds,
                'permissions' => $permissions
            ];
            return view('users.edit', $data);
        }

        return redirect()->back()->with('error', 'Usuario no encontrado.');

    }

    public function update(UserRequest $request, $id)
    {
        if (!\Sentinel::getUser()->hasAccess('users.add|edit')) {
            \Log::error('Unauthorized access attempt',
                ['user' => \Sentinel::getUser()->username, 'action' => \Request::route()->getActionName()]);
            return redirect('/')->with('error', 'No posee permisos para realizar esta accion.');
        }
        // Get User with Roles
        if ($user = User::with('roles')->find($id)) {
            // Get the form input
            $input = $request->all();

            // Get the form input expected permissions
            // Permissions Rules:
            //  if state is null and inherited is 0 -> revoked permission user specific
            //  if state is true and inherited is 0 -> grant permission user specific
            //  if state is true and inherited is 1 -> already granted permission role inherited
            //  if state is null and inherited is 1 -> already revoked permission role inherited
            //  if state is null and inherited is null -> permission set in neither role nor user
            $expectedPermissions = array_pull($input, 'permissions');
            $expectedPermissions = empty($expectedPermissions) ? [] : $expectedPermissions;

            foreach ($expectedPermissions as $p => $v) {
                if (!isset($v['inherited']) OR $v['inherited'] === '0') {
                    $user->updatePermission($p, isset($v['state']) ? filter_var($v['state'], FILTER_VALIDATE_BOOLEAN) : false, true);
                }
            }

            if (!$user->save()) {
                \Log::error('Cant update Users Permissions.', $input);
                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'Problemas al actualizar registro.');
            }
            \Log::debug('Permissions Saved!. ', $input);
            $credentials = [
                'username' => $input['username'],
                'email' => $input['email'],
                'first_name' => $input['first_name'],
                'last_name' => $input['last_name']
            ];

            // Get array of the User's current Roles IDs
            $currentRoles = [];

            if (!$user->roles->isEmpty())
                $currentRoles = explode(',', $user->roles->implode('id', ','));

            // Get arry of the User's expected Roles IDs
            $expectedRoles = explode(',', $request->get('roles'));

            // Prepare array of Roles to detach from User
            if (!empty($currentRoles))
                $toDetachRoles = array_diff($currentRoles, $expectedRoles);

            if (!empty($toDetachRoles)) {
                $user->roles()->detach($toDetachRoles);
                Log::info('Roles eliminados de Usuario: ' . $user->username, $toDetachRoles);
            }

            // Prepare array of Roles to attach to User
            $toAttachRoles = array_diff($expectedRoles, $currentRoles);

            if (!empty($toAttachRoles)) {
                $user->roles()->attach($toAttachRoles);
                Log::info('Roles agregados a Usuario: ' . $user->username, $toAttachRoles);
            }


            // Update User with credentials
            $user->update($credentials);
            \Log::info("User {$user->description} updated successfully");
            return redirect()
                ->route('users.index')
                ->with('success', 'Usuario actualizado.');
        }

        return redirect()
            ->route('users.index')
            ->with('error', 'Error al actualizar el Usuario.');
    }

    public function destroy($id)
    {
        $message = '';
        $error = '';

        if (!\Sentinel::getUser()->hasAccess('users.destroy')) {
            \Log::error('Unauthorized access attempt',
                ['user' => \Sentinel::getUser()->username, 'action' => \Request::route()->getActionName()]);
            return redirect('/')->with('error', 'No posee permisos para realizar esta accion.');
        } else {
            if ($user = User::find($id)) {
                if (User::destroy($id) !== false) {
                    \Log::info('User destroy.', $user->toArray());
                    $message = 'Usuario eliminado correctamente';
                    $error = false;
                } else {
                    \Log::warning("Error while trying to destroy user: {$id}");
                    $message = 'Error al intentar eliminar el usuario';
                    $error = true;
                }
            } else {
                \Log::warning("User {$id} not found");
                $message = 'Usuario no encontrado';
                $error = true;
            }
        }
        $response = [
            'error' => $error,
            'message' => $message
        ];
        \Log::debug('Sending response. ' . json_encode($response));
        return response()->json($response);
    }

    public function activate($id, $code)
    {
        $user = \Sentinel::findUserById($id);

        if (!\Activation::complete($user, $code)) {
            \Log::warning("User not activated {$user->username}");
            return redirect('login.page')->withErrors('Codigo de activacion inválido o expirado');
        }

        /* When the user activate his account, we need to ask for a new personal password */
        $passCode = $user->getResetPasswordCode();

        return redirect()->route('reset.password.page', ['id' => $user->id, 'code' => $passCode])
            ->with('success', 'Cuenta de Usuario activada');
    }
}
