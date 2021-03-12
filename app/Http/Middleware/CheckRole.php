<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


class checkRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()) {
            // echo Auth::user()->role;
            if(Auth::user()->role_id == "super"){
                return $next($request);
               
            } else {
                return redirect('/admin')->with( $request->all());
            }
        } else
        return $next($request);
    }
}