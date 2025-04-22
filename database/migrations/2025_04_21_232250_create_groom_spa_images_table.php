<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('groom_spa_images', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('id_groom_spa'); // Foreign key referencing groom_spa.spa_id
            $table->string('image_path'); // Path to the image file
            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('id_groom_spa')
                ->references('id')
                ->on('groom_spa')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('groom_spa_images');
    }
};
