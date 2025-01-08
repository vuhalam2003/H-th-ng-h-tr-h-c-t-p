<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KhoaHoc extends Model
{
    // Sử dụng SoftDeletes để cho phép soft delete
    use SoftDeletes;

    // Xác định tên bảng (nếu khác với tên model)
    protected $table = 'khoa_hoc';

    // Các trường có thể mass assignable
    protected $fillable = [
        'ten',
        'anh',
        'duong_link_youtube',
        'noi_dung',
        'mo_ta',
        'ten_nguoi_tao',
        'nganh',
    ];
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_khoa_hoc');
    }

    // Các trường không cần được ghi lại trong timestamps
    protected $dates = ['deleted_at'];
}
