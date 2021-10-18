<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LandingMiddleware
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
        if(auth()->user()==null){
            return $next($request);
        }

        return redirect('dashboard');
    }
}
