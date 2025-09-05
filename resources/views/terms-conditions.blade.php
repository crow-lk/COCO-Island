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
    <!-- Terms & Conditions -->
    <section class="section pt-70 pb-70 terms-and-conditions" id="terms">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <h2 class="sec-title text-center mb-40">Terms &amp; Conditions</h2>

                    <p class="text-justify">
                        When booking a trip with <strong>Coco Island Holidays</strong>, you agree to the following terms:
                    </p>

                    <ol class="pl-3">
                        <li class="mb-20">
                            <h5 class="mb-10">Bookings &amp; Payments</h5>
                            <p class="mb-0 text-justify">
                                A deposit is required to confirm your booking. Full payment must be made prior to trip commencement, as specified in your itinerary.
                            </p>
                        </li>

                        <li class="mb-20">
                            <h5 class="mb-10">Cancellations &amp; Refunds</h5>
                            <p class="mb-0 text-justify">
                                Cancellations must be made in writing. Refunds are subject to our cancellation policy and may vary based on notice period and third-party provider rules (hotels, guides, etc.).
                            </p>
                        </li>

                        <li class="mb-20">
                            <h5 class="mb-10">Travel Insurance</h5>
                            <p class="mb-0 text-justify">
                                We recommend all travelers have comprehensive travel insurance covering health, accidents, delays, and cancellations.
                            </p>
                        </li>

                        <li class="mb-20">
                            <h5 class="mb-10">Itinerary Changes</h5>
                            <p class="mb-0 text-justify">
                                We reserve the right to modify itineraries due to unforeseen circumstances (e.g., weather, road conditions, local regulations) while ensuring equivalent or better alternatives.
                            </p>
                        </li>

                        <li class="mb-0">
                            <h5 class="mb-10">Liability</h5>
                            <p class="mb-0 text-justify">
                                Coco Island Holidays is not liable for loss, injury, delays, or unforeseen incidents beyond our control. However, we always strive to support and safeguard your journey.
                            </p>
                        </li>
                    </ol>

                    <p class="mt-30 mb-0 text-justify">
                        By proceeding with a booking, you confirm that you have read and agreed to these terms.
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
