<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    /**public function handle(Request $request, Closure $next,$userType1=null,$userType2=null,$userType3=null)
    {
        if (Auth::check()){
            if (Auth::user()->role == $userType1 || Auth::user()->role == $userType2 || Auth::user()->role == $userType3){
                return $next($request);
            }else{
                return redirect('/blok')->with('message','maaf,anda tidak memiliki akses halaman ini!');
            }
        }else{
            return redirect('/login')->with('message','anda belum login! silahkan login dulu.');
        }
    }**/
}
