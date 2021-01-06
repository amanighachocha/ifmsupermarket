<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminCheck
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
        if(auth()->user()->email != 'chaupele@hotmail.com'){
            session()->flash('error_message','You are not an administrator');
            return redirect()->to('/');
        }
        return $next($request);
    }
}
