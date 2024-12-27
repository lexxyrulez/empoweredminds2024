@extends('layouts.app')

@section('title', 'Welcome - Empowered Minds Learning Center')

@section('content')

<main class="main">

<section id="hero" class="hero section dark-background">
  <div class="container">
  <h2></h2>
    <div class="row gy-4">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
      



        <h1>Empowering Minds, Building Futures</h1>
        <p>Unlock your child's potential with inclusive, innovative, and personalized education tailored to every learner.</p>
        <div class="d-flex">
          <a href="{{ route('about') }}" class="btn-get-started">Learn More</a>
          <a href="https://www.instagram.com/empoweredminds_learning/profilecard/?igsh=aTF0c3E3enk3MHNt" class="glightbox btn-watch-video d-flex align-items-center">
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

<!--div class="container">
    <div class="row gy-4">
      <h2>Mission</h2>
      <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
        <p>At Empowered Minds Learning Center, we believe in nurturing every learner's unique potential through inclusive and personalized education. Our programs are designed to foster independence, creativity, and academic excellence.</p>
        <ul>
          <li><i class="bi bi-check2-circle"></i> <span>Individualized homeschooling and support tailored to every learner's needs.</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>A team of experienced educators and collaborative specialists.</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Inclusive and modern teaching methods with flexible options.</span></li>
        </ul>
      </div>
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <h2>Vission</h2>
        <p>Empowered Minds is more than an educational center; it's a partner in creating exceptional futures for learners of all backgrounds. From early childhood to advanced studies, we provide a supportive and innovative environment that inspires growth.</p>
        <a href="#services" class="read-more"><span>Discover Our Services</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
  </div-->

<!-- Clients Section -->
<!--section id="clients" class="clients section light-background">
  <div class="container" data-aos="zoom-in">
    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": { "slidesPerView": 2, "spaceBetween": 40 },
            "480": { "slidesPerView": 3, "spaceBetween": 60 },
            "640": { "slidesPerView": 4, "spaceBetween": 80 },
            "992": { "slidesPerView": 5, "spaceBetween": 120 },
            "1200": { "slidesPerView": 6, "spaceBetween": 120 }
          }
        }
      </script>
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide"><img src="assets/img/partners/partner-1.png" class="img-fluid" alt="Partner 1"></div>
        <div class="swiper-slide"><img src="assets/img/partners/partner-2.png" class="img-fluid" alt="Partner 2"></div>
        <div class="swiper-slide"><img src="assets/img/partners/partner-3.png" class="img-fluid" alt="Partner 3"></div>
        <div class="swiper-slide"><img src="assets/img/partners/partner-4.png" class="img-fluid" alt="Partner 4"></div>
        <div class="swiper-slide"><img src="assets/img/partners/partner-5.png" class="img-fluid" alt="Partner 5"></div>
        <div class="swiper-slide"><img src="assets/img/partners/partner-6.png" class="img-fluid" alt="Partner 6"></div>
      </div>
    </div>
  </div>
</section-->

<!-- /Clients Section -->

<!-- About Section -->
<section id="about" class="about section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Welcoming Note</h2>
  </div>
  <div class="container">
  <div class="d-flex flex-column justify-content-center w-100">
    <div class="content px-3 px-lg-5" data-aos="fade-up" data-aos-delay="100">
        <h3>
            <span>Welcome to </span>
            <strong>Empowered Minds Learning Center!</strong>
        </h3>
        <p>
        We’re delighted to have you here! At Empowered Minds, we celebrate the unique potential of every child. Our dedicated team provides personalized, high-quality education tailored to individual needs in a nurturing environment.

We empower students to build resilience and confidence on their educational journey through our homeschool programs, after-school tutoring, and specialized support services.

Welcome to our community, where we inspire and support every learner to reach their fullest potential!
        </p>
    </div>
</div>

</section>

<!-- /About Section -->

<!-- Why Us Section -->
<!--section id="why-us" class="section why-us light-background" data-builder="section">

  <div class="container-fluid">

    <div class="row gy-4">

      <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">
        <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
          <h3>
            <span>Unlocking Potential Through </span>
            <strong>Guidance, Innovation, and Empowerment</strong>
          </h3>
          <p>
            At Empowered Minds, we believe in the transformative power of education and self-awareness. By connecting individuals to their unique strengths, we inspire a journey of continuous growth and achievement.
          </p>
        </div>

        <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

          <div class="faq-item faq-active">

            <h3><span>01</span> Individualized homeschooling</h3>
            <div class="faq-content">
              <p>Individualized homeschooling is a personalized educational approach where children learn at home with a tailored curriculum and flexible schedule.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item>

          <div class="faq-item">
            <h3><span>02</span> Quality Education</h3>
            <div class="faq-content">
              <p>Quality education empowers individuals, strengthens communities, and drives societal progress.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item>

          <div class="faq-item">
            <h3><span>03</span> inclusivity</h3>
            <div class="faq-content">
              <p>We ensure everyone feels welcome by embracing different perspectives, fostering open dialogue, and creating opportunities that cater to a wide range of abilities, cultures, and experiences.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item>

        </div>

      </div>

      <div class="col-lg-5 order-1 order-lg-2 why-us-img">
        <img src="assets/img/hero-img2.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
      </div>
    </div>

  </div>

</section--><!-- /Why Us Section -->

<!-- Skills Section -->
<section >

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row">

    

      

      <img src="assets/img/kids.jpg" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
      
       
      
      </div>
      
     

    </div>

  </div>

</section><!-- /Skills Section -->

<!-- Services Section -->
<!--section id="services" class="services section light-background">

  <!-- Section Title >
  <div class="container section-title" data-aos="fade-up">
    <h2>Services</h2>
    <p>Explore our comprehensive range of services tailored for holistic education and growth.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">
      
      <!-- Individualized Homeschooling >
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-activity icon"></i></div>
          <h4><a href="#" class="stretched-link">Individualized Homeschooling</a></h4>
          <p>Tailored education plans for personalized learning at home.</p>
        </div>
      </div><!-- End Service Item >

      <!-- Inclusive Learning >
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
          <h4><a href="#" class="stretched-link">Inclusive Learning</a></h4>
          <p>Fostering an environment that embraces diverse learning needs.</p>
        </div>
      </div><!-- End Service Item >

      <!-- Early Childhood Education >
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
          <h4><a href="#" class="stretched-link">Early Childhood Education</a></h4>
          <p>Building foundational skills and confidence for young learners.</p>
        </div>
      </div><!-- End Service Item >

      <!-- Exam Preparation >
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-book icon"></i></div>
          <h4><a href="#" class="stretched-link">Exam Preparation</a></h4>
          <p>Structured programs to help students excel in their exams.</p>
        </div>
      </div><!-- End Service Item >

      <!-- Special Needs Education >
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-person-circle icon"></i></div>
          <h4><a href="#" class="stretched-link">Special Needs Education</a></h4>
          <p>Specialized programs to support students with unique learning needs.</p>
        </div>
      </div><!-- End Service Item >

      <!-- After School Tuitions ->
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-clock icon"></i></div>
          <h4><a href="#" class="stretched-link">After School Tuitions</a></h4>
          <p>One-on-one sessions to reinforce concepts after regular school hours.</p>
        </div>
      </div><!-- End Service Item -->

      <!-- Language Sessions >
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="700">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-translate icon"></i></div>
          <h4><a href="#" class="stretched-link">Language Sessions</a></h4>
          <p>Improving language skills with a focus on communication and fluency.</p>
        </div>
      </div><!-- End Service Item >

      <!-- Extracurricular Activities >
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="800">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-person-workspace icon"></i></div>
          <h4><a href="#" class="stretched-link">Extracurricular Activities</a></h4>
          <p>Robotics, sports, performing arts, life skills, and more to enrich learning.</p>
        </div>
      </div><!-- End Service Item >

    </div>

  </div>

</section-->


<!-- /Services Section -->


<!-- /Call To Action Section -->

<!-- Portfolio Section -->
<!-- /Portfolio Section -->

<section id="portfolio" class="portfolio section">
  <div class="container section-title" data-aos="fade-up">
      <h2>News and Events</h2>
      <p>Stay updated with the latest news and happenings at Empowered Minds.</p>
  </div>

  <div class="container">
      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-homeschooling">Rebranding</li>
              <li data-filter=".filter-inclusive">Launching</li>
              <li data-filter=".filter-homeschooling">News 2</li>
              <li data-filter=".filter-inclusive">News 3</li>
              
          </ul>

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-homeschooling">
                  <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="Homeschooling">
                  <div class="portfolio-info">
                      <h4>Rebranding</h4>
                      <p>Join us as we celebrate a decade of transforming education and empowering young minds.</p>
                      <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="Homeschooling" data-gallery="portfolio-gallery-homeschooling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="homeschooling-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-inclusive">
                  <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="Inclusive Learning">
                  <div class="portfolio-info">
                      <h4>Launching</h4>
                      <p>Top Award for Inclusive Education</p>
                      <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Inclusive Learning" data-gallery="portfolio-gallery-inclusive" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="inclusive-learning-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
              </div>

              <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-homeschooling">
                  <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="Homeschooling">
                  <div class="portfolio-info">
                      <h4>Empowering Minds Celebrates 10 Year</h4>
                      <p>Join us as we celebrate a decade of transforming education and empowering young minds.</p>
                      <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="Homeschooling" data-gallery="portfolio-gallery-homeschooling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="homeschooling-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
              </div>

          
              </div>
      </div>
  </div>
</section>


<!-- Pricing Section -->
<section id="pricing" class="pricing section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>New Offers</h2>
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



<!-- Faq 2 Section -->
<section id="faq-2" class="faq-2 section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Frequently Asked Questions</h2>
    <p>Here, we address your most common questions. Thank you for your interest in our services. We aim to provide clarity and empower you with the answers you need. If you have any other questions, feel free to reach out.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row justify-content-center">

      <div class="col-lg-10">

        <div class="faq-container">

          <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>What curriculum do you follow?</h3>
            <div class="faq-content">
              <p></p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item -->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>What age groups do you serve?</h3>
            <div class="faq-content">
              <p></p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item -->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>What steps are taken to ensure my child’s safety?</h3>
            <div class="faq-content">
              <p>Our institution prioritizes the safety and well-being of all students. With dedicated staff, secure facilities, and strong communication channels with parents, we ensure that your child is in a safe environment to grow and thrive.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item -->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>How do I track my child’s progress?</h3>
            <div class="faq-content">
              <p>You will receive regular updates through our parent-teacher meetings, and we also provide a parent portal where you can track your child's grades, attendance, and development in real-time.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item -->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>Do you support children with learning challenges? </h3>
            <div class="faq-content">
              <p></p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item -->

        </div>

      </div>

    </div>

  </div>

</section>

<!-- /Faq 2 Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>What Parents Say</h2>
    <p>We are proud to share how our families feel about our services and the impact we have had on their children's education and growth. <span class="highlight">Shukran, Asante!</span></p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <!-- Swiper Carousel -->
    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          }
        }
      </script>
      <div class="swiper-wrapper">

        <!-- Testimonial Item 1 -->
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-1.png" class="testimonial-img" alt="Saul Goodman">
            <h3>Saul Goodman</h3>
           
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>"My children are thriving, and it's because of the strong foundation this school has built for them. From every lesson to every interaction, we are grateful!"</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End Testimonial Item -->

        <!-- Testimonial Item 2 -->
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-2.png" class="testimonial-img" alt="Sara Wilsson">
            <h3>Sara Wilsson</h3>
           
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>"I never imagined my children would enjoy school this much. The support from the teachers has been invaluable. We feel empowered as parents!"</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End Testimonial Item -->

        <!-- Testimonial Item 3 -->
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-3.png" class="testimonial-img" alt="Jena Karlis">
            <h3>Jena Karlis</h3>
         
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>"My kids love coming to school, and the progress they make every day brings me joy. Their future is bright, thanks to the educators here!"</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End Testimonial Item -->

        <!-- Testimonial Item 4 -->
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-4.png" class="testimonial-img" alt="Matt Brandon">
            <h3>Matt Brandon</h3>
           
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>"Being involved in my children's education has never been easier. The system here is empowering and inclusive—I'm happy to be a part of this community."</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End Testimonial Item -->

        <!-- Testimonial Item 5 -->
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-5.png" class="testimonial-img" alt="John Larson">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>"This is more than just an educational institution; it's a partner in shaping the future of my children. Every parent should feel this empowered!"</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End Testimonial Item -->

      </div>
      <div class="swiper-pagination"></div>
    </div><!-- End Swiper Carousel -->

  </div>

</section>

<!-- /Testimonials Section -->

<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section dark-background" style="background-image: url('assets/img/cta-bg.gif'); background-size: cover; background-position: center;">

<div class="container">
<div class="row align-items-center" data-aos="zoom-in" data-aos-delay="100">

  <!-- Text Content -->
  <div class="col-xl-9 text-center text-xl-start">
    <h3>Call To Action</h3>
    <p>
      "Join us to unlock your potential and embrace a journey of lifelong learning. We provide tailored programs designed to inspire, educate, and empower individuals to achieve their goals."
    </p>
  </div>

  <!-- Call to Action Button -->
  <div class="col-xl-3 cta-btn-container text-center">
    <a class="cta-btn align-middle btn btn-primary" href="#">Enroll Now</a>
  </div>

</div>
</div>

</section>


</main>

@endsection