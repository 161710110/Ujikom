@extends('layouts.frontend')
@section('content')
<div class="main-wrapper">

<!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(assets/images/hero/hero-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">

                    <h1>{{$bar->nama_barang}}</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ url('/shop') }}">Barang</a></li>
                        <li>{{$bar->nama_barang}}</li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Page Section Start -->
    <div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
        <div class="container">
            <div class="row row-30">

                <div class="col-12">
                    <div class="row row-20 mb-20 mb-xs-0">

                        <div class="col-lg-6 col-12 mb-40">
                            @foreach ($bar->FotoBarang as $data)
                            @if ($loop->first)
                            <div class="pro-large-img mb-10 fix easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                                <a href="{{ $data->foto }}">
                                    <img src="{{ asset('/upload/'.$data->foto) }}" alt=""/>
                                </a> 
                            </div>
                            @endif
                            @endforeach
                            <!-- Single Product Thumbnail Slider -->
                            
                                
                            <ul id="pro-thumb-img" class="pro-thumb-img">  
                                @foreach ($bar->FotoBarang as $data) 
                                <li><a href="{{ asset('/upload/'.$data->foto) }}" data-standard="{{ asset('/upload/'.$data->foto) }}"><img src="{{ asset('/upload/'.$data->foto) }}" alt="" /></a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="col-lg-6 col-12 mb-40">
                            <div class="single-product-content">

                                <div class="head">
                                    <div class="head-left">

                                        <h3 class="title">{{$bar->nama_barang}}</h3>

                                    </div>

                                    <div class="head-right">
                                        <span class="price">RP. {{number_format($bar->harga_barang,2,',','.')}}</span>
                                    </div>
                                </div>

                               <!--  <div class="description">
                                    <p>{{$bar->deskripsi}}</p>
                                </div> -->

                                <span class="availability">Ketersediaan Produk: <span>{{$bar->stock}}</span></span>

                                <div class="quantity-colors">

                                    <div class="quantity">
                                        <h5>Quantity:</h5>
                                        <div class="pro-qty"><input type="text" value="1"></div>
                                    </div>                            

                                    <div class="colors">
                                        <h5>Color:</h5>
                                        <div class="color-options">
                                            <button style="background-color: #ff502e"></button>
                                            <button style="background-color: #fff600"></button>
                                            <button style="background-color: #1b2436"></button>
                                        </div>
                                    </div>                            

                                </div>

                                <div class="actions">

                                    <button><i class="ti-shopping-cart"></i><span>ADD TO CART</span></button>
                                    <button class="box" data-tooltip="Wishlist"><i class="ti-heart"></i></button>

                                </div>

                                <!-- <div class="tags">
                                    <h5>Tags:</h5>
                                    <a href="#">Electronic</a>
                                    <a href="#">Smartphone</a>
                                    <a href="#">Phone</a>
                                    <a href="#">Charger</a>
                                    <a href="#">Powerbank</a>
                                </div> -->

                                <div class="share">

                                    <h5>Share: </h5>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="row mb-60 mb-xs-40">
                        <!-- Nav tabs -->
                        <div class="col-12">
                            <ul class="pro-info-tab-list section nav">
                                <li><a class="active" href="#more-info" data-toggle="tab">More info</a></li>
                                <li><a href="#data-sheet" data-toggle="tab">Data sheet</a></li>
                                <li><a href="#reviews" data-toggle="tab">Reviews</a></li>
                            </ul>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content col-12">
                            <div class="pro-info-tab tab-pane active" id="more-info">
                                <p>{{$bar->deskripsi}}</p>
                            </div>
                            <div class="pro-info-tab tab-pane" id="data-sheet">
                                <table class="table-data-sheet">
                                    <tbody>
                                        <tr class="odd">
                                            <td>Compositions</td>
                                            <td>Cotton</td>
                                        </tr>
                                        <tr class="even">
                                            <td>Styles</td>
                                            <td>Casual</td>
                                        </tr>
                                        <tr class="odd">
                                            <td>Properties</td>
                                            <td>Short Sleeve</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="pro-info-tab tab-pane" id="reviews">
                                <a href="#">Be the first to write your review!</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="section-title text-left col col mb-60 mb-sm-40 mb-xs-30">
                            <h1>Related Product</h1>
                        </div>

                        <div class="related-product-slider related-product-slider-1 col-12 p-0">

                            <div class="col">

                                <div class="product-item">
                                    <div class="product-inner">

                                        <div class="image">
                                            <img src="assets/images/product/product-1.jpg" alt="">

                                            <div class="image-overlay">
                                                <div class="action-buttons">
                                                    <button>add to cart</button>
                                                    <button>add to wishlist</button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="content">

                                            <div class="content-left">

                                                <h4 class="title"><a href="single-product.html">Tmart Baby Dress</a></h4>

                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>

                                                <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                                <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                            </div>

                                            <div class="content-right">
                                                <span class="price">$25</span>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="col">

                                <div class="product-item">
                                    <div class="product-inner">

                                        <div class="image">
                                            <img src="assets/images/product/product-2.jpg" alt="">

                                            <div class="image-overlay">
                                                <div class="action-buttons">
                                                    <button>add to cart</button>
                                                    <button>add to wishlist</button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="content">

                                            <div class="content-left">

                                                <h4 class="title"><a href="single-product.html">Jumpsuit Outfits</a></h4>

                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>

                                                <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                                <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                            </div>

                                            <div class="content-right">
                                                <span class="price">$09</span>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="col">

                                <div class="product-item">
                                    <div class="product-inner">

                                        <div class="image">
                                            <img src="assets/images/product/product-3.jpg" alt="">

                                            <div class="image-overlay">
                                                <div class="action-buttons">
                                                    <button>add to cart</button>
                                                    <button>add to wishlist</button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="content">

                                            <div class="content-left">

                                                <h4 class="title"><a href="single-product.html">Smart Shirt</a></h4>

                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>

                                                <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                                <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                            </div>

                                            <div class="content-right">
                                                <span class="price">$18</span>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="col">

                                <div class="product-item">
                                    <div class="product-inner">

                                        <div class="image">
                                            <img src="assets/images/product/product-4.jpg" alt="">

                                            <div class="image-overlay">
                                                <div class="action-buttons">
                                                    <button>add to cart</button>
                                                    <button>add to wishlist</button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="content">

                                            <div class="content-left">

                                                <h4 class="title"><a href="single-product.html">Kids Shoe</a></h4>

                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>

                                                <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                                <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                            </div>

                                            <div class="content-right">
                                                <span class="price">$15</span>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="col">

                                <div class="product-item">
                                    <div class="product-inner">

                                        <div class="image">
                                            <img src="assets/images/product/product-5.jpg" alt="">

                                            <div class="image-overlay">
                                                <div class="action-buttons">
                                                    <button>add to cart</button>
                                                    <button>add to wishlist</button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="content">

                                            <div class="content-left">

                                                <h4 class="title"><a href="single-product.html"> Bowknot Bodysuit</a></h4>

                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>

                                                <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                                <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                            </div>

                                            <div class="content-right">
                                                <span class="price">$12</span>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection