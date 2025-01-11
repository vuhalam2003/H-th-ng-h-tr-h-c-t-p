<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KhoaHocController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/tham-gia/{khoaHoc}', [KhoaHocController::class, 'thamGia'])->name('khoa_hoc.tham_gia');
Route::get('/test', function () {
    return view('user.layouts.pages.detailkhoahoc');
});

Route::get('/test', function () {
    return view('user.layouts.pages.detailkhoahoc');
});

Route::get('/', [KhoaHocController::class, 'show'])->name('khoa_hoc.show');
Route::get('/showDetail/{khoaHoc}', [KhoaHocController::class, 'showDetail'])->name('khoa_hoc.detail');
// Route::get('/khoa-hoc1', function () {
//     return view('admin.layouts.pages.khoahoc');
// });

Route::get('/search', [KhoaHocController::class, 'search'])->name('searchKhoaHoc');
Route::get('/playlist/{playlistId}', [KhoaHocController::class, 'getPlaylistVideos1']);
Route::get('/user/{id}', [AuthController::class, 'userLog'])->name('user.id');
Route::get('/playlist/{playlistId}/{id}', [KhoaHocController::class, 'getPlaylistVideos2'])->name('open.list');
Route::post('/user/update1/{id}', [AuthController::class, 'update1'])->name('user.update1');

Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');

Route::get('/user/list/{id}', [AuthController::class, 'List'])->name('user.list');
Route::get('/user/goi_y/{id}', [AuthController::class, 'goi_yList'])->name('user.goi_y');




// Route dashboard chỉ dành cho admin
Route::middleware(['admin'])->group(function () {
    
    // Route::get('/db', function () {
    //     return view('admin.layouts.pages.dashboard')->name('db');
    // });
    Route::get('/db', [KhoaHocController::class, 'DashBoard'])->name('db');
    Route::prefix('user')->name('user.')->group(function () {
        // Hiển thị danh sách khóa học
        Route::get('/', [AuthController::class, 'index'])->name('index');
    });
    // Các route liên quan đến khóa học
    Route::prefix('khoa-hoc')->name('khoa_hoc.')->group(function () {
        // Hiển thị danh sách khóa học
        Route::get('/', [KhoaHocController::class, 'index'])->name('index');

        // Tạo khóa học mới
        Route::get('/create', [KhoaHocController::class, 'create'])->name('create');

        // Lưu khóa học mới
        Route::post('/', [KhoaHocController::class, 'store'])->name('store');

        // Hiển thị form chỉnh sửa khóa học
        Route::get('/{khoaHoc}/edit', [KhoaHocController::class, 'edit'])->name('edit');

        // Cập nhật thông tin khóa học
        Route::put('/{khoaHoc}', [KhoaHocController::class, 'update'])->name('update');

        // Xóa khóa học
        Route::delete('/{khoaHoc}', [KhoaHocController::class, 'destroy'])->name('destroy');
    });
});
