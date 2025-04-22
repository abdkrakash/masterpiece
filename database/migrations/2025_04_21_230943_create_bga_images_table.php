<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bga_images', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('bga_id'); // Foreign key referencing bridal_groom_attire.bga_id
            $table->string('image_path'); // Path to the image file
            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('bga_id')
                ->references('id')
                ->on('bridal_groom_attire')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('bga_images');
    }
};
