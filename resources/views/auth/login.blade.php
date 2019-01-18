@extends('layouts.frontend')
@section('content')
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(assets/images/hero/hero-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">

                    <h1>Masuk / Register</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li>Masuk / Register</li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Page Section Start -->
    <div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-12 mb-40">
                    <div class="login-register-form-wrap">
                        <h3>Masuk</h3>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-15"><input id="email" type="email" class="form-control form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Username" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif</div>
                                <div class="col-12 mb-15"><input id="password" type="password" class="form-control form-control-lg {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif</div>
                                <div class="col-12"><input type="submit" value="Masuk"></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-2 col-12 mb-40 text-center">
                    <span class="login-register-separator"></span>
                </div>

                <div class="col-lg-6 col-12 mb-40 ml-auto">
                    <div class="login-register-form-wrap">
                        <h3>Daftar</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12 mb-15"><input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Nama" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                                <div class="col-md-6 col-12 mb-15"><input id="email" type="email" class="form-control form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" placeholder="Email" required autofocus>
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-6 col-12 mb-15"><input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                            </div>
                                <div class="col-md-6 col-12 mb-15"><input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Masukan Kembali Password" required></div>
                                <div class="col-md-6 col-12"><input type="submit" value="Daftar"></div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
@push('scripts')