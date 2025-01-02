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
                        <p>Unlock your child's potential with inclusive, innovative, and personalized education tailored to
                            every learner.</p>
                        <div class="d-flex">
                            <a href="{{ route('about') }}" class="btn-get-started">Learn More</a>
                            <a href="https://www.youtube.com/shorts/jNQAARx2jEs"
                                class="glightbox btn-watch-video d-flex align-items-center">
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
                            We’re delighted to have you here! At Empowered Minds, we celebrate the unique potential of every
                            child. Our dedicated team provides personalized, high-quality education tailored to individual
                            needs in a nurturing environment.

                            We empower students to build resilience and confidence on their educational journey through our
                            homeschool programs, after-school tutoring, and specialized support services.

                            Welcome to our community, where we inspire and support every learner to reach their fullest
                            potential!
                        </p>
                    </div>
                </div>

        </section>



        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container section-title" data-aos="fade-up">
                <div class=" hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <h2>Mission & Vision</h2>
                </div>

            </div>
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <h2>Our Mission</h2>
                        <p> Our mission is to create a nurturing environment for children
                            who face challenges in traditional schools by offering
                            individualized learning programs tailored to diverse needs. We
                            address the lack of specialized support and inclusive
                            frameworks, providing one-on-one attention for academic
                            success, while also accommodating unique curricula for families
                            with dynamic lifestyles.
                        </p>

                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <h2>Our Vision</h2>
                        <p>To be a leading educational center where every child is empowered to thrive and excel, regardless
                            of their unique challenges. We aim to redefine learning by fostering a culture of inclusivity,
                            innovation, and lifelong growth, inspiring confidence and success in every learner.</p>
                        <a href="#services" class="read-more"><span>Download Our Outline</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- /About Section -->

        <section id="portfolio" class="portfolio section"
            style="position: relative; background-image: url('assets/img/kids.jpg'); background-size: cover; background-position: center; background-attachment: fixed; height: 100vh; display: flex; align-items: center; justify-content: center; text-align: center;">
            <!-- Overlay for better text visibility -->
            <div
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.6);">
            </div>

            <!-- Content over the background -->
            <div style="position: relative; color: white; z-index: 1; max-width: 600px; padding: 20px;">
                <h2 style="font-size: 36px; margin-bottom: 15px; font-weight: bold;">Empowering Young Minds</h2>
                <p style="font-size: 18px; margin: 0; line-height: 1.6;">Creating a brighter future through personalized
                    education and fostering inclusivity for every learner.</p>
            </div>
        </section>









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
                            <img src="assets/img/logo.png" class="img-fluid" alt="Homeschooling">
                            <div class="portfolio-info">
                                <h4>Rebranding</h4>
                                <p>Join us as we celebrate a decade of transforming education and empowering young minds.
                                </p>
                                <a href="#" title="Homeschooling" data-gallery="portfolio-gallery-homeschooling"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="homeschooling-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-inclusive">
                            <img src="assets/img/logo.png" class="img-fluid" alt="Inclusive Learning">
                            <div class="portfolio-info">
                                <h4>Launching</h4>
                                <p>Top Award for Inclusive Education</p>
                                <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Inclusive Learning"
                                    data-gallery="portfolio-gallery-inclusive" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="inclusive-learning-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>

                        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-homeschooling">
                                <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid"
                                    alt="Homeschooling">
                                <div class="portfolio-info">
                                    <h4>Empowering Minds Celebrates 10 Year</h4>
                                    <p>Join us as we celebrate a decade of transforming education and empowering young
                                        minds.</p>
                                    <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="Homeschooling"
                                        data-gallery="portfolio-gallery-homeschooling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="homeschooling-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
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
                                <li class="na"><i class="bi bi-x"></i> <span>Additional extracurricular
                                        activities</span></li>
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
                <p>Here, we address your most common questions. Thank you for your interest in our services. We aim to
                    provide clarity and empower you with the answers you need. If you have any other questions, feel free to
                    reach out.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-10">

                        <div class="faq-container">

                            <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>How do you personalize the learning experience for each child?</h3>
                                <div class="faq-content">
                                    <p>Our team, together with experts in the field of special education, assesses each child’s strengths and challenges to create customized learning plans that cater to their unique needs and goals.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item -->

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>How can parents get involved in their child’s education?</h3>
                                <div class="faq-content">
                                    <p>Through the use of our management system (CLASTER), WhatsApp, and direct phone calls, we encourage parental involvement through regular communication, progress updates, and opportunities for collaboration in the learning process.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item -->

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>What steps are taken to ensure my child’s safety?</h3>
                                <div class="faq-content">
                                    <p>Our institution prioritizes the safety and well-being of all students. With dedicated
                                        staff, secure facilities, and strong communication channels with parents, we ensure
                                        that your child is in a safe environment to grow and thrive.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item -->

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>How do I track my child’s progress?</h3>
                                <div class="faq-content">
                                    <p>You will receive regular updates through our parent-teacher meetings, and we also
                                        provide a parent portal where you can track your child's grades, attendance, and
                                        development in real-time.</p>
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
                <p>We are proud to share how our families feel about our services and the impact we have had on their
                    children's education and growth. <span class="highlight">Shukran, Asante!</span></p>
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
                                <img src="assets/img/testimonials/testimonials-1.png" class="testimonial-img"
                                    alt="Saul Goodman">
                                <h3>Saul Goodman</h3>

                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>"My children are thriving, and it's because of the strong foundation this school
                                        has built for them. From every lesson to every interaction, we are grateful!"</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End Testimonial Item -->

                        <!-- Testimonial Item 2 -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.png" class="testimonial-img"
                                    alt="Sara Wilsson">
                                <h3>Sara Wilsson</h3>

                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>"I never imagined my children would enjoy school this much. The support from the
                                        teachers has been invaluable. We feel empowered as parents!"</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End Testimonial Item -->

                        <!-- Testimonial Item 3 -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.png" class="testimonial-img"
                                    alt="Jena Karlis">
                                <h3>Jena Karlis</h3>

                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>"My kids love coming to school, and the progress they make every day brings me
                                        joy. Their future is bright, thanks to the educators here!"</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End Testimonial Item -->

                        <!-- Testimonial Item 4 -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.png" class="testimonial-img"
                                    alt="Matt Brandon">
                                <h3>Matt Brandon</h3>

                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>"Being involved in my children's education has never been easier. The system here
                                        is empowering and inclusive—I'm happy to be a part of this community."</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End Testimonial Item -->

                        <!-- Testimonial Item 5 -->
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.png" class="testimonial-img"
                                    alt="John Larson">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>"This is more than just an educational institution; it's a partner in shaping the
                                        future of my children. Every parent should feel this empowered!"</span>
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
        <section id="call-to-action" class="call-to-action section dark-background"
            style="background-image: url('assets/img/cta-bg.gif'); background-size: cover; background-position: center;">

            <div class="container">
                <div class="row align-items-center" data-aos="zoom-in" data-aos-delay="100">

                    <!-- Text Content -->
                    <div class="col-xl-9 text-center text-xl-start">
                        <h3>Call To Action</h3>
                        <p>
                            "Join us to unlock your potential and embrace a journey of lifelong learning. We provide
                            tailored programs designed to inspire, educate, and empower individuals to achieve their goals."
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
