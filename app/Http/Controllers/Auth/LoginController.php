<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Models\User;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Illuminate\Support\Facades\Input as Input;
use Mail;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    protected $user;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('not_guest',
            [
                'except'    => [
                    'logout', 'reset', 'resetPasswordPage', 'resetPasswordRequest', 'resetPassword', 'forceLogout'
                ]
            ]);
        $this->middleware('auth', ['only' => 'forceLogout']);
        $this->user = \Sentinel::getUser();
    }

    /**
     * Show the log in page
     */
    public function loginPage()
    {
        return view('auth.login');
    }

    /**
     * Handle the user log in attempt
     * @param LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginAttempt(LoginRequest $request)
    {
        $ex = null;
        $error = null;
        $credentials = [
            'username'     => $request->get('username'),
            'password'  => $request->get('password'),
        ];
        \Log::debug("Login attempt", $credentials);
        try{
            if (\Sentinel::authenticate($credentials)){
                \Log::info("User logged in", ['user' => $credentials['username']]);
                return redirect()->intended()->with('success', 'Sesion iniciada Correctamente');
            }
            $ex = new \Exception('Invalid Credentials');
            $error = "La combinacion de usuario y contraseña es incorrecta";
        }catch (NotActivatedException $e){
            $ex = $e;
            $error = "Cuenta de usuario no activada";
        }catch (ThrottlingException $e){
            $ex = $e;
            $delay = $e->getDelay();
            $error = "Su cuenta ha sido bloqueada por {$delay} segundo(s)";
        }

        \Log::warning($ex->getMessage(), [\Request::get('email')]);

        return redirect('login')->withInput()->withErrors($error);
    }

    /**
     * Logout the user and flush Session data.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout()
    {
        if (\Sentinel::guest())
            redirect()->back();

        try {
            if (\Sentinel::logout(null, true)) {
                $expired = \Request::get('expired');
                $message = ['success' => 'Sesión terminada exitosamente.'];

                if ($expired)
                    $message = ['warning' => 'Sesión expirada.'];
                \Session::flush();
                return redirect('/login')->with($message);
            } else
                return redirect()->back()->with('error', 'Problemas al terminar la sesion.');
        } catch (\Exception $e) {
            \Log::info($e->getMessage(), [Input::except('_token')]);
            return redirect()->back()->with('error', 'Usuario sin sesión iniciada.');
        }
    }

    /**
     * Show the Reset Password Page
     *
     * @param $id
     * @param $code
     * @return \Illuminate\View\View
     */
    public function resetPasswordPage($id, $code)
    {
        return view('auth.reset')
            ->with(compact('id', 'code'))
            ->with(\Request::old());
    }

    /**
     * Process a request for a password reset
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function resetPasswordRequest($id)
    {
        if ($user = User::find($id)){
            $resetCode = $user->getResetPassword();

            Mail::send('mails.reset_password', [
                'user' => $user,
                'link' => route('reset.password.page', [
                    'id'   => $user->id,
                    'code' => $resetCode
                ])],
                function ($message) use ($user) {
                    $message
                        ->to($user->email, ucfirst($user->username))
                        ->subject('Reestablecer Contraseña');
                });

            return redirect()->back()->with('success', 'En breve recibirá un correo para recuperar su contraseña');
        }else{
            return redirect()->back()->with('error', 'No existe el usuario');
        }
    }

    /**
     * Handle a password reset from submission
     * @param ResetPasswordRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function resetPassword(ResetPasswordRequest $request)
    {
        if (!$user = \Sentinel::findUserById($request->get('id'))){
            \log::warning("User not found {$request->get('id')}");
            return redirect()->back()->with('error', 'No existe el usuario solicitado');
        }

        if ($user->checkResetPasswordCode($request->get('code'), $request->password)){
            \Sentinel::logout($user, true);

            if ($user->attemptResetPassword($request->get('code'), $request->password)) {
                \Log::info("Password updated");
                return redirect()->route('login.page')
                    ->with('success', 'Contraseña cambiada exitosamente.');
            } else {
                \Log::warning("There is a problem with the password ");
                return redirect()->back()
                    ->with('error', 'Problemas al cambiar la contraseña, inténtelo de nuevo.');
            }
        }
    }


}
