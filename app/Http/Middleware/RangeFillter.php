<?php

namespace App\Http\Middleware;

use Closure;

class RangeFillter
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
        if(empty($request->filled('lat'))||empty($request->filled('lng'))){
            return redirect('/');
        }

        return $next($request);
    }
}
