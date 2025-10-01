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
    <title>Anuradhapura - The Eternal Sacred City | COCO Island Holidays</title>
    <meta name="description" content="Step into Sri Lanka's oldest royal capital where living faith, colossal stupas, and serene lotus-filled tanks define a timeless landscape. UNESCO World Heritage City.">
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
        background-image: url('https://lakpura.com/cdn/shop/files/LK95060000-01-E.jpg?v=1690797652&width=3840');
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
                    <i class="fas fa-dharmachakra text-3xl text-white"></i>
                </div>
            </div>
            <h1 class="text-4xl lg:text-7xl font-bold mb-6 leading-tight">
                Anuradhapura <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-orange-300">Sacred City</span>
            </h1>
            <p class="text-xl lg:text-2xl mb-8 text-white/90 leading-relaxed max-w-4xl mx-auto">
                Step into Sri Lanka's oldest royal capital, where living faith, colossal stupas, and serene lotus-filled tanks define a timeless landscape.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                <a href="#book-now" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold rounded-xl bg-white text-primary-600 hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-calendar-check mr-3"></i>
                    Plan Your Pilgrimage
                </a>
                <a href="https://wa.me/94776605054" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold rounded-xl bg-green-600 text-white hover:bg-green-700 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fab fa-whatsapp mr-3"></i>
                    Contact Guide
                </a>
            </div>

            <!-- Quick Facts -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-4xl mx-auto">
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-yellow-300 mb-1">3rd Century BC</div>
                    <div class="text-sm text-white/80">Ancient Royal Capital</div>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-yellow-300 mb-1">UNESCO</div>
                    <div class="text-sm text-white/80">World Heritage City</div>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-yellow-300 mb-1">2,500+</div>
                    <div class="text-sm text-white/80">Years of History</div>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-yellow-300 mb-1">Living</div>
                    <div class="text-sm text-white/80">Buddhist Heritage</div>
                </div>
            </div>
        </div>

        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-center scroll-animate">
            <div class="flex flex-col items-center text-white/80">
                <span class="text-sm mb-2">Discover Sacred Heritage</span>
                <div class="animate-bounce">
                    <i class="fas fa-chevron-down text-xl"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Anuradhapura belongs on your itinerary -->
    <section class="py-16 lg:py-24 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-animate">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">Sacred Heritage</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">Why Anuradhapura Belongs on Your Itinerary</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    A UNESCO World Heritage City and one of the world's longest continuously inhabited centers of Buddhism.
                </p>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                
                <!-- Living Heritage -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-heart text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Living Heritage</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Not a "ruin park," but a sacred city still alive—monks chant, devotees offer flowers, and incense curls beneath Bo trees.
                    </p>
                </div>

                <!-- Monumental Architecture -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-monument text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Monumental Architecture</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Some of the largest brick structures of the ancient world rise here—dazzling stupas and vast monastic complexes.
                    </p>
                </div>

                <!-- Ingenious Hydrology -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-tint text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Ingenious Hydrology</h3>
                    <p class="text-gray-600 leading-relaxed">
                        A network of man-made lakes (wewas) like Tissa Wewa and Nuwara Wewa created a garden-city in the dry zone.
                    </p>
                </div>

                <!-- Sacred Atmosphere -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-leaf text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Sacred Atmosphere</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Sunrise over misty tanks, evening lamps around shrines, and quiet lanes perfect for cycling make it unforgettable.
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
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">Sacred Sites</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">Must-See Highlights</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Explore ancient monuments, sacred trees, and monumental architecture that tell the story of Sri Lankan Buddhism.
                </p>
            </div>

            <!-- Highlights Timeline -->
            <div class="relative">
                
                <!-- Jaya Sri Maha Bodhi -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-tree text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Jaya Sri Maha Bodhi (Sri Maha Bodhi Tree)</h3>
                        <p class="text-gray-600 leading-relaxed">
                            A sacred fig tree said to descend from the Bodhi at Bodh Gaya—pilgrims circle with lotus offerings; visit softly at dawn or dusk.
                        </p>
                    </div>
                </div>

                <!-- Ruwanwelisaya -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-white to-gray-300 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-circle text-gray-600 text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Ruwanwelisaya</h3>
                        <p class="text-gray-600 leading-relaxed">
                            A luminous white stupa with a ring of stone elephants; the symmetry and sense of scale are breathtaking.
                        </p>
                    </div>
                </div>

                <!-- Jetavanaramaya -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-red-500 to-red-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-mountain text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Jetavanaramaya</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Once among the tallest ancient monuments; its russet dome and brickwork radiate power and serenity.
                        </p>
                    </div>
                </div>

                <!-- Thuparamaya -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-columns text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Thuparamaya</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Considered the island's first stupa; elegant stone pillars hint at ancient vatadage halls.
                        </p>
                    </div>
                </div>

                <!-- Abhayagiri Monastery -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-building text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Abhayagiri Monastery</h3>
                        <p class="text-gray-600 leading-relaxed">
                            A sprawling complex of shrines, moonstones, guardstones, and museums—ideal for slow exploration.
                        </p>
                    </div>
                </div>

                <!-- Kuttam Pokuna -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-cyan-500 to-teal-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-swimming-pool text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Kuttam Pokuna (Twin Ponds)</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Pristine ritual baths with refined stone engineering and perfect proportions.
                        </p>
                    </div>
                </div>

                <!-- Isurumuniya -->
                <div class="timeline-item flex items-start scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-pink-500 to-rose-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-heart text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Isurumuniya & Mihintale</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Rock-hewn sanctuary famed for the "Isurumuniya Lovers" carving with lovely water garden setting. Nearby Mihintale is the cradle of Sri Lankan Buddhism.
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
                        <i class="fas fa-bicycle text-3xl"></i>
                    </div>
                </div>
                <h2 class="text-3xl lg:text-4xl font-bold mb-8">Ways to Experience the City</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                    <div class="glass-morphism rounded-2xl p-6">
                        <h3 class="text-xl font-bold mb-4">Cycle the Sacred City</h3>
                        <p class="text-primary-100 leading-relaxed">
                            The sites are spread out—cycling keeps you close to the ambience. We'll arrange good bikes, helmets, and a route with shady breaks.
                        </p>
                    </div>
                    <div class="glass-morphism rounded-2xl p-6">
                        <h3 class="text-xl font-bold mb-4">Dawn & Dusk Rituals</h3>
                        <p class="text-primary-100 leading-relaxed">
                            Join devotees for quiet puja times when light is soft, stones are cool, and birdlife is active.
                        </p>
                    </div>
                    <div class="glass-morphism rounded-2xl p-6">
                        <h3 class="text-xl font-bold mb-4">Curated Story Walk</h3>
                        <p class="text-primary-100 leading-relaxed">
                            With a licensed guide, connect inscriptions, moonstones, and waterworks into a single narrative of kings, monks, and engineers.
                        </p>
                    </div>
                    <div class="glass-morphism rounded-2xl p-6">
                        <h3 class="text-xl font-bold mb-4">Lotus Tank Sunset</h3>
                        <p class="text-primary-100 leading-relaxed">
                            Unwind by Tissa Wewa as the sky turns rose and stupas glow across the water.
                        </p>
                    </div>
                </div>

                <div class="glass-morphism rounded-2xl p-8">
                    <h3 class="text-2xl font-bold mb-4">Experience Living Buddhism</h3>
                    <p class="text-primary-100 mb-6">Join us on a journey through 2,500 years of continuous Buddhist heritage, where ancient traditions remain vibrantly alive.</p>
                    <a href="https://wa.me/94776605054" class="inline-flex items-center bg-white text-primary-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <i class="fab fa-whatsapp mr-3"></i>
                        Plan Your Visit
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
                                <p class="text-gray-600">Early morning and late afternoon offer cooler temperatures and the most atmospheric light.</p>
                            </div>
                            
                            <div class="border-l-4 border-orange-500 pl-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Season</h4>
                                <p class="text-gray-600">Anuradhapura's dry zone climate is warm year-round; brief rains refresh the city—your experience remains superb in any season.</p>
                            </div>
                            
                            <div class="border-l-4 border-green-500 pl-4">
                                <h4 class="font-semibold text-gray-900 mb-2">How to Get There</h4>
                                <p class="text-gray-600">From Colombo: ~4–5 hours by road. From Sigiriya/Dambulla: ~1.5–2.5 hours—perfect Cultural Triangle pairing.</p>
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
                                    <h4 class="font-semibold text-gray-900 mb-1">Dress & Etiquette</h4>
                                    <p class="text-gray-600 text-sm">Shoulders and knees covered; remove shoes and hats at shrine precincts (socks help on hot paving).</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-ticket-alt text-primary-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Tickets & Access</h4>
                                    <p class="text-gray-600 text-sm">The Sacred City requires a cultural site ticket; carry it between zones. Museums may have separate small fees.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-bicycle text-primary-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Getting Around</h4>
                                    <p class="text-gray-600 text-sm">Cycling, tuk-tuk loops, or air-conditioned van for a relaxed multi-site circuit.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-camera text-primary-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Photography</h4>
                                    <p class="text-gray-600 text-sm">Be discreet around worshippers; drones need prior permission.</p>
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
                    Extend your cultural journey with these complementary destinations.
                </p>
            </div>

            <!-- Attractions Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <!-- Wilpattu National Park -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-green-500 to-emerald-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-bold text-lg">Wilpattu National Park</h4>
                        </div>
                        <i class="fas fa-paw text-white text-4xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Sri Lanka's largest national park—sandy "villus," quiet game drives, abundant birdlife.
                        </p>
                    </div>
                </div>

                <!-- Aukana Buddha -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-amber-500 to-orange-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-bold text-lg">Aukana Buddha</h4>
                        </div>
                        <i class="fas fa-praying-hands text-white text-4xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed">
                            A soaring standing Buddha statue carved from living rock.
                        </p>
                    </div>
                </div>

                <!-- Ritigala Forest Monastery -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-emerald-500 to-teal-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-bold text-lg">Ritigala Forest</h4>
                        </div>
                        <i class="fas fa-tree text-white text-4xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Monastic ruins woven through a cool, misty biosphere.
                        </p>
                    </div>
                </div>

                <!-- Thanthirimale -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-purple-500 to-indigo-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-bold text-lg">Thanthirimale</h4>
                        </div>
                        <i class="fas fa-mountain text-white text-4xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed">
                            A peaceful rock temple with ancient carvings and sunset views.
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
                    Our thoughtfully planned itinerary designed for the perfect Anuradhapura experience.
                </p>
            </div>

            <!-- Timeline Schedule -->
            <div class="bg-white rounded-2xl p-8 shadow-lg scroll-animate">
                <div class="space-y-6">
                    
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-20 text-primary-600 font-bold text-lg">06:30</div>
                        <div class="flex-grow">
                            <h4 class="font-semibold text-gray-900 mb-1">Dawn Offerings</h4>
                            <p class="text-gray-600">Arrive at Jaya Sri Maha Bodhi for dawn offerings and gentle chants.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-20 text-primary-600 font-bold text-lg">07:30</div>
                        <div class="flex-grow">
                            <h4 class="font-semibold text-gray-900 mb-1">Sacred Stupas</h4>
                            <p class="text-gray-600">Walk/drive to Ruwanwelisaya and Thuparamaya (short distances).</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-20 text-primary-600 font-bold text-lg">09:30</div>
                        <div class="flex-grow">
                            <h4 class="font-semibold text-gray-900 mb-1">Monastery Complex</h4>
                            <p class="text-gray-600">Cycle through Abhayagiri precinct: museum, moonstones, Kuttam Pokuna.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-20 text-primary-600 font-bold text-lg">12:30</div>
                        <div class="flex-grow">
                            <h4 class="font-semibold text-gray-900 mb-1">Lakeside Rest</h4>
                            <p class="text-gray-600">Lunch & rest by Nuwara Wewa.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-20 text-primary-600 font-bold text-lg">15:30</div>
                        <div class="flex-grow">
                            <h4 class="font-semibold text-gray-900 mb-1">Ancient Monuments</h4>
                            <p class="text-gray-600">Explore Jetavanaramaya and surrounding monastery ruins.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-20 text-primary-600 font-bold text-lg">17:30</div>
                        <div class="flex-grow">
                            <h4 class="font-semibold text-gray-900 mb-1">Golden Hour</h4>
                            <p class="text-gray-600">Golden-hour stop at Isurumuniya; watch reflections and birds settle.</p>
                        </div>
                    </div>

                </div>

                <div class="mt-8 p-6 bg-gradient-to-r from-primary-50 to-orange-50 rounded-xl border border-primary-100">
                    <p class="text-center text-gray-700">
                        <i class="fas fa-info-circle text-primary-600 mr-2"></i>
                        <strong>Prefer a slower pace?</strong> We'll split this over two days with shaded breaks and a sunset at Mihintale.
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
                    Everything you need to know for your Anuradhapura pilgrimage.
                </p>
            </div>

            <!-- FAQ Items -->
            <div class="space-y-6">
                
                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">Is Anuradhapura suitable for families?</h3>
                            <i class="fas fa-chevron-down text-primary-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            Yes—wide open spaces, gentle cycling, and engaging stories keep kids curious. The flat terrain makes it easy for all ages to explore.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">Do I need to be very fit?</h3>
                            <i class="fas fa-chevron-down text-primary-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            No. Most areas are flat; we tailor transport and walking distances to your comfort. Cycling is optional and leisurely.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">Can I visit temples while on my period?</h3>
                            <i class="fas fa-chevron-down text-primary-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            Local customs vary; some shrines may discourage entry. Our guides advise respectfully and can suggest alternate viewpoints when needed.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">Are there good places to eat?</h3>
                            <i class="fas fa-chevron-down text-primary-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            Absolutely—ask us for trusted local spots serving rice & curry, coconut roti, and fresh fruit juices.
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
                <h2 class="text-3xl lg:text-4xl font-bold mb-6">Experience Living Buddhism</h2>
                <p class="text-xl text-primary-100 mb-12 leading-relaxed">
                    Join us for a respectful journey through 2,500 years of continuous Buddhist heritage. Our local guides ensure authentic experiences while honoring sacred traditions.
                </p>
                
                <div class="glass-morphism rounded-2xl p-8">
                    <h3 class="text-2xl font-bold mb-4">Ready to Explore Anuradhapura?</h3>
                    <p class="text-primary-100 mb-6">Tell us your interests and pace; we'll design a mindful itinerary that honors this sacred city.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://wa.me/94776605054" class="inline-flex items-center bg-white text-primary-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <i class="fab fa-whatsapp mr-3"></i>
                            Plan Your Pilgrimage
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
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Kandy Temple</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Nuwara Eliya</a></li>
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
                    <a href="{{ route('privacy.policy', ['locale' => app()->getLocale()]) }}" class="hover:text-white transition-colors duration-300">Privacy Policy</a>
                    <span>•</span>
                    <a href="{{ route('terms.conditions', ['locale' => app()->getLocale()]) }}" class="hover:text-white transition-colors duration-300">Terms & Conditions</a>
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
