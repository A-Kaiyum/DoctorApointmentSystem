<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {

                if (Auth::user()->user_type == 'admin') {
                    return redirect()->intended(RouteServiceProvider::HOME);
                }elseif(Auth::user()->user_type == 'doctor'){
                    return redirect()->intended(RouteServiceProvider::Doctor);
                }
                elseif(Auth::user()->user_type == 'hospital'){
                    return redirect()->intended(RouteServiceProvider::Hospital);
                }
                elseif(Auth::user()->user_type == 'patient'){
                    return redirect()->intended(RouteServiceProvider::Patient);
                }

            }
        }

        return $next($request);
    }
}
