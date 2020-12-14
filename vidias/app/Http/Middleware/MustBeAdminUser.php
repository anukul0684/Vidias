<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MustBeAdminUser
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
        if(\Auth::user() && \Auth::user()->is_admin){
            return $next($request);
        }elseif(\Auth::user()){
            session()->flash('error','You cannot accesss this source');
            return redirect('/');
        }

        session()->flash('error','You cannot access this source');
        return redirect('/login');
    }
}
