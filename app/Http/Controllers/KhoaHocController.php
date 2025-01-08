<?php

namespace App\Http\Controllers;

use App\Models\UserKhoaHoc;
use App\Models\KhoaHoc;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class KhoaHocController extends Controller
{
    public function thamGia(KhoaHoc $khoaHoc)

    {
        // dd(1);
        // Kiểm tra người dùng đã đăng nhập
        if (Auth::check()) {
            // Lấy người dùng hiện tại
            $user = Auth::user();
            if ($user->role == 2) {

            // Lấy id của user và id của khóa học
            $userId = $user->id;
            $khoaHocId = $khoaHoc->id;

            // Thêm khóa học vào nơi học của người dùng
            // Giả sử bạn đã tạo mối quan hệ many-to-many trong model User
            if (!$user->khoaHocs()->where('khoa_hoc_id', $khoaHoc->id)->exists()) {
                $user->khoaHocs()->attach($khoaHoc->id, [
                    'created_at' => now(), // Thêm thời gian tạo
                    'updated_at' => now()  // Thêm thời gian cập nhật
                ]);
            }

            $videos = $this->getPlaylistVideos($khoaHocId);
            // dd($videos);

            $khoaHocs = KhoaHoc::find($khoaHocId);

        return view('user.layouts.pages.playlist', compact('videos', 'khoaHocs'));
            }
            else {
                // Nếu role không phải là 2, có thể chuyển hướng đến trang khác
                return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để tham gia khóa học.');
            }

        }

        return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để tham gia khóa học.');
    }
    function getPlaylistIdFromUrl($url)
    {
        // Kiểm tra xem URL có chứa tham số `list` trong query string
        if (preg_match("/(?:https?:\/\/)?(?:www\.)?youtube\.com\/(?:watch\?v=[\w-]+&list=|playlist\?list=)([a-zA-Z0-9_-]+)/", $url, $matches)) {
            // Nếu tìm thấy, trả về ID của playlist
            return $matches[1];
        }

        // Nếu không có `list=`, trả về null
        return null;
    }




    public function getPlaylistVideos($playlistId)
    {
        // dd($playlistId);
        $videos = KhoaHoc::find($playlistId);
        $link = $videos->duong_link_youtube;
        // dd($link);
        $playlistId1 = $this->getPlaylistIdFromUrl($link);
        // dd($playlistId1);
        // $apiKey =$this->getPlaylistIdFromUrl($link);
        // $apiKey = env('YOUTUBE_API_KEY');  // Sử dụng .env nếu cần
        $apiKey = "AIzaSyBXrS3a5v6DDXNaaCDRFkUN422W7h7Xnh8";  // Đặt API key ở đây
        $url = "https://www.googleapis.com/youtube/v3/playlistItems";
        $videos = [];
        $nextPageToken = null;

        // Kiểm tra xem API Key có tồn tại không
        if (!$apiKey) {
            return response()->json(['error' => 'API Key is missing'], 400);
        }

        do {
            // Gửi yêu cầu đến API YouTube
            $response = Http::get($url, [
                'part' => 'snippet',
                'playlistId' => $playlistId1,
                'maxResults' => 50, // Số lượng video tối đa mỗi lần gọi
                'key' => $apiKey,
                'pageToken' => $nextPageToken,
            ]);

            // Kiểm tra phản hồi API
            if ($response->successful()) {
                $data = $response->json(); // Chuyển dữ liệu API thành mảng
                $videos = array_merge($videos, $data['items']);
                $nextPageToken = $data['nextPageToken'] ?? null;
            } else {
                return ['error' => 'Unable to fetch data from YouTube API'];  // Trả về mảng lỗi thay vì JsonResponse
            }
        } while ($nextPageToken);

        return $videos; // Trả về mảng videos, không phải JsonResponse
    }





    // Hiển thị danh sách tất cả các khóa học
    public function index()
    {
        $khoaHocs = KhoaHoc::all(); // Lấy tất cả bản ghi trong bảng khoa_hoc
        return view('admin.layouts.pages.listkhoahoc', compact('khoaHocs')); // Trả về view với dữ liệu khóa học
    }

    public function show()
    {
        $khoaHocs = KhoaHoc::paginate(16);
        return view('user.layouts.pages.listkhoahoc', compact('khoaHocs')); // Trả về view với dữ liệu khóa học
    }
    public function showDetail($id)
    {
        $videos = $this->getPlaylistVideos($id);

        $khoaHocs = KhoaHoc::find($id);
        return view('user.layouts.pages.detailkhoahoc', compact('videos', 'khoaHocs'));
    }

    // Hiển thị form tạo mới khóa học
    public function create()
    {
        return view('admin.layouts.pages.khoahoc');
    }

    // Xử lý việc lưu dữ liệu khóa học mới vào cơ sở dữ liệu
    public function store(Request $request)
    {
        // Validate dữ liệu đầu vào
        try {
            // Validate dữ liệu đầu vào
            $validated = $request->validate([
                'ten' => 'required|string|max:255',
                'anh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Kiểm tra ảnh
                'duong_link_youtube' => 'nullable|url',
                'noi_dung' => 'nullable|string',
                'mo_ta' => 'nullable|string|max:500',
                'ten_nguoi_tao' => 'required|string|max:255',
                'nganh' => 'required|string|max:255'
            ]);

            // Xử lý ảnh nếu có
            if ($request->hasFile('anh')) {
                // Lưu ảnh vào thư mục "images" trong storage
                $imagePath = $request->file('anh')->store('images', 'public');
            } else {
                $imagePath = null;
            }

            // Tạo mới bản ghi khóa học
            KhoaHoc::create([
                'ten' => $validated['ten'],
                'anh' => $imagePath,  // Lưu đường dẫn ảnh
                'duong_link_youtube' => $validated['duong_link_youtube'],
                'noi_dung' => $validated['noi_dung'],
                'mo_ta' => $validated['mo_ta'],
                'ten_nguoi_tao' => $validated['ten_nguoi_tao'],
                'nganh' => $validated['nganh'],
            ]);

            // Chuyển hướng sau khi lưu thành công
            session()->flash('success', 'Khóa học đã được tạo thành công.');

            // Chuyển hướng đến trang tạo khóa học mới (route 'khoa-hoc.create')
            return redirect()->route('khoa_hoc.create');
        } catch (\Exception $e) {
            // Thêm thông báo lỗi nếu có vấn đề
            session()->flash('error', 'Đã xảy ra lỗi: ' . $e->getMessage());

            return redirect()->route('khoa_hoc.create');
        }
    }

    // Hiển thị form chỉnh sửa khóa học
    public function edit($id)
    {
        $khoaHoc = KhoaHoc::findOrFail($id); // Tìm khóa học theo ID
        return view('admin.layouts.pages.editkhoahoc', compact('khoaHoc')); // Trả về form chỉnh sửa
    }

    // Xử lý việc cập nhật thông tin khóa học
    public function update(Request $request, $id)
    {
        try { // Tìm khóa học cần cập nhật
            $khoaHoc = KhoaHoc::findOrFail($id);

            // Validate dữ liệu đầu vào
            $validated = $request->validate([
                'ten' => 'required|string|max:255',
                'anh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Kiểm tra ảnh
                'duong_link_youtube' => 'nullable|url',
                'noi_dung' => 'nullable|string',
                'mo_ta' => 'nullable|string|max:500',
                'ten_nguoi_tao' => 'required|string|max:255',
                'nganh' => 'required|string|max:255'
            ]);
            // dd($validated['mo_ta']);

            // Xử lý ảnh nếu có
            if ($request->hasFile('anh')) {
                // Xóa ảnh cũ nếu có
                if ($khoaHoc->anh) {
                    Storage::delete('public/' . $khoaHoc->anh);  // Xóa ảnh cũ trong storage
                }

                // Lưu ảnh mới vào thư mục "images" trong storage
                $imagePath = $request->file('anh')->store('images', 'public');
            } else {
                // Nếu không có ảnh mới, giữ nguyên ảnh cũ
                $imagePath = $khoaHoc->anh;
            }
            // dd($validated['nganh']);

            // Cập nhật thông tin khóa học
            $khoaHoc->update([
                'ten' => $validated['ten'],
                'anh' => $imagePath,  // Cập nhật đường dẫn ảnh
                'duong_link_youtube' => $validated['duong_link_youtube'],
                'noi_dung' => $validated['noi_dung'],
                'mo_ta' => $validated['mo_ta'],
                'ten_nguoi_tao' => $validated['ten_nguoi_tao'],
                'nganh' => $validated['nganh'],
            ]);

            // Chuyển hướng sau khi cập nhật thành công
            session()->flash('success', 'Khóa học đã được tạo thành công.');

            // Chuyển hướng đến trang tạo khóa học mới (route 'khoa-hoc.create')
            return redirect()->route('khoa_hoc.edit', ['khoaHoc' => $khoaHoc->id]);
        } catch (\Exception $e) {
            // Thêm thông báo lỗi nếu có vấn đề
            session()->flash('error', 'Đã xảy ra lỗi: ' . $e->getMessage());

            return redirect()->route('khoa_hoc.edit', ['khoaHoc' => $id]);
        }
    }


    // Xử lý việc xóa mềm (soft delete) khóa học
    public function destroy($id)
    {
        $khoaHoc = KhoaHoc::findOrFail($id);
        $khoaHoc->delete(); // Xóa mềm (soft delete)

        return redirect()->route('khoa_hoc.index')->with('success', 'Khóa học đã được xóa.');
    }

    // Xử lý việc khôi phục khóa học bị xóa mềm
    public function restore($id)
    {
        $khoaHoc = KhoaHoc::withTrashed()->findOrFail($id); // Tìm khóa học đã bị xóa mềm
        $khoaHoc->restore(); // Khôi phục khóa học

        return redirect()->route('khoa_hoc.index')->with('success', 'Khóa học đã được khôi phục.');
    }

    // Hiển thị tất cả khóa học đã xóa mềm
    public function trashed()
    {
        $khoaHocs = KhoaHoc::onlyTrashed()->get(); // Lấy tất cả bản ghi bị xóa mềm
        return view('khoa_hoc.trashed', compact('khoaHocs')); // Trả về view với dữ liệu khóa học đã xóa
    }

    public function DashBoard(){
        $totalKhoahoc = KhoaHoc::count();
        $totalUsers = User::where('role', 2)->count();
        $totalAdmin = User::where('role', 1)->count();
        $totalUserKhoaHoc = UserKhoaHoc::count();
    
        // Trả về view 'admin.layouts.pages.dashboard' và truyền dữ liệu
        return view('admin.layouts.pages.dashboard')->with([
            'totalKhoahoc' => $totalKhoahoc,
            'totalUsers' => $totalUsers,
            'totalAdmin' => $totalAdmin,
            'totalUserKhoaHoc' => $totalUserKhoaHoc,
            // 'success' => 'Khóa học đã được khôi phục.'
        ]);

    }

    public function search(Request $request)
{
    $query = KhoaHoc::query();

    // Tìm kiếm theo tên khóa học
    if ($request->has('ten') && !empty($request->input('ten'))) {
        $query->where('ten', 'like', '%' . $request->input('ten') . '%');
    }

    // Tìm kiếm theo tên ngành
    if ($request->has('nganh') && !empty($request->input('nganh'))) {
        $query->where('nganh', 'like', '%' . $request->input('nganh') . '%');
    }

    // Lấy tất cả khóa học thỏa mãn điều kiện
    // $khoaHocs = $query->get();
    $khoaHocs = $query->paginate(16);
    return view('user.layouts.pages.listkhoahoc', compact('khoaHocs')); // Trả về view với dữ liệu khóa học
}
}
