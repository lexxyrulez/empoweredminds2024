@extends('dashboard.app')
@include('dashboard.partials.navbar')
@include('dashboard.partials.sidebar')
@section('content')
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Enrollment</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Enrollment</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Print Button -->
                <div class="col-lg-12 text-right mb-3">
                    <button id="printButton" class="btn btn-primary">
                        <a href="{{ route('admin.enrollment.tuition.download', $data->id) }}" class="btn btn-primary">
                            <i class="fa fa-download"></i> Download Form
                        </a>
                    </button>
                </div>
                <!-- Start Page Content -->
                <div class="row card" id="printSection">
                    <!-- Row 1: Student Information -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Enrolment Form - Student Information</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Student Name</label>
                                                    <input disabled type="text" name="student_name" class="form-control"
                                                        placeholder="Student Name" value="{{ $data->student_name ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Date of Birth</label>
                                                    <input disabled type="text" name="student_dob" class="form-control"
                                                        value="{{ Carbon\Carbon::parse($data->student_dob)->format('d/m/Y') ?? '' }}">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Date of Birth</label>
                                                    <input disabled type="text" name="student_name" class="form-control"
                                                        placeholder="Student Name" value="{{ $data->student_gender ?? '' }}">
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Nationality</label>
                                                    <input disabled type="text" name="student_nationality"
                                                        class="form-control" placeholder="Nationality"
                                                        value="{{ $data->student_nationality ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Student Grade/Level</label>
                                                    <input disabled type="text" name="student_level" class="form-control"
                                                        placeholder="Student Level"
                                                        value="{{ $data->student_level ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Student Grade/Level</label>
                                                    <input disabled type="text" name="student_level" class="form-control"
                                                        placeholder="School Name"
                                                        value="{{ $data->school_name ?? '' }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>School Curriculum</label>
                                                    <input disabled type="text" name="siblings" class="form-control"
                                                        placeholder="School Curriculum" value="{{ $data->school_curriculum ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Preferred Tutoring Schedule</label>
                                                    <input 
                                                        disabled 
                                                        type="text" 
                                                        name="tutoring_schedule" 
                                                        class="form-control" 
                                                        placeholder="Preferred Tutoring Schedule" 
                                                        value="{{ implode(', ', json_decode($data->tutoring_schedule)) }}">
                                                </div>
                                            </div>                                            
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Weekly Sessions</label>
                                                    <input disabled type="text" name="siblings_names"
                                                        class="form-control" placeholder="Weekly Sessions"
                                                        value="{{ $data->weekly_sessions ?? '' }}">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Row 2: Parent/Guardian Information -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Enrolment Form - Parent/Guardian Information</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Parent Name</label>
                                                    <input disabled type="text" name="parent_name" class="form-control"
                                                        placeholder="Parent Name" value="{{ $data->parent1_name ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Parent Relationship</label>
                                                    <input disabled type="text" name="student_relationship"
                                                        class="form-control" placeholder="Relationship"
                                                        value="{{ $data->parent1_relationship ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Parent Phone Number</label>
                                                    <input disabled type="tel" name="parent_phonenumber"
                                                        class="form-control" placeholder="Phone Number"
                                                        value="{{ $data->parent1_phone ?? '' }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Parent Email</label>
                                                    <input disabled type="email" name="parent_email"
                                                        class="form-control" placeholder="Parent Email"
                                                        value="{{ $data->parent1_email ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Parent Occupation</label>
                                                    <input disabled type="text" name="parent_occupation"
                                                        class="form-control" placeholder="Occupation"
                                                        value="{{ $data->parent1_occupation ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Parent Identification Attachment</label>
                                                    @if (!empty($data->parent1_id))
                                                        <p>Current File: <a href="{{ asset('/storage/uploads/'.$data->parent1_id) }}"
                                                                target="_blank">View</a></p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Row 3: Tutoring Information -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Enrolment Form - Tutoring Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Subjects for Tutoring</label>
                                                    <input 
                                                        disabled 
                                                        type="text" 
                                                        name="tutoring_schedule" 
                                                        class="form-control" 
                                                        placeholder="Subjects for Tutoring" 
                                                        value="{{ implode(', ', json_decode($data->subjects)) }}">
                                                </div>
                                            </div>  
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Learning challenges</label>
                                                    <input disabled type="text" name="previous_school_address"
                                                        class="form-control" placeholder="Previous School Address"
                                                        value="{{ $data->learning_difficulties ?? '' }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Medical Issues</label>
                                                    <input 
                                                        disabled 
                                                        type="text" 
                                                        name="medical_issues" 
                                                        class="form-control" 
                                                        placeholder="Medical Issues" 
                                                        value="{{ $data->medical_issues ?? '' }}">
                                                </div>
                                            </div>  
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Medical Issues File</label>
                                                    @if (!empty($data->medical_issues_file))
                                                        <p>Current File: <a href="{{ asset('/storage/uploads/'.$data->medical_issues_file) }}"
                                                                target="_blank">View</a></p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Further Assistance</label>
                                                    <input disabled type="text" name="further_assistance"
                                                        class="form-control" placeholder="Further Assistance"
                                                        value="{{ $data->further_assistance ?? '' }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Person Responsible for Pick and Drop Name</label>
                                                    <input 
                                                        disabled 
                                                        type="text" 
                                                        name="pick_drop_person_name" 
                                                        class="form-control" 
                                                        placeholder="Medical Issues" 
                                                        value="{{ $data->pick_drop_person_name ?? '' }}">
                                                </div>
                                            </div>  
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Person Responsible for Pick and Drop Phone</label>
                                                    <input 
                                                        disabled 
                                                        type="text" 
                                                        name="pick_drop_person_phone" 
                                                        class="form-control" 
                                                        placeholder="Medical Issues" 
                                                        value="{{ $data->pick_drop_person_phone ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Person Responsible for Pick and Drop Title</label>
                                                    <input disabled type="text" name="pick_drop_person_title"
                                                        class="form-control" placeholder="Further Assistance"
                                                        value="{{ $data->pick_drop_person_title ?? '' }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Person Responsible for Pick and Drop File</label>
                                                @if (!empty($data->medical_issues_file))
                                                    <p>Current File: <a href="{{ asset('/storage/uploads/'.$data->pick_drop_person_id) }}"
                                                            target="_blank">View</a></p>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- JavaScript for Printing -->
@endsection
