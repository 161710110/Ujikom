@extends('layouts.frontend')
@section('content')

<div class="main-wrapper">

    <!-- Header Top End -->

    <!-- Hero Section Start -->
    <div class="hero-section section">

        <!-- Hero Slider Start -->
        <div class="hero-slider hero-slider-one fix">

            <!-- Hero Item Start -->
            <div class="hero-item" style="background-image: url(frontend/assets/images/banner_web1.jpg)">

                <!-- Hero Content -->
                <div class="hero-content">

                    <h1>Tersedia berbagai produk</h1>
                    <!-- <a href="#">SHOP NOW</a> -->

                </div>

            </div><!-- Hero Item End -->

            <!-- Hero Item Start -->
            <div class="hero-item" style="background-image: url(frontend/assets/images/banner_web1.jpg)">

                <!-- Hero Content -->
                <div class="hero-content">

                    <h1>Tersedia berbagai produk</h1>
                    <a href="{{ url('/shop') }}">BELANJA SEKARANG</a>

                </div>

            </div><!-- Hero Item End -->

        </div><!-- Hero Slider End -->

    </div><!-- Hero Section End -->

    <!-- Banner Section Start -->
        <!-- <div class="banner-section section mt-40 mt-xs-20 mb-60 mb-lg-40 mb-md-40 mb-sm-40 mb-xs-20">
        <div class="container-fluid">
            <div class="row row-10">

                <div class="col-lg-4 col-md-6 col-12 mb-20">
                    <div class="banner banner-1 content-left content-middle">

                        <a href="#" class="image"><img src="{{ asset('frontend/assets/images/banner/banner-1.jpg') }}" alt="Banner Image"></a>

                        <div class="content">
                            <h1>New Arrival <br>Baby’s Shoe <br>GET 30% OFF</h1>
                            <a href="#" data-hover="SHOP NOW">SHOP NOW</a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-20">
                    <a href="#" class="banner banner-2">

                        <img src="{{ asset('frontend/assets/images/banner/banner-2.jpg') }}" alt="Banner Image">

                        <div class="content bg-theme-one">
                            <h1>New Toy’s for your Baby</h1>
                        </div>

                        <span class="banner-offer">25% off</span>

                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-20">
                    <div class="banner banner-1 content-left content-top">

                        <a href="#" class="image"><img src="{{ asset('frontend/assets/images/banner/banner-3.jpg') }}" alt="Banner Image"></a>

                        <div class="content">
                            <h1>Trendy <br>Collections</h1>
                            <a href="#" data-hover="SHOP NOW">SHOP NOW</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        </div> --> 
    <!--  Banner Section End --> 
</br>
    <!-- Product Section Start -->
    <div class="product-section section mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
        <div class="container">

            <div class="row">
                <div class="section-title text-center col mb-30">
                    <h1>Produk Baru</h1>
                    <p>Semua produk baru ada disini</p>
                </div>
            </div>

            <div class="row">
                @foreach($fotbar as $data)

                <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">
                    <div class="product-item">
                        <div class="product-inner">

                            <div class="image">
                                <img src="{{ $data->foto, $data->nama }}" height="270px" width="320px" alt="">

                                <div class="image-overlay">
                                    <div class="action-buttons">
                                        <button><a href="{{ url('add-cart',$data->Barang->id) }}"><font size="1" color="black">Tambah Keranjang</font></a></button>
                                    </div>
                                </div>

                            </div>

                            <div class="content">

                                <div class="content-left">

                                    <h4 class="title"><a href="show/{{$data->Barang->slug}}">{{$data->Barang->nama_barang}}</a></h4>

                                    <h5 class="size">Ukuran: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                    <h5 class="price">Harga: RP. {{number_format($data->Barang->harga_barang,2,',','.')}}</h5>
                                    <h5 class="color">Warna: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                </div>

                                <!-- <div class="content-right">
                                    <span class="price">$25</span>
                                </div> -->

                            </div>

                        </div>
                    </div>
                </div>

@endforeach
            </div>

        </div>
    </div><!-- Product Section End -->

    <!-- Banner Section Start -->
        <!-- <div class="banner-section section fix mb-70 mb-lg-50 mb-md-50 mb-sm-50 mb-xs-30">
        <div class="row row-5">

            <div class="col-lg-4 col-md-6 col-12 mb-10">
                <div class="banner banner-3">

                    <a href="#" class="image"><img src="{{ asset('frontend/assets/images/banner/banner-4.jpg') }}" alt="Banner Image"></a>

                    <div class="content" style="background-image: url(frontend/assets/images/banner/banner-3-shape.png') }}")">
                        <h1>New Arrivals</h1>
                        <h2>Up to 35% off</h2>
                        <h4>2 - 5 Years</h4>
                    </div>
                    <a href="#" class="shop-link" data-hover="SHOP NOW">SHOP NOW</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-10">
                <div class="banner banner-4">
                    <a href="#" class="image"><img src="{{ asset('frontend/assets/images/banner/banner-5.jpg') }}" alt="Banner Image"></a>
                    <div class="content">
                        <div class="content-inner">
                            <h1>Online Shopping</h1>
                            <h2>Flat 25% off <br>New Trend for 2018</h2>
                            <a href="#" data-hover="SHOP NOW">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-10">
                <div class="banner banner-5">
                    <a href="#" class="image"><img src="{{ asset('frontend/assets/images/banner/banner-6.jpg') }}" alt="Banner Image"></a>
                    <div class="content" style="background-image: url(frontend/assets/images/banner/banner-5-shape.png') }}")">
                        <h1>Collection for <br>Baby Girl’s</h1>
                        <h2>Flat 25% off</h2>
                    </div>
                    <a href="#" class="shop-link" data-hover="SHOP NOW">SHOP NOW</a>
                </div>
            </div>
        </div>
        </div> -->
    <!-- Banner Section End -->

    <!-- Product Section Start -->
        <!-- <div class="product-section section mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mb-40">
                        <div class="row">
                            <div class="section-title text-left col mb-30">
                                <h1>Best Deal</h1>
                                <p>Exclusive deals for you</p>
                            </div>
                        </div>
                        <div class="best-deal-slider row">
                            <div class="slide-item col">
                                <div class="best-deal-product">
                                    <div class="image"><img src="{{ asset('frontend/assets/images/product/best-deal-1.jpg') }}" alt=""></div>
                                    <div class="content-top">
                                        <div class="content-top-left">
                                            <h4 class="title"><a href="#">2 Piece Shirt Set</a></h4>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                        <div class="content-top-right">
                                            <span class="price">$13 <span class="old">$28</span></span>
                                        </div>
                                    </div>
                                    <div class="content-bottom">
                                        <div class="countdown" data-countdown="2019/06/20"></div>
                                        <a href="#" data-hover="SHOP NOW">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item col">
                                <div class="best-deal-product">
                                    <div class="image"><img src="{{ asset('frontend/assets/images/product/best-deal-2.jpg') }}" alt=""></div>
                                    <div class="content-top">
                                        <div class="content-top-left">
                                            <h4 class="title"><a href="#">Kelly Shirt Set</a></h4>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <div class="content-top-right">
                                            <span class="price">$09 <span class="old">$25</span></span>
                                        </div>
                                    </div>
                                    <div class="content-bottom">
                                        <div class="countdown" data-countdown="2019/06/20"></div>
                                        <a href="#" data-hover="SHOP NOW">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-12 pl-50 pl-sm-15 pl-xs-15">
                        <div class="row">
                            <div class="section-title text-left col mb-30">
                                <h1>On Sale Products</h1>
                                <p>All featured product find here</p>
                            </div>
                        </div>
                        <div class="small-product-slider row row-7">
                            <div class="col mb-40">
                                <div class="on-sale-product">
                                    <a href="single-product.html" class="image"><img src="{{ asset('frontend/assets/images/product/on-sale-1.jpg') }}" alt=""></a>
                                    <div class="content text-center">
                                        <h4 class="title"><a href="single-product.html">Skily Girld Dress</a></h4>
                                        <span class="price">$19 <span class="old">$35</span></span>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-40">
                                <div class="on-sale-product">
                                    <a href="single-product.html" class="image"><img src="{{ asset('frontend/assets/images/product/on-sale-2.jpg') }}" alt=""></a>
                                    <div class="content text-center">
                                        <h4 class="title"><a href="single-product.html">Kelly Shirt Set</a></h4>
                                        <span class="price">$08 <span class="old">$25</span></span>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-40">
                                <div class="on-sale-product">
                                    <a href="single-product.html" class="image"><img src="{{ asset('frontend/assets/images/product/on-sale-3.jpg') }}" alt=""></a>
                                    <div class="content text-center">
                                        <h4 class="title"><a href="single-product.html">Sleeveless Tops</a></h4>
                                        <span class="price">$05 <span class="old">$12</span></span>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-40">
                                <div class="on-sale-product">
                                    <a href="single-product.html" class="image"><img src="{{ asset('frontend/assets/images/product/on-sale-4.jpg') }}" alt=""></a>
                                    <div class="content text-center">
                                        <h4 class="title"><a href="single-product.html">Babysuit Bundle</a></h4>
                                        <span class="price">$25 <span class="old">$45</span></span>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-40">
                                <div class="on-sale-product">
                                    <a href="single-product.html" class="image"><img src="{{ asset('frontend/assets/images/product/on-sale-5.jpg') }}" alt=""></a>
                                    <div class="content text-center">
                                        <h4 class="title"><a href="single-product.html">Xshuai Baby Frock</a></h4>
                                        <span class="price">$13 <span class="old">$28</span></span>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-40">
                                <div class="on-sale-product">
                                    <a href="single-product.html" class="image"><img src="{{ asset('frontend/assets/images/product/on-sale-6.jpg') }}" alt=""></a>
                                    <div class="content text-center">
                                        <h4 class="title"><a href="single-product.html">Stylish Hat</a></h4>
                                        <span class="price">$03 <span class="old">$10</span></span>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-40">
                                <div class="on-sale-product">
                                    <a href="single-product.html" class="image"><img src="{{ asset('frontend/assets/images/product/on-sale-7.jpg') }}" alt=""></a>
                                    <div class="content text-center">
                                        <h4 class="title"><a href="single-product.html">Aolvo Kids Munch</a></h4>
                                        <span class="price">$25 <span class="old">$35</span></span>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-40">
                                <div class="on-sale-product">
                                    <a href="single-product.html" class="image"><img src="{{ asset('frontend/assets/images/product/on-sale-8.jpg') }}" alt=""></a>
                                    <div class="content text-center">
                                        <h4 class="title"><a href="single-product.html">Tmart Baby Dress</a></h4>
                                        <span class="price">$48 <span class="old">$65</span></span>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- Product Section End -->

    <!-- Feature Section Start -->
    <div class="feature-section section bg-theme-two pt-65 pt-lg-55 pt-md-45 pt-sm-45 pt-xs-25 pb-65 pb-lg-55 pb-md-45 pb-sm-45 pb-xs-25 fix" style="background-image: url(frontend/assets/images/pattern/pattern-dot.png') }}");">
        <div class="container">
            <div class="feature-wrap row justify-content-between">

                <div class="col-md-4 col-12 mt-15 mb-15">
                    <div class="feature-item text-center">

                        <div class="icon"><img src="{{ asset('frontend/assets/images/feature/feature-1.png') }}"" alt=""></div>
                        <div class="content">
                            <h3>Free Shipping</h3>
                            <p>Start from $100</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 mt-15 mb-15">
                    <div class="feature-item text-center">
                        <div class="icon"><img src="{{ asset('frontend/assets/images/feature/feature-2.png') }}"" alt=""></div>
                        <div class="content">
                            <h3>Money Back Guarantee</h3>
                            <p>Back within 25 days</p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-12 mt-15 mb-15">
                    <div class="feature-item text-center">

                        <div class="icon"><img src="{{ asset('frontend/assets/images/feature/feature-3.png') }}"" alt=""></div>
                        <div class="content">
                            <h3>Secure Payment</h3>
                            <p>Payment Security</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Feature Section End -->
    <!-- Blog Section Start -->
    <div class="blog-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
        <div class="container">
            <div class="row">
                <!-- <div class="col-xl-6 col-lg-5 col-12">
                    <div class="row">
                        <div class="section-title text-left col mb-30">
                            <h1>CLIENTS REVIEW</h1>
                            <p>Clients says abot us</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-40">
                            <div class="testimonial-item">
                                <p>Jadusona is one of the most exclusive Baby shop in the wold, where you can find all product for your baby that your want to buy for your baby. I recomanded this shop all of you</p>
                                <div class="testimonial-author">
                                    <img src="{{ asset('frontend/assets/images/testimonial/testimonial-1.png') }}"" alt="">
                                    <div class="content">
                                        <h4>Zacquline Smith</h4>
                                        <p>CEO, Momens Group</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mb-40">
                            <div class="testimonial-item">
                                <p>Jadusona is one of the most exclusive Baby shop in the wold, where you can find all product for your baby that your want to buy for your baby. I recomanded this shop all of you</p>
                                <div class="testimonial-author">
                                    <img src="{{ asset('frontend/assets/images/testimonial/testimonial-2.png') }}"" alt="">
                                    <div class="content">
                                        <h4>Nusaha Williams</h4>
                                        <p>CEO, Momens Group</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-xl-6 col-lg-7 col-12">
                    <div class="row">
                        <div class="section-title text-left col mb-30">
                            <h1>ARTIKEL</h1>
                            <p>Temukan berita terbaru disini</p>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($art as $data)
                        <div class="col-12 mb-40">
                            <div class="blog-item">
                                <div class="image-wrap">
                                    <h4 class="date">{{Date::parse($data->tanggal)->format('M')}}<span>{{Date::parse($data->tanggal)->format('d')}}</span></h4>
                                    <a class="image" href="view-blog/{{$data->slug}}"><img src="{{ $data->cover }}" style="width: 209px; height: 177px;" alt=""></a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-blog.html">{{$data->judul}}</a></h4>
                                    <div class="desc">
                                        <p>{!!$data->isi!!}</p>
                                    </div>
                                    <ul class="meta">
                                        <li><a href="#">{{$data->penulis}}</a></li>
                                        <li><a href="#">25 Likes</a></li>
                                        <li><a href="#">05 Views</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Blog Section End -->
    <!-- Brand Section Start -->
    <div class="brand-section section mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
        <div class="container-fluid">
            <div class="row">
                <div class="brand-slider">
                    <div class="brand-item col">
                        <img src="{{ asset('frontend/assets/images/brands/brand-1.png') }}"" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="{{ asset('frontend/assets/images/brands/brand-2.png') }}"" alt="">
                    </div>
                    <div class="brand-item col">
                        <img src="{{ asset('frontend/assets/images/brands/brand-3.png') }}"" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="{{ asset('frontend/assets/images/brands/brand-4.png') }}"" alt="">
                    </div>
                    <div class="brand-item col">
                        <img src="{{ asset('frontend/assets/images/brands/brand-5.png') }}"" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="{{ asset('frontend/assets/images/brands/brand-6.png') }}"" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Brand Section End -->
    <!-- Footer Top Section Start -->
</div>
@endsection
@push('scripts')