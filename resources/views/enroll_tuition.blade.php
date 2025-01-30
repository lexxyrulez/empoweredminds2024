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
            background-color: #D7A49A;
        }

        .document-button:nth-child(2) {
            background-color: #D7A49A;
        }

        .document-button:nth-child(3) {
            background-color: #D7A49A;
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
                width: 80%;
                /* Adjust for smaller screens */
                margin: 0 auto;
            }
        }
    </style>

    <!-- Include Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <section id="after-school-tutoring" class="section" style="padding: 30px; background-color: #f9f9f9;">
        <div class="container">
            <div class="text-center mb-4">
                <h2 style="color: #d57176;">Application Form - After School Tutoring</h2>
                <p>Please complete the following form with accurate details to help us process your application efficiently.
                    Ensure all required fields are filled and supporting documents are submitted as instructed.</p>
            </div>

            <!-- Multi-step Form -->
            <form action="{{ route('enroll.tuition.submit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Step 1: Student's Information -->
                <div style="margin-bottom:50px" class="form-step" id="step-1">
                    <h3>Student's Information</h3>
                    <div class="mb-3">
                        <label for="student-fullname" class="form-label">Students Full Names*</label>
                        <input type="text" name="student_name" id="student-fullname" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birth*</label>
                        <input type="date" name="student_dob" id="dob" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender*</label>
                        <select name="student_gender" id="gender" class="form-control" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nationality" class="form-label">Nationality*</label>
                        <input type="text" name="student_nationality" id="nationality" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="grade-level" class="form-label">Grade/Level Applying For*</label>
                        <input type="text" name="student_level" id="grade-level" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="school-name" class="form-label">Name of School Attending*</label>
                        <input type="text" name="school_name" id="school-name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="school-curriculum" class="form-label">School Curriculum*</label>
                        <select name="school_curriculum" id="school-curriculum" class="form-control" required>
                            <option value="IB">IB</option>
                            <option value="Cambridge">Cambridge</option>
                            <option value="NECTA">NECTA</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tutoring-schedule" class="form-label">Preferred Tutoring Schedule*</label>
                        <select multiple name="tutoring_schedule[]" id="tutoring-schedule" class="form-control" required>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="weekly-sessions" class="form-label">How Many Times Per Week*</label>
                        <input type="number" name="weekly_sessions" id="weekly-sessions" class="form-control" required>
                    </div>
                    <button type="button" class="btn btn-primary float-end next-step">Next</button>
                </div>

                <!-- Step 2: Parent/Guardian Information -->
                <div class="form-step" id="step-2" style="display: none;">
                    <h3>Parent/Guardian Information</h3>
                    <div class="mb-3">
                        <label for="parent1-name" class="form-label">Full Name of Parent/Guardian*</label>
                        <input type="text" name="parent1_name" id="parent1-name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="parent1-relationship" class="form-label">Relationship to Student*</label>
                        <input type="text" name="parent1_relationship" id="parent1-relationship" class="form-control"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="parent1-phone" class="form-label">Phone Number*</label>
                        <input type="text" name="parent1_phone" id="parent1-phone" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="parent1-email" class="form-label">Email Address*</label>
                        <input type="email" name="parent1_email" id="parent1-email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="parent1-occupation" class="form-label">Occupation*</label>
                        <input type="text" name="parent1_occupation" id="parent1-occupation" class="form-control"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="parent1-id" class="form-label">Upload Copy of Identification Card*</label>
                        <input type="file" name="parent1_id" id="parent1-id" class="form-control" required>
                    </div>
                    <!-- Back and Next Buttons -->
                    <button type="button" class="btn btn-secondary previous-step">Back</button>
                    <button type="button" class="btn btn-primary float-end next-step">Next</button>
                </div>


                <!-- Step 3: Tutoring Details -->
                <!-- Step 3: Tutoring Details -->
                <div class="form-step" id="step-3" style="display: none;">
                    <h3>Tutoring Details</h3>

                    <!-- Subjects for Tutoring -->
                    <div class="mb-3">
                        <label for="subjects" class="form-label">Subjects for Tutoring*</label>
                        <select style="width: 100%" multiple name="subjects[]" id="subjects" class="form-control"
                            required>
                            <option value="Language (ESL)">Language (ESL)</option>
                            <option value="English">English</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Science">Science</option>
                            <option value="History">History</option>
                            <option value="Geography">Geography</option>
                            <option value="Arts and Design">Arts and Design</option>
                            <option value="Economics">Economics</option>
                        </select>
                    </div>

                    <!-- Learning Challenges -->
                    <div class="mb-3">
                        <label class="form-label">Does the student have learning challenges (e.g., Autism,
                            Dyslexia)?*</label>
                        <div>
                            <input type="radio" name="learning_challenges" value="Yes" id="learning-challenges-yes"
                                required>
                            <label for="learning-challenges-yes">Yes</label>
                            <input type="radio" name="learning_challenges" value="No" id="learning-challenges-no">
                            <label for="learning-challenges-no">No</label>
                        </div>
                        <div id="learning-challenges-details" class="mt-2" style="display: none;">
                            <label for="learning-challenges-file" class="form-label">If yes, please provide details and
                                upload supporting documentation:</label>
                            <textarea name="learning_challenges_details" id="learning-challenges-text" class="form-control mb-2"
                                placeholder="Provide details"></textarea>
                            <input type="file" name="learning_challenges_file" id="learning-challenges-file"
                                class="form-control">
                        </div>
                    </div>

                    <!-- Medical Issues -->
                    <div class="mb-3">
                        <label class="form-label">Does the student have any medical issues?*</label>
                        <div>
                            <input type="radio" name="medical_issues" value="Yes" id="medical-issues-yes" required>
                            <label for="medical-issues-yes">Yes</label>
                            <input type="radio" name="medical_issues" value="No" id="medical-issues-no">
                            <label for="medical-issues-no">No</label>
                        </div>
                        <div id="medical-issues-details" class="mt-2" style="display: none;">
                            <label for="medical-issues-text" class="form-label">If yes, please provide details:</label>
                            <textarea name="medical_issues_details" id="medical-issues-text" class="form-control mb-2"
                                placeholder="Provide details"></textarea>
                            <label for="medical-issues-file" class="form-label">Upload supporting documentation:</label>
                            <input type="file" name="medical_issues_file" id="medical-issues-file"
                                class="form-control">
                        </div>
                        <label for="medical-issues-file" class="form-label">Upload Supporting Documentation for Medical
                            Issues:</label>
                        <input type="file" name="medical_issues_file" id="medical-issues-file" class="form-control"
                            required>

                    </div>

                    <!-- Further Assistance -->
                    <div class="mb-3">
                        <label for="further-assistance" class="form-label">Does the student require any further
                            assistance?</label>
                        <textarea name="further_assistance" id="further-assistance" class="form-control"
                            placeholder="Provide details (optional)"></textarea>
                    </div>

                    <!-- Pick and Drop Arrangements -->
                    <div class="mb-3">
                        <label for="pick-drop-person" class="form-label">Person Responsible for Pick and Drop</label>
                        <div class="mb-2">
                            <input type="text" name="pick_drop_person_name" id="pick-drop-person-name"
                                class="form-control" placeholder="Full Name" required>
                        </div>
                        <div class="mb-2">
                            <input type="text" name="pick_drop_person_phone" id="pick-drop-person-phone"
                                class="form-control" placeholder="Phone Number" required>
                        </div>
                        <div class="mb-2">
                            <input type="text" name="pick_drop_person_title" id="pick-drop-person-title"
                                class="form-control" placeholder="Title/Relation to Student" required>
                        </div>
                        <label for="pick-drop-person-id" class="form-label">Upload a copy of their ID:</label>
                        <input type="file" name="pick_drop_person_id" id="pick-drop-person-id" class="form-control"
                            required>
                    </div>

                    <!-- Navigation Buttons -->
                    <button type="button" class="btn btn-secondary previous-step">Back</button>
                    <button type="submit" class="btn btn-primary float-end next-step">Submit</button>
                </div>
            </form>
        </div>
        <!-- Include jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <!-- Include Select2 JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
        <!-- Initialize Select2 -->
        <script>
            $(document).ready(function() {
                $('#tutoring-schedule').select2({
                    placeholder: 'Select preferred days',
                    allowClear: true
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $('#subjects').select2({
                    placeholder: 'Select subjects for tutoring', // Placeholder text
                    allowClear: true // Allow users to clear the selection
                });
            });
        </script>
    </section>
@endsection
