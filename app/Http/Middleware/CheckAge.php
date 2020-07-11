<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class CheckAge
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
        if ($request->age > 100 || $request->age < 0) {
            return redirect('/home');
        }
        return $next($request);
    }
}
