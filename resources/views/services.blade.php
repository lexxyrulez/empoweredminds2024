@extends('layouts.app')

@section('title', 'Welcome - Empowered Minds Learning Center')

@section('content')

<section id="hero" class="hero section dark-background">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
        <h1>Empowering Minds, Building Futures</h1>
        <p>Unlock your child's potential with inclusive, innovative, and personalized education tailored for every learner.</p>
        <div class="d-flex">
          <a href="#about" class="btn-get-started">Learn More</a>
          <a href="https://drive.google.com/file/d/1nYAO4gSSusvDzannCjBe5X8cxlG4rPtv/view?usp=drive_link" class="glightbox btn-watch-video d-flex align-items-center">
            <i class="bi bi-play-circle"></i><span>Watch Our Story</span>
          </a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="assets/img/logo.png" class="img-fluid animated" alt="Empowered Minds">
      </div>
    </div>
  </div>
</section>


<section id="services" class="services section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Services</h2>
    <p>Explore our comprehensive range of services tailored for holistic education and growth.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">
      
      <!-- Individualized Homeschooling -->
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-activity icon"></i></div>
          <h4><a href="#" class="stretched-link">Individualized Homeschooling</a></h4>
          <p>Tailored education plans for personalized learning at home.</p>
        </div>
      </div><!-- End Service Item -->

      <!-- Inclusive Learning -->
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
          <h4><a href="#" class="stretched-link">Inclusive Learning</a></h4>
          <p>Fostering an environment that embraces diverse learning needs.</p>
        </div>
      </div><!-- End Service Item -->

      <!-- Early Childhood Education -->
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
          <h4><a href="#" class="stretched-link">Early Childhood Education</a></h4>
          <p>Building foundational skills and confidence for young learners.</p>
        </div>
      </div><!-- End Service Item -->

      <!-- Exam Preparation -->
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-book icon"></i></div>
          <h4><a href="#" class="stretched-link">Exam Preparation</a></h4>
          <p>Structured programs to help students excel in their exams.</p>
        </div>
      </div><!-- End Service Item -->

      <!-- Special Needs Education -->
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-person-circle icon"></i></div>
          <h4><a href="#" class="stretched-link">Special Needs Education</a></h4>
          <p>Specialized programs to support students with unique learning needs.</p>
        </div>
      </div><!-- End Service Item -->

      <!-- After School Tuitions -->
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-clock icon"></i></div>
          <h4><a href="#" class="stretched-link">After School Tuitions</a></h4>
          <p>One-on-one sessions to reinforce concepts after regular school hours.</p>
        </div>
      </div><!-- End Service Item -->

      <!-- Language Sessions -->
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="700">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-translate icon"></i></div>
          <h4><a href="#" class="stretched-link">Language Sessions</a></h4>
          <p>Improving language skills with a focus on communication and fluency.</p>
        </div>
      </div><!-- End Service Item -->

      <!-- Extracurricular Activities -->
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="800">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-person-workspace icon"></i></div>
          <h4><a href="#" class="stretched-link">Extracurricular Activities</a></h4>
          <p>Robotics, sports, performing arts, life skills, and more to enrich learning.</p>
        </div>
      </div><!-- End Service Item -->

    </div>

  </div>

</section>

<!-- Pricing Section -->
<section id="pricing" class="pricing section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Pricing</h2>
    <p>Select a plan that fits your schedule and budget at Empowered Minds Learning Center.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <!-- 3 Days Plan -->
      <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="pricing-item">
          <h3>3 Days Plan</h3>
          <h4><sup>$</sup>2000<span> / Year</span></h4>
          <ul>
            <li><i class="bi bi-check"></i> <span>Attend 3 days per week</span></li>
            <li><i class="bi bi-check"></i> <span>Access to core curriculum</span></li>
            <li><i class="bi bi-check"></i> <span>Standard educational resources</span></li>
            <li class="na"><i class="bi bi-x"></i> <span>Full-time school access</span></li>
            <li class="na"><i class="bi bi-x"></i> <span>Additional extracurricular activities</span></li>
          </ul>
          <a href="#" class="buy-btn">Buy Now</a>
        </div>
      </div><!-- End Pricing Item -->

      <!-- 5 Days Plan -->
      <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="pricing-item featured">
          <h3>5 Days Plan</h3>
          <h4><sup>$</sup>3000<span> / Year</span></h4>
          <ul>
            <li><i class="bi bi-check"></i> <span>Attend 5 days per week</span></li>
            <li><i class="bi bi-check"></i> <span>Access to extended curriculum</span></li>
            <li><i class="bi bi-check"></i> <span>Premium educational resources</span></li>
            <li><i class="bi bi-check"></i> <span>Extra-curricular activities included</span></li>
            <li class="na"><i class="bi bi-x"></i> <span>Full-time school access</span></li>
          </ul>
          <a href="#" class="buy-btn">Buy Now</a>
        </div>
      </div><!-- End Pricing Item -->

      <!-- 6 Days Plan -->
      <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
        <div class="pricing-item">
          <h3>6 Days Plan</h3>
          <h4><sup>$</sup>4000<span> / Year</span></h4>
          <ul>
            <li><i class="bi bi-check"></i> <span>Attend 6 days per week</span></li>
            <li><i class="bi bi-check"></i> <span>Full access to all curriculum</span></li>
            <li><i class="bi bi-check"></i> <span>Priority educational resources</span></li>
            <li><i class="bi bi-check"></i> <span>Full-time school access</span></li>
            <li><i class="bi bi-check"></i> <span>All extracurricular activities included</span></li>
          </ul>
          <a href="#" class="buy-btn">Buy Now</a>
        </div>
      </div><!-- End Pricing Item -->

    </div>

  </div>

</section>
<!-- /Pricing Section -->



@endsection