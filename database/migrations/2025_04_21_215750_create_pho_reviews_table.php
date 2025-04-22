<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pho_reviews', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('photography_id'); // Foreign key referencing photography.photography_id
            $table->unsignedBigInteger('user_id'); // Foreign key referencing users.id
            $table->text('pho_reviews_comment'); // Review comment
            $table->integer('pho_reviews_rating'); // Rating (e.g., 1 to 5)
            $table->timestamps();

            // Add foreign key constraints
            $table->foreign('photography_id')
                ->references('id')
                ->on('photography')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pho_reviews');
    }
};
