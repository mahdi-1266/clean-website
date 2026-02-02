@extends('admin.admin_master')
@section('adminBody')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
                    <div class="me-3 border profile-img-container">
                      <img src="{{ (!empty($userInfo->photo)) ? url('upload/user_images/'.$userInfo->photo) : url('upload/no_image.jpg') }}" alt="Softism UI Kit" class="img-4x rounded-circle w-100 h-100">
                    </div>

                    <div>
                      <div class="fw-semibold">{{ $userInfo->name }}</div>
                      <div class="small text-muted">{{ $userInfo->email }}</div>
                    </div>
                  </div>
                  {{------ Profile Info End ------}}

                  <!-- Row starts -->
                  <div class="row gx-3">
                    {{-- Col Start --}}
                    <div class="col-xxl-9 col-sm-6">
                      <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="border rounded-2 p-3 mb-3">

                          <div class="w-100 d-block mb-4 border-bottom pb-2 px-3">
                            <h6 class="m-0">Personal Information</h6>
                          </div>

                          <div class="mb-3">
                            <label for="fullName" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="fullName"
                            value="{{ $userInfo->name }}">
                          </div>

                          <div class="mb-3">
                            <label for="yourEmail" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="yourEmail"
                            value="{{ $userInfo->email }}">
                          </div>

                          <div class="mb-3">
                            <label for="yourPhone" class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" id="phone"
                            value="{{ $userInfo->phone }}">
                          </div>

                          <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea name="address" id="address" cols="30" rows="3" type="text" class="form-control">{{ $userInfo->address }}</textarea>
                          </div>

                          <div class="mb-3">
                            <label for="photo" class="form-label">Profile Image</label>
                            <input type="file" name="photo" class="form-control" id="photo">
                          </div>

                          <div class="d-flex align-items-center">
                            <div class="me-3 profile-img-container">
                              <img id="showPhoto" src="{{ !empty($userInfo->photo) ? url('upload/user_images/'.$userInfo->photo) : url('upload/no_image.jpg') }}" alt="Softism UI Kit" class="img-4x rounded-circle w-100 h-100">
                            </div>
                          </div>

                          <div class="mt-3">
                            <button type="submit" class="btn btn-primary text-white">Save Changes</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    {{-- Col Start --}}

                    {{-- Col Start --}}
                    <div class="col-xxl-9 col-sm-6">
                      <form action="{{ route('admin.password.update') }}" method="POST" enctype="multipart/form-data">
                        <div class="border rounded-2 p-3 mb-3">

                          <div class="w-100 d-block mb-4 border-bottom pb-2 px-3">
                            <h6 class="m-0">Change Password</h6>
                          </div>

                            <div class="mb-3">
                              <label class="form-label" for="currentPwd">Current password <span
                              class="text-danger">*</span></label>

                              <div class="input-group">
                                <input type="password" id="current_password" placeholder="Enter Current password"
                                class="form-control @error('current_password') is-invalid @enderror" name="current_password">

                                @error('current_password')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror

                                <button class="btn btn-outline-dark" type="button">
                                  <i class="ri-eye-off-line text-black"></i>
                                </button>
                              </div>
                            </div>

                            <div class="mb-3">
                              <label class="form-label" for="newPwd">New password <span
                              class="text-danger">*</span></label>

                              <div class="input-group">
                                <input type="password" name="new_password" id="new_password" class="form-control @error('new_password') is-invalid @enderror"
                                placeholder="Your password must be 8-20 characters long.">

                                @error('new_password')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror

                                <button class="btn btn-outline-dark" type="button">
                                  <i class="ri-eye-line text-black"></i>
                                </button>
                              </div>
                            </div>

                            <div class="mb-3">
                              <label class="form-label" for="confNewPwd">Confirm new password <span
                              class="text-danger">*</span></label>

                              <div class="input-group">
                                <input type="password" name="confirm_new_password" id="confirm_new_password" placeholder="Confirm new password"
                                class="form-control @error('confirm_new_password') is-invalid @enderror">

                                @error('confirm_new_password')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror

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
                      </form>
                    </div>
                    {{-- Col End --}}
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

<script src="{{ asset('backend/assets/js/admin-profile.js') }}"></script>
@endsection