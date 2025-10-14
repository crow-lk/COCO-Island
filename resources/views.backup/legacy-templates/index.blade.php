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
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/fav-icon.png') }}">
        
		<!-- CSS here -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        @stack('styles')
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Scroll progress indicator -->
        <div class="scroll-progress"></div>

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
            <section class="section-luxury relative bg-hero-pattern bg-cover bg-center bg-no-repeat" id="about-intro">
                <div class="absolute inset-0 bg-black/20"></div>
                <div class="container-custom relative z-10">
                    <div class="text-center text-white">
                        <p class="text-primary-300 uppercase tracking-widest text-sm font-semibold mb-4 scroll-animate fade-up">Explore Sri Lanka</p>
                        <h1 class="section-title text-white mb-8 scroll-animate fade-up delay-200">COCO ISLAND HOLIDAYS</h1>
                        <p class="text-2xl lg:text-3xl font-medium mb-8 max-w-4xl mx-auto leading-relaxed scroll-animate fade-up delay-300">
                            Authentic Sri Lanka tours — wildlife safaris, tea-country escapes, coastal beaches and cultural heritage itineraries
                        </p>
                        <p class="text-lg lg:text-xl max-w-5xl mx-auto leading-relaxed text-gray-100 scroll-animate fade-up delay-400">
                            Discover Sri Lanka's vibrant landscapes and centuries-old culture with local guides who know the island intimately. From mist-covered central highlands and verdant tea plantations to UNESCO temples and white-sand beaches, our curated tours balance authentic experiences with sustainable travel practices. Whether you seek wildlife, history, or relaxation, we design journeys that reveal Sri Lanka's best while supporting local communities.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Why Choose Us (Accordion + 3×3 Gallery) -->


<!-- Why Choose Us (Accordion + 3×3 Gallery) -->
<section class="chooseus-gallery luxury-section" id="why-choose-us">
  <div class="container">
    <div class="row gy-5 align-items-center">
      <!-- LEFT: HEADING + ACCORDION -->
      <div class="col-lg-5">
    <p class="cu-eyebrow">Why Travel With Us</p>
    <h2 class="cu-title">Why Choose COCO Island Holidays</h2>

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
                            <p>Rooted in Sri Lanka, our team brings decades of on-the-ground experience to every itinerary. We prioritise local knowledge, authentic encounters, and routes that reveal both iconic sights and hidden gems — from national parks rich in wildlife to small coastal villages.</p>
                            <ul class="cu-points">
                                <li>Local guides and insider routes</li>
                                <li>Authentic cultural and nature experiences</li>
                                <li>Responsible partnerships with communities</li>
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
                            <p>We craft tailor-made Sri Lanka tours that match your pace and interests — from family-friendly itineraries to adventure and wellness escapes. Each trip is personalised to include the experiences you care about most.</p>
                            <ul class="cu-points">
                                <li>Custom itineraries and flexible dates</li>
                                <li>Special interest tours (wildlife, culture, food)</li>
                                <li>Private or small-group options</li>
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
                            <p>Our operational excellence means you travel with confidence. We handle logistics, trusted transport and certified guides so you can focus on enjoying unforgettable moments across Sri Lanka.</p>
                            <ul class="cu-points">
                                <li>Experienced tour coordinators</li>
                                <li>Reliable transport and local partners</li>
                                <li>Clear communication and support</li>
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
                            <p>Your comfort and safety are central to every tour. We work with vetted suppliers, follow recommended safety protocols, and provide vehicles and guides who keep your wellbeing a priority.</p>
                            <ul class="cu-points">
                                <li>Vetted, insured transport and guides</li>
                                <li>Health and safety best practices</li>
                                <li>24/7 local support for emergencies</li>
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

            <!-- Popular Tours -->
            <section class="section-luxury bg-gray-50">
                <div class="container-custom">
                    <div class="text-center mb-16">
                        <h1 class="section-title scroll-animate fade-up">Popular Tours</h1>
                        <p class="section-subtitle scroll-animate fade-up delay-200">Handpicked Sri Lanka tours featuring wildlife safaris, cultural heritage routes and coastal escapes. Browse our most-booked itineraries for balanced experiences that combine nature, history and local culture.</p>
                    </div>
                    
                    <div class="tour-slider owl-carousel">
                        @forelse ($popularTours as $tour)
                        <div class="tour-card scroll-animate fade-up" style="animation-delay: {{ $loop->index * 0.1 }}s">
                            <div class="tour-card-image">
                                <img src="{{ $tour->image_url }}" alt="{{ $tour->title }}" class="w-full h-full object-cover">
                            </div>
                            <div class="tour-card-content">
                                <h4 class="tour-card-title">{{ $tour->title }}</h4>
                                <p class="tour-card-description">{{ $tour->description }}</p>
                                @if($tour->slug)
                                    <a href="{{ route('tours.show', $tour->slug) }}" class="btn btn-primary w-full">Book Now</a>
                                @elseif($tour->route_name)
                                    <a href="{{ route($tour->route_name) }}" class="btn btn-primary w-full">Book Now</a>
                                @else
                                    <a href="{{ route('contact') }}" class="btn btn-primary w-full">Inquire Now</a>
                                @endif
                            </div>
                        </div>
                        @empty
                        <div class="text-center py-16">
                            <p class="text-xl text-gray-600">No popular tours available at the moment. Check back soon!</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </section>

            <!-- best money area start -->
            <section class="best-money luxury-section grey-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="best-money-content">
                                <h1>Exclusive Offer – Trails of Ramayana Tour</h1>
                                <p>Explore the legendary Ramayana trail on this immersive 10-day pilgrimage across Sri Lanka. Visit sacred temples, mythic landscapes and local shrines while learning the historical and cultural stories that connect these sites — led by knowledgeable local guides.</p>

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
            <section class="best-things luxury-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                            <div class="sec-title text-center mb-50">
                                <h1>Top Experiences in Sri Lanka</h1>
                                <p>From misty tea plantations and elephant safaris to fortified colonial towns and palm-fringed beaches, Sri Lanka offers diverse experiences for every traveller. Here are some top picks to include in your itinerary.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row grid">
                        <div class="col-xl-6 col-lg-6 col-md-6 grid-item">
                            <div class="fix mb-30 w-img">
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
                            <div class="fix mb-30 w-img">
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
                            <div class="fix mb-30 w-img">
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
                            <div class="fix mb-30 w-img">
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
                            <div class="fix mb-30 w-img">
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
                            <div class="fix mb-30 w-img">
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
                                <p>Explore our popular tour packages featuring breathtaking locations, immersive experiences, and personalized service for an unforgettable Sri Lankan adventure</p>
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

            

            <!-- Testimonials -->
            <section class="section-luxury bg-gray-50">
                <div class="container-custom">
                    <div class="text-center mb-16">
                        <h1 class="section-title scroll-animate fade-up">What Travellers Say About Us</h1>
                        <p class="section-subtitle scroll-animate fade-up delay-200">Discover how travellers from around the world experience Coco Island Holidays—authentic journeys, heartfelt moments, and memories to cherish forever.</p>
                    </div>
                    
                    <div class="testi-slider-active owl-carousel">
                        <div class="testimonial-card scroll-animate fade-up delay-100">
                            <div class="text-primary-500 text-4xl mb-6">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <p class="text-lg text-gray-700 mb-8 leading-relaxed">Walking the Ramayana trail with Coco Island Holidays was life-changing. Every site was steeped in history, and our guide brought the stories alive. Felt safe, spiritual, and deeply connected to my roots.</p>
                            
                            <div class="flex items-center">
                                <div class="image-circular w-16 h-16 mr-4">
                                    <img src="{{ asset('frontend/assets/img/testimonial/Priya-Menon.jpg') }}" alt="Priya Menon" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg text-gray-900">Priya Menon</h4>
                                    <span class="text-gray-600">Web Designer</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="testimonial-card scroll-animate fade-up delay-200">
                            <div class="text-primary-500 text-4xl mb-6">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <p class="text-lg text-gray-700 mb-8 leading-relaxed">Our honeymoon was like a dream! Candle-lit beach dinners, whale watching, and sunsets in Galle, every moment felt curated just for us. Thank you, Coco Island Holidays, for making it magical.</p>
                            
                            <div class="flex items-center">
                                <div class="image-circular w-16 h-16 mr-4">
                                    <img src="{{ asset('frontend/assets/img/testimonial/Aarav-and-Meera-Kapoor.jpg') }}" alt="Aarav and Meera Kapoor" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg text-gray-900">Aarav and Meera Kapoor</h4>
                                    <span class="text-gray-600">Company CEO</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="testimonial-card scroll-animate fade-up delay-300">
                            <div class="text-primary-500 text-4xl mb-6">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <p class="text-lg text-gray-700 mb-8 leading-relaxed">From misty hills to coastal forts, this expedition gave me a true taste of Sri Lanka. I appreciated the care Coco Island Holidays put into every small detail, professional, seamless, unforgettable.</p>
                            
                            <div class="flex items-center">
                                <div class="image-circular w-16 h-16 mr-4">
                                    <img src="{{ asset('frontend/assets/img/testimonial/David-Stein.jpg') }}" alt="David Stein" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg text-gray-900">David Stein</h4>
                                    <span class="text-gray-600">Designer</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="testimonial-card scroll-animate fade-up delay-400">
                            <div class="text-primary-500 text-4xl mb-6">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <p class="text-lg text-gray-700 mb-8 leading-relaxed">I needed nature, silence, and a bit of luxury, and I found it here. The glamping sites were beautiful and eco-friendly, and I felt so grounded. Highly recommend for solo soul-searchers.</p>
                            
                            <div class="flex items-center">
                                <div class="image-circular w-16 h-16 mr-4">
                                    <img src="{{ asset('frontend/assets/img/testimonial/Sofia-Alvarez.jpg') }}" alt="Sofia Alvarez" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg text-gray-900">Sofia Alvarez</h4>
                                    <span class="text-gray-600">Software Engineer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

           

        </main>

        @include('components.footer')

		<!-- Essential JS for carousels and functionality -->
        <script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/countdown.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

        @stack('scripts')
    </body>
</html> 