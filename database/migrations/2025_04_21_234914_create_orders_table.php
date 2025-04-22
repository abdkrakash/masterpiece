<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Orders_id
            $table->decimal('total_price', 8, 2)->nullable(); // total_price
            $table->string('Orders_status'); // Orders_status
            $table->unsignedBigInteger('users_id'); // Foreign key referencing users.id
            $table->unsignedBigInteger('photography_id')->nullable(); // Foreign key referencing photography.photography_id
            $table->unsignedBigInteger('Cars_id')->nullable(); // Foreign key referencing cars.Cars_id
            $table->unsignedBigInteger('bga_id')->nullable(); // Foreign key referencing groom_spa.bga_id
            $table->unsignedBigInteger('hall_id')->nullable(); // Foreign key referencing groom_spa.bga_id
            $table->unsignedBigInteger('Cake_id')->nullable(); // Foreign key referencing groom_spa.bga_id
            $table->unsignedBigInteger('spa_id')->nullable(); // Foreign key referencing groom_spa.bga_id
            $table->timestamps();

            // Add foreign key constraints
            $table->foreign('users_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('photography_id')
                ->references('id')
                ->on('photography')
                ->onDelete('set null');

            $table->foreign('Cars_id')
                ->references('id')
                ->on('cars')
                ->onDelete('set null');

            $table->foreign('bga_id')
                ->references('id')
                ->on('groom_spa')
                ->onDelete('set null');

            $table->foreign('hall_id')
                ->references('id')
                ->on('wedding_halls')
                ->onDelete('set null');

            $table->foreign('Cake_id')
                ->references('id')
                ->on('wedding_cakes')
                ->onDelete('set null');

            $table->foreign('spa_id')
                ->references('id')
                ->on('groom_spa')
                ->onDelete('set null');


        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
