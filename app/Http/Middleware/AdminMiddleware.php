<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        if (\Auth::check() &&  \Auth::user()->id == 1)
        {
            return $next($request);
        }else

        return redirect()->guest('/home');

        //return $next($request);
    }
}
