<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class admin
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
        // if (Auth::check())
        // {
        //     echo 'test';
        //     // if(Auth::user()->user_id == '1'){
        //     //     return view('home');
        //     // }
        //     //dd($request->user());
            
        // } 
        // // dd($request);
        // if($request->user_id == '2'){  
        return $next($request);
        // }
    }
}
