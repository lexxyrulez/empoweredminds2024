<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Container fluid  -->
    <div class="container-fluid">
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
                                            <label>Student Email</label>
                                            <input readonly type="email" name="student_email" class="form-control"
                                                placeholder="Student Email" value="{{ $data->student_email ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Student Name</label>
                                            <input readonly type="text" name="student_name" class="form-control"
                                                placeholder="Student Name" value="{{ $data->student_name ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input readonly type="text" name="student_dob" class="form-control"
                                                value="{{ Carbon\Carbon::parse($data->student_dob)->format('d/m/Y') ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <input readonly type="text" name="student_gender" class="form-control"
                                                placeholder="Student Gender" value="{{ $data->student_gender ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nationality</label>
                                            <input readonly type="text" name="student_nationality"
                                                class="form-control" placeholder="Nationality"
                                                value="{{ $data->student_nationality ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Attachment</label>
                                            @if (!empty($data->student_attachment))
                                                <p>Current File: <a
                                                        href="{{ asset('upload/' . $data->student_attachment) }}"
                                                        target="_blank">View</a></p>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Student Grade/Level</label>
                                            <input readonly type="text" name="student_level" class="form-control"
                                                placeholder="Student Level" value="{{ $data->student_level ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Start Date</label>
                                            <input readonly type="text" name="start_date" class="form-control"
                                                value="{{ Carbon\Carbon::parse($data->start_date)->format('d/m/Y') ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Siblings</label>
                                            <input readonly type="text" name="siblings" class="form-control"
                                                placeholder="Siblings" value="{{ $data->siblings ?? '' }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Siblings Names</label>
                                            <input readonly type="text" name="siblings_names" class="form-control"
                                                placeholder="Siblings Names" value="{{ $data->siblings_names ?? '' }}">
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
                                            <label>Parent 1 Name</label>
                                            <input readonly type="text" name="parent_name" class="form-control"
                                                placeholder="Parent Name" value="{{ $data->parent_name ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Parent 1 Relationship</label>
                                            <input readonly type="text" name="student_relationship"
                                                class="form-control" placeholder="Relationship"
                                                value="{{ $data->student_relationship ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Parent 1 Phone Number</label>
                                            <input readonly type="tel" name="parent_phonenumber"
                                                class="form-control" placeholder="Phone Number"
                                                value="{{ $data->parent_phonenumber ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Parent 1 Email</label>
                                            <input readonly type="email" name="parent_email" class="form-control"
                                                placeholder="Parent Email" value="{{ $data->parent_email ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Parent 1 Occupation</label>
                                            <input readonly type="text" name="parent_occupation"
                                                class="form-control" placeholder="Occupation"
                                                value="{{ $data->parent_occupation ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Parent 1 Attachment</label>
                                            @if (!empty($data->parent_attachment))
                                                <p>Current File: <a href="{{ asset($data->parent_attachment) }}"
                                                        target="_blank">View</a></p>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Parent 2 Name</label>
                                            <input readonly type="text" name="second_parent_name"
                                                class="form-control" placeholder="Parent Name"
                                                value="{{ $data->second_parent_name ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Parent 2 Relationship</label>
                                            <input readonly type="text" name="student_second_relationship"
                                                class="form-control" placeholder="Relationship"
                                                value="{{ $data->student_second_relationship ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Parent 2 Phone Number</label>
                                            <input readonly type="tel" name="second_parent_phonenumber"
                                                class="form-control" placeholder="Phone Number"
                                                value="{{ $data->second_parent_phonenumber ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Parent 2 Email</label>
                                            <input readonly type="email" name="second_parent_email"
                                                class="form-control" placeholder="Parent Email"
                                                value="{{ $data->second_parent_email ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Parent 2 Occupation</label>
                                            <input readonly type="text" name="second_parent_occupation"
                                                class="form-control" placeholder="Occupation"
                                                value="{{ $data->second_parent_occupation ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Parent 2 Attachment</label>
                                            @if (!empty($data->second_parent_attachment))
                                                <p>Current File: <a
                                                        href="{{ asset($data->second_parent_attachment) }}"
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

            <!-- Row 3: School Information -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-title">
                        <h4>Enrolment Form - Educational Background</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Previous School</label>
                                            <input readonly type="text" name="previous_school"
                                                class="form-control" placeholder="Previous School"
                                                value="{{ $data->previous_school ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Previous School Address</label>
                                            <input readonly type="text" name="previous_school_address"
                                                class="form-control" placeholder="Previous School Address"
                                                value="{{ $data->previous_school_address ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Last Grade Completed</label>
                                            <input readonly type="text" name="last_grade_completed"
                                                class="form-control" placeholder="Last Grade Completed"
                                                value="{{ $data->last_grade_completed ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Reasons</label>
                                            <input readonly type="text" name="reasons" class="form-control"
                                                placeholder="Reasons" value="{{ $data->reasons ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Parent 1 Occupation</label>
                                            <input readonly type="text" name="parent_occupation"
                                                class="form-control" placeholder="Occupation"
                                                value="{{ $data->parent_occupation ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Previous School Attachments</label>
                                            @if (!empty($data->parent_attachment))
                                                <p>Current File: <a
                                                        href="{{ asset($data->previous_school_attachments) }}"
                                                        target="_blank">View</a></p>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="card-title">
                                    <h4>Health and Special Needs</h4>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Special Needs</label>
                                            <input readonly type="text" name="special_needs" class="form-control"
                                                placeholder="Special Needs" value="{{ $data->special_needs ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Special Needs Details</label>
                                            <input readonly type="text" name="special_needs_details"
                                                class="form-control" placeholder="Special Needs Details"
                                                value="{{ $data->special_needs_details ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Special Needs Attachments</label>
                                            @if (!empty($data->special_needs_attachments))
                                                <p>Current File: <a
                                                        href="{{ asset($data->special_needs_attachments) }}"
                                                        target="_blank">View</a></p>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Medical Conditions</label>
                                            <input readonly type="text" name="medical_conditions"
                                                class="form-control" placeholder="Medical Conditions"
                                                value="{{ $data->medical_conditions ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Medical Conditions Details</label>
                                            <input readonly type="text" name="medical_conditions_details"
                                                class="form-control" placeholder="Medical Conditions Details"
                                                value="{{ $data->medical_conditions_details ?? '' }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Medication</label>
                                            <input readonly type="text" name="medication" class="form-control"
                                                placeholder="Medication" value="{{ $data->medication ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Medication Details</label>
                                            <input readonly type="text" name="medication_details"
                                                class="form-control" placeholder="Medication Details"
                                                value="{{ $data->medication_details ?? '' }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Immunizations</label>
                                            <input readonly type="text" name="immunizations" class="form-control"
                                                placeholder="Immunizations" value="{{ $data->immunizations ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Immunizations Details</label>
                                            <input readonly type="text" name="immunizations_details"
                                                class="form-control" placeholder="Immunizations Details"
                                                value="{{ $data->immunizations_details ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Immunizations Attachments</label>
                                            @if (!empty($data->immunizations_attachments))
                                                <p>Current File: <a
                                                        href="{{ asset($data->immunizations_attachments) }}"
                                                        target="_blank">View</a></p>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Permissions For Minor Injuries</label>
                                            <input readonly type="text" name="permissions_minor_injuries"
                                                class="form-control" placeholder="Permissions For Minor Injuries"
                                                value="{{ $data->permissions_minor_injuries ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Permissions For Medical Attention</label>
                                            <input readonly type="text" name="permissions_medical_attention"
                                                class="form-control" placeholder="Permissions For Medical Attention"
                                                value="{{ $data->permissions_medical_attention ?? '' }}">
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 4: Emergency Contact -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-title">
                        <h4>Enrolment Form - Program Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Curriculum</label>
                                            <input readonly type="text" name="curriculum" class="form-control"
                                                placeholder="Curriculum" value="{{ $data->curriculum ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Curriculum Details</label>
                                            <input readonly type="text" name="curriculum_details"
                                                class="form-control" placeholder="Curriculum Details"
                                                value="{{ $data->curriculum_details ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Emergency Contact Name</label>
                                            <input readonly type="text" name="emergency_contact"
                                                class="form-control" placeholder="Emergency Contact"
                                                value="{{ $data->emergency_contact ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Relationship to Student</label>
                                            <input readonly type="text" name="emergency_contact_relationship"
                                                class="form-control" placeholder="Relationship"
                                                value="{{ $data->emergency_contact_relationship ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input readonly type="tel" name="emergency_contact_contact"
                                                class="form-control" placeholder="Contact"
                                                value="{{ $data->emergency_contact_contact ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</body>

</html>
