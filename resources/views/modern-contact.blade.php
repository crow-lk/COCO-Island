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
            background: linear-gradient(135deg, rgba(249, 115, 22, 0.9) 0%, rgba(234, 88, 12, 0.9) 100%), 
                        url('{{ asset("frontend/assets/img/best_things/Thalawakale.jpg") }}') center/cover no-repeat;
            background-attachment: fixed;
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
            <div class="absolute top-20 left-20 w-64 h-64 bg-white/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-20 right-20 w-48 h-48 bg-orange-400/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 left-1/4 w-32 h-32 bg-primary-400/20 rounded-full blur-2xl animate-pulse" style="animation-delay: 4s;"></div>
        </div>

        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-primary-600/80 via-primary-500/60 to-orange-600/80"></div>

        <!-- Content -->
        <div class="relative z-10 text-center max-w-5xl mx-auto px-4 animate-on-scroll">
            <div class="mb-8">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-md rounded-full mb-6">
                    <i class="fas fa-paper-plane text-3xl text-white"></i>
                </div>
            </div>
            <h1 class="text-4xl lg:text-6xl font-bold mb-6 leading-tight">
                Get In <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-orange-300">Touch</span>
            </h1>
            <p class="text-xl lg:text-2xl mb-8 text-white/90 leading-relaxed max-w-4xl mx-auto">
                Ready to discover Sri Lanka's hidden treasures? Our local experts are here to craft your perfect adventure.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contact-form" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold rounded-xl bg-white text-primary-600 hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-envelope mr-3"></i>
                    Send Message
                </a>
                <a href="https://wa.me/94776605054" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold rounded-xl bg-green-600 text-white hover:bg-green-700 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fab fa-whatsapp mr-3"></i>
                    WhatsApp Now
                </a>
            </div>
        </div>

        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-center animate-on-scroll">
            <div class="flex flex-col items-center text-white/80">
                <span class="text-sm mb-2">Scroll Down</span>
                <div class="animate-bounce">
                    <i class="fas fa-chevron-down text-xl"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Methods Section -->
    <section class="py-16 lg:py-24 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-20 left-20 w-96 h-96 bg-primary-500 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-20 w-64 h-64 bg-orange-500 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <!-- Section Header -->
            <div class="text-center mb-16 animate-on-scroll">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">Connect With Us</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">Multiple Ways to Reach Us</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Choose your preferred method of communication. We're available 24/7 to help plan your Sri Lankan adventure.
                </p>
            </div>

            <!-- Contact Methods Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                
                <!-- Phone -->
                <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl text-center animate-on-scroll transition-all duration-500 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-phone text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-primary-600 transition-colors duration-300">Phone</h3>
                    <p class="text-gray-600 mb-4">Call us directly for immediate assistance</p>
                    <a href="tel:+94776605054" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-semibold">
                        <i class="fas fa-phone-alt mr-2"></i>
                        +94 77 660 5054
                    </a>
                </div>

                <!-- WhatsApp -->
                <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl text-center animate-on-scroll transition-all duration-500 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fab fa-whatsapp text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-primary-600 transition-colors duration-300">WhatsApp</h3>
                    <p class="text-gray-600 mb-4">Quick messages and instant responses</p>
                    <a href="https://wa.me/94776605054" target="_blank" class="inline-flex items-center text-green-600 hover:text-green-700 font-semibold">
                        <i class="fab fa-whatsapp mr-2"></i>
                        Chat Now
                    </a>
                </div>

                <!-- Email -->
                <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl text-center animate-on-scroll transition-all duration-500 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-envelope text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-primary-600 transition-colors duration-300">Email</h3>
                    <p class="text-gray-600 mb-4">Detailed inquiries and planning</p>
                    <a href="mailto:info@cocoislandholidays.com" class="inline-flex items-center text-purple-600 hover:text-purple-700 font-semibold">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Send Email
                    </a>
                </div>

                <!-- Location -->
                <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl text-center animate-on-scroll transition-all duration-500 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-map-marker-alt text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4 group-hover:text-primary-600 transition-colors duration-300">Visit Us</h3>
                    <p class="text-gray-600 mb-4">Meet our team in person</p>
                    <address class="text-red-600 font-semibold not-italic">
                        <i class="fas fa-location-dot mr-2"></i>
                        Kaluthara, Sri Lanka
                    </address>
                </div>

            </div>

            <!-- Operating Hours -->
            <div class="bg-gradient-to-r from-primary-500 to-orange-500 rounded-3xl p-8 lg:p-12 text-white text-center animate-on-scroll">
                <div class="max-w-4xl mx-auto">
                    <div class="flex items-center justify-center mb-6">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center">
                            <i class="fas fa-clock text-2xl"></i>
                        </div>
                    </div>
                    <h3 class="text-2xl lg:text-3xl font-bold mb-4">We're Here When You Need Us</h3>
                    <p class="text-primary-100 text-lg mb-8 leading-relaxed">
                        Our dedicated team is available around the clock to ensure your travel experience is seamless from start to finish.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                        <div class="bg-white/10 backdrop-blur-md rounded-xl p-6">
                            <div class="text-3xl font-bold text-yellow-300 mb-2">24/7</div>
                            <div class="text-primary-100">WhatsApp Support</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-md rounded-xl p-6">
                            <div class="text-3xl font-bold text-yellow-300 mb-2">6AM - 10PM</div>
                            <div class="text-primary-100">Phone Assistance</div>
                        </div>
                        <div class="bg-white/10 backdrop-blur-md rounded-xl p-6">
                            <div class="text-3xl font-bold text-yellow-300 mb-2">24 Hours</div>
                            <div class="text-primary-100">Email Response</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Map Section -->
    <section id="contact-form" class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                
                <!-- Contact Form -->
                <div class="animate-on-scroll">
                    <div class="max-w-lg mx-auto lg:max-w-none">
                        <div class="mb-8">
                            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Send Us a Message</h2>
                            <p class="text-lg text-gray-600 leading-relaxed">
                                Tell us about your dream Sri Lankan adventure, and we'll craft the perfect itinerary just for you.
                            </p>
                        </div>
                        
                        <!-- Success/Error Messages -->
                        @if(session('success'))
                            <div class="bg-green-50 border-l-4 border-green-400 p-4 mb-6">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm text-green-700">{{ session('success') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="bg-red-50 border-l-4 border-red-400 p-4 mb-6">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm text-red-700">{{ session('error') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="bg-red-50 border-l-4 border-red-400 p-4 mb-6">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <h3 class="text-sm font-medium text-red-800">Please fix the following errors:</h3>
                                        <div class="mt-2 text-sm text-red-700">
                                            <ul class="list-disc list-inside space-y-1">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <form action="{{ route('contact.submit', app()->getLocale()) }}" method="POST" class="space-y-8">
                            @csrf
                            
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-3">Your Name *</label>
                                    <input type="text" 
                                           id="name" 
                                           name="name" 
                                           value="{{ old('name') }}"
                                           required
                                           class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-0 focus:border-primary-500 transition-all duration-300 text-gray-900">
                                </div>
                                
                                <div>
                                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-3">Email Address *</label>
                                    <input type="email" 
                                           id="email" 
                                           name="email" 
                                           value="{{ old('email') }}"
                                           required
                                           class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-0 focus:border-primary-500 transition-all duration-300 text-gray-900">
                                </div>
                            </div>
                            
                            <div>
                                <label for="subject" class="block text-sm font-semibold text-gray-700 mb-3">Subject *</label>
                                <input type="text" 
                                       id="subject" 
                                       name="subject" 
                                       value="{{ old('subject') }}"
                                       required
                                       class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-0 focus:border-primary-500 transition-all duration-300 text-gray-900">
                            </div>
                            
                            <div>
                                <label for="message" class="block text-sm font-semibold text-gray-700 mb-3">Your Message *</label>
                                <textarea id="message" 
                                          name="message" 
                                          rows="6" 
                                          required
                                          placeholder="Tell us about your travel plans, interests, and any special requirements..."
                                          class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-0 focus:border-primary-500 transition-all duration-300 resize-none text-gray-900">{{ old('message') }}</textarea>
                            </div>

                            <!-- Privacy Disclaimer -->
                            <div class="bg-gradient-to-r from-primary-50 to-orange-50 p-6 rounded-xl border border-primary-100">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="w-6 h-6 text-primary-600 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm text-gray-700 leading-relaxed">
                                            By submitting this form, you agree to our 
                                            <a href="{{ route('privacy.policy', app()->getLocale()) }}" class="text-primary-600 hover:text-primary-700 underline font-medium">Privacy Policy</a> 
                                            and 
                                            <a href="{{ route('terms.conditions', app()->getLocale()) }}" class="text-primary-600 hover:text-primary-700 underline font-medium">Terms & Conditions</a>.
                                            Your personal information will be handled securely and used only to respond to your inquiry.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <button type="submit" 
                                    class="w-full bg-gradient-to-r from-primary-500 to-orange-500 text-white py-4 px-8 rounded-xl font-semibold text-lg hover:from-primary-600 hover:to-orange-600 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                                <i class="fas fa-paper-plane mr-3"></i>
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
                
                <!-- Map & Location Info -->
                <div class="animate-on-scroll">
                    <div class="sticky top-8">
                        <div class="mb-8">
                            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Visit Our Office</h2>
                            <p class="text-lg text-gray-600 leading-relaxed mb-6">
                                Located in the heart of Kaluthara, we welcome you to visit us for personalized travel consultations.
                            </p>
                            
                            <!-- Location Details -->
                            <div class="space-y-4 mb-8">
                                <div class="flex items-start">
                                    <div class="w-10 h-10 bg-primary-500 rounded-lg flex items-center justify-center mr-4 mt-1">
                                        <i class="fas fa-map-marker-alt text-white"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900 mb-1">Address</h4>
                                        <p class="text-gray-600">01, Wickramasinghepura, Ruwanmaga, Dodangoda, Kaluthara, Sri Lanka</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start">
                                    <div class="w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center mr-4 mt-1">
                                        <i class="fas fa-phone text-white"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900 mb-1">Phone</h4>
                                        <a href="tel:+94776605054" class="text-green-600 hover:text-green-700 font-medium">+94 77 660 5054</a>
                                    </div>
                                </div>
                                
                                <div class="flex items-start">
                                    <div class="w-10 h-10 bg-purple-500 rounded-lg flex items-center justify-center mr-4 mt-1">
                                        <i class="fas fa-envelope text-white"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900 mb-1">Email</h4>
                                        <a href="mailto:info@cocoislandholidays.com" class="text-purple-600 hover:text-purple-700 font-medium">info@cocoislandholidays.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Google Map -->
                        <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63359.83101338046!2d79.8612436!3d6.9270786!2m3!1f0!2f0!3f0!3m2!1i1024!i768!4f13.1!3m3!1m2!1s0x3ae2591b9f6d9c5b%3A0x1234567890abcdef!2sKaluthara%2C%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1700000000000"
                                class="w-full h-96 border-0" 
                                allowfullscreen 
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media Section -->
    <section class="py-16 lg:py-24 bg-gradient-to-r from-primary-500 to-orange-500 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="animate-on-scroll">
                <div class="mb-8">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-md rounded-full mb-6">
                        <i class="fas fa-heart text-3xl"></i>
                    </div>
                </div>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6">Follow Our Journey</h2>
                <p class="text-xl text-primary-100 mb-12 leading-relaxed">
                    Stay inspired and updated—follow Coco Island Holidays on your favorite platforms for travel stories, offers, and unforgettable moments.
                </p>
                
                <!-- Social Media Links -->
                <div class="flex justify-center space-x-6 mb-12">
                    <a href="https://www.facebook.com/coco.island.holidays" 
                       target="_blank" 
                       class="bg-white/20 backdrop-blur-sm w-16 h-16 rounded-full flex items-center justify-center text-white hover:bg-white hover:text-primary-500 transform hover:scale-110 transition-all duration-300">
                        <i class="fab fa-facebook-f text-xl"></i>
                    </a>
                    <a href="https://www.instagram.com/coco.island.holidays" 
                       target="_blank" 
                       class="bg-white/20 backdrop-blur-sm w-16 h-16 rounded-full flex items-center justify-center text-white hover:bg-white hover:text-primary-500 transform hover:scale-110 transition-all duration-300">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="https://www.tiktok.com/@coco.island.holidays" 
                       target="_blank" 
                       class="bg-white/20 backdrop-blur-sm w-16 h-16 rounded-full flex items-center justify-center text-white hover:bg-white hover:text-primary-500 transform hover:scale-110 transition-all duration-300">
                        <i class="fab fa-tiktok text-xl"></i>
                    </a>
                    <a href="https://wa.me/94776605054" 
                       target="_blank" 
                       class="bg-white/20 backdrop-blur-sm w-16 h-16 rounded-full flex items-center justify-center text-white hover:bg-white hover:text-primary-500 transform hover:scale-110 transition-all duration-300">
                        <i class="fab fa-whatsapp text-xl"></i>
                    </a>
                </div>

                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8">
                    <h3 class="text-2xl font-bold mb-4">Ready to Start Your Adventure?</h3>
                    <p class="text-primary-100 mb-6">Let our local experts craft your perfect Sri Lankan journey today.</p>
                    <a href="https://wa.me/94776605054" class="inline-flex items-center bg-white text-primary-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <i class="fab fa-whatsapp mr-3"></i>
                        Start Planning Now
                    </a>
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
                        <li><a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">About</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Packages</a></li>
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
                <div class="mb-4 space-x-6">
                    <a href="{{ route('privacy.policy', ['locale' => app()->getLocale()]) }}" class="hover:text-white transition-colors">Privacy Policy</a>
                    <span>•</span>
                    <a href="{{ route('terms.conditions', ['locale' => app()->getLocale()]) }}" class="hover:text-white transition-colors">Terms & Conditions</a>
                </div>
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

        document.querySelectorAll('.animate-on-scroll').forEach(element => {
            observer.observe(element);
        });

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

        // Form enhancement
        document.querySelectorAll('input, textarea').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.classList.remove('focused');
                }
            });
        });
    </script>
</body>
</html>
