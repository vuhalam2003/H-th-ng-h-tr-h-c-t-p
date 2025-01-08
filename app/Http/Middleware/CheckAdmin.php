<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin
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
        // Nếu chưa đăng nhập, chuyển hướng về trang đăng nhập
        if (!auth()->check()) {
            return redirect('/login')->with('error', 'Bạn cần đăng nhập để truy cập!');
        }
    
        // Nếu là admin (role == 1), cho phép tiếp tục
        if (auth()->user()->role == 1) {
            return $next($request);
        }
    
        // Nếu là người dùng (role == 2), chuyển hướng về trang chủ
        if (auth()->user()->role == 2) {
            return redirect('/');
        }
    
        // Nếu không phải là admin hoặc người dùng role 2, chuyển hướng về login
        return redirect('/login')->with('error', 'Bạn không có quyền truy cập!');
    }
    
}
