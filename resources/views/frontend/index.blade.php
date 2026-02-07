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
@include('frontend.pages.components.team.team')
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
          @php
            $testimonials = App\Models\Testimonial::get();
          @endphp

          <!-- Testimonial Item -->
          @foreach ($testimonials as $testimonial)
            <li class="splide__slide">
              <div class="testimonial-card p-4 rounded-4 shadow-sm text-center">
                <img src="{{ asset($testimonial->image) }}" alt="Client 1" class="testimonial-img mb-3 rounded-circle">
                <p class="para-text message mb-3">{{ $testimonial->message }}</p>
                <h3 class="fw-bold mb-0 heading-text fs-6">{{ $testimonial->name }}</h3>
                <small class="para-text">{{ $testimonial->role }}</small>

                <div class="mt-2 text-warning stars">
                  @for ($i = 1; $i < 5; $i++)
                    @if($i <= $testimonial->rating)
                      <i class="fas fa-star text-warning"></i>
                    @else
                      <i class="fas fa-star text-muted"></i>
                    @endif
                  @endfor
                </div>
              </div>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Testimonial Section End -->

<!--Start Contact Section-->
@include('frontend.pages.components.contact.contact')
<!--End Contact Section-->
@endsection