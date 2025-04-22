<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('wedding_cakes', function (Blueprint $table) {
            $table->id(); // Cake_id
            $table->string('cake_name'); // Cake_name
            $table->text('cake_description')->nullable(); // Cake_description
            $table->decimal('cake_price', 8, 2)->nullable(); // Cake_price
            $table->integer('cake_servings')->nullable(); // Cake_Servings
            $table->string('cake_flavor')->nullable(); // Cake_flavor
            $table->string('cake_size')->nullable(); // Cake_size
            $table->boolean('cake_availability')->default(true); // Cake_availability
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('wedding_cakes');
    }
};
