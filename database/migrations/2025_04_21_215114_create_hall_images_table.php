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
        Schema::create('hall_images', function (Blueprint $table) {
            $table->id(); // Primary key (image_path_id)
            $table->unsignedBigInteger('hall_id'); // Foreign key referencing wedding_halls.hall_id
            $table->string('image_path'); // Path to the image file
            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('hall_id')
                ->references('id')
                ->on('wedding_halls')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hall_images');
    }
};
