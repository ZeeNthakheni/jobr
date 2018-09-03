<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
  <title>{{ config('app.name', 'Laravel') }}</title>

  

  <!-- plugins:css -->
  <link href="{{ asset('iconfonts/mdi/css/materialdesignicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/app.vendor.bundle.base.css') }}" rel="stylesheet">
  <!-- endinject -->

  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('favicon.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
        @include('partials.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      @include('partials.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            @include('partials.messages')
            @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        @include('partials.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <!-- Scripts -->
  <script src="{{ asset('js/vendor.bundle.base.js') }}" defer></script>
  
  <!-- Scripts -->
  <script src="{{ asset('js/vendor.bundle.addons.js') }}" defer></script>
  
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('js/off-canvas.js') }}" defer></script>
  <script src="{{ asset('js/misc.js') }}" defer></script>
  <script src="{{ asset('js/chart.js') }}" defer></script>
  <script src="{{ asset('js/file-upload.js') }}" defer></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
