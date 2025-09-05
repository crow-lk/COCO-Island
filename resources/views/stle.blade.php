<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Style Guide - COCO Island Holidays')</title>
    <meta name="description" content="@yield('description', 'Style guide and design system for COCO Island Holidays website.')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
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
    <!-- Header Include (copy from index.html if needed) -->
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
    
    <main>
        <section class="style-guide-section pt-100 pb-100">
            <div class="container">
                <h2 class="mb-4">Style Guide</h2>
                <p>This page demonstrates the main styles used in the COCO Island Holidays theme.</p>
                
                <h3>Headings</h3>
                <h1>Heading 1</h1>
                <h2>Heading 2</h2>
                <h3>Heading 3</h3>
                <h4>Heading 4</h4>
                <h5>Heading 5</h5>
                <h6>Heading 6</h6>
                
                <h3>Buttons</h3>
                <a href="#" class="btn">Default Button</a>
                <a href="#" class="btn btn-border">Border Button</a>
                <a href="#" class="btn btn-square">Square Button</a>
                <a href="#" class="btn btn-half-square">Half Square Button</a>
                
                <h3>Forms</h3>
                <form>
                    <div class="form-group mb-3">
                        <label for="input1">Input</label>
                        <input type="text" class="form-control" id="input1" placeholder="Type here...">
                    </div>
                    <div class="form-group mb-3">
                        <label for="textarea1">Textarea</label>
                        <textarea class="form-control" id="textarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
                <h3>Lists</h3>
                <ul>
                    <li>Unordered List Item 1</li>
                    <li>Unordered List Item 2</li>
                </ul>
                <ol>
                    <li>Ordered List Item 1</li>
                    <li>Ordered List Item 2</li>
                </ol>
                
                <h3>Tables</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr><th>Header 1</th><th>Header 2</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>Cell 1</td><td>Cell 2</td></tr>
                        <tr><td>Cell 3</td><td>Cell 4</td></tr>
                    </tbody>
                </table>
                
                <h3>Colors</h3>
                <div class="row">
                    <div class="col-md-3">
                        <div class="color-swatch" style="background-color: #007bff; height: 100px; border-radius: 8px; margin-bottom: 10px;"></div>
                        <p>Primary Blue</p>
                    </div>
                    <div class="col-md-3">
                        <div class="color-swatch" style="background-color: #28a745; height: 100px; border-radius: 8px; margin-bottom: 10px;"></div>
                        <p>Success Green</p>
                    </div>
                    <div class="col-md-3">
                        <div class="color-swatch" style="background-color: #dc3545; height: 100px; border-radius: 8px; margin-bottom: 10px;"></div>
                        <p>Danger Red</p>
                    </div>
                    <div class="col-md-3">
                        <div class="color-swatch" style="background-color: #ffc107; height: 100px; border-radius: 8px; margin-bottom: 10px;"></div>
                        <p>Warning Yellow</p>
                    </div>
                </div>
                
                <h3>Typography</h3>
                <p class="lead">This is a lead paragraph. It stands out from regular paragraphs.</p>
                <p>This is a regular paragraph with <strong>bold text</strong> and <em>italic text</em>.</p>
                <p><small>This is small text for less important information.</small></p>
                
                <h3>Spacing</h3>
                <div class="p-1" style="background-color: #f8f9fa; padding: 10px; margin-bottom: 10px;">Padding 1</div>
                <div class="p-2" style="background-color: #f8f9fa; padding: 20px; margin-bottom: 10px;">Padding 2</div>
                <div class="p-3" style="background-color: #f8f9fa; padding: 30px; margin-bottom: 10px;">Padding 3</div>
            </div>
        </section>
    </main>
    
    <!-- Footer Include (copy from index.html if needed) -->
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
                                <a href="{{ route('terms.conditions') }}">Terms & Condition</a>
                                <a href="{{ route('privacy.policy') }}"> Privacy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </footer>
    
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
