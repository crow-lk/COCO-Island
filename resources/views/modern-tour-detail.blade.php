<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $tour->title ?? 'Trails of Ramayana' }} | COCO Island Holidays</title>
    <meta name="description" content="Discover the spiritual journey of Ramayana in Sri Lanka. 7 days & 6 nights exploring ancient temples, sacred sites, and UNESCO World Heritage locations.">
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
                        'fade-in-up': 'fadeInUp 0.6s ease-out forwards',
                        'bounce-slow': 'bounce 2s infinite',
                        'pulse-slow': 'pulse 3s infinite',
                        'float': 'float 6s ease-in-out infinite',
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
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' }
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        .hero-bg {
            background: linear-gradient(135deg, rgba(249, 115, 22, 0.8) 0%, rgba(234, 88, 12, 0.9) 100%), 
                        url('{{ asset('frontend/assets/img/slider/slider-01.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .animate-on-scroll.animated {
            opacity: 1;
            transform: translateY(0);
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #f97316, #ea580c);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .sticky-nav {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95);
        }
        
        .timeline-item {
            position: relative;
            padding-left: 3rem;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0.75rem;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, #f97316, #ea580c);
        }
        
        .timeline-item::after {
            content: '';
            position: absolute;
            left: 0.25rem;
            top: 1rem;
            width: 1rem;
            height: 1rem;
            background: #f97316;
            border-radius: 50%;
            border: 3px solid white;
            box-shadow: 0 0 0 3px #f97316;
        }
        
        .timeline-item:last-child::before {
            background: linear-gradient(to bottom, #f97316 0%, #f97316 50%, transparent 50%);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Loading Spinner -->
    <div id="loading" class="fixed inset-0 bg-white z-50 flex items-center justify-center">
        <div class="w-16 h-16 border-4 border-primary-500 border-t-transparent rounded-full animate-spin"></div>
    </div>

    @include('components.header')

    <!-- Hero Section -->
    <section class="hero-bg relative min-h-96 flex items-center justify-center mt-16">
        <div class="absolute inset-0">
            <div class="animate-float absolute top-20 left-10 w-16 h-16 bg-white/10 rounded-full blur-sm"></div>
            <div class="animate-float absolute top-40 right-20 w-12 h-12 bg-primary-300/20 rounded-full blur-sm" style="animation-delay: 1s;"></div>
        </div>
        
        <div class="relative z-10 text-center text-white px-4 max-w-4xl mx-auto">
            <div class="animate-on-scroll">
                <span class="inline-block px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-sm font-semibold mb-4 border border-white/20">
                    ✨ Spiritual Journey
                </span>
                <h1 class="text-4xl md:text-6xl font-bold mb-4 leading-tight" style="text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);">
                    Trails of Ramayana
                </h1>
                <p class="text-xl md:text-2xl mb-6 text-white/90" style="text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.3);">
                    07 Days & 06 Nights - Sacred Journey Through Ancient Lanka
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#book-now" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold rounded-2xl bg-white text-primary-600 hover:bg-gray-100 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                        <i class="fab fa-whatsapp mr-2 text-green-500"></i> Book This Tour
                    </a>
                    <a href="#itinerary" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold rounded-2xl glass-effect text-white hover:bg-white/20 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-map-marked-alt mr-2"></i> View Itinerary
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Sticky Navigation -->
    <nav class="sticky top-16 z-40 sticky-nav border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex space-x-8 overflow-x-auto py-4">
                <a href="#overview" class="nav-link text-primary-600 font-semibold whitespace-nowrap">Overview</a>
                <a href="#highlights" class="nav-link text-gray-600 hover:text-primary-600 whitespace-nowrap">Highlights</a>
                <a href="#itinerary" class="nav-link text-gray-600 hover:text-primary-600 whitespace-nowrap">Itinerary</a>
                <a href="#inclusions" class="nav-link text-gray-600 hover:text-primary-600 whitespace-nowrap">Inclusions</a>
                <a href="#gallery" class="nav-link text-gray-600 hover:text-primary-600 whitespace-nowrap">Gallery</a>
                <a href="#book-now" class="nav-link text-gray-600 hover:text-primary-600 whitespace-nowrap">Book Now</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="lg:grid lg:grid-cols-3 lg:gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-16">
                
                <!-- Overview Section -->
                <section id="overview" class="animate-on-scroll">
                    <h2 class="text-3xl font-bold mb-6 text-gray-900">Tour Overview</h2>
                    <div class="prose prose-lg max-w-none">
                        <p class="text-gray-600 leading-relaxed">
                            Embark on a spiritual odyssey through the sacred landscapes of Sri Lanka, following the legendary trail of Ramayana. This 7-day journey takes you through ancient temples, mystical sites, and UNESCO World Heritage locations that hold deep significance in the epic tale of Ramayana.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            From the bustling capital of Colombo to the serene hills of Nuwara Eliya and the coastal beauty of Galle, discover the places where Lord Rama, Sita, Hanuman, and Ravana once walked. Experience the spiritual energy, architectural marvels, and natural beauty that make Sri Lanka the legendary Lanka of ancient times.
                        </p>
                    </div>
                    
                    <!-- Quick Facts -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                        <div class="bg-white rounded-2xl p-6 shadow-lg text-center">
                            <i class="fas fa-calendar-alt text-3xl text-primary-500 mb-3"></i>
                            <h3 class="font-semibold text-gray-900 mb-2">Duration</h3>
                            <p class="text-gray-600">7 Days & 6 Nights</p>
                        </div>
                        <div class="bg-white rounded-2xl p-6 shadow-lg text-center">
                            <i class="fas fa-users text-3xl text-primary-500 mb-3"></i>
                            <h3 class="font-semibold text-gray-900 mb-2">Group Size</h3>
                            <p class="text-gray-600">2-15 People</p>
                        </div>
                        <div class="bg-white rounded-2xl p-6 shadow-lg text-center">
                            <i class="fas fa-map-marked-alt text-3xl text-primary-500 mb-3"></i>
                            <h3 class="font-semibold text-gray-900 mb-2">Destinations</h3>
                            <p class="text-gray-600">Colombo, Kandy, Nuwara Eliya, Galle</p>
                        </div>
                    </div>
                </section>

                <!-- Tour Highlights -->
                <section id="highlights" class="animate-on-scroll">
                    <h2 class="text-3xl font-bold mb-8 text-gray-900">Tour Highlights</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-center space-x-3 p-4 bg-white rounded-lg shadow-md">
                            <i class="fas fa-check-circle text-primary-500"></i>
                            <span class="text-gray-700">Sri Anjaneyar Temple</span>
                        </div>
                        <div class="flex items-center space-x-3 p-4 bg-white rounded-lg shadow-md">
                            <i class="fas fa-check-circle text-primary-500"></i>
                            <span class="text-gray-700">Kelaniya Buddhist Temple</span>
                        </div>
                        <div class="flex items-center space-x-3 p-4 bg-white rounded-lg shadow-md">
                            <i class="fas fa-check-circle text-primary-500"></i>
                            <span class="text-gray-700">Pinnawala Elephant Orphanage</span>
                        </div>
                        <div class="flex items-center space-x-3 p-4 bg-white rounded-lg shadow-md">
                            <i class="fas fa-check-circle text-primary-500"></i>
                            <span class="text-gray-700">Temple of the Tooth Relic</span>
                        </div>
                        <div class="flex items-center space-x-3 p-4 bg-white rounded-lg shadow-md">
                            <i class="fas fa-check-circle text-primary-500"></i>
                            <span class="text-gray-700">Sri Bhaktha Hanuman Temple at Ramboda</span>
                        </div>
                        <div class="flex items-center space-x-3 p-4 bg-white rounded-lg shadow-md">
                            <i class="fas fa-check-circle text-primary-500"></i>
                            <span class="text-gray-700">Sita Amman Temple</span>
                        </div>
                        <div class="flex items-center space-x-3 p-4 bg-white rounded-lg shadow-md">
                            <i class="fas fa-check-circle text-primary-500"></i>
                            <span class="text-gray-700">Ashoka Vatika (Hakgala Botanical Gardens)</span>
                        </div>
                        <div class="flex items-center space-x-3 p-4 bg-white rounded-lg shadow-md">
                            <i class="fas fa-check-circle text-primary-500"></i>
                            <span class="text-gray-700">Ravana Water Fall</span>
                        </div>
                        <div class="flex items-center space-x-3 p-4 bg-white rounded-lg shadow-md">
                            <i class="fas fa-check-circle text-primary-500"></i>
                            <span class="text-gray-700">Ussangoda</span>
                        </div>
                        <div class="flex items-center space-x-3 p-4 bg-white rounded-lg shadow-md">
                            <i class="fas fa-check-circle text-primary-500"></i>
                            <span class="text-gray-700">Rumassala Unawatuna</span>
                        </div>
                        <div class="flex items-center space-x-3 p-4 bg-white rounded-lg shadow-md">
                            <i class="fas fa-check-circle text-primary-500"></i>
                            <span class="text-gray-700">Galle Dutch Fort (UNESCO World Heritage)</span>
                        </div>
                        <div class="flex items-center space-x-3 p-4 bg-white rounded-lg shadow-md">
                            <i class="fas fa-check-circle text-primary-500"></i>
                            <span class="text-gray-700">City Tours: Kandy, Galle & Colombo</span>
                        </div>
                    </div>
                </section>

                <!-- Detailed Itinerary -->
                <section id="itinerary" class="animate-on-scroll">
                    <h2 class="text-3xl font-bold mb-8 text-gray-900">Detailed Itinerary</h2>
                    
                    <div class="space-y-8">
                        <!-- Day 1 -->
                        <div class="timeline-item">
                            <div class="bg-white rounded-2xl p-8 shadow-lg">
                                <div class="flex items-center mb-4">
                                    <span class="bg-primary-500 text-white px-3 py-1 rounded-full text-sm font-semibold mr-3">Day 1</span>
                                    <h3 class="text-xl font-bold text-gray-900">Arrival - Colombo</h3>
                                </div>
                                <p class="text-gray-600 mb-4"><strong>Bandaranayke International Airport to Colombo</strong></p>
                                
                                <div class="space-y-4">
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <h4 class="font-semibold text-gray-900 mb-2">Panchamuga Anjaneyar Temple</h4>
                                        <p class="text-gray-600 text-sm">The first Anjaneyar Temple in Sri Lanka, dedicated to Lord Hanuman in the form of Panchamuga (five faces). Built by Swamy Chandrashekar, this temple holds the distinction of having the world's first chariot dedicated to Hanuman.</p>
                                    </div>
                                    
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <h4 class="font-semibold text-gray-900 mb-2">Kelaniya Vibhishana Temple</h4>
                                        <p class="text-gray-600 text-sm">The place where King Vibhishana was crowned by Lakshmana after Ravana's death. This Buddhist temple is considered an important Ramayana pilgrimage site, representing the just king who supported Rama against his brother's injustice.</p>
                                    </div>
                                </div>
                                
                                <div class="mt-6">
                                    <h4 class="font-semibold text-gray-900 mb-2">Day Activities:</h4>
                                    <ul class="list-disc list-inside text-gray-600 space-y-1">
                                        <li>Arrival at Bandaranayke International Airport with warm welcome</li>
                                        <li>Transfer to Colombo and check-in at luxury hotel</li>
                                        <li>Visit Panchamuga Anjaneyar Temple & Kelaniya Vibhishana Temple</li>
                                        <li>Evening Colombo city tour</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Day 2 -->
                        <div class="timeline-item">
                            <div class="bg-white rounded-2xl p-8 shadow-lg">
                                <div class="flex items-center mb-4">
                                    <span class="bg-primary-500 text-white px-3 py-1 rounded-full text-sm font-semibold mr-3">Day 2</span>
                                    <h3 class="text-xl font-bold text-gray-900">Colombo to Kandy</h3>
                                </div>
                                
                                <div class="bg-gray-50 rounded-lg p-4 mb-4">
                                    <h4 class="font-semibold text-gray-900 mb-2">Temple of the Tooth Relic</h4>
                                    <p class="text-gray-600 text-sm">A UNESCO World Heritage site housing Buddha's sacred tooth relic. While not directly part of Ramayana, the temple's spiritual atmosphere and golden Buddha statue provide peace and serenity to pilgrims.</p>
                                </div>
                                
                                <div class="mt-6">
                                    <h4 class="font-semibold text-gray-900 mb-2">Day Activities:</h4>
                                    <ul class="list-disc list-inside text-gray-600 space-y-1">
                                        <li>Morning breakfast and check-out from Colombo hotel</li>
                                        <li>En route visit to Pinnawala Elephant Orphanage</li>
                                        <li>Arrival and check-in at Kandy hotel</li>
                                        <li>Worship at Temple of the Tooth Relic</li>
                                        <li>Evening walk around Kandy Lake</li>
                                        <li>Warm dinner at hotel</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Day 3 -->
                        <div class="timeline-item">
                            <div class="bg-white rounded-2xl p-8 shadow-lg">
                                <div class="flex items-center mb-4">
                                    <span class="bg-primary-500 text-white px-3 py-1 rounded-full text-sm font-semibold mr-3">Day 3</span>
                                    <h3 class="text-xl font-bold text-gray-900">Kandy to Nuwara Eliya</h3>
                                </div>
                                
                                <div class="bg-gray-50 rounded-lg p-4 mb-4">
                                    <h4 class="font-semibold text-gray-900 mb-2">Sri Bhakta Hanuman Temple</h4>
                                    <p class="text-gray-600 text-sm">Located 30 KM north of Nuwara Eliya in Ramboda, this temple houses the tallest Hanuman statue in Sri Lanka (18 feet). Built by Chinmaya Mission, it's perched on a picturesque mountain summit.</p>
                                </div>
                                
                                <div class="mt-6">
                                    <h4 class="font-semibold text-gray-900 mb-2">Day Activities:</h4>
                                    <ul class="list-disc list-inside text-gray-600 space-y-1">
                                        <li>Wake up with fresh Ceylon tea</li>
                                        <li>Visit Peradeniya Botanical Gardens</li>
                                        <li>Journey to Nuwara Eliya</li>
                                        <li>En route visit Sri Bhaktha Hanuman Temple</li>
                                        <li>Check-in at Nuwara Eliya hotel</li>
                                        <li>Evening visit to Gregory Lake for sunset</li>
                                        <li>Dinner in "Little England"</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Day 4 -->
                        <div class="timeline-item">
                            <div class="bg-white rounded-2xl p-8 shadow-lg">
                                <div class="flex items-center mb-4">
                                    <span class="bg-primary-500 text-white px-3 py-1 rounded-full text-sm font-semibold mr-3">Day 4</span>
                                    <h3 class="text-xl font-bold text-gray-900">A Day in Nuwara Eliya</h3>
                                </div>
                                
                                <div class="space-y-4">
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <h4 class="font-semibold text-gray-900 mb-2">Sita Amman Temple</h4>
                                        <p class="text-gray-600 text-sm">The sacred site where Sita Devi was believed to be imprisoned by King Ravana. The black soil here is said to be from Hanuman's fire. Near the temple, you can still see Lord Hanuman's footprints by the stream where Sita bathed.</p>
                                    </div>
                                    
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <h4 class="font-semibold text-gray-900 mb-2">Ashoka Vatika (Hakgala Botanical Gardens)</h4>
                                        <p class="text-gray-600 text-sm">The legendary garden where Sita was held captive, now converted into beautiful botanical gardens. The area still bears the mystical energy of its ancient past.</p>
                                    </div>
                                    
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <h4 class="font-semibold text-gray-900 mb-2">Divurumpola Temple</h4>
                                        <p class="text-gray-600 text-sm">The sacred site where Sita underwent Agni Pariksha (trial by fire) to prove her chastity to Lord Rama. "Divurumpola" means "Place of Oath" in Sinhala.</p>
                                    </div>
                                </div>
                                
                                <div class="mt-6">
                                    <h4 class="font-semibold text-gray-900 mb-2">Day Activities:</h4>
                                    <ul class="list-disc list-inside text-gray-600 space-y-1">
                                        <li>Morning with warm coffee and grand breakfast</li>
                                        <li>Visit Sita Amman Temple and Ashoka Vatika</li>
                                        <li>Evening worship at Divurumpola Temple</li>
                                        <li>Relaxing dinner in cool Little England</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Day 5 -->
                        <div class="timeline-item">
                            <div class="bg-white rounded-2xl p-8 shadow-lg">
                                <div class="flex items-center mb-4">
                                    <span class="bg-primary-500 text-white px-3 py-1 rounded-full text-sm font-semibold mr-3">Day 5</span>
                                    <h3 class="text-xl font-bold text-gray-900">Nuwara Eliya to Galle</h3>
                                </div>
                                
                                <div class="space-y-4">
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <h4 class="font-semibold text-gray-900 mb-2">Ravana Water Fall</h4>
                                        <p class="text-gray-600 text-sm">Named after King Ravana, this waterfall is believed to be where he hid Princess Sita in a cave behind the falls, now known as Ravana Ella Cave.</p>
                                    </div>
                                    
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <h4 class="font-semibold text-gray-900 mb-2">Ussangoda</h4>
                                        <p class="text-gray-600 text-sm">The mysterious plain with red sand and black rocks where King Ravana parked his Pushpak Vimana. The unique coloration is believed to be from Hanuman's fire during his visit to Lanka.</p>
                                    </div>
                                </div>
                                
                                <div class="mt-6">
                                    <h4 class="font-semibold text-gray-900 mb-2">Day Activities:</h4>
                                    <ul class="list-disc list-inside text-gray-600 space-y-1">
                                        <li>Check-out from Nuwara Eliya hotel</li>
                                        <li>En route visit Ravana Water Fall & Ussangoda</li>
                                        <li>Check-in at beach hotel in Galle</li>
                                        <li>Evening exploration of beautiful Galle city</li>
                                        <li>Dinner at hotel</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Day 6 -->
                        <div class="timeline-item">
                            <div class="bg-white rounded-2xl p-8 shadow-lg">
                                <div class="flex items-center mb-4">
                                    <span class="bg-primary-500 text-white px-3 py-1 rounded-full text-sm font-semibold mr-3">Day 6</span>
                                    <h3 class="text-xl font-bold text-gray-900">A Day in Galle</h3>
                                </div>
                                
                                <div class="space-y-4">
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <h4 class="font-semibold text-gray-900 mb-2">Rumassala</h4>
                                        <p class="text-gray-600 text-sm">One of the five places where pieces of the Himalayan mountain fell when Hanuman carried it to heal Rama and Lakshmana. This hill is also described as one of Sita's abodes during her stay in Lanka.</p>
                                    </div>
                                    
                                    <div class="bg-gray-50 rounded-lg p-4">
                                        <h4 class="font-semibold text-gray-900 mb-2">Galle Dutch Fort</h4>
                                        <p class="text-gray-600 text-sm">A UNESCO World Heritage site showcasing colonial architecture and historical significance, perfect for evening walks with stunning ocean views.</p>
                                    </div>
                                </div>
                                
                                <div class="mt-6">
                                    <h4 class="font-semibold text-gray-900 mb-2">Day Activities:</h4>
                                    <ul class="list-disc list-inside text-gray-600 space-y-1">
                                        <li>Traditional Sri Lankan breakfast buffet</li>
                                        <li>Visit to beautiful Rumassala</li>
                                        <li>Evening walk in Galle Dutch Fort</li>
                                        <li>Sunset watching by the crystal clear Indian Ocean</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Day 7 -->
                        <div class="timeline-item">
                            <div class="bg-white rounded-2xl p-8 shadow-lg">
                                <div class="flex items-center mb-4">
                                    <span class="bg-primary-500 text-white px-3 py-1 rounded-full text-sm font-semibold mr-3">Day 7</span>
                                    <h3 class="text-xl font-bold text-gray-900">Departure</h3>
                                </div>
                                <p class="text-gray-600 mb-4"><strong>Galle to Bandaranayke International Airport (Via Southern Expressway)</strong></p>
                                
                                <div class="mt-6">
                                    <h4 class="font-semibold text-gray-900 mb-2">Day Activities:</h4>
                                    <ul class="list-disc list-inside text-gray-600 space-y-1">
                                        <li>Final breakfast at the hotel</li>
                                        <li>Check-out and transfer to airport via Southern Expressway</li>
                                        <li>Departure with blessed memories of spiritual Sri Lanka</li>
                                        <li>Safe flight wishes!</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Inclusions -->
                <section id="inclusions" class="animate-on-scroll">
                    <h2 class="text-3xl font-bold mb-8 text-gray-900">What's Included</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-white rounded-2xl p-6 shadow-lg">
                            <h3 class="text-xl font-semibold text-green-600 mb-4">✅ Included</h3>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                    <span>Airport transfers and transportation</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                    <span>6 nights accommodation in luxury hotels</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                    <span>Daily breakfast and dinner</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                    <span>Professional English-speaking guide</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                    <span>All temple and site entrance fees</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check text-green-500 mt-1 mr-3"></i>
                                    <span>Air-conditioned vehicle throughout</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="bg-white rounded-2xl p-6 shadow-lg">
                            <h3 class="text-xl font-semibold text-red-600 mb-4">❌ Not Included</h3>
                            <ul class="space-y-3 text-gray-600">
                                <li class="flex items-start">
                                    <i class="fas fa-times text-red-500 mt-1 mr-3"></i>
                                    <span>International flights</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-times text-red-500 mt-1 mr-3"></i>
                                    <span>Visa fees</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-times text-red-500 mt-1 mr-3"></i>
                                    <span>Personal expenses and shopping</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-times text-red-500 mt-1 mr-3"></i>
                                    <span>Lunch (unless specified)</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-times text-red-500 mt-1 mr-3"></i>
                                    <span>Travel insurance</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-times text-red-500 mt-1 mr-3"></i>
                                    <span>Tips and gratuities</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Gallery -->
                <section id="gallery" class="animate-on-scroll">
                    <h2 class="text-3xl font-bold mb-8 text-gray-900">Photo Gallery</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="relative overflow-hidden rounded-2xl group">
                            <img src="{{ asset('frontend/assets/img/slider/slider-01.jpg') }}" alt="Ramayana Trail" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
                            <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition-colors duration-300"></div>
                            <div class="absolute bottom-4 left-4 text-white">
                                <p class="font-semibold">Temple of the Tooth</p>
                            </div>
                        </div>
                        <div class="relative overflow-hidden rounded-2xl group">
                            <img src="{{ asset('frontend/assets/img/slider/slider-02.jpg') }}" alt="Ramayana Trail" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
                            <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition-colors duration-300"></div>
                            <div class="absolute bottom-4 left-4 text-white">
                                <p class="font-semibold">Sita Amman Temple</p>
                            </div>
                        </div>
                        <div class="relative overflow-hidden rounded-2xl group">
                            <img src="{{ asset('frontend/assets/img/slider/slider-03.jpg') }}" alt="Ramayana Trail" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
                            <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition-colors duration-300"></div>
                            <div class="absolute bottom-4 left-4 text-white">
                                <p class="font-semibold">Ravana Falls</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl p-8 shadow-lg sticky top-32">
                    <div class="text-center mb-6">
                        <div class="text-4xl font-bold text-primary-500 mb-2">$850</div>
                        <div class="text-gray-600">per person</div>
                        <div class="text-sm text-gray-500">*Based on twin sharing</div>
                    </div>

                    <div class="space-y-4 mb-8">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Duration:</span>
                            <span class="font-semibold">7 days, 6 nights</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Group Size:</span>
                            <span class="font-semibold">2-15 people</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Language:</span>
                            <span class="font-semibold">English</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Difficulty:</span>
                            <span class="font-semibold">Easy</span>
                        </div>
                    </div>

                    <div id="book-now" class="space-y-4">
                        <a href="https://wa.me/94776605054?text=Hi! I'm interested in the Trails of Ramayana tour package (7 days, 6 nights). Can you provide more details about availability and booking?" 
                           target="_blank"
                           class="w-full bg-primary-500 text-white py-4 px-6 rounded-2xl font-semibold hover:bg-primary-600 transform hover:scale-105 transition-all duration-300 block text-center">
                            <i class="fab fa-whatsapp mr-2"></i>Book via WhatsApp
                        </a>
                        <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" 
                           class="w-full bg-gray-100 text-gray-700 py-4 px-6 rounded-2xl font-semibold hover:bg-gray-200 transition-all duration-300 block text-center">
                            <i class="fas fa-envelope mr-2"></i>Get Custom Quote
                        </a>
                    </div>

                    <div class="mt-8 pt-8 border-t border-gray-200">
                        <h4 class="font-semibold text-gray-900 mb-4">Need Help?</h4>
                        <div class="space-y-2 text-sm text-gray-600">
                            <p><i class="fas fa-phone mr-2 text-primary-500"></i> +94 77 660 5054</p>
                            <p><i class="fas fa-envelope mr-2 text-primary-500"></i> info@cocoislandholidays.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <h3 class="text-xl font-bold text-primary-500 mb-4">COCO Island Holidays</h3>
                    <p class="text-gray-400 mb-4">
                        Experience the spiritual journey of Ramayana with our expertly crafted tours and personalized service.
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/coco.island.holidays" target="_blank" class="text-gray-400 hover:text-primary-500 transition-colors">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="https://www.instagram.com/coco.island.holidays" target="_blank" class="text-gray-400 hover:text-primary-500 transition-colors">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="https://wa.me/94776605054" target="_blank" class="text-gray-400 hover:text-primary-500 transition-colors">
                            <i class="fab fa-whatsapp text-xl"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
                        <li><a href="{{ route('about', ['locale' => app()->getLocale()]) }}" class="text-gray-400 hover:text-white transition-colors">About</a></li>
                        <li><a href="{{ route('tours.index', ['locale' => app()->getLocale()]) }}" class="text-gray-400 hover:text-white transition-colors">Tours</a></li>
                        <li><a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fas fa-phone mr-2"></i> +94 77 660 5054</li>
                        <li><i class="fas fa-envelope mr-2"></i> info@cocoislandholidays.com</li>
                        <li><i class="fas fa-map-marker-alt mr-2"></i> Kaluthara, Sri Lanka</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 COCO Island Holidays. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/94776605054" 
       class="fixed bottom-6 right-6 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transform hover:scale-110 transition-all duration-300 z-30"
       target="_blank" 
       aria-label="Chat on WhatsApp">
        <i class="fab fa-whatsapp text-xl"></i>
    </a>

    <!-- Scroll to Top Button -->
    <button id="scroll-to-top" 
            class="fixed bottom-6 left-6 bg-primary-500 text-white p-3 rounded-full shadow-lg hover:bg-primary-600 transform hover:scale-110 transition-all duration-300 z-30 hidden">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Hide loading spinner
            setTimeout(() => {
                document.getElementById('loading').classList.add('hidden');
            }, 1000);

            // Scroll animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animated');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.animate-on-scroll').forEach(el => {
                observer.observe(el);
            });

            // Smooth scrolling for navigation links
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

            // Scroll to top functionality
            const scrollToTopBtn = document.getElementById('scroll-to-top');
            
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    scrollToTopBtn.classList.remove('hidden');
                } else {
                    scrollToTopBtn.classList.add('hidden');
                }
            });

            scrollToTopBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Active navigation highlighting
            const navLinks = document.querySelectorAll('.nav-link');
            const sections = document.querySelectorAll('section[id]');

            window.addEventListener('scroll', function() {
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (pageYOffset >= (sectionTop - 200)) {
                        current = section.getAttribute('id');
                    }
                });

                navLinks.forEach(link => {
                    link.classList.remove('text-primary-600', 'font-semibold');
                    link.classList.add('text-gray-600');
                    if (link.getAttribute('href') === '#' + current) {
                        link.classList.remove('text-gray-600');
                        link.classList.add('text-primary-600', 'font-semibold');
                    }
                });
            });
        });
    </script>
</body>
</html>
