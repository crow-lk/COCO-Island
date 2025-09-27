<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover Sri Lanka Tours | COCO Island Holidays</title>
    <meta name="description" content="Explore our handcrafted Sri Lanka tours - from cultural heritage to wildlife safaris, pristine beaches to mountain adventures. Book your dream holiday today.">
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
                        'fade-in-left': 'fadeInLeft 0.6s ease-out forwards',
                        'fade-in-right': 'fadeInRight 0.6s ease-out forwards',
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
                        fadeInLeft: {
                            '0%': { opacity: '0', transform: 'translateX(-30px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' }
                        },
                        fadeInRight: {
                            '0%': { opacity: '0', transform: 'translateX(30px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' }
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
        
        .category-bg-cultural {
            background: linear-gradient(135deg, rgba(139, 69, 19, 0.8), rgba(160, 82, 45, 0.8));
        }
        
        .category-bg-adventure {
            background: linear-gradient(135deg, rgba(34, 197, 94, 0.8), rgba(22, 163, 74, 0.8));
        }
        
        .category-bg-beach {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.8), rgba(37, 99, 235, 0.8));
        }
        
        .category-bg-wildlife {
            background: linear-gradient(135deg, rgba(234, 88, 12, 0.8), rgba(194, 65, 12, 0.8));
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
        
        .tour-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .tour-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        .category-card {
            transition: all 0.3s ease;
        }
        
        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .stats-counter {
            font-variant-numeric: tabular-nums;
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #f97316, #ea580c);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #f97316;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #ea580c;
        }
        
        .filter-button {
            transition: all 0.3s ease;
        }
        
        .filter-button.active {
            background: linear-gradient(135deg, #f97316, #ea580c);
            color: white;
            transform: scale(1.05);
        }
        
        .search-input {
            transition: all 0.3s ease;
        }
        
        .search-input:focus {
            box-shadow: 0 0 0 3px rgba(249, 115, 22, 0.1);
        }
        
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
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
    </style>
</head>
<body class="bg-gray-50">
    <!-- Loading Spinner -->
    <div id="loading" class="fixed inset-0 bg-white z-50 flex items-center justify-center">
        <div class="w-16 h-16 border-4 border-primary-500 border-t-transparent rounded-full animate-spin"></div>
    </div>

    @include('components.header')

    <!-- Search & Filter Section -->
    <section class="py-12 bg-white border-t border-gray-100 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-6 items-center justify-between">
                <!-- Search Bar -->
                <div class="flex-1 max-w-md">
                    <div class="relative">
                        <input type="text" id="tour-search" placeholder="Search tours..." 
                               class="search-input w-full pl-12 pr-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    </div>
                </div>

                <!-- Filter Buttons -->
                <div class="flex flex-wrap gap-2">
                    <button class="filter-button active px-4 py-2 rounded-lg border border-gray-200 text-sm font-medium" data-filter="all">
                        All Tours
                    </button>
                    <button class="filter-button px-4 py-2 rounded-lg border border-gray-200 text-sm font-medium" data-filter="cultural">
                        Cultural
                    </button>
                    <button class="filter-button px-4 py-2 rounded-lg border border-gray-200 text-sm font-medium" data-filter="adventure">
                        Adventure
                    </button>
                    <button class="filter-button px-4 py-2 rounded-lg border border-gray-200 text-sm font-medium" data-filter="beach">
                        Beach
                    </button>
                    <button class="filter-button px-4 py-2 rounded-lg border border-gray-200 text-sm font-medium" data-filter="wildlife">
                        Wildlife
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Tours Grid Section -->
    <section id="tours" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 animate-on-scroll">
                <span class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4 block">Our Collection</span>
                <h2 class="text-4xl lg:text-5xl font-bold mb-6 text-gray-900">Featured Tours</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Handpicked experiences that showcase the very best of Sri Lanka's natural beauty, rich culture, and warm hospitality.</p>
            </div>
            
            @if($tours->count() > 0)
            <!-- Database Tours -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="tours-grid">
                @foreach($tours as $index => $tour)
                <div class="tour-card bg-white rounded-3xl shadow-lg overflow-hidden animate-on-scroll hover:shadow-2xl" style="animation-delay: {{ $index * 0.1 }}s;">
                    <div class="relative group">
                        <img src="{{ $tour->image_path ? asset($tour->image_path) : asset('frontend/assets/img/tour/default-tour.jpg') }}" 
                             alt="{{ $tour->title }}" 
                             class="w-full h-72 object-cover group-hover:scale-110 transition-transform duration-500">
                        
                        <!-- Overlays -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        
                        <!-- Badges -->
                        <div class="absolute top-4 left-4 flex gap-2">
                            @if($tour->is_popular)
                            <span class="bg-primary-500 text-white px-3 py-1 rounded-full text-xs font-semibold">
                                🔥 Popular
                            </span>
                            @endif
                            <span class="glass-effect text-white px-3 py-1 rounded-full text-xs font-semibold">
                                {{ $index + 1 }} Day{{ $index > 0 ? 's' : '' }}
                            </span>
                        </div>

                        <!-- Favorite Button -->
                        <button class="absolute top-4 right-4 w-10 h-10 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all">
                            <i class="fas fa-heart"></i>
                        </button>
                    </div>
                    
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-primary-600 text-sm font-semibold uppercase tracking-wide">Sri Lanka Tour</span>
                            <div class="flex text-yellow-400">
                                @for($i = 0; $i < 5; $i++)
                                <i class="fas fa-star text-sm"></i>
                                @endfor
                                <span class="text-gray-600 text-sm ml-1">(4.9)</span>
                            </div>
                        </div>
                        
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 leading-tight">{{ $tour->title }}</h3>
                        <p class="text-gray-600 mb-6 line-clamp-3 leading-relaxed">{{ $tour->subtitle ?: Str::limit($tour->description, 120) }}</p>
                        
                        <!-- Tour Features -->
                        <div class="grid grid-cols-2 gap-4 mb-6 text-sm text-gray-600">
                            <div class="flex items-center">
                                <i class="fas fa-clock text-primary-500 mr-2"></i>
                                <span>{{ $tour->duration ?: '3-5 Days' }}</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-users text-primary-500 mr-2"></i>
                                <span>2-15 People</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-car text-primary-500 mr-2"></i>
                                <span>Transport Included</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-utensils text-primary-500 mr-2"></i>
                                <span>Meals Included</span>
                            </div>
                        </div>
                        
                        <!-- Price and Booking -->
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <span class="text-3xl font-bold text-gray-900">$299</span>
                                <span class="text-gray-600 text-sm">/person</span>
                            </div>
                            <span class="text-green-600 text-sm font-semibold">Available</span>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class="space-y-3">
                            <a href="{{ route('tours.show', ['locale' => app()->getLocale(), 'slug' => $tour->slug]) }}" 
                               class="w-full bg-primary-500 text-white py-4 px-6 rounded-2xl font-semibold hover:bg-primary-600 transform hover:scale-105 transition-all duration-300 block text-center group">
                                <span class="group-hover:mr-2 transition-all">View Details</span>
                                <i class="fas fa-arrow-right opacity-0 group-hover:opacity-100 transition-all"></i>
                            </a>
                            <a href="https://wa.me/94776605054?text=Hi! I'm interested in the {{ urlencode($tour->title) }} tour package. Can you provide more details?" 
                               target="_blank"
                               class="w-full bg-green-500 text-white py-4 px-6 rounded-2xl font-semibold hover:bg-green-600 transform hover:scale-105 transition-all duration-300 block text-center group">
                                <i class="fab fa-whatsapp mr-2"></i>
                                <span>Book via WhatsApp</span>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <!-- No Tours Available -->
            <div class="text-center py-16">
                <div class="max-w-md mx-auto">
                    <i class="fas fa-map-marked-alt text-6xl text-gray-300 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-600 mb-2">{{ __('messages.tours.no_tours') }}</h3>
                    <p class="text-gray-500 mb-6">{{ __('messages.tours.no_tours_description') }}</p>
                    <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" 
                       class="inline-flex items-center bg-primary-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-primary-600 transition-colors duration-300">
                        {{ __('messages.contact_us') }}
                    </a>
                </div>
            </div>
            @endif
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 animate-on-scroll">
                <span class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4 block">Why Choose Us</span>
                <h2 class="text-4xl lg:text-5xl font-bold mb-6 text-gray-900">Your Perfect Travel Partner</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">We don't just plan trips, we create memories that last a lifetime. Here's what makes us different.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="text-center animate-on-scroll">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-user-friends text-primary-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Local Expertise</h3>
                    <p class="text-gray-600">Born and raised in Sri Lanka, we know every hidden gem, local secret, and authentic experience.</p>
                </div>

                <div class="text-center animate-on-scroll">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-heart text-primary-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Personalized Service</h3>
                    <p class="text-gray-600">Every tour is tailored to your interests, budget, and travel style. No cookie-cutter experiences.</p>
                </div>

                <div class="text-center animate-on-scroll">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-shield-alt text-primary-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Safety First</h3>
                    <p class="text-gray-600">Licensed guides, insured vehicles, and 24/7 support ensure your safety and peace of mind.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-20 bg-gradient-to-br from-primary-500 via-primary-600 to-orange-600 relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="animate-float absolute top-10 left-10 w-20 h-20 bg-white/10 rounded-full blur-sm"></div>
            <div class="animate-float absolute bottom-20 right-20 w-16 h-16 bg-white/5 rounded-full blur-sm" style="animation-delay: 1s;"></div>
        </div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="animate-on-scroll">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Ready for Your Sri Lankan Adventure?</h2>
                <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">Don't wait for someday. Your perfect Sri Lankan holiday is just a message away. Let's make it happen!</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="https://wa.me/94776605054?text=Hi! I'd like to plan a custom Sri Lanka tour. Can you help me?" 
                       target="_blank"
                       class="inline-flex items-center justify-center bg-white text-primary-600 px-8 py-4 rounded-2xl font-bold text-lg hover:bg-gray-100 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                        <i class="fab fa-whatsapp mr-2 text-green-500"></i>Plan My Trip Now
                    </a>
                    <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" 
                       class="inline-flex items-center justify-center glass-effect text-white px-8 py-4 rounded-2xl font-bold text-lg hover:bg-white/20 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-envelope mr-2"></i>Get Custom Quote
                    </a>
                </div>
                <p class="text-white/80 text-sm mt-6">
                    💬 Free consultation • 🚀 Quick response • ✨ Custom itinerary
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <h3 class="text-xl font-bold text-primary-500 mb-4">COCO Island Holidays</h3>
                    <p class="text-gray-400 mb-4">
                        Experience the wonder of Sri Lanka with our carefully crafted tours and personalized service.
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/coco.island.holidays" target="_blank" class="text-gray-400 hover:text-primary-500 transition-colors">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="https://www.instagram.com/coco.island.holidays" target="_blank" class="text-gray-400 hover:text-primary-500 transition-colors">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="https://www.tiktok.com/@coco.island.holidays" target="_blank" class="text-gray-400 hover:text-primary-500 transition-colors">
                            <i class="fab fa-tiktok text-xl"></i>
                        </a>
                        <a href="https://wa.me/94776605054" target="_blank" class="text-gray-400 hover:text-primary-500 transition-colors">
                            <i class="fab fa-whatsapp text-xl"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">{{ __('messages.footer.quick_links') }}</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="text-gray-400 hover:text-white transition-colors">{{ __('messages.nav.home') }}</a></li>
                        <li><a href="{{ route('about', ['locale' => app()->getLocale()]) }}" class="text-gray-400 hover:text-white transition-colors">{{ __('messages.nav.about') }}</a></li>
                        <li><a href="{{ route('tours.index', ['locale' => app()->getLocale()]) }}" class="text-gray-400 hover:text-white transition-colors">{{ __('messages.nav.tours') }}</a></li>
                        <li><a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="text-gray-400 hover:text-white transition-colors">{{ __('messages.nav.contact') }}</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">{{ __('messages.footer.contact_info') }}</h4>
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
        // Enhanced JavaScript for Tours Page
        document.addEventListener('DOMContentLoaded', function() {
            // Loading screen
            setTimeout(() => {
                document.getElementById('loading').classList.add('hidden');
            }, 1000);

            // Search functionality
            const searchInput = document.getElementById('tour-search');
            const tourCards = document.querySelectorAll('.tour-card');
            
            if (searchInput) {
                searchInput.addEventListener('input', function() {
                    const searchTerm = this.value.toLowerCase();
                    
                    tourCards.forEach(card => {
                        const title = card.querySelector('h3').textContent.toLowerCase();
                        const description = card.querySelector('p').textContent.toLowerCase();
                        
                        if (title.includes(searchTerm) || description.includes(searchTerm)) {
                            card.style.display = 'block';
                            card.style.animation = 'fadeInUp 0.5s ease-in';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            }

            // Filter functionality
            const filterButtons = document.querySelectorAll('.filter-button');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const filter = this.getAttribute('data-filter');
                    
                    tourCards.forEach(card => {
                        if (filter === 'all') {
                            card.style.display = 'block';
                            card.style.animation = 'fadeInUp 0.5s ease-in';
                        } else {
                            // Check for category badges in the card
                            const categoryBadges = card.querySelectorAll('span');
                            let showCard = false;
                            
                            categoryBadges.forEach(badge => {
                                const badgeText = badge.textContent.toLowerCase();
                                if (badgeText.includes(filter) || 
                                    (filter === 'cultural' && badgeText.includes('heritage')) ||
                                    (filter === 'adventure' && badgeText.includes('safari')) ||
                                    (filter === 'beach' && badgeText.includes('paradise')) ||
                                    (filter === 'wildlife' && badgeText.includes('safari'))) {
                                    showCard = true;
                                }
                            });
                            
                            if (showCard) {
                                card.style.display = 'block';
                                card.style.animation = 'fadeInUp 0.5s ease-in';
                            } else {
                                card.style.display = 'none';
                            }
                        }
                    });
                });
            });

            // Stats counter animation
            const statsCounters = document.querySelectorAll('.stats-counter');
            const statsObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        const target = counter.textContent;
                        const isNumber = /^\d+/.test(target);
                        
                        if (isNumber) {
                            const finalValue = parseInt(target);
                            let currentValue = 0;
                            const increment = finalValue / 50;
                            
                            const timer = setInterval(() => {
                                currentValue += increment;
                                if (currentValue >= finalValue) {
                                    counter.textContent = target;
                                    clearInterval(timer);
                                } else {
                                    counter.textContent = Math.floor(currentValue) + target.replace(/^\d+/, '');
                                }
                            }, 30);
                        }
                        
                        statsObserver.unobserve(counter);
                    }
                });
            }, { threshold: 0.5 });

            statsCounters.forEach(counter => {
                statsObserver.observe(counter);
            });

            // Favorite button functionality
            document.querySelectorAll('.fa-heart').forEach(heart => {
                heart.parentElement.addEventListener('click', function(e) {
                    e.preventDefault();
                    heart.classList.toggle('text-red-500');
                    heart.classList.add('animate-bounce');
                    setTimeout(() => {
                        heart.classList.remove('animate-bounce');
                    }, 600);
                });
            });

            // Category card hover effects
            document.querySelectorAll('.category-card').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px) scale(1.05)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });

            // Smooth scrolling for anchor links
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

            // Add dynamic CSS
            const style = document.createElement('style');
            style.textContent = `
                @keyframes fadeInUp {
                    from { 
                        opacity: 0; 
                        transform: translateY(30px); 
                    }
                    to { 
                        opacity: 1; 
                        transform: translateY(0); 
                    }
                }
                
                .tour-card {
                    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                }
                
                .tour-card:hover {
                    transform: translateY(-8px) scale(1.02);
                    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
                }
                
                .category-card {
                    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                }
                
                .filter-button {
                    transition: all 0.2s ease;
                }
                
                .filter-button.active {
                    background: linear-gradient(135deg, #3B82F6 0%, #1D4ED8 100%);
                    color: white;
                    border-color: #1D4ED8;
                    transform: translateY(-2px);
                    box-shadow: 0 10px 25px rgba(59, 130, 246, 0.3);
                }
                
                .filter-button:hover:not(.active) {
                    background-color: #f3f4f6;
                    transform: translateY(-1px);
                }
                
                .search-input:focus {
                    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
                    transform: scale(1.02);
                }
                
                .gradient-text {
                    background: linear-gradient(135deg, #ffffff 0%, #e0e7ff 100%);
                    -webkit-background-clip: text;
                    background-clip: text;
                    -webkit-text-fill-color: transparent;
                }
                
                .glass-effect:hover {
                    background: rgba(255, 255, 255, 0.25);
                    backdrop-filter: blur(10px);
                }
                
                .animate-on-scroll.animated {
                    animation: fadeInUp 0.8s ease-out forwards;
                }
                
                .hero-bg {
                    background: linear-gradient(135deg, 
                        rgba(59, 130, 246, 0.9) 0%, 
                        rgba(147, 51, 234, 0.8) 50%, 
                        rgba(239, 68, 68, 0.7) 100%), 
                        url('{{ asset("frontend/assets/img/slider/slider-01.jpg") }}') center/cover;
                }
            `;
            document.head.appendChild(style);
        });

        // Loading screen
        window.addEventListener('load', function() {
            document.getElementById('loading').classList.add('hidden');
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
    </script>
</body>
</html>
