<!-- Top Bar (Email, Phone, Social Media) -->
<nav style="background-color:#d57176; position: fixed; top: 0; width: 100%; z-index: 1030;" class="navbar navbar-expand d-flex align-items-center">
    <div class="container-fluid">
        <!-- Left Section: Contact Info -->
        <ul class="navbar-nav d-flex flex-row contact-info" style="display: flex;">
            <li class="nav-item me-3">
                <a class="nav-link text-white d-flex align-items-center" href="tel:+255742177051">
                    <i class="bi bi-telephone me-1"></i>
                    <span>+255742177051</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white d-flex align-items-center" href="mailto:info@empoweredmindslearning">
                    <i class="bi bi-envelope me-1"></i>
                    <span>info@empoweredmindslearning</span>
                </a>
            </li>
        </ul>

        <!-- Right Section: Social Media Links -->
        <ul class="navbar-nav ms-auto d-flex flex-row social-media-links">
            <li class="nav-item me-3">
                <a class="nav-link text-white" href="https://www.facebook.com/" target="_blank">
                    <i class="bi bi-facebook"></i>
                </a>
            </li>
            <li class="nav-item me-3">
                <a class="nav-link text-white" href="https://www.instagram.com/" target="_blank">
                    <i class="bi bi-instagram"></i>
                </a>
            </li>
            <li class="nav-item me-3">
                <a class="nav-link text-white" href="https://x.com/" target="_blank">
                    <i class="bi bi-twitter"></i>
                </a>
            </li>
            <li class="nav-item">
    <a class="nav-link text-white" href="https://wa.me/+255742177051" target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>
</li>

        </ul>
    </div>
</nav>

<!-- Inline CSS for Responsiveness -->
<style>
    /* Hide contact info on screens smaller than 768px */
    @media (max-width: 768px) {
        .contact-info {
            display: none !important;
        }
    }

    /* Ensure social media links are always visible */
    .social-media-links {
        display: flex !important;
    }
</style>




<!-- Header Section -->
<header id="header" class="header d-flex align-items-center fixed-top" style="margin-top: 50px;">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <!-- Logo -->
        <a href="/" class="logo d-flex align-items-center me-auto">
            <h3 style="font-family: 'Gagalin', sans-serif; color:#d57176;">EMPOWERED MINDS</h3>
        </a>

        <!-- Navigation Menu -->
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/" class="active">Home</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('services') }}">Our Services</a></li>
                <!--li><a href="{{ route('newsandevents') }}">News & Events</a></li-->
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <!-- Enroll Button -->
        <a class="btn-getstarted" href="{{ route('enroll') }}" style="background-color: #d57176; color: white; padding: 8px 16px; border-radius: 4px; text-decoration: none;">Enroll Now</a>
        
    </div>
</header>
