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
        Schema::create('enrollment', function (Blueprint $table) {
            $table->id();
            $table->string('student_email')->nullable();
            $table->string('student_name')->nullable();
            $table->datetime('student_dob')->nullable();
            $table->string('student_gender')->nullable();
            $table->string('student_nationality')->nullable();
            $table->string('student_attachment')->nullable();
            $table->string('student_level')->nullable();
            $table->datetime('start_date')->nullable();
            $table->string('siblings')->nullable();
            $table->string('siblings_names')->nullable();
            $table->string('parent_name')->nullable();
            $table->string('student_relationship')->nullable();
            $table->string('parent_phonenumber')->nullable();
            $table->string('parent_email')->nullable();
            $table->string('parent_occupation')->nullable();
            $table->string('parent_attachment')->nullable();
            $table->string('second_parent_name')->nullable();
            $table->string('student_second_relationship')->nullable();
            $table->string('second_parent_phonenumber')->nullable();
            $table->string('second_parent_email')->nullable();
            $table->string('second_parent_occupation')->nullable();
            $table->string('second_parent_attachment')->nullable();         
            $table->string('previous_school')->nullable();
            $table->string('previous_school_address')->nullable();
            $table->string('last_grade_completed')->nullable();
            $table->text('reasons')->nullable();
            $table->string('previous_school_attachments')->nullable();
            $table->string('special_needs')->nullable();
            $table->string('special_needs_details')->nullable();
            $table->string('special_needs_attachments')->nullable();
            $table->string('medical_conditions')->nullable();
            $table->string('medical_conditions_details')->nullable();
            $table->string('medication')->nullable();
            $table->string('medication_details')->nullable();
            $table->string('immunizations')->nullable();
            $table->string('immunizations_details')->nullable();
            $table->string('immunizations_attachments')->nullable();
            $table->string('permissions_minor_injuries')->nullable();
            $table->string('permissions_medical_attention')->nullable();
            $table->string('curriculum')->nullable();
            $table->string('curriculum_details')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('emergency_contact_relationship')->nullable();
            $table->string('emergency_contact_contact')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollment');
    }
};
