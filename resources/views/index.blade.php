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

<!-- Collection Intro -->
<!-- Collection Intro -->
<section class="collection-intro" id="about-intro">
  <div class="container">
    <div class="intro-wrap text-center">
      <p class="intro-eyebrow reveal" style="--d: .0s">Discover Sri Lanka with</p>
      <h1 class="intro-title reveal" style="--d: .12s">COCO ISLAND HOLIDAYS</h1>
      <p class="intro-subtitle reveal" style="--d: .22s">
        Unravel the warm delights of Sri Lankan hospitality with our collection
      </p>

      <p class="intro-lead reveal" style="--d: .34s">
        Welcome to Coco Island Holidays, where our real passion for travel, hospitality, and our beloved country
        is reflected in our handpicked stays and experiences. We bring out Sri Lanka’s cultural heritage and rich biodiversity
        through diverse attractions that reveal the many sides of this beautiful island—giving you a true glimpse into
        the soul of Ceylon.
      </p>
    </div>
  </div>
</section>


<!-- Why Choose Us (Accordion + 3×3 Gallery) -->
<section class="chooseus-gallery" id="why-choose-us">
  <div class="container">
    <div class="row gy-5 align-items-center">
      <!-- LEFT: HEADING + ACCORDION -->
      <div class="col-lg-5">
        <p class="cu-eyebrow">Explore</p>
        <h2 class="cu-title">Why Choose Us</h2>

        <div class="cu-divider">
          <img src="{{ asset('frontend/assets/img/icon2.png') }}" alt="icon" class="cu-icon">
          <span class="cu-line"></span>
        </div>

        <!-- Accordion -->
        <div class="cu-accordion" role="tablist">
          <!-- 1. LOCAL EXPERTISE -->
          <article class="cu-acc-item">
            <button class="cu-acc-btn is-open"
                    id="acc-btn-0"
                    aria-expanded="true"
                    aria-controls="acc-panel-0"
                    data-group="0">
              <span>LOCAL EXPERTISE</span><i class="cu-caret"></i>
            </button>
            <div class="cu-acc-panel" id="acc-panel-0" role="region" aria-labelledby="acc-btn-0" style="height:auto;">
              <p>We are proud to be based in Sri Lanka with a deep understanding of its culture, routes, and hidden gems. Every journey we offer is guided by real local insight and authentic connections.</p>
              <ul class="cu-points">
                <li>In-depth regional knowledge</li>
                <li>Access to lesser-known attractions</li>
                <li>Trusted relationships with local communities</li>
              </ul>
            </div>
          </article>

          <!-- 2. TAILOR-MADE EXPERIENCES -->
          <article class="cu-acc-item">
            <button class="cu-acc-btn"
                    id="acc-btn-1"
                    aria-expanded="false"
                    aria-controls="acc-panel-1"
                    data-group="1">
              <span>TAILOR-MADE EXPERIENCES</span><i class="cu-caret"></i>
            </button>
            <div class="cu-acc-panel" id="acc-panel-1" role="region" aria-labelledby="acc-btn-1">
              <p>Your journey should reflect your preferences. Every itinerary is handcrafted to suit your travel style, timing, and personal interests — whether spiritual, scenic, cultural, or all of the above.</p>
              <ul class="cu-points">
                <li>Flexible scheduling and routing</li>
                <li>Personalised activity selection</li>
                <li>Small groups or private tours</li>
              </ul>
            </div>
          </article>

          <!-- 3. RELIABLE SERVICE -->
          <article class="cu-acc-item">
            <button class="cu-acc-btn"
                    id="acc-btn-2"
                    aria-expanded="false"
                    aria-controls="acc-panel-2"
                    data-group="2">
              <span>RELIABLE SERVICE</span><i class="cu-caret"></i>
            </button>
            <div class="cu-acc-panel" id="acc-panel-2" role="region" aria-labelledby="acc-btn-2">
              <p>From your first inquiry to the final drop-off, we ensure a seamless experience. Expect clear communication, punctual service, and consistent follow-through across every step of your trip.</p>
              <ul class="cu-points">
                <li>Dedicated tour coordinators</li>
                <li>Prompt responses and updates</li>
                <li>Strong operational planning</li>
              </ul>
            </div>
          </article>

          <!-- 4. COMFORT & SAFETY -->
          <article class="cu-acc-item">
            <button class="cu-acc-btn"
                    id="acc-btn-3"
                    aria-expanded="false"
                    aria-controls="acc-panel-3"
                    data-group="3">
              <span>COMFORT &amp; SAFETY</span><i class="cu-caret"></i>
            </button>
            <div class="cu-acc-panel" id="acc-panel-3" role="region" aria-labelledby="acc-btn-3">
              <p>Travel with confidence knowing your comfort and safety come first. Our team ensures clean transport, licensed drivers, and secure environments throughout your journey.</p>
              <ul class="cu-points">
                <li>Fully insured, air-conditioned vehicles</li>
                <li>Professional, experienced drivers</li>
                <li>Safety-first travel routes and stops</li>
              </ul>
            </div>
          </article>
        </div>
      </div>

      <!-- RIGHT: 3×3 GRID + LIGHTBOX -->
      <div class="col-lg-7">
        <div class="cu-gallery">
          <!-- Group 0 -->
          <figure class="cu-gitem" data-group="0">
            <img class="cu-gimage" src="{{ asset('frontend/assets/img/chooseus/local-1.png') }}" alt="Local expertise - coastal view">
          </figure>
          <figure class="cu-gitem" data-group="0">
            <img class="cu-gimage" src="{{ asset('frontend/assets/img/chooseus/local-2.png') }}" alt="Hidden temple trail">
          </figure>
          <figure class="cu-gitem" data-group="0">
            <img class="cu-gimage" src="{{ asset('frontend/assets/img/chooseus/local-3.png') }}" alt="Local market experience">
          </figure>

          <!-- Group 1 -->
          <figure class="cu-gitem" data-group="1">
            <img class="cu-gimage" src="{{ asset('frontend/assets/img/chooseus/local-4.png') }}" alt="Tailor-made itinerary">
          </figure>
          <figure class="cu-gitem" data-group="1">
            <img class="cu-gimage" src="{{ asset('frontend/assets/img/chooseus/local-5.png') }}" alt="Private tea experience">
          </figure>
          <figure class="cu-gitem" data-group="1">
            <img class="cu-gimage" src="{{ asset('frontend/assets/img/chooseus/local-6.png') }}" alt="Sunrise hike plan">
          </figure>

          <!-- Group 2 -->
          <figure class="cu-gitem" data-group="2">
            <img class="cu-gimage" src="{{ asset('frontend/assets/img/chooseus/local-7.png') }}" alt="Reliable logistics">
          </figure>
          <figure class="cu-gitem" data-group="2">
            <img class="cu-gimage" src="{{ asset('frontend/assets/img/chooseus/local-8.png') }}" alt="On-time pickups">
          </figure>
          <figure class="cu-gitem" data-group="2">
            <img class="cu-gimage" src="{{ asset('frontend/assets/img/chooseus/local-9.png') }}" alt="Coordinated transfers">
          </figure>

          <!-- Group 3 (optional extras; script will still show 9 tiles) -->
          <figure class="cu-gitem" data-group="3">
            <img class="cu-gimage" src="{{ asset('frontend/assets/img/chooseus/local-8.png') }}" alt="Comfort & safety vehicles">
          </figure>
          <figure class="cu-gitem" data-group="3">
            <img class="cu-gimage" src="{{ asset('frontend/assets/img/chooseus/local-9.png') }}" alt="Licensed drivers">
          </figure>

          <!-- Lightbox modal -->
          <div class="cu-modal" aria-hidden="true">
            <button class="cu-modal__nav cu-modal__prev" aria-label="Previous"></button>
            <img class="cu-modal__img" src="" alt="">
            <button class="cu-modal__nav cu-modal__next" aria-label="Next"></button>
            <button class="cu-modal__close" aria-label="Close"></button>
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