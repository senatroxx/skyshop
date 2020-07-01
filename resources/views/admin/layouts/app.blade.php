<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Ecommerce Dashboard &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/dist/css/bootstrap-4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/all.min.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/jqvmap/dist/jqvmap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/dist/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/owl-carousel/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/owl-carousel/assets/owl.theme.default.min.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/admin/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/admin/components.css') }}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      @include('admin.layouts.components.header')
      @include('admin.layouts.components.sidebar')
      <div class="main-content">
        <section class="section">
          @yield('content')
        </section>
      </div>
    </div>
  </div>


  <!-- General JS Scripts -->
  <script src="{{ asset('assets/plugins/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap/dist/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/moment.min.js') }}"></script>
  <script src="{{ asset('assets/js/admin/stisla.js') }}"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/summernote/dist/summernote-bs4.js') }}"></script>

  <!-- Template JS File -->
  <script src="{{ asset('assets/js/admin/scripts.js') }}"></script>
  <script src="{{ asset('assets/js/admin/custom.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('assets/js/admin/page/index.js') }}"></script>
</body>
</html>