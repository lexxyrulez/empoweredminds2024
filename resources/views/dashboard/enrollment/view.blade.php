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
                <!-- Start Page Content -->
                <div class="row">
                    <!-- First Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-title">
                                <h4>Enrolment Form - Student Information</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <label>Student Email</label>
                                            <input type="email" name="student_email" class="form-control" 
                                                   placeholder="Student Email" value="{{ $data->student_email ?? '' }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Student Name</label>
                                            <input type="text" name="student_name" class="form-control" 
                                                   placeholder="Student Name" value="{{ $data->student_name ?? '' }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="date" name="student_dob" class="form-control" 
                                                   value="{{ $data->student_dob ?? '' }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select name="student_gender" class="form-control">
                                                <option value="male" {{ ($data->student_gender ?? '') == 'male' ? 'selected' : '' }}>Male</option>
                                                <option value="female" {{ ($data->student_gender ?? '') == 'female' ? 'selected' : '' }}>Female</option>
                                                <option value="other" {{ ($data->student_gender ?? '') == 'other' ? 'selected' : '' }}>Other</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nationality</label>
                                            <input type="text" name="student_nationality" class="form-control" 
                                                   placeholder="Nationality" value="{{ $data->student_nationality ?? '' }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Attachment</label>
                                            <input type="file" name="student_attachment" class="form-control">
                                            <!-- Existing file display -->
                                            @if(!empty($data->student_attachment))
                                                <p>Current File: <a href="{{ asset($data->student_attachment) }}" target="_blank">View</a></p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Level</label>
                                            <input type="text" name="student_level" class="form-control" 
                                                   placeholder="Level" value="{{ $data->student_level ?? '' }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Start Date</label>
                                            <input type="date" name="start_date" class="form-control" 
                                                   value="{{ $data->start_date ?? '' }}">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- Second Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-title">
                                <h4>Enrolment Form - Parent/Guardian Information</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <label>Parent Name</label>
                                            <input type="text" name="parent_name" class="form-control" 
                                                   placeholder="Parent Name" value="{{ $data->parent_name ?? '' }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Relationship</label>
                                            <input type="text" name="student_relationship" class="form-control" 
                                                   placeholder="Relationship" value="{{ $data->student_relationship ?? '' }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="tel" name="parent_phonenumber" class="form-control" 
                                                   placeholder="Phone Number" value="{{ $data->parent_phonenumber ?? '' }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="parent_email" class="form-control" 
                                                   placeholder="Parent Email" value="{{ $data->parent_email ?? '' }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Occupation</label>
                                            <input type="text" name="parent_occupation" class="form-control" 
                                                   placeholder="Occupation" value="{{ $data->parent_occupation ?? '' }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Attachment</label>
                                            <input type="file" name="parent_attachment" class="form-control">
                                            @if(!empty($data->parent_attachment))
                                                <p>Current File: <a href="{{ asset($data->parent_attachment) }}" target="_blank">View</a></p>
                                            @endif
                                        </div>
                                        <!-- Second parent fields omitted for brevity -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- Third Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-title">
                                <h4>Enrolment Form - Additional Information</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <label>Emergency Contact</label>
                                            <input type="text" name="emergency_contact" class="form-control" 
                                                   placeholder="Emergency Contact" value="{{ $data->emergency_contact ?? '' }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Relationship</label>
                                            <input type="text" name="emergency_contact_relationship" class="form-control" 
                                                   placeholder="Relationship" value="{{ $data->emergency_contact_relationship ?? '' }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Contact</label>
                                            <input type="tel" name="emergency_contact_contact" class="form-control" 
                                                   placeholder="Contact" value="{{ $data->emergency_contact_contact ?? '' }}">
                                        </div>
                                        <!-- Additional fields omitted for brevity -->
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
@endsection
