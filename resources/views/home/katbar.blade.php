@extends('layouts.frontend')
@section('content')
<div class="main-wrapper">

    <!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(frontend/assets/images/hero/hero-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">

                    <h1>Shop</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop-left-sidebar.html">Shop</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Page Section Start -->
    <div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
        <div class="container">
            <div class="row row-30">

                <div class="col-xl-9 col-lg-8 col-12 order-1 order-lg-2 mb-40">
                    <div class="row">

                        <div class="col-12">
                            <div class="product-show">
                                <h4>Show:</h4>
                                <select class="nice-select">
                                    <option>8</option>
                                    <option>12</option>
                                    <option>16</option>
                                    <option>20</option>
                                </select>
                            </div>
                            <div class="product-short">
                                <h4>Short by:</h4>
                                <select class="nice-select">
                                    <option>Name Ascending</option>
                                    <option>Name Descending</option>
                                    <option>Date Ascending</option>
                                    <option>Date Descending</option>
                                    <option>Price Ascending</option>
                                    <option>Price Descending</option>
                                </select>
                            </div>
                        </div>
                        @foreach($kategori->barang()->get() as $data) 
                        <div class="col-xl-4 col-md-6 col-12 mb-40">
                           
                            <div class="product-item">
                                <div class="product-inner">

                                    <div class="image">
<!--                                         <a href="{{ url('foto_barang',$data->id)}}"> -->
                                        @foreach($data->FotoBarang as $data1)
                                        <img src="{{ $data1->foto, $data->nama }}" height="270px" width="320px" alt="">
                                        @endforeach
                                        <div class="image-overlay">
                                            <div class="action-buttons">
                                                <button>tambah keranjang</button>
                                            </div>
                                        </div>
                                       
                                    </div>

                                    <div class="content">

                                        <div class="content-left">
                                            <br>
                                            <h4 class="title"><a href="single-product.html">{{$data->nama_barang}}</a></h4>
                                            
                                            <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                            <h5 class="price">Price: RP. {{number_format($data->harga_barang,2,',','.')}}</h5>
                                            <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                        </div>

                                        <!-- <div class="content-right">
                                            <span class="price">{{$data->harga_barang}}</span>
                                        </div> -->

                                    </div>

                                </div>
                            </div>
                            
                        </div>
                        @endforeach
                        

                        <!-- <div class="col-12">
                            <ul class="page-pagination">
                                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div> -->

                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-12 order-2 order-lg-1 mb-40">

                    <div class="sidebar">
                        <h4 class="sidebar-title">Category</h4>
                         <ul class="sidebar-list">
                            @foreach ($katbar as $data)<li><a href="{{ route('isikategori', $data->slug) }}">{{$data->nama_kategori}} <span class="num">18</span></a></li>@endforeach
                        </ul>
                    </div>

                    <div class="sidebar">
                        <h4 class="sidebar-title">colors</h4>
                        <ul class="sidebar-list">
                            <li><a href="#"><span class="color" style="background-color: #000000"></span> Black</a></li>
                            <li><a href="#"><span class="color" style="background-color: #FF0000"></span> Red</a></li>
                            <li><a href="#"><span class="color" style="background-color: #0000FF"></span> Blue</a></li>
                            <li><a href="#"><span class="color" style="background-color: #28901D"></span> Green</a></li>
                            <li><a href="#"><span class="color" style="background-color: #FF6801"></span> Orange</a></li>
                        </ul>
                    </div>

                    <div class="sidebar">
                        <h4 class="sidebar-title">Popular Product</h4>
                        <div class="sidebar-product-wrap">
                            <div class="sidebar-product">
                                <a href="single-product.html" class="image"><img src="frontend/assets/images/product/product-1.jpg" alt=""></a>
                                <div class="content">
                                    <a href="single-product.html" class="title">Tmart Baby Dress</a>
                                    <span class="price">$25 <span class="old">$38</span></span>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-product">
                                <a href="single-product.html" class="image"><img src="frontend/assets/images/product/product-2.jpg" alt=""></a>
                                <div class="content">
                                    <a href="single-product.html" class="title">Jumpsuit Outfits</a>
                                    <span class="price">$09 <span class="old">$21</span></span>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-product">
                                <a href="single-product.html" class="image"><img src="frontend/assets/images/product/product-3.jpg" alt=""></a>
                                <div class="content">
                                    <a href="single-product.html" class="title">Smart Shirt</a>
                                    <span class="price">$18 <span class="old">$29</span></span>
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

                    <div class="sidebar">
                        <h3 class="sidebar-title">Price</h3>

                        <div class="sidebar-price">
                            <div id="price-range"></div>
                            <input type="text" id="price-amount" readonly>
                        </div>
                    </div>

                    <div class="sidebar">
                        <h3 class="sidebar-title">Tags</h3>
                        <ul class="sidebar-tag">
                            <li><a href="#">New</a></li>
                            <li><a href="#">brand</a></li>
                            <li><a href="#">black</a></li>
                            <li><a href="#">white</a></li>
                            <li><a href="#">chire</a></li>
                            <li><a href="#">table</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">ipsum</a></li>
                            <li><a href="#">dolor</a></li>
                            <li><a href="#">sit</a></li>
                            <li><a href="#">amet</a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div><!-- Page Section End -->

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