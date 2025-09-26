<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sri Lanka Tours — Tailor-Made Holidays & Cultu            <h1 class="text-xl lg:text-3xl font-bold mb-6 leading-tight animate-fade-in-up" style="text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.5); animation-delay: 0.3s;">
                Sri Lanka Tours — Tailor-Made Holidays & Cultural Experiences
            </h1>
            <p class="text-base lg:text-lg mb-8 max-w-4xl mx-auto leading-relaxed animate-fade-in-up" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); animation-delay: 0.5s;">Experiences | COCO Island Holidays</title>
    <meta name="description" content="Discover Sri Lanka with local, expert guides. From wildlife safaris and scenic hill-country tea trails to pristine beaches and cultural heritage sites, our personalised Sri Lanka tours are crafted for authentic, sustainable travel.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/fav-icon.png') }}">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Verdana', 'Geneva', 'Tahoma', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#fff7ed',
                            100: '#ffedd5',
                            200: '#fed7aa',
                            300: '#fdba74',
                            400: '#fb923c',
                            500: '#f97316',
                            600: '#ea580c',
                            700: '#c2410c',
                            800: '#9a3412',
                            900: '#7c2d12',
                        }
                    },
                    animation: {
                        'fade-in-up': 'fadeInUp 0.8s ease-out',
                        'fade-in': 'fadeIn 0.6s ease-in-out',
                        'scale-in': 'scaleIn 0.6s ease-out',
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        scaleIn: {
                            '0%': { opacity: '0', transform: 'scale(0.9)' },
                            '100%': { opacity: '1', transform: 'scale(1)' },
                        },
                    }
                }
            }
        }
    </script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    
    <style>
        .hero-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        
        .scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            height: 4px;
            background: linear-gradient(90deg, #f97316, #ea580c);
            z-index: 9999;
            transition: width 0.1s ease-out;
        }
        
        .scroll-animate {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .scroll-animate.animate-in {
            opacity: 1;
            transform: translateY(0);
        }
        
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Tour Carousel Styles (keeping only for tour section) */
        .tour-slider.owl-carousel {
            position: relative;
            padding: 0;
        }
        
        .owl-carousel .owl-dots {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
            gap: 0.5rem;
        }
        
        .owl-carousel .owl-dots .owl-dot {
            width: 12px;
            height: 12px;
            background: #d1d5db;
            border-radius: 50%;
            transition: all 0.3s ease;
        }
        
        .owl-carousel .owl-dots .owl-dot.active {
            background: #f97316;
            width: 32px;
            border-radius: 16px;
        }



        /* WhatsApp Float Button */
        .whatsapp-float {
            position: fixed;
            bottom: 24px;
            right: 24px;
            background: #25d366;
            color: white;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            z-index: 50;
            text-decoration: none;
        }
        
        .whatsapp-float:hover {
            background: #128c7e;
            transform: scale(1.1);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="font-sans bg-white text-gray-800">
    <!-- Scroll Progress Indicator -->
    <div class="scroll-progress" style="width: 0%"></div>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/94776605054" class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
        <i class="fab fa-whatsapp text-base"></i>
    </a>

    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-black/20 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <a href="#home" class="flex items-center">
                        <img src="{{ asset('frontend/assets/img/logo/coco-logo.png') }}" 
                             alt="COCO Island Holidays Logo" 
                             class="h-20 w-auto opacity-90 hover:opacity-100 transition-all duration-300 hover:scale-105">
                    </a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#home" class="text-gray-700 hover:text-primary-600 transition-colors duration-300">Home</a>
                        <a href="#about" class="text-gray-700 hover:text-primary-600 transition-colors duration-300">About</a>
                        <a href="#tours" class="text-gray-700 hover:text-primary-600 transition-colors duration-300">Tours</a>
                        <a href="#experiences" class="text-gray-700 hover:text-primary-600 transition-colors duration-300">Experiences</a>
                        <a href="#testimonials" class="text-gray-700 hover:text-primary-600 transition-colors duration-300">Reviews</a>
                        <a href="{{ route('contact') }}" class="bg-primary-500 text-white px-4 py-2 rounded-xl hover:bg-primary-600 transition-colors duration-300">Contact</a>
                    </div>
                </div>
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-primary-600">
                        <i class="fas fa-bars text-base"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#home" class="block px-3 py-2 text-gray-700 hover:text-primary-600">Home</a>
                <a href="#about" class="block px-3 py-2 text-gray-700 hover:text-primary-600">About</a>
                <a href="#tours" class="block px-3 py-2 text-gray-700 hover:text-primary-600">Tours</a>
                <a href="#experiences" class="block px-3 py-2 text-gray-700 hover:text-primary-600">Experiences</a>
                <a href="#testimonials" class="block px-3 py-2 text-gray-700 hover:text-primary-600">Reviews</a>
                <a href="{{ route('contact') }}" class="block px-3 py-2 bg-primary-500 text-white rounded-xl mx-3 text-center">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center text-white">
        <!-- Background Video -->
        <video class="hero-video" autoplay muted loop playsinline preload="none" poster="{{ asset('frontend/assets/video/0914.mp4.jpg') }}">
            <source src="{{ asset('frontend/assets/video/0914.webm') }}" type="video/webm">
            <source src="{{ asset('frontend/assets/video/0914.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>

        <!-- Content -->
        <div class="relative z-10 text-center max-w-6xl mx-auto px-4">
            <h1 class="text-2xl lg:text-4xl font-bold mb-6 leading-tight animate-fade-in-up" style="text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.5); animation-delay: 0.3s;">
                Sri Lanka Tours — Tailor-Made Holidays & Cultural Experiences
            </h1>
            <p class="text-lg lg:text-xl mb-8 max-w-4xl mx-auto leading-relaxed animate-fade-in-up" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); animation-delay: 0.5s;">
                Discover Sri Lanka with local, expert guides. From wildlife safaris and scenic hill-country tea trails to pristine beaches and cultural heritage sites, our personalised Sri Lanka tours are crafted for authentic, sustainable travel.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-up" style="animation-delay: 0.7s;">
                <a href="#tours" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium rounded-xl bg-primary-500 text-white hover:bg-primary-600 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    Browse Sri Lanka Tours
                </a>
                <a href="https://wa.me/94776605054" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium rounded-xl bg-white text-primary-500 border-2 border-primary-500 hover:bg-primary-500 hover:text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    Contact Our Travel Experts
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center text-gray-900">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4 scroll-animate">Explore Sri Lanka</p>
                <h1 class="text-lg lg:text-2xl font-bold mb-8 scroll-animate">COCO ISLAND HOLIDAYS</h1>
                <p class="text-base lg:text-lg font-medium mb-8 max-w-4xl mx-auto leading-relaxed scroll-animate">
                    Authentic Sri Lanka tours — wildlife safaris, tea-country escapes, coastal beaches and cultural heritage itineraries
                </p>
                <p class="text-base lg:text-lg max-w-5xl mx-auto leading-relaxed text-gray-600 scroll-animate">
                    Discover Sri Lanka's vibrant landscapes and centuries-old culture with local guides who know the island intimately. From mist-covered central highlands and verdant tea plantations to UNESCO temples and white-sand beaches, our curated tours balance authentic experiences with sustainable travel practices. Whether you seek wildlife, history, or relaxation, we design journeys that reveal Sri Lanka's best while supporting local communities.
                </p>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Left: Content -->
                <div class="scroll-animate">
                    <p class="text-primary-500 uppercase tracking-widest text-sm font-semibold mb-4">Why Travel With Us</p>
                    <h2 class="text-lg lg:text-xl font-bold mb-8 text-gray-900">Why Choose COCO Island Holidays</h2>
                    <div class="flex items-center mb-8">
                        <img src="{{ asset('frontend/assets/img/icon2.png') }}" alt="icon" class="w-8 h-8 mr-4">
                        <div class="flex-1 h-px bg-gray-300"></div>
                    </div>
                    
                    <!-- Accordion -->
                    <div class="space-y-4">
                        <!-- Local Expertise -->
                        <div class="border border-gray-200 rounded-xl overflow-hidden">
                            <button class="w-full px-6 py-4 text-left font-semibold text-gray-800 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition-colors duration-300 flex items-center justify-between accordion-btn" data-target="accordion-1">
                                <span>LOCAL EXPERTISE</span>
                                <i class="fas fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <div id="accordion-1" class="accordion-content px-6 py-4 bg-gray-50 border-t border-gray-200">
                                <p class="mb-4">Rooted in Sri Lanka, our team brings decades of on-the-ground experience to every itinerary. We prioritise local knowledge, authentic encounters, and routes that reveal both iconic sights and hidden gems — from national parks rich in wildlife to small coastal villages.</p>
                                <ul class="space-y-2 text-gray-700">
                                    <li class="flex items-center"><i class="fas fa-check text-primary-500 mr-2"></i> Local guides and insider routes</li>
                                    <li class="flex items-center"><i class="fas fa-check text-primary-500 mr-2"></i> Authentic cultural and nature experiences</li>
                                    <li class="flex items-center"><i class="fas fa-check text-primary-500 mr-2"></i> Responsible partnerships with communities</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Tailor-Made Experiences -->
                        <div class="border border-gray-200 rounded-xl overflow-hidden">
                            <button class="w-full px-6 py-4 text-left font-semibold text-gray-800 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition-colors duration-300 flex items-center justify-between accordion-btn" data-target="accordion-2">
                                <span>TAILOR-MADE EXPERIENCES</span>
                                <i class="fas fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <div id="accordion-2" class="accordion-content px-6 py-4 bg-gray-50 border-t border-gray-200 hidden">
                                <p class="mb-4">We craft tailor-made Sri Lanka tours that match your pace and interests — from family-friendly itineraries to adventure and wellness escapes. Each trip is personalised to include the experiences you care about most.</p>
                                <ul class="space-y-2 text-gray-700">
                                    <li class="flex items-center"><i class="fas fa-check text-primary-500 mr-2"></i> Custom itineraries and flexible dates</li>
                                    <li class="flex items-center"><i class="fas fa-check text-primary-500 mr-2"></i> Special interest tours (wildlife, culture, food)</li>
                                    <li class="flex items-center"><i class="fas fa-check text-primary-500 mr-2"></i> Private or small-group options</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Reliable Service -->
                        <div class="border border-gray-200 rounded-xl overflow-hidden">
                            <button class="w-full px-6 py-4 text-left font-semibold text-gray-800 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition-colors duration-300 flex items-center justify-between accordion-btn" data-target="accordion-3">
                                <span>RELIABLE SERVICE</span>
                                <i class="fas fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <div id="accordion-3" class="accordion-content px-6 py-4 bg-gray-50 border-t border-gray-200 hidden">
                                <p class="mb-4">Our operational excellence means you travel with confidence. We handle logistics, trusted transport and certified guides so you can focus on enjoying unforgettable moments across Sri Lanka.</p>
                                <ul class="space-y-2 text-gray-700">
                                    <li class="flex items-center"><i class="fas fa-check text-primary-500 mr-2"></i> Experienced tour coordinators</li>
                                    <li class="flex items-center"><i class="fas fa-check text-primary-500 mr-2"></i> Reliable transport and local partners</li>
                                    <li class="flex items-center"><i class="fas fa-check text-primary-500 mr-2"></i> Clear communication and support</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Comfort & Safety -->
                        <div class="border border-gray-200 rounded-xl overflow-hidden">
                            <button class="w-full px-6 py-4 text-left font-semibold text-gray-800 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition-colors duration-300 flex items-center justify-between accordion-btn" data-target="accordion-4">
                                <span>COMFORT & SAFETY</span>
                                <i class="fas fa-chevron-down transition-transform duration-300"></i>
                            </button>
                            <div id="accordion-4" class="accordion-content px-6 py-4 bg-gray-50 border-t border-gray-200 hidden">
                                <p class="mb-4">Your comfort and safety are central to every tour. We work with vetted suppliers, follow recommended safety protocols, and provide vehicles and guides who keep your wellbeing a priority.</p>
                                <ul class="space-y-2 text-gray-700">
                                    <li class="flex items-center"><i class="fas fa-check text-primary-500 mr-2"></i> Vetted, insured transport and guides</li>
                                    <li class="flex items-center"><i class="fas fa-check text-primary-500 mr-2"></i> Health and safety best practices</li>
                                    <li class="flex items-center"><i class="fas fa-check text-primary-500 mr-2"></i> 24/7 local support for emergencies</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Gallery Grid -->
                <div class="grid grid-cols-3 gap-4 scroll-animate">
                    <div class="aspect-square rounded-xl overflow-hidden">
                        <img src="{{ asset('frontend/assets/img/chooseus/local-1.png') }}" alt="Local expertise" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="aspect-square rounded-xl overflow-hidden">
                        <img src="{{ asset('frontend/assets/img/chooseus/local-2.png') }}" alt="Hidden temple" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="aspect-square rounded-xl overflow-hidden">
                        <img src="{{ asset('frontend/assets/img/chooseus/local-3.png') }}" alt="Local market" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="aspect-square rounded-xl overflow-hidden">
                        <img src="{{ asset('frontend/assets/img/chooseus/local-4.png') }}" alt="Tailor-made" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="aspect-square rounded-xl overflow-hidden">
                        <img src="{{ asset('frontend/assets/img/chooseus/local-5.png') }}" alt="Tea experience" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="aspect-square rounded-xl overflow-hidden">
                        <img src="{{ asset('frontend/assets/img/chooseus/local-6.png') }}" alt="Sunrise hike" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="aspect-square rounded-xl overflow-hidden">
                        <img src="{{ asset('frontend/assets/img/chooseus/local-7.png') }}" alt="Reliable logistics" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="aspect-square rounded-xl overflow-hidden">
                        <img src="{{ asset('frontend/assets/img/chooseus/local-8.png') }}" alt="On-time pickups" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="aspect-square rounded-xl overflow-hidden">
                        <img src="{{ asset('frontend/assets/img/chooseus/local-9.png') }}" alt="Coordinated transfers" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Tours Section -->
    <section id="tours" class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h1 class="text-lg lg:text-xl font-bold mb-6 text-gray-900 scroll-animate">Popular Tours</h1>
                <p class="text-base lg:text-base text-gray-600 max-w-4xl mx-auto scroll-animate">Handpicked Sri Lanka tours featuring wildlife safaris, cultural heritage routes and coastal escapes. Browse our most-booked itineraries for balanced experiences that combine nature, history and local culture.</p>
            </div>
            
            <div class="tour-slider owl-carousel">
                @forelse ($popularTours ?? [] as $tour)
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ $tour->image_url ?? asset('frontend/assets/img/best_things/Thalawakale.jpg') }}" alt="{{ $tour->title ?? 'Cultural Heritage Tour' }}" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold mb-3 text-gray-900">{{ $tour->title ?? 'Cultural Heritage Tour' }}</h4>
                        <p class="text-gray-600 mb-6 line-clamp-3">{{ $tour->description ?? 'Explore ancient temples, colonial architecture, and traditional villages. Discover Sri Lanka\'s rich cultural tapestry with expert local guides.' }}</p>
                        @if(isset($tour->slug))
                            <a href="{{ route('tours.show', $tour->slug) }}" class="inline-flex items-center justify-center w-full px-6 py-3 bg-primary-500 text-white font-medium rounded-xl hover:bg-primary-600 transition-colors duration-300">
                                Book Now
                            </a>
                        @elseif(isset($tour->route_name))
                            <a href="{{ route($tour->route_name) }}" class="inline-flex items-center justify-center w-full px-6 py-3 bg-primary-500 text-white font-medium rounded-xl hover:bg-primary-600 transition-colors duration-300">
                                Book Now
                            </a>
                        @else
                            <a href="https://wa.me/94776605054" class="inline-flex items-center justify-center w-full px-6 py-3 bg-primary-500 text-white font-medium rounded-xl hover:bg-primary-600 transition-colors duration-300">
                                Inquire Now
                            </a>
                        @endif
                    </div>
                </div>
                @empty
                <!-- Static Tour Cards -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ asset('frontend/assets/img/best_things/Thalawakale.jpg') }}" alt="Cultural Heritage Tour" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold mb-3 text-gray-900">Cultural Heritage Tour</h4>
                        <p class="text-gray-600 mb-6 line-clamp-3">Explore ancient temples, colonial architecture, and traditional villages. Discover Sri Lanka's rich cultural tapestry with expert local guides.</p>
                        <a href="https://wa.me/94776605054" class="inline-flex items-center justify-center w-full px-6 py-3 bg-primary-500 text-white font-medium rounded-xl hover:bg-primary-600 transition-colors duration-300">
                            Book Now
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ asset('frontend/assets/img/best_things/Goyambokka-beach.jpg') }}" alt="Wildlife Safari" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold mb-3 text-gray-900">Wildlife Safari Adventure</h4>
                        <p class="text-gray-600 mb-6 line-clamp-3">Experience Sri Lanka's incredible wildlife including elephants, leopards, and exotic birds in pristine national parks.</p>
                        <a href="https://wa.me/94776605054" class="inline-flex items-center justify-center w-full px-6 py-3 bg-primary-500 text-white font-medium rounded-xl hover:bg-primary-600 transition-colors duration-300">
                            Book Now
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ asset('frontend/assets/img/best_things/Ramboda-Waterfall.jpg') }}" alt="Hill Country Tea Trail" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold mb-3 text-gray-900">Hill Country Tea Trail</h4>
                        <p class="text-gray-600 mb-6 line-clamp-3">Journey through misty mountains and emerald tea plantations. Learn about Ceylon tea production and enjoy scenic train rides.</p>
                        <a href="https://wa.me/94776605054" class="inline-flex items-center justify-center w-full px-6 py-3 bg-primary-500 text-white font-medium rounded-xl hover:bg-primary-600 transition-colors duration-300">
                            Book Now
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ asset('frontend/assets/img/best_things/Marble-Beach.jpg') }}" alt="Coastal Paradise" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold mb-3 text-gray-900">Coastal Paradise</h4>
                        <p class="text-gray-600 mb-6 line-clamp-3">Relax on pristine beaches, enjoy water sports, and explore historic coastal towns. Perfect for beach lovers and water enthusiasts.</p>
                        <a href="https://wa.me/94776605054" class="inline-flex items-center justify-center w-full px-6 py-3 bg-primary-500 text-white font-medium rounded-xl hover:bg-primary-600 transition-colors duration-300">
                            Book Now
                        </a>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Special Offer Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Left: Content -->
                <div class="scroll-animate">
                    <h1 class="text-lg lg:text-xl font-bold mb-6 text-gray-900">Exclusive Offer – Trails of Ramayana Tour</h1>
                    <p class="text-base text-gray-600 mb-8 leading-relaxed">Explore the legendary Ramayana trail on this immersive 10-day pilgrimage across Sri Lanka. Visit sacred temples, mythic landscapes and local shrines while learning the historical and cultural stories that connect these sites — led by knowledgeable local guides.</p>

                    <div class="mb-8">
                        <div class="flex items-baseline gap-4 mb-2">
                            <span class="text-base text-gray-400 line-through">$800 ₹41,500</span>
                            <span class="text-base font-bold text-primary-600">Only ₹25,999</span>
                        </div>
                        <span class="text-gray-500">/ FOR PERSON</span>
                    </div>
                    <a href="https://wa.me/94776605054" class="inline-flex items-center justify-center px-8 py-4 bg-primary-500 text-white font-medium rounded-xl hover:bg-primary-600 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        Contact Us
                    </a>
                </div>

                <!-- Right: Image with Countdown -->
                <div class="relative scroll-animate">
                    <div class="rounded-2xl overflow-hidden">
                        <img src="{{ asset('frontend/assets/img/Muneswaram-temple.jpg') }}" alt="Trails of Ramayana" class="w-full h-96 object-cover">
                    </div>
                    <div class="absolute bottom-4 left-4 right-4 bg-white/90 backdrop-blur-sm rounded-xl p-4 text-center">
                        <div id="countdown" class="flex justify-center gap-4 text-sm font-semibold">
                            <div class="flex flex-col">
                                <span id="days" class="text-base text-primary-600">0</span>
                                <span class="text-gray-600">days</span>
                            </div>
                            <div class="flex flex-col">
                                <span id="hours" class="text-base text-primary-600">0</span>
                                <span class="text-gray-600">hours</span>
                            </div>
                            <div class="flex flex-col">
                                <span id="minutes" class="text-base text-primary-600">0</span>
                                <span class="text-gray-600">minutes</span>
                            </div>
                            <div class="flex flex-col">
                                <span id="seconds" class="text-base text-primary-600">0</span>
                                <span class="text-gray-600">seconds</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Experiences Section -->
    <section id="experiences" class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h1 class="text-lg lg:text-xl font-bold mb-6 text-gray-900 scroll-animate">Top Experiences in Sri Lanka</h1>
                <p class="text-base lg:text-base text-gray-600 max-w-4xl mx-auto scroll-animate">From misty tea plantations and elephant safaris to fortified colonial towns and palm-fringed beaches, Sri Lanka offers diverse experiences for every traveller. Here are some top picks to include in your itinerary.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Large Card -->
                <div class="lg:col-span-2 group relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 scroll-animate">
                    <div class="h-80 overflow-hidden">
                        <img src="{{ asset('frontend/assets/img/best_things/Thalawakale.jpg') }}" alt="Thalawakale" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                        <h4 class="text-lg font-bold text-white">Thalawakale</h4>
                    </div>
                </div>

                <!-- Small Card 1 -->
                <div class="group relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 scroll-animate">
                    <div class="h-80 overflow-hidden">
                        <img src="{{ asset('frontend/assets/img/best_things/Goyambokka-beach.jpg') }}" alt="Goyambokka Beach" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                        <h4 class="text-lg font-bold text-white">Goyambokka Beach</h4>
                    </div>
                </div>

                <!-- Small Card 2 -->
                <div class="group relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 scroll-animate">
                    <div class="h-80 overflow-hidden">
                        <img src="{{ asset('frontend/assets/img/best_things/Koneswaram Temple.jpg') }}" alt="Koneswaram Temple" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                        <h4 class="text-lg font-bold text-white">Koneswaram Temple</h4>
                    </div>
                </div>

                <!-- Small Card 3 -->
                <div class="group relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 scroll-animate">
                    <div class="h-80 overflow-hidden">
                        <img src="{{ asset('frontend/assets/img/best_things/Marble-Beach.jpg') }}" alt="Marble Beach" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                        <h4 class="text-lg font-bold text-white">Marble Beach</h4>
                    </div>
                </div>

                <!-- Small Card 4 -->
                <div class="group relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 scroll-animate">
                    <div class="h-80 overflow-hidden">
                        <img src="{{ asset('frontend/assets/img/best_things/Munneswaram.jpg') }}" alt="Munneswaram Temple" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                        <h4 class="text-lg font-bold text-white">Munneswaram Temple</h4>
                    </div>
                </div>

                <!-- Large Card 2 -->
                <div class="lg:col-span-2 group relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 scroll-animate">
                    <div class="h-80 overflow-hidden">
                        <img src="{{ asset('frontend/assets/img/best_things/Ramboda-Waterfall.jpg') }}" alt="Ramboda Waterfall" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                        <h4 class="text-lg font-bold text-white">Ramboda Waterfall</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 lg:py-24 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-primary-100 rounded-full mb-6 scroll-animate">
                    <i class="fas fa-heart text-primary-600 text-base"></i>
                </div>
                <h1 class="text-lg lg:text-xl font-bold mb-6 text-gray-900 scroll-animate">What Travellers Say About Us</h1>
                <p class="text-base text-gray-600 max-w-3xl mx-auto scroll-animate">Discover authentic stories from travelers who experienced the magic of Sri Lanka with our expert local guides.</p>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
                
                <!-- Featured Testimonial (Large) -->
                <div class="lg:row-span-2 bg-white rounded-3xl p-10 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 scroll-animate">
                    <div class="flex items-center mb-6">
                        <div class="flex text-yellow-400 text-base mr-4">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="text-sm text-gray-500 font-medium">5.0 • Featured Review</span>
                    </div>
                    
                    <blockquote class="text-base text-gray-800 leading-relaxed mb-8 font-medium">
                        "Walking the Ramayana trail with Coco Island Holidays was life-changing. Every site was steeped in history, and our guide brought the stories alive. I felt safe, spiritual, and deeply connected to my roots. This wasn't just a tour—it was a pilgrimage."
                    </blockquote>
                    
                    <div class="flex items-center">
                        <div class="w-20 h-20 rounded-full overflow-hidden mr-6 ring-4 ring-primary-100">
                            <img src="{{ asset('frontend/assets/img/testimonial/Priya-Menon.jpg') }}" alt="Priya Menon" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold text-base text-gray-900">Priya Menon</h4>
                            <p class="text-gray-600">Web Designer, India</p>
                            <div class="flex items-center mt-2 text-sm text-gray-500">
                                <i class="fas fa-map-marker-alt mr-1"></i>
                                <span>Ramayana Trail Tour</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Regular Testimonial 1 -->
                <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 scroll-animate">
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="bg-primary-50 text-primary-600 px-3 py-1 rounded-full text-xs font-medium">
                            Honeymoon
                        </div>
                    </div>
                    
                    <p class="text-gray-700 leading-relaxed mb-6">
                        "Our honeymoon was like a dream! Candle-lit beach dinners, whale watching, and sunsets in Galle—every moment felt curated just for us. Thank you for making it magical."
                    </p>
                    
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="{{ asset('frontend/assets/img/testimonial/Aarav-and-Meera-Kapoor.jpg') }}" alt="Aarav and Meera Kapoor" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Aarav & Meera Kapoor</h4>
                            <p class="text-sm text-gray-600">Mumbai, India</p>
                        </div>
                    </div>
                </div>
                
                <!-- Regular Testimonial 2 -->
                <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 scroll-animate">
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="bg-green-50 text-green-600 px-3 py-1 rounded-full text-xs font-medium">
                            Adventure
                        </div>
                    </div>
                    
                    <p class="text-gray-700 leading-relaxed mb-6">
                        "From misty hills to coastal forts, this expedition gave me a true taste of Sri Lanka. I appreciated the care put into every detail—professional, seamless, unforgettable."
                    </p>
                    
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="{{ asset('frontend/assets/img/testimonial/David-Stein.jpg') }}" alt="David Stein" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">David Stein</h4>
                            <p class="text-sm text-gray-600">New York, USA</p>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Additional Testimonials Row -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Testimonial 3 -->
                <div class="bg-white rounded-2xl p-6 shadow-md hover:shadow-lg transition-all duration-300 border border-gray-100 scroll-animate">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex text-yellow-400 text-sm">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="bg-purple-50 text-purple-600 px-2 py-1 rounded-full text-xs font-medium">Solo Travel</span>
                    </div>
                    
                    <p class="text-gray-700 text-sm leading-relaxed mb-4">
                        "I needed nature, silence, and luxury. The glamping sites were beautiful and eco-friendly—I felt so grounded. Perfect for soul-searchers."
                    </p>
                    
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full overflow-hidden mr-3">
                            <img src="{{ asset('frontend/assets/img/testimonial/Sofia-Alvarez.jpg') }}" alt="Sofia Alvarez" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-semibold text-sm text-gray-900">Sofia Alvarez</h4>
                            <p class="text-xs text-gray-600">Barcelona, Spain</p>
                        </div>
                    </div>
                </div>
                
                <!-- Stats Card -->
                <div class="bg-gradient-to-br from-primary-500 to-primary-600 rounded-2xl p-6 text-white scroll-animate">
                    <div class="text-center">
                        <div class="text-lg font-bold mb-2">4.9/5</div>
                        <div class="text-primary-100 text-sm mb-4">Average Rating</div>
                        <div class="flex justify-center text-yellow-300 mb-4">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="text-sm text-primary-100">Based on 150+ reviews</div>
                    </div>
                </div>
                
                <!-- CTA Card -->
                <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-6 text-white scroll-animate">
                    <div class="text-center">
                        <h3 class="font-bold mb-2">Share Your Story</h3>
                        <p class="text-gray-300 text-sm mb-4">Traveled with us? We'd love to hear about your experience!</p>
                        <a href="https://wa.me/94776605054" class="inline-flex items-center text-primary-400 hover:text-primary-600 text-sm font-medium">
                            <i class="fas fa-comment-dots mr-2"></i>
                            Leave a Review
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Contact/Footer Section -->
    <footer id="contact" class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <h3 class="text-base font-bold mb-4 text-primary-400">COCO Island Holidays</h3>
                    <p class="text-gray-300 mb-4">Authentic Sri Lanka tours with local expertise. Creating unforgettable experiences for over a decade.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-primary-400 hover:text-primary-600 transition-colors duration-300">
                            <i class="fab fa-facebook-f text-base"></i>
                        </a>
                        <a href="#" class="text-primary-400 hover:text-primary-600 transition-colors duration-300">
                            <i class="fab fa-instagram text-base"></i>
                        </a>
                        <a href="#" class="text-primary-400 hover:text-primary-600 transition-colors duration-300">
                            <i class="fab fa-twitter text-base"></i>
                        </a>
                        <a href="#" class="text-primary-400 hover:text-primary-600 transition-colors duration-300">
                            <i class="fab fa-youtube text-base"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-300 hover:text-white transition-colors duration-300">Home</a></li>
                        <li><a href="#about" class="text-gray-300 hover:text-white transition-colors duration-300">About Us</a></li>
                        <li><a href="#tours" class="text-gray-300 hover:text-white transition-colors duration-300">Tours</a></li>
                        <li><a href="#experiences" class="text-gray-300 hover:text-white transition-colors duration-300">Experiences</a></li>
                        <li><a href="#testimonials" class="text-gray-300 hover:text-white transition-colors duration-300">Reviews</a></li>
                    </ul>
                </div>

                <!-- Tours -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Popular Tours</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Cultural Heritage</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Wildlife Safari</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Tea Trail</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Coastal Paradise</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Ramayana Trail</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Get In Touch</h4>
                    <div class="space-y-2 text-gray-300">
                        <p class="flex items-center">
                            <i class="fas fa-phone mr-2 text-primary-400"></i>
                            +94 77 660 5054
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-envelope mr-2 text-primary-400"></i>
                            info@cocoislandholidays.com
                        </p>
                        <p class="flex items-start">
                            <i class="fas fa-map-marker-alt mr-2 text-primary-400 mt-1"></i>
                            Colombo, Sri Lanka
                        </p>
                    </div>
                    <a href="https://wa.me/94776605054" class="inline-flex items-center justify-center w-full mt-4 px-4 py-2 bg-green-600 text-white font-medium rounded-xl hover:bg-green-700 transition-colors duration-300">
                        <i class="fab fa-whatsapp mr-2"></i>
                        Chat on WhatsApp
                    </a>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 COCO Island Holidays. All rights reserved. | Crafted with ❤️ for Sri Lankan tourism</p>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <!-- Countdown Script -->
    <script src="{{ asset('frontend/assets/js/countdown.js') }}"></script>

    <script>
        // Initialize Owl Carousel
        $(document).ready(function() {
            // Tour Slider (no navigation buttons)
            $('.tour-slider').owlCarousel({
                loop: true,
                margin: 30,
                nav: false,
                dots: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsive: {
                    0: { items: 1 },
                    768: { items: 2 },
                    1024: { items: 3 }
                }
            });


        });

        // Mobile Menu Toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Accordion Functionality
        document.querySelectorAll('.accordion-btn').forEach(button => {
            button.addEventListener('click', function() {
                const target = document.getElementById(this.dataset.target);
                const icon = this.querySelector('i');
                
                // Close all other accordions
                document.querySelectorAll('.accordion-content').forEach(content => {
                    if (content !== target) {
                        content.classList.add('hidden');
                        content.previousElementSibling.querySelector('i').classList.remove('rotate-180');
                    }
                });
                
                // Toggle current accordion
                target.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            });
        });

        // Scroll Animation Observer
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        document.querySelectorAll('.scroll-animate').forEach(element => {
            observer.observe(element);
        });

        // Scroll Progress
        function updateScrollProgress() {
            const scrollTop = window.pageYOffset;
            const docHeight = document.body.scrollHeight - window.innerHeight;
            const scrollPercent = (scrollTop / docHeight) * 100;
            document.querySelector('.scroll-progress').style.width = scrollPercent + '%';
        }

        window.addEventListener('scroll', updateScrollProgress);

        // Smooth Scroll for Navigation Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Countdown Timer
        function countdown() {
            const endDate = new Date('December 02, 2026 20:20:22').getTime();
            const now = new Date().getTime();
            const timeLeft = endDate - now;

            const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

            document.getElementById('days').textContent = days || 0;
            document.getElementById('hours').textContent = hours || 0;
            document.getElementById('minutes').textContent = minutes || 0;
            document.getElementById('seconds').textContent = seconds || 0;

            if (timeLeft < 0) {
                clearInterval(countdownTimer);
                document.getElementById('countdown').innerHTML = '<span class="text-base text-primary-600">Offer Expired</span>';
            }
        }

        const countdownTimer = setInterval(countdown, 1000);
        countdown(); // Initial call
    </script>
</body>
</html>
