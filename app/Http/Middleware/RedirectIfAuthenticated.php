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
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/home');
        // }
        if ($guard == "player" && Auth::guard($guard)->check()) {
            return redirect('/player');
        }
        if ($guard == "coach" && Auth::guard($guard)->check()) {
            return redirect('/coach');
        }
        if ($guard == "club" && Auth::guard($guard)->check()) {
            return redirect('/club');
        }
        if ($guard == "agent" && Auth::guard($guard)->check()) {
            return redirect('/agent');
        }
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }


        return $next($request);
    }
}
