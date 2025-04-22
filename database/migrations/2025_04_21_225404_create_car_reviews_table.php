<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cars_reviews', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('Cars_id'); // Foreign key referencing cars.Cars_id
            $table->unsignedBigInteger('users_id'); // Foreign key referencing users.id
            $table->text('wedding_cars_reviews_comment'); // Review comment
            $table->integer('wedding_cars_reviews_rating'); // Rating (e.g., 1 to 5)
            $table->timestamps();

            // Add foreign key constraints
            $table->foreign('Cars_id')
                ->references('id')
                ->on('cars')
                ->onDelete('cascade');

            $table->foreign('users_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars_reviews');
    }
};
