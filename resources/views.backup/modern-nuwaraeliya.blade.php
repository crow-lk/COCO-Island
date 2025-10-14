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
    <title>Nuwara Eliya - Sri Lanka's Tea Country Highlands | COCO Island Holidays</title>
    <meta name="description" content="Cool air, emerald tea fields, and misty peaks. Experience Nuwara Eliya's colonial-era charm at 1,868 meters above sea level with the world's finest Ceylon tea.">
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
                        }
                    }
                }
            }
        }
    </script>

<style>
    .hero-bg {
        background-image: url('https://www.authenticindiatours.com/app/uploads/2022/04/Tea-Plantations-Nuwara-Eliya-Sri-Lanka-min-1400x550-c-default.jpg');
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
            <div class="absolute top-20 left-20 w-64 h-64 bg-white/10 rounded-full blur-3xl floating-element"></div>
            <div class="absolute bottom-20 right-20 w-48 h-48 bg-white/10 rounded-full blur-3xl floating-element" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 left-1/4 w-32 h-32 bg-white/10 rounded-full blur-2xl floating-element" style="animation-delay: 4s;"></div>
        </div>

        <!-- Gradient Overlay for Text Readability -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>

        <!-- Content -->
        <div class="relative z-10 text-center max-w-6xl mx-auto px-4 scroll-animate">
            <div class="mb-8">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-md rounded-full mb-6">
                    <i class="fas fa-leaf text-3xl text-white"></i>
                </div>
            </div>
            <h1 class="text-4xl lg:text-7xl font-bold mb-6 leading-tight">
                Nuwara Eliya <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-emerald-300">Tea Country</span>
            </h1>
            <p class="text-xl lg:text-2xl mb-8 text-white/90 leading-relaxed max-w-4xl mx-auto">
                Cool air, emerald tea fields, and misty peaks. Experience "Little England" at 1,868 meters above sea level with the world's finest Ceylon tea.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                <a href="#book-now" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold rounded-xl bg-white text-primary-600 hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-calendar-check mr-3"></i>
                    Plan Your Highland Escape
                </a>
                <a href="https://wa.me/94776605054" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold rounded-xl bg-green-600 text-white hover:bg-green-700 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fab fa-whatsapp mr-3"></i>
                    Contact Tea Guide
                </a>
            </div>

            <!-- Quick Facts -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-4xl mx-auto">
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-green-300 mb-1">1,868m</div>
                    <div class="text-sm text-white/80">Above Sea Level</div>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-green-300 mb-1">Little England</div>
                    <div class="text-sm text-white/80">Colonial Charm</div>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-green-300 mb-1">Cool Climate</div>
                    <div class="text-sm text-white/80">Year-Round</div>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-green-300 mb-1">Ceylon Tea</div>
                    <div class="text-sm text-white/80">World's Finest</div>
                </div>
            </div>
        </div>

        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-center scroll-animate">
            <div class="flex flex-col items-center text-white/80">
                <span class="text-sm mb-2">Discover Tea Country</span>
                <div class="animate-bounce">
                    <i class="fas fa-chevron-down text-xl"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Nuwara Eliya belongs on your itinerary -->
    <section class="py-16 lg:py-24 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-animate">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">Hill Country</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">Why Nuwara Eliya Belongs on Your Itinerary</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Where colonial-era bungalows meet carpeted hillsides of tea, creating an unforgettable highland experience.
                </p>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                
                <!-- Tea Country Scenery -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-leaf text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Tea Country Scenery</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Endless terraces of tea bushes, silver oaks, and curving estate lanes perfect for slow travel and photos.
                    </p>
                </div>

                <!-- Cool-Climate Charm -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-snowflake text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Cool-Climate Charm</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Sweaters and hot chocolate in the tropics; rose gardens, golf greens, and timbered cottages add a romantic mood.
                    </p>
                </div>

                <!-- Nature on Your Doorstep -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-mountain text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Nature on Your Doorstep</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Horton Plains, Moon Plains, and waterfall trails deliver big views and easy day hikes.
                    </p>
                </div>

                <!-- Hands-on Experiences -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-hands text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Hands-on Experiences</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Pluck tea with estate workers, step through a working factory, and taste your leaves moments after they're fired.
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
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">Highland Attractions</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">Must-See Highlights</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    From colonial gardens to tea estates, waterfalls to scenic lakes, discover the best of Sri Lanka's hill country.
                </p>
            </div>

            <!-- Highlights Timeline -->
            <div class="relative">
                
                <!-- Gregory Lake -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-water text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Gregory Lake</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Walk or cycle the waterfront, take a gentle boat ride, and watch golden-hour light roll across the hills.
                        </p>
                    </div>
                </div>

                <!-- Horton Plains -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-mountain text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Horton Plains National Park (World's End)</h3>
                        <p class="text-gray-600 leading-relaxed">
                            A highland plateau of cloud forest and grassland; a 9–11 km loop to sheer viewpoints and Baker's Falls.
                        </p>
                    </div>
                </div>

                <!-- Pedro Tea Estate -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-amber-500 to-orange-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-leaf text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Pedro Tea Estate (and other factories)</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Tour the withering troughs, rollers, and dryers, then sample grades from OP to FBOPF.
                        </p>
                    </div>
                </div>

                <!-- Hakgala Botanical Garden -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-pink-500 to-rose-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-seedling text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Hakgala Botanical Garden</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Cool-climate blooms, ferny glades, and postcard-perfect lawns framed by forested slopes.
                        </p>
                    </div>
                </div>

                <!-- Seetha Amman Temple -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-place-of-worship text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Seetha Amman Temple</h3>
                        <p class="text-gray-600 leading-relaxed">
                            A colorful roadside shrine linked to the Ramayana trail, set beside a lively stream.
                        </p>
                    </div>
                </div>

                <!-- Lover's Leap Falls -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-cyan-500 to-teal-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-tint text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Lover's Leap Falls & Moon Plains</h3>
                        <p class="text-gray-600 leading-relaxed">
                            A quick hike to a slender cascade with sweeping city-and-tea views. Moon Plains offers "Mini World's End" for 360° mountain panoramas.
                        </p>
                    </div>
                </div>

                <!-- Victoria Park -->
                <div class="timeline-item flex items-start scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-emerald-500 to-green-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-golf-ball text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Victoria Park & Golf Club</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Manicured paths, birdlife, and an 18-hole course wrapped in mountain air. Perfect for leisurely walks.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Ways to Experience -->
    <section class="py-16 lg:py-24 mirror-effect text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="scroll-animate">
                <div class="mb-8">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-md rounded-full mb-6">
                        <i class="fas fa-coffee text-3xl"></i>
                    </div>
                </div>
                <h2 class="text-3xl lg:text-4xl font-bold mb-8">Ways to Experience the Highlands</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                    <div class="glass-morphism rounded-2xl p-6">
                        <h3 class="text-xl font-bold mb-4">Tea to Cup Workshop</h3>
                        <p class="text-primary-100 leading-relaxed">
                            Try leaf-plucking in an estate field, tour the factory with a tea taster, and finish with a comparative tasting flight.
                        </p>
                    </div>
                    <div class="glass-morphism rounded-2xl p-6">
                        <h3 class="text-xl font-bold mb-4">Waterfall Circuit</h3>
                        <p class="text-primary-100 leading-relaxed">
                            A half-day loop to Lover's Leap, Ramboda area falls, and scenic viewpoints with a picnic stop.
                        </p>
                    </div>
                    <div class="glass-morphism rounded-2xl p-6">
                        <h3 class="text-xl font-bold mb-4">Gregory Lake Sundown</h3>
                        <p class="text-primary-100 leading-relaxed">
                            Lakeside path + paddle boat + hot tea = simple perfection as the golden light rolls across the hills.
                        </p>
                    </div>
                    <div class="glass-morphism rounded-2xl p-6">
                        <h3 class="text-xl font-bold mb-4">Horton Plains Sunrise</h3>
                        <p class="text-primary-100 leading-relaxed">
                            Early start from town, complete the loop before the sun gets strong and the cliffs cloud over.
                        </p>
                    </div>
                </div>

                <div class="glass-morphism rounded-2xl p-8">
                    <h3 class="text-2xl font-bold mb-4">Experience Tea Country Magic</h3>
                    <p class="text-primary-100 mb-6">Join us for an authentic highland adventure where cool mountain air meets the warmth of Ceylon hospitality.</p>
                    <a href="https://wa.me/94776605054" class="inline-flex items-center bg-white text-primary-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <i class="fab fa-whatsapp mr-3"></i>
                        Plan Your Highland Escape
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Best Time to Visit & Practical Tips -->
    <section class="py-16 lg:py-24 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                
                <!-- Best Time to Visit -->
                <div class="scroll-animate">
                    <div class="bg-white rounded-2xl p-8 shadow-lg h-full">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-primary-500 to-orange-500 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-clock text-white text-lg"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Best Time to Visit</h3>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="border-l-4 border-primary-500 pl-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Time of Day</h4>
                                <p class="text-gray-600">Clear mornings for views; soft late-afternoon light for photos.</p>
                            </div>
                            
                            <div class="border-l-4 border-orange-500 pl-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Season</h4>
                                <p class="text-gray-600">Year-round, with frequent, refreshing showers. April brings a festive "season" vibe; Dec–Feb is crisp and cool.</p>
                            </div>
                            
                            <div class="border-l-4 border-green-500 pl-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Getting There</h4>
                                <p class="text-gray-600">Scenic train from Kandy ↔ Nanu Oya is Sri Lanka's most famous rail ride. By road: 3-4 hours from Kandy, 2-3 hours from Ella.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Practical Information -->
                <div class="scroll-animate">
                    <div class="bg-white rounded-2xl p-8 shadow-lg h-full">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-lightbulb text-white text-lg"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Practical Information</h3>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <i class="fas fa-tshirt text-primary-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Weather & Clothing</h4>
                                    <p class="text-gray-600 text-sm">Highland weather changes fast. Pack layers, light rain jacket, and closed shoes for trails.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-mountain text-primary-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Altitude & Pace</h4>
                                    <p class="text-gray-600 text-sm">At ~1,868m the air is cooler and thinner—walk steadily, hydrate, and enjoy frequent photo breaks.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-bug text-primary-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Leech Tips (trails)</h4>
                                    <p class="text-gray-600 text-sm">After rain, wear socks that cover ankles; our guides carry salt/spray just in case.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-camera text-primary-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Tea Factory Etiquette</h4>
                                    <p class="text-gray-600 text-sm">Photos are welcome in many areas; follow staff guidance and safety rules around machinery.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nearby Attractions -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-animate">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">Explore More</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">Pair it with Nearby Attractions</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Extend your hill country adventure with these complementary destinations.
                </p>
            </div>

            <!-- Attractions Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <!-- Ella -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-green-500 to-emerald-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-bold text-lg">Ella</h4>
                        </div>
                        <i class="fas fa-train text-white text-4xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Nine Arches Bridge, Little Adam's Peak, cafés with ridge-line views.
                        </p>
                    </div>
                </div>

                <!-- Kitulgala -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-blue-500 to-cyan-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-bold text-lg">Kitulgala</h4>
                        </div>
                        <i class="fas fa-water text-white text-4xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Rainforest stop for white-water rafting en route from Colombo.
                        </p>
                    </div>
                </div>

                <!-- Adam's Peak -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-purple-500 to-indigo-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-bold text-lg">Adam's Peak</h4>
                        </div>
                        <i class="fas fa-mountain text-white text-4xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed">
                            A spiritual night climb in season, with sunrise over a sea of peaks.
                        </p>
                    </div>
                </div>

                <!-- St. Clair's Falls -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-teal-500 to-cyan-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-bold text-lg">St. Clair's Falls</h4>
                        </div>
                        <i class="fas fa-tint text-white text-4xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Classic tea-country viewpoints between Kandy and Nuwara Eliya.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sample One-Day Plan -->
    <section class="py-16 lg:py-24 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-animate">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">Perfect Itinerary</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">Sample One-Day Plan (Flexible)</h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Our thoughtfully planned itinerary designed for the perfect Nuwara Eliya experience.
                </p>
            </div>

            <!-- Timeline Schedule -->
            <div class="bg-white rounded-2xl p-8 shadow-lg scroll-animate">
                <div class="space-y-6">
                    
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-20 text-primary-600 font-bold text-lg">07:00</div>
                        <div class="flex-grow">
                            <h4 class="font-semibold text-gray-900 mb-1">Tea Estate Experience</h4>
                            <p class="text-gray-600">Tea estate & factory tour with tasting flight.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-20 text-primary-600 font-bold text-lg">10:30</div>
                        <div class="flex-grow">
                            <h4 class="font-semibold text-gray-900 mb-1">Botanical Beauty</h4>
                            <p class="text-gray-600">Hakgala Botanical Garden wander + light snack.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-20 text-primary-600 font-bold text-lg">12:30</div>
                        <div class="flex-grow">
                            <h4 class="font-semibold text-gray-900 mb-1">Highland Lunch</h4>
                            <p class="text-gray-600">Lunch in town (try highland trout or a cozy curry).</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-20 text-primary-600 font-bold text-lg">14:30</div>
                        <div class="flex-grow">
                            <h4 class="font-semibold text-gray-900 mb-1">Panoramic Views</h4>
                            <p class="text-gray-600">Moon Plains 4x4 to Mini World's End.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-20 text-primary-600 font-bold text-lg">16:30</div>
                        <div class="flex-grow">
                            <h4 class="font-semibold text-gray-900 mb-1">Lakeside Golden Hour</h4>
                            <p class="text-gray-600">Gregory Lake stroll/boat ride; hot tea & pastries.</p>
                        </div>
                    </div>

                </div>

                <div class="mt-8 p-6 bg-gradient-to-r from-primary-50 to-orange-50 rounded-xl border border-primary-100">
                    <p class="text-center text-gray-700">
                        <i class="fas fa-info-circle text-primary-600 mr-2"></i>
                        <strong>Prefer hiking?</strong> Swap Moon Plains for Horton Plains (early start) and end with a gentle lake walk.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 lg:py-24 bg-white" id="book-now">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-animate">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">Questions?</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">Frequently Asked Questions</h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Everything you need to know for your Nuwara Eliya highland adventure.
                </p>
            </div>

            <!-- FAQ Items -->
            <div class="space-y-6">
                
                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">Is Nuwara Eliya good for families?</h3>
                            <i class="fas fa-chevron-down text-primary-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            Yes—easy walks, lakeside activities, short estate tours, and cool weather suit all ages. Children love the boat rides and train journeys.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">Do I need hiking experience?</h3>
                            <i class="fas fa-chevron-down text-primary-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            No. We'll match trails to your comfort—anything from lakeside paths to the Horton Plains loop. Most activities are gentle.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">What should I wear?</h3>
                            <i class="fas fa-chevron-down text-primary-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            Layers, breathable trousers/leggings, sturdy shoes, light rain jacket, hat, and sunscreen (UV is strong at altitude).
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">Can I buy fresh tea to take home?</h3>
                            <i class="fas fa-chevron-down text-primary-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            Absolutely—factories and boutique shops sell vacuum-sealed packs; we'll direct you to reputable sellers with the finest Ceylon tea grades.
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
                    We plan your train seats, station pick-ups, tea estate access, lake activities, and nature excursions with licensed guides. Want a cozy colonial bungalow or sunrise at World's End?
                </p>
                
                <div class="glass-morphism rounded-2xl p-8">
                    <h3 class="text-2xl font-bold mb-4">Ready to Experience Tea Country?</h3>
                    <p class="text-primary-100 mb-6">Tell us your pace—we'll craft a highland escape you'll remember long after the last sip of tea.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://wa.me/94776605054" class="inline-flex items-center bg-white text-primary-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <i class="fab fa-whatsapp mr-3"></i>
                            Plan Your Highland Escape
                        </a>
                        <a href="{{ route('contact', app()->getLocale()) }}" class="inline-flex items-center bg-green-600 text-white px-8 py-4 rounded-xl font-semibold hover:bg-green-700 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-envelope mr-3"></i>
                            Get Custom Itinerary
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
                    <h4 class="text-lg font-semibold mb-4">Popular Destinations</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Sigiriya Rock Fortress</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Anuradhapura Sacred City</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Nuwara Eliya Tea Country</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Kandy Temple</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Yala National Park</a></li>
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
