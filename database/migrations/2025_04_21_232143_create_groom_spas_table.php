<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('groom_spa', function (Blueprint $table) {
            $table->id(); // Primary key (spa_id)
            $table->string('spa_name'); // spa_name
            $table->text('spa_description')->nullable(); // spa_description
            $table->decimal('spa_price', 8, 2)->nullable(); // spa_price
            $table->integer('spa_duration')->nullable(); // spa_duration
            $table->text('spa_services_provided')->nullable(); // spa_services_provided
            $table->boolean('spa_availability')->default(true); // spa_availability
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('groom_spa');
    }
};
