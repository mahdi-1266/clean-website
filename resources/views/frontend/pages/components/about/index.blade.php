<!-- About Section Start -->
<section class="about py-3 py-lg-5">
    @php
      $about = App\Models\About::get()->first();
    @endphp

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
        {{ $about->title }}
      </h2>
      <p class="para-text mb-4">
        {{ $about->desc }}
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
      <img src="{{ asset($about->image) }}" alt="About Cleaning Image" class="img-fluid rounded-4 shadow about-image">
    </div>
  </div>
  </div>
</section>
<!-- About Section End -->