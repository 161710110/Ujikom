@extends('layouts.frontend')
@section('content')
<div class="page-banner-section section" style="background-image: url(http://demo.devitems.com/jadusona-v2/assets/images/hero/hero-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">

                    <h1>Contact us</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="contact.html">Contact us</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Page Section Start -->
    <div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
        <div class="container">
            <div class="row row-30">

               <div class="contact-info-wrap col-md-6 col-12 mb-40">
                   <h3>Get in Touch</h3>
                   <p>Jadusona is the best theme for  elit, sed do eiusmod tempor dolor sit ame  tse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam,</p>
                   @foreach($kontak as $data)
                   <ul class="contact-info">
                       <li>
                           <i class="fa fa-map-marker"></i>
                           <p>{{$data->alamat}} <br></p>
                       </li>
                       <li>
                           <i class="fa fa-phone"></i>
                           <p><a href="https://wa.me/{{$data->phone}}">{{$data->phone}}</a></p>
                       </li>
                       <li>
                           <i class="fa fa-globe"></i>
                           <p><a href="#">{{$data->email}}</a></p>
                       </li>
                   </ul>
                   @endforeach
               </div>

               <!-- <div class="contact-form-wrap col-md-6 col-12 mb-40">
                   <h3>Leave a Message</h3>
                   <form  id="contact-form" action="assets/php/mail.php">
                       <div class="contact-form">
                           <div class="row">
                               <div class="col-lg-6 col-12 mb-30"><input type="text" name="name" placeholder="Your Name"></div>
                               <div class="col-lg-6 col-12 mb-30"><input type="email" name="email" placeholder="Email Address"></div>
                               <div class="col-12 mb-30"><textarea name="message" placeholder="Message"></textarea></div>
                               <div class="col-12"><input type="submit" value="send"></div>
                           </div>
                       </div>
                   </form>
                   <p class="form-messege"></p>
               </div> -->

            </div>
        </div>
    </div>
@endsection