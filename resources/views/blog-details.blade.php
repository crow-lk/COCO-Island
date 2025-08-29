<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title', 'Your Journey to Sri Lanka Begins Here - COCO Island Holidays')</title>
        <meta name="description" content="@yield('description', 'Discover amazing blog posts and travel stories from COCO Island Holidays. Your journey to Sri Lanka begins here.')">
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
            <!-- page title area start -->
            <section class="page-title" >
                <div class="page-title-inner d-flex align-items-center text-center" data-background="{{ asset('frontend/assets/img/page_title/page-title.jpg') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="page-breadcrumb">
                                    <h1>BLOG DETAILS</h1>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb justify-content-center">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-details">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="page-details-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Blog Right Sidebar</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page title area end -->

            <!-- blog area start -->
            <section class="blog-area pt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 ">
                            <div class="blog-wrapper pb-50 mb-50">
                                <div class="blog-inner">
                                    <div class="blog-img w-img">
                                        <img src="{{ asset('frontend/assets/img/blog/blog-details/blog-details-big.jpg') }}" alt="Blog Details Image">
                                    </div>
                                    <div class="blog-text mt-20">
                                        <h4><a href="#">Contrary to popular belief </a></h4>
                                        <div class="blog-meta">
                                            <span>17 AUG 2017</span>
                                            <span><a href="#">BY : Admin</a></span>
                                            <span><a href="#">09 comments</a></span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irures dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonm proident, sunt in culpa qui officia deserunt mollit anim id est laborumLorem ipsum dolor.</p>

                                        <p>sit amet, consectetur adipisicielit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Duis fvUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autei irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                                        <div class="user-quote fix">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab et dolore magna ali Ut enim ad minim veniam, quis nostrud exerci pteur </p>
                                            <h5>Christian Weber</h5>
                                        </div>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>

                                        <div class="blog-social text-center mb-50 mt-40">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-comment-area">
                                    <div class="blog-comment-title mb-25">
                                        <h2 class="blog-right-line">3 COMMENTS</h2>
                                    </div>

                                    <!-- blog comment area start -->
                                    <div class="blog-comment-wrapper">
                                        <ul>
                                            <li>
                                                <div class="single-comment d-flex mb-40">
                                                    <div class="user-avater mr-20">
                                                        <img src="{{ asset('frontend/assets/img/blog/blog-details/comments/comments.jpg') }}" alt="comments">
                                                    </div>
                                                    <div class="user-comment">
                                                        <div class="comment-meta">
                                                            <span class="username">Shahnewaz Sakil</span>
                                                            <span class="date">jan 06 2017</span>
                                                            <a href="#" class="f-right"><i class="fas fa-reply"></i> Reply</a>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utx gh labore et dolor magna ali Ut enim ad minim veniam, quis nostrud exercitation .</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single-comment comment-reply d-flex mb-40">
                                                    <div class="user-avater mr-20">
                                                        <img src="{{ asset('frontend/assets/img/blog/blog-details/comments/comments-2.jpg') }}" alt="comments">
                                                    </div>
                                                    <div class="user-comment">
                                                        <div class="comment-meta">
                                                            <span class="username">Diego Fou</span>
                                                            <span class="date">jan 06 2017</span>
                                                            <a href="#" class="f-right"><i class="fas fa-reply"></i> Reply</a>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utx gh labore et dolor magna ali Ut enim ad minim veniam, quis nostrud exercitation .</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single-comment d-flex ">
                                                    <div class="user-avater mr-20">
                                                        <img src="{{ asset('frontend/assets/img/blog/blog-details/comments/comments-3.jpg') }}" alt="comments">
                                                    </div>
                                                    <div class="user-comment">
                                                        <div class="comment-meta">
                                                            <span class="username">Diego Fou</span>
                                                            <span class="date">jan 06 2017</span>
                                                            <a href="#" class="f-right"><i class="fas fa-reply"></i> Reply</a>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utx gh labore et dolor magna ali Ut enim ad minim veniam, quis nostrud exercitation .</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- blog comment area start -->

                                    <!-- blog comment form area start -->
                                    <div class="blog-comment-form">
                                        <h2 class="blog-right-line mb-35">LEAVE A COMMENT</h2>
                                        <form action="#">
                                            @csrf
                                            <div class="comment-form-inner d-flex align-items-center mb-40">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="comment-input">
                                                            <input type="text" placeholder="Name">
                                                            <input type="text" placeholder="Email">
                                                            <input type="text" placeholder="Subject">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="comment-text">
                                                            <textarea class="comment-txt" name="comment-txt" placeholder="Comment"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-btn">
                                                <button class="btn btn-square" type="submit">SEND</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- blog comment form area end -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="blog-sidebar">
                                <div class="sidebar-widget mb-40">
                                    <div class="sidebar-widget-title mb-30">
                                        <h3 class="blog-right-line">SEARCH</h3>
                                    </div>
                                    <div class="sidebar-widget-content">
                                        <div class="search-form-sidebar">
                                            <form action="#">
                                                <input type="text">
                                                <button type="submit"><i class="far fa-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-widget mb-40">
                                    <div class="sidebar-widget-title mb-30">
                                        <h3 class="blog-right-line">CATEGORIES</h3>
                                    </div>
                                    <div class="sidebar-widget-content">
                                        <div class="sidebar-catagory">
                                            <ul>
                                                <li><a href="#" >Graphic Design</a><span class="f-right">(25)</span></li>
                                                <li><a href="#" >Graphic Design</a><span class="f-right">(25)</span></li>
                                                <li><a href="#" >Graphic Design</a><span class="f-right">(25)</span></li>
                                                <li><a href="#" >Graphic Design</a><span class="f-right">(25)</span></li>
                                                <li><a href="#" >Graphic Design</a><span class="f-right">(25)</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-widget mb-40">
                                    <div class="sidebar-widget-title mb-30">
                                        <h3 class="blog-right-line">RECENT POST</h3>
                                    </div>
                                    <div class="sidebar-widget-content">
                                        <div class="rc-post">
                                            <ul>
                                                <li>
                                                    <div class="single-rc-post d-flex align-items-center">
                                                        <div class="rc-thumb mr-20">
                                                            <img src="{{ asset('frontend/assets/img/blog/rc-post/rcp-1.jpg') }}" alt="rc-post">
                                                        </div>
                                                        <div class="rc-content">
                                                            <div class="rc-meta">
                                                                <span>jan 06 2017</span>
                                                            </div>
                                                            <h6><a href="#">Lorem ipsum dolor sit amet, consectetur ai elit, sed do eiusmod tempor .</a></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="single-rc-post d-flex align-items-center">
                                                        <div class="rc-thumb mr-20">
                                                            <img src="{{ asset('frontend/assets/img/blog/rc-post/rcp-2.jpg') }}" alt="rc-post">
                                                        </div>
                                                        <div class="rc-content">
                                                            <div class="rc-meta">
                                                                <span>jan 06 2017</span>
                                                            </div>
                                                            <h6><a href="#">Lorem ipsum dolor sit amet, consectetur ai elit, sed do eiusmod tempor .</a></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="single-rc-post d-flex align-items-center">
                                                        <div class="rc-thumb mr-20">
                                                            <img src="{{ asset('frontend/assets/img/blog/rc-post/rcp-3.jpg') }}" alt="rc-post">
                                                        </div>
                                                        <div class="rc-content">
                                                            <div class="rc-meta">
                                                                <span>jan 06 2017</span>
                                                            </div>
                                                            <h6><a href="#">Lorem ipsum dolor sit amet, consectetur ai elit, sed do eiusmod tempor .</a></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-widget grey-bg-4 mb-40 pt-20 pl-20 pb-20">
                                    <div class="sidebar-widget-title mb-20">
                                        <h3 class="blog-right-line">Newsletter</h3>
                                    </div>
                                    <div class="sidebar-widget-content">
                                        <div class="news-letter">
                                            <a href="#">Creative News Game Add, </a>
                                            <a href="#">Good,</a>
                                            <a href="#">Creative,</a>
                                            <a href="#">Bussiness,</a>
                                            <a href="#">Winter,</a>
                                            <a href="#">Love,</a>
                                            <a href="#">Gallery,</a>
                                            <a href="#">Fashon  Mobile Apps,</a>
                                            <a href="#">Food,</a>
                                            <a href="#">Glass,</a>
                                            <a href="#">Popular Post,</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-widget mb-40">
                                    <div class="sidebar-widget-title mb-30">
                                        <h3 class="blog-right-line">Tags</h3>
                                    </div>
                                    <div class="sidebar-widget-content">
                                        <div class="sidebar-tags">
                                            <a href="#">Graphic Design</a>
                                            <a href="#" class="active">Web Design</a>
                                            <a href="#">HTML</a>
                                            <a href="#">HTML</a>
                                            <a href="#">Graphic Design</a>
                                            <a href="#">Web Design</a>
                                            <a href="#">Graphic Design</a>
                                            <a href="#">Web Design</a>
                                            <a href="#">HTML</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-widget mb-40">
                                    <div class="sidebar-widget-content">
                                        <div class="sidebar-banner owl-carousel">
                                            <div class="single-banner">
                                                <img src="{{ asset('frontend/assets/img/blog/banner/banner-1.jpg') }}" alt="banner-1">
                                            </div>
                                            <div class="single-banner">
                                                <img src="{{ asset('frontend/assets/img/blog/banner/banner-1.jpg') }}" alt="banner-1">
                                            </div>
                                            <div class="single-banner">
                                                <img src="{{ asset('frontend/assets/img/blog/banner/banner-1.jpg') }}" alt="banner-1">
                                            </div>
                                        </div>
                                    </div>
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
