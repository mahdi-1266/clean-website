<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from bootstrapget.com/demos/soft-admin-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Jan 2026 06:45:17 GMT -->
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
    <link rel="shortcut icon" href="assets/images/favicon.svg" />

    <!-- *************
			************ CSS Files *************
		************* -->
    <!-- Remix Font Icons css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/fonts/remix/remixicon.css') }}" />

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/animate.css') }}" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/main.min.css') }}" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}" />

    <!-- *************
			************ Vendor CSS Files *************
		************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/overlay-scroll/OverlayScrollbars.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
  </head>

  <body>
    <!-- Page wrapper start -->
    <div class="page-wrapper">

      <!-- Main container start -->
      <div class="main-container">

      <!-- Sidebar wrapper start -->
      @include('admin.body.sidebar')
      <!-- Sidebar wrapper end -->

        <!-- App container starts -->
        <div class="app-container">

         <!-- App header starts -->
         @include('admin.body.header')
         <!-- App header ends -->

          <!-- App body starts -->

            @yield('adminBody')
          <!-- App body ends -->

         <!-- App footer start -->
         @include('admin.body.footer')
         <!-- App footer end -->

        </div>
        <!-- App container ends -->

      </div>
      <!-- Main container end -->

    </div>
    <!-- Page wrapper end -->

    <!-- *************
			************ JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="{{ asset('backend/assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/overlay-scroll/custom-scrollbar.js') }}"></script>

    <!-- Apex Charts JS -->
    <script src="{{ asset('backend/assets/vendor/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/apex/custom/ecommerce/orders.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/apex/custom/orders/income.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/apex/custom/orders/sparkline.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/apex/custom/orders/sales-over-time.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/apex/custom/orders/revenue-by-category.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/apex/custom/orders/email-campaign.js') }}"></script>


    <!-- Custom JS files -->
    <script src="{{ asset('backend/assets/js/custom.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <script>
      @if(Session::has('message'))
      var type = "{{ Session::get('alert-type','info') }}"
      switch(type){
        case 'info':
        toastr.info(" {{ Session::get('message') }} ");
        break;

        case 'success':
        toastr.success(" {{ Session::get('message') }} ");
        break;

        case 'warning':
        toastr.warning(" {{ Session::get('message') }} ");
        break;

        case 'error':
        toastr.error(" {{ Session::get('message') }} ");
        break;
      }
      @endif
    </script>

  </body>


<!-- Mirrored from bootstrapget.com/demos/soft-admin-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Jan 2026 06:45:59 GMT -->
</html>