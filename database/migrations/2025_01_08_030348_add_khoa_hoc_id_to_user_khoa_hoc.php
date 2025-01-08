<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('user_khoa_hoc', function (Blueprint $table) {
            $table->unsignedBigInteger('khoa_hoc_id'); // Thêm lại cột khoa_hoc_id
            $table->foreign('khoa_hoc_id')->references('id')->on('khoa_hoc')->onDelete('cascade'); // Thiết lập khóa ngoại
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_khoa_hoc', function (Blueprint $table) {
            //
        });
    }
};
