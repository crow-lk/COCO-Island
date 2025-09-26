<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.hero.title') }} | COCO Island Holidays</title>
    <meta name="description" content="{{ __('messages.hero.subtitle') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/fav-icon.png') }}">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Multilingual CSS -->
    <link rel="stylesheet" href="{{ asset('css/multilingual.css') }}">
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
                        'fade-in': 'fadeIn 0.6s ease-in-out',
                        'scale-in': 'scaleIn 0.6s ease-out',
                    },
                    keyframes: {
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
        
        /* Hero Section Animations - Immediate on page load */
        .animate-fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1.2s ease-out forwards;
        }
        
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Ensure hero content is hidden initially then animated in */
        .hero-content {
            opacity: 0;
            animation: fadeInUp 1s ease-out forwards;
        }
        
        /* Mobile Language Switcher Positioning */
        @media (max-width: 640px) {
            .language-dropdown {
                left: 0 !important;
                right: auto !important;
                width: 200px;
                max-width: calc(100vw - 2rem);
            }
            
            /* Ensure dropdown doesn't go off screen */
            .language-switcher {
                position: relative;
            }
        }
        
        /* Scroll-triggered animations for other sections */
        .scroll-animate {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .scroll-animate.animate-in {
            opacity: 1;
            transform: translateY(0);
        }        .line-clamp-3 {
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
                        <a href="#home" class="text-gray-700 hover:text-primary-600 transition-colors duration-300">{{ __('messages.nav.home') }}</a>
                        <a href="#about" class="text-gray-700 hover:text-primary-600 transition-colors duration-300">{{ __('messages.nav.about') }}</a>
                        <a href="#tours" class="text-gray-700 hover:text-primary-600 transition-colors duration-300">{{ __('messages.nav.tours') }}</a>
                        <a href="#experiences" class="text-gray-700 hover:text-primary-600 transition-colors duration-300">{{ __('messages.nav.experiences') }}</a>
                        <a href="#testimonials" class="text-gray-700 hover:text-primary-600 transition-colors duration-300">{{ __('messages.nav.reviews') }}</a>
                        <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="bg-primary-500 text-white px-4 py-2 rounded-xl hover:bg-primary-600 transition-colors duration-300">{{ __('messages.nav.contact') }}</a>
                        <!-- Language Switcher -->
                        @include('components.language-switcher')
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
                <a href="#home" class="block px-3 py-2 text-gray-700 hover:text-primary-600">{{ __('messages.nav.home') }}</a>
                <a href="#about" class="block px-3 py-2 text-gray-700 hover:text-primary-600">{{ __('messages.nav.about') }}</a>
                <a href="#tours" class="block px-3 py-2 text-gray-700 hover:text-primary-600">{{ __('messages.nav.tours') }}</a>
                <a href="#experiences" class="block px-3 py-2 text-gray-700 hover:text-primary-600">{{ __('messages.nav.experiences') }}</a>
                <a href="#testimonials" class="block px-3 py-2 text-gray-700 hover:text-primary-600">{{ __('messages.nav.reviews') }}</a>
                <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="block px-3 py-2 bg-primary-500 text-white rounded-xl mx-3 text-center">{{ __('messages.nav.contact') }}</a>
                <!-- Mobile Language Switcher -->
                <div class="px-3 py-2">
                    @include('components.language-switcher')
                </div>
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
        <div class="relative z-10 text-center max-w-6xl mx-auto px-4 hero-content">
            <h1 class="text-2xl lg:text-4xl font-bold mb-6 leading-tight" style="text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.5); animation-delay: 0.2s;">
                {{ __('messages.hero.title') }}
            </h1>
            <p class="text-lg lg:text-xl mb-8 max-w-4xl mx-auto leading-relaxed" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); animation-delay: 0.4s;">
                {{ __('messages.hero.subtitle') }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center" style="animation-delay: 0.6s;">
                <a href="#tours" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium rounded-xl bg-primary-500 text-white hover:bg-primary-600 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    {{ __('messages.hero.browse_tours') }}
                </a>
                <a href="https://wa.me/94776605054" class="inline-flex items-center justify-center px-8 py-4 text-lg font-medium rounded-xl bg-white text-primary-500 border-2 border-primary-500 hover:bg-primary-500 hover:text-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    {{ __('messages.hero.contact_experts') }}
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center text-gray-900">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4 scroll-animate">{{ __('messages.about.explore_title') }}</p>
                <h1 class="text-lg lg:text-2xl font-bold mb-8 scroll-animate">{{ __('messages.about.company_name') }}</h1>
                <p class="text-base lg:text-lg font-medium mb-8 max-w-4xl mx-auto leading-relaxed scroll-animate">
                    {{ __('messages.about.tagline') }}
                </p>
                <p class="text-base lg:text-lg max-w-5xl mx-auto leading-relaxed text-gray-600 scroll-animate">
                    {{ __('messages.about.description') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-16 lg:py-24 bg-gradient-to-br from-gray-50 via-white to-gray-50 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-20 left-10 w-32 h-32 bg-primary-500 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-40 h-40 bg-primary-300 rounded-full blur-3xl"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-primary-100 rounded-full mb-6 scroll-animate">
                    <i class="fas fa-award text-primary-600 text-base"></i>
                </div>
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4 scroll-animate">{{ __('messages.why_choose.section_title', [], app()->getLocale()) }}</p>
                <h2 class="text-lg lg:text-xl font-bold mb-6 text-gray-900 scroll-animate">{{ __('messages.why_choose.title') }}</h2>
                <p class="text-base text-gray-600 max-w-3xl mx-auto leading-relaxed scroll-animate">{{ __('messages.why_choose.subtitle') }}</p>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                
                <!-- Local Expertise -->
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 scroll-animate border border-gray-100">
                    <div class="absolute -top-4 left-8">
                        <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-map-marked-alt text-white text-lg"></i>
                        </div>
                    </div>
                    <div class="pt-8">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 group-hover:text-primary-600 transition-colors duration-300">{{ __('messages.why_choose.local_expertise.title') }}</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">{{ __('messages.why_choose.local_expertise.description') }}</p>
                        <ul class="space-y-2">
                            <li class="flex items-center text-sm text-gray-700">
                                <div class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-3"></div>
                                Local guides & insider routes
                            </li>
                            <li class="flex items-center text-sm text-gray-700">
                                <div class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-3"></div>
                                Authentic experiences
                            </li>
                            <li class="flex items-center text-sm text-gray-700">
                                <div class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-3"></div>
                                Community partnerships
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Tailor-Made Experiences -->
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 scroll-animate border border-gray-100">
                    <div class="absolute -top-4 left-8">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-palette text-white text-lg"></i>
                        </div>
                    </div>
                    <div class="pt-8">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 group-hover:text-primary-600 transition-colors duration-300">Tailor-Made Tours</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">Custom itineraries designed around your interests, pace, and travel style for truly personal experiences.</p>
                        <ul class="space-y-2">
                            <li class="flex items-center text-sm text-gray-700">
                                <div class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-3"></div>
                                Custom itineraries
                            </li>
                            <li class="flex items-center text-sm text-gray-700">
                                <div class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-3"></div>
                                Flexible scheduling
                            </li>
                            <li class="flex items-center text-sm text-gray-700">
                                <div class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-3"></div>
                                Special interest tours
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Reliable Service -->
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 scroll-animate border border-gray-100">
                    <div class="absolute -top-4 left-8">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-handshake text-white text-lg"></i>
                        </div>
                    </div>
                    <div class="pt-8">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 group-hover:text-primary-600 transition-colors duration-300">Reliable Service</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">Professional service with trusted transport, certified guides, and seamless logistics for worry-free travel.</p>
                        <ul class="space-y-2">
                            <li class="flex items-center text-sm text-gray-700">
                                <div class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-3"></div>
                                Professional coordination
                            </li>
                            <li class="flex items-center text-sm text-gray-700">
                                <div class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-3"></div>
                                Trusted partnerships
                            </li>
                            <li class="flex items-center text-sm text-gray-700">
                                <div class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-3"></div>
                                Clear communication
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Comfort & Safety -->
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 scroll-animate border border-gray-100">
                    <div class="absolute -top-4 left-8">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg">
                            <i class="fas fa-shield-alt text-white text-lg"></i>
                        </div>
                    </div>
                    <div class="pt-8">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 group-hover:text-primary-600 transition-colors duration-300">Safety & Comfort</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">Your wellbeing is our priority with vetted suppliers, safety protocols, and 24/7 support throughout your journey.</p>
                        <ul class="space-y-2">
                            <li class="flex items-center text-sm text-gray-700">
                                <div class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-3"></div>
                                Vetted transport & guides
                            </li>
                            <li class="flex items-center text-sm text-gray-700">
                                <div class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-3"></div>
                                Safety protocols
                            </li>
                            <li class="flex items-center text-sm text-gray-700">
                                <div class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-3"></div>
                                24/7 support
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- Stats Section -->
            <div class="bg-gradient-to-r from-primary-500 to-primary-600 rounded-3xl p-8 lg:p-12 text-white scroll-animate">
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                    <div>
                        <div class="text-2xl lg:text-3xl font-bold mb-2">500+</div>
                        <div class="text-primary-100 text-sm uppercase tracking-wider">Happy Travelers</div>
                    </div>
                    <div>
                        <div class="text-2xl lg:text-3xl font-bold mb-2">50+</div>
                        <div class="text-primary-100 text-sm uppercase tracking-wider">Tour Packages</div>
                    </div>
                    <div>
                        <div class="text-2xl lg:text-3xl font-bold mb-2">10+</div>
                        <div class="text-primary-100 text-sm uppercase tracking-wider">Years Experience</div>
                    </div>
                    <div>
                        <div class="text-2xl lg:text-3xl font-bold mb-2">4.9★</div>
                        <div class="text-primary-100 text-sm uppercase tracking-wider">Average Rating</div>
                    </div>
                </div>
                
                <div class="mt-8 pt-8 border-t border-primary-400 text-center">
                    <p class="text-primary-100 mb-6 max-w-2xl mx-auto">Ready to experience the difference? Let our local experts create your perfect Sri Lankan adventure.</p>
                    <a href="https://wa.me/94776605054" class="inline-flex items-center bg-white text-primary-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-comments mr-3"></i>
                        Start Planning Your Journey
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- Popular Tours Section -->
    <section id="tours" class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h1 class="text-lg lg:text-xl font-bold mb-6 text-gray-900 scroll-animate">{{ __('messages.tours.title') }}</h1>
                <p class="text-base lg:text-base text-gray-600 max-w-4xl mx-auto scroll-animate">{{ __('messages.tours.subtitle') }}</p>
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
                            <a href="{{ route('tours.show', ['locale' => app()->getLocale(), 'slug' => $tour->slug]) }}" class="inline-flex items-center justify-center w-full px-6 py-3 bg-primary-500 text-white font-medium rounded-xl hover:bg-primary-600 transition-colors duration-300">
                                Book Now
                            </a>
                        @elseif(isset($tour->route_name))
                            <a href="{{ route($tour->route_name, ['locale' => app()->getLocale()]) }}" class="inline-flex items-center justify-center w-full px-6 py-3 bg-primary-500 text-white font-medium rounded-xl hover:bg-primary-600 transition-colors duration-300">
                                Book Now
                            </a>
                        @else
                            <a href="https://wa.me/94776605054" class="inline-flex items-center justify-center w-full px-6 py-3 bg-primary-500 text-white font-medium rounded-xl hover:bg-primary-600 transition-colors duration-300">
                                {{ __('messages.tours.inquire_now') }}
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
    <section class="py-16 lg:py-24 bg-gradient-to-br from-primary-50 via-white to-orange-50 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-20 w-64 h-64 bg-gradient-to-br from-primary-400 to-orange-400 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-20 w-48 h-48 bg-gradient-to-br from-orange-400 to-primary-400 rounded-full blur-3xl"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-primary-500 to-orange-500 rounded-full mb-6 scroll-animate">
                    <i class="fas fa-fire text-white text-base"></i>
                </div>
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4 scroll-animate">Limited Time Offer</p>
                <h2 class="text-lg lg:text-xl font-bold mb-6 text-gray-900 scroll-animate">Exclusive Sri Lanka Experience</h2>
            </div>

            <!-- Main Offer Card -->
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden scroll-animate">
                <div class="grid lg:grid-cols-2">
                    <!-- Left: Image with Overlay -->
                    <div class="relative h-96 lg:h-auto">
                        <img src="{{ asset('frontend/assets/img/Muneswaram-temple.jpg') }}" alt="Trails of Ramayana" class="w-full h-full object-cover">
                        
                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        
                        <!-- Floating Badge -->
                        <div class="absolute top-6 left-6">
                            <div class="bg-red-500 text-white px-4 py-2 rounded-full text-sm font-bold animate-pulse">
                                🔥 HOT DEAL
                            </div>
                        </div>
                        
                        <!-- Countdown Timer -->
                        <div class="absolute bottom-6 left-6 right-6">
                            <div class="bg-white/95 backdrop-blur-md rounded-2xl p-6 text-center">
                                <p class="text-gray-800 font-semibold mb-4 text-sm">⏰ Offer Ends In:</p>
                                <div id="countdown" class="grid grid-cols-4 gap-2">
                                    <div class="text-center">
                                        <div id="days" class="text-2xl font-bold text-primary-600 mb-1">0</div>
                                        <div class="text-xs text-gray-600 uppercase tracking-wide">Days</div>
                                    </div>
                                    <div class="text-center">
                                        <div id="hours" class="text-2xl font-bold text-primary-600 mb-1">0</div>
                                        <div class="text-xs text-gray-600 uppercase tracking-wide">Hours</div>
                                    </div>
                                    <div class="text-center">
                                        <div id="minutes" class="text-2xl font-bold text-primary-600 mb-1">0</div>
                                        <div class="text-xs text-gray-600 uppercase tracking-wide">Mins</div>
                                    </div>
                                    <div class="text-center">
                                        <div id="seconds" class="text-2xl font-bold text-primary-600 mb-1">0</div>
                                        <div class="text-xs text-gray-600 uppercase tracking-wide">Secs</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Content -->
                    <div class="p-8 lg:p-12 flex flex-col justify-center">
                        <!-- Tour Title -->
                        <div class="mb-8">
                            <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-4">Trails of Ramayana Tour</h3>
                            <p class="text-gray-600 leading-relaxed mb-6">Embark on a spiritual journey through Sri Lanka's sacred Ramayana trail. Experience 10 days of mystical temples, ancient legends, and profound cultural insights with expert local guides who bring these timeless stories to life.</p>
                            
                            <!-- Tour Highlights -->
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div class="flex items-center text-sm text-gray-700">
                                    <i class="fas fa-calendar-alt text-primary-500 mr-3"></i>
                                    <span>10 Days / 9 Nights</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-700">
                                    <i class="fas fa-users text-primary-500 mr-3"></i>
                                    <span>Small Groups Only</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-700">
                                    <i class="fas fa-map-marked-alt text-primary-500 mr-3"></i>
                                    <span>Sacred Sites Tour</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-700">
                                    <i class="fas fa-user-tie text-primary-500 mr-3"></i>
                                    <span>Expert Local Guide</span>
                                </div>
                            </div>
                        </div>

                        <!-- Pricing -->
                        <div class="mb-8">
                            <div class="bg-gradient-to-r from-primary-50 to-orange-50 rounded-2xl p-6 border border-primary-100">
                                <div class="flex items-center justify-between mb-4">
                                    <div>
                                        <p class="text-sm text-gray-600 mb-1">Regular Price</p>
                                        <p class="text-lg text-gray-400 line-through">₹41,500</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-sm text-primary-600 font-semibold mb-1">Special Offer Price</p>
                                        <p class="text-2xl font-bold text-primary-600">₹25,999</p>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600">Per Person</span>
                                    <div class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">
                                        Save ₹15,501 (37% OFF)
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="space-y-4">
                            <a href="https://wa.me/94776605054" class="w-full inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-primary-500 to-orange-500 text-white font-semibold rounded-xl hover:from-primary-600 hover:to-orange-600 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                                <i class="fab fa-whatsapp mr-3 text-lg"></i>
                                Book This Exclusive Offer
                            </a>
                            <div class="flex gap-4">
                                <a href="#" class="flex-1 inline-flex items-center justify-center px-4 py-3 border-2 border-gray-300 text-gray-700 font-medium rounded-xl hover:border-primary-500 hover:text-primary-600 transition-colors duration-300">
                                    <i class="fas fa-info-circle mr-2"></i>
                                    More Details
                                </a>
                                <a href="#" class="flex-1 inline-flex items-center justify-center px-4 py-3 border-2 border-gray-300 text-gray-700 font-medium rounded-xl hover:border-primary-500 hover:text-primary-600 transition-colors duration-300">
                                    <i class="fas fa-share-alt mr-2"></i>
                                    Share Offer
                                </a>
                            </div>
                        </div>

                        <!-- Trust Indicators -->
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <div class="flex items-center justify-between text-sm text-gray-600">
                                <div class="flex items-center">
                                    <i class="fas fa-shield-alt text-green-500 mr-2"></i>
                                    <span>Secure Booking</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-undo text-blue-500 mr-2"></i>
                                    <span>Free Cancellation</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-headset text-purple-500 mr-2"></i>
                                    <span>24/7 Support</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom CTA -->
            <div class="text-center mt-12 scroll-animate">
                <p class="text-gray-600 mb-4">⚡ Only 5 spots remaining for this exclusive experience!</p>
                <div class="inline-flex items-center bg-yellow-100 text-yellow-800 px-4 py-2 rounded-full text-sm font-semibold">
                    <i class="fas fa-clock mr-2"></i>
                    Limited time offer - Book now to secure your spot!
                </div>
            </div>
        </div>
    </section>

    <!-- Best Places to Visit Section -->
    <section id="experiences" class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4 scroll-animate">Discover Sri Lanka</p>
                <h1 class="text-lg lg:text-xl font-bold mb-6 text-gray-900 scroll-animate">Best Places to Visit</h1>
                <p class="text-base text-gray-600 max-w-4xl mx-auto scroll-animate">From ancient kingdoms and colonial fortresses to pristine beaches and wildlife sanctuaries, explore Sri Lanka's most iconic destinations that showcase the island's rich heritage and natural beauty.</p>
            </div>
            
            <!-- Featured Destination -->
            <div class="mb-12">
                <div class="group relative rounded-3xl overflow-hidden shadow-2xl hover:shadow-3xl transition-all duration-500 scroll-animate">
                    <div class="h-96 overflow-hidden">
                        <img src="https://www.lovidhu.com/uploads/posts-seo/2021/03/sigiria-sri-lanka.jpg" alt="Sigiriya Rock Fortress" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-8">
                        <div class="max-w-2xl">
                            <span class="inline-block bg-primary-500 text-white px-3 py-1 rounded-full text-sm font-medium mb-4">UNESCO World Heritage</span>
                            <h3 class="text-3xl font-bold text-white mb-4">Sigiriya Rock Fortress</h3>
                            <p class="text-gray-200 text-lg mb-6 leading-relaxed">Marvel at this 5th-century citadel rising 200 meters from the jungle floor. Climb the ancient rock fortress adorned with stunning frescoes and gardens, offering breathtaking panoramic views of Sri Lanka's cultural landscape.</p>
                            <a href="https://wa.me/94776605054" class="inline-flex items-center bg-white text-primary-600 px-6 py-3 rounded-xl font-semibold hover:bg-primary-50 transition-all duration-300">
                                <i class="fas fa-mountain mr-2"></i>
                                Explore Sigiriya
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Destinations Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                
                <!-- Anuradhapura -->
                <div class="group relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 scroll-animate">
                    <div class="h-64 overflow-hidden">
                        <img src="https://travelrebels.com/wp-content/uploads/2018/06/anuradhapura-sunset.jpg" alt="Anuradhapura Ancient City" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <span class="inline-block bg-orange-500 text-white px-2 py-1 rounded-full text-xs font-medium mb-2">Ancient Kingdom</span>
                        <h4 class="text-lg font-bold text-white mb-2">Anuradhapura</h4>
                        <p class="text-gray-200 text-sm">Sacred city with ancient dagobas and the sacred Bodhi Tree, dating back 2,500 years.</p>
                    </div>
                </div>

                <!-- Nuwara Eliya -->
                <div class="group relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 scroll-animate">
                    <div class="h-64 overflow-hidden">
                        <img src="https://lakpura.com/cdn/shop/files/LK951R0000-10-E_4fb5ce5e-c060-481b-9ee3-429c7a3a7b72.jpg?v=1689939550&width=3840" alt="Nuwara Eliya Tea Country" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <span class="inline-block bg-green-500 text-white px-2 py-1 rounded-full text-xs font-medium mb-2">Hill Country</span>
                        <h4 class="text-lg font-bold text-white mb-2">Nuwara Eliya</h4>
                        <p class="text-gray-200 text-sm">Cool mountain retreat with lush tea plantations and colonial charm in the clouds.</p>
                    </div>
                </div>

                <!-- Galle Fort -->
                <div class="group relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 scroll-animate">
                    <div class="h-64 overflow-hidden">
                        <img src="https://media.cntravellerme.com/photos/6679185364c11ffe86eb6eeb/16:9/w_3984,h_2241,c_limit/1150415140" alt="Galle Fort Colonial Architecture" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <span class="inline-block bg-blue-500 text-white px-2 py-1 rounded-full text-xs font-medium mb-2">Colonial Heritage</span>
                        <h4 class="text-lg font-bold text-white mb-2">Galle Fort</h4>
                        <p class="text-gray-200 text-sm">16th-century Portuguese fort with cobblestone streets and stunning ocean views.</p>
                    </div>
                </div>

            </div>

            <!-- Second Row -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                
                <!-- Yala National Park -->
                <div class="group relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 scroll-animate">
                    <div class="h-56 overflow-hidden">
                        <img src="https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/09/f2/0f/25.jpg" alt="Yala National Park Wildlife" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <span class="inline-block bg-emerald-500 text-white px-2 py-1 rounded-full text-xs font-medium mb-2">Wildlife</span>
                        <h4 class="text-lg font-bold text-white mb-1">Yala National Park</h4>
                        <p class="text-gray-200 text-sm">Sri Lanka's premier wildlife destination with leopards and elephants.</p>
                    </div>
                </div>

                <!-- Polonnaruwa -->
                <div class="group relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 scroll-animate">
                    <div class="h-56 overflow-hidden">
                        <img src="https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/06/d7/27/d9.jpg" alt="Polonnaruwa Ancient Ruins" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <span class="inline-block bg-amber-500 text-white px-2 py-1 rounded-full text-xs font-medium mb-2">Ancient City</span>
                        <h4 class="text-lg font-bold text-white mb-1">Polonnaruwa</h4>
                        <p class="text-gray-200 text-sm">Medieval capital with remarkable stone sculptures and ruins.</p>
                    </div>
                </div>

                <!-- Hiriketiya Beach -->
                <div class="group relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 scroll-animate">
                    <div class="h-56 overflow-hidden">
                        <img src="https://wanderon-images.gumlet.io/blogs/new/2024/05/hirketiya.jpg" alt="Hiriketiya Beach Paradise" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <span class="inline-block bg-cyan-500 text-white px-2 py-1 rounded-full text-xs font-medium mb-2">Beach Paradise</span>
                        <h4 class="text-lg font-bold text-white mb-1">Hiriketiya Beach</h4>
                        <p class="text-gray-200 text-sm">Perfect horseshoe bay for surfing and beach relaxation.</p>
                    </div>
                </div>

                <!-- Colombo -->
                <div class="group relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 scroll-animate">
                    <div class="h-56 overflow-hidden">
                        <img src="https://www.reddottours.com/uploads/Weather-by-regions/colombo-header.jpg" alt="Colombo Modern City" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <span class="inline-block bg-purple-500 text-white px-2 py-1 rounded-full text-xs font-medium mb-2">Capital City</span>
                        <h4 class="text-lg font-bold text-white mb-1">Colombo</h4>
                        <p class="text-gray-200 text-sm">Vibrant capital blending modern skyscrapers with colonial charm.</p>
                    </div>
                </div>

            </div>

            <!-- Unique Experiences Row -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <!-- Turtle Watching -->
                <div class="group relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 scroll-animate">
                    <div class="h-64 overflow-hidden">
                        <img src="https://travellersisle.com/wp-content/uploads/2022/10/Snorkeling-with-turtles-in-pigeon-island.jpg" alt="Sea Turtle Conservation" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <span class="inline-block bg-teal-500 text-white px-3 py-1 rounded-full text-xs font-medium mb-3">Wildlife Experience</span>
                        <h4 class="text-lg font-bold text-white mb-2">Turtle Watching</h4>
                        <p class="text-gray-200 text-sm mb-4">Witness endangered sea turtles nesting on pristine beaches and visit turtle hatcheries dedicated to conservation.</p>
                        <div class="flex items-center text-gray-300 text-sm">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <span>Hikkaduwa & Bentota</span>
                        </div>
                    </div>
                </div>

                <!-- Whale Watching in Mirissa -->
                <div class="group relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 scroll-animate">
                    <div class="h-64 overflow-hidden">
                        <img src="https://whalewatching.navy.lk/assets/template/whale/img/2.jpg" alt="Whale Watching Mirissa" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <span class="inline-block bg-indigo-500 text-white px-3 py-1 rounded-full text-xs font-medium mb-3">Marine Adventure</span>
                        <h4 class="text-lg font-bold text-white mb-2">Whale Watching</h4>
                        <p class="text-gray-200 text-sm mb-4">Encounter magnificent blue whales and sperm whales in their natural habitat off the southern coast.</p>
                        <div class="flex items-center text-gray-300 text-sm">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <span>Mirissa</span>
                        </div>
                    </div>
                </div>

                <!-- Call to Action Card -->
                <div class="bg-gradient-to-br from-primary-500 to-primary-600 rounded-2xl p-6 text-white scroll-animate flex flex-col justify-center">
                    <div class="text-center">
                        <i class="fas fa-compass text-4xl mb-4 opacity-80"></i>
                        <h3 class="text-lg font-bold mb-4">Plan Your Journey</h3>
                        <p class="text-primary-100 text-sm mb-6">Ready to explore these incredible destinations? Let our local experts craft the perfect itinerary for your Sri Lankan adventure.</p>
                        <a href="https://wa.me/94776605054" class="inline-flex items-center justify-center w-full bg-white text-primary-600 px-4 py-3 rounded-xl font-semibold hover:bg-gray-100 transition-colors duration-300">
                            <i class="fab fa-whatsapp mr-2"></i>
                            Start Planning
                        </a>
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
        // Page Load Animation Trigger
        document.addEventListener('DOMContentLoaded', function() {
            // Ensure hero animations trigger properly
            const heroContent = document.querySelector('.hero-content');
            if (heroContent) {
                // Small delay to ensure page is fully loaded
                setTimeout(() => {
                    heroContent.style.opacity = '1';
                    heroContent.style.transform = 'translateY(0)';
                }, 100);
            }
        });

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

        // Language Switcher Functionality
        document.querySelectorAll('.language-dropdown-btn').forEach(function(button) {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                // Find the dropdown associated with this button
                const dropdown = this.nextElementSibling;
                const chevron = this.querySelector('.fas.fa-chevron-down');
                
                // Close all other dropdowns first
                document.querySelectorAll('.language-dropdown').forEach(function(otherDropdown) {
                    if (otherDropdown !== dropdown) {
                        otherDropdown.classList.add('hidden');
                    }
                });
                
                // Reset all chevrons
                document.querySelectorAll('.language-dropdown-btn .fas.fa-chevron-down').forEach(function(otherChevron) {
                    if (otherChevron !== chevron) {
                        otherChevron.classList.remove('rotate-180');
                    }
                });
                
                // Toggle current dropdown
                dropdown.classList.toggle('hidden');
                if (chevron) {
                    chevron.classList.toggle('rotate-180');
                }
            });
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.language-switcher')) {
                document.querySelectorAll('.language-dropdown').forEach(function(dropdown) {
                    dropdown.classList.add('hidden');
                });
                document.querySelectorAll('.language-dropdown-btn .fas.fa-chevron-down').forEach(function(chevron) {
                    chevron.classList.remove('rotate-180');
                });
            }
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
