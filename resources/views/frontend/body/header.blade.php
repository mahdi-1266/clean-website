<div class="topbar d-none d-lg-block secondary-color p-2 fs-7">
  <div class="container-xl">
    <div class="row align-items-center">
      <!-- Left Info -->
      <div class="col-lg-5">
        <ul class="topbar-info d-flex align-items-center gap-2 mb-0 list-unstyled">
          <li class="d-flex align-items-center gap-2">
            <i class="fa-solid fa-location-dot primary-text"></i>
            <span class="white-text">332 Lorem Ipsum, Florida, USA</span>
          </li>

          <li class="d-flex align-items-center gap-2">
            <i class="fa-solid fa-envelope primary-text"></i>
            <a href="mailto:info@example.com" class="white-text">info@example.com</a>
          </li>
        </ul>
      </div>

      <!-- Right Info -->
      <div class="col-lg-5">
        <div class="topbar-actions d-flex align-items-center justify-content-end gap-2">
            <div class="d-flex align-items-center gap-2">
               <i class="fa-solid fa-phone primary-text"></i>
               <a href="tel:javascript:void(0)" class="white-text">+1 123 456 7890</a>
            </div>

            <div class="d-flex align-items-center gap-2">
               <i class="fa-solid fa-clock primary-text"></i>
               <span class="white-text">Mon – Sat : 08:00 AM – 09:00 PM</span>
            </div>
        </div>
      </div>

      <div class="col-lg-2 p-0 ms-3 header-btn-container">
        <div class="w-100 h-100 d-flex justify-content-between align-items-center">
          <a href="{{ route('login') }}" class="btn text-white mb-3 mb-lg-0 ms-2">Login</a>
          <a href="{{ route('register') }}" class="btn text-white mb-3 mb-lg-0">Register</a>
        </div>
      </div>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg shadow-sm sticky-top body-color">
    <div class="container-xl">
     <!-- Brand Logo -->
    <a class="navbar-brand d-flex align-items-center" href="index-2.html">
      <div class="logo-box d-flex align-items-center justify-content-center">
        <img src="{{ asset('frontend/assets/logo/logo-light.png') }}" class="logo logo-light img-fluid" alt="Cleanysphere Light Logo" width="150">
        <img src="{{ asset('frontend/assets/logo/logo-dark.png') }}" class="logo logo-dark img-fluid" alt="Cleanysphere Dark Logo" width="150">
      </div>
    </a>

      <!-- Mobile Menu Button -->
      <button class="navbar-toggler" type="button"  data-bs-target="#offcanvasNavbar" data-bs-toggle="offcanvas" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" id="offcanvasbutton">
        <i class="fa-solid fa-bars-staggered nav-text"></i>
      </button>

      <!-- Offcanvas Menu -->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
          <div class="offcanvas-header">
              <a class="navbar-brand" href="index-2.html">
                <img src="{{ asset('frontend/assets/logo/logo-light.png') }}" class="logo logo-light img-fluid" alt="Cleanysphere Light Logo" width="150">
                <img src="{{ asset('frontend/assets/logo/logo-dark.png') }}" class="logo logo-dark img-fluid" alt="Cleanysphere Dark Logo" width="150">
              </a>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
                  <i class="fa-solid fa-xmark"></i>
              </button>
          </div>

          <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-lg-center align-items-lg-center flex-grow-1 text-capitalize  nav_ul">
                  <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>

                  <!-- Services Dropdown -->
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle d-flex align-items-center gap-2"
                          href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Services
                          <i class="fa-solid fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu custom-dropdown shadow">
                          <li class="dropdown-title p-3 py-2 mega-title">Our Services</li>
                          <li><hr class="dropdown-divider"></li>

                        <li>
                        <a class="dropdown-item" href="services.html">
                          <i class="fa-solid fa-list-check me-2"></i> All Services
                        </a>
                      </li>

                      <li>
                        <a class="dropdown-item" href="service-details.html">
                          <i class="fa-solid fa-circle-info me-2"></i> Service Details
                        </a>
                      </li>
                    </ul>
                  </li>

                  <!-- Projects Dropdown -->
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle d-flex align-items-center gap-2"
                      href="{{ route('all.projects') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Projects
                      </a>
                  </li>

                  <!-- Blogs Dropdown -->
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle d-flex align-items-center gap-2"
                          href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Blogs
                          <i class="fa-solid fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu custom-dropdown shadow">
                          <li class="dropdown-title p-3 py-2 mega-title">Our Blogs</li>
                          <li><hr class="dropdown-divider"></li>

                          <li>
                              <a class="dropdown-item" href="blogs.html">
                                  <i class="fa-solid fa-house-user me-2"></i> All Blogs
                              </a>
                          </li>
                          <li>
                              <a class="dropdown-item" href="blog-details.html">
                                  <i class="fa-solid fa-building me-2"></i> Blog Details
                              </a>
                          </li>
                      </ul>
                  </li>

                  <!-- Mega Menu -->
                <li class="nav-item dropdown mega-dropdown">
                  <a class="nav-link dropdown-toggle d-flex align-items-center gap-2"
                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Pages
                    <i class="fa-solid fa-angle-down"></i>
                  </a>

                  <div class="dropdown-menu mega-menu shadow">
                    <div class="container-fluid">
                      <div class="row g-4 align-items-stretch py-3">
                        <div class="col-lg-3 col-md-6">
                          <span class="mega-title">Company</span>

                          <a class="mega-link" href="booking-appointment.html">
                            <i class="fa-solid fa-calendar-check"></i> Booking Form
                          </a>

                          <a class="mega-link" href="teams.html">
                            <i class="fa-solid fa-users"></i> Our Team
                          </a>

                          <a class="mega-link" href="testimonials.html">
                            <i class="fa-solid fa-star"></i> Testimonials
                          </a>

                          <a class="mega-link" href="careers.html">
                            <i class="fa-solid fa-briefcase"></i> Careers
                          </a>
                        </div>

                        <!-- Column 2 : Pages -->
                        <div class="col-lg-3 col-md-6">
                          <span class="mega-title">Pages</span>

                          <a class="mega-link" href="pricing.html">
                            <i class="fa-solid fa-tags"></i> Pricing Plans
                          </a>

                          <a class="mega-link" href="faq.html">
                            <i class="fa-solid fa-circle-question"></i> FAQs
                          </a>

                          <a class="mega-link" href="gallery.html">
                            <i class="fa-solid fa-images"></i> Gallery
                          </a>
                        </div>

                        <!-- Column 3 : Utility -->
                        <div class="col-lg-3 col-md-6">
                          <span class="mega-title">Utility</span>

                          <a class="mega-link" href="privacy-policy.html">
                            <i class="fa-solid fa-shield-halved"></i> Privacy Policy
                          </a>

                          <a class="mega-link" href="terms-condition.html">
                            <i class="fa-solid fa-file-contract"></i> Terms & Conditions
                          </a>

                          <a class="mega-link" href="404.html">
                            <i class="fa-solid fa-triangle-exclamation"></i> 404 Page
                          </a>
                        </div>

                          <!-- Column 4 : Promo Banner -->
                          <div class="col-lg-3 d-none d-lg-block">
                            <div class="mega-banner">
                              <img src="{{ asset('frontend/assets/banner_img/bg-1.webp') }}" alt="Premium Template">
                              <div class="mega-banner-content">
                                <p class="fs-6 mb-3 fw-bold m-0">Professional Cleaning Services</p>
                                <p class="fs-6 m-0">Spotless • Reliable • Eco-Friendly</p>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
              </ul>

              <!-- CTA Button -->
              <a href="booking-appointment.html" class="btn primary-btn text-uppercase mb-3 mb-lg-0 me-2">Book Service</a>

          </div>
      </div>
    </div>
</nav>