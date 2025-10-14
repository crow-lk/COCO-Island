<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q5TC30C9BX"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-Q5TC30C9BX');
    </script>
    
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
    </style>
</head>
<body class="font-sans bg-white text-gray-800">
    <!-- Scroll Progress Indicator -->
    <div class="scroll-progress" style="width: 0%"></div>

    @include('components.header')

    @php
        $locale = app()->getLocale();

        $fallbackTourCards = [
            [
                'image' => asset('frontend/assets/img/best_things/Thalawakale.jpg'),
                'title' => __('messages.tours.fallback_cards.heritage.title'),
                'description' => __('messages.tours.fallback_cards.heritage.description'),
                'alt' => __('messages.tours.fallback_cards.heritage.alt'),
            ],
            [
                'image' => asset('frontend/assets/img/best_things/Goyambokka-beach.jpg'),
                'title' => __('messages.tours.fallback_cards.wildlife.title'),
                'description' => __('messages.tours.fallback_cards.wildlife.description'),
                'alt' => __('messages.tours.fallback_cards.wildlife.alt'),
            ],
            [
                'image' => asset('frontend/assets/img/best_things/Ramboda-Waterfall.jpg'),
                'title' => __('messages.tours.fallback_cards.tea_trail.title'),
                'description' => __('messages.tours.fallback_cards.tea_trail.description'),
                'alt' => __('messages.tours.fallback_cards.tea_trail.alt'),
            ],
            [
                'image' => asset('frontend/assets/img/best_things/Marble-Beach.jpg'),
                'title' => __('messages.tours.fallback_cards.coastal.title'),
                'description' => __('messages.tours.fallback_cards.coastal.description'),
                'alt' => __('messages.tours.fallback_cards.coastal.alt'),
            ],
        ];

        $destinationPrimaryCards = [
            [
                'route' => route('destinations.anuradhapura', ['locale' => $locale]),
                'image' => 'https://travelrebels.com/wp-content/uploads/2018/06/anuradhapura-sunset.jpg',
                'badge_class' => 'bg-orange-500',
                'badge' => __('messages.destinations.grid.anuradhapura.badge'),
                'title' => __('messages.destinations.grid.anuradhapura.title'),
                'description' => __('messages.destinations.grid.anuradhapura.description'),
            ],
            [
                'route' => route('destinations.nuwaraeliya', ['locale' => $locale]),
                'image' => 'https://lakpura.com/cdn/shop/files/LK951R0000-10-E_4fb5ce5e-c060-481b-9ee3-429c7a3a7b72.jpg?v=1689939550&width=3840',
                'badge_class' => 'bg-green-500',
                'badge' => __('messages.destinations.grid.nuwaraeliya.badge'),
                'title' => __('messages.destinations.grid.nuwaraeliya.title'),
                'description' => __('messages.destinations.grid.nuwaraeliya.description'),
            ],
            [
                'route' => route('destinations.gallefort', ['locale' => $locale]),
                'image' => 'https://media.cntravellerme.com/photos/6679185364c11ffe86eb6eeb/16:9/w_3984,h_2241,c_limit/1150415140',
                'badge_class' => 'bg-blue-500',
                'badge' => __('messages.destinations.grid.gallefort.badge'),
                'title' => __('messages.destinations.grid.gallefort.title'),
                'description' => __('messages.destinations.grid.gallefort.description'),
            ],
        ];

        $destinationSecondaryCards = [
            [
                'route' => route('destinations.yala', ['locale' => $locale]),
                'image' => 'https://media-cdn.tripadvisor.com/media/attractions-splice-spp-674x446/09/f2/0f/25.jpg',
                'badge_class' => 'bg-emerald-500',
                'badge' => __('messages.destinations.grid.yala.badge'),
                'title' => __('messages.destinations.grid.yala.title'),
                'description' => __('messages.destinations.grid.yala.description'),
            ],
            [
                'route' => route('destinations.polonnaruwa', ['locale' => $locale]),
                'image' => 'https://cdn.getyourguide.com/img/location/5d25327064576.jpeg/88.jpg',
                'badge_class' => 'bg-amber-500',
                'badge' => __('messages.destinations.grid.polonnaruwa.badge'),
                'title' => __('messages.destinations.grid.polonnaruwa.title'),
                'description' => __('messages.destinations.grid.polonnaruwa.description'),
            ],
            [
                'route' => route('destinations.hiriketiya', ['locale' => $locale]),
                'image' => 'https://images.unsplash.com/photo-1518837695005-2083093ee35b?auto=format&fit=crop&w=1200&q=80',
                'badge_class' => 'bg-purple-500',
                'badge' => __('messages.destinations.grid.hiriketiya.badge'),
                'title' => __('messages.destinations.grid.hiriketiya.title'),
                'description' => __('messages.destinations.grid.hiriketiya.description'),
            ],
            [
                'route' => route('destinations.colombo', ['locale' => $locale]),
                'image' => 'https://images.unsplash.com/photo-1548783307-f63adc57535f?auto=format&fit=crop&w=1200&q=80',
                'badge_class' => 'bg-red-500',
                'badge' => __('messages.destinations.grid.colombo.badge'),
                'title' => __('messages.destinations.grid.colombo.title'),
                'description' => __('messages.destinations.grid.colombo.description'),
            ],
        ];

        $whyChooseHighlights = [
            'local_expertise' => __('messages.why_choose.local_expertise.highlights') ?? [],
            'tailor_made' => __('messages.why_choose.tailor_made.highlights') ?? [],
            'reliable_service' => __('messages.why_choose.reliable_service.highlights') ?? [],
            'safety_comfort' => __('messages.why_choose.safety_comfort.highlights') ?? [],
        ];
        $whyChooseStats = __('messages.why_choose.stats.cards') ?? [];
        $whyChooseCta = __('messages.why_choose.stats.cta') ?? [];

        $destinationExperiences = [
            [
                'image' => 'https://media.tacdn.com/media/attractions-splice-spp-674x446/0a/d8/3e/39.jpg',
                'badge_class' => 'bg-teal-500',
                'badge' => __('messages.destinations.experiences.turtle.badge'),
                'title' => __('messages.destinations.experiences.turtle.title'),
                'description' => __('messages.destinations.experiences.turtle.description'),
                'location' => __('messages.destinations.experiences.turtle.location'),
            ],
            [
                'image' => 'https://whalewatching.navy.lk/assets/template/whale/img/2.jpg',
                'badge_class' => 'bg-indigo-500',
                'badge' => __('messages.destinations.experiences.whale.badge'),
                'title' => __('messages.destinations.experiences.whale.title'),
                'description' => __('messages.destinations.experiences.whale.description'),
                'location' => __('messages.destinations.experiences.whale.location'),
            ],
        ];

        $testimonialsContent = __('messages.testimonials');
        $testimonialFeatured = $testimonialsContent['featured'] ?? [];
        $testimonialCards = [
            [
                'label' => $testimonialsContent['cards']['honeymoon']['label'] ?? '',
                'quote' => $testimonialsContent['cards']['honeymoon']['quote'] ?? '',
                'name' => $testimonialsContent['cards']['honeymoon']['name'] ?? '',
                'location' => $testimonialsContent['cards']['honeymoon']['location'] ?? '',
                'image' => asset('frontend/assets/img/testimonial/Aarav-and-Meera-Kapoor.jpg'),
            ],
            [
                'label' => $testimonialsContent['cards']['adventure']['label'] ?? '',
                'quote' => $testimonialsContent['cards']['adventure']['quote'] ?? '',
                'name' => $testimonialsContent['cards']['adventure']['name'] ?? '',
                'location' => $testimonialsContent['cards']['adventure']['location'] ?? '',
                'image' => asset('frontend/assets/img/testimonial/David-Stein.jpg'),
            ],
            [
                'label' => $testimonialsContent['cards']['solo']['label'] ?? '',
                'quote' => $testimonialsContent['cards']['solo']['quote'] ?? '',
                'name' => $testimonialsContent['cards']['solo']['name'] ?? '',
                'location' => $testimonialsContent['cards']['solo']['location'] ?? '',
                'image' => asset('frontend/assets/img/testimonial/Sofia-Alvarez.jpg'),
            ],
        ];
        $primaryTestimonialCards = array_slice($testimonialCards, 0, 2);
        $secondaryTestimonialCard = $testimonialCards[2] ?? null;
        $testimonialStats = $testimonialsContent['stats'] ?? [];
        $testimonialCta = $testimonialsContent['cta'] ?? [];
        $specialOfferUnits = __('messages.special_offer.countdown_units');
    @endphp

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center text-white">
        <!-- Background Video -->
        <video class="hero-video" autoplay muted loop playsinline preload="none" poster="{{ asset('frontend/assets/video/0914.mp4.jpg') }}">
            <source src="{{ asset('frontend/assets/video/0914.webm') }}" type="video/webm">
            <source src="{{ asset('frontend/assets/video/0914.mp4') }}" type="video/mp4">
            {{ __('messages.video_not_supported') }}
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
                <div class="mt-8 scroll-animate">
                    <a href="{{ route('about', ['locale' => app()->getLocale()]) }}" 
                       class="inline-flex items-center justify-center px-8 py-4 text-base font-medium rounded-xl bg-primary-500 text-white hover:bg-primary-600 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        {{ __('messages.read_more') }}
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
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
                        @if(!empty($whyChooseHighlights['local_expertise']))
                        <ul class="space-y-2">
                            @foreach($whyChooseHighlights['local_expertise'] as $highlight)
                            <li class="flex items-center text-sm text-gray-700">
                                <div class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-3"></div>
                                {{ $highlight }}
                            </li>
                            @endforeach
                        </ul>
                        @endif
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
                        <h3 class="text-lg font-bold text-gray-900 mb-4 group-hover:text-primary-600 transition-colors duration-300">{{ __('messages.why_choose.tailor_made.title') }}</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">{{ __('messages.why_choose.tailor_made.description') }}</p>
                        @if(!empty($whyChooseHighlights['tailor_made']))
                        <ul class="space-y-2">
                            @foreach($whyChooseHighlights['tailor_made'] as $highlight)
                            <li class="flex items-center text-sm text-gray-700">
                                <div class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-3"></div>
                                {{ $highlight }}
                            </li>
                            @endforeach
                        </ul>
                        @endif
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
                        <h3 class="text-lg font-bold text-gray-900 mb-4 group-hover:text-primary-600 transition-colors duration-300">{{ __('messages.why_choose.reliable_service.title') }}</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">{{ __('messages.why_choose.reliable_service.description') }}</p>
                        @if(!empty($whyChooseHighlights['reliable_service']))
                        <ul class="space-y-2">
                            @foreach($whyChooseHighlights['reliable_service'] as $highlight)
                            <li class="flex items-center text-sm text-gray-700">
                                <div class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-3"></div>
                                {{ $highlight }}
                            </li>
                            @endforeach
                        </ul>
                        @endif
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
                        <h3 class="text-lg font-bold text-gray-900 mb-4 group-hover:text-primary-600 transition-colors duration-300">{{ __('messages.why_choose.safety_comfort.title') }}</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">{{ __('messages.why_choose.safety_comfort.description') }}</p>
                        @if(!empty($whyChooseHighlights['safety_comfort']))
                        <ul class="space-y-2">
                            @foreach($whyChooseHighlights['safety_comfort'] as $highlight)
                            <li class="flex items-center text-sm text-gray-700">
                                <div class="w-1.5 h-1.5 bg-primary-500 rounded-full mr-3"></div>
                                {{ $highlight }}
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </div>

            </div>

            <!-- Stats Section -->
            <div class="bg-gradient-to-r from-primary-500 to-primary-600 rounded-3xl p-8 lg:p-12 text-white scroll-animate">
                @if(!empty($whyChooseStats))
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                    @foreach($whyChooseStats as $stat)
                    <div>
                        <div class="text-2xl lg:text-3xl font-bold mb-2">{{ $stat['value'] ?? '' }}</div>
                        <div class="text-primary-100 text-sm uppercase tracking-wider">{{ $stat['label'] ?? '' }}</div>
                    </div>
                    @endforeach
                </div>
                @endif
                
                <div class="mt-8 pt-8 border-t border-primary-400 text-center">
                    <p class="text-primary-100 mb-6 max-w-2xl mx-auto">{{ $whyChooseCta['text'] ?? '' }}</p>
                    <a href="https://wa.me/94776605054" class="inline-flex items-center bg-white text-primary-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-comments mr-3"></i>
                        {{ $whyChooseCta['button'] ?? __('messages.destinations.cta.button') }}
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
                        <img src="{{ $tour->image_url ?? asset('frontend/assets/img/best_things/Thalawakale.jpg') }}" alt="{{ $tour->title ?? __('messages.tours.fallback_cards.heritage.title') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold mb-3 text-gray-900">{{ $tour->title ?? __('messages.tours.fallback_cards.heritage.title') }}</h4>
                        <p class="text-gray-600 mb-6 line-clamp-3">{{ $tour->description ?? __('messages.tours.fallback_cards.heritage.description') }}</p>
                        @if($tour->duration)
                            <div class="flex items-center mb-4 text-sm text-gray-500">
                                <i class="fas fa-clock mr-2"></i>
                                <span>{{ $tour->duration }}</span>
                            </div>
                        @endif
                        <a href="{{ route('tours.show', ['locale' => app()->getLocale(), 'slug' => $tour->slug]) }}" class="inline-flex items-center justify-center w-full px-6 py-3 bg-primary-500 text-white font-medium rounded-xl hover:bg-primary-600 transition-colors duration-300">
                            {{ __('messages.view_details') }}
                        </a>
                    </div>
                </div>
                @empty
                <!-- Static Tour Cards -->
                @foreach($fallbackTourCards as $card)
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ $card['image'] }}" alt="{{ $card['alt'] }}" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold mb-3 text-gray-900">{{ $card['title'] }}</h4>
                        <p class="text-gray-600 mb-6 line-clamp-3">{{ $card['description'] }}</p>
                        <a href="https://wa.me/94776605054" class="inline-flex items-center justify-center w-full px-6 py-3 bg-primary-500 text-white font-medium rounded-xl hover:bg-primary-600 transition-colors duration-300">
                            {{ __('messages.book_now') }}
                        </a>
                    </div>
                </div>
                @endforeach
                @endforelse
            </div>
        </div>
    </section>

    <!-- Special Offer Section -->
    @if($limitedTimeOffer)
        @php
            $heroImagePath = $limitedTimeOffer->hero_image;
            $heroImage = $heroImagePath
                ? (\Illuminate\Support\Str::startsWith($heroImagePath, ['http://', 'https://']) ? $heroImagePath : asset($heroImagePath))
                : asset('frontend/assets/img/12days.jpeg');
            $sectionIconClass = $limitedTimeOffer->section_icon ?? 'fas fa-fire';
            $floatingBadgeText = $limitedTimeOffer->floating_badge_text ?? __('messages.special_offer.default_badge');
            $floatingBadgeIcon = $limitedTimeOffer->floating_badge_icon;
            $floatingBadgeIconIsClass = $floatingBadgeIcon && \Illuminate\Support\Str::contains($floatingBadgeIcon, 'fa-');
            $countdownEndsAt = ($limitedTimeOffer->countdown_enabled && $limitedTimeOffer->countdown_ends_at)
                ? $limitedTimeOffer->countdown_ends_at->toIso8601String()
                : null;
            $primaryCtaLabel = $limitedTimeOffer->primary_cta_label ?? null;
            $primaryCtaUrl = $limitedTimeOffer->primary_cta_url ?? null;
            $primaryCtaIcon = $limitedTimeOffer->primary_cta_icon ?? null;
            $primaryCtaIconIsClass = $primaryCtaIcon && \Illuminate\Support\Str::contains($primaryCtaIcon, 'fa-');
            $secondaryCtas = is_array($limitedTimeOffer->secondary_ctas) ? $limitedTimeOffer->secondary_ctas : [];
            $trustIndicators = is_array($limitedTimeOffer->trust_indicators) ? $limitedTimeOffer->trust_indicators : [];
            $highlights = is_array($limitedTimeOffer->highlights) ? $limitedTimeOffer->highlights : [];
            $currency = strtoupper($limitedTimeOffer->currency ?? 'USD');
            $formatPrice = function ($value) use ($currency) {
                if ($value === null) {
                    return null;
                }
                return $currency . ' ' . number_format((float) $value, 0);
            };
        @endphp
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
                    <i class="{{ $sectionIconClass }} text-white text-base"></i>
                </div>
                @if($limitedTimeOffer->section_label)
                    <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4 scroll-animate">{{ $limitedTimeOffer->section_label }}</p>
                @endif
                @if($limitedTimeOffer->section_title)
                    <h2 class="text-lg lg:text-xl font-bold mb-6 text-gray-900 scroll-animate">{{ $limitedTimeOffer->section_title }}</h2>
                @endif
            </div>

            <!-- Main Offer Card -->
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden scroll-animate min-h-screen flex flex-col justify-center">
                <div class="grid lg:grid-cols-2 h-full">
                    <!-- Left: Image with Overlay -->
                    <div class="relative h-96 lg:h-auto">
                        <img src="{{ $heroImage }}" alt="{{ $limitedTimeOffer->offer_title }}" class="absolute inset-0 m-auto max-w-full max-h-full object-contain h-full w-full" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0;">
                        
                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        
                        <!-- Floating Badge -->
                        @if($floatingBadgeText || $floatingBadgeIcon)
                            <div class="absolute top-6 left-6">
                                <div class="bg-red-500 text-white px-4 py-2 rounded-full text-sm font-bold animate-pulse flex items-center gap-2">
                                    @if($floatingBadgeIcon)
                                        @if($floatingBadgeIconIsClass)
                                            <i class="{{ $floatingBadgeIcon }}"></i>
                                        @else
                                            <span>{{ $floatingBadgeIcon }}</span>
                                        @endif
                                    @endif
                                    @if($floatingBadgeText)
                                        <span>{{ $floatingBadgeText }}</span>
                                    @endif
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Right: Content -->
                    <div class="p-8 lg:p-12 flex flex-col justify-center">
                        <!-- Tour Title -->
                        <div class="mb-8">
                            <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-4">{{ $limitedTimeOffer->offer_title }}</h3>
                            <div class="text-gray-600 leading-relaxed mb-6 space-y-2">
                                @if($limitedTimeOffer->offer_duration)
                                    <p>{{ $limitedTimeOffer->offer_duration }}</p>
                                @endif
                                @if($limitedTimeOffer->offer_highlight)
                                    <p><span class="font-semibold text-primary-600">{{ $limitedTimeOffer->offer_highlight }}</span></p>
                                @endif
                                @if($limitedTimeOffer->offer_summary)
                                    <div>{!! $limitedTimeOffer->offer_summary !!}</div>
                                @endif
                            </div>
                            @if(!empty($highlights))
                                <div class="grid grid-cols-2 gap-4 mb-6">
                                    @foreach($highlights as $highlight)
                                        <div class="flex items-center text-sm text-gray-700">
                                            @if(!empty($highlight['icon']))
                                                <i class="{{ $highlight['icon'] }} text-primary-500 mr-3"></i>
                                            @endif
                                            <span>{{ $highlight['text'] ?? '' }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                        <!-- Pricing -->
                        @if($formatPrice($limitedTimeOffer->regular_price) || $formatPrice($limitedTimeOffer->special_price) || $limitedTimeOffer->savings_text)
                            <div class="mb-8">
                                <div class="bg-gradient-to-r from-primary-50 to-orange-50 rounded-2xl p-6 border border-primary-100">
                                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-4">
                                        <div>
                                            <p class="text-sm text-gray-600 mb-1">{{ __('messages.special_offer.regular_price') }}</p>
                                            <p class="text-lg text-gray-400 line-through">
                                                {{ $formatPrice($limitedTimeOffer->regular_price) ?? __('messages.not_available') }}
                                            </p>
                                        </div>
                                        <div class="text-left sm:text-right">
                                            <p class="text-sm text-primary-600 font-semibold mb-1">{{ __('messages.special_offer.offer_price') }}</p>
                                            <p class="text-2xl font-bold text-primary-600">
                                                {{ $formatPrice($limitedTimeOffer->special_price) ?? __('messages.not_available') }}
                                            </p>
                                        </div>
                                    </div>
                                    @if($limitedTimeOffer->price_note || $limitedTimeOffer->savings_text)
                                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                                            @if($limitedTimeOffer->price_note)
                                                <span class="text-sm text-gray-600">{{ $limitedTimeOffer->price_note }}</span>
                                            @endif
                                            @if($limitedTimeOffer->savings_text)
                                                <div class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">
                                                    {{ $limitedTimeOffer->savings_text }}
                                                </div>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endif

                        <!-- Countdown Timer -->
                        @if($countdownEndsAt)
                            <div class="mb-8">
                                <div class="bg-white/95 backdrop-blur-md rounded-2xl p-6 text-center" data-countdown-end="{{ $countdownEndsAt }}">
                                    <p class="text-gray-800 font-semibold mb-4 text-sm">{{ $limitedTimeOffer->countdown_label ?? __('messages.special_offer.countdown_label') }}</p>
                                    <div id="countdown" class="grid grid-cols-4 gap-2">
                                        <div class="text-center">
                                            <div id="days" class="text-2xl font-bold text-primary-600 mb-1">0</div>
                                            <div class="text-xs text-gray-600 uppercase tracking-wide">{{ $specialOfferUnits['days'] ?? __('messages.time_units.days') }}</div>
                                        </div>
                                        <div class="text-center">
                                            <div id="hours" class="text-2xl font-bold text-primary-600 mb-1">0</div>
                                            <div class="text-xs text-gray-600 uppercase tracking-wide">{{ $specialOfferUnits['hours'] ?? __('messages.time_units.hours') }}</div>
                                        </div>
                                        <div class="text-center">
                                            <div id="minutes" class="text-2xl font-bold text-primary-600 mb-1">0</div>
                                            <div class="text-xs text-gray-600 uppercase tracking-wide">{{ $specialOfferUnits['minutes'] ?? __('messages.time_units.minutes') }}</div>
                                        </div>
                                        <div class="text-center">
                                            <div id="seconds" class="text-2xl font-bold text-primary-600 mb-1">0</div>
                                            <div class="text-xs text-gray-600 uppercase tracking-wide">{{ $specialOfferUnits['seconds'] ?? __('messages.time_units.seconds') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <!-- Action Buttons -->
                        <div class="space-y-4">
                            @if($primaryCtaLabel && $primaryCtaUrl)
                                <a href="{{ $primaryCtaUrl }}" class="w-full inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-primary-500 to-orange-500 text-white font-semibold rounded-xl hover:from-primary-600 hover:to-orange-600 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                                    @if($primaryCtaIcon)
                                        @if($primaryCtaIconIsClass)
                                            <i class="{{ $primaryCtaIcon }} mr-3 text-lg"></i>
                                        @else
                                            <span class="mr-3 text-lg">{{ $primaryCtaIcon }}</span>
                                        @endif
                                    @endif
                                    {{ $primaryCtaLabel }}
                                </a>
                            @endif
                            @if(!empty($secondaryCtas))
                                <div class="flex flex-wrap gap-4">
                                    @foreach($secondaryCtas as $cta)
                                        @php
                                            $ctaIcon = $cta['icon'] ?? null;
                                            $ctaIconIsClass = $ctaIcon && \Illuminate\Support\Str::contains($ctaIcon, 'fa-');
                                        @endphp
                                        <a href="{{ $cta['url'] ?? '#' }}" class="flex-1 min-w-[45%] inline-flex items-center justify-center px-4 py-3 border-2 border-gray-300 text-gray-700 font-medium rounded-xl hover:border-primary-500 hover:text-primary-600 transition-colors duration-300">
                                            @if($ctaIcon)
                                                @if($ctaIconIsClass)
                                                    <i class="{{ $ctaIcon }} mr-2"></i>
                                                @else
                                                    <span class="mr-2">{{ $ctaIcon }}</span>
                                                @endif
                                            @endif
                                            {{ $cta['label'] ?? '' }}
                                        </a>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                        <!-- Trust Indicators -->
                        @if(!empty($trustIndicators))
                            <div class="mt-8 pt-6 border-t border-gray-200">
                                <div class="flex flex-wrap items-center justify-between gap-4 text-sm text-gray-600">
                                    @foreach($trustIndicators as $indicator)
                                        @php
                                            $indicatorIcon = $indicator['icon'] ?? null;
                                            $indicatorIconIsClass = $indicatorIcon && \Illuminate\Support\Str::contains($indicatorIcon, 'fa-');
                                        @endphp
                                        <div class="flex items-center gap-2">
                                            @if($indicatorIcon)
                                                @if($indicatorIconIsClass)
                                                    <i class="{{ $indicatorIcon }} text-green-500"></i>
                                                @else
                                                    <span>{{ $indicatorIcon }}</span>
                                                @endif
                                            @endif
                                            <span>{{ $indicator['text'] ?? '' }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Bottom CTA -->
            @if($limitedTimeOffer->bottom_note || $limitedTimeOffer->bottom_badge_text)
                <div class="text-center mt-12 scroll-animate">
                    @if($limitedTimeOffer->bottom_note)
                        <p class="text-gray-600 mb-4">{{ $limitedTimeOffer->bottom_note }}</p>
                    @endif
                    @if($limitedTimeOffer->bottom_badge_text)
                        <div class="inline-flex items-center bg-yellow-100 text-yellow-800 px-4 py-2 rounded-full text-sm font-semibold">
                            @if($limitedTimeOffer->bottom_badge_icon)
                                <i class="{{ $limitedTimeOffer->bottom_badge_icon }} mr-2"></i>
                            @endif
                            {{ $limitedTimeOffer->bottom_badge_text }}
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </section>
    @endif

    <!-- Best Places to Visit Section -->
    <section id="experiences" class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4 scroll-animate">{{ __('messages.destinations.discover_label') }}</p>
                <h1 class="text-lg lg:text-xl font-bold mb-6 text-gray-900 scroll-animate">{{ __('messages.destinations.title') }}</h1>
                <p class="text-base text-gray-600 max-w-4xl mx-auto scroll-animate">{{ __('messages.destinations.subtitle') }}</p>
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
                            <span class="inline-block bg-primary-500 text-white px-3 py-1 rounded-full text-sm font-medium mb-4">{{ __('messages.destinations.featured.badge') }}</span>
                            <h3 class="text-3xl font-bold text-white mb-4">{{ __('messages.destinations.sigiriya.title') }}</h3>
                            <p class="text-gray-200 text-lg mb-6 leading-relaxed">{{ __('messages.destinations.sigiriya.description') }}</p>
                            <a href="{{ route('destinations.sigiriya', ['locale' => app()->getLocale()]) }}" class="inline-flex items-center bg-white text-primary-600 px-6 py-3 rounded-xl font-semibold hover:bg-primary-50 transition-all duration-300">
                                <i class="fas fa-mountain mr-2"></i>
                                {{ __('messages.destinations.featured.cta') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Destinations Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                @foreach($destinationPrimaryCards as $card)
                <a href="{{ $card['route'] }}" class="group relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 scroll-animate block">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ $card['image'] }}" alt="{{ $card['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <span class="inline-block {{ $card['badge_class'] }} text-white px-2 py-1 rounded-full text-xs font-medium mb-2">{{ $card['badge'] }}</span>
                        <h4 class="text-lg font-bold text-white mb-2">{{ $card['title'] }}</h4>
                        <p class="text-gray-200 text-sm">{{ $card['description'] }}</p>
                    </div>
                </a>
                @endforeach
            </div>

            <!-- Second Row -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                @foreach($destinationSecondaryCards as $card)
                <a href="{{ $card['route'] }}" class="group relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 scroll-animate block">
                    <div class="h-56 overflow-hidden">
                        <img src="{{ $card['image'] }}" alt="{{ $card['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4">
                        <span class="inline-block {{ $card['badge_class'] }} text-white px-2 py-1 rounded-full text-xs font-medium mb-2">{{ $card['badge'] }}</span>
                        <h4 class="text-lg font-bold text-white mb-1">{{ $card['title'] }}</h4>
                        <p class="text-gray-200 text-sm">{{ $card['description'] }}</p>
                    </div>
                </a>
                @endforeach
            </div>

            <!-- Unique Experiences Row -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($destinationExperiences as $experience)
                <div class="group relative rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 scroll-animate">
                    <div class="h-64 overflow-hidden">
                        <img src="{{ $experience['image'] }}" alt="{{ $experience['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <span class="inline-block {{ $experience['badge_class'] }} text-white px-3 py-1 rounded-full text-xs font-medium mb-3">{{ $experience['badge'] }}</span>
                        <h4 class="text-lg font-bold text-white mb-2">{{ $experience['title'] }}</h4>
                        <p class="text-gray-200 text-sm mb-4">{{ $experience['description'] }}</p>
                        <div class="flex items-center text-gray-300 text-sm">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <span>{{ $experience['location'] }}</span>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- Call to Action Card -->
                <div class="bg-gradient-to-br from-primary-500 to-primary-600 rounded-2xl p-6 text-white scroll-animate flex flex-col justify-center">
                    <div class="text-center">
                        <i class="fas fa-compass text-4xl mb-4 opacity-80"></i>
                        <h3 class="text-lg font-bold mb-4">{{ __('messages.destinations.cta.title') }}</h3>
                        <p class="text-primary-100 text-sm mb-6">{{ __('messages.destinations.cta.description') }}</p>
                        <a href="https://wa.me/94776605054" class="inline-flex items-center justify-center w-full bg-white text-primary-600 px-4 py-3 rounded-xl font-semibold hover:bg-gray-100 transition-colors duration-300">
                            <i class="fab fa-whatsapp mr-2"></i>
                            {{ __('messages.destinations.cta.button') }}
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
                <h1 class="text-lg lg:text-xl font-bold mb-6 text-gray-900 scroll-animate">{{ $testimonialsContent['title'] ?? '' }}</h1>
                <p class="text-base text-gray-600 max-w-3xl mx-auto scroll-animate">{{ $testimonialsContent['subtitle'] ?? '' }}</p>
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
                        <span class="text-sm text-gray-500 font-medium">{{ $testimonialFeatured['rating_label'] ?? '' }}</span>
                    </div>
                    
                    <blockquote class="text-base text-gray-800 leading-relaxed mb-8 font-medium">
                        {{ $testimonialFeatured['quote'] ?? '' }}
                    </blockquote>
                    
                    <div class="flex items-center">
                        <div class="w-20 h-20 rounded-full overflow-hidden mr-6 ring-4 ring-primary-100">
                            <img src="{{ asset('frontend/assets/img/testimonial/Priya-Menon.jpg') }}" alt="{{ $testimonialFeatured['name'] ?? 'Guest' }}" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold text-base text-gray-900">{{ $testimonialFeatured['name'] ?? '' }}</h4>
                            <p class="text-gray-600">{{ $testimonialFeatured['role'] ?? '' }}</p>
                            <div class="flex items-center mt-2 text-sm text-gray-500">
                                <i class="fas fa-map-marker-alt mr-1"></i>
                                <span>{{ $testimonialFeatured['tour'] ?? '' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($primaryTestimonialCards as $card)
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
                            {{ $card['label'] ?? '' }}
                        </div>
                    </div>
                    <p class="text-gray-700 leading-relaxed mb-6">{{ $card['quote'] ?? '' }}</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="{{ $card['image'] }}" alt="{{ $card['name'] ?? 'Guest' }}" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">{{ $card['name'] ?? '' }}</h4>
                            <p class="text-sm text-gray-600">{{ $card['location'] ?? '' }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Additional Testimonials Row -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                @if($secondaryTestimonialCard)
                <div class="bg-white rounded-2xl p-6 shadow-md hover:shadow-lg transition-all duration-300 border border-gray-100 scroll-animate">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex text-yellow-400 text-sm">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="bg-purple-50 text-purple-600 px-2 py-1 rounded-full text-xs font-medium">{{ $secondaryTestimonialCard['label'] ?? '' }}</span>
                    </div>
                    <p class="text-gray-700 text-sm leading-relaxed mb-4">{{ $secondaryTestimonialCard['quote'] ?? '' }}</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full overflow-hidden mr-3">
                            <img src="{{ $secondaryTestimonialCard['image'] ?? asset('frontend/assets/img/testimonial/Sofia-Alvarez.jpg') }}" alt="{{ $secondaryTestimonialCard['name'] ?? 'Guest' }}" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-semibold text-sm text-gray-900">{{ $secondaryTestimonialCard['name'] ?? '' }}</h4>
                            <p class="text-xs text-gray-600">{{ $secondaryTestimonialCard['location'] ?? '' }}</p>
                        </div>
                    </div>
                </div>
                @endif
                
                <!-- Stats Card -->
                <div class="bg-gradient-to-br from-primary-500 to-primary-600 rounded-2xl p-6 text-white scroll-animate">
                    <div class="text-center">
                        <div class="text-lg font-bold mb-2">{{ $testimonialStats['rating'] ?? '4.9/5' }}</div>
                        <div class="text-primary-100 text-sm mb-4">{{ $testimonialStats['label'] ?? '' }}</div>
                        <div class="flex justify-center text-yellow-300 mb-4">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="text-sm text-primary-100">{{ $testimonialStats['based_on'] ?? '' }}</div>
                    </div>
                </div>
                
                <!-- CTA Card -->
                <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl p-6 text-white scroll-animate">
                    <div class="text-center">
                        <h3 class="font-bold mb-2">{{ $testimonialCta['title'] ?? '' }}</h3>
                        <p class="text-gray-300 text-sm mb-4">{{ $testimonialCta['description'] ?? '' }}</p>
                        <a href="https://wa.me/94776605054" class="inline-flex items-center text-primary-400 hover:text-primary-600 text-sm font-medium">
                            <i class="fas fa-comment-dots mr-2"></i>
                            {{ $testimonialCta['button'] ?? '' }}
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    @include('components.footer')

    <!-- jQuery -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <!-- Countdown Script -->
    <script src="{{ asset('frontend/assets/js/countdown.js') }}"></script>

    <script>
        const offerExpiredText = @json(__('messages.special_offer.offer_expired'));
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
        (function initializeCountdown() {
            const countdownContainer = document.getElementById('countdown');
            const countdownWrapper = document.querySelector('[data-countdown-end]');

            if (!countdownContainer || !countdownWrapper) {
                return;
            }

            const targetDate = countdownWrapper.getAttribute('data-countdown-end');
            if (!targetDate) {
                return;
            }

            const targetTime = new Date(targetDate).getTime();
            if (Number.isNaN(targetTime)) {
                return;
            }

            const daysEl = document.getElementById('days');
            const hoursEl = document.getElementById('hours');
            const minutesEl = document.getElementById('minutes');
            const secondsEl = document.getElementById('seconds');

            if (!daysEl || !hoursEl || !minutesEl || !secondsEl) {
                return;
            }

            let timer;

            const updateCountdown = () => {
                const now = Date.now();
                const timeLeft = targetTime - now;

                if (timeLeft <= 0) {
                    if (timer) {
                        clearInterval(timer);
                    }
                    countdownContainer.innerHTML = '<span class="text-base text-primary-600">' + offerExpiredText + '</span>';
                    return;
                }

                const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                daysEl.textContent = Math.max(days, 0);
                hoursEl.textContent = Math.max(hours, 0);
                minutesEl.textContent = Math.max(minutes, 0);
                secondsEl.textContent = Math.max(seconds, 0);
            };

            updateCountdown();
            timer = setInterval(updateCountdown, 1000);
        })();
    </script>
</body>
</html>
