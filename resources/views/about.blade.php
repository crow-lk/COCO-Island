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
                                <h1 class="about-page-title sec-title text-center pt-150">About</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Company Story -->
        <section class="section pt-70 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 mb-4 mb-md-0 text-center">
                        <img src="{{ asset('frontend/assets/img/about/about-1.jpg') }}"
                             alt="About Coco Island Holidays"
                             class="img-fluid w-100 rounded shadow">
                    </div>
                    <div class="col-lg-7 col-md-12 ps-lg-4">
                        <h2 class="sec-title text-center mb-40">Company Story</h2>
                        <p class="mb-30">
                            Coco Island Holidays was founded with a passion for showcasing the true beauty of Sri Lanka through meaningful, well-crafted travel experiences. What began as a small local initiative has grown into a trusted travel brand, known for personalized service, attention to detail, and an unwavering commitment to guest satisfaction. Our team, made up of seasoned travel experts and passionate locals, curates every journey with care, ensuring that travelers not only see Sri Lanka but truly connect with it.
                        </p>
                        <p>
                            From scenic hill country escapes to coastal discoveries and cultural heritage sites, we’ve guided countless travelers through unforgettable moments that last a lifetime.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission & Vision -->
        <section class="section pt-70 pb-70">
            <div class="container">
                <h2 class="sec-title text-center mb-40">Mission & Vision</h2>
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-30">
                        <div class="single-feature text-center p-4 h-100 theme-bg text-white">
                            <h3 class="sec-title mb-20">Our Mission</h3>
                            <p>To deliver authentic, seamless, and memorable travel experiences across Sri Lanka by combining local expertise, personalized service, and a deep respect for culture, nature, and community.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mb-30">
                        <div class="single-feature text-center p-4 h-100 theme-bg text-white">
                            <h3 class="sec-title mb-20">Our Vision</h3>
                            <p>To be the most trusted and inspiring travel partner for discovering Sri Lanka—known globally for excellence, integrity, and unforgettable journeys that celebrate the island’s true spirit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Values -->
        <section class="section pt-70 pb-70">
            <div class="container">
                <h2 class="sec-title text-center mb-40">Our Values</h2>
                <div class="accordion" id="aboutAccordion">
                    <div class="accordion-item">
                        <div class="accordion-header" onclick="toggleAccordion(this)">
                            <span>Authenticity</span><span class="accordion-icon">&#9654;</span>
                        </div>
                        <div class="accordion-content">We showcase Sri Lanka’s true character, its people, culture, and landscapes, with honesty and pride.</div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" onclick="toggleAccordion(this)">
                            <span>Customer-Centricity</span><span class="accordion-icon">&#9654;</span>
                        </div>
                        <div class="accordion-content">Every journey is designed with the traveler in mind, personal, flexible, and hassle-free.</div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" onclick="toggleAccordion(this)">
                            <span>Responsibility</span><span class="accordion-icon">&#9654;</span>
                        </div>
                        <div class="accordion-content">We promote respectful tourism that protects nature, supports local communities, and preserves heritage.</div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" onclick="toggleAccordion(this)">
                            <span>Reliability</span><span class="accordion-icon">&#9654;</span>
                        </div>
                        <div class="accordion-content">From first inquiry to final drop-off, we deliver consistent, dependable service you can trust.</div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" onclick="toggleAccordion(this)">
                            <span>Passion</span><span class="accordion-icon">&#9654;</span>
                        </div>
                        <div class="accordion-content">We love what we do, and it shows in every detail of every trip we create.</div>
                    </div>
                </div>
            </div>
        </section>
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
        <script>
        function toggleAccordion(header) {
            const item = header.parentElement;
            const active = item.parentElement.querySelector('.accordion-item.active');
            if (active && active !== item) {
                active.classList.remove('active');
            }
            item.classList.toggle('active');
        }
        </script>
        @stack('scripts')
    </body>
</html>
