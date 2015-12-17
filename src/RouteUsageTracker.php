<?php

namespace AlfredNutileInc\RouteTracking;

use Closure;

class RouteUsageTracker
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
        RouteUsage::create(['path' => $request->path()]);

        return $next($request);
    }
}
