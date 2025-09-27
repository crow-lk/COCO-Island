<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $tour->meta_title ?? $tour->title }} | COCO Island Holidays</title>
    <meta name="description" content="{{ $tour->meta_description ?? $tour->description }}">
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
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        .hero-bg {
            background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset($tour->hero_image ?: $tour->image_path) }}');
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
        
        .love-it-bg {
            background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset($tour->image_path) }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Loading Spinner -->
    <div id="loading" class="fixed inset-0 bg-white z-50 flex items-center justify-center">
        <div class="w-16 h-16 border-4 border-primary border-t-transparent rounded-full animate-spin"></div>
    </div>

    @include('components.header')

    <!-- Hero Section -->
    <section class="hero-bg relative h-screen flex items-center justify-center">
        <div class="text-center text-gray-900 animate-on-scroll">
            <h1 class="text-base md:text-base font-bold mb-4">{{ $tour->title }}</h1>
            @if($tour->subtitle && $tour->duration)
                <p class="text-base md:text-base opacity-90">{{ $tour->duration }} - {{ $tour->subtitle }}</p>
            @elseif($tour->duration)
                <p class="text-base md:text-base opacity-90">{{ $tour->duration }}</p>
            @elseif($tour->subtitle)
                <p class="text-base md:text-base opacity-90">{{ $tour->subtitle }}</p>
            @endif
        </div>
    </section>

    <!-- Tour Overview Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="animate-on-scroll">
                    <h2 class="text-base font-bold text-gray-900 mb-6">{{ $tour->title }}</h2>
                    <div class="prose prose-lg text-gray-700 mb-8">
                        <p>{{ $tour->description }}</p>
                    </div>
                    <div class="space-y-4 mb-8">
                        @if($tour->duration)
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-clock text-primary mr-3"></i>
                            <span>{{ $tour->duration }}</span>
                        </div>
                        @endif
                        @if($tour->price)
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-dollar-sign text-primary mr-3"></i>
                            <span class="text-base font-bold text-primary">${{ number_format($tour->price) }}</span>
                        </div>
                        @endif
                    </div>
                    <a href="https://wa.me/94776605054?text=Hi! I'm interested in the {{ $tour->title }} tour package." 
                       target="_blank"
                       class="inline-flex items-center bg-primary text-white px-8 py-3 rounded-lg font-semibold hover:bg-secondary transform hover:scale-105 transition-all duration-300">
                        <i class="fab fa-whatsapp mr-2"></i>Contact Us
                    </a>
                </div>
                <div class="animate-on-scroll">
                    <img src="{{ asset($tour->image_path) }}" 
                         alt="{{ $tour->title }}" 
                         class="w-full rounded-2xl shadow-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Key Highlights Section -->
    @if(!empty($tour->highlights))
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-base font-bold text-center text-gray-900 mb-12 animate-on-scroll">Key Highlights</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($tour->highlights as $highlight)
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-shadow animate-on-scroll">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas {{ $highlight['icon'] ?? 'fa-star' }} text-base text-primary"></i>
                    </div>
                    <h3 class="text-base font-bold text-gray-900 mb-4">{{ $highlight['title'] }}</h3>
                    <p class="text-gray-600 leading-relaxed">{{ $highlight['description'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Dynamic Content Section -->
    @if($tour->content)
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="prose prose-lg max-w-none animate-on-scroll">
                {!! $tour->content !!}
            </div>
        </div>
    </section>
    @endif

    <!-- Why You'll Love It Section -->
    @if(!empty($tour->why_youll_love_it))
    <section class="love-it-bg py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-base font-bold text-white mb-12 animate-on-scroll">Why You'll Love It</h2>
            
            <div class="space-y-6 mb-12">
                @foreach($tour->why_youll_love_it as $reason)
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 animate-on-scroll">
                    <p class="text-base text-white leading-relaxed">{{ $reason }}</p>
                </div>
                @endforeach
            </div>

            <div class="animate-on-scroll">
                <a href="https://wa.me/94776605054?text=Hi! I'm interested in the {{ $tour->title }} tour package." 
                   target="_blank"
                   class="inline-flex items-center bg-white text-primary px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transform hover:scale-105 transition-all duration-300">
                    <i class="fab fa-whatsapp mr-2"></i>Contact Us
                </a>
            </div>
        </div>
    </section>
    @endif

    <!-- Related Tours or CTA Section -->
    <section class="py-20 bg-gradient-to-br from-primary to-secondary">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h3 class="text-base font-bold text-white mb-4 animate-on-scroll">Ready to Book This Adventure?</h3>
            <p class="text-base text-white/90 mb-8 animate-on-scroll">Contact us today to customize your tour or get more information about this package.</p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-on-scroll">
                <a href="https://wa.me/94776605054?text=Hi! I'm interested in the {{ $tour->title }} tour package." 
                   target="_blank"
                   class="bg-white text-primary px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transform hover:scale-105 transition-all duration-300">
                    <i class="fab fa-whatsapp mr-2"></i>Chat with Us
                </a>
                <a href="{{ route('contact') }}" 
                   class="bg-white/20 backdrop-blur-sm text-white px-8 py-3 rounded-lg font-semibold hover:bg-white/30 transform hover:scale-105 transition-all duration-300">
                    <i class="fas fa-envelope mr-2"></i>Send Email
                </a>
                <a href="{{ route('packages') }}" 
                   class="bg-white/20 backdrop-blur-sm text-white px-8 py-3 rounded-lg font-semibold hover:bg-white/30 transform hover:scale-105 transition-all duration-300">
                    <i class="fas fa-eye mr-2"></i>View All Packages
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
