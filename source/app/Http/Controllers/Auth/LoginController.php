<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Lang;

/**
 * Class LoginController
 * @package App\Http\Controllers\Auth
 */
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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * LoginController constructor.
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->redirectTo = request()->has('redirectTo') ? request()->input('redirectTo') : redirectIfAuthSuccess();
    }

    /**
     * Override default behaviors on login failure/success
     */
    /**
     * Send the response after the account was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();
        $this->clearLoginAttempts($request);

        return $this->authenticated( $request, $this->guard()->user() );
    }

    /**
     * The account has been authenticated.
     * Check for additional access requirements
     * @param  \Illuminate\Http\Request  $request
     * @param  User  $user
     * @return mixed
     */
    protected function authenticated(Request $request, User $user)
    {
        $data = [];
        if ($user->status == USER_STATUS_ACTIVE)
        {
            $data['status'] = true;
            $data['message'] = 'login_ok';
        }else{
            // Log the account out.
            $this->logout($request);

            $data['message'] = Lang::get('auth.blocked');
            $data['status'] = false;
        }

        if($request->wantsJson())
        {
            $data['redirectTo'] = $this->redirectPath();
            return to_json($data);
        }
        else{
            foreach ($data as $key => $value) $request->session()->flash($key, $value);
            return redirect()->intended($this->redirectPath());
        }
    }

    /**
     * Get the failed login response instance.
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        $data['status'] = false;
        $data['status_code'] = 401;
        $data['message'] = Lang::get('auth.failed');

        if($request->wantsJson())
        {
            return to_json($data)->setStatusCode($data['status_code']);
        }
        else{
            return redirect()->back()
                             ->withInput($request->only($this->username(), 'remember'))
                             ->withErrors([
                                 $this->username() => Lang::get('auth.failed'),
                             ]);//->setStatusCode($data['status_code']);
        }
    }
}
