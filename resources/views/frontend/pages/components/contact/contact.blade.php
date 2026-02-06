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
                       <form id="contactForm" method="POST" action="{{ route('store.contact') }}" novalidate="novalidate">
                        @csrf
                          <div class="row">
                              <div class="col-md-6 mb-4">
                                  <label for="u_fname" class="heading-text fw-semibold mb-2">First Name</label>
                                  <input type="text"
                                      class="form-control form-color form-text shadow-none py-3 rounded-3" aria-label="name"
                                      id="u_fname" name="name" placeholder="Enter Your First Name" autocomplete="off" required="">
                              </div>
                              <div class="col-md-6 mb-4">
                                  <label for="u_lname" class="heading-text fw-semibold mb-2">Last Name</label>
                                  <input type="text"
                                      class="form-control form-color form-text shadow-none py-3 rounded-3" aria-label="name"
                                      id="u_lname" name="lname" placeholder="Enter Your Last Name" autocomplete="off" required="">
                              </div>
                              <div class="col-md-6 mb-4">
                                  <label for="u_email" class="heading-text fw-semibold mb-2">Email</label>
                                  <input type="email"
                                      class="form-control form-color form-text shadow-none py-3 rounded-3" aria-label="email"
                                      id="u_email" name="email" placeholder="Enter Your email" autocomplete="off" required="">
                              </div>
                              <div class="col-md-6 mb-4">
                                  <label for="u_number" class="heading-text fw-semibold mb-2">Phone</label>
                                  <input type="text"
                                      class="form-control form-color form-text shadow-none py-3 rounded-3" aria-label="number"
                                      id="u_number" name="phone" oninput="this.value = this.value.replace(/[^0-9]/g, '')" placeholder="Enter Your phone" autocomplete="off" required="">
                              </div>
                              <div class="mb-4">
                                  <label for="u_message" class="heading-text fw-semibold mb-2">Message</label>
                                  <textarea name="message" id="u_message" rows="4" class="w-100 form-control form-control form-color form-text shadow-none rounded-3" aria-label="message" placeholder="Type Your Message Here...." required></textarea>
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