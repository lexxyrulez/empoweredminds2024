@extends('layouts.app')

@section('title', 'Welcome - Empowered Minds Learning Center')

@section('content')




  <section id="call-to-action" class="call-to-action section dark-background" style="background-image: url('assets/img/kid.jpg'); background-size: cover; background-position: center;">

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







<!-- About Section -->
<section id="about" class="about section">
  <div class="container section-title" data-aos="fade-up">
    <div class="hero-img" data-aos="zoom-out" data-aos-delay="200">
      <h2>About Us</h2>
    </div>
  </div>

  <div class="container">
    <div class="row gy-4">
      <!-- Left Column -->
      <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
        <p>At Empowered Minds Learning Center, we believe in nurturing every learner's unique potential through inclusive and personalized education. Our programs are designed to foster independence, creativity, and academic excellence.</p>
        <ul>
          <li><i class="bi bi-check2-circle"></i> <span>Individualized homeschooling and support tailored to every learner's needs.</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>A team of experienced educators and collaborative specialists.</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Inclusive and modern teaching methods with flexible options.</span></li>
        </ul>
      </div>

      <!-- Right Column -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <p>Empowered Minds is more than an educational center; it's a partner in creating exceptional futures for learners of all backgrounds. From early childhood to advanced studies, we provide a supportive and innovative environment that inspires growth.</p>
        <a href="#services" class="read-more"><span>Discover Our Services</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

    <!-- Colored Line -->
    <div class="row">
      <div class="col-12 mt-4">
        <hr style="border: 2px solid #d57176; width: 100%; margin: 0 auto;">
      </div>
    </div>
  </div>
</section>

<!-- /About Section -->






<!-- Our History -->
<section id="our-history" class="our-history section white-background">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Our History</h2>
        <p>Learn about the journey and mission that define Empowered Minds Learning Center.</p>
    </div><!-- End Section Title -->

    <!-- Content Section -->
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
            <!-- Left Column: History -->
            <div class="col-lg-6">
                <p>
                    We’re delighted to have you here! At Empowered Minds, we celebrate the unique potential of every
                    child. Our dedicated team provides personalized, high-quality education tailored to individual
                    needs in a nurturing environment.
                </p>
                <p>
                    Over the years, we have empowered students to build resilience and confidence on their
                    educational journey through our homeschool programs, after-school tutoring, and specialized
                    support services.
                </p>
                <p>
                    Welcome to our community, where we inspire and support every learner to reach their fullest
                    potential!
                </p>
            </div>

            <!-- Right Column: Image -->
            <div class="col-lg-6 text-center">
                <img src="assets/img/kids.png" alt="Our History Image" class="img-fluid rounded" style="margin-bottom: 0;">
            </div>
        </div>
    </div><!-- End Content Section -->

    <!-- Colored Divider -->
    <div style="background-color: #d57176; height: 50px; width: 100%;"></div>
</section>
<!-- /Our History -->













<section id="our-team" class="team section" style="position: relative; background: url('assets/img/teachers.jpg') no-repeat center center fixed; background-size: cover; padding: 50px 0;">
    <!-- Overlay -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);"></div>

    <div class="container text-center" data-aos="fade-up" style="position: relative; z-index: 2;">
        <h2 style="color: #fff;">Our Attributes</h2>
        <p style="color: #ddd;">Our team is composed of dedicated professionals who bring a wealth of expertise and passion to their roles, ensuring every child receives the support they need to thrive.</p>
    </div>

    <div class="container" style="position: relative; z-index: 2;">
        <div class="row gy-4">
            <!-- Professional & Experienced Teachers -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="team-attribute p-4 text-center rounded" style="background: rgba(255, 255, 255, 0.9); height: 250px; display: flex; flex-direction: column; justify-content: center;">
                    <h4>Professional & Experienced Teachers</h4>
                    <p>Certified and practical experience in individualized learning, homeschooling, and after-school tutoring.</p>
                </div>
            </div>

            <!-- Experienced Educators -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="team-attribute p-4 text-center rounded" style="background: rgba(255, 255, 255, 0.9); height: 250px; display: flex; flex-direction: column; justify-content: center;">
                    <h4>Experienced Educators</h4>
                    <p>Over 10 years in inclusive education, supporting learners with mainstream and special needs.</p>
                </div>
            </div>

            <!-- Technological Proficiency -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="team-attribute p-4 text-center rounded" style="background: rgba(255, 255, 255, 0.9); height: 250px; display: flex; flex-direction: column; justify-content: center;">
                    <h4>Technological Proficiency</h4>
                    <p>Skilled in diverse teaching methods and technology to support different learning styles.</p>
                </div>
            </div>

            <!-- Flexibility and Innovation -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="team-attribute p-4 text-center rounded" style="background: rgba(255, 255, 255, 0.9); height: 250px; display: flex; flex-direction: column; justify-content: center;">
                    <h4>Flexibility and Innovation</h4>
                    <p>Adaptable and innovative, tailoring approaches to meet individual child needs.</p>
                </div>
            </div>

            <!-- International Curriculum Experience -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="team-attribute p-4 text-center rounded" style="background: rgba(255, 255, 255, 0.9); height: 250px; display: flex; flex-direction: column; justify-content: center;">
                    <h4>International Curriculum Experience</h4>
                    <p>Experience with international curricula, especially in Dar es Salaam schools.</p>
                </div>
            </div>

            <!-- Child Protection & Special Needs Training -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="team-attribute p-4 text-center rounded" style="background: rgba(255, 255, 255, 0.9); height: 250px; display: flex; flex-direction: column; justify-content: center;">
                    <h4>Child Protection & Special Needs Training</h4>
                    <p>Trained staff in child protection policies and special needs education for effective support.</p>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- Team Section -->
<section id="team" class="team section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Our Team</h2>
    <p>Meet the dedicated professionals at Empowered Minds Learning Center who are committed to providing exceptional education for all learners.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <!-- Team Member 1: Director -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="team-member d-flex align-items-start">
          <div class="pic"><img src="assets/img/team/team-1.png" class="img-fluid" alt="Director Image"></div>
          <div class="member-info">
            <h4>Nyambura Makuru</h4>
            <span>Executive Director</span>
            <p>Passionate about fostering inclusive education systems and supporting diverse learners to thrive.</p>
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End Team Member -->

      <!-- Team Member 2: Curriculum Specialist -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="team-member d-flex align-items-start">
          <div class="pic"><img src="assets/img/team/team-2.png" class="img-fluid" alt="Curriculum Specialist Image"></div>
          <div class="member-info">
            <h4>Shaharzad Ashraff</h4>
            <span>Co Founder</span>
            <p>Dedicated to creating individualized learning pathways and enhancing student engagement.</p>
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End Team Member -->

    </div>

  </div>

</section>
<!-- /Team Section -->


@endsection