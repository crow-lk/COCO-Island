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

        @php($transparentHeader = true)
        @include('components.header')

        
        
        <main>
            @include('components.hero')

<section class="about-us">
    <div class="container">
        <div class="about-us-inner">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="about-us-tab">
                        <ul class="nav nav-tabs left-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                    <i class="fas fa-map-marked-alt"></i> Local Expertise
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="travel-tab" data-toggle="tab" href="#travel" role="tab" aria-controls="travel" aria-selected="false">
                                    <i class="fas fa-route"></i> Tailor-Made Experiences
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="life-tab" data-toggle="tab" href="#life" role="tab" aria-controls="life" aria-selected="false">
                                    <i class="fas fa-handshake"></i> Reliable Service
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="car-tab" data-toggle="tab" href="#car" role="tab" aria-controls="car" aria-selected="false">
                                    <i class="fas fa-shield-alt"></i> Comfort & Safety
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-8 col-md-7">
                    <div class="about-us-tab-content">
                        <div class="tab-content" id="myTabContent">

                            <!-- Local Expertise -->
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="about-content d-flex flex-column flex-xl-row justify-content-center align-items-center align-items-xl-start text-center text-xl-left">
                                    <div class="about-thumb mb-3 mb-xl-0">
                                        <img src="{{ asset('frontend/assets/img/about/about-01.jpg') }}" alt="Local Expertise" width="370" height="325" class="mx-auto d-block">
                                    </div>
                                    <div class="about-text ml-30">
                                        <h3>Local Expertise</h3>
                                        <p class="text-justify">We are proud to be based in Sri Lanka with a deep understanding of its culture, routes, and hidden gems. Every journey we offer is guided by real local insight and authentic connections.</p>
                                        <ul class="about-features mb-20 text-left text-xl-left">
                                            <li><span>In-depth regional knowledge</span></li>
                                            <li><span>Access to lesser-known attractions</span></li>
                                            <li><span>Trusted relationships with local communities</span></li>
                                        </ul>
                                        <a href="https://wa.me/94776605054" target="_blank" class="btn">Contact Us</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Tailor-Made Experiences -->
                            <div class="tab-pane fade" id="travel" role="tabpanel" aria-labelledby="travel-tab">
                                <div class="about-content d-flex flex-column flex-xl-row justify-content-center align-items-center align-items-xl-start text-center text-xl-left">
                                    <div class="about-thumb mb-3 mb-xl-0">
                                        <img src="{{ asset('frontend/assets/img/about/about-02.jpg') }}" alt="Tailor-Made Experiences" width="370" height="325" class="mx-auto d-block">
                                    </div>
                                    <div class="about-text ml-30">
                                        <h3>Tailor-Made Experiences</h3>
                                        <p class="text-justify">Your journey should reflect your preferences. Every itinerary is handcrafted to suit your travel style, timing, and personal interests — whether spiritual, scenic, cultural, or all of the above.</p>
                                        <ul class="about-features mb-20 text-left text-xl-left">
                                            <li><span>Flexible scheduling and routing</span></li>
                                            <li><span>Personalized activity selection</span></li>
                                            <li><span>Small groups or private tours</span></li>
                                        </ul>
                                        <a href="https://wa.me/94776605054" target="_blank" class="btn">Contact Us</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Reliable Service -->
                            <div class="tab-pane fade" id="life" role="tabpanel" aria-labelledby="life-tab">
                                <div class="about-content d-flex flex-column flex-xl-row justify-content-center align-items-center align-items-xl-start text-center text-xl-left">
                                    <div class="about-thumb mb-3 mb-xl-0">
                                        <img src="{{ asset('frontend/assets/img/about/about-03.jpg') }}" alt="Reliable Service" width="370" height="325" class="mx-auto d-block">
                                    </div>
                                    <div class="about-text ml-30">
                                        <h3>Reliable Service</h3>
                                        <p class="text-justify">From your first inquiry to the final drop-off, we ensure a seamless experience. Expect clear communication, punctual service, and consistent follow-through across every step of your trip.</p>
                                        <ul class="about-features mb-20 text-left text-xl-left">
                                            <li><span>Dedicated tour coordinators</span></li>
                                            <li><span>Prompt responses and updates</span></li>
                                            <li><span>Strong operational planning</span></li>
                                        </ul>
                                        <a href="https://wa.me/94776605054" target="_blank" class="btn">Contact Us</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Comfort & Safety -->
                            <div class="tab-pane fade" id="car" role="tabpanel" aria-labelledby="car-tab">
                                <div class="about-content d-flex flex-column flex-xl-row justify-content-center align-items-center align-items-xl-start text-center text-xl-left">
                                    <div class="about-thumb mb-3 mb-xl-0">
                                        <img src="{{ asset('frontend/assets/img/about/about-04.jpg') }}" alt="Comfort & Safety" width="370" height="325" class="mx-auto d-block">
                                    </div>
                                    <div class="about-text ml-30">
                                        <h3>Comfort &amp; Safety</h3>
                                        <p class="text-justify">Travel with confidence knowing your comfort and safety come first. Our team ensures clean transport, licensed drivers, and secure environments throughout your journey.</p>
                                        <ul class="about-features mb-20 text-left text-xl-left">
                                            <li><span>Fully insured, air-conditioned vehicles</span></li>
                                            <li><span>Professional, experienced drivers</span></li>
                                            <li><span>Safety-first travel routes and stops</span></li>
                                        </ul>
                                        <a href="https://wa.me/94776605054" target="_blank" class="btn">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /tabs -->

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
                                <p> Explore Sri Lanka’s most iconic locations with handpicked tours designed for comfort, discovery, and lasting memories. Each journey captures the island’s true essence, from mountains to coastlines. </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="tour-slider owl-carousel">
                                <div class="single-tour">
                                    <div class="tour-img">
                                        <img src="{{ asset('frontend/assets/img/tour/Ramayanaya.jpg') }}" alt="tour-1">
                                        <div class="tour-content text-center">
                                            <h4>Trails of Ramayanaya: Eternal Legacy</h4>
                                            <p>Walk in the footsteps of Rama, Sita, and Hanuman across Lanka </p>
                                            <a href="{{ route('tours.ramayana') }}" class="link-btn">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-tour">
                                    <div class="tour-img">
                                        <img src="{{ asset('frontend/assets/img/tour/Emerald.jpg') }}" alt="tour-1">
                                        <div class="tour-content text-center">
                                            <h4>The Emerald Isle Expedition</h4>
                                            <p>A perfect blend of beaches, hills, culture, and city charm</p>
                                            <a href="{{ route('tours.emerald-isle') }}" class="link-btn">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-tour">
                                    <div class="tour-img">
                                        <img src="{{ asset('frontend/assets/img/tour/Sunsets.jpg') }}" alt="tour-1">
                                        <div class="tour-content text-center">
                                            <h4>Tropical Shores & Golden Sunsets</h4>
                                            <p>Sun-drenched beaches, luxury stays, and endless coastal charm</p>
                                            <a href="{{ route('tours.tropical-shores') }}" class="link-btn">Book Now</a>
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
                                <h1>Exclusive Offer – Trails of Ramayana Tour</h1>
                                <p>Step into the epic tale of Ramayana through a spiritual 10-day journey across Sri Lanka. Discover sacred sites like Sita Amman Temple, Ashoka Vatika, and Ravana Falls, all guided by our local experts with deep cultural insights</p>

                                <div class="best-money-price">
                                    <span class="old-price"> $800 ₹41,500</span>
                                    <span class="new-price">Only ₹25,999</span>
                                    <span>/ FOR PERSON</span>
                                </div>
                                <a href="https://wa.me/94776605054" class="btn">Contact Us</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="best-money-img w-img">
                                <img src="{{ asset('frontend/assets/img/Muneswaram-temple.jpg') }}" alt="best-money">
                                <div class="best-money-countdown text-center">
                                    <div data-countdown data-date="Dec 02 2026 20:20:22">
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
                                <p>From breathtaking landscapes to cultural landmarks and serene beaches, discover the most unforgettable experiences every traveller must enjoy in Sri Lanka.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row grid">
                        <div class="col-xl-6 col-lg-6 col-md-6 grid-item">
                            <div class="things-img fix mb-30 w-img">
                                <img src="{{ asset('frontend/assets/img/best_things/Thalawakale.jpg') }}" alt="best-things">
                                <div class="things-content">
                                    <h4><a href="#">Thalawakale</a></h4>
                                    <!-- <span>Starting from $1200</span> -->
                                </div>
                                <!-- <div class="things-btn transition-3">
                                    <a href="#" class="btn btn-half-square">View More</a>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 grid-item">
                            <div class="things-img fix mb-30 w-img">
                                <img src="{{ asset('frontend/assets/img/best_things/Goyambokka-beach.jpg') }}" alt="best-things">
                                <div class="things-content">
                                    <h4><a href="#">Goyambokka Beach</a></h4>
                                    <!-- <span>Starting from $1200</span> -->
                                </div>
                                <div class="things-btn transition-3">
                                    <!-- <a href="#" class="btn btn-half-square">View More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 grid-item">
                            <div class="things-img fix mb-30 w-img">
                                <img src="{{ asset('frontend/assets/img/best_things/Koneswaram Temple.jpg') }}" alt="best-things">
                                <div class="things-content">
                                    <h4><a href="#">Koneswaram Temple</a></h4>
                                    <!-- <span>Starting from $1200</span> -->
                                </div>
                                <div class="things-btn transition-3">
                                    <!-- <a href="#" class="btn btn-half-square">View More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 grid-item">
                            <div class="things-img fix mb-30 w-img">
                                <img src="{{ asset('frontend/assets/img/best_things/Marble-Beach.jpg') }}" alt="best-things">
                                <div class="things-content">
                                    <h4><a href="#">Marble Beach</a></h4>
                                    <!-- <span>Starting from $1200</span> -->
                                </div>
                                <div class="things-btn transition-3">
                                    <!-- <a href="#" class="btn btn-half-square">View More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 grid-item">
                            <div class="things-img fix mb-30 w-img">
                                <img src="{{ asset('frontend/assets/img/best_things/Munneswaram.jpg') }}" alt="best-things">
                                <div class="things-content">
                                    <h4><a href="#">Munneswaram Temple</a></h4>
                                    <!-- <span>Starting from $1200</span> -->
                                </div>
                                <div class="things-btn transition-3">
                                    <!-- <a href="#" class="btn btn-half-square">View More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 grid-item">
                            <div class="things-img fix mb-30 w-img">
                                <img src="{{ asset('frontend/assets/img/best_things/Ramboda-Waterfall.jpg') }}" alt="best-things">
                                <div class="things-content">
                                    <h4><a href="#">Ramboda Waterfall</a></h4>
                                    <!-- <span>Starting from $1200</span> -->
                                </div>
                                <div class="things-btn transition-3">
                                    <!-- <a href="#" class="btn btn-half-square">View More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- best things area end -->

            <!-- team area start -->
            <!-- <section class="team-area pt-80 pb-70 grey-bg">
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
            </section> -->
            <!-- team area end -->

            

            <!-- testimonial area start -->
            <section class="testimonial-area grey-bg pt-80 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                            <div class="sec-title text-center mb-50">
                                <h1>What Travellers Say About Us</h1>
                                <p>Discover how travellers from around the world experience Coco Island Holidays—authentic journeys, heartfelt moments, and memories to cherish forever.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testi-slider">
                                <div class="testi-slider-active owl-carousel">
                                    <div class="single-testi white-bg transition-3">
                                        <span class="quote"><i class="fas fa-quote-left"></i></span>
                                        <p>Walking the Ramayana trail with Coco Island Holidays was life-changing. Every site was steeped in history, and our guide brought the stories alive. Felt safe, spiritual, and deeply connected to my roots.</p>

                                        <div class="testi-person d-flex">
                                            <div class="testi-thumb mr-20">
                                                <img src="{{ asset('frontend/assets/img/testimonial/Priya-Menon.jpg') }}" alt="testi-1">
                                            </div>
                                            <div class="testi-info">
                                                <h4>Priya Menon</h4>
                                                <span>Web Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-testi white-bg transition-3">
                                        <span class="quote"><i class="fas fa-quote-left"></i></span>
                                        <p>Our honeymoon was like a dream! Candle-lit beach dinners, whale watching, and sunsets in Galle, every moment felt curated just for us. Thank you, Coco Island Holidays, for making it magical.</p>

                                        <div class="testi-person d-flex">
                                            <div class="testi-thumb mr-20">
                                                <img src="{{ asset('frontend/assets/img/testimonial/Aarav-and-Meera-Kapoor.jpg') }}" alt="testi-1">
                                            </div>
                                            <div class="testi-info">
                                                <h4>Aarav and Meera Kapoor</h4>
                                                <span>Company CEO</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-testi white-bg transition-3">
                                        <span class="quote"><i class="fas fa-quote-left"></i></span>
                                        <p>From misty hills to coastal forts, this expedition gave me a true taste of Sri Lanka. I appreciated the care Coco Island Holidays put into every small detail, professional, seamless, unforgettable.</p>

                                        <div class="testi-person d-flex">
                                            <div class="testi-thumb mr-20">
                                                <img src="{{ asset('frontend/assets/img/testimonial/David-Stein.jpg') }}" alt="testi-1">
                                            </div>
                                            <div class="testi-info">
                                                <h4>David Stein</h4>
                                                <span>Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-testi white-bg transition-3">
                                        <span class="quote"><i class="fas fa-quote-left"></i></span>
                                        <p>I needed nature, silence, and a bit of luxury, and I found it here. The glamping sites were beautiful and eco-friendly, and I felt so grounded. Highly recommend for solo soul-searchers.</p>

                                        <div class="testi-person d-flex">
                                            <div class="testi-thumb mr-20">
                                                <img src="{{ asset('frontend/assets/img/testimonial/Sofia-Alvarez.jpg') }}" alt="testi-1">
                                            </div>
                                            <div class="testi-info">
                                                <h4>Sofia Alvarez</h4>
                                                <span>Software Engineer</span>
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
            <!-- <section class="blog-area pt-80 pb-70">
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
            </section> -->
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