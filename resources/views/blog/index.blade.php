@extends('layouts.frontend')
@section('content')
@php use Jenssegers\Date\Date;
@endphp
<div class="main-wrapper">

    <!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(assets/images/blog/single-blog-page-title.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col text-center">

                    <h1>Lates and new Trens for baby fashion</h1>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Blog Section Start -->
    <div class="blog-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
        <div class="container">
            <div class="row">

                @foreach($art as $data)
                <div class="col-lg-6 col-12 mb-60 mb-xs-40">
                    <div class="blog-item">
                        <div class="image-wrap">
                            <h4 class="date">{{Date::parse($data->tanggal)->format('M')}}<span>{{Date::parse($data->tanggal)->format('d')}}</span></h4>
                            <a class="image" href="view-blog/{{$data->slug}}"><img src="{{ $data->cover }}" style="width: 209px; height: 177px;" alt=""></a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="view-blog/{{$data->slug}}">{{$data->judul}}</a></h4>
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

                <div class="col-12">
                    <ul class="page-pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div><!-- Blog Section End -->

</body>

</html>
@endsection
@push('scripts')