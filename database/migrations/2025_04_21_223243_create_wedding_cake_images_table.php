<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('wedding_cakes_images', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('Cake_id'); // Foreign key referencing wedding_cakes.Cake_id
            $table->string('image_path'); // Path to the image file
            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('Cake_id')
                ->references('id')
                ->on('wedding_cakes')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('wedding_cakes_images');
    }
};
