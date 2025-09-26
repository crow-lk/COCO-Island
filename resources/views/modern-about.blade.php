<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="U       <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-black/20 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">                         <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{ asset('frontend/assets/img/logo/coco-logo.png') }}" 
                             alt="COCO Island Holidays Logo" 
                             class="h-20 w-auto opacity-90 hover:opacity-100 transition-all duration-300 hover:scale-105">
                    </a>
                </div>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | COCO Island Holidays - Travel Agency</title>
    <meta name="description" content="Learn more about COCO Island Holidays, our story, mission, vision, and values.">
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
            background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('frontend/assets/img/about/aboutpage.jpg') }}');
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
                        <a href="{{ route('about') }}" class="text-primary px-3 py-2 text-sm font-medium">About</a>
                        <a href="{{ route('packages') }}" class="text-gray-700 hover:text-primary px-3 py-2 text-sm font-medium transition-colors">Packages</a>
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
                <a href="{{ route('about') }}" class="text-primary block px-3 py-2 text-base font-medium">About</a>
                <a href="{{ route('packages') }}" class="text-gray-700 hover:text-primary block px-3 py-2 text-base font-medium">Packages</a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-primary block px-3 py-2 text-base font-medium">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-bg relative h-screen flex items-center justify-center">
        <div class="text-center text-gray-900 animate-on-scroll">
            <h1 class="text-base md:text-lg font-bold mb-4">About Us</h1>
            <p class="text-base md:text-base opacity-90">Discover our story and passion for travel</p>
        </div>
    </section>

    <!-- Company Story Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="animate-on-scroll">
                    <img src="{{ asset('frontend/assets/img/about/about-1.jpg') }}" 
                         alt="About Coco Island Holidays" 
                         class="w-full rounded-2xl shadow-xl">
                </div>
                <div class="animate-on-scroll">
                    <h2 class="text-base font-bold text-gray-900 mb-6">Company Story</h2>
                    <p class="text-base text-gray-700 mb-6 leading-relaxed">
                        Coco Island Holidays was founded with a passion for showcasing the true beauty of Sri Lanka through meaningful, well-crafted travel experiences. What began as a small local initiative has grown into a trusted travel brand, known for personalized service, attention to detail, and an unwavering commitment to guest satisfaction.
                    </p>
                    <p class="text-base text-gray-700 leading-relaxed">
                        Our team, made up of seasoned travel experts and passionate locals, curates every journey with care, ensuring that travelers not only see Sri Lanka but truly connect with it. From scenic hill country escapes to coastal discoveries and cultural heritage sites, we've guided countless travelers through unforgettable moments that last a lifetime.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-20 bg-gradient-to-br from-primary to-secondary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-base font-bold text-center text-gray-900 mb-12 animate-on-scroll">Mission & Vision</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 text-center animate-on-scroll">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-bullseye text-base text-white"></i>
                    </div>
                    <h3 class="text-base font-bold text-white mb-4">Our Mission</h3>
                    <p class="text-white/90 leading-relaxed">
                        To deliver authentic, seamless, and memorable travel experiences across Sri Lanka by combining local expertise, personalized service, and a deep respect for culture, nature, and community.
                    </p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 text-center animate-on-scroll">
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-eye text-base text-white"></i>
                    </div>
                    <h3 class="text-base font-bold text-white mb-4">Our Vision</h3>
                    <p class="text-white/90 leading-relaxed">
                        To be the most trusted and inspiring travel partner for discovering Sri Lanka—known globally for excellence, integrity, and unforgettable journeys that celebrate the island's true spirit.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-base font-bold text-center text-gray-900 mb-12 animate-on-scroll">Our Values</h2>
            <div class="space-y-4">
                <div class="border border-gray-200 rounded-xl animate-on-scroll">
                    <button class="accordion-button w-full px-6 py-4 text-left text-base font-semibold text-gray-900 hover:bg-gray-50 rounded-xl transition-colors flex justify-between items-center">
                        <span>Authenticity</span>
                        <i class="fas fa-chevron-down transform transition-transform"></i>
                    </button>
                    <div class="accordion-content hidden px-6 pb-4">
                        <p class="text-gray-700">We showcase Sri Lanka's true character, its people, culture, and landscapes, with honesty and pride.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-xl animate-on-scroll">
                    <button class="accordion-button w-full px-6 py-4 text-left text-base font-semibold text-gray-900 hover:bg-gray-50 rounded-xl transition-colors flex justify-between items-center">
                        <span>Customer-Centricity</span>
                        <i class="fas fa-chevron-down transform transition-transform"></i>
                    </button>
                    <div class="accordion-content hidden px-6 pb-4">
                        <p class="text-gray-700">Every journey is designed with the traveler in mind, personal, flexible, and hassle-free.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-xl animate-on-scroll">
                    <button class="accordion-button w-full px-6 py-4 text-left text-base font-semibold text-gray-900 hover:bg-gray-50 rounded-xl transition-colors flex justify-between items-center">
                        <span>Responsibility</span>
                        <i class="fas fa-chevron-down transform transition-transform"></i>
                    </button>
                    <div class="accordion-content hidden px-6 pb-4">
                        <p class="text-gray-700">We promote respectful tourism that protects nature, supports local communities, and preserves heritage.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-xl animate-on-scroll">
                    <button class="accordion-button w-full px-6 py-4 text-left text-base font-semibold text-gray-900 hover:bg-gray-50 rounded-xl transition-colors flex justify-between items-center">
                        <span>Reliability</span>
                        <i class="fas fa-chevron-down transform transition-transform"></i>
                    </button>
                    <div class="accordion-content hidden px-6 pb-4">
                        <p class="text-gray-700">From first inquiry to final drop-off, we deliver consistent, dependable service you can trust.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-xl animate-on-scroll">
                    <button class="accordion-button w-full px-6 py-4 text-left text-base font-semibold text-gray-900 hover:bg-gray-50 rounded-xl transition-colors flex justify-between items-center">
                        <span>Passion</span>
                        <i class="fas fa-chevron-down transform transition-transform"></i>
                    </button>
                    <div class="accordion-content hidden px-6 pb-4">
                        <p class="text-gray-700">We love what we do, and it shows in every detail of every trip we create.</p>
                    </div>
                </div>
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

        // Accordion functionality
        document.querySelectorAll('.accordion-button').forEach(button => {
            button.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const icon = this.querySelector('i');
                
                // Close all other accordions
                document.querySelectorAll('.accordion-content').forEach(otherContent => {
                    if (otherContent !== content) {
                        otherContent.classList.add('hidden');
                        otherContent.previousElementSibling.querySelector('i').classList.remove('rotate-180');
                    }
                });
                
                // Toggle current accordion
                content.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
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
    </script>
</body>
</html>
