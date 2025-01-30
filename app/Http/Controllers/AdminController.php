<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Enrollment;
use App\Models\TuitionEnrollment;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function indexEnrollment(){
        $data = Enrollment::get();
        return view('dashboard.enrollment.index', compact('data'));
    }
    public function viewEnrollment($id){
        $data = Enrollment::find($id);
        return view('dashboard.enrollment.view', compact('data'));
    }
    public function downloadEnrollment($id) {
        $data = Enrollment::find($id);

        $studentFilePath = storage_path('app/public/uploads/'.$data->student_attachment);
        $studentFileBase64 = 'data:image/png;base64,' . base64_encode(file_get_contents($studentFilePath));

        $parent1FilePath = storage_path('app/public/uploads/'.$data->parent_attachment);
        $parent1FileBase64 = 'data:image/png;base64,' . base64_encode(file_get_contents($parent1FilePath));

        $parent2FilePath = storage_path('app/public/uploads/'.$data->second_parent_attachment);
        $parent2FileBase64 = 'data:image/png;base64,' . base64_encode(file_get_contents($parent2FilePath));

        $learningFilePath = storage_path('app/public/uploads/'.$data->special_needs_attachments);
        $learningFileBase64 = 'data:image/png;base64,' . base64_encode(file_get_contents($learningFilePath));

        $immunizationFilePath = storage_path('app/public/uploads/'.$data->immunizations_attachments);
        $immunizationFileBase64 = 'data:image/png;base64,' . base64_encode(file_get_contents($immunizationFilePath));

        $schoolFiles = json_decode($data->previous_school_attachments, true);
        $schoolFilesBase64 = [];

        foreach ($schoolFiles as $file) {
            $filePath = storage_path('app/public/uploads/' . $file);
            if (file_exists($filePath)) {
                $schoolFilesBase64[] = 'data:image/png;base64,' . base64_encode(file_get_contents($filePath));
            }
        }

        $pdf = PDF::loadView('dashboard.enrollment.pdf', compact('data', 'studentFileBase64', 'parent1FileBase64', 'parent2FileBase64', 'learningFileBase64', 'immunizationFileBase64', 'schoolFilesBase64'))
                    ->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        
        return $pdf->download('enrollment_form_'.$data->student_name.'.pdf');
    }

    public function indexTuitionEnrollment(){
        $data = TuitionEnrollment::get();
        return view('dashboard.tuition.index', compact('data'));
    }
    public function viewTuitionEnrollment($id){
        $data = TuitionEnrollment::find($id);
        return view('dashboard.tuition.view', compact('data'));
    }
    public function downloadTuitionEnrollment($id) {
        $data = TuitionEnrollment::find($id);
        $parentIdFilePath = storage_path('app/public/uploads/'.$data->parent1_id);
        $parentIdFileBase64 = 'data:image/png;base64,' . base64_encode(file_get_contents($parentIdFilePath));

        $medicalFilePath = storage_path('app/public/uploads/'.$data->medical_issues_file);
        $medicalFileBase64 = 'data:image/png;base64,' . base64_encode(file_get_contents($medicalFilePath));

        $personIdFilePath = storage_path('app/public/uploads/'.$data->pick_drop_person_id);
        $personIdFileBase64 = 'data:image/png;base64,' . base64_encode(file_get_contents($personIdFilePath));

        $pdf = PDF::loadView('dashboard.enrollment.pdftuition', compact('data', 'medicalFileBase64', 'parentIdFileBase64', 'personIdFileBase64'))
                    ->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        
        return $pdf->download('enrollment_form_'.$data->student_name.'.pdf');
    }
}   
