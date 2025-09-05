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
                        <div class="header-lang d-none d-sm-inline-block mr-3" style="position: relative;">
                            <select name="header-language" class="form-select border-0 bg-transparent p-0">
                                <option value="en" selected>English</option>
                                <option value="fr">Français</option>
                                <option value="de">Deutsch</option>
                                <option value="es">Español</option>
                            </select>
                        </div>
                        <div class="header-currency d-none d-sm-inline-block">
                            <select name="header-currency" class="form-select border-0 bg-transparent p-0">
                                <option value="usd">USD</option>
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
                                    <li><a href="{{ route('home') }}"> Home</a></li>
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    {{-- <li><a href="{{ route('packages') }}">Packages</a></li> --}}
                                    {{-- <li><a href="#">Jobs</a></li> --}}
                                    <li><a href="/blogs">Blogs</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        {{-- <div class="search-box">
                            <a class="search" href="javascript:void(0)"><i class="fas fa-search"></i></a>
                        </div> --}}
                        <div class="header-btn ml-45 d-none d-sm-inline-block">
                            <a href="#" class="btn">Book Now</a>
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
    {{-- <div class="search-bar-wrapper">
        <div class="search-inner">
            <form action="#">
                <input type="text" placeholder="Enter Keyword...">
                <button type="submit"><i class="fal fa-search"></i></button>
            </form>
        </div>
        <a href="javascript:void(0);" class="search-close"><i class="fal fa-times"></i></a>
    </div> --}}
    <!-- search bar area end -->
</header>
<!-- header area end -->
