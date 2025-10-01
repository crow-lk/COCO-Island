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
    <title>Polonnaruwa - Sri Lanka's Medieval Garden City | COCO Island Holidays</title>
    <meta name="description" content="Stone-carved Buddhas, lotus-ringed tanks, and a royal city planned with elegant symmetry. Experience Polonnaruwa - UNESCO World Heritage medieval capital.">
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
        background-image: url('https://wherethesoulswander.com/wp-content/uploads/2019/12/things-to-do-in-Polonnaruwa-1.jpg');
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
                    <i class="fas fa-university text-3xl text-white"></i>
                </div>
            </div>
            <h1 class="text-4xl lg:text-7xl font-bold mb-6 leading-tight">
                Polonnaruwa <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 to-yellow-300">Medieval Garden City</span>
            </h1>
            <p class="text-xl lg:text-2xl mb-8 text-white/90 leading-relaxed max-w-4xl mx-auto">
                Stone-carved Buddhas, lotus-ringed tanks, and a royal city planned with elegant symmetry. UNESCO World Heritage medieval capital of Sri Lanka.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                <a href="{{ route('contact', app()->getLocale()) }}" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold rounded-xl bg-white text-primary-600 hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-calendar-check mr-3"></i>
                    Plan Your Visit
                </a>
                <a href="https://wa.me/94776605054" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold rounded-xl bg-green-600 text-white hover:bg-green-700 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fab fa-whatsapp mr-3"></i>
                    Contact Heritage Guide
                </a>
            </div>

            <!-- Quick Facts -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-4xl mx-auto">
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-amber-300 mb-1">UNESCO</div>
                    <div class="text-sm text-white/80">World Heritage</div>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-amber-300 mb-1">11th-13th C</div>
                    <div class="text-sm text-white/80">Medieval Capital</div>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-amber-300 mb-1">Garden City</div>
                    <div class="text-sm text-white/80">Royal Planning</div>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-amber-300 mb-1">Bicycle</div>
                    <div class="text-sm text-white/80">Friendly Tours</div>
                </div>
            </div>
        </div>

        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-center scroll-animate">
            <div class="flex flex-col items-center text-white/80">
                <span class="text-sm mb-2">Discover Ancient City</span>
                <div class="animate-bounce">
                    <i class="fas fa-chevron-down text-xl"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Polonnaruwa belongs on your itinerary -->
    <section class="py-16 lg:py-24 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-animate">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">Ancient Capital</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">Why Polonnaruwa Belongs on Your Itinerary</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    A showcase of hydraulic genius and refined architecture set across leafy, wildlife-friendly grounds.
                </p>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                
                <!-- A Complete Ancient City -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-city text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">A Complete Ancient City</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Palaces, audience halls, monasteries, image houses, bathing pools, and royal parks—set across leafy, wildlife-friendly grounds.
                    </p>
                </div>

                <!-- Masterpieces in Stone -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl">
                    <div class="w-16 h-16 bg-gradient-to-br from-stone-500 to-gray-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-praying-hands text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Masterpieces in Stone</h3>
                    <p class="text-gray-600 leading-relaxed">
                        The Gal Vihara quartet of Buddha images is among the island's finest rock sculpture masterpieces.
                    </p>
                </div>

                <!-- Water & Wellness -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-water text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Water & Wellness</h3>
                    <p class="text-gray-600 leading-relaxed">
                        The city's lifeblood—Parakrama Samudraya ("Sea of Parakrama")—still shimmers beside the ruins.
                    </p>
                </div>

                <!-- Easy to Enjoy -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-bicycle text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Easy to Enjoy</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Flat terrain, shady trees, and well-marked sites invite gentle cycling and unhurried photography.
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
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">Archaeological Wonders</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">Must-See Highlights</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    From royal palaces to sacred shrines, discover the architectural gems of this medieval capital.
                </p>
            </div>

            <!-- Highlights Timeline -->
            <div class="relative">
                
                <!-- Royal Palace -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-crown text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Royal Palace & Audience Hall</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Tall brick walls and lion-flanked steps where kings held court. Experience the grandeur of Parakramabahu I's royal complex.
                        </p>
                    </div>
                </div>

                <!-- The Quadrangle -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-amber-500 to-orange-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-square text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">The Quadrangle (Dalada Maluwa)</h3>
                        <p class="text-gray-600 leading-relaxed">
                            A compact treasure trove—Vatadage (circular relic house), Hatadage and Atadage shrines, Gal Potha (Stone Book), and Nissanka Latha Mandapaya with its lily-stem pillars.
                        </p>
                    </div>
                </div>

                <!-- Gal Vihara -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-stone-500 to-gray-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-praying-hands text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Gal Vihara</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Four sublime Buddha statues carved into a single granite outcrop—seated, standing, and the famous reclining figure. A masterpiece of rock sculpture.
                        </p>
                    </div>
                </div>

                <!-- Lankatilaka Image House -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-red-500 to-rose-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-building text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Lankatilaka Image House</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Soaring corridor leading to a colossal standing Buddha framed by towering brick walls. An architectural marvel of ancient engineering.
                        </p>
                    </div>
                </div>

                <!-- Stupas -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-yellow-500 to-amber-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-chess-rook text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Rankoth Vehera & Kiri Vehera</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Elegant stupas rising above tree canopy—great for perspective shots and understanding Buddhist architecture.
                        </p>
                    </div>
                </div>

                <!-- Water Features -->
                <div class="timeline-item flex items-start scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-swimming-pool text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Lotus Pond & Royal Bath</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Beautiful geometric stoneworks that show off royal leisure and engineering—Nelum Pokuna and Kumara Pokuna demonstrate ancient hydraulic mastery.
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
                        <i class="fas fa-route text-3xl"></i>
                    </div>
                </div>
                <h2 class="text-3xl lg:text-4xl font-bold mb-8">Ways to Experience Polonnaruwa</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                    <div class="glass-morphism rounded-2xl p-6">
                        <h3 class="text-xl font-bold mb-4">Cycle the Sacred City</h3>
                        <p class="text-primary-100 leading-relaxed">
                            Quality bikes, helmets, cool-box, and a route that strings the highlights together with shady rest stops. Most popular way to explore.
                        </p>
                    </div>
                    <div class="glass-morphism rounded-2xl p-6">
                        <h3 class="text-xl font-bold mb-4">Archaeology Walk with Expert Guide</h3>
                        <p class="text-primary-100 leading-relaxed">
                            Decode moonstones, guardstones, and city planning—from royal ritual to everyday monastic life with licensed guides.
                        </p>
                    </div>
                    <div class="glass-morphism rounded-2xl p-6">
                        <h3 class="text-xl font-bold mb-4">Golden-Hour Photography Loop</h3>
                        <p class="text-primary-100 leading-relaxed">
                            Soft light over stupas and ponds; finish at Parakrama Samudraya's lakeside for spectacular sunset shots.
                        </p>
                    </div>
                    <div class="glass-morphism rounded-2xl p-6">
                        <h3 class="text-xl font-bold mb-4">Family Adventure</h3>
                        <p class="text-primary-100 leading-relaxed">
                            Shorter segments with a "stamp card" (find the lion, the circular shrine, the stone book) to keep kids engaged and learning.
                        </p>
                    </div>
                </div>

                <div class="glass-morphism rounded-2xl p-8">
                    <h3 class="text-2xl font-bold mb-4">Experience Medieval Grandeur</h3>
                    <p class="text-primary-100 mb-6">Explore Sri Lanka's most beautiful open-air museum with expert guides who bring ancient stories to life.</p>
                    <a href="https://wa.me/94776605054" class="inline-flex items-center bg-white text-primary-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <i class="fab fa-whatsapp mr-3"></i>
                        Plan Your Ancient City Tour
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
                                <p class="text-gray-600">Early morning for cool air and quiet photos; late afternoon for golden light over ancient structures.</p>
                            </div>
                            
                            <div class="border-l-4 border-orange-500 pl-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Season</h4>
                                <p class="text-gray-600">Open year-round; brief showers freshen the grounds. We'll plan breaks at shady tanks during warmer months.</p>
                            </div>
                            
                            <div class="border-l-4 border-blue-500 pl-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Getting There</h4>
                                <p class="text-gray-600">1.5-2 hours from Sigiriya/Dambulla. Perfect Cultural Triangle combo with private transfers available.</p>
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
                                <i class="fas fa-ticket-alt text-primary-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Tickets</h4>
                                    <p class="text-gray-600 text-sm">Buy at the museum/entrance; keep your stub for multiple zones within the archaeological park.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-tshirt text-primary-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Dress & Etiquette</h4>
                                    <p class="text-gray-600 text-sm">Shoulders/knees covered in active shrine areas; remove shoes/hats where signed (socks help on hot paving).</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-bicycle text-primary-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Getting Around</h4>
                                    <p class="text-gray-600 text-sm">Bicycles or tuk-tuk loops work best; distances are moderate but sites are spread out across the ancient city.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-water text-primary-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Essentials</h4>
                                    <p class="text-gray-600 text-sm">Water, hat, sunscreen, light scarf for dust, and comfy walking shoes/sandals for temple visits.</p>
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
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">Cultural Triangle</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">Pair it with</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Extend your cultural journey with these complementary ancient sites and wildlife experiences.
                </p>
            </div>

            <!-- Attractions Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <!-- Minneriya/Kaudulla Safaris -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-green-500 to-emerald-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-bold text-lg">Minneriya Safari</h4>
                        </div>
                        <i class="fas fa-elephant text-white text-4xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Seasonal elephant gatherings on open grasslands near ancient reservoirs.
                        </p>
                    </div>
                </div>

                <!-- Sigiriya -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-orange-500 to-red-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-bold text-lg">Sigiriya Rock</h4>
                        </div>
                        <i class="fas fa-mountain text-white text-4xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Frescoes, water gardens, and summit palace views from the Lion Rock fortress.
                        </p>
                    </div>
                </div>

                <!-- Dambulla -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-purple-500 to-indigo-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-bold text-lg">Dambulla Caves</h4>
                        </div>
                        <i class="fas fa-praying-hands text-white text-4xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Cave murals and gilded Buddhas in ancient rock temple complex.
                        </p>
                    </div>
                </div>

                <!-- Ritigala -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-teal-500 to-cyan-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-bold text-lg">Ritigala Forest</h4>
                        </div>
                        <i class="fas fa-tree text-white text-4xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Mossy, meditative ruins amid cool forest monastery complex.
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
                    Our thoughtfully planned itinerary designed for the perfect Polonnaruwa archaeological experience.
                </p>
            </div>

            <!-- Timeline Schedule -->
            <div class="bg-white rounded-2xl p-8 shadow-lg scroll-animate">
                <div class="space-y-6">
                    
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-20 text-primary-600 font-bold text-lg">07:30</div>
                        <div class="flex-grow">
                            <h4 class="font-semibold text-gray-900 mb-1">Museum & Preparation</h4>
                            <p class="text-gray-600">Ticket & museum primer; collect bikes and route briefing.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-20 text-primary-600 font-bold text-lg">08:00</div>
                        <div class="flex-grow">
                            <h4 class="font-semibold text-gray-900 mb-1">Royal Complex</h4>
                            <p class="text-gray-600">Royal Palace → Audience Hall → Quadrangle highlights exploration.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-20 text-primary-600 font-bold text-lg">10:30</div>
                        <div class="flex-grow">
                            <h4 class="font-semibold text-gray-900 mb-1">Sacred Stupas</h4>
                            <p class="text-gray-600">Cycle to Rankoth Vehera & Kiri Vehera; shaded fruit stop under ancient trees.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-20 text-primary-600 font-bold text-lg">12:30</div>
                        <div class="flex-grow">
                            <h4 class="font-semibold text-gray-900 mb-1">Lakeside Lunch</h4>
                            <p class="text-gray-600">Lunch break by Parakrama Samudraya with stunning lake views.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-20 text-primary-600 font-bold text-lg">14:30</div>
                        <div class="flex-grow">
                            <h4 class="font-semibold text-gray-900 mb-1">Image Houses</h4>
                            <p class="text-gray-600">Lankatilaka and nearby image houses with towering Buddha statues.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-20 text-primary-600 font-bold text-lg">16:00</div>
                        <div class="flex-grow">
                            <h4 class="font-semibold text-gray-900 mb-1">Gal Vihara Finale</h4>
                            <p class="text-gray-600">Gal Vihara in soft light; quiet reflection to end the perfect day.</p>
                        </div>
                    </div>

                </div>

                <div class="mt-8 p-6 bg-gradient-to-r from-primary-50 to-orange-50 rounded-xl border border-primary-100">
                    <p class="text-center text-gray-700">
                        <i class="fas fa-info-circle text-primary-600 mr-2"></i>
                        <strong>Prefer a slower rhythm?</strong> Split across two half-days, adding Pothgul Vihara and a lakeside sunset.
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
                    Everything you need to know for your Polonnaruwa archaeological adventure.
                </p>
            </div>

            <!-- FAQ Items -->
            <div class="space-y-6">
                
                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">Is Polonnaruwa good for kids or seniors?</h3>
                            <i class="fas fa-chevron-down text-primary-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            Yes—flat routes, frequent shade, and flexible transport. We tailor distances to comfort levels and can switch between cycling and tuk-tuks anytime.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">Do I need to be very fit to cycle?</h3>
                            <i class="fas fa-chevron-down text-primary-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            No. The terrain is gentle and flat; we can switch to tuk-tuks anytime. Our quality bikes make exploring comfortable for all fitness levels.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">Can I fly a drone?</h3>
                            <i class="fas fa-chevron-down text-primary-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            Restrictions apply at archaeological sites; ask us to check current rules and obtain permits if possible for your specific dates and requirements.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">Are there bathrooms and cafés?</h3>
                            <i class="fas fa-chevron-down text-primary-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            Facilities exist at key points throughout the archaeological park; we plan stops accordingly and provide refreshments during tours.
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
                    We arrange tickets, bikes or private tuk-tuks, licensed guides, cool-box water, and photo-friendly pacing—and we'll weave in a Minneriya elephant drive or a Sigiriya sunrise the next day.
                </p>
                
                <div class="glass-morphism rounded-2xl p-8">
                    <h3 class="text-2xl font-bold mb-4">Ready to Explore Ancient Polonnaruwa?</h3>
                    <p class="text-primary-100 mb-6">Tell us what you love (architecture, photography, wildlife, slow travel), and we'll craft your perfect Polonnaruwa day.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://wa.me/94776605054" class="inline-flex items-center bg-white text-primary-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <i class="fab fa-whatsapp mr-3"></i>
                            Plan Your Ancient City Tour
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
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Galle Fort Colonial Heritage</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Polonnaruwa Ancient City</a></li>
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
