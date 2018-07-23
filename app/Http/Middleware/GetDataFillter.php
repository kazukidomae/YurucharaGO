<?php

namespace App\Http\Middleware;

use Closure;

class GetDataFillter
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
        if(empty($request->filled('CardID'))){
            return redirect('/');
        }

        return $next($request);
    }
}
