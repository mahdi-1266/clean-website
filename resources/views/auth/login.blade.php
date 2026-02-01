<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapget.com/demos/soft-admin-template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Jan 2026 06:47:12 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Soft UI Admin Dashboard</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for admin templates" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.templatemonster.com/store/bootstrapgallery">
    <meta property="og:url" content="https://www.templatemonster.com/store/bootstrapgallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Softism UI Kit">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="BootstrapGet">
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.svg')}}" />

    <!-- *************
			************ CSS Files *************
		************* -->
    <!-- Remix Font Icons css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/fonts/remix/remixicon.css')}}" />

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/animate.css')}}" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/main.min.css')}}" />

  </head>

  <body class="login-bg">

    <!-- Container starts -->
    <div class="container">

      <!-- Auth wrapper starts -->
      <div class="auth-wrapper">

        <!-- Form starts -->
        <form method="POST" action="{{ route('login') }}">
          @csrf

          <div class="auth-box">
            <a href="index-2.html" class="auth-logo mb-4">
              <img src="{{ asset('backend/assets/images/logo.svg')}}" alt="Softism Admin Template">
            </a>

            <h4 class="mb-4">Login</h4>

            <div class="mb-3">
              <label class="form-label" for="email">Your email <span class="text-danger">*</span></label>
              <input type="text" id="email" type="email" name="email" class="form-control" placeholder="Enter your email">
            </div>

            <div class="mb-2">
              <label class="form-label" for="pwd">Your password <span class="text-danger">*</span></label>
              <div class="input-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter password">
                <button class="btn btn-outline-dark" type="button">
                  <i class="ri-eye-off-line"></i>
                </button>
              </div>
            </div>

            <div class="d-flex justify-content-end mb-3">
              <a href="forgot-password.html" class="text-decoration-underline">Forgot Password?</a>
            </div>

            <div class="mb-3 d-grid gap-2">
              <button type="submit" class="btn btn-primary">Login</button>
              <a href="{{ route('register') }}" class="btn btn-outline-primary">Not Registered? Signup</a>
            </div>

          </div>

        </form>
        <!-- Form ends -->

      </div>
      <!-- Auth wrapper ends -->

    </div>
    <!-- Container ends -->

  </body>
<!-- Mirrored from bootstrapget.com/demos/soft-admin-template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Jan 2026 06:47:12 GMT -->
</html>