<?php

namespace App\Http\Middleware;

use Closure;
use \App\Nav;

class NavMiddleware
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
        \View::share('navs', Nav::all());
        return $next($request);
    }
}
