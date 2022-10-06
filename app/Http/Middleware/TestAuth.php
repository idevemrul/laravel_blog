<?php

namespace App\Http\Middleware;

use Closure;

class TestAuth
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
        if ($request->number < 33) {
            return redirect('504');
        }
        return $next($request);
    }
}
