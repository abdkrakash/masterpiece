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
        Schema::create('hall_reviews', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('hall_id'); // Foreign key referencing wedding_halls.hall_id
            $table->unsignedBigInteger('user_id'); // Foreign key referencing users.id
            $table->text('hall_reviews_comment'); // Review comment
            $table->integer('hall_reviews_rating'); // Rating (e.g., 1 to 5)
            $table->timestamps();

            // Add foreign key constraints
            $table->foreign('hall_id')
                ->references('id')
                ->on('wedding_halls')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hall_reviews');
    }
};
