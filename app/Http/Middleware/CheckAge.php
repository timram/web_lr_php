<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $minAge, $maxAge) {
        if ($minAge > 10 && $maxAge < 100) {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
