<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bridal_groom_attire', function (Blueprint $table) {
            $table->id(); // bga_id
            $table->string('bga_name'); // bga_name
            $table->text('bga_description')->nullable(); // bga_description
            $table->decimal('bga_price', 8, 2)->nullable(); // bga_price
            $table->string('bga_size')->nullable(); // bga_size
            $table->string('bga_color')->nullable(); // bga_color
            $table->boolean('bga_availability')->default(true); // bga_availability
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bridal_groom_attire');
    }
};
