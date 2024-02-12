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
        Schema::create('new_applications', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 255)->nullable();
            $table->string('app_uid', 200)->nullable();
            $table->string('email', 200)->nullable();
            $table->string('mobile', 100)->nullable();
            $table->string('dob', 100)->nullable();
            $table->string('course', 255)->nullable();
            $table->string('country', 255)->nullable();
            $table->string('year', 100)->nullable();
            $table->text('gre_score')->nullable();
            $table->text('previous_work', 100)->nullable();
            $table->text('certification', 100)->nullable();
            $table->text('extra_curriculum')->nullable();
            $table->text('certificate')->nullable();
            $table->text('recommendation')->nullable();
            $table->text('mark_sheet_11_12')->nullable();
            $table->text('mark_sheet_10')->nullable();
            $table->text('birth_certificate')->nullable();
            $table->text('passport')->nullable();
            $table->string('user_id', 100)->nullable();
            $table->string('assigned_id', 100)->nullable();
            $table->string('status', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_applications');
    }
};
