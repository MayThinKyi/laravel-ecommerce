<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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

        if(!empty(Auth::user())){
            if(url()->current()==route('auth#login') || url()->current()==route('auth#register')){
                return back();

            }
             if(Auth::user()->role!='admin'){
           return redirect()->route('user#home');
        }
          return $next($request);

        }
             return $next($request);

    }

}
