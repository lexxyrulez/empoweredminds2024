<nav style="background-color:#d57176" class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="container-fluid">
        <ul style="margin-left: 60px;" class="navbar-nav sm-icons">
            <li><a class="nav-link"><i style="color: white" class="bi bi-telephone"></i> <span style="color: white">+255742177051</span></a></li>
            <li><a class="nav-link"><i style="color: white" class="bi bi-envelope"></i><span style="color: white"> info@empoweredmindslearning</span></a></li>
        </ul>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    
                </li>
                <li class="nav-item">
                   
                </li>
                <li class="nav-item dropdown">
                    
                </li>
                <li class="nav-item">
                    
                </li>
            </ul>
            <ul style="margin-right: 60px"  class="navbar-nav sm-icons">
                <li><a class="nav-link" href="https://www.facebook.com/"><i style="color: white" class="bi bi-facebook"></i></a></li>
                <li><a class="nav-link" href="https://www.instagram.com/"><i style="color: white" class="bi bi-instagram"></i></a></li>
                <li><a class="nav-link" href="https://x.com/"><i style="color: white" class="bi bi-twitter-x"></i></a></li>
                <li><a class="nav-link" href="https://www.linkedin.com/"><i style="color: white" class="bi bi-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
</nav>
<header style="margin-top: 50px" id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="{{ asset('assets/img/logo.png') }}" alt="Empowered Minds Logo"> -->
            <h1 class="sitename">EMPOWERED MINDS</h1>
        </a>

        <!-- Navigation -->
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="active">Home</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('services') }}">Our Services</a></li>
                <li><a href="{{ route('newsandevents') }}">News & Events</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <!-- Enroll Button -->
        <a class="btn-getstarted" href="{{ route('contact') }}">Enroll Now</a>
    </div>
</header>
