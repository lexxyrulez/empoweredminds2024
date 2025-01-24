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
        $pdf = PDF::loadView('dashboard.enrollment.pdf', compact('data'))
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
        $pdf = PDF::loadView('dashboard.enrollment.pdftuition', compact('data'))
                    ->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        
        return $pdf->download('enrollment_form_'.$data->student_name.'.pdf');
    }
}
