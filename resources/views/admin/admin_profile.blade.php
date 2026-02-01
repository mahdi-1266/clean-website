@extends('admin.admin_master')
@section('adminBody')
<div class="app-body">

  <!-- Container starts -->
  <div class="container-fluid p-0">

    <!-- Row start -->
    <div class="row gx-4">
      <div class="col-sm-12">
        <div class="card mb-4">
          <div class="card-body">

            <!-- Tabs starts -->
            <ul class="nav nav-pills mb-3 gap-1" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link rounded-pill active " id="pills-a-tab" data-bs-toggle="pill"
                  data-bs-target="#pills-a" type="button" role="tab" aria-controls="pills-a"
                  aria-selected="true">General</button>
              </li>

              <li class="nav-item" role="presentation">
                <button class="nav-link rounded-pill" id="pills-f-tab" data-bs-toggle="pill"
                  data-bs-target="#pills-f" type="button" role="tab" aria-controls="pills-f"
                  aria-selected="false">Delete Account</button>
              </li>
            </ul>

            <div class="tab-content border-0 rounded-2" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-a" role="tabpanel"
                aria-labelledby="pills-a-tab" tabindex="0">



                <div class="border border-2">

                  {{------ Profile Info Start ------}}
                  <div class="d-flex align-items-center p-3 mb-3 border-bottom">
                    <div class="me-3">
                      <img src="{{ asset('backend/assets/images/user.png') }}" alt="Softism UI Kit" class="img-4x rounded-5">
                    </div>

                    <div>
                      <div class="fw-semibold">Sienna Brooks</div>
                      <div class="small text-muted">sienna@email.com</div>
                      <div class="small text-success">Credits: 5480/1000</div>
                    </div>
                  </div>
                  {{------ Profile Info End ------}}

                  <!-- Row starts -->
                  <div class="row gx-3">
                    <div class="col-xxl-9 col-sm-6">
                      <div class="border rounded-2 p-3 mb-3">

                        <div class="w-100 d-block mb-4 border-bottom pb-2 px-3">
                          <h6 class="m-0">Personal Information</h6>
                        </div>


                         <div class="mb-3">
                          <label for="fullName" class="form-label">Name</label>
                          <input type="text" class="form-control" id="fullName"
                            placeholder="Enter Full Name">
                        </div>

                        <div class="mb-3">
                          <label for="yourEmail" class="form-label">Email</label>
                          <input type="email" class="form-control" id="yourEmail"
                            placeholder="Enter Email">
                        </div>

                        <div class="mb-3">
                          <label for="yourPhone" class="form-label">Phone</label>
                          <input type="text" name="phone" class="form-control" id="phone"
                            placeholder="Enter Phone Number">
                        </div>

                        <div class="mb-3">
                          <label for="address" class="form-label">Address</label>
                          <textarea name="address" id="address" cols="30" rows="3" type="text" class="form-control" placeholder="Enter Address"></textarea>
                        </div>

                        <div class="mb-3">
                          <label for="profileImage" class="form-label">Profile Image</label>
                          <input type="file" name="photo" class="form-control" id="profileImage">
                        </div>

                        <div class="d-flex align-items-center">
                          <div class="me-3">
                            <img src="{{ asset('backend/assets/images/user.png') }}" alt="Softism UI Kit" class="img-4x rounded-5">
                          </div>
                        </div>

                        <div class="mt-3">
                          <button type="submit" class="btn btn-primary text-white">Save Changes</button>
                        </div>

                      </div>
                    </div>

                    <div class="col-xxl-9 col-sm-6">
                      <div class="border rounded-2 p-3 mb-3">

                        <div class="w-100 d-block mb-4 border-bottom pb-2 px-3">
                          <h6 class="m-0">Change Password</h6>
                        </div>

                          <div class="mb-3">
                            <label class="form-label" for="currentPwd">Current password <span
                                class="text-danger">*</span></label>
                            <div class="input-group">
                              <input type="password" id="currentPwd" placeholder="Enter Current password"
                                class="form-control">
                              <button class="btn btn-outline-dark" type="button">
                                <i class="ri-eye-off-line text-black"></i>
                              </button>
                            </div>
                          </div>

                          <div class="mb-3">
                            <label class="form-label" for="newPwd">New password <span
                                class="text-danger">*</span></label>
                            <div class="input-group">
                              <input type="password" id="newPwd" class="form-control"
                                placeholder="Your password must be 8-20 characters long.">
                              <button class="btn btn-outline-dark" type="button">
                                <i class="ri-eye-line text-black"></i>
                              </button>
                            </div>
                          </div>

                          <div class="mb-3">
                            <label class="form-label" for="confNewPwd">Confirm new password <span
                                class="text-danger">*</span></label>
                            <div class="input-group">
                              <input type="password" id="confNewPwd" placeholder="Confirm new password"
                                class="form-control">
                              <button class="btn btn-outline-dark" type="button">
                                <i class="ri-eye-line text-black"></i>
                              </button>
                            </div>
                          </div>

                        <div class="col-12 d-flex justify-content-start">
                          <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-primary">Change Password</button>
                            <button type="button" class="btn btn-danger ms-3">Cancel</button>
                          </div>
                        </div>
                      </div>
                      <!-- Row ends -->

                    </div>
                  </div>
                  <!-- Row ends -->
                </div>

              </div>



              <div class="tab-pane fade" id="pills-f" role="tabpanel" aria-labelledby="pills-f-tab"
                tabindex="0">

                <!-- Row starts -->
                <div class="row gx-4 justify-content-center">
                  <div class="col-sm-12">

                    <!-- Data starts -->
                    <div class="bg-danger-subtle rounded-3 w-50 m-auto border border-3 border-danger">
                      <div class="p-4 text-center">
                        <h5 class="text-danger mb-3">Delete Account?</h5>
                        <p class="mb-0">
                          Are you sure you want to delete your account? This action is permanent and cannot
                          be
                          undone. All your data will be removed from our system. If you proceed, you
                          will lose
                          access to your account and any associated information.
                        </p>
                        <div class="mt-3 d-flex justify-content-center gap-2">
                          <button type="button" class="btn btn-secondary">No Thanks</button>
                          <button type="button" class="btn btn-danger">
                            <strong>Yes, Delete</strong>
                          </button>
                        </div>
                      </div>
                    </div>
                    <!-- Data ends -->

                  </div>
                </div>
                <!-- Row ends -->
              </div>
            </div>
            <!-- Tabs ends -->

          </div>
        </div>
      </div>
    </div>
    <!-- Row end -->

  </div>
  <!-- Container ends -->

</div>
@endsection