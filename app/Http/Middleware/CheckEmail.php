<?php

namespace App\Http\Middleware;

use Closure;

class CheckEmail
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
        if (strlen($request->user()->email) < 15) {
            return response()->json('Please modify your email (more than 15 letter)');
        }
        return $next($request);
    }
}
