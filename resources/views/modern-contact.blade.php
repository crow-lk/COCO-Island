<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | COCO Island Holidays - Travel Agency</title>
    <meta name="description" content="Get in touch with COCO Island Holidays. Contact us for bookings, inquiries, and travel planning assistance.">
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

    @include('components.header')

    <!-- Hero Section -->
    <section class="hero-bg relative h-screen flex items-center justify-center">
        <div class="text-center text-gray-900 animate-on-scroll">
            <h1 class="text-base md:text-base font-bold mb-4">Contact Us</h1>
            <p class="text-base md:text-base opacity-90">Get in touch for your dream Sri Lankan adventure</p>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center animate-on-scroll">
                    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-phone text-base text-white"></i>
                    </div>
                    <h3 class="text-base font-bold text-gray-900 mb-2">Phone</h3>
                    <p class="text-gray-600">
                        <a href="tel:+94776605054" class="hover:text-primary transition-colors">+94 77 660 5054</a>
                    </p>
                </div>
                
                <div class="text-center animate-on-scroll">
                    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-map-marker-alt text-base text-white"></i>
                    </div>
                    <h3 class="text-base font-bold text-gray-900 mb-2">Address</h3>
                    <p class="text-gray-600">01, Wickramasinghepura, Ruwanmaga, Dodangoda, Kaluthara</p>
                </div>
                
                <div class="text-center animate-on-scroll">
                    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-envelope text-base text-white"></i>
                    </div>
                    <h3 class="text-base font-bold text-gray-900 mb-2">Email</h3>
                    <p class="text-gray-600">
                        <a href="mailto:info@cocoislandholidays.com" class="hover:text-primary transition-colors">info@cocoislandholidays.com</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Map and Contact Form Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Google Map -->
                <div class="animate-on-scroll">
                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden h-96">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63359.83101338046!2d79.8612436!3d6.9270786!2m3!1f0!2f0!3f0!3m2!1i1024!i768!4f13.1!3m3!1m2!1s0x3ae2591b9f6d9c5b%3A0x1234567890abcdef!2sColombo!5e0!3m2!1sen!2slk!4v1700000000000"
                            class="w-full h-full border-0" 
                            allowfullscreen 
                            loading="lazy">
                        </iframe>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="animate-on-scroll">
                    <div class="bg-white rounded-2xl shadow-xl p-8">
                        <h3 class="text-base font-bold text-gray-900 mb-8">Get In Touch</h3>
                        <form action="{{ route('contact') }}" method="POST" class="space-y-6">
                            @csrf
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Your Name</label>
                                <input type="text" 
                                       id="name" 
                                       name="name" 
                                       required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-colors">
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Your Email</label>
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-colors">
                            </div>
                            
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                                <input type="text" 
                                       id="subject" 
                                       name="subject" 
                                       required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-colors">
                            </div>
                            
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Your Message</label>
                                <textarea id="message" 
                                          name="message" 
                                          rows="5" 
                                          required
                                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-colors resize-none"></textarea>
                            </div>
                            
                            <button type="submit" 
                                    class="w-full bg-primary text-white py-3 px-6 rounded-lg font-semibold hover:bg-secondary transform hover:scale-105 transition-all duration-300">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media Section -->
    <section class="py-20 bg-gradient-to-br from-primary to-secondary">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h3 class="text-base font-bold text-white mb-4 animate-on-scroll">Connect with Us on Social Media</h3>
            <p class="text-base text-white/90 mb-12 animate-on-scroll">Stay inspired and updated—follow Coco Island Holidays on your favorite platforms for travel stories, offers, and unforgettable moments.</p>
            
            <div class="flex justify-center space-x-8 animate-on-scroll">
                <a href="https://www.facebook.com/coco.island.holidays" 
                   target="_blank" 
                   class="bg-white/20 backdrop-blur-sm w-16 h-16 rounded-full flex items-center justify-center text-white hover:bg-white hover:text-primary transform hover:scale-110 transition-all duration-300">
                    <i class="fab fa-facebook-f text-base"></i>
                </a>
                <a href="https://www.instagram.com/coco.island.holidays" 
                   target="_blank" 
                   class="bg-white/20 backdrop-blur-sm w-16 h-16 rounded-full flex items-center justify-center text-white hover:bg-white hover:text-primary transform hover:scale-110 transition-all duration-300">
                    <i class="fab fa-instagram text-base"></i>
                </a>
                <a href="https://www.tiktok.com/@coco.island.holidays" 
                   target="_blank" 
                   class="bg-white/20 backdrop-blur-sm w-16 h-16 rounded-full flex items-center justify-center text-white hover:bg-white hover:text-primary transform hover:scale-110 transition-all duration-300">
                    <i class="fab fa-tiktok text-base"></i>
                </a>
                <a href="https://wa.me/94776605054" 
                   target="_blank" 
                   class="bg-white/20 backdrop-blur-sm w-16 h-16 rounded-full flex items-center justify-center text-white hover:bg-white hover:text-primary transform hover:scale-110 transition-all duration-300">
                    <i class="fab fa-whatsapp text-base"></i>
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
