<?php

namespace chiselkraft\Http\Middleware;

use Closure;

class RedirectIfUnpublished
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
        if(!config('site.global.publish')) abort(503);
        return $next($request);
    }
}
