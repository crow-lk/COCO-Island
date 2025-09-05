<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>COCO Island Holidays - Tour Packages</title>
        <meta name="description" content="Explore our tour packages.">
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
            <a href="javascript:void(0);"><i class="fas fa-angle-up"></i></a>
        </div>
        <!-- scroll up area end -->

        <!-- Floating WhatsApp Button Start -->
        <a href="https://wa.me/94776605054" class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
        <!-- Floating WhatsApp Button End -->

        @include('components.header')

        <main>
            <!-- package area start -->
            <section class="package-area pt-80 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                            <div class="sec-title text-center mb-50">
                                <h1>Top Tour Packages</h1>
                                <p>  Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="single-package mb-30 w-img">
                                <img src="{{ asset('frontend/assets/img/package/package-1.jpg') }}" alt="package-1">
                                <div class="package-person">
                                    <img src="{{ asset('frontend/assets/img/package/package-person.jpg') }}" alt="package-person">
                                </div>
                                <div class="package-content">
                                    <div class="package-info">
                                        <h3><a href="#">Brazil – All Stunning</a></h3>
                                        <p>4 Days, 5 Nights Start From</p>
                                    </div>
                                    <div class="package-bottom d-flex justify-content-between">
                                        <span>$ 3500</span>
                                        <div class="rating">
                                            <ul>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="single-package mb-30 w-img">
                                <img src="{{ asset('frontend/assets/img/package/package-2.jpg') }}" alt="package-1">
                                <div class="package-person">
                                    <img src="{{ asset('frontend/assets/img/package/package-person-2.jpg') }}" alt="package-person">
                                </div>
                                <div class="package-content">
                                    <div class="package-info">
                                        <h3><a href="#">Brazil – All Stunning</a></h3>
                                        <p>4 Days, 5 Nights Start From</p>
                                    </div>
                                    <div class="package-bottom d-flex justify-content-between">
                                        <span>$ 3500</span>
                                        <div class="rating">
                                            <ul>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="single-package mb-30 w-img">
                                <img src="{{ asset('frontend/assets/img/package/package-3.jpg') }}" alt="package-1">
                                <div class="package-person">
                                    <img src="{{ asset('frontend/assets/img/package/package-person-3.jpg') }}" alt="package-person">
                                </div>
                                <div class="package-content">
                                    <div class="package-info">
                                        <h3><a href="#">Brazil – All Stunning</a></h3>
                                        <p>4 Days, 5 Nights Start From</p>
                                    </div>
                                    <div class="package-bottom d-flex justify-content-between">
                                        <span>$ 3500</span>
                                        <div class="rating">
                                            <ul>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="single-package mb-30 w-img">
                                <img src="{{ asset('frontend/assets/img/package/package-4.jpg') }}" alt="package-1">
                                <div class="package-person">
                                    <img src="{{ asset('frontend/assets/img/package/package-person-4.jpg') }}" alt="package-person">
                                </div>
                                <div class="package-content">
                                    <div class="package-info">
                                        <h3><a href="#">Brazil – All Stunning</a></h3>
                                        <p>4 Days, 5 Nights Start From</p>
                                    </div>
                                    <div class="package-bottom d-flex justify-content-between">
                                        <span>$ 3500</span>
                                        <div class="rating">
                                            <ul>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="single-package mb-30 w-img">
                                <img src="{{ asset('frontend/assets/img/package/package-5.jpg') }}" alt="package-1">
                                <div class="package-person">
                                    <img src="{{ asset('frontend/assets/img/package/package-person-5.jpg') }}" alt="package-person">
                                </div>
                                <div class="package-content">
                                    <div class="package-info">
                                        <h3><a href="#">Brazil – All Stunning</a></h3>
                                        <p>4 Days, 5 Nights Start From</p>
                                    </div>
                                    <div class="package-bottom d-flex justify-content-between">
                                        <span>$ 3500</span>
                                        <div class="rating">
                                            <ul>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="single-package mb-30 w-img">
                                <img src="{{ asset('frontend/assets/img/package/package-6.jpg') }}" alt="package-1">
                                <div class="package-person">
                                    <img src="{{ asset('frontend/assets/img/package/package-person-6.jpg') }}" alt="package-person">
                                </div>
                                <div class="package-content">
                                    <div class="package-info">
                                        <h3><a href="#">Brazil – All Stunning</a></h3>
                                        <p>4 Days, 5 Nights Start From</p>
                                    </div>
                                    <div class="package-bottom d-flex justify-content-between">
                                        <span>$ 3500</span>
                                        <div class="rating">
                                            <ul>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                                <li><span><i class="fas fa-star"></i></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- package area end -->
        </main>

        @include('components.footer')

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
