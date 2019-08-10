@extends('layouts.frontend')
@section('content')
<!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(assets/images/hero/hero-1.jpg)">
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

            <form action="{{url('cart/edit/'.Auth::user()->id)}}" method="post" >  
            {{csrf_field()}}             
                <div class="row">
                    <div class="col-12">
                        <div class="cart-table table-responsive mb-40">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Foto</th>
                                        <th class="pro-title">Barang</th>
                                        <th class="pro-price">Harga</th>
                                        <th class="pro-quantity">Jumlah</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Hapus</th>
                                    </tr>
                                          @php
                                            $total_all = 0;
                                            $mycart = \App\Keranjang::where('users_id', \Auth::user()->id)->get();
                                        @endphp

                                          @foreach($mycart as $data)
                                          @php 
                                            $t_s = $data->jumlah * $data->Barang->harga_barang;
                                            $total_all = $total_all + $t_s;
                                          @endphp

                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($data->Barang->FotoBarang as $data1)
                                        <td class="pro-thumbnail"><a href="#"><img src="{{ asset($data1->foto) }}" alt="" /></a></td>
                                        @endforeach
                                        <input type="hidden" name="id[]" value="{{$data->id}}">
                                        <input type="hidden" name="barang[]" value="{{ $data->id }}"> 
                                        <td class="pro-title"><a href="show/{{$data->Barang->slug}}">{{$data->Barang->nama_barang}}</a></td>
                                        <td class="pro-price"><span class="amount">Rp.{{ number_format($data->Barang->harga_barang,2,',','.')}}</span></td>

                                        <td class="pro-quantity">
                                            <div class="pro-qty">
                                                <input type="number" value="{{$data->jumlah}}" name="jumlah[]" min="1" max="{{ $data->Barang->stock }}">
                                            </div>
                                        </td>
                                        
                                        <td class="pro-subtotal">Rp.{{number_format($data->jumlah * $data->Barang->harga_barang,2,',','.')}}</td>
                                        <td class="pro-remove"><a href="{{url('cart/delete', $data->id)}}">×</a></td>
                                    </tr>
                                </tbody>
                                 @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-12">
                        <div class="cart-buttons mb-30">
                            <!-- <input type="submit" value="Update Cart" /> -->
                            <input type="submit" value="Update">
                            <a href="{{ url('shop') }}">Continue Shopping</a>
                        </div>
                        <!-- <div class="cart-coupon mb-40">
                            <h4>Coupon</h4>
                            <p>Enter your coupon code if you have one.</p>
                             <div class="cuppon-form">
                                <input type="text" placeholder="Coupon code" />
                             </div>
                        </div> -->
                    </div>
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="cart-total fix mb-40">
                            <h3>Total Keranjang</h3>
                            <table>
                                <tbody>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td>
                                            <strong><span class="amount">Rp.{{number_format($total_all,2,',','.')}}</span></strong>
                                        </td>
                                    </tr>                                           
                                </tbody>
                            </table>
                            <div class="proceed-to-checkout section mt-30">
                                <a href="{{ url('check', Auth::user()->id) }}">Proceed to Checkout</a>
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
                        <img src="assets/images/brands/brand-1.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="assets/images/brands/brand-2.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="assets/images/brands/brand-3.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="assets/images/brands/brand-4.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="assets/images/brands/brand-5.png" alt="">
                    </div>

                    <div class="brand-item col">
                        <img src="assets/images/brands/brand-6.png" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div><!-- Brand Section End -->
@endsection
@push('scripts')