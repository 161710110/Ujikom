<!-- Header Section Start -->
    <div class="header-section section">

        <!-- Header Top Start -->
        <div class="header-top header-top-one bg-theme-two">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center">

                    <div class="col mt-10 mb-10 d-none d-md-flex">
                        <!-- Header Top Left Start -->
                        <div class="header-top-left">
                            <p>Welcome to Jadusona</p>
                            <p>Hotline: <a href="tel:0123456789">0123 456 789</a></p>
                        </div><!-- Header Top Left End -->
                    </div>

                    <div class="col mt-10 mb-10">
                        <!-- Header Language Currency Start -->
                        <ul class="header-lan-curr">

                            <li><a href="#">eng</a>
                                <ul>
                                    <li><a href="#">english</a></li>
                                    <li><a href="#">spanish</a></li>
                                    <li><a href="#">france</a></li>
                                    <li><a href="#">russian</a></li>
                                    <li><a href="#">chinese</a></li>
                                </ul>
                            </li>

                            <li><a href="#">$usd</a>
                                <ul>
                                    <li><a href="#">pound</a></li>
                                    <li><a href="#">dollar</a></li>
                                    <li><a href="#">euro</a></li>
                                    <li><a href="#">yen</a></li>
                                </ul>
                            </li>

                        </ul><!-- Header Language Currency End -->
                    </div>

                    <div class="col mt-10 mb-10">
                        <!-- Header Shop Links Start -->
                        @if (Route::has('login'))
                        <div class="header-top-right">
                            @auth
                            <p><a href="{{ route('logout') }}" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit()">Logout</a></p>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                        </form>
                            @csrf
                            @else
                            <p><a href="{{ route('login') }}">Login / Register</a></p>
                            @if (Route::has('register'))
                            <!-- <a href="{{ route('register') }}">Register</a> -->
                            @endif
                            @endauth
                        </div><!-- Header Shop Links End -->
                        @endif
                    </div>

                </div>
            </div>
        </div>