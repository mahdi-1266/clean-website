<!DOCTYPE html>
<html lang="en" data-cs-theme="cs_light">


<!-- Mirrored from themeslab.lucidoutsourcing.com/demo/cleanysphere_multipage/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jan 2026 08:51:15 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <meta name="title" content="Cleanysphere | Professional Cleaning Services for Home & Office">
    <meta name="description" content="Cleanysphere offers expert cleaning services for homes, offices, and commercial spaces. Enjoy spotless spaces with our eco-friendly, reliable, and affordable cleaning solutions.">
    <meta name="author" content="Lucid Themeslab">

    <!-- SEO Meta Tags -->
    <meta name="keywords" content="Cleanysphere, cleaning services, home cleaning, office cleaning, deep cleaning, professional cleaners, eco-friendly cleaning, cleaning company, housekeeping services, cleaning agency">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <title>Cleanysphere | Professional Cleaning Services for Home & Office</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('frontend/assets/logo/fevicon.png') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Cleanysphere | Reliable & Eco-Friendly Cleaning Services">
    <meta property="og:description" content="Make your home and office shine with Cleanysphere. Trusted professionals, modern tools, and eco-friendly cleaning for a spotless experience.">
    <meta property="og:url" content="#">
    <meta property="og:type" content="website">
    <meta property="og:image" content="#">

    <!-- Twitter Meta -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="#">
    <meta property="twitter:title" content="Cleanysphere | Professional Cleaning Services">
    <meta property="twitter:description" content="Cleanysphere offers premium cleaning services for homes, offices, and commercial spaces. Clean smarter, live better.">
    <meta property="twitter:image" content="#">
    <meta name="twitter:site" content="#">

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="{{ asset('frontend/includes/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/includes/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/includes/css/splide.min.css') }}">
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/includes/css/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/includes/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/includes/css/style.css') }}">
    <!-- Glightbox CSS & JS -->
    <link rel="stylesheet" href="{{ asset('frontend/includes/css/glightbox.min.css') }}">

</head>

<body class="body-color">

<!-- Preloader Start -->
<!-- <div id="preloader">
  <div class="bubble-bg"></div>
  <img src="{{ asset('frontend/assets/logo/fevicon.png') }}" width="120" class="mb-3" alt="logo icon">
  <div class="bubble-container">
    <h2 class="brand-text dispplay-1">
       <span>C</span><span>l</span><span>e</span><span>a</span><span>n</span><span>y</span><span>s</span><span>p</span><span>h</span><span>e</span><span>r</span><span>e</span>
    </h2>
    <div class="shine"></div>
  </div>

  <div class="floating-bubbles">
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
  </div>
</div> -->
<!-- Preloader End -->

<!-- Start switchbtn -->
<button class="switchbtn" type="button" id="btnSwitch" aria-label="toggle mode">
  <span class="mode-icon-bg">
    <i class="fa fa-moon mode-icon"></i>
  </span>
</button>
<!-- End switchbtn -->

<!-- Topbar -->
@include('frontend.body.header')
<!-- Navbar End -->

@yield('frontend')

<!-- Footer Start -->
@include('frontend.body.footer')
<!-- Footer End -->

<!-- back to top -->
<a class="btn primary-btn back-to-top border-0  w-unset py-3 px-3 shadow primary-color" id="backtotop">
  <i class="fa-solid fa-angle-up white-text"></i>
</a>
<!-- back to top end -->

<!-- JS -->
<script src="{{ asset('frontend/includes/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/includes/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/includes/js/all.min.') }}js"></script>
<script src="{{ asset('frontend/includes/js/jquery.validate.js') }}"></script>
<script src="{{ asset('frontend/includes/js/jquery.nav.js') }}"></script>
<script src="{{ asset('frontend/includes/js/splide.min.js') }}"></script>
<script src="{{ asset('frontend/includes/js/aos.js') }}"></script>

<!-- Flatpickr JS -->
<script src="{{ asset('frontend/includes/js/flatpickr.js') }}"></script>
<script src="{{ asset('frontend/includes/js/glightbox.min.js') }}"></script>
<script src="{{ asset('frontend/includes/js/main.js') }}"></script>

</body>


<!-- Mirrored from themeslab.lucidoutsourcing.com/demo/cleanysphere_multipage/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jan 2026 08:51:37 GMT -->
</html>