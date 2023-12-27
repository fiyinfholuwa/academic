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
        Schema::create('app_chats', function (Blueprint $table) {
            $table->id();
            $table->string('app_id', 100)->nullable();
            $table->text('message')->nullable();
            $table->string('user_type', 100)->nullable();
            $table->string('user_id', 100)->nullable();
            $table->string('counsellor_status', 100)->default('pending');
            $table->string('user_status', 100)->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_chats');
    }
};
