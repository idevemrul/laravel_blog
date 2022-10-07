<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!session()->has('user_token')) {
            session()->flash('invalid_user', 'Please try with valid user credentials | Redirect from Middleware');
            return redirect(('admin_login'));
        } else {
            session()->flash('valid_user', 'Please try with valid user credentials | Redirect from Middleware');
            return $next($request);
        }
    }
}
