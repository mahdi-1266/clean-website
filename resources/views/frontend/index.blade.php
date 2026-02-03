@extends('frontend.home')
@section('frontend')
<!-- Banner Section Start -->
<section class="banner-main splide" aria-label="Cleanysphere Banner Slider">
  <div class="splide__track">
    <ul class="splide__list">
      <!-- Slide 1 -->
      <li class="splide__slide slide-1">
        <div class="container">
          <div class="banner-content text-center text-white">
            <h2 class="display-4 fw-bold banner-title">Bring Back the Sparkle to Your Space</h2>
            <p class="py-3">From homes to offices, Cleanysphere delivers spotless results with eco-friendly cleaning you can trust. Enjoy a cleaner, healthier environment every day.</p>
            <a href="services.html" class="btn primary-btn fw-medium me-2 mb-2">Our Services</a>
          </div>
        </div>
      </li>

      

      <!-- Slide 2 -->
      <li class="splide__slide slide-2">
        <div class="container">
          <div class="banner-content text-center text-white">
            <h2 class="display-4 fw-bold banner-title">We Make Every Corner Shine</h2>
            <p class="py-3">Whether it’s deep cleaning or regular maintenance, our trained professionals ensure perfection in every detail — because you deserve spotless comfort.</p>
            <a href="pricing.html" class="btn primary-btn fw-medium me-2 mb-2">View Packages</a>
          </div>
        </div>
      </li>

      <!-- Slide 3 -->
      <li class="splide__slide slide-3">
        <div class="container">
          <div class="banner-content text-center text-white">
            <h2 class="display-4 fw-bold banner-title">Trusted Cleaning Experts You Can Rely On</h2>
            <p class="py-3">Experience peace of mind with Cleanysphere — safe, efficient, and 100% satisfaction guaranteed. Because a clean space means a happy place.</p>
            <a href="about.html" class="btn primary-btn fw-medium me-2 mb-2">Why Choose Us</a>
          </div>
        </div>
      </li>

    </ul>
  </div>
</section>
<!-- Banner Section End -->

<!-- About Section Start -->
<section class="about py-3 py-lg-5">
 <div class="container">
  <div class="row align-items-center g-3">
  <!-- Left Content -->
  <div class="col-lg-6 order-2 order-lg-1">
    <!-- Section Title -->
    <div class=" mb-3 mb-lg-5 position-relative z-2" data-aos="fade-up">
      <span class="sub-title text-uppercase fw-semibold primary-text fs-6">
        <i class="fa-solid fa-broom me-2 primary-text cleaning-icon"></i>About Cleanysphere
      </span>
      <h2 class="display-6 fw-bold mb-3 heading-text">
        Making Every Space Sparkle with — <span class="primary-text">Perfection</span>
      </h2>
      <p class="para-text mb-4">
        At <strong>Cleanysphere</strong>, we believe a clean environment inspires better living. From homes to offices, we deliver professional cleaning services using eco-friendly products and expert techniques — ensuring your spaces shine with care and precision.
      </p>
    </div>

    <div class="row gy-3">
      <div class="col-sm-6 d-flex">
        <div class="about-feature d-flex align-items-center p-3 rounded-4 shadow-sm w-100 h-100" data-aos="fade-up">
          <div class="icon-box me-3"><i class="fa-solid fa-spray-can-sparkles fa-lg"></i></div>
          <div>
            <h3 class="mb-1 fw-bold heading-text fs-6">Eco-Friendly Cleaning</h3>
            <p class="para-text">Safe for you & the environment</p>
          </div>
        </div>
      </div>

        <div class="col-sm-6 d-flex">
        <div class="about-feature d-flex align-items-center p-3 rounded-4 shadow-sm w-100 h-100" data-aos="fade-up">
          <div class="icon-box me-3"><i class="fa-solid fa-house-chimney fa-lg"></i></div>
          <div>
            <h3 class="mb-1 fw-bold heading-text fs-6">Residential Cleaning</h3>
            <p class="para-text mb-0">Homes that sparkle with care</p>
          </div>
        </div>
      </div>

    <div class="col-sm-6 d-flex">
        <div class="about-feature d-flex align-items-center p-3 rounded-4 shadow-sm w-100 h-100" data-aos="fade-up">
          <div class="icon-box me-3"><i class="fa-solid fa-building fa-lg"></i></div>
          <div>
            <h3 class="mb-1 fw-bold heading-text fs-6">Office Cleaning</h3>
            <p class="para-text mb-0">Boost productivity with a clean space</p>
          </div>
        </div>
      </div>

    <div class="col-sm-6 d-flex">
        <div class="about-feature d-flex align-items-center p-3 rounded-4 shadow-sm w-100 h-100" data-aos="fade-up">
          <div class="icon-box me-3"><i class="fa-solid fa-clock-rotate-left fa-lg"></i></div>
          <div>
            <h3 class="mb-1 fw-bold heading-text fs-6">On-Time Service</h3>
            <p class="para-text mb-0">We value your time, always</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Right Image -->
  <div class="col-lg-6 text-center order-1 order-lg-2">
    <img src="{{ asset('frontend/assets/about_img/01_img.webp') }}" alt="About Cleaning Image" class="img-fluid rounded-4 shadow about-image">
  </div>
  </div>
</div>
</section>
<!-- About Section End -->

<!-- Why Choose Us Section Start -->
<!-- <section class="why-choose-us py-5 position-relative">
   <div class="container">
      <div class="text-center mb-3 mb-lg-5 position-relative z-2" data-aos="fade-up">
        <span class="sub-title text-uppercase fw-semibold fs-6">
          <i class="fa-solid fa-broom me-2 primary-text cleaning-icon"></i>Why Choose Us
        </span>
        <h2 class="display-6 fw-bold mb-3 heading-text">
          We Don’t Just Clean — <span class="primary-text">We Care</span>
        </h2>
        <p class="para-text">
          Cleanysphere delivers spotless results with trusted professionals, eco-friendly solutions,
          and a 100% satisfaction guarantee that makes your space shine brighter.
        </p>
      </div>

      <div class="row g-4 text-center justify-content-center" data-aos="fade-up">
        <div class="col-md-6 col-lg-4">
          <div class="feature-card card-color rounded-3 position-relative overflow-hidden">
            <i class="fa-solid fa-user-shield feature-icon fs-1 primary-text mb-3"></i>
            <h3 class="heading-text fw-semibold fs-5">Trained & Verified Staff</h3>
            <p class="para-text">All our professionals are background-checked and expertly trained for your peace of mind.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="feature-card card-color rounded-3 position-relative overflow-hidden">
            <i class="fa-solid fa-leaf feature-icon fs-1 primary-text mb-3"></i>
            <h3 class="heading-text fw-semibold fs-5">Eco-Friendly Products</h3>
            <p class="para-text">We use safe, non-toxic cleaning agents that protect your health and the planet.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="feature-card card-color rounded-3 position-relative overflow-hidden">
            <i class="fa-solid fa-sack-dollar feature-icon fs-1 primary-text mb-3"></i>
            <h3 class="heading-text fw-semibold fs-5">Affordable Pricing</h3>
            <p class="para-text">Enjoy top-quality cleaning at transparent and budget-friendly prices.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="feature-card card-color rounded-3 position-relative overflow-hidden">
            <i class="fa-solid fa-bolt feature-icon fs-1 primary-text mb-3"></i>
            <h3 class="heading-text fw-semibold fs-5">Same-Day Service</h3>
            <p class="para-text">Need an urgent clean-up? Our team is ready to serve you on the same day.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="feature-card card-color rounded-3 position-relative overflow-hidden">
            <i class="fa-solid fa-thumbs-up feature-icon fs-1 primary-text mb-3"></i>
            <h3 class="heading-text fw-semibold fs-5">100% Satisfaction Guarantee</h3>
            <p class="para-text">Your happiness is our top priority — we don’t stop until you’re satisfied.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="bubbles">
      <span style="--i:11;"></span>
      <span style="--i:14;"></span>
      <span style="--i:19;"></span>
      <span style="--i:22;"></span>
      <span style="--i:25;"></span>
      <span style="--i:17;"></span>
      <span style="--i:9;"></span>
      <span style="--i:13;"></span>
    </div>
</section> -->
<!-- Why Choose Us Section End -->

<!-- Services Section Start -->
<!-- <section class="our-services py-5 body-color">
  <div class="container position-relative">
    <div class="text-center mb-3 mb-lg-5 position-relative z-2" data-aos="fade-up">
      <span class="sub-title text-uppercase fw-semibold primary-text fs-6">
        <i class="fa-solid fa-soap me-2 primary-text cleaning-icon"></i>Our Services
      </span>
      <h2 class="display-6 fw-bold mb-3 heading-text">
        Spotless Cleaning, <span class="primary-text">Every Time</span>
      </h2>
      <p class="para-text">
        Explore our professional cleaning services designed to make your home and workplace shine —
        handled by experts who care about every little detail.
      </p>
    </div>

    <div class="row g-4 justify-content-center" data-aos="fade-up">
      <div class="col-sm-6 col-lg-4 d-flex">
        <div class="service-glass-card  rounded-3 position-relative overflow-hidden card-color w-100 d-flex flex-column text-center p-4">
          <div class="icon-floating mb-3">
            <i class="fa-solid fa-house-chimney"></i>
          </div>
          <h3 class="heading-text fw-semibold mb-2 fs-5"><a href="services-details.html">Home Cleaning</a> </h3>
          <p class="para-text mb-0 mt-auto">Enjoy a dust-free, fresh, and sparkling home — we handle every corner with care.</p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4 d-flex">
        <div class="service-glass-card  rounded-3 position-relative overflow-hidden card-color w-100 d-flex flex-column text-center p-4">
          <div class="icon-floating mb-3">
            <i class="fa-solid fa-briefcase"></i>
          </div>
          <h3 class="heading-text fw-semibold mb-2 fs-5"><a href="services-details.html">Office Cleaning</a></h3>
          <p class="para-text mb-0 mt-auto">Keep your workspace hygienic and welcoming with our expert office cleaning solutions.</p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4 d-flex">
        <div class="service-glass-card  rounded-3 position-relative overflow-hidden card-color w-100 d-flex flex-column text-center p-4">
          <div class="icon-floating mb-3">
            <i class="fa-solid fa-spray-can-sparkles"></i>
          </div>
          <h3 class="heading-text fw-semibold mb-2 fs-5"><a href="services-details.html">Deep Cleaning</a></h3>
          <p class="para-text mb-0 mt-auto">Intensive cleaning service to reach hidden grime and renew your space completely.</p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4 d-flex">
        <div class="service-glass-card  rounded-3 position-relative overflow-hidden card-color w-100 d-flex flex-column text-center p-4">
          <div class="icon-floating mb-3">
            <i class="fa-solid fa-truck-moving"></i>
          </div>
          <h3 class="heading-text fw-semibold mb-2 fs-5"><a href="services-details.html">Move-In / Move-Out</a></h3>
          <p class="para-text mb-0 mt-auto">Make your moving process stress-free with our pre & post-move deep cleaning service.</p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4 d-flex">
        <div class="service-glass-card  rounded-3 position-relative overflow-hidden card-color w-100 d-flex flex-column text-center p-4">
          <div class="icon-floating mb-3">
            <i class="fa-solid fa-couch"></i>
          </div>
          <h3 class="heading-text fw-semibold mb-2 fs-5"><a href="services-details.html">Carpet & Sofa Cleaning</a></h3>
          <p class="para-text mb-0 mt-auto">Bring back the freshness and color of your furniture with expert care and steam cleaning.</p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4 d-flex">
        <div class="service-glass-card  rounded-3 position-relative overflow-hidden card-color w-100 d-flex flex-column text-center p-4">
          <div class="icon-floating mb-3">
            <i class="fa-solid fa-hand-sparkles"></i>
          </div>
          <h3 class="heading-text fw-semibold mb-2 fs-5">Sanitization</h3>
          <p class="para-text mb-0 mt-auto">Protect your family or team with professional-grade disinfection and sanitization.</p>
        </div>
      </div>

    </div>
    <div class="text-center mt-4 mt-lg-5" data-aos="fade-up">
      <a href="services.html" class="btn btn-view-services">
        View All Services
        <i class="fa-solid fa-arrow-right ms-2"></i>
      </a>
    </div>
  </div>
</section> -->
<!-- Services Section End -->

<!-- Project Section -->
<section class="portfolio-section text-white py-5">
  <div class="container">
      <!-- Section Title -->
      <div class="text-center mb-3 mb-lg-5 position-relative z-2" data-aos="fade-up">
        <span class="sub-title text-uppercase fw-semibold white-text fs-6">
          <i class="fa-solid fa-soap me-2 primary-text cleaning-icon"></i>Our cleaning portfolio
        </span>
        <h2 class="display-6 fw-bold mb-3 white-text">
          Check P ortfolio to <span class="primary-text">check quality</span>
        </h2>
        <p class="white-text">
      We show only the best websites and portfolios built completely with passion, simplicity & creativity.
        </p>
      </div>

      @php
        $portfolio = App\Models\Portfolio::all();
      @endphp

    <!-- Splide Slider -->
    <div id="portfolio-slider" class="splide">
      <div class="splide__track">
        <ul class="splide__list">
         @foreach ( $portfolio as $item)
            <li class="splide__slide">
              <div class="card card-color">
                <img src="{{ asset($item->image) }}" alt="Car Cleaning">
                <div class="p-3">
                  <h3 class="fw-bold heading-text fs-6">{{ $item->title }}</h3>
                  <p class="mb-0 para-text">{{ $item->desc }}</p>
                </div>
              </div>
            </li>
         @endforeach
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- How It Works Section Start -->
<section class="how-it-works-modern py-5">
  <div class="container">
      <!-- Section Title -->
      <div class="text-center mb-3 mb-lg-5 position-relative z-2" data-aos="fade-up">
        <span class="sub-title text-uppercase fw-semibold primary-text fs-6">
          <i class="fa-solid fa-hand-sparkles me-2 primary-text cleaning-icon"></i>How It Works
        </span>
        <h2 class="display-6 fw-bold mb-3 heading-text">
          Making Cleaning Simple<span class="primary-text"> Step-by-Step</span>
        </h2>
        <p class="para-text">
          Explore our professional cleaning services designed to make your home and workplace shine —
          handled by experts who care about every little detail.
        </p>
      </div>
    <!-- Process Steps -->
    <div class="row justify-content-center gy-4 gx-lg-5 text-center">
      <!-- Step 1 -->
      <div class="col-lg-3 col-md-6 d-flex" data-aos="zoom-in">
        <div class="process-card card-color d-flex flex-column">
          <div class="circle-icon">
            <span class="step-number">1</span>
            <i class="fa-solid fa-calendar-check"></i>
          </div>
          <h3 class="fw-bold mt-3 heading-text fw-semibold fs-5">Book Online</h3>
          <p class="para-text">Pick your preferred date, time, and service effortlessly.</p>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="col-lg-3 col-md-6 d-flex" data-aos="zoom-in">
        <div class="process-card card-color d-flex flex-column">
          <div class="circle-icon">
            <span class="step-number">2</span>
            <i class="fa-solid fa-van-shuttle"></i>
          </div>
          <h3 class="fw-bold mt-3 heading-text fw-semibold fs-5">We Arrive</h3>
          <p class="para-text">Our trusted team reaches your doorstep, fully equipped.</p>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="col-lg-3 col-md-6 d-flex" data-aos="zoom-in">
        <div class="process-card card-color d-flex flex-column">
          <div class="circle-icon">
            <span class="step-number">3</span>
            <i class="fa-solid fa-broom"></i>
          </div>
          <h3 class="fw-bold mt-3 heading-text fw-semibold fs-5">Clean & Shine</h3>
          <p class="para-text">Every corner cleaned with care using eco-friendly products.</p>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="col-lg-3 col-md-6 d-flex" data-aos="zoom-in">
        <div class="process-card card-color d-flex flex-column">
          <div class="circle-icon">
            <span class="step-number">4</span>
            <i class="fa-solid fa-couch"></i>
          </div>
          <h3 class="fw-bold mt-3 heading-text fw-semibold fs-5">Relax & Enjoy</h3>
          <p class="para-text">Sit back, breathe fresh air, and enjoy your spotless space.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- How It Works Section End -->

<!-- Recent Section Start -->
<section class="projects-section alt-color py-5">
  <div class="container">
      <!-- Section Title -->
      <div class="text-center mb-3 mb-lg-5 position-relative z-2" data-aos="fade-up">
        <span class="sub-title text-uppercase fw-semibold primary-text fs-6">
          <i class="fa-solid fa-hand-sparkles me-2 primary-text cleaning-icon"></i>Our Projects
        </span>
        <h2 class="display-6 fw-bold mb-3 heading-text">
          Our <span class="primary-text"> Recent projects</span>
        </h2>
        <p class="mx-auto para-text">
          Explore our professional cleaning services designed to make your home and workplace shine —
          handled by experts who care about every little detail.
        </p>
      </div>

    <!-- Project Grid -->
    <div class="row g-4">
      <!-- Project Item -->
      <div class="col-lg-4 col-md-6">
        <div class="project-card position-relative overflow-hidden rounded-4 shadow-sm" data-aos="fade-up">
          <img src="{{ asset('frontend/assets/project_img/01_img.webp') }}" alt="Home Cleaning" class="img-fluid w-100">
          <div class="project-overlay d-flex flex-column align-items-center justify-content-center text-center">
            <a href="project-details.html" class="view-btn" aria-label="view"><i class="fa-solid fa-eye"></i></a>
            <i class="fa-solid fa-house-chimney-window fa-2x mb-2 primary-text"></i>
            <h3 class="fw-bold mb-1 fs-5"> <a href="project-details.html">Home Cleaning</a></h3>
            <p class="small mb-0">Deep cleaning for a cozy, spotless home.</p>
          </div>
        </div>
      </div>

      <!-- Project Item -->
      <div class="col-lg-4 col-md-6">
        <div class="project-card position-relative overflow-hidden rounded-4 shadow-sm" data-aos="fade-up">
          <img src="{{ asset('frontend/assets/project_img/02_img.webp') }}" alt="Office Cleaning" class="img-fluid">
          <div class="project-overlay d-flex flex-column align-items-center justify-content-center text-center">
            <a href="project-details.html" class="view-btn" aria-label="view"><i class="fa-solid fa-eye"></i></a>
            <i class="fa-solid fa-building fa-2x mb-2 primary-text"></i>
            <h3 class="fw-bold mb-1 fs-5"> <a href="project-details.html">Office Cleaning</a></h3>
            <p class="small mb-0">Productivity begins with a clean workspace.</p>
          </div>
        </div>
      </div>

      <!-- Project Item -->
      <div class="col-lg-4 col-md-6 col-6">
        <div class="project-card position-relative overflow-hidden rounded-4 shadow-sm" data-aos="fade-up">
          <img src="{{ asset('frontend/assets/project_img/03_img.webp') }}" alt="Carpet Cleaning" class="img-fluid">
          <div class="project-overlay d-flex flex-column align-items-center justify-content-center text-center">
            <a href="project-details.html" class=" view-btn" aria-label="view"><i class="fa-solid fa-eye"></i></a>
            <i class="fa-solid fa-soap fa-2x mb-2 primary-text"></i>
            <h3 class="fw-bold mb-1 fs-5"><a href="project-details.html">Carpet Cleaning</a></h3>
            <p class="small mb-0">Restoring freshness and texture in every fiber.</p>
          </div>
        </div>
      </div>

      <!-- Project Item -->
      <div class="col-lg-4 col-md-6">
        <div class="project-card position-relative overflow-hidden rounded-4 shadow-sm" data-aos="fade-up">
          <img src="{{ asset('frontend/assets/project_img/04_img.webp') }}" alt="Carpet Cleaning" class="img-fluid">
          <div class="project-overlay d-flex flex-column align-items-center justify-content-center text-center">
            <a href="project-details.html" class=" view-btn" aria-label="view"><i class="fa-solid fa-eye"></i></a>
            <i class="fa-solid fa-truck-moving fa-2x mb-2 primary-text"></i>
            <h3 class="fw-bold mb-1 fs-5"><a href="project-details.html">Move-In / Move-Out</a></h3>
            <p class="small mb-0">Cleaning that welcomes your next chapter.</p>
          </div>
        </div>
      </div>

      <!-- Project Item -->
      <div class="col-lg-4 col-md-6">
        <div class="project-card position-relative overflow-hidden rounded-4 shadow-sm" data-aos="fade-up">
          <img src="{{ asset('frontend/assets/project_img/05_img.webp') }}" alt="Carpet Cleaning" class="img-fluid rounded-4">
          <div class="project-overlay d-flex flex-column align-items-center justify-content-center text-center">
            <a href="assets/project_img/05_img.webp" class="view-btn" aria-label="view"><i class="fa-solid fa-eye"></i></a>
              <i class="fa-solid fa-spray-can-sparkles fa-2x mb-2 primary-text"></i>
            <h3 class="fw-bold mb-1 fs-5">Sanitization</h3>
            <p class="small mb-0">Disinfection for safety & hygiene everywhere.</p>
          </div>
        </div>
      </div>

      <!-- Project Item -->
      <div class="col-lg-4 col-md-6">
        <div class="project-card position-relative overflow-hidden rounded-4 shadow-sm" data-aos="fade-up">
          <img src="{{ asset('frontend/assets/project_img/06_img.webp') }}" alt="Carpet Cleaning" class="img-fluid rounded-4">
          <div class="project-overlay d-flex flex-column align-items-center justify-content-center text-center">
            <a href="project-details.html" class=" view-btn" aria-label="view"><i class="fa-solid fa-eye"></i></a>
            <i class="fa-solid fa-wand-magic-sparkles fa-2x mb-2 primary-text"></i>
            <h3 class="fw-bold mb-1 fs-5"><a href="project-details.html">Window Cleaning</a></h3>
            <p class="small mb-0">Crystal clear views, every time.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mt-4 mt-lg-5 " data-aos="fade-up">
      <a href="projects.html" class="btn-view-services">
        View All Projects
        <i class="fa-solid fa-arrow-right ms-2"></i>
        </a>
    </div>
  </div>
</section>
<!-- Recent Projects Section End -->

<!-- Team Section Start -->
<section class="team-section py-5">
  <div class="container">
      <!-- Section Title -->
      <div class="text-center mb-3 mb-lg-5 position-relative z-2" data-aos="fade-up">
        <span class="sub-title text-uppercase fw-semibold primary-text fs-6">
          <i class="fa-solid fa-users me-2 primary-text cleaning-icon"></i>Our Team
        </span>
        <h2 class="display-6 fw-bold mb-3 heading-text">
              Meet Our <span class="primary-text"> Cleaning Experts</span>
        </h2>
        <p class="mx-auto para-text">
          Our experienced cleaning experts go beyond the surface — creating spotless, hygienic, and refreshing spaces that make every corner of your property shine.
        </p>
      </div>
    <!-- Team Grid -->
    <div class="row g-4" data-aos="fade-up">

      <!-- Team Member -->
      <div class="col-lg-3 col-md-6">
        <div class="team-card position-relative overflow-hidden rounded-4 shadow-sm">
          <img src="{{ asset('frontend/assets/team-img/team_img_1.webp') }}" alt="John Doe" class="img-fluid rounded-4">
          <div class="team-overlay d-flex flex-column align-items-center justify-content-center text-center">
            <h3 class="fw-bold mb-1 fs-5">John Doe</h3>
            <p class="small mb-2">Lead Cleaner</p>
            <div class="team-socials d-flex gap-2">
              <a class="social-icon" href="javascript:void(0)" aria-label="facebook"><i class="fab fa-facebook-f icons"></i></a>
              <a class="social-icon" href="javascript:void(0)" aria-label="instagram"><i class="fab fa-instagram icons"></i></a>
              <a class="social-icon" href="javascript:void(0)" aria-label="twitter"><i class="fa-brands fa-x-twitter icons"></i></a>
              <a class="social-icon" href="javascript:void(0)" aria-label="linkedin"><i class="fab fa-linkedin-in icons"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Team Member -->
      <div class="col-lg-3 col-md-6">
        <div class="team-card position-relative overflow-hidden rounded-4 shadow-sm">
          <img src="{{ asset('frontend/assets/team-img/team_img_2.webp') }}" alt="Jane Smith" class="img-fluid rounded-4">
          <div class="team-overlay d-flex flex-column align-items-center justify-content-center text-center">
            <h3 class="fw-bold mb-1 fs-5">Jane Smith</h3>
            <p class="small mb-2">Office Cleaning Expert</p>
            <div class="team-socials d-flex gap-2">
              <a class="social-icon" href="javascript:void(0)" aria-label="facebook"><i class="fab fa-facebook-f icons"></i></a>
              <a class="social-icon" href="javascript:void(0)" aria-label="instagram"><i class="fab fa-instagram icons"></i></a>
              <a class="social-icon" href="javascript:void(0)" aria-label="twitter"><i class="fa-brands fa-x-twitter icons"></i></a>
              <a class="social-icon" href="javascript:void(0)" aria-label="linkedin"><i class="fab fa-linkedin-in icons"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Team Member -->
      <div class="col-lg-3 col-md-6">
        <div class="team-card position-relative overflow-hidden rounded-4 shadow-sm">
          <img src="{{ asset('frontend/assets/team-img/team_img_3.webp') }}" alt="Mike Lee" class="img-fluid rounded-4">
          <div class="team-overlay d-flex flex-column align-items-center justify-content-center text-center">
            <h3 class="fw-bold mb-1 fs-5">Mike Lee</h3>
            <p class="small mb-2">Sanitization Specialist</p>
            <div class="team-socials d-flex gap-2">
              <a class="social-icon" href="javascript:void(0)" aria-label="facebook"><i class="fab fa-facebook-f icons"></i></a>
              <a class="social-icon" href="javascript:void(0)" aria-label="instagram"><i class="fab fa-instagram icons"></i></a>
              <a class="social-icon" href="javascript:void(0)" aria-label="twitter"><i class="fa-brands fa-x-twitter icons"></i></a>
              <a class="social-icon" href="javascript:void(0)" aria-label="linkedin"><i class="fab fa-linkedin-in icons"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Team Member -->
      <div class="col-lg-3 col-md-6">
        <div class="team-card position-relative overflow-hidden rounded-4 shadow-sm">
          <img src="{{ asset('frontend/assets/team-img/team_img_4.webp') }}" alt="Sara White" class="img-fluid rounded-4">
          <div class="team-overlay d-flex flex-column align-items-center justify-content-center text-center">
            <h3 class="fw-bold mb-1 fs-5">Sara White</h3>
            <p class="small mb-2">Window & Carpet Cleaning</p>
            <div class="team-socials d-flex gap-2">
              <a class="social-icon" href="javascript:void(0)" aria-label="facebook"><i class="fab fa-facebook-f icons"></i></a>
              <a class="social-icon" href="javascript:void(0)" aria-label="instagram"><i class="fab fa-instagram icons"></i></a>
              <a class="social-icon" href="javascript:void(0)" aria-label="twitter"><i class="fa-brands fa-x-twitter icons"></i></a>
              <a class="social-icon" href="javascript:void(0)" aria-label="linkedin"><i class="fab fa-linkedin-in icons"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Team Section End  -->

<!-- Testimonial Section Start -->
<section class="testimonial-section py-5 alt-color">
  <div class="container">
    <!-- Section Title -->
    <div class="text-center mb-3 mb-lg-5 position-relative z-2" data-aos="fade-up">
      <span class="sub-title text-uppercase fw-semibold primary-text fs-6">
        <i class="fa-solid fa-quote-left  me-2 primary-text cleaning-icon"></i>Testimonials
      </span>
      <h2 class="display-6 fw-bold mb-3 heading-text">
            What Our <span class="primary-text"> Clients Say</span>
      </h2>
      <p class="mx-auto para-text">
      We take pride in the satisfaction of our clients. Hear what our happy customers have to say about their sparkling clean spaces and the Cleanysphere experience.
      </p>
    </div>

    <!-- Splide Slider -->
    <div class="splide testimonial-slider">
      <div class="splide__track">
        <ul class="splide__list">

          <!-- Testimonial Item -->
          <li class="splide__slide">
            <div class="testimonial-card p-4 rounded-4 shadow-sm text-center">
              <img src="{{ asset('frontend/assets/testimonial_img/testi_img_1.webp') }}" alt="Client 1" class="testimonial-img mb-3 rounded-circle">
              <p class="para-text mb-3">
                "Cleanysphere did an amazing job cleaning my home! The staff were professional, friendly, and thorough. Highly recommend!"
              </p>
              <h3 class="fw-bold mb-0 heading-text fs-6">John Doe</h3>
              <small class="para-text">Homeowner</small>
              <div class="mt-2 text-warning">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </li>

          <!-- Testimonial Item -->
          <li class="splide__slide">
            <div class="testimonial-card p-4 rounded-4 shadow-sm text-center">
              <img src="{{ asset('frontend/assets/testimonial_img/testi_img_2.webp') }}" alt="Client 2" class="testimonial-img mb-3 rounded-circle">
              <p class="para-text mb-3">
                "Their office cleaning service is top-notch! Our workspace is spotless and feels much more productive."
              </p>
              <h3 class="fw-bold mb-0 heading-text fs-6">Jane Smith</h3>
              <small class="para-text">Office Manager</small>
              <div class="mt-2 text-warning">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </li>

          <!-- Testimonial Item -->
          <li class="splide__slide">
            <div class="testimonial-card p-4 rounded-4 shadow-sm text-center">
              <img src="{{ asset('frontend/assets/testimonial_img/testi_img_3.webp') }}" alt="Client 3" class="testimonial-img mb-3 rounded-circle">
              <p class="para-text mb-3">
                "The team is amazing! They sanitized our entire office and left everything sparkling clean. Highly professional!"
              </p>
              <h3 class="fw-bold mb-0 heading-text fs-6">Mike Lee</h3>
              <small class="para-text">Business Owner</small>
              <div class="mt-2 text-warning">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Testimonial Section End -->

<!-- FAQ -->
<section class="faq py-5">
    <div class="container">
      <!-- Section Title -->
      <div class="text-center mb-3 mb-lg-5 position-relative z-2" data-aos="fade-up">
        <span class="sub-title text-uppercase fw-semibold primary-text fs-6">
          <i class="fa-solid fa-circle-question me-2 primary-text cleaning-icon"></i>FAQs
        </span>
        <h2 class="display-6 fw-bold mb-3 heading-text">
          Frequently Asked <span class="primary-text">Questions</span>
        </h2>
        <p class="para-text">
          Have questions about our cleaning services, scheduling, or pricing?
          We’ve gathered the most common queries to help you find quick answers and plan your cleaning with confidence.
        </p>
      </div>

    <div class="row g-4">
    <div class="col-lg-8" data-aos="fade-up">
      <div class="accordion faq-accordion" id="faqAccordion">

        <!-- ACTIVE + OPEN ITEM -->
        <div class="accordion-item" role="presentation">
          <h2 class="accordion-header" id="qOne"  aria-level="2">
            <button class="accordion-button" type="button" data-bs-toggle="collapse"  data-bs-target="#qOneC" aria-expanded="true" aria-controls="qOneC">
              How do I book a cleaning service?
              <i class="fa-solid fa-angle-down faq-icon" aria-hidden="true"></i>
            </button>
          </h2>

          <div id="qOneC" class="accordion-collapse collapse show" role="region" aria-labelledby="qOne" data-bs-parent="#faqAccordion">
            <div class="accordion-body" role="textbox">
              You can easily book online, call us directly, or request a quote through our contact form.
              Same-day cleaning is available in select areas.
            </div>
          </div>
        </div>

        <!-- COLLAPSED ITEM -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="qTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#qTwoC" aria-expanded="false" aria-controls="qTwoC">
              What types of cleaning services do you offer?
              <i class="fa-solid fa-angle-down faq-icon"></i>
            </button>
          </h2>
          <div id="qTwoC" class="accordion-collapse collapse" role="region" aria-labelledby="qTwo"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              We offer residential, office, deep, carpet, move-in/out, and post-construction cleaning services.
              All services can be customized to your needs.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="qThree">
            <button class="accordion-button collapsed" type="button"  data-bs-toggle="collapse"
              data-bs-target="#qThreeC" aria-expanded="false" aria-controls="qThreeC">
              Do I need to provide cleaning supplies?
              <i class="fa-solid fa-angle-down faq-icon"></i>
            </button>
          </h2>
          <div id="qThreeC" class="accordion-collapse collapse" role="region" aria-labelledby="qThree"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              No — our team brings all the necessary eco-friendly products and professional equipment.
              However, we can use your preferred products if requested.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="qFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#qFourC" aria-expanded="false" aria-controls="qFourC">
              Are your cleaners trained and insured?
              <i class="fa-solid fa-angle-down faq-icon"></i>
            </button>
          </h2>
          <div id="qFourC" class="accordion-collapse collapse" role="region" aria-labelledby="qFour"
            data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Absolutely. All our cleaners are background-checked, fully trained, and insured
              for your peace of mind and safety.
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4" data-aos="fade-up">
      <div class="card card-soft text-center">
        <h3 class="mb-2 heading-text fs-5">Need Help?</h3>
        <p class="para-text">Have questions or need a quote? Our support team is available 24/7.</p>
        <h4 class="primary-text"><a href="tel:javascript:void(0)"> +123 456 7890</a></h4>
        <a href="#booking" class="btn primary-btn mt-3">Book a Cleaning</a>
      </div>
    </div>
  </div>

  </div>
</section>

<!-- Blog Section -->
<section class="blog-section alt-color py-5">
  <div class="container">
    <!-- Section Title -->
    <div class="text-center mb-3 mb-lg-5 position-relative z-2" data-aos="fade-up">
      <span class="sub-title text-uppercase fw-semibold primary-text fs-6">
        <i class="fa-solid fa-newspaper me-2 primary-text cleaning-icon"></i>Our Blog
      </span>
      <h2 class="display-6 fw-bold mb-3 heading-text">
        Latest <span class="primary-text">Cleaning Tips & Updates</span>
      </h2>
      <p class="para-text">
        Stay informed with expert cleaning advice, home care hacks, eco-friendly tips, and updates from our Cleanysphere team.
        Your go-to source for a cleaner, healthier lifestyle.
      </p>
    </div>

    <div id="blog-slider" class="splide">
      <div class="splide__track">
        <ul class="splide__list">

          <!-- Blog Card 1 -->
          <li class="splide__slide">
            <div class="card blog-card card-color h-100 d-flex flex-column">
              <img src="{{ asset('frontend/assets/blog_img/01_img.webp') }}" alt="Visit our office" class="img-fluid">
              <div class="p-3 d-flex flex-column flex-grow-1">
                <div class="blog-meta mb-2">
                  <i class="fa-regular fa-calendar"></i> 16 Jan, 2026
                </div>
                <h3 class="heading-text fw-semibold fs-6">Visit our office and see services.</h3>
                <p class="para-text flex-grow-1">
                  Quality service begins with quality people.
                </p>
                <a href="blog-details.html" class="read-more mt-auto">Read More +</a>
              </div>
            </div>
          </li>

          <!-- Blog Card 2 -->
          <li class="splide__slide">
            <div class="card blog-card card-color h-100 d-flex flex-column">
              <img src="{{ asset('frontend/assets/blog_img/02_img.webp') }}" alt="Toilet Cleaning" class="img-fluid">
              <div class="p-3 d-flex flex-column flex-grow-1">
                <div class="blog-meta mb-2">
                  <i class="fa-regular fa-calendar"></i> 01 Nov, 2025
                </div>
                <h3 class="heading-text fw-semibold fs-6">The Secret of Your Toilet Cleaning</h3>
                <p class="para-text flex-grow-1">
                  Certified operator receives extensive training.
                </p>
                <a href="blog-details.html" class="read-more mt-auto">Read More +</a>
              </div>
            </div>
          </li>

          <!-- Blog Card 3 -->
          <li class="splide__slide">
            <div class="card blog-card card-color h-100 d-flex flex-column">
              <img src="{{ asset('frontend/assets/blog_img/03_img.webp') }}" alt="Cleaning Your Home" class="img-fluid">
              <div class="p-3 d-flex flex-column flex-grow-1">
                <div class="blog-meta mb-2">
                  <i class="fa-regular fa-calendar"></i> 26 Oct, 2025
                </div>
                <h3 class="heading-text fw-semibold fs-6">The Secret of Cleaning Your Home</h3>
                <p class="para-text flex-grow-1">
                  Our team provides the best experience and results.
                </p>
                <a href="blog-details.html" class="read-more mt-auto">Read More +</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <div class="text-center mt-4 mt-lg-5 ">
      <a href="blogs.html" class="btn-view-services">
        View All Blogs
        <i class="fa-solid fa-arrow-right ms-2"></i>
        </a>
    </div>
  </div>
</section>

<!--appointment-section -->
<section class="appointment-section py-5">
    <div class="container">
      <!-- Section Title -->
      <div class="text-center mb-3 mb-lg-5 position-relative z-2" data-aos="fade-up">
        <h3 class="sub-title text-uppercase fw-semibold primary-text">
          <i class="fa-solid fa-calendar-check me-2 primary-text cleaning-icon fs-5"></i>Book Appointment
        </h3
        >
        <h4 class="display-6 fw-bold mb-3 heading-text">
          Schedule Your <span class="primary-text">Cleaning Service</span> Today
        </h4>
        <p class=" para-text">
          Choose your preferred time and service — our professional cleaners will handle the rest.
          Booking with Cleanysphere is quick, simple, and stress-free.
        </p>
      </div>

        <div class="row g-4">
            <!-- Appointment Form -->
            <div class="col-lg-6" data-aos="fade-up">
                <form  id="appointmentform" class="appointment-form p-4 rounded needs-validation" novalidate>
                    <h3 class="primary-text mb-3 fs-5"><i class="fas fa-file me-2"></i>Book Appointment</h3>
                    <div class="row g-3">
                        <!-- Full Name -->
                        <div class="col-md-6 position-relative">
                            <input type="text" class="form-control shadow-none" placeholder="Full Name" name="name" autocomplete="off" aria-label="full name"  required>
                        </div>
                        <!-- Email -->
                        <div class="col-md-6 position-relative">

                            <input type="email" class="form-control" placeholder="Email Address" name="email"
                                autocomplete="off" aria-label="email"  required>
                        </div>

                        <!-- Phone -->
                        <div class="col-md-6 position-relative">
                            <input type="tel" class="form-control shadow-none" placeholder="Phone Number" name="phone" oninput="this.value = this.value.replace(/[^0-9]/g, '')" oninput="this.value = this.value.replace(/[^0-9]/g, '')" oninput="this.value = this.value.replace(/[^0-9]/g, '')" autocomplete="off" aria-label="Phone Number" required>
                        </div>

                        <!-- cleaning-services Select -->
                        <div class="col-md-6 position-relative">
                          <select class="form-select" id="cleaning-services" name="cleaning-services" required>
                                <option value="" disabled selected hidden>Choose Services</option>
                                <option value="Home Cleaning">Home Cleaning</option>
                                <option value="Office Cleaning">Office Cleaning</option>
                                <option value="Deep Cleaning">Deep Cleaning</option>
                            </select>
                          <i class="fa-solid fa-chevron-down select-arrow"></i>

                        </div>
                        <!-- Date -->
                            <!-- Date -->
                            <div class="col-md-6 position-relative">
                                <input type="text" id="appointmentDate" class="form-control shadow-none date-input"
                                    placeholder="Select Date" name="date" autocomplete="off" aria-label="date"  required>
                                <i class="fa-solid fa-calendar-days input-icon"></i>
                            </div>

                            <!-- Time -->
                            <div class="col-md-6 position-relative">
                                <input type="text" id="appointmentTime" class="form-control shadow-none time-input"
                                    placeholder="Select Time" name="time" autocomplete="off" aria-label="time"  required>
                                <i class="fa-solid fa-clock input-icon"></i>
                            </div>

                        <!-- Message -->
                        <div class="col-12 position-relative">
                            <textarea class="form-control shadow-none" rows="3" aria-label="message"  placeholder="Message (Optional)"
                                name="message"></textarea>
                        </div>
                        <!-- Submit Button -->
                        <div class="col-12 text-center mt-2">
                            <button type="submit" name="bookapointment" class="btn primary-btn">Book Appointment</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Opening Hours -->
            <div class="col-lg-6" data-aos="fade-up">
                <div class="opening-hours p-4 shadow-sm rounded h-100 secondary-color">
                    <h3 class="fw-bold text-white mb-3 fs-5"><i class="fas fa-clock me-2"></i>Opening Hours</h3>
                    <ul class="list-unstyled mb-0">
                        <li class="d-flex justify-content-between text-white mb-2">
                            <span>Monday </span>
                            <span>08:00 AM - 09:00 PM</span>
                        </li>

                        <li class="d-flex justify-content-between text-white mb-2">
                            <span>Tuesday</span>
                            <span>08:00 AM - 09:00 PM</span>
                        </li>

                        <li class="d-flex justify-content-between text-white mb-2">
                            <span>Wednesday</span>
                            <span>08:00 AM - 09:00 PM</span>
                        </li>

                        <li class="d-flex justify-content-between text-white mb-2">
                            <span>Thursday </span>
                            <span>08:00 AM - 09:00 PM</span>
                        </li>

                        <li class="d-flex justify-content-between text-white mb-2">
                            <span>Friday </span>
                            <span>08:00 AM - 09:00 PM</span>
                        </li>

                        <li class="d-flex justify-content-between text-white mb-2">
                            <span>Saturday</span>
                            <span>08:00 AM - 09:00 PM</span>
                        </li>

                        <li class="d-flex justify-content-between text-white">
                            <span>Sunday</span>
                            <span>Closed</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section Start -->
<section class="pricing-section light-color py-5">
  <div class="container">
    <!-- Section Title -->
    <div class="text-center mb-3 mb-lg-5" data-aos="fade-up">
      <span class="sub-title text-uppercase fw-semibold primary-text fs-6">
        <i class="fa-solid fa-tags me-2 primary-text cleaning-icon"></i>Pricing Plans
      </span>

      <h2 class="display-6 fw-bold mb-3 heading-text">
        Choose Your <span class="primary-text">Perfect Cleaning Plan</span>
      </h2>

      <p class=" para-text">
        Transparent pricing with flexible plans to suit every home or office. No hidden fees, just spotless results!
      </p>
    </div>

    <!-- Pricing Cards -->
    <div class="row g-4 justify-content-center" data-aos="fade-up">
      <!-- Basic Plan -->
      <div class="col-lg-4 col-md-6">
        <div class="pricing-card rounded-4 shadow-sm text-center position-relative overflow-hidden card-color">
          <div class="pricing-header p-4 text-white">
            <p class="fw-bold mb-0 m-0 fs-5">Basic</p>
            <p class="mb-0">Home Cleaning</p>
          </div>
          <div class="pricing-body p-4">
            <h2 class="price-text primary-text fs-1 fw-bold">$49<span class="fs-6 para-text">/session</span></h2>
            <ul class="list-unstyled mt-3 mb-4 text-start">
              <li class="para-text"><i class="fa-solid fa-check  primary-text me-2"></i>General Cleaning</li>
              <li class="para-text"><i class="fa-solid fa-check  primary-text me-2"></i>Dusting & Vacuuming</li>
              <li class="para-text"><i class="fa-solid fa-check  primary-text me-2"></i>Surface Wipe Down</li>
              <li class="para-text"><i class="fa-solid fa-xmark me-2"></i>Deep Cleaning</li>
              <li class="para-text"><i class="fa-solid fa-xmark me-2"></i>Sanitization</li>
            </ul>
            <a href="#contact" class="btn primary-btn w-100">Get a Quote</a>
          </div>
        </div>
      </div>

      <!-- Standard Plan -->
      <div class="col-lg-4 col-md-6">
        <div class="pricing-card rounded-4 shadow-sm text-center position-relative overflow-hidden featured-plan card-color">
          <div class="pricing-header p-4 text-white">
            <p class="fw-bold mb-0 m-0 fs-5">Standard</p>
            <p class="mb-0">Home + Office Cleaning</p>
          </div>
          <div class="pricing-body p-4">
            <h2 class="price-text primary-text fs-1 fw-bold">$99<span class="fs-6 para-text">/session</span></h2>
            <ul class="list-unstyled mt-3 mb-4 text-start">
              <li class="para-text"><i class="fa-solid fa-check  primary-text me-2"></i>General Cleaning</li>
              <li class="para-text"><i class="fa-solid fa-check  primary-text me-2"></i>Deep Cleaning</li>
              <li class="para-text"><i class="fa-solid fa-check  primary-text me-2"></i>Sanitization</li>
              <li class="para-text"><i class="fa-solid fa-check  primary-text me-2"></i>Office Cleaning</li>
              <li class="para-text"><i class="fa-solid fa-xmark me-2"></i>Premium Add-ons</li>
            </ul>
            <a href="#contact" class="btn primary-btn w-100">Get a Quote</a>
          </div>
        </div>
      </div>

      <!-- Premium Plan -->
      <div class="col-lg-4 col-md-6">
        <div class="pricing-card rounded-4 shadow-sm text-center position-relative overflow-hidden card-color">
          <div class="pricing-header p-4 text-white">
            <p class="fw-bold mb-0 m-0 fs-5">Premium</p>
            <p class="mb-0">Complete Cleaning & Sanitization</p>
          </div>
          <div class="pricing-body p-4">
            <h2 class="price-text fw-bold primary-text fs-1">$149<span class="fs-6 para-text">/session</span></h2>
            <ul class="list-unstyled mt-3 mb-4 text-start">
              <li class="para-text"><i class="fa-solid fa-check  primary-text me-2"></i>All Services Included</li>
              <li class="para-text"><i class="fa-solid fa-check  primary-text me-2"></i>Deep Cleaning</li>
              <li class="para-text"><i class="fa-solid fa-check  primary-text me-2"></i>Sanitization</li>
              <li class="para-text"><i class="fa-solid fa-check  primary-text me-2"></i>Office & Home</li>
              <li class="para-text"><i class="fa-solid fa-check  primary-text me-2"></i>Premium Add-ons</li>
            </ul>
            <a href="#contact" class="btn primary-btn w-100">Get a Quote</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Pricing Section End -->

<!--Start Contact Section-->
<section class="body-color py-3 py-lg-5 alt-color">
      <div class="container">
        <!-- Section Title -->
        <div class="text-center mb-3 mb-lg-5 position-relative z-2" data-aos="fade-up">
          <span class="sub-title text-uppercase fw-semibold primary-text fs-6">
            <i class="fa-solid fa-headset me-2 primary-text cleaning-icon"></i>Contact Us
          </span>

          <h2 class="display-6 fw-bold mb-3 heading-text">
            Get in Touch with <span class="primary-text">Cleanysphere</span>
          </h2>

          <p class="para-text">
            Have questions or need a custom cleaning quote?
            Our support team is here to help you 7 days a week.
            Reach out and let’s make your space spotless!
          </p>
        </div>

          <div class="row g-3 align-items-center">
              <div class="col-md-12 col-lg-5">
                  <div class="">
                          <div class="d-flex mb-2 mb-lg-4 gap-4 align-items-center">
                              <div class="contact-iconbg">
                                <i class="fa-solid fa-location-dot fs-3"></i>
                              </div>
                              <div>
                                  <h3 class="heading-text m-0  py-3 fw-semibold">Location</h3>
                                  <p class="para-text m-0">123 ABC Road, Lorem Ipsum</p>
                              </div>
                          </div>
                          <div class="d-flex mb-2 mb-lg-4 gap-4 align-items-center">
                              <div class="contact-iconbg card-bg shadow">
                                  <i class="fa-solid fa-phone fs-3"></i>
                              </div>
                              <div>
                                  <h3 class="heading-text m-0 py-3 fw-semibold">Phone Number</h3>
                                  <p class="para-text m-0 pb-2"> <a href="tel:javascript:void(0)">+1234567890</a></p>
                                  <p class="para-text m-0"> <a href="tel:javascript:void(0)">+0005557770</a></p>
                              </div>
                          </div>
                          <div class="d-flex mb-2 mb-lg-4 gap-4 align-items-center">
                              <div class="contact-iconbg card-bg shadow">
                                <i class="fa-solid fa-envelope fs-3"></i>
                              </div>
                              <div>
                                  <h3 class="heading-text m-0 py-3 fw-semibold">Email</h3>
                                  <p class="para-text m-0 pb-2"> <a href="mailto:javascript:void(0)">info@example.com</a></p>
                                  <p class="para-text m-0"> <a href="mailto:javascript:void(0)">example@gmail.com</a></p>
                              </div>
                          </div>
                    </div>
              </div>
              <div class="col-md-12 col-lg-7 mb-3 mb-lg-0">
                  <div class="p-4 rounded-4 card-color py-3 py-lg-5">
                      <h4 class="text-capitalize heading-text m-0 mb-3 fw-semibold">Leave us a Message</h4>
                      <p class="para-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate iusto
                          dolor magni voluptas. Libero dolore deserunt corrupti expedita necessitatibus</p>
                       <form id="contactForm"  novalidate="novalidate">
                          <div class="row">
                              <div class="col-md-6 mb-4">
                                  <label for="u_fname" class="heading-text fw-semibold mb-2">First Name</label>
                                  <input type="text"
                                      class="form-control form-color form-text shadow-none py-3 rounded-3" aria-label="name"
                                      id="u_fname" name="u_fname" placeholder="Enter Your First Name" autocomplete="off" required="">
                              </div>
                              <div class="col-md-6 mb-4">
                                  <label for="u_lname" class="heading-text fw-semibold mb-2">Last Name</label>
                                  <input type="text"
                                      class="form-control form-color form-text shadow-none py-3 rounded-3" aria-label="name"
                                      id="u_lname" name="u_lname" placeholder="Enter Your Last Name" autocomplete="off" required="">
                              </div>
                              <div class="col-md-6 mb-4">
                                  <label for="u_email" class="heading-text fw-semibold mb-2">Email</label>
                                  <input type="email"
                                      class="form-control form-color form-text shadow-none py-3 rounded-3" aria-label="email"
                                      id="u_email" name="u_email" placeholder="Enter Your email" autocomplete="off" required="">
                              </div>
                              <div class="col-md-6 mb-4">
                                  <label for="u_number" class="heading-text fw-semibold mb-2">Phone</label>
                                  <input type="text"
                                      class="form-control form-color form-text shadow-none py-3 rounded-3" aria-label="number"
                                      id="u_number" name="u_number" oninput="this.value = this.value.replace(/[^0-9]/g, '')" placeholder="Enter Your phone" autocomplete="off" required="">
                              </div>
                              <div class="mb-4">
                                  <label for="u_message" class="heading-text fw-semibold mb-2">Message</label>
                                  <textarea name="u_message" id="u_message" rows="4" class="w-100 form-control form-control form-color form-text shadow-none rounded-3" aria-label="message" placeholder="Type Your Message Here...." required></textarea>
                              </div>
                              <div>
                                  <button type="submit" name="contactfmain"
                                      class="btn primary-btn px-5 rounded-pill fw-medium">Submit</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
</section>
<!--End Contact Section-->
@endsection