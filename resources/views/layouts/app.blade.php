<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Empowered Minds Learning Center')</title>
    <meta name="description"
        content="Empowered Minds Learning Center provides inclusive, personalized, and innovative education for all levels, fostering independence and excellence.">
    <meta name="keywords"
        content="Empowered Minds, Education, Inclusive Learning, Personalized Learning, Special Needs Education, Homeschooling, Early Childhood Education, Exam Preparation, Extracurricular Activities">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.cdnfonts.com/css/gagalin" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Poppins:wght@300;700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- Glightbox CSS -->
    <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">

    <!-- Glightbox JS -->
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
</head>

<body class="index-page">

    <style>
        .sitename {
            font-family: 'Arial Black', 'Impact', sans-serif;
            /* Thicker web-safe fonts */
            font-weight: bold;
            /* Extra boldness */
            font-style: italic;
            /* Add italic style */
            color: #d57176;
            /* Theme color */
            text-align: center;
            /* Center-align if needed */
        }
    </style>




    <!-- Header -->
    @include('partials.header')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const lightbox = GLightbox({
                selector: '.glightbox', // Targets elements with this class
            });
        });
    </script>

    <script>

document.querySelectorAll('.next-step').forEach(button => {
    button.addEventListener('click', () => {
        const currentStep = button.closest('.form-step');
        const nextStep = currentStep.nextElementSibling;
        if (nextStep) {
            currentStep.style.display = 'none';
            nextStep.style.display = 'block';
        }
    });
});

document.querySelectorAll('.previous-step').forEach(button => {
    button.addEventListener('click', () => {
        const currentStep = button.closest('.form-step');
        const previousStep = currentStep.previousElementSibling;
        if (previousStep) {
            currentStep.style.display = 'none';
            previousStep.style.display = 'block';
        }
    });
});



    </script>


</body>

</html>
