<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0 auto;
            padding: 20px;
            max-width: 800px;
            color: #333;
        }
        .title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #d57176;
        }
        .field-group {
            margin-bottom: 15px;
        }
        .field-label {
            font-weight: bold;
            color: #555;
        }
        .field-value {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="title">Evening Enrollment Form</div>
    
    <div class="field-group">
        <span class="field-label">Student Name:</span>
        <div class="field-value">{{ $data->student_name ?? '' }}</div>
    </div>
    <div class="field-group">
        <span class="field-label">Date of Birth:</span>
        <div class="field-value">{{ $data->student_dob ?? '' }}</div>
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
        <span class="field-label">Level:</span>
        <div class="field-value">{{ $data->student_level ?? '' }}</div>
    </div>
    <div class="field-group">
        <span class="field-label">School Name:</span>
        <div class="field-value">{{ $data->school_name ?? '' }}</div>
    </div>
    <div class="field-group">
        <span class="field-label">Curriculum:</span>
        <div class="field-value">{{ $data->school_curriculum ?? '' }}</div>
    </div>
    <div class="field-group">
        <span class="field-label">Tutoring Schedule:</span>
        <div class="field-value">{{ implode(', ', json_decode($data->tutoring_schedule ?? '[]')) }}</div>
    </div>
    <div class="field-group">
        <span class="field-label">Weekly Sessions:</span>
        <div class="field-value">{{ $data->weekly_sessions ?? '' }}</div>
    </div>
    <div class="field-group">
        <span class="field-label">Parent Name:</span>
        <div class="field-value">{{ $data->parent1_name ?? '' }}</div>
    </div>
    <div class="field-group">
        <span class="field-label">Parent Relationship:</span>
        <div class="field-value">{{ $data->parent1_relationship ?? '' }}</div>
    </div>
    <div class="field-group">
        <span class="field-label">Parent Phone:</span>
        <div class="field-value">{{ $data->parent1_phone ?? '' }}</div>
    </div>
    <div class="field-group">
        <span class="field-label">Parent Email:</span>
        <div class="field-value">{{ $data->parent1_email ?? '' }}</div>
    </div>
    <div class="field-group">
        <span class="field-label">Parent Occupation:</span>
        <div class="field-value">{{ $data->parent1_occupation ?? '' }}</div>
    </div>
    <div class="field-group">
        <span class="field-label">Parent ID:</span>
        <div class="field-value">
            <img style="width: 100px; height:100px" src="{{ asset('/storage/uploads/'.$data->parent1_id )?? '' }}">
        </div>
    </div>
    <div class="field-group">
        <span class="field-label">Subjects:</span>
        <div class="field-value">{{ implode(', ', json_decode($data->subjects ?? '[]')) }}</div>
    </div>
    <div class="field-group">
        <span class="field-label">Learning Difficulties:</span>
        <div class="field-value">{{ $data->learning_difficulties ?? 'None' }}</div>
    </div>
</body>
</html>
