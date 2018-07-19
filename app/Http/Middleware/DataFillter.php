<?php

namespace App\Http\Middleware;

use Closure;

class DataFillter
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
        if(empty($request->filled('Prefectures'))){
            return redirect('/');
        }
        
        return $next($request);
    }
}
