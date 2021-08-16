<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUser
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
        if(!Auth::check()){
            return redirect('/login');
        }
        else if(Auth::user()->admin==0){
            Auth::logout();
            return redirect('/')->with('error_message','Daxil ola bilmediniz!');
        }
        return $next($request);
    }
}
