<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id')->constrained('users');
            $table->string('location');
            $table->string('poster_image')->nullable();
            $table->json('images')->nullable();
            $table->string('size');
            $table->decimal('price', 10, 2);
            $table->string('availability_status');
            $table->integer('number_of_rooms');
            $table->integer('number_of_toilets');
            $table->boolean('has_parking_space');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartments');
    }
};
