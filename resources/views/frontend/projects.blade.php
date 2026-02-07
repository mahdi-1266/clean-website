@extends('frontend.home')
@section('frontend')
  <section class="projects-section py-5">
    <div class="container">

      <!-- Section Title -->
      <div class="text-center mb-3 mb-lg-5 position-relative z-2" data-aos="fade-up">
        <span class="sub-title text-uppercase fw-semibold primary-text fs-6">
            <i class="fa-solid fa-hand-sparkles me-2 primary-text cleaning-icon"></i>Our Projects
        </span>
        <h2 class="display-6 fw-bold mb-3 heading-text">
            Our <span class="primary-text"> Recent projects</span>
        </h2>
        <p class="para-text w-75 m-auto">
            Explore our professional cleaning services designed to make your home and workplace shine —
            handled by experts who care about every little detail.
        </p>
      </div>

      <!-- Project Grid -->
      <div class="row g-4" data-aos="fade-up">

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

      {{-- Pagination --}}


      <div class="pagination d-flex justify-content-center mt-4">
        {{ $projects->links() }}
      </div>
      <!-- Pagination End -->

    </div>
  </section>
@endsection