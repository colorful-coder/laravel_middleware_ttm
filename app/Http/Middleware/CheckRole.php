<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class CheckRole
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

        if ($request->user()->role != 2) {
            if ($request->wantsJson()) {
                return response()->json(['Message', 'You do not access to this module.'], 403);
            }
            abort(403, 'You do not access to this module.');
        }
        return $next($request);
    }
}
