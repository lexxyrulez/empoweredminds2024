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




<!-- About Section -->
<section id="about" class="about section">
  <div class="container section-title" data-aos="fade-up">
    <h2>About Us</h2>
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

<section id="portfolio" class="portfolio section">
  <div class="container section-title" data-aos="fade-up">
      <h2>Our Impact: Transforming Young Minds</h2>
      <p>Empowering learners through personalized, inclusive education.</p>
  </div>

  <div class="container">
      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-homeschooling">Homeschooling</li>
              <li data-filter=".filter-inclusive">Inclusive Learning</li>
              <li data-filter=".filter-earlychildhood">Early Childhood</li>
              <li data-filter=".filter-support">In-School Support</li>
              <li data-filter=".filter-specialneeds">Special Needs</li>
              <li data-filter=".filter-tuitions">Tuitions</li>
              <li data-filter=".filter-language">Language</li>
              <li data-filter=".filter-extracurricular">Extracurriculars</li>
          </ul>

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-homeschooling">
                  <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="Homeschooling">
                  <div class="portfolio-info">
                      <h4>Personalized Learning at Home</h4>
                      <p>Tailored curriculum, flexible schedules, and expert guidance.</p>
                      <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="Homeschooling" data-gallery="portfolio-gallery-homeschooling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="homeschooling-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-inclusive">
                  <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="Inclusive Learning">
                  <div class="portfolio-info">
                      <h4>Learning Together, Growing Together</h4>
                      <p>A supportive environment for all learners, regardless of ability.</p>
                      <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Inclusive Learning" data-gallery="portfolio-gallery-inclusive" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="inclusive-learning-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
              </div>

              </div>
      </div>
  </div>
</section>

@endsection