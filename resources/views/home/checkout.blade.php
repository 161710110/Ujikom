@extends('layouts.frontend')
@section('content')

 <!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(assets/images/hero/hero-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">

                    <h1>Checkout</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Page Section Start -->
    <div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
        <div class="container">
            <div class="row">

                <div class="col-12">

                    <!-- Checkout Form s-->
                    <form action="{{ url('checkout/'.Auth()->user()->id) }}" method="post" enctype="multipart/form-data" class="checkout-form" >
                      {{ csrf_field() }}
                      @php
                                            $total_all = 0;
                                            $mycart = \App\Keranjang::where('users_id', \Auth::user()->id)->get();
                                        @endphp
                    <input type="hidden" name="chart" value="{{$mycart}}">
                       <div class="row row-50">

                           <div class="col-lg-7">

                               <!-- Billing Address -->
                               <div id="billing-form" class="mb-20">
                                   <h4 class="checkout-title">Billing Address</h4>

                                   <div class="row">

                                       <div class="col-md-6 col-12 mb-5 form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                                           <label>Nama*</label>
                                           <input type="text" placeholder="Nama" name="nama">
                                             @if ($errors->has('nama'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('nama') }}</strong>
                                                </span>
                                            @endif
                                       </div>

                                       <div class="col-md-6 col-12 mb-5 form-group {{ $errors->has('nama_lengkap') ? ' has-error' : '' }}">
                                           <label>Nama Lengkap*</label>
                                           <input type="text" placeholder="Nama Lengkap" name="nama_lengkap">
                                           @if ($errors->has('nama_lengkap'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('nama_lengkap') }}</strong>
                                                </span>
                                            @endif
                                       </div>

                                       <div class="col-md-6 col-12 mb-5 form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                           <label>Alamat Email*</label>
                                           <input type="email" placeholder="Alamat Email" name="email">
                                           @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                       </div>

                                       <div class="col-md-6 col-12 mb-5 form-group {{ $errors->has('hp') ? ' has-error' : '' }}">
                                           <label>Nomor Handphone*</label>
                                           <input type="text" placeholder="Nomor Handphone" name="hp">
                                           @if ($errors->has('hp'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('hp') }}</strong>
                                                </span>
                                            @endif
                                       </div>

                                       <div class="col-12 mb-5 form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                                           <label>Alamat*</label>
                                           <input type="text" placeholder="Alamat" name="alamat">
                                           @if ($errors->has('alamat'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('alamat') }}</strong>
                                                </span>
                                            @endif
                                       </div>

                                       <div class="col-md-6 col-12 mb-5 form-group {{ $errors->has('provinsi') ? ' has-error' : '' }}">
                                           <label>Provinsi*</label>
                                           <select class="nice-select" name="provinsi">
                                            @if ($errors->has('provinsi'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('provinsi') }}</strong>
                                                </span>
                                            @endif
                                                <option value="Jawa Barat">Jawa Barat</option>
                                                <option value="DKI Jakarta">DKI Jakarta</option>
                                           </select>
                                       </div>

                                       <div class="col-md-6 col-12 mb-5 form-group {{ $errors->has('kota') ? ' has-error' : '' }}">
                                           <label>Kota/Kabupaten*</label>
                                           <input type="text" placeholder="Kota/Kabupaten" name="kota">
                                           @if ($errors->has('kota'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('kota') }}</strong>
                                                </span>
                                            @endif
                                       </div>

                                       <div class="col-md-6 col-12 mb-5 form-group {{ $errors->has('kodepos') ? ' has-error' : '' }}">
                                           <label>Kode Pos*</label>
                                           <input type="text" placeholder="Kode Pos" name="kodepos">
                                           @if ($errors->has('kodepos'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('kodepos') }}</strong>
                                                </span>
                                            @endif
                                       </div>

                                       <!-- <div class="col-12 mb-5">
                                           <div class="check-box mb-15">
                                               <input type="checkbox" id="create_account">
                                               <label for="create_account">Create an Acount?</label>
                                           </div>
                                           <div class="check-box mb-15">
                                               <input type="checkbox" id="shiping_address" data-shipping>
                                               <label for="shiping_address">Ship to Different Address</label>
                                           </div>
                                       </div> -->

                                   </div>

                               </div>

                               <!-- Shipping Address -->
                               <div id="shipping-form" class="mb-20">
                                   <h4 class="checkout-title">Shipping Address</h4>

                                   <div class="row">

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>First Name*</label>
                                           <input type="text" placeholder="First Name">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Last Name*</label>
                                           <input type="text" placeholder="Last Name">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Email Address*</label>
                                           <input type="email" placeholder="Email Address">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Phone no*</label>
                                           <input type="text" placeholder="Phone number">
                                       </div>

                                       <div class="col-12 mb-5">
                                           <label>Company Name</label>
                                           <input type="text" placeholder="Company Name">
                                       </div>

                                       <div class="col-12 mb-5">
                                           <label>Address*</label>
                                           <input type="text" placeholder="Address line 1">
                                           <input type="text" placeholder="Address line 2">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Country*</label>
                                           <select class="nice-select">
                                                <option>Bangladesh</option>
                                                <option>China</option>
                                                <option>country</option>
                                                <option>India</option>
                                                <option>Japan</option>
                                           </select>
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Town/City*</label>
                                           <input type="text" placeholder="Town/City">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>State*</label>
                                           <input type="text" placeholder="State">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Zip Code*</label>
                                           <input type="text" placeholder="Zip Code">
                                       </div>

                                   </div>

                               </div>

                           </div>

                           <div class="col-lg-5">
                               <div class="row">

                                   <!-- Cart Total -->
                                   <div class="col-12 mb-40">

                                       <h4 class="checkout-title">Cart Total</h4>

                                       <div class="checkout-cart-total">

                                           <h4>Product <span>Total</span></h4>
                                          

                                          @foreach($mycart as $data)
                                          @php 
                                            $t_s = $data->jumlah * $data->Barang->harga_barang;
                                            $total_all = $total_all + $t_s;
                                          @endphp
                                           <ul>
                                               <li>{{$data->Barang->nama_barang}}<span>Rp.{{number_format($data->jumlah * $data->Barang->harga_barang,2,',','.')}}</span></li>
                                           </ul>
                                          @endforeach
                                           <h4>Grand Total <span>Rp.{{number_format($total_all,2,',','.')}}</span></h4>
                                          
                                       </div>

                                   </div>

                                   <button class="place-order" type="submit">Place order</button>

                               </div>
                           </div>

                       </div>
                    </form>

                </div>
            </div>
        </div>
    </div><!-- Page Section End -->

@endsection