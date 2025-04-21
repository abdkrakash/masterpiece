<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('image_path')->nullable(); // Path to the image file
            $table->enum('role', ['admin', 'customer'])->default('customer'); // دور المستخدم
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */

        public function down(): void
        {
            Schema::disableForeignKeyConstraints(); // تعطيل قيود المفاتيح الخارجية
            Schema::dropIfExists('users'); // حذف الجدول
            Schema::enableForeignKeyConstraints(); // إعادة تمكين قيود المفاتيح الخارجية
        }
};
