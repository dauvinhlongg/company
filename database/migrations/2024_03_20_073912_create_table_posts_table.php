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
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // Khóa chính tự động tăng
            $table->string('title');
            $table->boolean('is_active')->default(true); // Giá trị mặc định là true
            $table->string('slide_url');
            $table->text('content');
            $table->timestamps(); // Thêm trường created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
