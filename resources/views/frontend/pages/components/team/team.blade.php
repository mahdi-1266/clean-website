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