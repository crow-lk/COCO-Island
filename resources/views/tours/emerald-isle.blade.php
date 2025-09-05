{{-- resources/views/emerald-isle.blade.php --}}
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>emerald Shores & Golden Sunsets | COCO Island Holidays</title>
        <meta name="description" content="7 Days / 6 Nights — Luxury Coastal Escape with Ocean Adventures across Sri Lanka’s best beaches.">
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
        <link rel="stylesheet" href="{{ asset('css/emerald-isle.css') }}">
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

        @php($transparentHeader = false)
        @include('components.header')

        <main>
            <!-- Hero -->
            <section class="emerald-isle-hero-area slider-area">
                <div class="emerald-isle-hero single-slider slider-height d-flex align-items-center"
                     data-background="{{ asset('frontend/assets/img/slider/slider-01.jpg') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="emerald-isle-hero-content text-center">
                                    <h1 class="emerald-isle-page-title sec-title">The Emerald Isle Expedition</h1>
                                    <p class="mt-15 mb-0 text-white"> 10 Days / 9 Nights - Sri Lanka’s Classic Journey from Coast to Hills</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

                        <section class="best-money pt-100 pb-125 grey-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="best-money-content">
                                <h1>The Emerald Isle Expedition</h1>
                                <p>Experience Sri Lanka’s best in one unforgettable trip, misty hills, golden beaches, ancient cities, and vibrant culture. Ideal for first-time visitors, this 10-day journey blends scenic train rides, tea estates, heritage sites, and charming coastal towns into a perfect island introduction. </p>

                                <!-- <div class="best-money-price">
                                    <span class="old-price">$ 800</span>
                                    <span class="new-price">500 $</span>
                                    <span>/ FOR PERSON</span>
                                </div> -->
                                <br>
                                <a href="#" class="btn">Contact Us</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="best-money-img w-img">
                                <img src="{{ asset('frontend/assets/img/tour/Emeraldpage.jpg') }}" alt="best-money">
                                <div class="best-money-countdown text-center">
                                    <!-- <div data-countdown data-date="Dec 02 2022 20:20:22">
                                        <ul>
                                            <li><span data-days>0</span> days</li>
                                            <li><span data-hours>0</span> hours</li>
                                            <li><span data-minutes>0</span> minutes</li>
                                            <li><span data-seconds>0</span> seconds</li>
                                        </ul>         
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>




            <!-- Key Highlights -->
            <!-- <section class="section pt-70 pb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center pt-30 pb-50">
                            <h1>Key Highlights</h1>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6 col-lg-4 mb-30">
                            <div class="single-feature p-4 h-100 text-center">
                                <div class="mb-15"><i class="fas fa-umbrella-beach fa-2x"></i></div>
                                <h4 class="mb-10">Bentota · Hikkaduwa · Mirissa</h4>
                                <p class="mb-0 text-justify">Stay in Sri Lanka’s most loved beach towns, each with a distinct vibe and coastline.</p>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-30">
                            <div class="single-feature p-4 h-100 text-center">
                                <div class="mb-15"><i class="fas fa-water fa-2x"></i></div>
                                <h4 class="mb-10">Madu River &amp; Water Sports</h4>
                                <p class="mb-0 text-justify">Glide through mangroves on a river safari and add jet-ski or banana boat rides.</p>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-30">
                            <div class="single-feature p-4 h-100 text-center">
                                <div class="mb-15"><i class="fas fa-fish fa-2x"></i></div>
                                <h4 class="mb-10">Whale Watching (Seasonal)</h4>
                                <p class="mb-0 text-justify">Head out from Mirissa at sunrise to spot blue whales and playful dolphins.</p>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-30">
                            <div class="single-feature p-4 h-100 text-center">
                                <div class="mb-15"><i class="fas fa-feather-alt fa-2x"></i></div>
                                <h4 class="mb-10">Galle Fort at Sunset</h4>
                                <p class="mb-0 text-justify">Stroll the ramparts, watch the sky blaze, and explore colonial-era lanes.</p>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-30">
                            <div class="single-feature p-4 h-100 text-center">
                                <div class="mb-15"><i class="fas fa-seedling fa-2x"></i></div>
                                <h4 class="mb-10">Turtle Hatchery Visit</h4>
                                <p class="mb-0 text-justify">Learn about conservation efforts and see rescued sea turtles up close.</p>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-30">
                            <div class="single-feature p-4 h-100 text-center">
                                <div class="mb-15"><i class="fas fa-spa fa-2x"></i></div>
                                <h4 class="mb-10">Spa, Yoga &amp; Beach Dinners</h4>
                                <p class="mb-0 text-justify">Unwind with optional spa/yoga and end evenings with BBQs by the sea.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- Key Highlights -->
<section class="section pt-70 pb-40 emerald-highlights">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-30 pb-50">
                <h1>Key Highlights</h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Negombo · Kandy · Ella · Galle -->
            <div class="col-12 col-md-6 col-lg-4 mb-30">
                <div class="single-feature p-4 h-100 text-center">
                    <div class="mb-15">
                        <span class="icon-circle"><i class="fas fa-map-marked-alt fa-2x"></i></span>
                    </div>
                    <h4 class="mb-10">Explore Negombo, Kandy, Ella &amp; Galle</h4>
                    <p class="text-center">Discover Sri Lanka’s cultural, scenic, and coastal highlights in one journey.</p>
                </div>
            </div>

            <!-- Scenic Train Ride -->
            <div class="col-12 col-md-6 col-lg-4 mb-30">
                <div class="single-feature p-4 h-100 text-center">
                    <div class="mb-15">
                        <span class="icon-circle"><i class="fas fa-train fa-2x"></i></span>
                    </div>
                    <h4 class="mb-10">Scenic Train Ride</h4>
                    <p class="text-center">Experience the world-famous railway from Kandy to Ella through misty hills.</p>
                </div>
            </div>

            <!-- Pinnawala Elephant Orphanage -->
            <div class="col-12 col-md-6 col-lg-4 mb-30">
                <div class="single-feature p-4 h-100 text-center">
                    <div class="mb-15">
                        <span class="icon-circle"><i class="fas fa-hippo fa-2x"></i></span>
                    </div>
                    <h4 class="mb-10">Pinnawala Elephant Orphanage</h4>
                    <p class="text-center">Meet and observe elephants in a sanctuary environment.</p>
                </div>
            </div>

            <!-- Tea Plantations -->
            <div class="col-12 col-md-6 col-lg-4 mb-30">
                <div class="single-feature p-4 h-100 text-center">
                    <div class="mb-15">
                        <span class="icon-circle"><i class="fas fa-leaf fa-2x"></i></span>
                    </div>
                    <h4 class="mb-10">Tea Plantations &amp; Waterfalls</h4>
                    <p class="text-center">Wander lush tea fields, cascading waterfalls, and mountain vistas.</p>
                </div>
            </div>

            <!-- Galle & Hikkaduwa -->
            <div class="col-12 col-md-6 col-lg-4 mb-30">
                <div class="single-feature p-4 h-100 text-center">
                    <div class="mb-15">
                        <span class="icon-circle"><i class="fas fa-archway fa-2x"></i></span>
                    </div>
                    <h4 class="mb-10">Galle Fort &amp; Hikkaduwa Beach</h4>
                    <p class="text-center">Explore heritage lanes of Galle and relax by Hikkaduwa’s golden sands.</p>
                </div>
            </div>

            <!-- Madu River & Lunuganga -->
            <div class="col-12 col-md-6 col-lg-4 mb-30">
                <div class="single-feature p-4 h-100 text-center">
                    <div class="mb-15">
                        <span class="icon-circle"><i class="fas fa-water fa-2x"></i></span>
                    </div>
                    <h4 class="mb-10">Madu River &amp; Lunuganga</h4>
                    <p class="text-center">Take a boat safari and visit Geoffrey Bawa’s iconic Lunuganga estate.</p>
                </div>
            </div>

            <!-- Colombo City Tour -->
            <div class="col-12 col-md-6 col-lg-4 mb-30">
                <div class="single-feature p-4 h-100 text-center">
                    <div class="mb-15">
                        <span class="icon-circle"><i class="fas fa-city fa-2x"></i></span>
                    </div>
                    <h4 class="mb-10">Colombo City Tour</h4>
                    <p class="text-center">End your trip with vibrant shopping, dining, and colonial landmarks in Colombo.</p>
                </div>
            </div>
        </div>
    </div>
</section>




            <!-- Why You'll Love It + CTA
            <section class="section pt-40 pb-70">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center pt-100 pb-100">
                            <h1>Why You’ll Love It</h1>


                        </div>

                            <div class="row">
                                <div class="col-12 col-md-6 mb-20">
                                    <div class="single-feature p-4 h-100">
                                        <h5 class="mb-10"><i class="fas fa-heart mr-2"></i> Curated for honeymooners &amp; beach lovers</h5>
                                        <p class="mb-0 text-justify">Enjoy a balanced rhythm of leisure and adventure with premium stays and romantic add-ons.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-20">
                                    <div class="single-feature p-4 h-100">
                                        <h5 class="mb-10"><i class="fas fa-random mr-2"></i> Flexible mix of activities</h5>
                                        <p class="mb-0 text-justify">Customize your days—water sports, wellness, or simply sun-lounging on pristine beaches.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-20">
                                    <div class="single-feature p-4 h-100">
                                        <h5 class="mb-10"><i class="fas fa-camera-retro mr-2"></i> Instagram-worthy moments</h5>
                                        <p class="mb-0 text-justify">Galle sunsets, Mirissa cruisers, and golden sands make picture-perfect memories.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-20">
                                    <div class="single-feature p-4 h-100">
                                        <h5 class="mb-10"><i class="fas fa-hotel mr-2"></i> Premium coastal hotels</h5>
                                        <p class="mb-0 text-justify">Choose from a curated list of luxury resorts along Sri Lanka’s southern coast.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center mt-30">
                                <p class="mb-20 text-justify">
                                    Feel the sun, salt, and soul of the island. Reserve your beach holiday now.
                                </p>
                                <a href="https://wa.me/94776605054" target="_blank" class="btn btn-square">
                                    <i class="fab fa-whatsapp mr-2"></i> Contact on WhatsApp
                                </a>
                            </div>
                    </div>
                </div>
            </section> -->
<!-- Why You'll Love It + CTA -->
<section class="loveitsection section pt-40 pb-40">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center pt-50 pb-50 text-white">
                <h1>Why You’ll Love It</h1>
            </div>

            <div class="col-12">
                <ul class="list-unstyled text-center text-white">
                    <li class="mb-4">
                         <p>A well-balanced itinerary for first-time visitors</p>
                    </li>
                    <li class="mb-4">
                        <p>Unmatched diversity in one compact trip</p>
                    </li>
                    <li class="mb-4">
                        <p>Handpicked experiences and scenic routes</p>
                    </li>
                    <li class="mb-4">
                        <p>Let this classic island tour define your Sri Lankan holiday.</p>
                    </li>
                </ul>
            </div>

            <div class="text-center mt-30  pb-50">
           
                <a href="https://wa.me/94776605054" target="_blank" class="btn bg-dark">
                    Contact Us
                </a>
          
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
        <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script />
        <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/countdown.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
        @stack('scripts')
    </body>
</html>
