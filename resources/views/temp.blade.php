<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Serein Premium Bootstrap Admin Dashboard Template</title>
  <link rel="stylesheet" href="{{ asset('serein/vendors/iconfonts/mdi/font/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('serein/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('serein/vendors/css/vendor.bundle.addons.css') }}">
  <link rel="stylesheet" href="{{ asset('serein/css/horizontal-layout/style.css') }}">
  <link rel="shortcut icon" href="{{ asset('serein/images/favicon.png') }}" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>

<body>

    @include('partials.header')
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')

  <script src="{{ asset('serein/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('serein/vendors/js/vendor.bundle.addons.js') }}"></script>
  <script src="{{ asset('serein/js/off-canvas.js') }}"></script>
  <script src="{{ asset('serein/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('serein/js/template.js') }}"></script>
  <script src="{{ asset('serein/js/settings.js') }}"></script>
  <script src="{{ asset('serein/js/todolist.js') }}"></script>
  <script src="{{ asset('serein/js/dashboard.js') }}"></script>
  <script src="{{ asset('serein/js/todolist.js') }}"></script>
  <script src="{{ asset('serein/js/modal-demo.js') }}"></script>
  <script src="{{ asset('serein/js/file-upload.js') }}"></script>
  <script src="{{ asset('serein/js/typeahead.js') }}"></script>
  <script src="{{ asset('serein/js/select2.js') }}"></script>
  <script src="{{ asset('serein/js/data-table.js') }}"></script>
  <script src="{{ asset('serein/js/alerts.js') }}"></script>
  <script src="{{ asset('serein/js/avgrund.js') }}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
   
   @stack('scripts')
  
</body>
</html>