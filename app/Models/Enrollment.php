<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Enrollment extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $table = 'enrollment';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'student_email',
        'student_name',
        'student_dob',
        'student_gender',
        'student_nationality',
        'student_attachment',
        'student_level',
        'start_date',
        'siblings',
        'siblings_names',
        'parent_name',
        'student_relationship',
        'parent_phonenumber',
        'parent_email',
        'parent_occupation',
        'parent_attachment',
        'second_parent_name',
        'student_second_relationship',
        'second_parent_phonenumber',
        'second_parent_email',
        'second_parent_occupation',
        'second_parent_attachment',
        'previous_school',
        'previous_school_address',
        'last_grade_completed',
        'reasons',
        'previous_school_attachments',
        'special_needs',
        'special_needs_details',
        'special_needs_attachments',
        'medical_conditions',
        'medical_conditions_details',
        'medication',
        'medication_details',
        'immunizations',
        'immunizations_details',
        'immunizations_attachments',
        'permissions_minor_injuries',
        'permissions_medical_attention',
        'curriculum',
        'curriculum_details',
        'emergency_contact',
        'emergency_contact_relationship',
        'emergency_contact_contact',
    ];
}
