<!-- header area start -->
<header class="header-area {{ ($transparentHeader ?? false) ? 'header-transparent' : '' }}">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-5 col-6">
                    <div class="header-top-left">
                        <span class="d-none d-sm-inline-block"><i class="fas fa-phone-alt"></i>+94 77 660 5054</span>
                        <span class="d-none d-lg-inline-block"><i class="fas fa-envelope"></i>Demo@gmail.com</span>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-7 col-6">
                    <div class="header-top-right d-flex justify-content-end align-items-center">
                        <div class="header-lang d-none d-sm-inline-block">
                            <span>English</span>
                        </div>
                        <div class="header-currency d-none d-sm-inline-block">
                            <select name="header-currency">
                                <option value="1">$ USD</option>
                                <option value="2">$ USD</option>
                                <option value="3">$ USD</option>
                                <option value="4">$ USD</option>
                                <option value="5">$ USD</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('frontend/assets/img/logo/coco-logo.png') }}" alt="COCO Island Holidays Logo"></a>
                    </div>
                </div>
                <div class="col-xl-9 offset-xl-1 col-lg-10 col-md-8 col-sm-6 col-6">
                    <div class="header-bottom-right d-flex justify-content-end align-items-center">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="{{ route('home') }}" class="arrow"> Home</a>
                                        <ul class="submenu">
                                            <li><a href="#">Submenu 1</a></li>
                                            <li><a href="#">Submenu 2</a></li>
                                            <li><a href="#">Submenu 3</a></li>
                                            <li><a href="#">Submenu 4</a></li>
                                            <li><a href="#">Submenu 5</a></li>
                                            <li><a href="#">Submenu 6</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    <li><a href="{{ route('packages') }}">Packages</a></li>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="/blogs">Blogs</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="search-box">
                            <a class="search" href="javascript:void(0)"><i class="fas fa-search"></i></a>
                        </div>
                        <div class="header-btn ml-45 d-none d-sm-inline-block">
                            <a href="#" class="btn">Book Online</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- search bar area start -->
    <div class="search-bar-wrapper">
        <div class="search-inner">
            <form action="#">
                <input type="text" placeholder="Enter Keyword...">
                <button type="submit"><i class="fal fa-search"></i></button>
            </form>
        </div>
        <a href="javascript:void(0);" class="search-close"><i class="fal fa-times"></i></a>
    </div>
    <!-- search bar area end -->
</header>
<!-- header area end -->
