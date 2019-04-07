<!-- Header Bottom Start -->
        <div class="header-bottom header-bottom-one header-sticky@">
            <div class="container-fluid">
                <div class="row menu-center align-items-center justify-content-between">

                    <div class="col mt-15 mb-15">
                        <!-- Logo Start -->
                        <div class="header-logo">
                            <a href="index.html">
                                <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="Jadusona">
                            </a>
                        </div><!-- Logo End -->
                    </div>

                    <div class="col order-2 order-lg-3">
                        <!-- Header Advance Search Start -->
                        <div class="header-shop-links">

                            <div class="header-search">
                                <button class="search-toggle"><img src="{{ asset('frontend/assets/images/icons/search.png') }}" alt="Search Toggle"><img class="toggle-close" src="{{ asset('frontend/assets/images/icons/close.png') }}" alt="Search Toggle"></button>
                                <div class="header-search-wrap">
                                    <form action="#">
                                        <input type="text" placeholder="Type and hit enter">
                                        <button><img src="{{ asset('frontend/assets/images/icons/search.png') }}" alt="Search"></button>
                                    </form>
                                </div>
                            </div>

                            <div class="header-wishlist">
                                <a href="wishlist.html"><img src="{{ asset('frontend/assets/images/icons/wishlist.png') }}" alt="Wishlist"> <span>0</span></a>
                            </div>

                            @role('member')
                            <div class="header-mini-cart">
                                @php
                                if (\Auth::check()){
                                $cart = \App\Keranjang::where('users_id',\Auth::user()->id)->get();
                            }
                            @endphp

                                <a href="{{ url('/cart',\Auth::user()->id) }}"><img src="{{ asset('frontend/assets/images/icons/cart.png') }}" alt="Cart"> 
                                <span>
                                @if(Auth::check() && $cart->count() > 0)
                                    {{ $cart->count()}}
                                @endif</span>  
                                </a>
                            </div>
                            @endrole

                        </div><!-- Header Advance Search End -->
                    </div>

                    <div class="col order-3 order-lg-2">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="{{ url('/') }}">HOME</a></li>
                                    <li><a href="{{ url('/shop') }}">BELANJA</a></li>
                                    <li><a href="{{ url('/blog') }}">ARTIKEL</a>
                                    <li><a href="{{ url('/contact') }}">KONTAK</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Mobile Menu -->
                    <div class="mobile-menu order-12 d-block d-lg-none col"></div>

                </div>
            </div>
        </div><!-- Header BOttom End -->

    </div><!-- Header Section End -->