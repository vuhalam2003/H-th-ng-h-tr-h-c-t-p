<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;



class UserController extends Controller
{
    public function update(Request $request, $id)
    {
        // Xử lý cập nhật thông tin user
        $validatedData = $request->validate([
            'GPA' => 'nullable|numeric',
            'coding_ability' => 'nullable|integer|min:1|max:5',
            'foreign_language' => 'nullable|integer|min:1|max:5',
            'communication' => 'nullable|integer|min:1|max:5',
            'desired_job' => 'required|string|max:255',
        ]);

        // Xóa các bản ghi cũ của user trong bảng `user_khoa_hoc`
        DB::table('user_khoa_hoc')->where('user_id', $id)->delete();

        // Cập nhật bảng `users`
        DB::table('users')->where('id', $id)->update([
            'GPA' => $validatedData['GPA'] ?? null,
            'coding_ability' => $validatedData['coding_ability'] ?? null,
            'foreign_language' => $validatedData['foreign_language'] ?? null,
            'communication' => $validatedData['communication'] ?? null,
            'desired_job' => $validatedData['desired_job'],
            'updated_at' => now(),
        ]);

        $recommendedCourses = null; // Biến lưu khóa học được gợi ý

        try {
            // Gọi service để gợi ý khóa học
            $response = Http::timeout(5)->post('http://127.0.0.1:5000/recommend_courses', [
                'user_id' => $id,
                'desired_job' => $validatedData['desired_job'],
            ]);

            if ($response->successful()) {
                // Truy vấn bảng `user_khoa_hoc` để lấy danh sách khóa học được gợi ý
                $recommendedCourses = DB::table('user_khoa_hoc')
                    ->join('khoa_hoc', 'user_khoa_hoc.khoa_hoc_id', '=', 'khoa_hoc.id')
                    ->where('user_khoa_hoc.user_id', $id)
                    ->where('user_khoa_hoc.goi_y', 1)
                    ->select('khoa_hoc.id', 'khoa_hoc.ten') // Lấy đúng cột tên khóa học
                    ->get();
            }
        } catch (\Exception $e) {
            // Ghi log hoặc xử lý ngoại lệ khi không thể kết nối đến service
            Log::error('Không thể kết nối đến service gợi ý: ' . $e->getMessage());
        }

        if ($recommendedCourses) {
            return redirect()->back()->with([
                'success' => 'Cập nhật thành công và gợi ý khóa học!',
                'recommended_courses' => $recommendedCourses,
            ]);
        } else {
            return redirect()->back()->with('success', 'Cập nhật thành công nhưng không thể gợi ý khóa học.');
        }
    }

    
}
