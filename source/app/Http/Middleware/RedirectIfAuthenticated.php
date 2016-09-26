<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check())
        {
            if($request->wantsJson())
            {
                $data = [];
                $data['status'] = false;
                $data['message'] = 'session_exists';
                $data['redirectTo'] = request()->has('redirectTo') ? request()->input('redirectTo') : url()->route('user.dashboard');
                return to_json($data);
            }
            return redirect(url()->route('user.dashboard'));
        }

        return $next($request);
    }
}
