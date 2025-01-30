<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Models\TuitionEnrollment;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Carbon\Carbon;


class PageController extends Controller
{
    /**
     * Show the About Us page.
     */
    public function about()
    {
        return view('about'); // Points to resources/views/about.blade.php
    }

    /**
     * Show the Our Services page.
     */
    public function services()
    {
        return view('services'); // Points to resources/views/services.blade.php
    }

    /**
     * Show the Contact Us page.
     */
    public function contact()
    {
        return view('contact'); // Points to resources/views/contact.blade.php
    }

    public function news()
    {
        return view('newsandevents'); // Points to resources/views/contact.blade.php
    }


    public function newsdetails()
    {
        return view('news-details'); // Points to resources/views/contact.blade.php
    }

    
    public function enroll()
    {
        return view('enroll'); // Points to resources/views/contact.blade.php
    }


    public function enroll_morning()
    {
        return view('enroll_morning'); // Points to resources/views/contact.blade.php
    }

    public function enroll_tuition()
    {
        return view('enroll_tuition'); // Points to resources/views/contact.blade.php
    }

    public function feedback()
    {
        return view('feedback'); // Points to resources/views/contact.blade.php
    }
    
    public function enrollSubmit(Request $request){

        $birth_certificate_filename = '';
        if ($request->hasFile('birth_certificate')) {
            $birth_certificate_file = $request->file('birth_certificate');
            
            // Generate a unique filename
            $birth_certificate_filename = time() . '-' . $birth_certificate_file->getClientOriginalName();
            
            // Store the file in 'uploads' folder inside 'storage/app/public'
            $birth_certificate_path = $birth_certificate_file->storeAs('uploads', $birth_certificate_filename, 'public');
        }

        $parent1_id_filename = '';
        if ($request->hasFile('parent1_id')) {
            $parent1_id_file = $request->file('parent1_id');
            
            // Generate a unique filename
            $parent1_id_filename = time() . '-' . $parent1_id_file->getClientOriginalName();
            
            // Store the file in 'uploads' folder inside 'storage/app/public'
            $parent1_id_path = $parent1_id_file->storeAs('uploads', $parent1_id_filename, 'public');
        }

        $parent2_id_filename = '';
        if ($request->hasFile('parent2_id')) {
            $parent2_id_file = $request->file('parent2_id');
            
            // Generate a unique filename
            $parent2_id_filename = time() . '-' . $parent2_id_file->getClientOriginalName();
            
            // Store the file in 'uploads' folder inside 'storage/app/public'
            $parent2_id_path = $parent2_id_file->storeAs('uploads', $parent2_id_filename, 'public');
        }

        $school_records_attachments = [];
        if ($request->hasFile('school_records')) {
            foreach ($request->file('school_records') as $file) {
                $filename = time() . '-' . $file->getClientOriginalName();
                $path = $file->storeAs('uploads', $filename, 'public');
                $school_records_attachments[] = $filename;
            }
        }

        $learning_difficulties_filename = '';
        if ($request->hasFile('learning_difficulties_file')) {
            $learning_difficulties_file = $request->file('learning_difficulties_file');
            
            // Generate a unique filename
            $learning_difficulties_filename = time() . '-' . $learning_difficulties_file->getClientOriginalName();
            
            // Store the file in 'uploads' folder inside 'storage/app/public'
            $learning_difficulties_file_path = $learning_difficulties_file->storeAs('uploads', $learning_difficulties_filename, 'public');
        }

        $immunization_filename = '';
        if ($request->hasFile('immunization_file')) {
            $immunization_file = $request->file('immunization_file');
            
            // Generate a unique filename
            $immunization_filename = time() . '-' . $immunization_file->getClientOriginalName();
            
            // Store the file in 'uploads' folder inside 'storage/app/public'
            $immunization_file_path = $immunization_file->storeAs('uploads', $immunization_filename, 'public');
        }


        $enrollment = new Enrollment();
        $enrollment->student_email = $request->student_email;
        $enrollment->student_name = $request->student_fullname;
        $enrollment->student_dob = Carbon::parse($request->dob)->format('Y-m-d');
        $enrollment->student_gender = $request->gender;
        $enrollment->student_nationality = $request->nationality;
        $enrollment->student_attachment = $birth_certificate_filename;
        $enrollment->student_level = $request->grade;
        $enrollment->start_date = Carbon::parse($request->start_date)->format('Y-m-d');
        $enrollment->siblings = $request->siblings;
        $enrollment->siblings_names = $request->sibling_names;
        $enrollment->parent_name = $request->parent1_name;
        $enrollment->student_relationship = $request->parent1_relationship;
        $enrollment->parent_phonenumber = $request->parent1_phone;
        $enrollment->parent_email = $request->parent1_email;
        $enrollment->parent_occupation = $request->parent1_occupation;
        $enrollment->parent_attachment = $parent1_id_filename;
        $enrollment->second_parent_name = $request->parent2_name;
        $enrollment->student_second_relationship = $request->parent2_relationship;
        $enrollment->second_parent_phonenumber = $request->parent2_phone;
        $enrollment->second_parent_email = $request->parent2_email;
        $enrollment->second_parent_occupation = $request->parent2_occupation;
        $enrollment->second_parent_attachment = $parent2_id_filename;
        $enrollment->previous_school = $request->prev_school_name;
        $enrollment->previous_school_address = $request->prev_school_address;
        $enrollment->last_grade_completed = $request->last_grade;
        $enrollment->reasons = $request->reason_leaving;
        $enrollment->previous_school_attachments = json_encode($school_records_attachments);
        $enrollment->special_needs = $request->learning_difficulties;
        $enrollment->special_needs_details = $request->learning_difficulties_details;
        $enrollment->special_needs_attachments = $learning_difficulties_filename;
        $enrollment->medical_conditions = $request->medical_conditions;
        $enrollment->medical_conditions_details = $request->medical_conditions_details;
        $enrollment->medication = $request->regular_medication;
        $enrollment->medication_details = $request->regular_medication_details;
        $enrollment->immunizations = $request->immunizations;
        $enrollment->immunizations_details = $request->immunizations_details;
        $enrollment->immunizations_attachments = $immunization_filename;
        $enrollment->permissions_minor_injuries = $request->first_aid;
        $enrollment->permissions_medical_attention = $request->emergency_medical;
        $enrollment->curriculum = $request->curriculum;
        $enrollment->curriculum_details = $request->academic_focus;
        $enrollment->emergency_contact = $request->emergency_contact_names;
        $enrollment->emergency_contact_relationship = $request->emergency_relationship;
        $enrollment->emergency_contact_contact = $request->emergency_phone;
        $enrollment->save();

        return redirect()->route('feedback');
        
    }

    public function enrollTuitionSubmit(Request $request){

        $parent1_id_filename = '';
        if ($request->hasFile('parent1_id')) {
            $parent1_id_file = $request->file('parent1_id');
            
            // Generate a unique filename
            $parent1_id_filename = time() . '-' . $parent1_id_file->getClientOriginalName();
            
            // Store the file in 'uploads' folder inside 'storage/app/public'
            $parent1_id_path = $parent1_id_file->storeAs('uploads', $parent1_id_filename, 'public');
        }

        $medical_issues_filename = '';
        if ($request->hasFile('medical_issues_file')) {
            $medical_issues_file = $request->file('medical_issues_file');
            
            // Generate a unique filename
            $medical_issues_filename = time() . '-' . $medical_issues_file->getClientOriginalName();
            
            // Store the file in 'uploads' folder inside 'storage/app/public'
            $medical_issues_file_path = $medical_issues_file->storeAs('uploads', $medical_issues_filename, 'public');
        }

        $pick_drop_person_id_filename = '';
        if ($request->hasFile('pick_drop_person_id')) {
            $pick_drop_person_id = $request->file('pick_drop_person_id');
            
            // Generate a unique filename
            $pick_drop_person_id_filename = time() . '-' . $pick_drop_person_id->getClientOriginalName();
            
            // Store the file in 'uploads' folder inside 'storage/app/public'
            $pick_drop_person_id_path = $pick_drop_person_id->storeAs('uploads', $pick_drop_person_id_filename, 'public');
        }

        $enrollment = new TuitionEnrollment();
        $enrollment->student_name = $request->student_name;
        $enrollment->student_dob = Carbon::parse($request->student_dob)->format('Y-m-d');
        $enrollment->student_gender = $request->student_gender;
        $enrollment->student_nationality = $request->student_nationality;
        $enrollment->student_level = $request->student_level;
        $enrollment->school_name = $request->school_name;
        $enrollment->school_curriculum = $request->school_curriculum;
        $enrollment->tutoring_schedule = json_encode($request->tutoring_schedule);
        $enrollment->weekly_sessions = $request->weekly_sessions;
        $enrollment->parent1_name = $request->parent1_name;
        $enrollment->parent1_relationship = $request->parent1_relationship;
        $enrollment->parent1_phone = $request->parent1_phone;
        $enrollment->parent1_email = $request->parent1_email;
        $enrollment->parent1_occupation = $request->parent1_occupation;
        $enrollment->parent1_id = $parent1_id_filename;
        $enrollment->subjects = json_encode($request->subjects);
        $enrollment->learning_difficulties = $request->learning_challenges;
        $enrollment->medical_issues = $request->medical_issues;
        $enrollment->medical_issues_file = $medical_issues_filename;
        $enrollment->further_assistance = $request->further_assistance;
        $enrollment->pick_drop_person_name = $request->pick_drop_person_name;
        $enrollment->pick_drop_person_phone = $request->pick_drop_person_phone;
        $enrollment->pick_drop_person_title = $request->pick_drop_person_title;
        $enrollment->pick_drop_person_id = $pick_drop_person_id_filename;
        $enrollment->save();

        return redirect()->route('feedback');
        
    }


    
}
