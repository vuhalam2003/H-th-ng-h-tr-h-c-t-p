<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhoaHocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khoa_hoc', function (Blueprint $table) {
            $table->id(); // Tạo trường id tự động tăng
            $table->string('ten')->nullable(); // Tên khóa học, cho phép null
            $table->string('anh')->nullable(); // Ảnh, cho phép null
            $table->string('duong_link_youtube')->nullable(); // Đường link youtube, cho phép null
            $table->text('noi_dung')->nullable(); // Nội dung khóa học, cho phép null
            $table->timestamps(); // Tạo created_at và updated_at
            $table->softDeletes(); // Tạo deleted_at cho soft delete
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khoa_hoc');
    }
}
