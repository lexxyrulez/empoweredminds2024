<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0 auto;
            padding: 20px;
            max-width: 900px;
            color: #333;
        }

        .title {
            text-align: center;
            font-size: 26px;
            margin-bottom: 30px;
            color: #d57176;
        }

        .section {
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #555;
        }

        .field-group {
            margin-bottom: 10px;
        }

        .field-label {
            font-weight: bold;
            color: #555;
        }

        .field-value {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f8f9fa;
        }

        .attachment-link {
            color: #d57176;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="title">Evening Enrollment Form</div>

    <div class="section">
        <div class="section-title">Student Information</div>
        <div class="field-group">
            <span class="field-label">Email:</span>
            <div class="field-value">{{ $data->student_email ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Name:</span>
            <div class="field-value">{{ $data->student_name ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Date of Birth:</span>
            <div class="field-value">{{ \Carbon\Carbon::parse($data->student_dob)->format('d/m/Y') ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Gender:</span>
            <div class="field-value">{{ $data->student_gender ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Nationality:</span>
            <div class="field-value">{{ $data->student_nationality ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Student Birth Certificate:</span>
            <div class="field-value">
                <<img style="width: 100px; height:100px" src="{{ $studentFileBase64 }}">
            </div>
        </div>
        <div class="field-group">
            <span class="field-label">Level:</span>
            <div class="field-value">{{ $data->student_level ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Start Date:</span>
            <div class="field-value">{{ $data->start_date ?? '' }}</div>
        </div>
    </div>

    <div class="section">
        <div class="section-title">Family Information</div>
        <div class="field-group">
            <span class="field-label">Siblings:</span>
            <div class="field-value">{{ $data->siblings ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Siblings' Names:</span>
            <div class="field-value">{{ $data->siblings_names ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Parent Name:</span>
            <div class="field-value">{{ $data->parent_name ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Parent Relationship:</span>
            <div class="field-value">{{ $data->student_relationship ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Parent Phone Number:</span>
            <div class="field-value">{{ $data->parent_phonenumber ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Parent Email:</span>
            <div class="field-value">{{ $data->parent_email ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Parent Occupation:</span>
            <div class="field-value">{{ $data->parent_occupation ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Parent 1 Attachment:</span>
            <div class="field-value">
                <img style="width: 100px; height:100px" src="{{ $parent1FileBase64 }}">
            </div>
        </div>

        <div class="field-group">
            <span class="field-label">Second Parent Name:</span>
            <div class="field-value">{{ $data->second_parent_name ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Second Parent Relationship:</span>
            <div class="field-value">{{ $data->student_second_relationship ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Second Parent Phone Number:</span>
            <div class="field-value">{{ $data->second_parent_phonenumber ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Second Parent Email:</span>
            <div class="field-value">{{ $data->second_parent_email ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Second Parent Occupation:</span>
            <div class="field-value">{{ $data->second_parent_occupation ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Second Parent Attachment:</span>
            <div class="field-value">
                <img style="width: 100px; height:100px" src="{{ $parent2FileBase64 }}">
            </div>
        </div>


    </div>

    <div class="section">
        <div class="section-title">Previous School Information</div>
        <div class="field-group">
            <span class="field-label">School Name:</span>
            <div class="field-value">{{ $data->previous_school ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">School Address:</span>
            <div class="field-value">{{ $data->previous_school_address ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Last Grade Completed:</span>
            <div class="field-value">{{ $data->last_grade_completed ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Reasons for Leaving:</span>
            <div class="field-value">{{ $data->reasons ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">School Attachments:</span>
            <div class="field-value">
                @foreach ($schoolFilesBase64 as $fileBase64)
                    <img style="width: 100px; height:100px; margin-right:10px;" src="{{ $fileBase64 }}">
                @endforeach
            </div>
        </div>
    </div>

    <div class="section">
        <div class="section-title">Special Needs</div>
        <div class="field-group">
            <span class="field-label">Special Needs:</span>
            <div class="field-value">{{ $data->special_needs ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Details:</span>
            <div class="field-value">{{ $data->special_needs_details ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Attachments:</span>
            <div class="field-value">
                <img style="width: 100px; height:100px" src="{{ $learningFileBase64 }}">
            </div>
        </div>
    </div>

    <div class="section">
        <div class="section-title">Medical Conditions</div>
        <div class="field-group">
            <span class="field-label">Medical Conditions:</span>
            <div class="field-value">{{ $data->medical_conditions ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Details:</span>
            <div class="field-value">{{ $data->medical_conditions_details ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Medication:</span>
            <div class="field-value">{{ $data->medication ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Medication Details:</span>
            <div class="field-value">{{ $data->medication_details ?? '' }}</div>
        </div>
    </div>

    <div class="section">
        <div class="section-title">Immunizations</div>
        <div class="field-group">
            <span class="field-label">Immunizations:</span>
            <div class="field-value">{{ $data->immunizations ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Details:</span>
            <div class="field-value">{{ $data->immunizations_details ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Attachments:</span>
            <div class="field-value">
                <img style="width: 100px; height:100px" src="{{ $immunizationFileBase64 }}">
            </div>
        </div>
    </div>

    <div class="section">
        <div class="section-title">Emergency Contact</div>
        <div class="field-group">
            <span class="field-label">Contact Name:</span>
            <div class="field-value">{{ $data->emergency_contact ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Relationship:</span>
            <div class="field-value">{{ $data->emergency_contact_relationship ?? '' }}</div>
        </div>
        <div class="field-group">
            <span class="field-label">Phone Number:</span>
            <div class="field-value">{{ $data->emergency_contact_contact ?? '' }}</div>
        </div>
    </div>

</body>

</html>
