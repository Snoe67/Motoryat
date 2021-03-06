<?php

namespace App\Http\Middleware;

use Closure;

class kurumsal
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
        if (\Auth::check() && \Auth::user()->isKurumsal() && \Auth::user()->magaza->isActive == 1) {
            return $next($request);
        }

        return redirect('home');
    }
}
