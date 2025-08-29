<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title', 'COCO Island Holidays - Travel Agency')</title>
        <meta name="description" content="@yield('description', 'Discover amazing destinations with COCO Island Holidays. Book your dream vacation today.')">
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
        
        <main>
            @include('components.hero')

            <!-- about us area start -->
            <section class="about-us">
                <div class="container">
                    <div class="about-us-inner">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-5">
                                <div class="about-us-tab">
                                    <ul class="nav nav-tabs left-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-home"></i> hous insurance</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="travel-tab" data-toggle="tab" href="#travel" role="tab" aria-controls="travel" aria-selected="false"><i class="far fa-bicycle"></i> trvel insurance</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="life-tab" data-toggle="tab" href="#life" role="tab" aria-controls="life" aria-selected="false"><i class="far fa-heart"></i> life insurance</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="car-tab" data-toggle="tab" href="#car" role="tab" aria-controls="car" aria-selected="false"><i class="fas fa-car"></i> car insurance</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-7">
                                <div class="about-us-tab-content">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="about-content d-flex">
                                                <div class="about-thumb d-none d-xl-block">
                                                    <a href="https://www.youtube.com/watch?v=yJg-Y5byMMw" data-fancybox class="play-btn"><i class="far fa-play-circle"></i></a>
                                                    <img src="{{ asset('frontend/assets/img/about/about-1.jpg') }}" alt="about-1">
                                                </div>
                                                <div class="about-text ml-30">
                                                    <h3>About Us</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adip elit, sedos eiusmod tempor incididunt ut labore et do magna aqua Ut enim ad minim veniam, quis  exerc ullamco laboris nisi ut aliquip ex  commconsequat Du aute irure dolor in reprehenderit in</p>
                                                    <ul class="about-features mb-20">
                                                        <li><span>General Medical</span></li>
                                                        <li><span>Outdoor Checkup</span></li>
                                                        <li><span>Easy and Affordable Billing</span></li>
                                                    </ul>
                                                    <a href="#" class="btn btn-square">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="travel" role="tabpanel" aria-labelledby="travel-tab">
                                            <div class="about-content d-flex">
                                                <div class="about-thumb d-none d-xl-block">
                                                    <a href="https://www.youtube.com/watch?v=yJg-Y5byMMw" data-fancybox class="play-btn"><i class="far fa-play-circle"></i></a>
                                                    <img src="{{ asset('frontend/assets/img/about/about-1.jpg') }}" alt="about-1">
                                                </div>
                                                <div class="about-text ml-30">
                                                    <h3>About Us</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adip elit, sedos eiusmod tempor incididunt ut labore et do magna aqua Ut enim ad minim veniam, quis  exerc ullamco laboris nisi ut aliquip ex  commconsequat Du aute irure dolor in reprehenderit in</p>
                                                    <ul class="about-features mb-20">
                                                        <li><span>General Medical</span></li>
                                                        <li><span>Outdoor Checkup</span></li>
                                                        <li><span>Easy and Affordable Billing</span></li>
                                                    </ul>
                                                    <a href="#" class="btn btn-square">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="life" role="tabpanel" aria-labelledby="car-tab">
                                            <div class="about-content d-flex ">
                                                <div class="about-thumb d-none d-xl-block">
                                                    <a href="https://www.youtube.com/watch?v=yJg-Y5byMMw" data-fancybox class="play-btn"><i class="far fa-play-circle"></i></a>
                                                    <img src="{{ asset('frontend/assets/img/about/about-1.jpg') }}" alt="about-1">
                                                </div>
                                                <div class="about-text ml-30">
                                                    <h3>About Us</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adip elit, sedos eiusmod tempor incididunt ut labore et do magna aqua Ut enim ad minim veniam, quis  exerc ullamco laboris nisi ut aliquip ex  commconsequat Du aute irure dolor in reprehenderit in</p>
                                                    <ul class="about-features mb-20">
                                                        <li><span>General Medical</span></li>
                                                        <li><span>Outdoor Checkup</span></li>
                                                        <li><span>Easy and Affordable Billing</span></li>
                                                    </ul>
                                                    <a href="#" class="btn btn-square">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="car" role="tabpanel" aria-labelledby="car-tab">
                                            <div class="about-content d-flex">
                                                <div class="about-thumb d-none d-xl-block">
                                                    <a href="https://www.youtube.com/watch?v=yJg-Y5byMMw" data-fancybox class="play-btn"><i class="far fa-play-circle"></i></a>
                                                    <img src="{{ asset('frontend/assets/img/about/about-1.jpg') }}" alt="about-1">
                                                </div>
                                                <div class="about-text ml-30">
                                                    <h3>About Us</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adip elit, sedos eiusmod tempor incididunt ut labore et do magna aqua Ut enim ad minim veniam, quis  exerc ullamco laboris nisi ut aliquip ex  commconsequat Du aute irure dolor in reprehenderit in</p>
                                                    <ul class="about-features mb-20">
                                                        <li><span>General Medical</span></li>
                                                        <li><span>Outdoor Checkup</span></li>
                                                        <li><span>Easy and Affordable Billing</span></li>
                                                    </ul>
                                                    <a href="#" class="btn btn-square">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about us area end -->

            <!-- tour area start -->
            <section class="tour-area pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                            <div class="sec-title text-center mb-50">
                                <h1>Popular Tour</h1>
                                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="tour-slider owl-carousel">
                                <div class="single-tour">
                                    <div class="tour-img">
                                        <img src="{{ asset('frontend/assets/img/tour/tour-1.jpg') }}" alt="tour-1">
                                        <div class="tour-content text-center">
                                            <h4>Thailand</h4>
                                            <p>Lorem ipsum dolor consectetur adipisicing elit sed do</p>
                                            <a href="#" class="link-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-tour">
                                    <div class="tour-img">
                                        <img src="{{ asset('frontend/assets/img/tour/tour-2.jpg') }}" alt="tour-1">
                                        <div class="tour-content text-center">
                                            <h4>Switzerland</h4>
                                            <p>Lorem ipsum dolor consectetur adipisicing elit sed do</p>
                                            <a href="#" class="link-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-tour">
                                    <div class="tour-img">
                                        <img src="{{ asset('frontend/assets/img/tour/tour-3.jpg') }}" alt="tour-1">
                                        <div class="tour-content text-center">
                                            <h4>California</h4>
                                            <p>Lorem ipsum dolor consectetur adipisicing elit sed do</p>
                                            <a href="#" class="link-btn">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- tour area end -->

            <!-- best money area start -->
            <section class="best-money pt-100 pb-125 grey-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="best-money-content">
                                <h1>Best Money - North America</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed  eiusmod tempo incididunt ut labore et dolore magna aliqua. Ut enim ad tinim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipeea commodolaboris nisi ut aliquipeea</p>

                                <div class="best-money-price">
                                    <span class="old-price">$ 800</span>
                                    <span class="new-price">500 $</span>
                                    <span>/ FOR PERSON</span>
                                </div>
                                <a href="#" class="btn">BOOK NOW</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="best-money-img w-img">
                                <img src="{{ asset('frontend/assets/img/best_money/best-money.jpg') }}" alt="best-money">
                                <div class="best-money-countdown text-center">
                                    <div data-countdown data-date="Dec 02 2022 20:20:22">
                                        <ul>
                                            <li><span data-days>0</span> days</li>
                                            <li><span data-hours>0</span> hours</li>
                                            <li><span data-minutes>0</span> minutes</li>
                                            <li><span data-seconds>0</span> seconds</li>
                                        </ul>         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- best money area end -->

            <!-- best things area start -->
            <section class="best-things pt-80 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                            <div class="sec-title text-center mb-50">
                                <h1>Best Things to Do in the City</h1>
                                <p>  Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim </p>
                            </div>
                        </div>
                    </div>
                    <div class="row grid">
                        <div class="col-xl-6 col-lg-6 col-md-6 grid-item">
                            <div class="things-img fix mb-30 w-img">
                                <img src="{{ asset('frontend/assets/img/best_things/thing-1.jpg') }}" alt="best-things">
                                <div class="things-content">
                                    <h4><a href="#">United States</a></h4>
                                    <span>Starting from $1200</span>
                                </div>
                                <div class="things-btn transition-3">
                                    <a href="#" class="btn btn-half-square">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 grid-item">
                            <div class="things-img fix mb-30 w-img">
                                <img src="{{ asset('frontend/assets/img/best_things/thing-2.jpg') }}" alt="best-things">
                                <div class="things-content">
                                    <h4><a href="#">Los Angeles</a></h4>
                                    <span>Starting from $1200</span>
                                </div>
                                <div class="things-btn transition-3">
                                    <a href="#" class="btn btn-half-square">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 grid-item">
                            <div class="things-img fix mb-30 w-img">
                                <img src="{{ asset('frontend/assets/img/best_things/thing-3.jpg') }}" alt="best-things">
                                <div class="things-content">
                                    <h4><a href="#">Paris</a></h4>
                                    <span>Starting from $1200</span>
                                </div>
                                <div class="things-btn transition-3">
                                    <a href="#" class="btn btn-half-square">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 grid-item">
                            <div class="things-img fix mb-30 w-img">
                                <img src="{{ asset('frontend/assets/img/best_things/thing-4.jpg') }}" alt="best-things">
                                <div class="things-content">
                                    <h4><a href="#">Canada</a></h4>
                                    <span>Starting from $1200</span>
                                </div>
                                <div class="things-btn transition-3">
                                    <a href="#" class="btn btn-half-square">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 grid-item">
                            <div class="things-img fix mb-30 w-img">
                                <img src="{{ asset('frontend/assets/img/best_things/thing-5.jpg') }}" alt="best-things">
                                <div class="things-content">
                                    <h4><a href="#">London</a></h4>
                                    <span>Starting from $1200</span>
                                </div>
                                <div class="things-btn transition-3">
                                    <a href="#" class="btn btn-half-square">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 grid-item">
                            <div class="things-img fix mb-30 w-img">
                                <img src="{{ asset('frontend/assets/img/best_things/thing-6.jpg') }}" alt="best-things">
                                <div class="things-content">
                                    <h4><a href="#">Taj Mahal</a></h4>
                                    <span>Starting from $1200</span>
                                </div>
                                <div class="things-btn transition-3">
                                    <a href="#" class="btn btn-half-square">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- best things area end -->

            <!-- team area start -->
            <section class="team-area pt-80 pb-70 grey-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                            <div class="sec-title text-center mb-50">
                                <h1>Meet The Guides</h1>
                                <p>  Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="single-team mb-30">
                                <div class="team-thumb transition-3 w-img">
                                    <img src="{{ asset('frontend/assets/img/team/team-1.jpg') }}" alt="team-1">
                                    <div class="team-content transition-3">
                                        <h4>Ahmed Kamal</h4>
                                        <span>Director & CEO</span>
                                        <div class="team-social">
                                            <ul>
                                                <li><a href="https://www.facebook.com/share/15CgQahxzH/?mibextid=wwXIfr" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="single-team mb-30">
                                <div class="team-thumb transition-3 w-img ">
                                    <img src="{{ asset('frontend/assets/img/team/team-2.jpg') }}" alt="team-1">
                                    <div class="team-content transition-3">
                                        <h4>Ahmed Kamal</h4>
                                        <span>Director & CEO</span>
                                        <div class="team-social">
                                            <ul>
                                                <li><a href="https://www.facebook.com/share/15CgQahxzH/?mibextid=wwXIfr" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="single-team mb-30">
                                <div class="team-thumb transition-3 w-img">
                                    <img src="{{ asset('frontend/assets/img/team/team-3.jpg') }}" alt="team-1">
                                    <div class="team-content transition-3">
                                        <h4>Ahmed Kamal</h4>
                                        <span>Director & CEO</span>
                                        <div class="team-social">
                                            <ul>
                                                <li><a href="https://www.facebook.com/share/15CgQahxzH/?mibextid=wwXIfr" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="single-team mb-30">
                                <div class="team-thumb transition-3 w-img">
                                    <img src="{{ asset('frontend/assets/img/team/team-4.jpg') }}" alt="team-1">
                                    <div class="team-content transition-3">
                                        <h4>Ahmed Kamal</h4>
                                        <span>Director & CEO</span>
                                        <div class="team-social">
                                            <ul>
                                                <li><a href="https://www.facebook.com/share/15CgQahxzH/?mibextid=wwXIfr" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- team area end -->

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

            <!-- testimonial area start -->
            <section class="testimonial-area grey-bg pt-80 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                            <div class="sec-title text-center mb-50">
                                <h1>What Travellers Say About Us</h1>
                                <p>  Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testi-slider">
                                <div class="testi-slider-active owl-carousel">
                                    <div class="single-testi white-bg transition-3">
                                        <span class="quote"><i class="fas fa-quote-left"></i></span>
                                        <p>Borem ipsum dolor sit a consecteturyr adipisicing elit, sed do eiusmo tempor incididunt ut labore etdolore m aliqu enim ad minim veniam qui nostrud exercitation ulla</p>

                                        <div class="testi-person d-flex">
                                            <div class="testi-thumb mr-20">
                                                <img src="{{ asset('frontend/assets/img/testimonial/testi-1.jpg') }}" alt="testi-1">
                                            </div>
                                            <div class="testi-info">
                                                <h4>Molly Robinson</h4>
                                                <span>web Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-testi white-bg transition-3">
                                        <span class="quote"><i class="fas fa-quote-left"></i></span>
                                        <p>Borem ipsum dolor sit a consecteturyr adipisicing elit, sed do eiusmo tempor incididunt ut labore etdolore m aliqu enim ad minim veniam qui nostrud exercitation ulla</p>

                                        <div class="testi-person d-flex">
                                            <div class="testi-thumb mr-20">
                                                <img src="{{ asset('frontend/assets/img/testimonial/testi-2.jpg') }}" alt="testi-1">
                                            </div>
                                            <div class="testi-info">
                                                <h4>Stiven Smith</h4>
                                                <span>CEO, stthemes</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-testi white-bg transition-3">
                                        <span class="quote"><i class="fas fa-quote-left"></i></span>
                                        <p>Borem ipsum dolor sit a consecteturyr adipisicing elit, sed do eiusmo tempor incididunt ut labore etdolore m aliqu enim ad minim veniam qui nostrud exercitation ulla</p>

                                        <div class="testi-person d-flex">
                                            <div class="testi-thumb mr-20">
                                                <img src="{{ asset('frontend/assets/img/testimonial/testi-3.jpg') }}" alt="testi-1">
                                            </div>
                                            <div class="testi-info">
                                                <h4>Saidul Islam</h4>
                                                <span>Design-expart260</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-testi white-bg transition-3">
                                        <span class="quote"><i class="fas fa-quote-left"></i></span>
                                        <p>Borem ipsum dolor sit a consecteturyr adipisicing elit, sed do eiusmo tempor incididunt ut labore etdolore m aliqu enim ad minim veniam qui nostrud exercitation ulla</p>

                                        <div class="testi-person d-flex">
                                            <div class="testi-thumb mr-20">
                                                <img src="{{ asset('frontend/assets/img/testimonial/testi-4.jpg') }}" alt="testi-1">
                                            </div>
                                            <div class="testi-info">
                                                <h4>Shahnewaz Sakil</h4>
                                                <span>Diploma Engineer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial area end -->

            <!-- blog area start -->
            <section class="blog-area pt-80 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                            <div class="sec-title text-center mb-50">
                                <h1>The Best Value Under the Sun</h1>
                                <p>  Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-12">
                            <div class="single-blog mb-30 fix">
                                <div class="blog-thumb w-img">
                                    <img src="{{ asset('frontend/assets/img/blog/blog-big.jpg') }}" alt="blog-big">
                                </div>
                                <div class="blog-tag">
                                    <a href="#">Protest</a>
                                </div>
                                <div class="blog-content">
                                    <h1><a href="#">How the future of america is shaped by politicians</a></h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipis sedo eiusmod tempor incididunt ut labore et dolore magn</p>
                                    <div class="blog-meta d-sm-flex align-items-center d-none">
                                        <div class="blog-avater mr-15">
                                            <img src="{{ asset('frontend/assets/img/blog/blog-avater.jpg') }}" alt="blog-avater">
                                        </div>
                                        <div class="aveter-info">
                                            <h4>Jamel Grant</h4>
                                            <a href="#">12 November</a>
                                            <a href="#"><i class="fal fa-comment"></i> 12</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-12">
                            <div class="single-blog fix mb-30 w-img">
                                <div class="blog-thumb">
                                    <img src="{{ asset('frontend/assets/img/blog/blog-sm-1.jpg') }}" alt="blog-sm">
                                </div>
                                <div class="blog-tag">
                                    <a href="#">Culture</a>
                                </div>
                                <div class="blog-content">
                                    <h1><a href="#">How the future of america is shaped by politicians</a></h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipis sedo eiusmod tempor incididunt ut labore et dolore magn</p>
                                </div>
                            </div>
                            <div class="single-blog fix mb-30">
                                <div class="blog-thumb w-img">
                                    <img src="{{ asset('frontend/assets/img/blog/blog-sm-2.jpg') }}" alt="blog-sm">
                                </div>
                                <div class="blog-tag">
                                    <a href="#">Culture</a>
                                </div>
                                <div class="blog-content">
                                    <h1><a href="#">How the future of america is shaped by politicians</a></h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipis sedo eiusmod tempor incididunt ut labore et dolore magn</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog area end -->
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