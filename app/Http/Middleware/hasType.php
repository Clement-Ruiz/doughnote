<?php

namespace App\Http\Middleware;

use Closure;

class hasType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$params)
    {
        if(! $request->user()->is($params[0]))
        {
            return redirect('welcome')->with("You don't have access here");
        }
        return $next($request);
    }
}
