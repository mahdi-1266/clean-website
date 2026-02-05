@extends('frontend.home')
@section('frontend')
<!-- Banner Section Start -->
<section class="banner-main splide" aria-label="Cleanysphere Banner Slider">
  <div class="splide__track">
    <ul class="splide__list">

      <!-- Slide 1 -->
      @php
        $heros = App\Models\HeroSection::get();
      @endphp

      @foreach ($heros as $hero)
        <li class="splide__slide slide-1">
          {{-- <div class="border border-5 border-warning w-100 h-100 position-absolute">
            <img src="{{ $hero->image }}" class="hero-img w-100 h-100" alt="">
          </div> --}}
          <div class="container">
            <div class="banner-content text-center text-white">
              <h2 class="display-4 fw-bold banner-title">{{ $hero->title }}</h2>
              <p class="py-3">{{ $hero->description }}</p>
              <a href="{{ $hero->link }}" class="btn primary-btn fw-medium me-2 mb-2">{{ $hero->button }}</a>
            </div>
          </div>
        </li>
      @endforeach
    </ul>
  </div>
</section>
<!-- Banner Section End -->

@include('frontend.pages.components.about.index')

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
        <p class="mx-auto para-text w-75">
          Explore our professional cleaning services designed to make your home and workplace shine —
          handled by experts who care about every little detail.
        </p>
      </div>

    <!-- Project Grid -->
    <div class="row g-4">

      <!-- Project Item -->
      @php
        $projects = App\Models\Projects::get();
      @endphp

      @foreach ($projects as $project)
        <div class="col-lg-4 col-md-6 col-6">
          <div class="project-card position-relative overflow-hidden rounded-4 shadow-sm">
            <img src="{{ asset($project->image) }}" alt="Home Cleaning" class="img-fluid w-100">

            <div class="project-overlay d-flex flex-column align-items-center justify-content-center text-center">
              <a href="project-details.html" class=" view-btn" aria-label="view">
                <i class="fa-solid fa-eye"></i>
              </a>

              <div class="project-img-container">
                <img src="{{ asset($project->icon) }}" alt="" class="w-75 h-75">
              </div>

              <h3 class="fw-bold mb-1 fs-5">{{ $project->title }}</h3>

              <p class="small mb-0">{{ $project->description }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <div class="text-center mt-4 mt-lg-5 " data-aos="fade-up">
      <a href="{{ route('all.projects') }}" class="btn-view-services">
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

        <p class="mx-auto para-text w-75">
          Our experienced cleaning experts go beyond the surface — creating spotless, hygienic, and refreshing spaces that make every corner of your property shine.
        </p>
      </div>
    <!-- Team Grid -->
    <div class="row g-4" data-aos="fade-up">

      <!-- Team Member -->
      @php
        $teamMemebers = App\Models\OurTeam::get();
      @endphp

      @foreach ($teamMemebers as $teamMemeber)
        <div class="col-lg-3 col-md-6">
          <div class="team-card position-relative overflow-hidden rounded-4 shadow-sm">

            <img src="{{ asset($teamMemeber->image) }}" alt="{{ $teamMemeber->name }}" class="img-fluid rounded-4">

            <div class="team-overlay d-flex flex-column align-items-center justify-content-center text-center">
              <h3 class="fw-bold mb-1 fs-5">{{ $teamMemeber->name }}</h3>
              <p class="small mb-2">{{ $teamMemeber->role }}</p>
              <div class="team-socials d-flex gap-2">
                <a class="social-icon" href="{{ $teamMemeber->facebook_link }}" aria-label="facebook"><i class="fab fa-facebook-f icons"></i></a>
                <a class="social-icon" href="{{ $teamMemeber->instagram_link }}" aria-label="instagram"><i class="fab fa-instagram icons"></i></a>
                <a class="social-icon" href="{{ $teamMemeber->twitter_link }}" aria-label="twitter"><i class="fa-brands fa-x-twitter icons"></i></a>
                <a class="social-icon" href="{{ $teamMemeber->linkedin_link }}" aria-label="linkedin"><i class="fab fa-linkedin-in icons"></i></a>
              </div>
            </div>

          </div>
        </div>
      @endforeach

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