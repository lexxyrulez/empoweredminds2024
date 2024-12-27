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
  <div class=" hero-img" data-aos="zoom-out" data-aos-delay="200">
  <h2>About Us</h2>
      </div>
  
  </div>
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
        <p>At Empowered Minds Learning Center, we believe in nurturing every learner's unique potential through inclusive and personalized education. Our programs are designed to foster independence, creativity, and academic excellence.</p>
        <ul>
          <li><i class="bi bi-check2-circle"></i> <span>Individualized homeschooling and support tailored to every learner's needs.</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>A team of experienced educators and collaborative specialists.</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Inclusive and modern teaching methods with flexible options.</span></li>
        </ul>
      </div>
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <p>Empowered Minds is more than an educational center; it's a partner in creating exceptional futures for learners of all backgrounds. From early childhood to advanced studies, we provide a supportive and innovative environment that inspires growth.</p>
        <a href="#services" class="read-more"><span>Discover Our Services</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- /About Section -->





<!-- Portfolio Section -->
<!-- /Portfolio Section -->
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

      <!-- Team Member 3: Special Education Expert -->
      <!--div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <div class="team-member d-flex align-items-start">
          <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt="Special Education Expert Image"></div>
          <div class="member-info">
            <h4>Michael Johnson</h4>
            <span>Special Education Expert</span>
            <p>Focused on creating a learning environment where every student can succeed, regardless of their challenges.</p>
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End Team Member -->

      <!-- Team Member 4: Occupational Therapist -->
      <!--div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
        <div class="team-member d-flex align-items-start">
          <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt="Occupational Therapist Image"></div>
          <div class="member-info">
            <h4>Emily Williams</h4>
            <span>Occupational Therapist</span>
            <p>Specializing in helping students develop the skills necessary for daily living and academic success.</p>
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