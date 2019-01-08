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
                                <button class="search-toggle"><img src="{{ asset('frontend/assets/images/icons/search.png') }}" alt="Search Toggle"><img class="toggle-close" src="{{ asset('assets/images/icons/close.png') }}" alt="Search Toggle"></button>
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

                            <div class="header-mini-cart">
                                <a href="cart.html"><img src="{{ asset('frontend/assets/images/icons/cart.png') }}" alt="Cart"> <span>0</span></a>
                            </div>

                        </div><!-- Header Advance Search End -->
                    </div>

                    <div class="col order-3 order-lg-2">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li class="active"><a class="nav-link {{ url('/') == request()->url() ? 'active' : '' }}" href="{{ url('/') }}">HOME</a>
                                    </li>
                                    <li class="active"><a class="nav-link {{ url('/shop') == request()->url() ? 'active' : '' }}" href="{{ url('/shop') }}">SHOP</a></li>
                                    <li><a href="#">PAGES</a></li>
                                    <li><a href="blog.html">BLOG</a>
                                    <li><a href="contact.html">CONTACT</a></li>
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