<?php

namespace App\Http\Middleware;

use Closure;

class isLogin
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
        if (! session('isLogin') || is_null(session('isLogin'))) {
            return redirect('/')->send()->with('status', '请先完成认证在投票');
        }
        return $next($request);
    }
}
