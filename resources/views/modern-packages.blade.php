<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
        <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">         <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3">
                        <img src="{{ asset('frontend/assets/img/logo/coco-logo.png') }}" 
                             alt="COCO Island Holidays Logo" 
                             class="h-10 w-auto opacity-90 hover:opacity-100 transition-opacity duration-300">
                        <span class="text-base font-bold text-primary">COCO Island Holidays</span>
                    </a>
                </div>eta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Packages | COCO Island Holidays - Travel Agency</title>
    <meta name="description" content="Explore our carefully curated travel packages designed to showcase the best of Sri Lanka's natural beauty, cultural heritage, and authentic experiences.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/fav-icon.png') }}">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#f97316',
                        secondary: '#ea580c',
                    },
                    fontFamily: {
                        sans: ['Verdana', 'Arial', 'sans-serif'],
                    },
                    animation: {
                        'fade-in-up': 'fadeInUp 0.6s ease-out forwards',
                        'fade-in-left': 'fadeInLeft 0.6s ease-out forwards',
                        'fade-in-right': 'fadeInRight 0.6s ease-out forwards',
                    },
                    keyframes: {
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
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        .hero-bg {
            background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('frontend/assets/img/slider/slider-01.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-out;
        }
        
        .animate-on-scroll.animated {
            opacity: 1;
            transform: translateY(0);
        }
        
        .package-card {
            transition: all 0.3s ease;
        }
        
        .package-card:hover {
            transform: translateY(-10px);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Loading Spinner -->
    <div id="loading" class="fixed inset-0 bg-white z-50 flex items-center justify-center">
        <div class="w-16 h-16 border-4 border-primary border-t-transparent rounded-full animate-spin"></div>
    </div>

    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-40 bg-white/95 backdrop-blur-sm shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="text-base font-bold text-primary">
                        COCO Island Holidays
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="{{ route('home') }}" class="text-gray-700 hover:text-primary px-3 py-2 text-sm font-medium transition-colors">Home</a>
                        <a href="{{ route('about') }}" class="text-gray-700 hover:text-primary px-3 py-2 text-sm font-medium transition-colors">About</a>
                        <a href="{{ route('packages') }}" class="text-primary px-3 py-2 text-sm font-medium">Packages</a>
                        <a href="{{ route('contact') }}" class="text-gray-700 hover:text-primary px-3 py-2 text-sm font-medium transition-colors">Contact</a>
                    </div>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-700 hover:text-primary">
                        <i class="fas fa-bars text-base"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="md:hidden hidden bg-white border-t">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-primary block px-3 py-2 text-base font-medium">Home</a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-primary block px-3 py-2 text-base font-medium">About</a>
                <a href="{{ route('packages') }}" class="text-primary block px-3 py-2 text-base font-medium">Packages</a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-primary block px-3 py-2 text-base font-medium">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-bg relative h-96 flex items-center justify-center mt-16">
        <div class="text-center text-white animate-on-scroll">
            <h1 class="text-base md:text-base font-bold mb-4">Top Tour Packages</h1>
            <p class="text-base md:text-base opacity-90 max-w-2xl mx-auto px-4">
                Discover our carefully curated travel packages designed to showcase the best of Sri Lanka's natural beauty, cultural heritage, and authentic experiences
            </p>
        </div>
    </section>

    <!-- Packages Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Dynamic Tour Packages -->
            @if(isset($popularTours) && $popularTours->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                @foreach($popularTours as $tour)
                <div class="package-card bg-white rounded-2xl shadow-lg overflow-hidden animate-on-scroll">
                    <div class="relative">
                        <img src="{{ asset($tour->image_path) }}" 
                             alt="{{ $tour->title }}" 
                             class="w-full h-64 object-cover">
                        <div class="absolute top-4 right-4 bg-primary text-white px-3 py-1 rounded-full text-sm font-semibold">
                            Popular
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-base font-bold text-gray-900 mb-2">{{ $tour->title }}</h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">{{ $tour->subtitle ?: $tour->description }}</p>
                        @if($tour->duration)
                        <p class="text-sm text-gray-500 mb-4">
                            <i class="fas fa-clock mr-2"></i>{{ $tour->duration }}
                        </p>
                        @endif
                        <div class="flex justify-between items-center">
                            @if($tour->price)
                            <span class="text-base font-bold text-primary">${{ number_format($tour->price) }}</span>
                            @else
                            <span class="text-base text-gray-600">Contact for Price</span>
                            @endif
                            <div class="flex text-yellow-400">
                                @for($i = 0; $i < 5; $i++)
                                <i class="fas fa-star text-sm"></i>
                                @endfor
                            </div>
                        </div>
                        <div class="mt-4 space-y-2">
                            <a href="{{ route('tours.show', $tour->slug) }}" 
                               class="w-full bg-primary text-white py-2 px-4 rounded-lg font-semibold hover:bg-secondary transform hover:scale-105 transition-all duration-300 block text-center">
                                View Details
                            </a>
                            <a href="https://wa.me/94776605054?text=Hi! I'm interested in the {{ $tour->title }} tour package." 
                               target="_blank"
                               class="w-full bg-green-500 text-white py-2 px-4 rounded-lg font-semibold hover:bg-green-600 transform hover:scale-105 transition-all duration-300 block text-center">
                                <i class="fab fa-whatsapp mr-2"></i>Book Now
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif

            <!-- Static Packages (fallback or additional packages) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Package 1 -->
                <div class="package-card bg-white rounded-2xl shadow-lg overflow-hidden animate-on-scroll">
                    <div class="relative">
                        <img src="{{ asset('frontend/assets/img/package/package-1.jpg') }}" 
                             alt="Cultural Heritage Tour" 
                             class="w-full h-64 object-cover">
                        <div class="absolute top-4 right-4 bg-primary text-white px-3 py-1 rounded-full text-sm font-semibold">
                            Featured
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-base font-bold text-gray-900 mb-2">Cultural Heritage Tour</h3>
                        <p class="text-gray-600 mb-4">Explore ancient temples, historical sites, and traditional crafts across Sri Lanka's cultural triangle.</p>
                        <p class="text-sm text-gray-500 mb-4">
                            <i class="fas fa-clock mr-2"></i>7 Days, 6 Nights
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-base font-bold text-primary">$850</span>
                            <div class="flex text-yellow-400">
                                @for($i = 0; $i < 5; $i++)
                                <i class="fas fa-star text-sm"></i>
                                @endfor
                            </div>
                        </div>
                        <div class="mt-4 space-y-2">
                            <a href="https://wa.me/94776605054?text=Hi! I'm interested in the Cultural Heritage Tour package." 
                               target="_blank"
                               class="w-full bg-primary text-white py-2 px-4 rounded-lg font-semibold hover:bg-secondary transform hover:scale-105 transition-all duration-300 block text-center">
                                <i class="fab fa-whatsapp mr-2"></i>Book Now
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Package 2 -->
                <div class="package-card bg-white rounded-2xl shadow-lg overflow-hidden animate-on-scroll">
                    <div class="relative">
                        <img src="{{ asset('frontend/assets/img/package/package-2.jpg') }}" 
                             alt="Beach & Wellness Retreat" 
                             class="w-full h-64 object-cover">
                        <div class="absolute top-4 right-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            New
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-base font-bold text-gray-900 mb-2">Beach & Wellness Retreat</h3>
                        <p class="text-gray-600 mb-4">Relax on pristine beaches and rejuvenate with traditional Ayurvedic treatments and spa experiences.</p>
                        <p class="text-sm text-gray-500 mb-4">
                            <i class="fas fa-clock mr-2"></i>5 Days, 4 Nights
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-base font-bold text-primary">$650</span>
                            <div class="flex text-yellow-400">
                                @for($i = 0; $i < 5; $i++)
                                <i class="fas fa-star text-sm"></i>
                                @endfor
                            </div>
                        </div>
                        <div class="mt-4 space-y-2">
                            <a href="https://wa.me/94776605054?text=Hi! I'm interested in the Beach & Wellness Retreat package." 
                               target="_blank"
                               class="w-full bg-primary text-white py-2 px-4 rounded-lg font-semibold hover:bg-secondary transform hover:scale-105 transition-all duration-300 block text-center">
                                <i class="fab fa-whatsapp mr-2"></i>Book Now
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Package 3 -->
                <div class="package-card bg-white rounded-2xl shadow-lg overflow-hidden animate-on-scroll">
                    <div class="relative">
                        <img src="{{ asset('frontend/assets/img/package/package-3.jpg') }}" 
                             alt="Adventure & Wildlife Safari" 
                             class="w-full h-64 object-cover">
                        <div class="absolute top-4 right-4 bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            Adventure
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-base font-bold text-gray-900 mb-2">Adventure & Wildlife Safari</h3>
                        <p class="text-gray-600 mb-4">Experience thrilling wildlife safaris, hiking adventures, and encounter exotic animals in their natural habitat.</p>
                        <p class="text-sm text-gray-500 mb-4">
                            <i class="fas fa-clock mr-2"></i>6 Days, 5 Nights
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-base font-bold text-primary">$950</span>
                            <div class="flex text-yellow-400">
                                @for($i = 0; $i < 5; $i++)
                                <i class="fas fa-star text-sm"></i>
                                @endfor
                            </div>
                        </div>
                        <div class="mt-4 space-y-2">
                            <a href="https://wa.me/94776605054?text=Hi! I'm interested in the Adventure & Wildlife Safari package." 
                               target="_blank"
                               class="w-full bg-primary text-white py-2 px-4 rounded-lg font-semibold hover:bg-secondary transform hover:scale-105 transition-all duration-300 block text-center">
                                <i class="fab fa-whatsapp mr-2"></i>Book Now
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Package 4 -->
                <div class="package-card bg-white rounded-2xl shadow-lg overflow-hidden animate-on-scroll">
                    <div class="relative">
                        <img src="{{ asset('frontend/assets/img/package/package-4.jpg') }}" 
                             alt="Hill Country Escape" 
                             class="w-full h-64 object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-base font-bold text-gray-900 mb-2">Hill Country Escape</h3>
                        <p class="text-gray-600 mb-4">Discover misty mountains, tea plantations, and cool climate in Sri Lanka's beautiful hill country.</p>
                        <p class="text-sm text-gray-500 mb-4">
                            <i class="fas fa-clock mr-2"></i>4 Days, 3 Nights
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-base font-bold text-primary">$550</span>
                            <div class="flex text-yellow-400">
                                @for($i = 0; $i < 5; $i++)
                                <i class="fas fa-star text-sm"></i>
                                @endfor
                            </div>
                        </div>
                        <div class="mt-4 space-y-2">
                            <a href="https://wa.me/94776605054?text=Hi! I'm interested in the Hill Country Escape package." 
                               target="_blank"
                               class="w-full bg-primary text-white py-2 px-4 rounded-lg font-semibold hover:bg-secondary transform hover:scale-105 transition-all duration-300 block text-center">
                                <i class="fab fa-whatsapp mr-2"></i>Book Now
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Package 5 -->
                <div class="package-card bg-white rounded-2xl shadow-lg overflow-hidden animate-on-scroll">
                    <div class="relative">
                        <img src="{{ asset('frontend/assets/img/package/package-5.jpg') }}" 
                             alt="Culinary Journey" 
                             class="w-full h-64 object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-base font-bold text-gray-900 mb-2">Culinary Journey</h3>
                        <p class="text-gray-600 mb-4">Taste authentic Sri Lankan cuisine, spice gardens, and cooking classes with local chefs.</p>
                        <p class="text-sm text-gray-500 mb-4">
                            <i class="fas fa-clock mr-2"></i>5 Days, 4 Nights
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-base font-bold text-primary">$720</span>
                            <div class="flex text-yellow-400">
                                @for($i = 0; $i < 5; $i++)
                                <i class="fas fa-star text-sm"></i>
                                @endfor
                            </div>
                        </div>
                        <div class="mt-4 space-y-2">
                            <a href="https://wa.me/94776605054?text=Hi! I'm interested in the Culinary Journey package." 
                               target="_blank"
                               class="w-full bg-primary text-white py-2 px-4 rounded-lg font-semibold hover:bg-secondary transform hover:scale-105 transition-all duration-300 block text-center">
                                <i class="fab fa-whatsapp mr-2"></i>Book Now
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Package 6 -->
                <div class="package-card bg-white rounded-2xl shadow-lg overflow-hidden animate-on-scroll">
                    <div class="relative">
                        <img src="{{ asset('frontend/assets/img/package/package-6.jpg') }}" 
                             alt="Complete Sri Lanka Experience" 
                             class="w-full h-64 object-cover">
                        <div class="absolute top-4 right-4 bg-purple-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            Comprehensive
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-base font-bold text-gray-900 mb-2">Complete Sri Lanka Experience</h3>
                        <p class="text-gray-600 mb-4">The ultimate Sri Lankan adventure covering beaches, mountains, culture, wildlife, and cuisine.</p>
                        <p class="text-sm text-gray-500 mb-4">
                            <i class="fas fa-clock mr-2"></i>10 Days, 9 Nights
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-base font-bold text-primary">$1,350</span>
                            <div class="flex text-yellow-400">
                                @for($i = 0; $i < 5; $i++)
                                <i class="fas fa-star text-sm"></i>
                                @endfor
                            </div>
                        </div>
                        <div class="mt-4 space-y-2">
                            <a href="https://wa.me/94776605054?text=Hi! I'm interested in the Complete Sri Lanka Experience package." 
                               target="_blank"
                               class="w-full bg-primary text-white py-2 px-4 rounded-lg font-semibold hover:bg-secondary transform hover:scale-105 transition-all duration-300 block text-center">
                                <i class="fab fa-whatsapp mr-2"></i>Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-br from-primary to-secondary">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h3 class="text-base font-bold text-white mb-4 animate-on-scroll">Ready for Your Sri Lankan Adventure?</h3>
            <p class="text-base text-white/90 mb-8 animate-on-scroll">Contact us today to customize your perfect tour package or get more information about our offerings.</p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-on-scroll">
                <a href="https://wa.me/94776605054" 
                   target="_blank"
                   class="bg-white text-primary px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transform hover:scale-105 transition-all duration-300">
                    <i class="fab fa-whatsapp mr-2"></i>Chat with Us
                </a>
                <a href="{{ route('contact') }}" 
                   class="bg-white/20 backdrop-blur-sm text-white px-8 py-3 rounded-lg font-semibold hover:bg-white/30 transform hover:scale-105 transition-all duration-300">
                    <i class="fas fa-envelope mr-2"></i>Send Email
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <h3 class="text-base font-bold text-primary mb-4">COCO Island Holidays</h3>
                    <p class="text-gray-400 mb-4">
                        Experience the wonder of Sri Lanka with our carefully crafted tours and personalized service.
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/coco.island.holidays" target="_blank" class="text-gray-400 hover:text-primary transition-colors">
                            <i class="fab fa-facebook-f text-base"></i>
                        </a>
                        <a href="https://www.instagram.com/coco.island.holidays" target="_blank" class="text-gray-400 hover:text-primary transition-colors">
                            <i class="fab fa-instagram text-base"></i>
                        </a>
                        <a href="https://www.tiktok.com/@coco.island.holidays" target="_blank" class="text-gray-400 hover:text-primary transition-colors">
                            <i class="fab fa-tiktok text-base"></i>
                        </a>
                        <a href="https://wa.me/94776605054" target="_blank" class="text-gray-400 hover:text-primary transition-colors">
                            <i class="fab fa-whatsapp text-base"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white transition-colors">About</a></li>
                        <li><a href="{{ route('packages') }}" class="text-gray-400 hover:text-white transition-colors">Packages</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
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
        <i class="fab fa-whatsapp text-base"></i>
    </a>

    <!-- Scroll to Top Button -->
    <button id="scroll-to-top" 
            class="fixed bottom-6 left-6 bg-primary text-white p-3 rounded-full shadow-lg hover:bg-secondary transform hover:scale-110 transition-all duration-300 z-30 hidden">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Loading screen
        window.addEventListener('load', function() {
            document.getElementById('loading').classList.add('hidden');
        });

        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

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
    </script>
</body>
</html>
