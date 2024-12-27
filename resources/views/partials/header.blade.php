<header id="header" class="header d-flex align-items-center fixed-top  padding: 1px; ">
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
              
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('services') }}">Our Services</a></li>
                <!--li><a href="">Our Team</a></li>
                <li><a href="">Activities</a></li-->
                <!--li class="dropdown">
                    <a href="#"><span>Programs</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="">Homeschooling</a></li>
                        <li><a href="">Inclusive Learning</a></li>
                        <li><a href="">Special Needs Education</a></li>
                        <li><a href="">Exam Preparation</a></li>
                        <li><a href="">Language Sessions</a></li>
                    </ul>
                </li-->
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <!-- Enroll Button -->
        <a class="btn-getstarted" href="{{ route('contact') }}" >Enroll Now</a>
    </div>
</header>
