<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pho_images', function (Blueprint $table) {
            $table->id(); // Primary key (images_path_id)
            $table->unsignedBigInteger('photography_id'); // Foreign key referencing photography.photography_id
            $table->string('images_path'); // Path to the image file
            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('photography_id')
                ->references('id')
                ->on('photography')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pho_images');
    }
};
