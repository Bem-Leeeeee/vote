<?php

namespace App\Http\Middleware;

use Closure;
use App\admin;

class isOpen
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
      $admin = admin::first();
      if (!isset($admin)) {
        return redirect('/')->send()->with('status', '投票系统已关闭');
      }
      if(isset($admin)) {
          if($admin->switch == 'close'){
            return redirect('/')->send()->with('status', '投票系统已关闭');
          }
      }
        return $next($request);
    }
}
