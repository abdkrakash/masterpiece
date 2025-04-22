<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('groom_spa_reviews', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('id_groom_spa'); // Foreign key referencing groom_spa.spa_id
            $table->unsignedBigInteger('users_id'); // Foreign key referencing users.id
            $table->text('spa_reviews_comment'); // Review comment
            $table->integer('spa_reviews_rating'); // Rating (e.g., 1 to 5)
            $table->timestamps();

            // Add foreign key constraints
            $table->foreign('id_groom_spa')
                ->references('id')
                ->on('groom_spa')
                ->onDelete('cascade');

            $table->foreign('users_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('groom_spa_reviews');
    }
};
