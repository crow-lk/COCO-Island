{{-- resources/views/tours/show.blade.php --}}
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ $tour->meta_title ?? $tour->title }} | COCO Island Holidays</title>
        <meta name="description" content="{{ $tour->meta_description ?? $tour->description }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/fav-icon.jpg') }}">
        <!-- CSS -->
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
        <link rel="stylesheet" href="{{ asset('css/about.css') }}">
        <link rel="stylesheet" href="{{ asset('css/tour-page.css') }}">
        @stack('styles')
    </head>
    <body>
        <!-- pre loader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>

        <!-- scroll up -->
        <div class="scroll-up" id="scroll" style="display: none;">
            <a href="javascript:void(0);"><i class="fas fa-angle-up"></i></a>
        </div>

        <!-- Floating WhatsApp -->
        <a href="https://wa.me/94776605054" class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>

        @php($transparentHeader = true)
        @include('components.header')

        <main>
            <!-- Hero -->
            <section class="tour-hero-area slider-area">
                <div class="tour-hero single-slider slider-height d-flex align-items-center"
                     style="background-image: url('{{ asset($tour->hero_image ?: $tour->image_path) }}')">
                    <!-- Overlay is created by ::before in CSS -->
                    <div class="container" style="position: relative; z-index: 2;">
                        <div class="row">
                            <div class="col-12">
                                <div class="tour-hero-content text-center">
                                    <h1 class="tour-page-title sec-title">{{ $tour->title }}</h1>
                                    @if($tour->subtitle && $tour->duration)
                                        <p class="mt-15 mb-0 text-white">{{ $tour->duration }} - {{ $tour->subtitle }}</p>
                                    @elseif($tour->duration)
                                        <p class="mt-15 mb-0 text-white">{{ $tour->duration }}</p>
                                    @elseif($tour->subtitle)
                                        <p class="mt-15 mb-0 text-white">{{ $tour->subtitle }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Tour Overview Section -->
            <section class="best-money pt-100 pb-125 grey-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="best-money-content">
                                <h1>{{ $tour->title }}</h1>
                                <p>{{ $tour->description }}</p>
                                <br>
                                <a href="https://wa.me/94776605054" class="btn">Contact Us</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="best-money-img w-img">
                                <img src="{{ asset($tour->image_path) }}" alt="{{ $tour->title }}">
                                @if($tour->duration)
                                <div class="best-money-countdown text-center">
                                    <!-- Optional countdown or duration display here -->
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Key Highlights Section -->
            @if(!empty($tour->highlights))
            <section class="section pt-70 pb-40 tour-highlights">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center pt-30 pb-50">
                            <h1>Key Highlights</h1>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        @foreach($tour->highlights as $highlight)
                            <div class="col-12 col-md-6 col-lg-4 mb-30">
                                <div class="single-feature p-4 h-100 text-center">
                                    <div class="mb-15">
                                        <span class="icon-circle"><i class="fas {{ $highlight['icon'] ?? 'fa-star' }} fa-2x"></i></span>
                                    </div>
                                    <h4 class="mb-10">{{ $highlight['title'] }}</h4>
                                    <p class="text-center">{{ $highlight['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            @endif

            <!-- Dynamic Content Section -->
            @if($tour->content)
            <section class="tour-content pt-40 pb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            {!! $tour->content !!}
                        </div>
                    </div>
                </div>
            </section>
            @endif

            <!-- Why You'll Love It Section -->
            @if(!empty($tour->why_youll_love_it))
            <section class="loveitsection section pt-40 pb-40">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center pt-50 pb-50 text-white">
                            <h1>Why You'll Love It</h1>
                        </div>

                        <div class="col-12">
                            <ul class="list-unstyled text-center text-white">
                                @foreach($tour->why_youll_love_it as $reason)
                                    <li class="mb-4">
                                        <p>{{ $reason }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="text-center mt-30 pb-50">
                            <a href="https://wa.me/94776605054" target="_blank" class="btn bg-dark">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            @endif
        </main>

        @include('components.footer')

        <!-- JS -->
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
