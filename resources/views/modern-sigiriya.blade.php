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
    <title>Sigiriya Rock Fortress | COCO Island Holidays</title>
    <meta name="description" content="Marvel at the 5th-century Sigiriya Rock Fortress - Sri Lanka's most iconic archaeological site. Discover the Lion Rock's royal palace, ancient frescoes, and breathtaking views.">
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
        background-image: url('https://www.ancient-origins.net/sites/default/files/styles/article_image/public/field/image/Sigiriya_0.jpg?itok=MRWiWhBL');
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
    
    .gradient-border {
        background: linear-gradient(135deg, #f97316, #ea580c);
        padding: 2px;
        border-radius: 1rem;
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

        <!-- Content -->
        <div class="relative z-10 text-center max-w-6xl mx-auto px-4 scroll-animate">
            <div class="mb-8">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-md rounded-full mb-6">
                    <i class="fas fa-mountain text-3xl text-white"></i>
                </div>
            </div>
            <h1 class="text-4xl lg:text-7xl font-bold mb-6 leading-tight">
                Sigiriya <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-orange-300">Rock Fortress</span>
            </h1>
            <p class="text-xl lg:text-2xl mb-8 text-white/90 leading-relaxed max-w-4xl mx-auto">
                Marvel at this 5th-century citadel rising 200 meters from the jungle floor. Experience Sri Lanka's most iconic archaeological wonder.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                <a href="#book-now" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold rounded-xl bg-white text-primary-600 hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-calendar-check mr-3"></i>
                    Book Your Visit
                </a>
                <a href="https://wa.me/94776605054" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold rounded-xl bg-green-600 text-white hover:bg-green-700 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fab fa-whatsapp mr-3"></i>
                    Plan with Expert
                </a>
            </div>

            <!-- Quick Facts -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-4xl mx-auto">
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-yellow-300 mb-1">5th Century</div>
                    <div class="text-sm text-white/80">Built by King Kashyapa</div>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-yellow-300 mb-1">200m</div>
                    <div class="text-sm text-white/80">Height Above Ground</div>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-yellow-300 mb-1">UNESCO</div>
                    <div class="text-sm text-white/80">World Heritage Site</div>
                </div>
                <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                    <div class="text-2xl font-bold text-yellow-300 mb-1">1200+</div>
                    <div class="text-sm text-white/80">Steps to Summit</div>
                </div>
            </div>
        </div>

        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-center scroll-animate">
            <div class="flex flex-col items-center text-white/80">
                <span class="text-sm mb-2">Discover More</span>
                <div class="animate-bounce">
                    <i class="fas fa-chevron-down text-xl"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Sigiriya is Unmissable -->
    <section class="py-16 lg:py-24 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-animate">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">Ancient Wonder</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">Why Sigiriya is Unmissable</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    A living time capsule that blends palace architecture, hydraulic engineering, and landscape design in one dramatic setting.
                </p>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                
                <!-- Art in the Sky -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-palette text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Art in the Sky</h3>
                    <p class="text-gray-600 leading-relaxed">
                        The cave-like pockets on the western face shelter vibrant frescoes—graceful celestial maidens painted with natural pigments that have endured for over 1,500 years.
                    </p>
                </div>

                <!-- The Mirror Wall -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl">
                    <div class="w-16 h-16 bg-gradient-to-br from-gold-500 to-yellow-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-mirror text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">The Mirror Wall</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Once polished to such a sheen that the king could see his reflection, this wall later collected ancient visitor verses—among the world's earliest "travel reviews."
                    </p>
                </div>

                <!-- Gardens of Geometry -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-seedling text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Gardens of Geometry</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Sigiriya's water gardens align with remarkable precision, featuring pools, fountains, and moats that still echo with seasonal monsoon flows.
                    </p>
                </div>

                <!-- Lion's Gate -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl">
                    <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-orange-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-paw text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Lion's Gate & Summit Palace</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Massive lion paws guard the final staircase to the summit—home to the king's palace ruins, royal pools, and panoramic lookouts.
                    </p>
                </div>

                <!-- Living Time Capsule -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-history text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">A Living Time Capsule</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Built in the 5th century CE, Sigiriya blends palace architecture, hydraulic engineering, and landscape design in one dramatic setting.
                    </p>
                </div>

                <!-- UNESCO Heritage -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary-500 to-orange-600 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-crown text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">UNESCO World Heritage</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Today, it stands as a UNESCO World Heritage Site and a masterpiece of urban planning and aesthetic harmony.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Historical Story -->
    <section class="py-16 lg:py-24 mirror-effect text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="scroll-animate">
                <div class="mb-8">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-md rounded-full mb-6">
                        <i class="fas fa-scroll text-3xl"></i>
                    </div>
                </div>
                <h2 class="text-3xl lg:text-4xl font-bold mb-8">A Brief Story</h2>
                <div class="text-lg leading-relaxed space-y-6">
                    <p class="text-primary-100">
                        According to chronicles, <strong>King Kashyapa</strong> transformed this towering rock into his fortified capital, crafting pleasure gardens at its base and a palace atop the summit.
                    </p>
                    <p class="text-primary-100">
                        After his reign, Sigiriya became a Buddhist monastery once more. Today, it stands as a UNESCO World Heritage Site and a masterpiece of urban planning and aesthetic harmony.
                    </p>
                </div>

                <div class="mt-12 glass-morphism rounded-2xl p-8">
                    <h3 class="text-2xl font-bold mb-4">Experience the Legend</h3>
                    <p class="text-primary-100 mb-6">Join us on a journey through 1,500 years of history, art, and architectural brilliance.</p>
                    <a href="https://wa.me/94776605054" class="inline-flex items-center bg-white text-primary-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <i class="fab fa-whatsapp mr-3"></i>
                        Plan Your Visit
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- What You'll See on the Climb -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-animate">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">Journey to the Top</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">What You'll See on the Climb</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Follow the ancient path from water gardens to royal summit, discovering architectural marvels at every step.
                </p>
            </div>

            <!-- Timeline -->
            <div class="relative">
                
                <!-- Moat & Ramparts -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-water text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Moat & Ramparts</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Cross the water defenses that protected the royal city. Marvel at the engineering that channeled monsoon waters into defensive moats.
                        </p>
                    </div>
                </div>

                <!-- Lower & Upper Gardens -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-tree text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Lower & Upper Gardens</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Wander through boulder gardens where monastic caves bear ancient inscriptions, then into symmetrical water gardens with pools and pavilions.
                        </p>
                    </div>
                </div>

                <!-- Fresco Pocket -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-paint-brush text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Fresco Pocket</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Ascend the spiral staircase to view the famed Sigiriya Maidens—please follow photography rules posted on-site.
                        </p>
                    </div>
                </div>

                <!-- Mirror Wall -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-mirror text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Mirror Wall</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Walk beside a honey-gold wall once highly polished; look for faint historic graffiti (now preserved).
                        </p>
                    </div>
                </div>

                <!-- Lion Terrace -->
                <div class="timeline-item flex items-start mb-12 scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-red-500 to-red-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-paw text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Lion Terrace</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Pause by the monumental stone paws—remnants of the colossal lion that once framed the gateway.
                        </p>
                    </div>
                </div>

                <!-- Summit -->
                <div class="timeline-item flex items-start scroll-animate">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-primary-500 to-orange-500 rounded-full flex items-center justify-center mr-6 relative z-10">
                        <i class="fas fa-crown text-white text-lg"></i>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Summit</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Explore palace foundations, a royal bathing pool, and lookout points with 360° vistas over jungles and paddy fields.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Best Time & Practical Tips -->
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
                                <h4 class="font-semibold text-gray-900 mb-2">Early Morning (7:00–9:00 AM)</h4>
                                <p class="text-gray-600">Cooler temperatures, soft light on the gardens, and fewer crowds.</p>
                            </div>
                            
                            <div class="border-l-4 border-orange-500 pl-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Late Afternoon (3:30–5:30 PM)</h4>
                                <p class="text-gray-600">Golden-hour photos and gentler heat.</p>
                            </div>
                            
                            <div class="border-l-4 border-green-500 pl-4">
                                <h4 class="font-semibold text-gray-900 mb-2">Best Seasons</h4>
                                <p class="text-gray-600">Dry months (June–September and January–March) offer the most comfortable climbs, but Sigiriya is open year-round.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Practical Tips -->
                <div class="scroll-animate">
                    <div class="bg-white rounded-2xl p-8 shadow-lg h-full">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-lightbulb text-white text-lg"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Practical Tips</h3>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <i class="fas fa-mountain text-primary-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Climb Difficulty</h4>
                                    <p class="text-gray-600 text-sm">Moderate; expect 1,200+ steps with handrails in steeper sections. Take breaks at terraces.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-tshirt text-primary-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Footwear & Clothing</h4>
                                    <p class="text-gray-600 text-sm">Wear sturdy, breathable shoes; light, respectful attire (shoulders and knees covered).</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-backpack text-primary-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Essentials</h4>
                                    <p class="text-gray-600 text-sm">Bring water, sun protection, and a light rain layer in monsoon months.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <i class="fas fa-camera text-primary-500 mr-3 mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Photography</h4>
                                    <p class="text-gray-600 text-sm">Flash may be restricted near the frescoes; follow on-site guidance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nearby Highlights -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-animate">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">Explore More</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">Pair it with Nearby Highlights</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Maximize your Cultural Triangle adventure with these complementary attractions.
                </p>
            </div>

            <!-- Highlights Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <!-- Pidurangala Rock -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-primary-500 to-orange-500 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-bold text-lg">Pidurangala Rock</h4>
                        </div>
                        <i class="fas fa-mountain text-white text-4xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed">
                            A slightly shorter hike with a classic postcard view of Sigiriya—perfect at sunrise or sunset.
                        </p>
                    </div>
                </div>

                <!-- Dambulla Cave Temple -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-purple-500 to-indigo-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-bold text-lg">Dambulla Cave</h4>
                        </div>
                        <i class="fas fa-praying-hands text-white text-4xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Lavish Buddha statues and murals in five caves (UNESCO World Heritage Site).
                        </p>
                    </div>
                </div>

                <!-- Minneriya Safari -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-green-500 to-emerald-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-bold text-lg">Minneriya Safari</h4>
                        </div>
                        <i class="fas fa-paw text-white text-4xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Seasonal elephant gatherings on the plains. Ask us about timing for the best experience.
                        </p>
                    </div>
                </div>

                <!-- Polonnaruwa -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br from-red-500 to-pink-600 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 text-white">
                            <h4 class="font-bold text-lg">Polonnaruwa</h4>
                        </div>
                        <i class="fas fa-monument text-white text-4xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Ruins of a medieval garden-city with magnificent stone carvings and architectural wonders.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sample Half-Day Plan -->
    <section class="py-16 lg:py-24 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-animate">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">Perfect Itinerary</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">Sample Half-Day Plan</h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Our flexible itinerary designed for the perfect Sigiriya experience.
                </p>
            </div>

            <!-- Timeline Schedule -->
            <div class="bg-white rounded-2xl p-8 shadow-lg scroll-animate">
                <div class="space-y-6">
                    
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-20 text-primary-600 font-bold text-lg">06:30</div>
                        <div class="flex-grow">
                            <h4 class="font-semibold text-gray-900 mb-1">Early Start</h4>
                            <p class="text-gray-600">Arrive at Sigiriya entrance, begin the garden walk and ascent.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-20 text-primary-600 font-bold text-lg">08:30</div>
                        <div class="flex-grow">
                            <h4 class="font-semibold text-gray-900 mb-1">Summit Views</h4>
                            <p class="text-gray-600">Reach summit for views and photos; explore palace ruins.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-20 text-primary-600 font-bold text-lg">09:15</div>
                        <div class="flex-grow">
                            <h4 class="font-semibold text-gray-900 mb-1">Descent Journey</h4>
                            <p class="text-gray-600">Descend via Lion Terrace and Mirror Wall.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-20 text-primary-600 font-bold text-lg">10:15</div>
                        <div class="flex-grow">
                            <h4 class="font-semibold text-gray-900 mb-1">Refreshment</h4>
                            <p class="text-gray-600">Fresh juice stop; optional transfer to Pidurangala for an alternate viewpoint.</p>
                        </div>
                    </div>

                </div>

                <div class="mt-8 p-6 bg-gradient-to-r from-primary-50 to-orange-50 rounded-xl border border-primary-100">
                    <p class="text-center text-gray-700">
                        <i class="fas fa-info-circle text-primary-600 mr-2"></i>
                        <strong>Prefer a slower pace?</strong> We'll tailor rest stops and shaded breaks to your comfort.
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
                    Everything you need to know for your Sigiriya adventure.
                </p>
            </div>

            <!-- FAQ Items -->
            <div class="space-y-6">
                
                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">How long is the climb?</h3>
                            <i class="fas fa-chevron-down text-primary-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            Most guests take 90–120 minutes round-trip, plus time for photos and garden exploration. We recommend allowing 3-4 hours total for a leisurely experience.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">Is it suitable for kids or seniors?</h3>
                            <i class="fas fa-chevron-down text-primary-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            Yes, with care. We recommend early starts, hats, water, and frequent pauses. Our guides set a gentle pace and can suggest alternate viewpoints if needed.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">Can I visit if I'm afraid of heights?</h3>
                            <i class="fas fa-chevron-down text-primary-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            Many visitors with mild vertigo still enjoy the climb by focusing on short sections and using handrails. We can suggest alternate viewpoints if needed.
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
                            Light, breathable clothing with covered shoulders and knees are respectful. Good grip shoes are essential. Bring a hat, sunscreen, and water bottle.
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
                <h2 class="text-3xl lg:text-4xl font-bold mb-6">Make it a Curated Experience</h2>
                <p class="text-xl text-primary-100 mb-12 leading-relaxed">
                    Skip the guesswork. Our Coco Island Holidays hosts coordinate tickets, licensed guides, door-to-door transfers, sunrise/sunset timings, and add-on safaris or cooking demos in nearby villages.
                </p>
                
                <div class="glass-morphism rounded-2xl p-8">
                    <h3 class="text-2xl font-bold mb-4">Ready to Explore Sigiriya?</h3>
                    <p class="text-primary-100 mb-6">Tell us your pace and interests; we'll design an itinerary that lets Sigiriya shine.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://wa.me/94776605054" class="inline-flex items-center bg-white text-primary-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <i class="fab fa-whatsapp mr-3"></i>
                            Book Your Adventure
                        </a>
                        <a href="{{ route('contact', app()->getLocale()) }}" class="inline-flex items-center bg-green-600 text-white px-8 py-4 rounded-xl font-semibold hover:bg-green-700 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-envelope mr-3"></i>
                            Get Custom Plan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

        @include('components.footer')

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
