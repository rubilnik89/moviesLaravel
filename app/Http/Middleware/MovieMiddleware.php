<?php

namespace App\Http\Middleware;

use Closure;

class MovieMiddleware
{
    /**
     * Handle an incoming Requests.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        Make some middleware logic
//
//        if ($Requests->input('token') !== 'my-secret-token') {
//            return redirect('home');
//        }

        return $next($request);
    }
}
