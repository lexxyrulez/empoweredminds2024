@extends('layouts.app')

@section('title', 'Enroll - Empowered Minds Learning Center')

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
            width: 80%; /* Adjust for smaller screens */
            margin: 0 auto;
        }
    }
</style>

<!-- Include Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


<!-- Enrollment Options Section -->
<section id="enrollment-options" style="padding: 50px; background-color: #f9f9f9;">
    <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
        <h2 style="color: #d57176; font-family: 'Gagalin', sans-serif;">Choose Your Enrollment</h2>
        <p>Explore our tailored programs for morning and evening students.</p>

        <div class="row mt-4">
            <!-- Morning Students -->
            <div class="col-md-6">
                <a href="{{ route('enroll_morning') }}" style="text-decoration: none;">
                    <div class="enrollment-option" style="background-color: #fff; border: 1px solid #ddd; border-radius: 8px; padding: 30px; transition: transform 0.3s, box-shadow 0.3s;">
                        <div class="icon" style="font-size: 40px; color: #d57176;">
                            <i class="bi bi-brightness-alt-high"></i>
                        </div>
                        <h4 style="color: #d57176; margin-top: 15px;">Homeschooling  
                        </h4>
                        <p style="color: #666; font-size: 14px;">An alternative to traditional schooling, where students complete their education in a structured and supportive environment.</p>
                    </div>
                </a>
            </div>

            <!-- Evening Students -->
            <div class="col-md-6">
                <a href="{{ route('enroll_tuition') }}" style="text-decoration: none;">
                    <div class="enrollment-option" style="background-color: #fff; border: 1px solid #ddd; border-radius: 8px; padding: 30px; transition: transform 0.3s, box-shadow 0.3s;">
                        <div class="icon" style="font-size: 40px; color: #d57176;">
                            <i class="bi bi-moon"></i>
                        </div>
                        <h4 style="color: #d57176; margin-top: 15px;">Afterschool tutoring</h4>
                        <p style="color: #666; font-size: 14px;">Designed to complement regular school hours, this program focuses on exam preparation and reinforcing daily lessons for academic success.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Add this CSS to style -->
<style>
    #enrollment-options .enrollment-option {
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    #enrollment-options .enrollment-option:hover {
        transform: translateY(-10px);
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    }

    #enrollment-options a:hover {
        text-decoration: none;
    }
</style>


       








        
    </section>

@endsection
