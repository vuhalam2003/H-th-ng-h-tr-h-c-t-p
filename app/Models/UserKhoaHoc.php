<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserKhoaHoc extends Model
{
    // Đặt tên bảng nếu không phải là dạng số nhiều của tên model (ở đây là 'user_khoa_hoc')
    protected $table = 'user_khoa_hoc';

    // Đảm bảo bạn khai báo các cột có thể mass-assigned nếu có
    protected $fillable = ['user_id', 'khoa_hoc_id'];
}
