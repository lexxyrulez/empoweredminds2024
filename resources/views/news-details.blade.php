
@extends('layouts.app')

@section('title', 'Welcome - Empowered Minds Learning Center')

@section('content')

<section id="call-to-action" class="call-to-action section dark-background" style="background-image: url('assets/img/teaching.jpg'); background-size: cover; background-position: center;">

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


<section id="news-details" class="news section">
    <div class="container">
      <!-- Main News Section -->
      <h2>News Title</h2>
      <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" alt="News Image" class="img-fluid">
      <p>Full description of the news goes here... This section contains all the details about the selected news.</p>

      <!-- Other News Section -->
      <div class="other-news mt-5">
        <h3>Other News</h3>
        <div class="row">
          <!-- Example Other News Item 1 -->
          <div class="col-lg-4 col-md-6">
            <div class="news-item">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" alt="News 2" class="img-fluid">
              <h4><a href="news-details.html?id=2">Other News Title 1</a></h4>
              <p>Short description of other news...</p>
            </div>
          </div>

          <!-- Example Other News Item 2 -->
          <div class="col-lg-4 col-md-6">
            <div class="news-item">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" alt="News 3" class="img-fluid">
              <h4><a href="news-details.html?id=3">Other News Title 2</a></h4>
              <p>Short description of other news...</p>
            </div>
          </div>

          <!-- Example Other News Item 3 -->
          <div class="col-lg-4 col-md-6">
            <div class="news-item">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" alt="News 4" class="img-fluid">
              <h4><a href="news-details.html?id=4">Other News Title 3</a></h4>
              <p>Short description of other news...</p>
            </div>
          </div>

          <!-- Add more news dynamically if needed -->
        </div>
      </div>
    </div>
  </section>
  @endsection