<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title', 'Blog - COCO Island Holidays')</title>
        <meta name="description" content="@yield('description', 'Discover amazing blog posts and travel stories from COCO Island Holidays.')">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Place favicon.ico in the root directory -->
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/fav-icon.jpg') }}">
        
		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/preloader.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-pro.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        
        @stack('styles')
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- pre loader area start -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div> 
        </div>
        <!-- pre loader area end -->

        <!-- scroll up area start -->
        <div class="scroll-up" id="scroll" style="display: none;">
            <a href="javascript:void(0);"><i class="far fa-angle-up"></i></a>
        </div>
        <!-- scroll up area end -->

        <!-- header area start -->
        <header class="header-area header-2 header-transparent">
            <div class="header-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                            <div class="logo logo-2">
                                <a href="{{ route('home') }}"><img src="{{ asset('frontend/assets/img/logo/coco-logo.png') }}" alt="COCO Island Holidays Logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-8 col-sm-6 col-6">
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
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">Packages</a></li>
                                            <li><a href="#">Hotels</a></li>
                                            <li><a href="#">Jobs</a></li>
                                            <li><a href="{{ route('blog.index') }}" class="arrow">NEWS</a>
                                                <ul class="submenu">
                                                    <li><a href="{{ route('blog.index') }}">Blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Life</a></li>
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
        </header>
        <!-- header area end -->
        
        <main>
            @yield('content')
        </main>

        <!-- footer area start -->
        <footer class="footer-area grey-bg-2">
            <div class="footer-top pt-95 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="footer-title">
                                    <h3>Get in Touch</h3>
                                </div>
                                <div class="footer-content">
                                    <div class="footer-contact">
                                        <p>Lorem ipsum dolor sit am co adipisicing elit, sed do eiusmod tempor</p>
                                        <ul>
                                            <li>
                                                <div class="footer-contact-inner d-flex align-items-center">
                                                    <div class="icon mr-20">
                                                        <span><i class="fas fa-map-marker-alt"></i></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>01, Wickramasinghepura, Ruwanmaga, Dodangoda, Kaluthara</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="footer-contact-inner d-flex align-items-center">
                                                    <div class="icon mr-20">
                                                        <span><i class="fas fa-phone-alt"></i></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>+94 77 660 5054</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="footer-contact-inner d-flex align-items-center">
                                                    <div class="icon mr-20">
                                                        <span><i class="fal fa-envelope"></i></span>
                                                    </div>
                                                    <div class="text">
                                                        <p> yourmail@gmail.com</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="footer-title">
                                    <h3>Quick Links</h3>
                                </div>
                                <div class="footer-content">
                                    <div class="quick-links">
                                        <ul>
                                            <li><a href="#">Wellness</a></li>
                                            <li><a href="#">Vintage Stores</a></li>
                                            <li><a href="#">Trekking</a></li>
                                            <li><a href="#">Sightseeing</a></li>
                                            <li><a href="#">Tours</a></li>
                                            <li><a href="#">Sample Page</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 mb-50">
                            <div class="footer-widget">
                                <div class="footer-title">
                                    <h3>Follow Us</h3>
                                </div>
                                <div class="footer-content">
                                    <div class="follow-us">
                                        <ul>
                                            <li><a href="#">Facebook </a></li>
                                            <li><a href="#"> Affiliate</a></li>
                                            <li><a href="#"> Twitter</a></li>
                                            <li><a href="#">FAQ </a></li>
                                            <li><a href="#"> Google+</a></li>
                                            <li><a href="#"> Tutorial</a></li>
                                            <li><a href="#">Youtube</a></li>
                                            <li><a href="#">Groups</a></li>
                                            <li><a href="#">Instagram</a></li>
                                            <li><a href="#">USA</a></li>
                                            <li><a href="#"> Delhi</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 offset-xl-1 col-lg-5 col-md-6 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="footer-title">
                                    <h3>Subscribe</h3>
                                </div>
                                <div class="footer-content">
                                    <div class="subscribe">
                                        <p>Lorem ipsum dolor si  consectetur adipisicing elit, sed eiusmotempor incididunt ut labore et</p>
                                        
                                        <div class="subscribe-form">
                                            <form action="{{ route('blog.newsletter.subscribe') }}" method="POST">
                                                @csrf
                                                <input type="email" name="email" placeholder="Type Your Email" required>
                                                <button class="sub-btn" type="submit"><i class="fas fa-location-arrow"></i></button>
                                            </form>
                                        </div>
                                        <div class="social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                                <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <div class="footer-copyright-inner">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="copyright-text">
                                    <p>Copyright © {{ date('Y') }} <a href="https://cocoislandholidays.com" target="_blank">COCO Island Holidays</a>. All Rights Reserved by <a href="https://crow.lk" target="_blank">Crow.lk</a></p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="footer-policy ">
                                    <a href="#">Terms & Condition</a>
                                    <a href="#"> Privacy</a>
                                    <a href="#">Support</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
         <!-- footer area end -->

		<!-- JS here -->
        <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/vendor/waypoints.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.meanmenu.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
                        <script src="{{ asset('frontend/assets/js/countdown.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
        
        @stack('scripts')
    </body>
</html>
