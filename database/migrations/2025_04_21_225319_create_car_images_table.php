<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cars_images', function (Blueprint $table)
        {
            $table->id(); // Primary key
            $table->unsignedBigInteger('Cars_id'); // Foreign key referencing cars.Cars_id
            $table->string('images_path'); // Path to the image file
            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('Cars_id')
                ->references('id')
                ->on('cars')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars_images');
    }
};
