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
        Schema::table('users', function (Blueprint $table) {
            $table->decimal('GPA', 3, 2)->nullable(); // GPA, cho phép null
            $table->string('academic_year')->nullable(); // Năm học
            $table->integer('coding_ability')->nullable()->default(1); // Khả năng code, từ 1 đến 5
            $table->integer('foreign_language')->nullable()->default(1); // Ngoại ngữ, từ 1 đến 5
            $table->integer('communication')->nullable()->default(1); // Giao tiếp, từ 1 đến 5
            $table->string('desired_job')->nullable(); // Công việc mong muốn
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('GPA');
            $table->dropColumn('academic_year');
            $table->dropColumn('coding_ability');
            $table->dropColumn('foreign_language');
            $table->dropColumn('communication');
            $table->dropColumn('desired_job');
        });
    }
};
