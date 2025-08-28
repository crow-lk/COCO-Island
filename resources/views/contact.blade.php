<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Contact Us - COCO Island Holidays')</title>
    <meta name="description" content="@yield('description', 'Get in touch with COCO Island Holidays. Contact us for bookings, inquiries, and travel information.')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/preloader.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    @stack('styles')
</head>
<body>
    <!-- Header Start -->
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
    
    <!-- header area start -->
    <header class="header-area header-transparent">
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
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Packages</a></li>
                                        <li><a href="#">Hotels</a></li>
                                        <li><a href="#">Jobs</a></li>
                                        <li><a href="#" class="arrow">NEWS</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('blog.details') }}">News Details</a></li>
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
        <section class="contact-section pt-100 pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="contact-form-wrapper white-bg p-5 rounded shadow">
                            <h2 class="mb-4">Contact Us</h2>
                            <form action="#" method="post" class="contact-form">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="name">Your Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email">Your Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" id="subject" name="subject">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Contact Information Section -->
        <section class="contact-info-section pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="contact-info-item text-center mb-4">
                            <div class="contact-icon mb-3">
                                <i class="fas fa-map-marker-alt fa-3x text-primary"></i>
                            </div>
                            <h4>Our Location</h4>
                            <p>01, Wickramasinghepura, Ruwanmaga, Dodangoda, Kaluthara</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="contact-info-item text-center mb-4">
                            <div class="contact-icon mb-3">
                                <i class="fas fa-phone-alt fa-3x text-primary"></i>
                            </div>
                            <h4>Phone Number</h4>
                            <p>+94 77 660 5054</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="contact-info-item text-center mb-4">
                            <div class="contact-icon mb-3">
                                <i class="fas fa-envelope fa-3x text-primary"></i>
                            </div>
                            <h4>Email Address</h4>
                            <p>yourmail@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <!-- Footer Start -->
    <footer class="footer-area grey-bg-2">
        <div class="footer-top pt-95 pb-20">
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
                    <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-title">
                                <h3>Follow Us</h3>
                            </div>
                            <div class="footer-content">
                                <div class="follow-us">
                                    <ul>
                                        <li><a href="https://www.facebook.com/share/15CgQahxzH/?mibextid=wwXIfr" target="_blank">Facebook </a></li>
                                        <li><a href="https://www.instagram.com/cocoislandholidaysofficial?igsh=MWo5aHk3aDBoOWlxOA%3D%3D&utm_source=qr" target="_blank">Instagram</a></li>
                                        <li><a href="https://www.tiktok.com/@coco.island.holidays?_t=ZS-8z223emMSIq&_r=1" target="_blank">TikTok</a></li>
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
                                        <form action="#">
                                            <input type="email" placeholder="Type Your Email">
                                            <button class="sub-btn" type="submit"><i class="fas fa-location-arrow"></i></button>
                                        </form>
                                    </div>
                                    <div class="social">
                                        <ul>
                                            <li>
                                                <a href="https://www.facebook.com/share/15CgQahxzH/?mibextid=wwXIfr" target="_blank">
                                                    <i class="fab fa-facebook-f social-icon-lg"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/cocoislandholidaysofficial?igsh=MWo5aHk3aDBoOWlxOA%3D%3D&utm_source=qr" target="_blank">
                                                    <i class="fab fa-instagram social-icon-lg"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.tiktok.com/@coco.island.holidays?_t=ZS-8z223emMSIq&_r=1" target="_blank">
                                                    <i class="fab fa-tiktok social-icon-lg"></i>
                                                </a>
                                            </li>
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
                                <p>Copyright © {{ date('Y') }} <a href="https://cocoislandholidays.com" target="_blank">COCO Island holiday</a>. All Rights Reserved by <a href="https://crow.lk" target="_blank">Crow.lk</a></p>
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
    <!-- Footer End -->
    
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
