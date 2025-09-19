
<!-- COCO Island Holidays Original Header Start -->
<header class="header-area {{ ($transparentHeader ?? false) ? 'header-transparent' : '' }}">
    <!-- <div class="header-top">
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
    </div> -->
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
                                    <li><a href="/blogs">Blogs</a></li>
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
<!-- COCO Island Holidays Original Header End -->

<!-- Fblog Navigation (Blogs, Categories, Search) Start -->
<div class="fblog-nav-bar py-3 bg-light border-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="d-flex align-items-center">
                    <a href="{{ route('filamentblog.post.index') }}" class="fw-semibold text-decoration-none me-4 hover-primary">
                        <span>Blogs</span>
                    </a>
                    <div class="relative group">
                        <button class="fw-semibold text-decoration-none btn btn-link d-inline-flex p-2 align-items-center hover-primary">
                            <span>Categories</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ms-1" style="width: 16px; height: 16px;" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m19 9l-7 6l-7-6" />
                            </svg>
                        </button>
                        <div class="absolute left-0 group-hover:pointer-events-auto top-[calc(100%)] origin-left pt-2 opacity-0 pointer-events-none transition will-change-transform group-hover:opacity-100 z-50">
                            <x-blog-header-category />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <form action="{{ route('filamentblog.post.search') }}" method="GET" class="d-flex justify-content-end">
                    <div class="position-relative" style="max-width: 300px;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="position-absolute top-50 translate-middle-y text-muted" style="left: 15px; width: 20px; height: 20px; pointer-events: none;" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-width="1.5">
                                <circle cx="11.5" cy="11.5" r="9.5" />
                                <path stroke-linecap="round" d="M18.5 18.5L22 22" />
                            </g>
                        </svg>
                        <input placeholder="Search blogs..." type="text" name="query" value="{{ request()->get('query') }}" class="form-control ps-5 rounded-pill" style="background-color: #f8f9fa;" />
                    </div>
                    @error('query')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Fblog Navigation (Blogs, Categories, Search) End -->
