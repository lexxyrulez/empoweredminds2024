<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class TuitionEnrollment extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $table = 'evening_enrollment';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'student_name',
        'student_dob',
        'student_gender',
        'student_nationality',
        'student_level',
        'school_name',
        'school_curriculum',
        'tutoring_schedule',
        'weekly_sessions',
        'parent1_name',
        'parent1_relationship',
        'parent1_phone',
        'parent1_email',
        'parent1_occupation',
        'parent1_id',
        'subjects',
        'learning_difficulties',
        'medical_issues',
        'medical_issues_file',
        'further_assistance',
        'pick_drop_person_name',
        'pick_drop_person_phone',
        'pick_drop_person_title',
        'pick_drop_person_id'
    ];
}
