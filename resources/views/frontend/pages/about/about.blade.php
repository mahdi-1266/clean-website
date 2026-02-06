@extends('frontend.home')
@section('frontend')

<!-- Page Banner -->
<section class="page-banner d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-2">
          <ol class="breadcrumb justify-content-center banner-breadcrumb">
            <li class="breadcrumb-item">
              <a href="/">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              About
            </li>
          </ol>
        </nav>

        <!-- Heading -->
        <h2 class="banner-title display-3 fw-bold white-text">
          About <span>Cleanysphere</span>
        </h2>

        <!-- Subtitle -->
        <p class="banner-subtitle mt-3 white-text">
          Professional Cleaning. Trusted Results.
        </p>

      </div>
    </div>
  </div>
</section>

<!-- About Section Start -->
@include('frontend.pages.components.about.index')
<!-- About Section End -->

<!-- Story Section Start -->
<section class="alt-color py-5">
  <div class="container">
    <div class="row align-items-center g-3">

      @php
        $story = App\Models\Story::get()->first();
      @endphp

     <!-- LEFT IMAGE -->
      <div class="col-lg-6" data-aos="fade-up">
        <div class="image-floating-card card-color rounded-5 p-3">
          <img src="{{ asset($story->image) }}" alt="Modern Cleaning Service" class="img-fluid rounded-4">
        </div>
      </div>

      <!-- RIGHT CONTENT -->
      <div class="col-lg-6 ps-lg-5">
      <!-- Section Title -->
      <div class=" mb-3 position-relative z-2" data-aos="fade-up">
        <span class="sub-title text-uppercase fw-semibold primary-text fs-6">
            <i class="fa-solid fa-broom me-2 primary-text cleaning-icon"></i>Cleanysphere Story
        </span>
        <h2 class="display-6 fw-bold mb-3 heading-text">
            {{ $story->title }}
        </h2>
        <p class="para-text">
            {{ $story->desc }}
        </p>
      </div>

        <!-- Trust Points -->
        <div class="intro-points mt-3">
          <div class="point-item para-text mb-2">
            <span class="primary-text me-1">✔</span> Trained & Verified Professionals
          </div>
          <div class="point-item para-text mb-2">
            <span class="primary-text me-1">✔</span> Eco-Friendly Cleaning Solutions
          </div>
          <div class="point-item para-text mb-2">
            <span class="primary-text me-1">✔</span> Quality You Can See & Feel
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Story Section End -->

<!-- Mission & Vision Section Start -->
<section class="mission-vision py-5">
  <div class="container">
    <!-- Section Title -->
    <div class="text-center mb-3 mb-lg-5 position-relative z-2" data-aos="fade-up">
      <span class="sub-title text-uppercase fw-semibold primary-text fs-6">
        <i class="fa-solid fa-soap me-2 primary-text cleaning-icon"></i>Our Purpose
      </span>
      <h2 class="display-6 fw-bold mb-3 heading-text">
          Mission &  <span class="primary-text">Vision </span>
      </h2>
      <p class=" para-text">
      What drives Cleanysphere forward and shapes the future of professional cleaning.
      </p>
    </div>

    <div class="row g-4 justify-content-center">

      <!-- Mission Card -->
      <div class="col-lg-5 col-md-6">
        <div class="mv-card mission-card" data-aos="fade-up">
          <div class="mv-icon">
            <i class="fa-solid fa-bullseye"></i>
          </div>
          <h3 class="fw-semibold heading-text mb-3 fs-4">Our Mission</h3>
          <p class="para-text m-0">
            To deliver reliable, high-quality cleaning services that create
            healthier living and working environments while exceeding customer
            expectations through professionalism and care.
          </p>
        </div>
      </div>

      <!-- Vision Card -->
      <div class="col-lg-5 col-md-6">
        <div class="mv-card vision-card" data-aos="fade-up">
          <div class="mv-icon">
            <i class="fa-solid fa-eye"></i>
          </div>
          <h3 class="fw-semibold heading-text mb-3 fs-4">Our Vision</h3>
          <p class="para-text m-0">
            To become a trusted leader in the cleaning industry by setting new
            standards in hygiene, sustainability, and customer satisfaction.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Mission & Vision Section End -->

<!-- Team Section Start -->
<section class="team-section alt-color py-5">
  <div class="container">
      <!-- Section Title -->
      <div class="text-center mb-3 mb-lg-5 position-relative z-2" data-aos="fade-up">
        <span class="sub-title text-uppercase fw-semibold primary-text fs-6">
          <i class="fa-solid fa-users me-2 primary-text cleaning-icon"></i>Our Team
        </span>
        <h2 class="display-6 fw-bold mb-3 heading-text">
              Meet Our <span class="primary-text"> Cleaning Experts</span>
        </h2>
        <p class="para-text">
          Our experienced cleaning experts go beyond the surface — creating spotless, hygienic, and refreshing spaces that make every corner of your property shine.
        </p>
      </div>
    <!-- Team Grid -->
    <div class="row g-4" data-aos="fade-up">
      <!-- Team Member -->
      <div class="col-lg-3 col-md-6 col-6">
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
      <div class="col-lg-3 col-md-6 col-6">
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
      <div class="col-lg-3 col-md-6 col-6">
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
      <div class="col-lg-3 col-md-6 col-6">
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
@endsection