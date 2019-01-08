@extends('layouts.frontend')
@section('content')
<div class="main-wrapper">

    <!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(frontend/assets/images/hero/hero-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">

                    <h1>Cart</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="cart.html">Cart</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Page Section Start -->
    <div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
        <div class="container">

            <form action="#">				
                <div class="row">
                    <div class="col-12">
                        <div class="cart-table table-responsive mb-40">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Image</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-quantity">Quantity</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img src="frontend/assets/images/product/product-1.jpg" alt="" /></a></td>
                                        <td class="pro-title"><a href="#">Tmart Baby Dress</a></td>
                                        <td class="pro-price"><span class="amount">$25</span></td>
                                        <td class="pro-quantity"><div class="pro-qty"><input type="text" value="1"></div></td>
                                        <td class="pro-subtotal">$25</td>
                                        <td class="pro-remove"><a href="#">×</a></td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img src="frontend/assets/images/product/product-2.jpg" alt="" /></a></td>
                                        <td class="pro-title"><a href="#">Jumpsuit Outfits</a></td>
                                        <td class="pro-price"><span class="amount">$09</span></td>
                                        <td class="pro-quantity"><div class="pro-qty"><input type="text" value="1"></div></td>
                                        <td class="pro-subtotal">$09</td>
                                        <td class="pro-remove"><a href="#">×</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-12">
                        <div class="cart-buttons mb-30">
                            <input type="submit" value="Update Cart" />
                            <a href="#">Continue Shopping</a>
                        </div>
                        <div class="cart-coupon mb-40">
                            <h4>Coupon</h4>
                            <p>Enter your coupon code if you have one.</p>
                             <div class="cuppon-form">
                                <input type="text" placeholder="Coupon code" />
                                <input type="submit" value="Apply Coupon" />
                             </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="cart-total fix mb-40">
                            <h3>Cart Totals</h3>
                            <table>
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td><span class="amount">$306.00</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td>
                                            <strong><span class="amount">$306.00</span></strong>
                                        </td>
                                    </tr>											
                                </tbody>
                            </table>
                            <div class="proceed-to-checkout section mt-30">
                                <a href="#">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

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
    </div>
</body>

</html>
@endsection
@push('scripts')