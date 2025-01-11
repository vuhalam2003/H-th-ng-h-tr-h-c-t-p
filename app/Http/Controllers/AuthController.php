<?php

namespace App\Http\Controllers;

use App\Models\UserKhoaHoc;
use App\Models\KhoaHoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function userLog($id)
    {
        if (Auth::check()) {
            // dd(1);
            $user1 = Auth::user();
            if ($user1->role = 2) {
                $user = User::findOrFail($id); // Tìm khóa học theo ID
                return view('admin.layouts.pages.usertt', compact('user')); // Trả về form chỉnh sửa
            }
        }
        return redirect('/login');
        // Kiểm tra quyền role của người dùng 
    }
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


    public function update1(Request $request, $id)
    {
        // Validate dữ liệu
        $validated = $request->validate([
            'GPA' => 'nullable|numeric|min:0|max:4',
            // 'academic_year' => 'nullable|string|max:255',
            'coding_ability' => 'nullable|integer|min:1|max:5',
            'foreign_language' => 'nullable|integer|min:1|max:5',
            'communication' => 'nullable|integer|min:1|max:5',
            'desired_job' => 'nullable|string|max:255',
        ]);

        // Tìm người dùng theo ID
        $user = User::findOrFail($id);

        // Cập nhật thông tin người dùng
        $user->GPA = $request->input('GPA');
        // $user->academic_year = $request->input('academic_year');
        $user->coding_ability = $request->input('coding_ability');
        $user->foreign_language = $request->input('foreign_language');
        $user->communication = $request->input('communication');
        $user->desired_job = $request->input('desired_job');

        // Lưu thay đổi vào database
        $user->save();

        // Chuyển hướng với thông báo thành công
        return redirect()->route('user.id', $user->id)->with('success', 'Thông tin đã được cập nhật!');
    }

    public function list($id){
        $user = User::find($id);
        $khoaHocs = UserKhoaHoc::where('user_id', $user->id)->get();
        // dd($khoaHocs);
        return view('admin.layouts.pages.listdanghoc', compact('khoaHocs','user')); // Trả về view với dữ liệu khóa học
    }

    public function goi_yList($id){
        $user = User::find($id);
        $khoaHocs = UserKhoaHoc::where('user_id', $user->id)->where('goi_y', 1)->get();
        // dd($khoaHocs);
        return view('admin.layouts.pages.listdanghoc', compact('khoaHocs','user')); // Trả về view với dữ liệu khóa học
    }
}
