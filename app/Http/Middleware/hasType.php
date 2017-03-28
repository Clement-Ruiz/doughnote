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
        if(! $request->user()->isHe($params["type"]))
        {
            return redirect()->back()->with("You don't have access here");
        }
        return $next($request);
    }
}
