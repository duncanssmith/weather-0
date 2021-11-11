<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MustBeAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->guest()) {
//            abort(Response::HTTP_FORBIDDEN)
            return redirect('/index')->with('success', 'Access denied (Guest user)');
        }

        if(!auth()->user()->is_admin) {
//            abort(Response::HTTP_UNAUTHORIZED)
            return redirect('/index')->with('success', 'Access denied (must be Admin)');
        }

        return $next($request);
    }
}