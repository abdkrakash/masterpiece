<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bga_reviews', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('bga_id'); // Foreign key referencing bridal_groom_attire.bga_id
            $table->unsignedBigInteger('users_id'); // Foreign key referencing users.id
            $table->text('bga_reviews_comment'); // Review comment
            $table->integer('bga_reviews_rating'); // Rating (e.g., 1 to 5)
            $table->timestamps();

            // Add foreign key constraints
            $table->foreign('bga_id')
                ->references('id')
                ->on('bridal_groom_attire')
                ->onDelete('cascade');

            $table->foreign('users_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('bga_reviews');
    }
};
