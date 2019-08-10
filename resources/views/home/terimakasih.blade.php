@extends('layouts.frontend')
@section('content')
<div class="main-wrapper">

    <!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(http://demo.devitems.com/jadusona-v2/assets/images/hero/hero-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">
                	<center>
                    <h1>Belanja Sukses</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                    </ul>
                    </center>
                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->
    <center><img src="{{asset('frontend/assets/images/ty.png')}}"></center>

    <!-- Brand Section Start -->
    <div class="brand-section section mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
        <div class="container-fluid">
            <div class="row">
                <div class="brand-slider">

                    <div class="brand-item col">
                        <img src="frontend/assets/images/brands/brand-1.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="frontend/assets/images/brands/brand-2.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="frontend/assets/images/brands/brand-3.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="frontend/assets/images/brands/brand-4.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="frontend/assets/images/brands/brand-5.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="frontend/assets/images/brands/brand-6.png" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div><!-- Brand Section End -->
</body>

</html>

@endsection
@push('scripts')