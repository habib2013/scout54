<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class PlayerAuth
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
       
        if((Auth::guard('player')->check()) !== null){
            return $next($request);
        }
        return redirect('login/player');
     
     
    }
}
