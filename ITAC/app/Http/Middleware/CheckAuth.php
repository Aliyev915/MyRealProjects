<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAuth
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
        if(!Auth::check())
        {
            return redirect('/login');
        }
        else if(Auth::user()->admin==0)
        {
            Auth::logout();
            return redirect('/confirmation')->with('error_message','Admin panelə daxil olmaq mümkün olmadı. Hesabınız ya silinmişdir ya da aktiv deyil');
        }
        return $next($request);
    }
}
