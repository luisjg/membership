<?php

namespace App\Http\Middleware;

use Closure;

class APIKeyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (env('APP_SECRET') != $request->input('api_key')) {

          return response([
            'status' => '400',
            'success' => 'false',
            'message' => 'Please check your API key'
          ]);
        }
        return $next($request);
    }

}
