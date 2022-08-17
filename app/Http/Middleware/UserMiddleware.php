<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() ) {
            # code...
            if (Auth::user()->role_id == 3) {
                # code...
                return $next($request);
            }
            else{
                Session::flash('message', "Acceso denegado, necesita otro permiso de usuario");
                return redirect('/dashboard')->withErrors(['msg' => 'Acceso denegado, necesita otro permiso de usuario']);
            }
        }
        else {
            # code...
            Session::flash('message', "Acceso denegado, Inicia sesion primero");
            return redirect('/login')->withErrors(['msg' => 'Acceso denegado, Inicia sesion primero ']);
        }
        return $next($request);
    }



    }

