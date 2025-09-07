<!-- resources/views/about.blade.php -->
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>About | COCO Island Holidays - Travel Agency</title>
        <meta name="description" content="Learn more about COCO Island Holidays, our story, mission, vision, and values.">
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
        <link rel="stylesheet" href="{{ asset('css/about.css') }}">
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
                    <!-- About Hero Banner -->
        <section class="about-hero-area slider-area" data-background="{{ asset('frontend/assets/img/slider/slider-01.jpg') }}">
            <div class="about-hero single-slider slider-height d-flex align-items-center"
                 data-background="{{ asset('frontend/assets/img/about/aboutpage.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="about-hero-content text-center">
                                <h1 class="about-page-title sec-title text-center pt-150">Privacy Policy</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Privacy Policy Section -->
    <section class="section pt-70 pb-70 privacy-policy">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <!-- <h2 class="sec-title text-center mb-40">Privacy Policy</h2> -->
                    <p class="text-justify">
                        Your privacy matters to us. At <strong>Coco Island Holidays</strong>, we are committed to
                        protecting the personal information you share with us, whether through online inquiries,
                        bookings, or communications.
                    </p>
                    <p class="text-justify">
                        We collect only the information necessary to serve you better, such as your name, email,
                        travel preferences, and payment details, and we use it solely for trip coordination,
                        customer support, and service improvements. Your data is never shared with third parties
                        without your consent, except where legally required or to fulfill your booking (e.g.,
                        hotels, transport providers).
                    </p>
                    <p class="text-justify">
                        All transactions are secured and handled with confidentiality. By using our website and
                        services, you agree to our privacy practices.
                    </p>
                    <p class="text-justify mb-0">
                        For any concerns, feel free to contact us at
                        <a href="mailto:info@cocoislandholidays.com">info@cocoislandholidays.com</a>.
                    </p>
                </div>
            </div>
        </div>
    </section>
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
