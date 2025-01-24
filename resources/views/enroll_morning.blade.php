@extends('layouts.app')

@section('title', 'Contact - Empowered Minds Learning Center')

@section('content')

    <section id="call-to-action" class="call-to-action section dark-background"
        style="background-image: url('assets/img/pencil.jpg'); background-size: cover; background-position: center;">

        <div class="container">
            <div class="row align-items-center" data-aos="zoom-in" data-aos-delay="100">

                <div class="container section-title" data-aos="fade-up">
                    <div class=" hero-img" data-aos="zoom-out" data-aos-delay="200">
                        <h2></h2>
                    </div>

                </div>

            </div>
        </div>

</section>




<!-- Supporting Documents Section -->
<div class="supporting-documents-section">
    <h3 class="section-title">Download Supporting Documents</h3>
    <div class="documents-container">
        <!-- OUTLINE -->
        <a href="assets/documents/outline_2025.pdf" class="document-button" download>
            <i class="bi bi-download"></i> OUTLINE
        </a>
        <!-- HOURLY CHARGES -->
        <a href="assets/documents/fees_tructure_2025.pdf" class="document-button" download>
            <i class="bi bi-download"></i> HOURLY CHARGES
        </a>
        <!-- FEE STRUCTURE -->
        <a href="assets/documents/EMLC_HOURLY_CHARGES_2025.pdf" class="document-button" download>
            <i class="bi bi-download"></i> FEE STRUCTURE 2025
        </a>
    </div>
</div>

<!-- Inline CSS -->
<style>
    /* Section Styling */
    .supporting-documents-section {
        text-align: center;
        background-color: #f8f9fa;
        padding: 20px;
        border: 2px solid #d57176;
        border-radius: 10px;
        margin: 20px 0;
    }

    /* Title Styling */
    .section-title {
        font-family: 'Gagalin', sans-serif;
        color: #d57176;
        margin-bottom: 20px;
    }

    /* Documents Container */
    .documents-container {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    /* Button Styling */
    .document-button {
        display: inline-block;
        padding: 10px 20px;
        font-family: 'Gagalin', sans-serif;
        font-size: 16px;
        color: #fff;
        text-decoration: none;
        text-align: center;
        border-radius: 5px;
        transition: all 0.3s ease-in-out;
    }

    /* Button Colors */
    .document-button:nth-child(1) {
        background-color:rgb(132, 175, 249);
    }

    .document-button:nth-child(2) {
        background-color: #6c757d;
    }

    .document-button:nth-child(3) {
        background-color:rgb(117, 246, 186);
    }

    /* Download Icon Styling */
    .document-button i {
        margin-right: 8px;
        font-size: 18px;
    }

    /* Hover Effects */
    .document-button:hover {
        transform: scale(1.1);
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .documents-container {
            flex-direction: column;
            gap: 15px;
        }

        .document-button {
            width: 80%; /* Adjust for smaller screens */
            margin: 0 auto;
        }
    }
</style>

<!-- Include Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">




<section id="enroll-coming-soon" class="section" style="padding: 30px; background-color: #f9f9f9;">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <!-- Title Section -->
        <div class="text-center mb-4">
    <h2 style="color: #d57176;">Enrollment Form</h2>
    <p>Please fill in the details carefully and submit your application. We look forward to welcoming you to Empowered Minds Learning Center!</p>
</div>


            <!-- Form Section -->
            <div id="enrollment-form" class="container mt-5">
                <form action="{{route('enroll.submit')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Step 1: Student Details -->
                    <!-- Step 1: Student Details -->
                    <div class="form-step" id="step-1">
                        <h3>Student Details</h3>
                        <div class="mb-3">
                            <label for="student-email" class="form-label">Email</label>
                            <input type="email" name="student_email" id="student-email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="student-fullname" class="form-label">Student's Full Name</label>
                            <input type="text" name="student_fullname" id="student-fullname" class="form-control"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" name="dob" id="dob" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select name="gender" id="gender" class="form-select" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nationality" class="form-label">Nationality</label>
                            <input type="text" name="nationality" id="nationality" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="birth-certificate" class="form-label">Upload Birth
                                Certificate/Identification</label>
                            <input type="file" name="birth_certificate" id="birth-certificate" class="form-control"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="grade" class="form-label">Grade/Level Applying For</label>
                            <select name="grade" id="grade" class="form-select" required>
                                <option value="" disabled selected>Select Grade</option>
                                <option value="pre-school-kindergarten">Pre-School Kindergarten</option>
                                <option value="1">Grade 1</option>
                                <option value="2">Grade 2</option>
                                <option value="3">Grade 3</option>
                                <option value="4">Grade 4</option>
                                <option value="5">Grade 5</option>
                                <option value="6">Grade 6</option>
                                <option value="7">Grade 7</option>
                                <option value="8">Grade 8</option>
                                <option value="9">Grade 9</option>
                                <option value="10">Grade 10</option>
                                <option value="11">Grade 11</option>
                                <option value="12">Grade 12</option>
                                <option value="13">Grade 13</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="start-date" class="form-label">Preferred Start Date</label>
                            <input type="date" name="start_date" id="start-date" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Does the student have any siblings enrolled in this school?</label>
                            <div>
                                <input type="radio" name="siblings" value="yes" required> Yes
                                <input type="radio" name="siblings" value="no" required> No
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="sibling-names" class="form-label">If yes, list their names</label>
                            <textarea name="sibling_names" id="sibling-names" class="form-control"></textarea>
                        </div>
                        <button type="button" class="btn btn-primary next-step">Next</button>
                    </div>


                    <!-- Step 2: Parent/Guardian Information -->
                    <div class="form-step" id="step-2" style="display: none;">
                        <h3>Parent/Guardian Information</h3>

                        <!-- Parent/Guardian 1 -->
                        <h5>Primary Parent/Guardian</h5>
                        <div class="mb-3">
                            <label for="parent1-name" class="form-label">Full Name of Parent/Guardian</label>
                            <input type="text" name="parent1_name" id="parent1-name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="parent1-relationship" class="form-label">Relationship to Student</label>
                            <input type="text" name="parent1_relationship" id="parent1-relationship"
                                class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="parent1-phone" class="form-label">Phone Number</label>
                            <input type="text" name="parent1_phone" id="parent1-phone" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="parent1-email" class="form-label">Email Address</label>
                            <input type="email" name="parent1_email" id="parent1-email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="parent1-occupation" class="form-label">Occupation</label>
                            <input type="text" name="parent1_occupation" id="parent1-occupation"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="parent1-id" class="form-label">Upload a Copy of Your Identification Card</label>
                            <input type="file" name="parent1_id" id="parent1-id" class="form-control" required>
                        </div>

                        <!-- Parent/Guardian 2 -->
                        <h5>Secondary Parent/Guardian</h5>
                        <div class="mb-3">
                            <label for="parent2-name" class="form-label">Full Name of Parent/Guardian</label>
                            <input type="text" name="parent2_name" id="parent2-name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="parent2-relationship" class="form-label">Relationship to Student</label>
                            <input type="text" name="parent2_relationship" id="parent2-relationship"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="parent2-phone" class="form-label">Phone Number</label>
                            <input type="text" name="parent2_phone" id="parent2-phone" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="parent2-email" class="form-label">Email Address</label>
                            <input type="email" name="parent2_email" id="parent2-email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="parent2-occupation" class="form-label">Occupation</label>
                            <input type="text" name="parent2_occupation" id="parent2-occupation"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="parent2-id" class="form-label">Upload a Copy of Your Identification Card</label>
                            <input type="file" name="parent2_id" id="parent2-id" class="form-control">
                        </div>

                        <!-- Form Navigation Buttons -->
                        <button type="button" class="btn btn-secondary previous-step">Back</button>
                        <button type="button" class="btn btn-primary float-end next-step">Next</button>
                    </div>


                    <!-- Step 3: Previous School Information and Health Details -->
                    <div class="form-step" id="step-3" style="display: none;">
                        <h3>Educational Background</h3>

                        <!-- Educational Background -->
                        <div class="mb-3">
                            <label for="prev-school-name" class="form-label">Previous School Name</label>
                            <input type="text" name="prev_school_name" id="prev-school-name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="prev-school-address" class="form-label">Address of Previous School</label>
                            <input type="text" name="prev_school_address" id="prev-school-address"
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="last-grade" class="form-label">Last Grade/Level Completed</label>
                            <input type="text" name="last_grade" id="last-grade" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="reason-leaving" class="form-label">Reason for Leaving Previous School</label>
                            <textarea name="reason_leaving" id="reason-leaving" class="form-control"></textarea>
                        </div>

                        <!-- Student Records -->
                        <div class="mb-3">
                            <label for="school-records" class="form-label">Upload Copies of Previous School
                                Records</label>
                            <input type="file" name="school_records[]" id="school-records" class="form-control"
                                multiple>
                        </div>

                        <!-- Special Needs Information -->
                        <h3>Health and Special Needs</h3>
                        <div class="mb-3">
                            <label for="learning-difficulties" class="form-label">Does the student have any learning
                                difficulties or special needs?</label>
                            <div>
                                <input type="radio" name="learning_difficulties" value="Yes"
                                    id="learning-difficulties-yes">
                                <label for="learning-difficulties-yes">Yes</label>
                            </div>
                            <div>
                                <input type="radio" name="learning_difficulties" value="No"
                                    id="learning-difficulties-no">
                                <label for="learning-difficulties-no">No</label>
                            </div>
                            <div class="mt-2">
                                <label for="learning-difficulties-details" class="form-label">If yes, provide details and
                                    upload supporting documentation:</label>
                                <textarea name="learning_difficulties_details" id="learning-difficulties-details" class="form-control"></textarea>
                                <input type="file" name="learning_difficulties_file" id="learning-difficulties-file"
                                    class="form-control mt-2">
                            </div>
                        </div>

                        <!-- Medical Conditions -->
                        <div class="mb-3">
                            <label for="medical-conditions" class="form-label">Does the student have any medical
                                conditions or allergies?</label>
                            <div>
                                <input type="radio" name="medical_conditions" value="Yes"
                                    id="medical-conditions-yes">
                                <label for="medical-conditions-yes">Yes</label>
                            </div>
                            <div>
                                <input type="radio" name="medical_conditions" value="No"
                                    id="medical-conditions-no">
                                <label for="medical-conditions-no">No</label>
                            </div>
                            <div class="mt-2">
                                <label for="medical-conditions-details" class="form-label">If yes, provide
                                    details:</label>
                                <textarea name="medical_conditions_details" id="medical-conditions-details" class="form-control"></textarea>
                            </div>
                        </div>

                        <!-- Regular Medication -->
                        <div class="mb-3">
                            <label for="regular-medication" class="form-label">Is your child on any regular
                                medication?</label>
                            <div>
                                <input type="radio" name="regular_medication" value="Yes"
                                    id="regular-medication-yes">
                                <label for="regular-medication-yes">Yes</label>
                            </div>
                            <div>
                                <input type="radio" name="regular_medication" value="No"
                                    id="regular-medication-no">
                                <label for="regular-medication-no">No</label>
                            </div>
                            <div class="mt-2">
                                <label for="regular-medication-details" class="form-label">If yes, specify the medication
                                    and dosage:</label>
                                <textarea name="regular_medication_details" id="regular-medication-details" class="form-control"></textarea>
                            </div>
                        </div>

                        <!-- Immunization Record -->
                        <div class="mb-3">
                            <label for="immunizations" class="form-label">Has your child received all recommended
                                immunizations?</label>
                            <div>
                                <input type="radio" name="immunizations" value="Yes" id="immunizations-yes">
                                <label for="immunizations-yes">Yes</label>
                            </div>
                            <div>
                                <input type="radio" name="immunizations" value="No" id="immunizations-no">
                                <label for="immunizations-no">No</label>
                            </div>
                            <div class="mt-2">
                                <label for="immunizations-details" class="form-label">If no, please specify:</label>
                                <textarea name="immunizations_details" id="immunizations-details" class="form-control"></textarea>
                                <label for="immunization-file" class="form-label mt-2">Attach a copy of your child’s
                                    immunization record:</label>
                                <input type="file" name="immunization_file" id="immunization-file"
                                    class="form-control">
                            </div>
                        </div>

                        <!-- Permissions -->
                        <h3>Permissions</h3>
                        <div class="mb-3">
                            <label for="first-aid" class="form-label">I authorize the center to administer basic first aid
                                to my child in case of minor injuries</label>
                            <div>
                                <input type="radio" name="first_aid" value="Yes" id="first-aid-yes">
                                <label for="first-aid-yes">Yes</label>
                            </div>
                            <div>
                                <input type="radio" name="first_aid" value="No" id="first-aid-no">
                                <label for="first-aid-no">No</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="emergency-medical" class="form-label">In case of an emergency, I authorize the
                                center to seek medical attention for my child if I cannot be reached</label>
                            <div>
                                <input type="radio" name="emergency_medical" value="Yes"
                                    id="emergency-medical-yes">
                                <label for="emergency-medical-yes">Yes</label>
                            </div>
                            <div>
                                <input type="radio" name="emergency_medical" value="No" id="emergency-medical-no">
                                <label for="emergency-medical-no">No</label>
                            </div>
                        </div>

                        <!-- Form Navigation Buttons -->
                        <button type="button" class="btn btn-secondary previous-step">Back</button>
                        <button type="button" class="btn btn-primary float-end next-step">Next</button>
                    </div>









                    <!-- Step 4: Program Information, Emergency Contact, and Declaration -->
                    <div class="form-step" id="step-4" style="display: none;">
                        <h3>Program Information</h3>

                        <!-- Program Information -->
                        <div class="mb-3">
                            <label for="curriculum" class="form-label">Which curriculum would you prefer for your
                                child?</label>
                            <select name="curriculum" id="curriculum" class="form-select" required>
                                <option value="" disabled selected>Select Curriculum</option>
                                <option value="Cambridge">Cambridge</option>
                                <option value="NECTA">NECTA</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="academic-focus" class="form-label">Are there specific areas of academic focus or
                                goals for the student?</label>
                            <textarea name="academic_focus" id="academic-focus" class="form-control" rows="3"></textarea>
                        </div>

                        <!-- Emergency Contact Information -->
                        <h3>Emergency Contact Information</h3>
                        <div class="mb-3">
                            <label for="emergency-contact-name" class="form-label">Emergency Contact Name</label>
                            <input type="text" name="emergency_contact_name" id="emergency-contact-name"
                                class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="emergency-relationship" class="form-label">Relationship to Student</label>
                            <input type="text" name="emergency_relationship" id="emergency-relationship"
                                class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="emergency-phone" class="form-label">Phone Number</label>
                            <input type="text" name="emergency_phone" id="emergency-phone" class="form-control"
                                required>
                        </div>

                        <!-- Declaration -->
                        <h3>Declaration</h3>
                        <p>
                            I, the undersigned, hereby declare that the information provided in this application is true and
                            complete to the best of my knowledge. I understand that providing false or incomplete
                            information may result in the rejection of this application or termination of enrollment.
                        </p>
                        <div class="mb-3">
                            <label for="declaration-name" class="form-label">Parent/Guardian Name</label>
                            <input type="text" name="declaration_name" id="declaration-name" class="form-control"
                                required>
                        </div>

                        <!-- Form Buttons -->
                        <button type="button" class="btn btn-secondary previous-step">Back</button>
                        <button type="submit" class="btn btn-success float-end">Submit Application</button>
                        <button type="reset" class="btn btn-danger float-end me-2">Clear Form</button>
                    </div>



                </form>
            </div>


        </div>
    </section>

@endsection
