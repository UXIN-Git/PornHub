<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;

class TimeIng
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
        $dt = Carbon::now();
        $minNow = $dt->minute;
        if ($minNow % 2 == 0) {
            return $next($request);
        } else {
            abort(403);
        }
    }

}
