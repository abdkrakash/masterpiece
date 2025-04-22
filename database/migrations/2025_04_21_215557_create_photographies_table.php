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
        Schema::create('photography', function (Blueprint $table) {
            $table->id(); // Primary key (photography_id)
            $table->string('pho_name'); // Name of the photography service
            $table->text('pho_description')->nullable(); // Description of the photography service
            $table->decimal('pho_price', 8, 2)->nullable(); // Price (optional)
            $table->integer('pho_duration')->nullable(); // Duration in minutes or hours (optional)
            $table->string('pho_location')->nullable(); // Location of the photography service (optional)
            $table->boolean('pho_availability')->default(true); // Availability status
            $table->timestamps(); // Created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photographies');
    }
};
