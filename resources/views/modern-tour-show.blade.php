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
            background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ $tour->hero_image ? asset("storage/" . $tour->hero_image) : ($tour->image_url ?? asset("frontend/assets/img/best_things/Thalawakale.jpg")) }}');
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
            background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ $tour->hero_image ? asset("storage/" . $tour->hero_image) : ($tour->image_url ?? asset("frontend/assets/img/best_things/Thalawakale.jpg")) }}');
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
        <div class="text-center text-white animate-on-scroll px-4">
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight" style="text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);">{{ $tour->title }}</h1>
            @if($tour->subtitle && $tour->duration)
                <p class="text-xl md:text-2xl lg:text-3xl opacity-90 mb-4" style="text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);">{{ $tour->duration }} - {{ $tour->subtitle }}</p>
            @elseif($tour->duration)
                <p class="text-xl md:text-2xl lg:text-3xl opacity-90 mb-4" style="text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);">{{ $tour->duration }}</p>
            @elseif($tour->subtitle)
                <p class="text-xl md:text-2xl lg:text-3xl opacity-90 mb-4" style="text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);">{{ $tour->subtitle }}</p>
            @endif
            <div class="mt-8">
                <a href="#overview" class="inline-flex items-center bg-white text-primary-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 shadow-lg transform hover:scale-105 transition-all duration-300 mr-4">
                    <i class="fas fa-arrow-down mr-2"></i>Explore Tour
                </a>
                <a href="https://wa.me/94776605054?text=Hi! I'm interested in the {{ urlencode($tour->title) }} tour." 
                   target="_blank"
                   class="inline-flex items-center bg-green-500 text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-green-600 shadow-lg transform hover:scale-105 transition-all duration-300">
                    <i class="fab fa-whatsapp mr-2"></i>Book Now
                </a>
            </div>
        </div>
    </section>

    <!-- Tour Overview Section -->
    <section id="overview" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="animate-on-scroll">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">About This Tour</h2>
                    <div class="prose prose-xl text-gray-700 mb-8">
                        <p class="text-lg leading-relaxed">{{ $tour->description }}</p>
                    </div>
                    <div class="space-y-4 mb-8">
                        @if($tour->duration)
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-clock text-primary-500 mr-3 text-xl"></i>
                            <span class="text-lg">{{ $tour->duration }}</span>
                        </div>
                        @endif
                        @if($tour->price)
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-dollar-sign text-primary-500 mr-3 text-xl"></i>
                            <span class="text-lg font-bold text-primary-500">${{ number_format($tour->price) }}</span>
                        </div>
                        @endif
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-users text-primary-500 mr-3 text-xl"></i>
                            <span class="text-lg">Small Groups (2-8 people)</span>
                        </div>
                    </div>
                    <a href="https://wa.me/94776605054?text=Hi! I'm interested in the {{ urlencode($tour->title) }} tour package." 
                       target="_blank"
                       class="inline-flex items-center bg-primary-500 text-white px-8 py-4 rounded-xl font-semibold text-lg hover:bg-primary-600 transform hover:scale-105 transition-all duration-300 shadow-lg">
                        <i class="fab fa-whatsapp mr-2"></i>Contact Us
                    </a>
                </div>
                <div class="animate-on-scroll">
                    <img src="{{ $tour->hero_image ? asset('storage/' . $tour->hero_image) : ($tour->image_url ?? asset('frontend/assets/img/best_things/Thalawakale.jpg')) }}" 
                         alt="{{ $tour->title }}" 
                         class="w-full rounded-2xl shadow-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Key Highlights Section -->
    @if(!empty($tour->highlights))
    <section id="highlights" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12 animate-on-scroll">Key Highlights</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($tour->highlights as $highlight)
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-shadow animate-on-scroll">
                    <div class="w-16 h-16 bg-primary-500/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas {{ $highlight['icon'] ?? 'fa-star' }} text-2xl text-primary-500"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ $highlight['title'] }}</h3>
                    <p class="text-gray-600 leading-relaxed">{{ $highlight['description'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Gallery Section -->
    <section id="gallery" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12 animate-on-scroll">Tour Gallery</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @if($tour->gallery_images && is_array($tour->gallery_images) && count($tour->gallery_images) > 0)
                    @foreach($tour->gallery_images as $index => $image)
                    <div class="aspect-w-16 aspect-h-9 rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow animate-on-scroll">
                        <img src="{{ asset('storage/' . $image) }}" 
                             alt="{{ $tour->title }} Gallery Image {{ $index + 1 }}" 
                             class="w-full h-64 object-cover hover:scale-105 transition-transform duration-300 cursor-pointer"
                             onclick="openImageModal('{{ asset('storage/' . $image) }}')">
                    </div>
                    @endforeach
                @else
                    <!-- Default gallery images -->
                    @php
                        $defaultImages = [
                            'frontend/assets/img/best_things/Thalawakale.jpg',
                            'frontend/assets/img/best_things/Goyambokka-beach.jpg',
                            'frontend/assets/img/best_things/Ramboda-Waterfall.jpg',
                            'frontend/assets/img/best_things/Coconut-Tree-Hill.jpg',
                            'frontend/assets/img/best_things/Nine-Arch-Bridge.jpg',
                            'frontend/assets/img/best_things/Sigiriya-Rock.jpg'
                        ];
                    @endphp
                    
                    @foreach(array_slice($defaultImages, 0, 6) as $index => $image)
                    <div class="aspect-w-16 aspect-h-9 rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow animate-on-scroll">
                        <img src="{{ asset($image) }}" 
                             alt="{{ $tour->title }} Gallery Image {{ $index + 1 }}" 
                             class="w-full h-64 object-cover hover:scale-105 transition-transform duration-300 cursor-pointer"
                             onclick="openImageModal('{{ asset($image) }}')">
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

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
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-12 animate-on-scroll">Why You'll Love It</h2>
            
            <div class="space-y-6 mb-12">
                @foreach($tour->why_youll_love_it as $reason)
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 animate-on-scroll">
                    <p class="text-lg text-white leading-relaxed">{{ $reason }}</p>
                </div>
                @endforeach
            </div>

            <div class="animate-on-scroll">
                <a href="https://wa.me/94776605054?text=Hi! I'm interested in the {{ urlencode($tour->title) }} tour package." 
                   target="_blank"
                   class="inline-flex items-center bg-white text-primary-500 px-8 py-4 rounded-xl font-semibold text-lg hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg">
                    <i class="fab fa-whatsapp mr-2"></i>Contact Us
                </a>
            </div>
        </div>
    </section>
    @endif

    <!-- Related Tours or CTA Section -->
    <section class="py-20 bg-gradient-to-br from-primary-500 to-primary-700">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h3 class="text-3xl md:text-4xl font-bold text-white mb-6 animate-on-scroll">Ready to Book This Adventure?</h3>
            <p class="text-xl text-white/90 mb-8 animate-on-scroll">Contact us today to customize your tour or get more information about this package.</p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center animate-on-scroll">
                <a href="https://wa.me/94776605054?text=Hi! I'm interested in the {{ urlencode($tour->title) }} tour package." 
                   target="_blank"
                   class="bg-white text-primary-500 px-8 py-4 rounded-xl font-semibold text-lg hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg">
                    <i class="fab fa-whatsapp mr-2"></i>Chat with Us
                </a>
                <a href="mailto:info@cocoislandholidays.com" 
                   class="bg-white/20 backdrop-blur-sm text-white px-8 py-4 rounded-xl font-semibold text-lg hover:bg-white/30 transform hover:scale-105 transition-all duration-300">
                    <i class="fas fa-envelope mr-2"></i>Send Email
                </a>
                <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" 
                   class="bg-white/20 backdrop-blur-sm text-white px-8 py-4 rounded-xl font-semibold text-lg hover:bg-white/30 transform hover:scale-105 transition-all duration-300">
                    <i class="fas fa-home mr-2"></i>Back to Home
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <h3 class="text-2xl font-bold text-primary-500 mb-4">COCO Island Holidays</h3>
                    <p class="text-gray-400 mb-4 text-lg leading-relaxed">
                        Experience the wonder of Sri Lanka with our carefully crafted tours and personalized service.
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/coco.island.holidays" target="_blank" class="text-gray-400 hover:text-primary-500 transition-colors">
                            <i class="fab fa-facebook-f text-2xl"></i>
                        </a>
                        <a href="https://www.instagram.com/coco.island.holidays" target="_blank" class="text-gray-400 hover:text-primary-500 transition-colors">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                        <a href="https://www.tiktok.com/@coco.island.holidays" target="_blank" class="text-gray-400 hover:text-primary-500 transition-colors">
                            <i class="fab fa-tiktok text-2xl"></i>
                        </a>
                        <a href="https://wa.me/94776605054" target="_blank" class="text-gray-400 hover:text-primary-500 transition-colors">
                            <i class="fab fa-whatsapp text-2xl"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-xl font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="text-gray-400 hover:text-white transition-colors text-lg">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-lg">Tours</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-lg">About</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-lg">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-xl font-semibold mb-4">Contact Info</h4>
                    <ul class="space-y-3 text-gray-400">
                        <li class="text-lg"><i class="fas fa-phone mr-2"></i> +94 77 660 5054</li>
                        <li class="text-lg"><i class="fas fa-envelope mr-2"></i> info@cocoislandholidays.com</li>
                        <li class="text-lg"><i class="fas fa-map-marker-alt mr-2"></i> Kaluthara, Sri Lanka</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p class="text-lg">&copy; 2025 COCO Island Holidays. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Image Modal -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 z-50 hidden items-center justify-center p-4">
        <div class="relative max-w-4xl w-full">
            <button onclick="closeImageModal()" class="absolute top-4 right-4 text-white text-3xl hover:text-gray-300 z-10">
                <i class="fas fa-times"></i>
            </button>
            <img id="modalImage" src="" alt="Gallery Image" class="w-full h-auto rounded-lg">
        </div>
    </div>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/94776605054?text=Hi! I'm interested in the {{ urlencode($tour->title) }} tour." 
       class="fixed bottom-6 right-6 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transform hover:scale-110 transition-all duration-300 z-30"
       target="_blank" 
       aria-label="Chat on WhatsApp">
        <i class="fab fa-whatsapp text-2xl"></i>
    </a>

    <!-- Scroll to Top Button -->
    <button id="scroll-to-top" 
            class="fixed bottom-6 left-6 bg-primary-500 text-white p-3 rounded-full shadow-lg hover:bg-primary-600 transform hover:scale-110 transition-all duration-300 z-30 hidden">
        <i class="fas fa-arrow-up text-xl"></i>
    </button>

    <script>
        // Loading screen
        window.addEventListener('load', function() {
            document.getElementById('loading').classList.add('hidden');
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const headerHeight = 120; // Account for sticky header
                    const targetPosition = target.offsetTop - headerHeight;
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
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

        // Image modal functions
        function openImageModal(imageSrc) {
            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            modalImage.src = imageSrc;
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeImageModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside the image
        document.getElementById('imageModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeImageModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeImageModal();
            }
        });
    </script>
</body>
</html>
