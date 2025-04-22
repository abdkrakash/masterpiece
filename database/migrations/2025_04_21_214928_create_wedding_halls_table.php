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
        Schema::create('wedding_halls', function (Blueprint $table) {
            $table->id(); // Primary key (hall_id)
            $table->string('hall_name'); // Name of the wedding hall
            $table->string('hall_location'); // Location of the wedding hall
            $table->string('hall_phone_number')->nullable(); // Phone number (optional)
            $table->text('hall_description')->nullable(); // Description of the wedding hall
            $table->decimal('hall_price', 8, 2)->nullable(); // Price (optional)
            $table->integer('hall_capacity')->nullable(); // Capacity (optional)
            $table->boolean('hall_availability')->default(true); // Availability status
            $table->timestamps(); // Created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wedding_halls');
    }
};
