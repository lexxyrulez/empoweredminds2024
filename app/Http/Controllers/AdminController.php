<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;

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
}
