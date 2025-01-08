<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
     // Hiển thị form đăng nhập
     public function showLoginForm()
     {
         return view('user.form.login');
     }
 
     // Xử lý đăng nhập
     public function login(Request $request)
     {
        // dd(1);
         $request->validate([
             'email' => 'required|email',
             'password' => 'required|min:6',
         ]);
 
         if (Auth::attempt($request->only('email', 'password'))) {
             return redirect('/db')->with('success', 'Đăng nhập thành công!');
         }
 
         return back()->withErrors(['email' => 'Thông tin đăng nhập không chính xác.']);
     }
 
     // Hiển thị form đăng ký
     public function showRegisterForm()
     {
         return view('user.form.register');
     }
 
     // Xử lý đăng ký
     public function register(Request $request)
     {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6', // 'confirmed' kiểm tra khớp với 'password_confirmation'
        ]);

        // Lưu dữ liệu vào bảng users
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Mã hóa mật khẩu trước khi lưu
            'role' => 2, // Người dùng thông thường
        ]);
 
        return redirect()->route('login')->with('success', 'Tài khoản đã được tạo thành công!');
     }
 
     // Xử lý đăng xuất
     public function logout()
     {
         Auth::logout();
         return redirect()->route('login')->with('success', 'Đăng xuất thành công!');
     }

    public function index()
    {
        $users = User::where('role', 2)->get(); // Lấy tất cả bản ghi trong bảng khoa_hoc
        return view('admin.layouts.pages.listuser', compact('users')); // Trả về view với dữ liệu khóa học
    }

    
}
