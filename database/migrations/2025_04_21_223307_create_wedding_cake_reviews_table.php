<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('wedding_cakes_reviews', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('wedding_cake_id'); // Foreign key referencing wedding_cakes.Cake_id
            $table->unsignedBigInteger('user_id'); // Foreign key referencing users.id
            $table->text('cakes_reviews_comment'); // Review comment
            $table->integer('cakes_reviews_rating'); // Rating (e.g., 1 to 5)
            $table->timestamps();

            // Add foreign key constraints
            $table->foreign('wedding_cake_id')
                ->references('id')
                ->on('wedding_cakes')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('wedding_cakes_reviews');
    }
};
