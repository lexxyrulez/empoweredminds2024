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

<section id="all-news" class="news section">
    <div class="container">
      <h2>All News and Events</h2>
      <div class="row">
        <!-- News Item -->
        <div class="col-lg-4 col-md-6">
          <div class="news-item">
            <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" alt="News 1" class="img-fluid">
            <h4><a href="news-details.html?id=1">News Title 1</a></h4>
            <p>Brief description of the news...</p>
            <a href="{{ route('news-details') }}" class="read-more">Read More</a>
          </div>
        </div>


        <div class="col-lg-4 col-md-6">
          <div class="news-item">
            <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" alt="News 1" class="img-fluid">
            <h4><a href="news-details.html?id=1">News Title 1</a></h4>
            <p>Brief description of the news...</p>
            <a href="news-details.html?id=1" class="read-more">Read More</a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="news-item">
            <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" alt="News 1" class="img-fluid">
            <h4><a href="news-details.html?id=1">News Title 1</a></h4>
            <p>Brief description of the news...</p>
            <a href="news-details.html?id=1" class="read-more">Read More</a>
          </div>
        </div>
        <!-- Repeat similar blocks for other news items -->
      </div>
    </div>
  </section>
  
@endsection