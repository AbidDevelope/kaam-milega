<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use Closure;

class AdminPermission
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
        if (Auth::user() &&  Auth::user()->is_admin == 1) {
                  if(in_array($request->get('module'),explode(',',Auth::user()->permissions))){
                    return $next($request);   
                  }else{
                       return redirect('/');
                  }
                 
                //return $next($request);
        }

        return redirect('/');
    }
}
