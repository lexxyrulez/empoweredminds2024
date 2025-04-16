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
        Schema::create('evening_enrollment', function (Blueprint $table) {
            $table->id();
            $table->string('student_name')->nullable();
            $table->datetime('student_dob')->nullable();
            $table->string('student_gender')->nullable();
            $table->string('student_nationality')->nullable();
            $table->string('student_level')->nullable();
            $table->string('school_name')->nullable();
            $table->string('school_curriculum')->nullable();
            $table->string('tutoring_schedule')->nullable();
            $table->string('weekly_sessions')->nullable();
            $table->string('parent1_name')->nullable();
            $table->string('parent1_relationship')->nullable();
            $table->string('parent1_phone')->nullable();
            $table->string('parent1_email')->nullable();
            $table->string('parent1_occupation')->nullable();
            $table->string('parent1_id')->nullable();
            $table->string('subjects')->nullable();
            $table->string('learning_difficulties')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evening_enrollment');
    }
};
