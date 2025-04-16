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
        Schema::table('evening_enrollment', function (Blueprint $table) {
            $table->string('medical_issues')->after('learning_difficulties')->nullable();
            $table->string('medical_issues_file')->after('medical_issues')->nullable();
            $table->string('further_assistance')->after('medical_issues_file')->nullable();
            $table->string('pick_drop_person_name')->after('further_assistance')->nullable();
            $table->string('pick_drop_person_phone')->after('pick_drop_person_name')->nullable();
            $table->string('pick_drop_person_title')->after('pick_drop_person_phone')->nullable();
            $table->string('pick_drop_person_id')->after('pick_drop_person_title')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('evening_enrollment', function (Blueprint $table) {
            $table->dropColumn('medical_issues');
            $table->dropColumn('medical_issues_file');
            $table->dropColumn('further_assistance');
            $table->dropColumn('pick_drop_person_name');
            $table->dropColumn('pick_drop_person_phone');
            $table->dropColumn('pick_drop_person_title');
            $table->dropColumn('pick_drop_person_id');
        });
    }
};
