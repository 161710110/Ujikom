@extends('layouts.frontend')
@section('content')
@php use Jenssegers\Date\Date;
@endphp
<!-- Blog Section Start -->
    <div class="blog-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
        <div class="container">
            <div class="row row-30">

                
                <div class="col-xl-9 col-lg-8 col-12 order-1 order-lg-2 mb-40">
                    
                    <div class="single-blog">
                     <div class="image-wrap">
                            <h4 class="date">{{Date::parse($art->tanggal)->format('M')}}<span>{{Date::parse($art->tanggal)->format('d')}}</span></h4>
                            <a class="image" href="{{ $art->cover }}"><img src="{{$art->cover}}" alt=""></a>
                        </div>
                        
                        <div class="content">
                            <ul class="meta">
                                <li><a href="#">{{$art->penulis}}</a></li>
                            </ul>
                            <div class="desc">
                                <p>{!!$art->isi!!}</p>
                            </div>
                            <!-- <div class="blog-footer row mt-45">

                                <div class="post-tags col-lg-6 col-12 mv-15">
                                    <h4>Tags:</h4>
                                    <ul class="tag">
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

                                <div class="post-share col-lg-6 col-12 mv-15">
                                    <h4>Share:</h4>
                                    <ul class="share">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>

                            </div> -->
                        </div>
                    </div>
                    <div class="comment-wrap mt-40">

                       <!--  <h3>3 Comments</h3>
                        <ul class="comment-list">
                            <li>
                                <div class="single-comment">
                                    <div class="image"><img src="assets/images/blog/author-1.jpg" alt=""></div>
                                    <div class="content">
                                        <h4>Frank Warren</h4>
                                        <span>29/06/2018 &nbsp;&nbsp;-<a href="#">replay</a></span>
                                        <p>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi ut labore et dolo magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                    </div>
                                </div>
                                <ul class="child-comment">
                                    <li>
                                        <div class="single-comment">
                                            <div class="image"><img src="assets/images/blog/author-3.jpg" alt=""></div>
                                            <div class="content">
                                                <h4>Ronald Black</h4>
                                                <span>29/06/2018  &nbsp;&nbsp;-<a href="#">replay</a></span>
                                                <p>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi ut labore et dolo magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="single-comment">
                                    <div class="image"><img src="assets/images/blog/author-2.jpg" alt=""></div>
                                    <div class="content">
                                        <h4>Beverly Cook</h4>
                                        <span>29/06/2018 &nbsp;&nbsp;-<a href="#">replay</a></span>
                                        <p>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi ut labore et dolo magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                    </div>
                                </div>
                            </li>
                        </ul> -->

                       <!--  <h3>Leave a Comment</h3>
                        <div class="comment-form">
                            <form action="#">
                                <div class="row row-10">
                                    <div class="col-md-6 col-12 mb-20"><input placeholder="Name" type="text"></div>
                                    <div class="col-md-6 col-12 mb-20"><input placeholder="Email" type="email"></div>
                                    <div class="col-12 mb-20"><textarea placeholder="Message"></textarea></div>
                                    <div class="col-12"><input value="submit" type="submit"></div>
                                </div>
                            </form>
                        </div> -->

                    </div>
                </div>

               <!--  <div class="col-xl-3 col-lg-4 col-12 order-2 order-lg-1 mb-40">

                    <div class="sidebar">
                        <h4 class="sidebar-title">Kategori</h4>
                        <ul class="sidebar-list">
                            @foreach($katart as $data)
                            <li><a href="/view-blog/{{ $data->slug }}">{{$data->nama_kategori}} <span class="num">{{ $data->Artikel->count() }}</span></a></li>
                            @endforeach
                        </ul>
                    </div> -->

                    <!-- <div class="sidebar">
                        <h4 class="sidebar-title">Archive</h4>
                        <ul class="sidebar-list">
                            <li><a href="#">July 2018</a></li>
                            <li><a href="#">June 2018</a></li>
                            <li><a href="#">May 2018</a></li>
                            <li><a href="#">April 2018</a></li>
                            <li><a href="#">March 2018</a></li>
                            <li><a href="#">February 2018</a></li>
                        </ul>
                    </div> -->

                    <!-- <div class="sidebar">
                        <h4 class="sidebar-title">Popular Blog</h4>
                        <div class="sidebar-blog-wrap">
                            <div class="sidebar-blog">
                                <a href="single-blog.html" class="image"><img src="assets/images/blog/blog-1.jpg" alt=""></a>
                                <div class="content">
                                    <a href="single-product.html" class="title">Lates and new Trens for baby fashion</a>
                                    <span class="date">25 may</span>
                                </div>
                            </div>
                            <div class="sidebar-blog">
                                <a href="single-blog.html" class="image"><img src="assets/images/blog/blog-2.jpg" alt=""></a>
                                <div class="content">
                                    <a href="single-product.html" class="title">New Collection New Trend all New Style</a>
                                    <span class="date">25 may</span>
                                </div>
                            </div>
                            <div class="sidebar-blog">
                                <a href="single-blog.html" class="image"><img src="assets/images/blog/blog-3.jpg" alt=""></a>
                                <div class="content">
                                    <a href="single-product.html" class="title">Lates and new Trens for baby fashion</a>
                                    <span class="date">25 may</span>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="sidebar">
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
                    </div> -->

                </div>

            </div>
        </div>
    </div><!-- Blog Section End -->
<!-- Blog Section End -->


@endsection