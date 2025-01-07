@extends('layouts.app')

@section('title', 'Contact - Empowered Minds Learning Center')

@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<section id="call-to-action" class="call-to-action section dark-background" style="background-image: url('assets/img/pencil.jpg'); background-size: cover; background-position: center;">

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






<!-- /Call To Action Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
    <p>If you have any inquiries or need further assistance, please don't hesitate to reach out to us. We are here to help!</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-5">

        <div class="info-wrap">
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3>Address</h3>
              <p>Block 41, Kinondoni, Dar Es Salaam</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3>Call Us</h3>
              <p>+255742177051</p>
            </div>
          </div><!-- End Info Item -->

          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>Email Us</h3>
              <p>info@empoweredmindslearning.co.tz</p>
            </div>
          </div><!-- End Info Item -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.076822083297!2d39.27057227475557!3d-6.760487093236183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4d561ada95c3%3A0x5a5b8d881e3d6084!2sNyumbani%20Tutors%20Office!5e0!3m2!1sen!2stz!4v1733811729879!5m2!1sen!2stz" width="100%" height="270px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          <!--iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe-->
        </div>
      </div>

 <div class="col-lg-7">
  <form action="{{ route('contact.send') }}" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
    @csrf
    <div class="row gy-4">
        <div class="col-md-6">
            <label for="name-field" class="pb-2">Your Name</label>
            <input type="text" name="name" id="name-field" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label for="email-field" class="pb-2">Your Email</label>
            <input type="email" class="form-control" name="email" id="email-field" required>
        </div>

        <div class="col-md-12">
            <label for="subject-field" class="pb-2">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject-field" required>
        </div>

        <div class="col-md-12">
            <label for="message-field" class="pb-2">Message</label>
            <textarea class="form-control" name="message" rows="10" id="message-field" required></textarea>
        </div>

        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Send Message</button>
        </div>
    </div>
</form>

</div><!-- End Contact Form -->

    </div>

  </div>

</section>

<!-- Call To Action Section -->
     <!-- Call To Action Section -->
     <section id="call-to-action" class="call-to-action section dark-background"
    style="background-image: url('assets/img/cta-bg.gif'); background-size: cover; background-position: center;">

    <div class="container">
        <div class="row align-items-center" data-aos="zoom-in" data-aos-delay="100">

            <!-- Text Content -->
            <div class="col-xl-9 text-center text-xl-start">
                <h3 style="color: #d57176;">Call To Action</h3>
                <p style="background-color: #d57176; padding: 15px; border-radius: 5px; font-size: 16px; color:white;">
                    "Join us to unlock your potential and embrace a journey of lifelong learning. We provide tailored
                    programs designed to inspire, educate, and empower individuals to achieve their goals."
                </p>
            </div>

            <!-- Call to Action Button -->
            <div class="col-xl-3 cta-btn-container text-center">
                <a class="cta-btn align-middle btn btn-primary" href="#"
                    style="background-color: #d57176; color: white; padding: 12px 25px; border-radius: 25px; font-size: 16px; text-decoration: none; font-weight: bold;">
                    Enroll Now
                </a>
            </div>

        </div>
    </div>

</section>

<!-- /Contact Section -->

@endsection