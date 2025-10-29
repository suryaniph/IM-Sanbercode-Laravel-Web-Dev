<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('template/SEODash-1.0.0/src/assets/images/logos/seodashlogo.png')}}" />
  <link rel="stylesheet" href="{{asset('../../node_modules/simplebar/dist/simplebar.min.css')}}">
  <link rel="stylesheet" href="{{asset('template/SEODash-1.0.0/src/assets/css/styles.min.css')}}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include('partials.sidebar')
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
     @include('partials.header')
      <!--  Header End -->
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">@yield('title')</h5>
            @yield('content')
          </div>
        </div>
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank"
              class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a href="https://themewagon.com/" target="_blank"
              class="pe-1 text-primary text-decoration-underline">ThemeWagon</a></p>
        </div>
      </div>
    </div>
  </div>
  <script src="{{asset('template/SEODash-1.0.0/src/assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('template/SEODash-1.0.0/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('template/SEODash-1.0.0/src/assets/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{asset('template/SEODash-1.0.0/src/assets/js/sidebarmenu.js')}}"></script>
  <script src="{{asset('template/SEODash-1.0.0/src/assets/js/app.min.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>