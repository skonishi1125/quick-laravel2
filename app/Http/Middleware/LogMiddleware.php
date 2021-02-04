<?php

namespace App\Http\Middleware;

use Closure;

class LogMiddleware
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
        file_put_contents('/Users/skoni/Desktop/accesslog.txt',date('Y-m-d H:i:s')."\n",FILE_APPEND);
        return $next($request);
    }
}
