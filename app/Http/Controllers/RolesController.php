<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Models\Permissions;
use App\Models\Role;
use Session;

class RolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (!\Sentinel::getUser()->hasAccess('roles')) {
            \Log::error('Unauthorized access attempt',
                ['user' => \Sentinel::getUser()->username, 'action' => \Request::route()->getActionName()]);
            return redirect('/')->with('error', 'No posee permisos para realizar esta accion.');
        }

        $roles = Role::paginate(20);
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        if (!\Sentinel::getUser()->hasAccess('roles.add|edit')) {
            \Log::error('Unauthorized access attempt',
                ['user' => \Sentinel::getUser()->username, 'action' => \Request::route()->getActionName()]);
            return redirect('/')->with('error', 'No posee permisos para realizar esta accion.');
        }

        $permissions = Permissions::orderBy('permission')->get();
        return view('roles.create', compact('permissions'));
    }

    public function store(RoleRequest $request)
    {
        if (!\Sentinel::getUser()->hasAccess('roles.add|edit')) {
            \Log::error('Unauthorized access attempt',
                ['user' => \Sentinel::getUser()->username, 'action' => \Request::route()->getActionName()]);
            return redirect('/')->with('error', 'No posee permisos para realizar esta accion.');
        }

        $input = $request->all();
        $rolePermissions = [];

        if (isset($input['permissions']))
            foreach ($input['permissions'] as $p) {
                $rolePermissions[$p] = true;
            }

        $input['permissions'] = $rolePermissions;

        if ($role = Role::create($input)) {
            \Log::info('Rol creado.', $role->toArray());

            return redirect()
                ->route('roles.index')
                ->with('success', 'Rol creado correctamente');
        }

        \Log::error('Creacion de Rol.', $input);
        return redirect()
            ->route('roles.create')
            ->withInput()
            ->with('error', 'Problemas al crear el Rol de Usuario');
    }

    public function edit($id)
    {
        if (!\Sentinel::getUser()->hasAccess('roles.add|edit')) {
            \Log::error('Unauthorized access attempt',
                ['user' => \Sentinel::getUser()->username, 'action' => \Request::route()->getActionName()]);
            return redirect('/')->with('error', 'No posee permisos para realizar esta accion.');
        }

        if ($role = Role::find($id)) {
            $permissions = Permissions::orderBy('permission')->get();

            /* Array for displaying permissions section on view */
            foreach ($permissions as $p) {
                if ($role->hasAccess($p->permission)) {
                    $p['has'] = true;
                } else {
                    $p['has'] = false;
                }
            }
            return view('roles.edit', compact(['role', 'permissions']));
        }

        return redirect()->back()->with('error', 'Rol no encontrado.');
    }

    public function update(RoleRequest $request, $id)
    {
        if (!\Sentinel::getUser()->hasAccess('roles.add|edit')) {
            \Log::error('Unauthorized access attempt',
                ['user' => \Sentinel::getUser()->username, 'action' => \Request::route()->getActionName()]);
            return redirect('/')->with('error', 'No posee permisos para realizar esta accion.');
        }

        if (!$role = Role::find($id)) {
            Session::flash('error_message', 'Rol no encontrado');
            return redirect('roles');
        }

        $input = $request->all();

        $currentPermissions = $role->permissions;
        $expectedPermissions = array_pull($input, 'permissions');

        $expectedPermissions = empty($expectedPermissions) ? [] : $expectedPermissions;

        foreach ($expectedPermissions as $p) {
            if (!array_key_exists($p, $currentPermissions))
                $role->addPermission($p);
        }

        foreach ($currentPermissions as $p => $v) {
            if (!in_array($p, $expectedPermissions))
                $role->removePermission($p);
        }

        $role->fill($input);

        if ($role->save()) {

            \Log::info('Rol actualizado.', $role->toArray());

            return redirect()
                ->route('roles.index')
                ->with('success', 'Rol actualizado correctamente');
        }


        \Log::error('Actualizacion de Rol.', $role->toArray());
        return redirect()
            ->route('roles.index')
            ->with('error', 'Problemas al actualizar Rol de Usuario');

    }

    public function destroy($id)
    {
        $message = '';
        $error = '';

        if (!\Sentinel::getUser()->hasAccess('roles.delete')) {
            \Log::error('Unauthorized access attempt',
                ['user' => \Sentinel::getUser()->username, 'action' => \Request::route()->getActionName()]);
            $message = 'No posee permisos para realizar esta operacion';
            $error = true;
        } else {
            if ($role = Role::find($id)) {
                try {
                    if (Role::destroy($id)) {
                        $message = 'Rol eliminado correctamente';
                        $error = false;
                    }
                } catch (\Exception $e) {
                    \Log::error("Error deleting role: " . $e->getMessage());
                    $message = 'Error al intentar eliminar el rol';
                    $error = true;
                }
            } else {
                \Log::warning("Role {$id} not found");
                $message = 'Rol no encontrado';
                $error = true;
            }
        }


        return response()->json([
            'error' => $error,
            'message' => $message,
        ]);
    }
}
