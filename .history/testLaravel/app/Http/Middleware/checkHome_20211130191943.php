<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkHome
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
        $home = route("home");
        redirect($home);
        // return $next($request);
    }
}
