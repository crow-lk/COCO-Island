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
    <title>Hiriketiya Beach - Sri Lanka's Horseshoe Bay Hideaway | COCO Island Holidays</title>
    <meta name="description" content="Palm-fringed curve, turquoise water, and gentle surf that keeps you smiling all day. Discover Hiriketiya Beach - the perfect horseshoe bay hideaway.">
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
                        'wave': 'wave 2s ease-in-out infinite',
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
                        wave: {
                            '0%, 100%': { transform: 'rotate(-3deg)' },
                            '50%': { transform: 'rotate(3deg)' }
                        }
                    }
                }
            }
        }
    </script>

<style>
    .hero-bg {
        background-image: url('https://kimasurfsrilanka.com/wp-content/uploads/2021/12/Kima-Surf-Camp-Hiriketiya-Header.jpg');
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
        background: linear-gradient(to bottom, #06b6d4, #0891b2);
    }

    .timeline-item:last-child::before {
        display: none;
    }

    .mirror-effect {
        position: relative;
        background: linear-gradient(135deg, #06b6d4, #0891b2);
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

    .wave-animation {
        position: relative;
        overflow: hidden;
    }

    .wave-animation::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 20px;
        background: linear-gradient(90deg, rgba(6, 182, 212, 0.3), rgba(8, 145, 178, 0.3));
        animation: wave-flow 3s ease-in-out infinite;
    }

    @keyframes wave-flow {
        0%, 100% {
            transform: translateX(-100px) scaleY(1);
        }
        50% {
            transform: translateX(100px) scaleY(1.5);
        }
    }
</style>
</head>

<body class="font-sans bg-white text-gray-800">
    <!-- Scroll Progress Indicator -->
    <div class="fixed top-0 left-0 w-full h-1 bg-gray-200 z-50">
        <div class="h-full bg-gradient-to-r from-cyan-500 to-blue-500 transition-all duration-300" id="scroll-progress" style="width: 0%"></div>
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
            <div class="absolute top-20 left-20 w-64 h-64 bg-cyan-300/20 rounded-full blur-3xl floating-element"></div>
            <div class="absolute bottom-20 right-20 w-48 h-48 bg-blue-300/20 rounded-full blur-3xl floating-element" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 left-1/4 w-32 h-32 bg-teal-300/20 rounded-full blur-2xl floating-element" style="animation-delay: 4s;"></div>
        </div>

        <!-- Gradient Overlay for Text Readability -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>

        <!-- Content -->
        <div class="relative z-10 text-center max-w-6xl mx-auto px-4 scroll-animate">
            <div class="mb-8">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-md rounded-full mb-6">
                    <i class="fas fa-water text-3xl text-white animate-wave"></i>
                </div>
            </div>
            <h1 class="text-4xl lg:text-7xl font-bold mb-6 leading-tight">
                Hiriketiya <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-300">Horseshoe Bay</span>
            </h1>
            <p class="text-xl lg:text-2xl mb-8 text-white/90 leading-relaxed max-w-4xl mx-auto">
                Palm-fringed curve, turquoise water, and gentle surf that keeps you smiling all day. Your perfect beach hideaway on Sri Lanka's south coast.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                <a href="{{ route('contact', app()->getLocale()) }}" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold rounded-xl bg-white text-cyan-600 hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-calendar-check mr-3"></i>
                    Plan Your Beach Day
                </a>
                <a href="https://wa.me/94776605054" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold rounded-xl bg-green-600 text-white hover:bg-green-700 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fab fa-whatsapp mr-3"></i>
                    Book Surf Lessons
                </a>
            </div>

            <!-- Quick Facts -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-4xl mx-auto">
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-cyan-300 mb-1">Horseshoe</div>
                    <div class="text-sm text-white/80">Perfect Bay</div>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-cyan-300 mb-1">Beginner</div>
                    <div class="text-sm text-white/80">Friendly Surf</div>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-cyan-300 mb-1">Year Round</div>
                    <div class="text-sm text-white/80">Beach Paradise</div>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-cyan-300 mb-1">Café Culture</div>
                    <div class="text-sm text-white/80">& Yoga Vibes</div>
                </div>
            </div>
        </div>

        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-center scroll-animate">
            <div class="flex flex-col items-center text-white/80">
                <span class="text-sm mb-2">Dive Into Paradise</span>
                <div class="animate-bounce">
                    <i class="fas fa-chevron-down text-xl"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Hiriketiya belongs on your itinerary -->
    <section class="py-16 lg:py-24 bg-gradient-to-br from-cyan-50 to-blue-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-animate">
                <p class="text-cyan-600 uppercase tracking-widest text-sm font-semibold mb-4">Beach Paradise</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">Why Hiriketiya Belongs on Your Itinerary</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    A perfect horseshoe bay where easy beach days meet lively cafés, sunrise yoga, and waves for every level.
                </p>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                
                <!-- Postcard-Perfect Bay -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl wave-animation">
                    <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-heart text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Postcard-Perfect Bay</h3>
                    <p class="text-gray-600 leading-relaxed">
                        A snug crescent of sand with calm, swimmable water on many days and a natural reef framing the color.
                    </p>
                </div>

                <!-- Surf for Everyone -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl wave-animation">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-water text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Surf for Everyone</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Soft, learner-friendly peaks in the bay; longer rides for intermediates near the point when the swell lines up.
                    </p>
                </div>

                <!-- Café Culture & Yoga -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl wave-animation">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-coffee text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Café Culture & Yoga</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Small-batch coffee, tropical bowls, sunset mocktails, and studios offering daily classes a short stroll from the sand.
                    </p>
                </div>

                <!-- Base for Day Trips -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl wave-animation">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-route text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Base for Day Trips</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Minutes to quiet coves, blowholes, island lookouts, and turtle-inhabited reefs along the south coast.
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
                <p class="text-cyan-600 uppercase tracking-widest text-sm font-semibold mb-4">Beach Zones</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">Must-See Highlights</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    From gentle surf breaks to coral snorkeling spots, discover the diverse zones of this horseshoe paradise.
                </p>
            </div>

            <!-- Highlights Timeline -->
            <div class="relative">
                
                <!-- Main Bay -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-swimming-pool text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Main Bay (Center)</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Sand-bottom zone ideal for beginners and relaxed swims when conditions are right. Perfect protected waters for learning.
                        </p>
                    </div>
                </div>

                <!-- Left Point -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-water text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Left Point (West Side)</h3>
                        <p class="text-gray-600 leading-relaxed">
                            A playful left-hander for confident beginners moving up and intermediates (reef awareness needed). Consistent waves when swell arrives.
                        </p>
                    </div>
                </div>

                <!-- Coral Edges -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-fish text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Coral Edges (East Side)</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Clear water for snorkeling on calm mornings—go with a guide and be mindful of currents. Vibrant marine life awaits.
                        </p>
                    </div>
                </div>

                <!-- Sunrise & Sunset Light -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-sun text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Sunrise & Sunset Light</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Pastel skies over palms; brilliant for photos along the ramped path above the beach. Golden hour magic daily.
                        </p>
                    </div>
                </div>

                <!-- Nearby Gems -->
                <div class="timeline-item flex items-start scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-emerald-500 to-green-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-gem text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Nearby Gems</h3>
                        <div class="text-gray-600 leading-relaxed space-y-2">
                            <p><strong>Nilwella Blue Beach Island:</strong> Tiny islet linked by a sandbar with gorgeous viewpoints.</p>
                            <p><strong>Hummanaya Blowhole:</strong> Natural sea geyser—best on swellier days.</p>
                            <p><strong>Dikwella Long Beach:</strong> Wide sands and mellow shore for a lazy afternoon.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Ways to Experience Hiri -->
    <section class="py-16 lg:py-24 mirror-effect text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="scroll-animate">
                <div class="mb-8">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-md rounded-full mb-6">
                        <i class="fas fa-umbrella-beach text-3xl"></i>
                    </div>
                </div>
                <h2 class="text-3xl lg:text-4xl font-bold mb-8">Ways to Experience Hiri</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                    <div class="glass-morphism rounded-2xl p-6">
                        <h3 class="text-xl font-bold mb-4">Learn to Surf</h3>
                        <p class="text-cyan-100 leading-relaxed">
                            Book private or small-group lessons with ISA-trained instructors; boards and rash vests available on the beach.
                        </p>
                    </div>
                    <div class="glass-morphism rounded-2xl p-6">
                        <h3 class="text-xl font-bold mb-4">Cruisy Longboard Session</h3>
                        <p class="text-cyan-100 leading-relaxed">
                            Aim for early glass-off in the bay; go long when tide and swell align perfectly for epic rides.
                        </p>
                    </div>
                    <div class="glass-morphism rounded-2xl p-6">
                        <h3 class="text-xl font-bold mb-4">Yoga & Breakfast</h3>
                        <p class="text-cyan-100 leading-relaxed">
                            Dawn class at a local studio, then coconut pancake stack and Ceylon tea at a garden café.
                        </p>
                    </div>
                    <div class="glass-morphism rounded-2xl p-6">
                        <h3 class="text-xl font-bold mb-4">Snorkel & Chill</h3>
                        <p class="text-cyan-100 leading-relaxed">
                            On calm mornings, follow a local guide along the rockier edge; nap under the palms after.
                        </p>
                    </div>
                </div>

                <div class="glass-morphism rounded-2xl p-8">
                    <h3 class="text-2xl font-bold mb-4">South-Coast Sampler</h3>
                    <p class="text-cyan-100 mb-6">Add Nilwella island viewpoints, the Blowhole, and a secret cove swim to your day's adventures.</p>
                    <a href="https://wa.me/94776605054" class="inline-flex items-center bg-white text-cyan-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <i class="fab fa-whatsapp mr-3"></i>
                        Plan Your Beach Experience
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Best Time & Practical Tips -->
    <section class="py-16 lg:py-24 bg-gradient-to-br from-cyan-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                
                <!-- Best Time to Visit -->
                <div class="scroll-animate">
                    <div class="bg-white rounded-2xl p-8 shadow-lg h-full">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-calendar-alt text-white text-lg"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Best Time to Visit</h3>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="border-l-4 border-cyan-500 pl-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Year-Round Paradise</h4>
                                <p class="text-gray-600">Works year-round with different advantages each season for various activities.</p>
                            </div>
                            
                            <div class="border-l-4 border-blue-500 pl-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Nov-Apr: Sunny Season</h4>
                                <p class="text-gray-600">Typically sunniest and most beginner-friendly; perfect for learning to surf and beach relaxation.</p>
                            </div>
                            
                            <div class="border-l-4 border-indigo-500 pl-4">
                                <h4 class="font-semibold text-gray-900 mb-2">May-Sep: Surf Season</h4>
                                <p class="text-gray-600">More swell and occasional showers—great for surfers, less consistent for swimming but epic waves.</p>
                            </div>

                            <div class="border-l-4 border-teal-500 pl-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Best Times of Day</h4>
                                <p class="text-gray-600">Early morning for glassy surf and soft light; late afternoon for golden-hour swims and sunset watching.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Practical Information -->
                <div class="scroll-animate">
                    <div class="bg-white rounded-2xl p-8 shadow-lg h-full">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-info-circle text-white text-lg"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Practical Information</h3>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <i class="fas fa-shield-alt text-cyan-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Water & Safety</h4>
                                    <p class="text-gray-600 text-sm">Conditions change with tide/swell. Swim inside the bay, watch for boards, avoid reefy edges if unsure.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-surfing text-cyan-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Gear & Rentals</h4>
                                    <p class="text-gray-600 text-sm">Boards (soft tops to longboards), leashes, fins rent easily on the beach; reef booties help near rock entries.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-backpack text-cyan-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">What to Bring</h4>
                                    <p class="text-gray-600 text-sm">Reef-safe sunscreen, hat, reusable bottle, light cover-up for cafés/temples, small cash for stalls.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-heart text-cyan-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Etiquette</h4>
                                    <p class="text-gray-600 text-sm">Respect local surfers, don't drop in, queue fairly, keep the lineup friendly—Hiri's vibe depends on it!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Getting There & Nearby -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-animate">
                <p class="text-cyan-600 uppercase tracking-widest text-sm font-semibold mb-4">Travel & Explore</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">Getting There & Pair It With</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Easy access from major south coast destinations and perfect combinations for your Sri Lankan coastal adventure.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                
                <!-- Getting There -->
                <div class="scroll-animate">
                    <div class="bg-gradient-to-br from-cyan-50 to-blue-50 rounded-2xl p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <i class="fas fa-route text-cyan-600 mr-3"></i>
                            How to Get There
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-cyan-500 rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                    <span class="text-white text-sm font-bold">45</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">From Mirissa/Weligama</h4>
                                    <p class="text-gray-600 text-sm">45-60 minutes by scenic coastal road</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                    <span class="text-white text-sm font-bold">90</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">From Galle Fort</h4>
                                    <p class="text-gray-600 text-sm">1.5-2 hours via E01 + A2</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-indigo-500 rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                    <span class="text-white text-sm font-bold">35</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">From Tangalle</h4>
                                    <p class="text-gray-600 text-sm">30-40 minutes west along the coast</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-8 h-8 bg-teal-500 rounded-full flex items-center justify-center mr-3 mt-1 flex-shrink-0">
                                    <span class="text-white text-sm font-bold">3h</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">From Ella (highlands)</h4>
                                    <p class="text-gray-600 text-sm">3-4 hours hill-to-coast journey</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 p-4 bg-white rounded-xl">
                            <p class="text-cyan-700 text-sm flex items-center">
                                <i class="fas fa-car text-cyan-600 mr-2"></i>
                                Private transfers with Wi-Fi and cool-box water are easily arranged.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Pair It With -->
                <div class="scroll-animate">
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <i class="fas fa-map-marked-alt text-blue-600 mr-3"></i>
                            Pair It With
                        </h3>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-whale text-white text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Mirissa</h4>
                                    <p class="text-gray-600 text-sm">Seasonal whale cruises and soft-sand beaches for the complete coastal experience.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-gradient-to-br from-teal-500 to-green-500 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-umbrella-beach text-white text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Tangalle Bays</h4>
                                    <p class="text-gray-600 text-sm">Quieter coves and palm-fringed hideaways for secluded beach bliss.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-gradient-to-br from-orange-500 to-red-500 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-fort-awesome text-white text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Galle Fort</h4>
                                    <p class="text-gray-600 text-sm">Heritage lanes, boutiques, and sunset ramparts for cultural contrast.</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-emerald-500 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-paw text-white text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Udawalawe / Yala</h4>
                                    <p class="text-gray-600 text-sm">Trade waves for wildlife on an epic safari day adventure.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 lg:py-24 bg-gradient-to-br from-cyan-50 to-blue-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-animate">
                <p class="text-cyan-600 uppercase tracking-widest text-sm font-semibold mb-4">Questions?</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">Frequently Asked Questions</h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Everything you need to know for your Hiriketiya beach adventure.
                </p>
            </div>

            <!-- FAQ Items -->
            <div class="space-y-6">
                
                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">Is Hiriketiya good for families?</h3>
                            <i class="fas fa-chevron-down text-cyan-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            Yes—shaded edges, calm swims on many days, and lots of short-eats nearby. We'll advise the best tide windows for kids and family-friendly activities.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">Do I need surf experience?</h3>
                            <i class="fas fa-chevron-down text-cyan-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            No. It's one of the island's friendliest bays to learn. We'll point you to the right coach and board size for your skill level.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">Can I snorkel with turtles here?</h3>
                            <i class="fas fa-chevron-down text-cyan-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            Sometimes—on calm mornings near reefy edges. For more reliable encounters, we'll recommend nearby turtle spots with better visibility.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">Are there ATMs and shops?</h3>
                            <i class="fas fa-chevron-down text-cyan-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            ATMs are a short ride away in Dikwella; beach lanes have mini-marts and plenty of cafés for all your needs.
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
                <p class="text-xl text-cyan-100 mb-12 leading-relaxed">
                    We'll recommend boutique stays, transfers, surf lessons, yoga passes, board rentals, snorkel guides, and nearby day trips—all tuned to your pace so you can simply enjoy the bay.
                </p>
                
                <div class="glass-morphism rounded-2xl p-8">
                    <h3 class="text-2xl font-bold mb-4">Ready to Surf & Chill at Hiriketiya?</h3>
                    <p class="text-cyan-100 mb-6">Let us craft your perfect beach escape with surf lessons, yoga sessions, and island hopping adventures.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://wa.me/94776605054" class="inline-flex items-center bg-white text-cyan-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <i class="fab fa-whatsapp mr-3"></i>
                            Plan Your Beach Getaway
                        </a>
                        <a href="{{ route('contact', app()->getLocale()) }}" class="inline-flex items-center bg-green-600 text-white px-8 py-4 rounded-xl font-semibold hover:bg-green-700 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-envelope mr-3"></i>
                            Get Custom Beach Guide
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
                    <h3 class="text-xl font-bold mb-4 text-cyan-400">COCO Island Holidays</h3>
                    <p class="text-gray-300 mb-4 leading-relaxed">
                        Your trusted partner for authentic Sri Lankan adventures. Creating unforgettable memories with local expertise and personalized service.
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/coco.island.holidays" target="_blank" class="text-cyan-400 hover:text-cyan-600 transition-colors duration-300">
                            <i class="fab fa-facebook-f text-lg"></i>
                        </a>
                        <a href="https://www.instagram.com/coco.island.holidays" target="_blank" class="text-cyan-400 hover:text-cyan-600 transition-colors duration-300">
                            <i class="fab fa-instagram text-lg"></i>
                        </a>
                        <a href="https://www.tiktok.com/@coco.island.holidays" target="_blank" class="text-cyan-400 hover:text-cyan-600 transition-colors duration-300">
                            <i class="fab fa-tiktok text-lg"></i>
                        </a>
                        <a href="https://wa.me/94776605054" target="_blank" class="text-cyan-400 hover:text-cyan-600 transition-colors duration-300">
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
                    <h4 class="text-lg font-semibold mb-4">Beach Destinations</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Hiriketiya Beach</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Mirissa Whale Watching</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Tangalle Bays</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Galle Fort Heritage</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Weligama Bay</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Get In Touch</h4>
                    <div class="space-y-3 text-gray-300">
                        <p class="flex items-center">
                            <i class="fas fa-phone mr-3 text-cyan-400"></i>
                            <a href="tel:+94776605054" class="hover:text-white transition-colors">+94 77 660 5054</a>
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-envelope mr-3 text-cyan-400"></i>
                            <a href="mailto:info@cocoislandholidays.com" class="hover:text-white transition-colors">info@cocoislandholidays.com</a>
                        </p>
                        <p class="flex items-start">
                            <i class="fas fa-map-marker-alt mr-3 text-cyan-400 mt-1"></i>
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
