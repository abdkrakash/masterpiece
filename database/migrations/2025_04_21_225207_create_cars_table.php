<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id(); // Cars_id
            $table->string('Cars_name'); // Cars_name
            $table->text('Cars_description')->nullable(); // Cars_description
            $table->string('Car_model'); // Car_model
            $table->decimal('Cars_price', 8, 2)->nullable(); // Cars_price
            $table->string('Car_color')->nullable(); // Car_color
            $table->integer('Car_rental_duration')->nullable(); // Car_rental_duration
            $table->boolean('Car_availability')->default(true); // Car_availability
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
