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
    <title>Colombo - Sri Lanka's Vibrant Oceanfront Capital | COCO Island Holidays</title>
    <meta name="description" content="Skyline meets seafront, spice markets meet speakeasies. Discover Colombo where Sri Lanka's past and present dance together in vibrant harmony.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/fav-icon.png') }}">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
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
                        'fade-in': 'fadeIn 0.6s ease-in-out',
                        'scale-in': 'scaleIn 0.6s ease-out',
                        'fade-in-up': 'fadeInUp 0.6s ease-out forwards',
                        'fade-in-left': 'fadeInLeft 0.6s ease-out forwards',
                        'fade-in-right': 'fadeInRight 0.6s ease-out forwards',
                        'pulse-glow': 'pulseGlow 3s ease-in-out infinite',
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
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' }
                        },
                        fadeInLeft: {
                            '0%': { opacity: '0', transform: 'translateX(-30px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' }
                        },
                        fadeInRight: {
                            '0%': { opacity: '0', transform: 'translateX(30px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' }
                        },
                        pulseGlow: {
                            '0%, 100%': { boxShadow: '0 0 20px rgba(249, 115, 22, 0.4)' },
                            '50%': { boxShadow: '0 0 40px rgba(249, 115, 22, 0.8)' }
                        }
                    }
                }
            }
        }
    </script>

<style>
    .hero-bg {
        background-image: url('https://assets.dm.rccl.com/is/image/RoyalCaribbeanCruises/royal/ports-and-destinations/ports/colombo-sri-lanka/overview/colombo-sri-lanka-aerial-view.jpg?$1440x600$');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: scroll;
    }
    
    .scroll-animate {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s ease-out;
    }
    
    .scroll-animate.animated {
        opacity: 1;
        transform: translateY(0);
    }
    
    .floating-element {
        animation: float 6s ease-in-out infinite;
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    
    .feature-card {
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .feature-card:hover {
        transform: translateY(-8px) scale(1.02);
    }

    .timeline-item {
        position: relative;
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        left: 15px;
        top: 60px;
        bottom: -20px;
        width: 2px;
        background: linear-gradient(to bottom, #f97316, #ea580c);
    }

    .timeline-item:last-child::before {
        display: none;
    }

    .mirror-effect {
        position: relative;
        background: linear-gradient(135deg, #f97316, #ea580c);
        overflow: hidden;
    }

    .mirror-effect::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(
            90deg,
            transparent,
            rgba(255, 255, 255, 0.4),
            transparent
        );
        animation: mirror-shine 3s infinite;
    }

    .mirror-effect::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(
            135deg,
            rgba(255, 255, 255, 0.2) 0%,
            transparent 50%,
            rgba(255, 255, 255, 0.1) 100%
        );
        pointer-events: none;
    }

    @keyframes mirror-shine {
        0% {
            left: -100%;
        }
        50% {
            left: 100%;
        }
        100% {
            left: 100%;
        }
    }

    .glass-morphism {
        backdrop-filter: blur(10px);
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .city-skyline {
        position: relative;
        overflow: hidden;
    }

    .city-skyline::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 30px;
        background: linear-gradient(90deg, 
            rgba(249, 115, 22, 0.2), 
            rgba(234, 88, 12, 0.3), 
            rgba(194, 65, 12, 0.2)
        );
        animation: city-lights 4s ease-in-out infinite;
    }

    @keyframes city-lights {
        0%, 100% {
            opacity: 0.6;
            transform: scaleY(1);
        }
        50% {
            opacity: 1;
            transform: scaleY(1.2);
        }
    }
</style>
</head>

<body class="font-sans bg-white text-gray-800">
    <!-- Scroll Progress Indicator -->
    <div class="fixed top-0 left-0 w-full h-1 bg-gray-200 z-50">
        <div class="h-full bg-gradient-to-r from-primary-500 to-orange-500 transition-all duration-300" id="scroll-progress" style="width: 0%"></div>
    </div>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/94776605054" class="fixed bottom-6 right-6 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transform hover:scale-110 transition-all duration-300 z-40" target="_blank" aria-label="Chat on WhatsApp">
        <i class="fab fa-whatsapp text-xl"></i>
    </a>

    @include('components.header')

    <!-- Hero Section -->
    <section class="hero-bg relative min-h-screen flex items-center justify-center text-white overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-20 w-64 h-64 bg-orange-300/20 rounded-full blur-3xl floating-element"></div>
            <div class="absolute bottom-20 right-20 w-48 h-48 bg-yellow-300/20 rounded-full blur-3xl floating-element" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 left-1/4 w-32 h-32 bg-red-300/20 rounded-full blur-2xl floating-element" style="animation-delay: 4s;"></div>
        </div>

        <!-- Gradient Overlay for Text Readability -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>

        <!-- Content -->
        <div class="relative z-10 text-center max-w-6xl mx-auto px-4 scroll-animate">
            <div class="mb-8">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-md rounded-full mb-6">
                    <i class="fas fa-city text-3xl text-white animate-pulse-glow"></i>
                </div>
            </div>
            <h1 class="text-4xl lg:text-7xl font-bold mb-6 leading-tight">
                Colombo <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-yellow-300">Vibrant Capital</span>
            </h1>
            <p class="text-xl lg:text-2xl mb-8 text-white/90 leading-relaxed max-w-4xl mx-auto">
                Skyline meets seafront, spice markets meet speakeasies. Where Sri Lanka's past and present dance together in vibrant harmony.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                <a href="{{ route('contact', app()->getLocale()) }}" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold rounded-xl bg-white text-primary-600 hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-calendar-check mr-3"></i>
                    Explore the Capital
                </a>
                <a href="https://wa.me/94776605054" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold rounded-xl bg-green-600 text-white hover:bg-green-700 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fab fa-whatsapp mr-3"></i>
                    Plan City Tour
                </a>
            </div>

            <!-- Quick Facts -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-4xl mx-auto">
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-orange-300 mb-1">Oceanfront</div>
                    <div class="text-sm text-white/80">Modern Capital</div>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-orange-300 mb-1">Food Capital</div>
                    <div class="text-sm text-white/80">Street to Fine Dining</div>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-orange-300 mb-1">Living History</div>
                    <div class="text-sm text-white/80">Colonial Heritage</div>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-orange-300 mb-1">Gateway</div>
                    <div class="text-sm text-white/80">Island Adventures</div>
                </div>
            </div>
        </div>

        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-center scroll-animate">
            <div class="flex flex-col items-center text-white/80">
                <span class="text-sm mb-2">Discover the Capital</span>
                <div class="animate-bounce">
                    <i class="fas fa-chevron-down text-xl"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Colombo belongs on your itinerary -->
    <section class="py-16 lg:py-24 bg-gradient-to-br from-orange-50 to-yellow-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-animate">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">Urban Capital</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">Why Colombo Belongs on Your Itinerary</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Start or end your island journey here and feel the country's creative pulse where tradition meets innovation.
                </p>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 mb-16">
                
                <!-- Seafront Energy -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl city-skyline">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-water text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Seafront Energy</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Evenings at Galle Face Green—kites, street snacks, golden light over the Indian Ocean.
                    </p>
                </div>

                <!-- Living History -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl city-skyline">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-landmark text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Living History</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Dutch, Portuguese, and British legacies woven into lanes, warehouses, churches, mosques, and courtyards.
                    </p>
                </div>

                <!-- Food Capital -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl city-skyline">
                    <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-pink-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-utensils text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Food Capital</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Hoppers, isso wade, seafood suppers, contemporary Sri Lankan tasting menus, specialty coffee, and craft mocktails.
                    </p>
                </div>

                <!-- Art & Design -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl city-skyline">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-palette text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Art & Design</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Boutique galleries, concept stores, and restored heritage spaces celebrating local makers.
                    </p>
                </div>

                <!-- Gateway Convenience -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl city-skyline">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-route text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Gateway Convenience</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Smooth logistics, great hotels, and easy day trips in every direction across the island.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Must-see Highlights -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-animate">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">City Highlights</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">Must-See Highlights</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    From bustling markets to serene temples, discover the diverse attractions that make Colombo truly special.
                </p>
            </div>

            <!-- Highlights Timeline -->
            <div class="relative">
                
                <!-- Pettah Market -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-red-500 to-orange-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-shopping-bag text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Pettah Market & Red Mosque</h3>
                        <p class="text-gray-600 leading-relaxed">
                            A sensory dive through spice sacks, sari shops, and the striking candy-striped façade of Jami Ul-Alfar Mosque.
                        </p>
                    </div>
                </div>

                <!-- Colombo Fort -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-building text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Colombo Fort & Old Dutch Hospital</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Heritage arcades reborn with cafés and boutiques—perfect for an afternoon wander through colonial charm.
                        </p>
                    </div>
                </div>

                <!-- Galle Face Green -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-green-500 to-teal-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-sun text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Galle Face Green</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Sunset promenade culture—try isso wade (prawn fritters) and watch the sky turn peach over the Indian Ocean.
                        </p>
                    </div>
                </div>

                <!-- Gangaramaya Temple -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-yellow-500 to-amber-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-praying-hands text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Gangaramaya Temple & Seema Malaka</h3>
                        <p class="text-gray-600 leading-relaxed">
                            City-temple pair; Seema Malaka floats serenely on Beira Lake offering peaceful reflection in the urban heart.
                        </p>
                    </div>
                </div>

                <!-- Colombo National Museum -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-museum text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Colombo National Museum</h3>
                        <p class="text-gray-600 leading-relaxed">
                            A graceful white mansion showcasing the island's story and craftsmanship through the ages.
                        </p>
                    </div>
                </div>

                <!-- Independence Square -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-indigo-500 to-blue-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-flag text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Independence Square & Arcade</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Open colonnades, leafy lawns, and evening joggers; great for photos and understanding Sri Lanka's heritage.
                        </p>
                    </div>
                </div>

                <!-- Lotus Tower -->
                <div class="timeline-item flex items-start scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-pink-500 to-red-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-tower-observation text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Lotus Tower & City Views</h3>
                        <p class="text-gray-600 leading-relaxed">
                            A dramatic landmark and city vista point on clear days, plus Viharamahadevi Park's green refuge with tall rain trees.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Ways to Experience Colombo -->
    <section class="py-16 lg:py-24 mirror-effect text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="scroll-animate">
                <div class="mb-8">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-md rounded-full mb-6">
                        <i class="fas fa-route text-3xl"></i>
                    </div>
                </div>
                <h2 class="text-3xl lg:text-4xl font-bold mb-8">Ways to Experience Colombo</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                    <div class="glass-morphism rounded-2xl p-6">
                        <h3 class="text-xl font-bold mb-4">Street-to-Table Food Trail</h3>
                        <p class="text-primary-100 leading-relaxed">
                            From kottu and hoppers to boutique cafés and modern Sri Lankan plates—curated route from street to fine dining.
                        </p>
                    </div>
                    <div class="glass-morphism rounded-2xl p-6">
                        <h3 class="text-xl font-bold mb-4">Heritage Walk</h3>
                        <p class="text-primary-100 leading-relaxed">
                            Fort to Pettah with a licensed guide—trade routes, architecture, and hidden courtyards in one enriching loop.
                        </p>
                    </div>
                    <div class="glass-morphism rounded-2xl p-6">
                        <h3 class="text-xl font-bold mb-4">Gallery & Design Hop</h3>
                        <p class="text-primary-100 leading-relaxed">
                            Discover contemporary Sri Lankan art, handloom, ceramics, and upcycle studios showcasing local creativity.
                        </p>
                    </div>
                    <div class="glass-morphism rounded-2xl p-6">
                        <h3 class="text-xl font-bold mb-4">Sunset Ritual</h3>
                        <p class="text-primary-100 leading-relaxed">
                            Galle Face stroll, street snacks, and ocean breeze—simple, iconic, unforgettable evening experience.
                        </p>
                    </div>
                </div>

                <div class="glass-morphism rounded-2xl p-8">
                    <h3 class="text-2xl font-bold mb-4">Tuk-Tuk City Spin</h3>
                    <p class="text-primary-100 mb-6">Short, fun circuits linking temples, markets, and coast—great first-day orientation to the capital's rhythm.</p>
                    <a href="https://wa.me/94776605054" class="inline-flex items-center bg-white text-primary-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <i class="fab fa-whatsapp mr-3"></i>
                        Plan Your City Adventure
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Practical Tips & Best Time -->
    <section class="py-16 lg:py-24 bg-gradient-to-br from-orange-50 to-yellow-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                
                <!-- Practical Information -->
                <div class="scroll-animate">
                    <div class="bg-white rounded-2xl p-8 shadow-lg h-full">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-primary-500 to-orange-500 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-lightbulb text-white text-lg"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Practical Information</h3>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <i class="fas fa-tshirt text-primary-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Dress & Etiquette</h4>
                                    <p class="text-gray-600 text-sm">Casual is fine; cover shoulders/knees for temples, remove shoes and hats inside sacred spaces.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-credit-card text-primary-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Payments & SIMs</h4>
                                    <p class="text-gray-600 text-sm">Cards widely accepted; carry some cash for markets and street eats. Local SIMs are inexpensive and fast to set up.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-car text-primary-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Getting Around</h4>
                                    <p class="text-gray-600 text-sm">Ride-hailing apps, metered tuk-tuks, or private car. Traffic can be busy—plan generous buffers.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-sun text-primary-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Heat & Hydration</h4>
                                    <p class="text-gray-600 text-sm">Coastal humidity—hat, sunscreen, and reusable water bottle help. Stay hydrated while exploring.</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <i class="fas fa-camera text-primary-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Photography</h4>
                                    <p class="text-gray-600 text-sm">Always ask before photographing people or inside places of worship. Respect local customs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Best Time & Access -->
                <div class="scroll-animate">
                    <div class="bg-white rounded-2xl p-8 shadow-lg h-full">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-clock text-white text-lg"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Best Time & Access</h3>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="border-l-4 border-primary-500 pl-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Year-Round Destination</h4>
                                <p class="text-gray-600">Colombo is lively year-round. For softer light and cooler air, aim for mornings and late afternoons.</p>
                            </div>
                            
                            <div class="border-l-4 border-orange-500 pl-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Weather Patterns</h4>
                                <p class="text-gray-600">Short tropical showers freshen the city and pass quickly, creating pleasant conditions.</p>
                            </div>
                            
                            <div class="border-l-4 border-blue-500 pl-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Airport Access</h4>
                                <p class="text-gray-600">45-90 minutes from CMB airport depending on traffic; private transfers with Wi-Fi and cool-box water arranged.</p>
                            </div>

                            <div class="border-l-4 border-green-500 pl-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Island Connections</h4>
                                <p class="text-gray-600">Trains and expressways connect Colombo seamlessly with south coast, hill country, and Cultural Triangle.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pair it with -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-animate">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">Extend Your Journey</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">Pair it with</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Colombo serves as the perfect gateway to Sri Lanka's diverse attractions and experiences.
                </p>
            </div>

            <!-- Attractions Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <!-- Negombo -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-blue-500 to-cyan-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-bold text-lg">Negombo Lagoon</h4>
                        </div>
                        <i class="fas fa-fish text-white text-4xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Easygoing canals and seafood near the airport—perfect arrival or departure experience.
                        </p>
                    </div>
                </div>

                <!-- Galle Fort -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-orange-500 to-red-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-bold text-lg">Galle Fort</h4>
                        </div>
                        <i class="fas fa-fort-awesome text-white text-4xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Heritage lanes and sunset ramparts—expressway makes it an easy hop from the capital.
                        </p>
                    </div>
                </div>

                <!-- Kandy -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-green-500 to-emerald-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-bold text-lg">Kandy</h4>
                        </div>
                        <i class="fas fa-praying-hands text-white text-4xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Temple of the Tooth, lake walks, and the tea-country rail line beyond into the highlands.
                        </p>
                    </div>
                </div>

                <!-- Beach Escapes -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-cyan-500 to-blue-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-bold text-lg">Beach Escapes</h4>
                        </div>
                        <i class="fas fa-umbrella-beach text-white text-4xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Bentota / Mount Lavinia—quick beach escapes close to the city for ocean relaxation.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 lg:py-24 bg-gradient-to-br from-orange-50 to-yellow-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-animate">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">Questions?</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">Frequently Asked Questions</h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Everything you need to know for your Colombo city adventure.
                </p>
            </div>

            <!-- FAQ Items -->
            <div class="space-y-6">
                
                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">Is Colombo just a transit stop?</h3>
                            <i class="fas fa-chevron-down text-primary-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            It can be—but it rewards a full day (or two) with food, art, and history you won't find elsewhere on the island. The capital has its own unique character.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">Is it family-friendly?</h3>
                            <i class="fas fa-chevron-down text-primary-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            Yes—parks, the promenade, and short tuk-tuk hops keep kids engaged. Many attractions are educational and interactive for young travelers.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">What should I wear for temples?</h3>
                            <i class="fas fa-chevron-down text-primary-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            Cover shoulders and knees; remove shoes and hats. A light scarf is handy for spontaneous temple visits throughout the city.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">Is Colombo safe?</h3>
                            <i class="fas fa-chevron-down text-primary-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            Like any big city, stay aware of your belongings and use reputable transport. We'll guide you to trusted neighborhoods and vendors for peace of mind.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 lg:py-24 mirror-effect text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="scroll-animate">
                <div class="mb-8">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-md rounded-full mb-6">
                        <i class="fas fa-calendar-check text-3xl"></i>
                    </div>
                </div>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6">Make it Seamless with Coco Island Holidays</h2>
                <p class="text-xl text-primary-100 mb-12 leading-relaxed">
                    Tell us your vibe—street food explorer, design lover, sunset stroller—and we'll map restaurants, cafés, walks, galleries, and viewpoints into a smooth Colombo welcome (or finale) to your Sri Lankan journey.
                </p>
                
                <div class="glass-morphism rounded-2xl p-8">
                    <h3 class="text-2xl font-bold mb-4">Ready to Explore Vibrant Colombo?</h3>
                    <p class="text-primary-100 mb-6">Private guides, transfers, and curated stops? Consider it done. Let's craft your perfect capital city experience.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://wa.me/94776605054" class="inline-flex items-center bg-white text-primary-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <i class="fab fa-whatsapp mr-3"></i>
                            Plan Your City Tour
                        </a>
                        <a href="{{ route('contact', app()->getLocale()) }}" class="inline-flex items-center bg-green-600 text-white px-8 py-4 rounded-xl font-semibold hover:bg-green-700 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-envelope mr-3"></i>
                            Get Custom City Guide
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <h3 class="text-xl font-bold mb-4 text-primary-400">COCO Island Holidays</h3>
                    <p class="text-gray-300 mb-4 leading-relaxed">
                        Your trusted partner for authentic Sri Lankan adventures. Creating unforgettable memories with local expertise and personalized service.
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/coco.island.holidays" target="_blank" class="text-primary-400 hover:text-primary-600 transition-colors duration-300">
                            <i class="fab fa-facebook-f text-lg"></i>
                        </a>
                        <a href="https://www.instagram.com/coco.island.holidays" target="_blank" class="text-primary-400 hover:text-primary-600 transition-colors duration-300">
                            <i class="fab fa-instagram text-lg"></i>
                        </a>
                        <a href="https://www.tiktok.com/@coco.island.holidays" target="_blank" class="text-primary-400 hover:text-primary-600 transition-colors duration-300">
                            <i class="fab fa-tiktok text-lg"></i>
                        </a>
                        <a href="https://wa.me/94776605054" target="_blank" class="text-primary-400 hover:text-primary-600 transition-colors duration-300">
                            <i class="fab fa-whatsapp text-lg"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="text-gray-300 hover:text-white transition-colors duration-300">Home</a></li>
                        <li><a href="{{ route('about', ['locale' => app()->getLocale()]) }}" class="text-gray-300 hover:text-white transition-colors duration-300">About Us</a></li>
                        <li><a href="{{ route('tours.index', ['locale' => app()->getLocale()]) }}" class="text-gray-300 hover:text-white transition-colors duration-300">Tours</a></li>
                        <li><a href="{{ route('packages', ['locale' => app()->getLocale()]) }}" class="text-gray-300 hover:text-white transition-colors duration-300">Packages</a></li>
                        <li><a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="text-gray-300 hover:text-white transition-colors duration-300">Contact</a></li>
                    </ul>
                </div>

                <!-- Destinations -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Urban Experiences</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Colombo City Tours</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Food & Market Walks</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Heritage & Architecture</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Art & Design Districts</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Sunset at Galle Face</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Get In Touch</h4>
                    <div class="space-y-3 text-gray-300">
                        <p class="flex items-center">
                            <i class="fas fa-phone mr-3 text-primary-400"></i>
                            <a href="tel:+94776605054" class="hover:text-white transition-colors">+94 77 660 5054</a>
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-envelope mr-3 text-primary-400"></i>
                            <a href="mailto:info@cocoislandholidays.com" class="hover:text-white transition-colors">info@cocoislandholidays.com</a>
                        </p>
                        <p class="flex items-start">
                            <i class="fas fa-map-marker-alt mr-3 text-primary-400 mt-1"></i>
                            <span>Kaluthara, Sri Lanka</span>
                        </p>
                    </div>
                    <a href="https://wa.me/94776605054" class="inline-flex items-center justify-center w-full mt-6 px-4 py-3 bg-green-600 text-white font-medium rounded-xl hover:bg-green-700 transition-colors duration-300">
                        <i class="fab fa-whatsapp mr-2"></i>
                        Chat on WhatsApp
                    </a>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <div class="mb-4 space-x-6">
                    <a href="{{ route('privacy.policy', ['locale' => app()->getLocale()]) }}" class="hover:text-white transition-colors duration-300">{{ __("messages.legal.privacy") }}</a>
                    <span>•</span>
                    <a href="{{ route('terms.conditions', ['locale' => app()->getLocale()]) }}" class="hover:text-white transition-colors duration-300">{{ __("messages.legal.terms") }}</a>
                </div>
                <p>&copy; 2025 COCO Island Holidays. All rights reserved. | Crafted with ❤️ for Sri Lankan tourism</p>
            </div>
        </div>
    </footer>

    <script>
        // Scroll Progress Bar
        function updateScrollProgress() {
            const scrollTop = window.pageYOffset;
            const docHeight = document.body.scrollHeight - window.innerHeight;
            const scrollPercent = (scrollTop / docHeight) * 100;
            document.getElementById('scroll-progress').style.width = scrollPercent + '%';
        }

        window.addEventListener('scroll', updateScrollProgress);

        // Scroll Animation Observer
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        document.querySelectorAll('.scroll-animate').forEach(element => {
            observer.observe(element);
        });

        // FAQ Toggle Function
        function toggleFAQ(button) {
            const content = button.nextElementSibling;
            const icon = button.querySelector('i');
            
            // Close all other FAQ items
            document.querySelectorAll('.faq-content').forEach(item => {
                if (item !== content) {
                    item.classList.add('hidden');
                    item.previousElementSibling.querySelector('i').classList.remove('rotate-180');
                }
            });
            
            // Toggle current FAQ
            content.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        }

        // Smooth scroll for anchor links
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
    </script>
</body>
</html>
