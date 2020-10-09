<?php

namespace App\Http\Middleware;

use Closure;
use illuminate\Support\Facades\Auth;

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
        /*is admin */
        if(Auth::check() && Auth::user()->isAdmin()){
            return $next($request);
        }
        return redirect('home');
    }
}
