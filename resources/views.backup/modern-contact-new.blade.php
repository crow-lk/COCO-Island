<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | COCO Island Holidays</title>
    <meta name="description" content="Get in touch with COCO Island Holidays. Contact us for bookings, inquiries, and travel planning assistance for your Sri Lankan adventure.">
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
                    }
                }
            }
        }
    </script>

<style>
    .hero-bg {
        background: linear-gradient(135deg, rgba(249, 115, 22, 0.9) 0%, rgba(234, 88, 12, 0.9) 100%), 
                    url('{{ asset("frontend/assets/img/best_things/Thalawakale.jpg") }}') center/cover no-repeat;
        background-attachment: fixed;
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
    
    .contact-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
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
    
    .map-container {
        position: relative;
        overflow: hidden;
        border-radius: 1.5rem;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }
    
    .map-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, rgba(249, 115, 22, 0.1), rgba(234, 88, 12, 0.1));
        pointer-events: none;
        z-index: 1;
    }
    
    .form-input:focus {
        box-shadow: 0 0 0 3px rgba(249, 115, 22, 0.1);
        border-color: #f97316;
    }
    
    .service-card {
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .service-card:hover {
        transform: translateY(-8px) scale(1.02);
    }
</style>
@endsection

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
            <div class="absolute bottom-20 right-20 w-48 h-48 bg-orange-400/20 rounded-full blur-3xl floating-element" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 left-1/4 w-32 h-32 bg-primary-400/20 rounded-full blur-2xl floating-element" style="animation-delay: 4s;"></div>
        </div>

        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-primary-600/80 via-primary-500/60 to-orange-600/80"></div>

        <!-- Content -->
        <div class="relative z-10 text-center max-w-5xl mx-auto px-4 scroll-animate">
            <div class="mb-8">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-md rounded-full mb-6">
                    <i class="fas fa-paper-plane text-3xl text-white"></i>
                </div>
            </div>
            <h1 class="text-4xl lg:text-6xl font-bold mb-6 leading-tight">
                Get In <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-orange-300">Touch</span>
            </h1>
            <p class="text-xl lg:text-2xl mb-8 text-white/90 leading-relaxed">
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
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-center scroll-animate">
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
            <div class="text-center mb-16 scroll-animate">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">Connect With Us</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">Multiple Ways to Reach Us</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Choose your preferred method of communication. We're available 24/7 to help plan your Sri Lankan adventure.
                </p>
            </div>

            <!-- Contact Methods Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                
                <!-- Phone -->
                <div class="group service-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl text-center scroll-animate">
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
                <div class="group service-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl text-center scroll-animate">
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
                <div class="group service-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl text-center scroll-animate">
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
                <div class="group service-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl text-center scroll-animate">
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
            <div class="bg-gradient-to-r from-primary-500 to-orange-500 rounded-3xl p-8 lg:p-12 text-white text-center scroll-animate">
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
                <div class="scroll-animate">
                    <div class="max-w-lg mx-auto lg:max-w-none">
                        <div class="mb-8">
                            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Send Us a Message</h2>
                            <p class="text-lg text-gray-600 leading-relaxed">
                                Tell us about your dream Sri Lankan adventure, and we'll craft the perfect itinerary just for you.
                            </p>
                        </div>

                        <!-- Success/Error Messages -->
                        @if(session('success'))
                            <div class="bg-green-50 border-l-4 border-green-400 p-6 mb-8 rounded-r-xl">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-lg font-medium text-green-800">{{ session('success') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="bg-red-50 border-l-4 border-red-400 p-6 mb-8 rounded-r-xl">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-lg font-medium text-red-800">{{ session('error') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="bg-red-50 border-l-4 border-red-400 p-6 mb-8 rounded-r-xl">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <h3 class="text-lg font-medium text-red-800 mb-2">Please fix the following errors:</h3>
                                        <ul class="list-disc list-inside space-y-1 text-red-700">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
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
                                           class="form-input w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-0 transition-all duration-300 text-gray-900">
                                </div>
                                
                                <div>
                                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-3">Email Address *</label>
                                    <input type="email" 
                                           id="email" 
                                           name="email" 
                                           value="{{ old('email') }}"
                                           required
                                           class="form-input w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-0 transition-all duration-300 text-gray-900">
                                </div>
                            </div>
                            
                            <div>
                                <label for="subject" class="block text-sm font-semibold text-gray-700 mb-3">Subject *</label>
                                <input type="text" 
                                       id="subject" 
                                       name="subject" 
                                       value="{{ old('subject') }}"
                                       required
                                       class="form-input w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-0 transition-all duration-300 text-gray-900">
                            </div>
                            
                            <div>
                                <label for="message" class="block text-sm font-semibold text-gray-700 mb-3">Your Message *</label>
                                <textarea id="message" 
                                          name="message" 
                                          rows="6" 
                                          required
                                          placeholder="Tell us about your travel plans, interests, and any special requirements..."
                                          class="form-input w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-0 transition-all duration-300 resize-none text-gray-900">{{ old('message') }}</textarea>
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
                                            <a href="{{ route('privacy.policy', app()->getLocale()) }}" class="text-primary-600 hover:text-primary-700 underline font-medium">{{ __("messages.legal.privacy") }}</a> 
                                            and 
                                            <a href="{{ route('terms.conditions', app()->getLocale()) }}" class="text-primary-600 hover:text-primary-700 underline font-medium">{{ __("messages.legal.terms") }}</a>.
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
                <div class="scroll-animate">
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
                        <div class="map-container">
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

    <!-- FAQ Section -->
    <section class="py-16 lg:py-24 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-animate">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">Have Questions?</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">Frequently Asked Questions</h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Quick answers to common questions about our services and travel planning process.
                </p>
            </div>

            <!-- FAQ Items -->
            <div class="space-y-6">
                
                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">How far in advance should I book my tour?</h3>
                            <i class="fas fa-chevron-down text-primary-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            We recommend booking at least 2-4 weeks in advance to ensure availability and better rates. However, we can accommodate last-minute bookings based on availability. Peak season (December-March) requires earlier booking.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">Do you customize tours based on my interests?</h3>
                            <i class="fas fa-chevron-down text-primary-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            Absolutely! We specialize in creating personalized itineraries based on your interests, budget, and travel style. Whether you love wildlife, culture, adventure, or relaxation, we'll craft the perfect experience for you.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">What's included in your tour packages?</h3>
                            <i class="fas fa-chevron-down text-primary-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            Our packages typically include accommodation, transportation, professional guide, entrance fees, and some meals. Specific inclusions vary by tour - we'll provide detailed information when you inquire.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                    <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-semibold text-gray-900">Is Sri Lanka safe for tourists?</h3>
                            <i class="fas fa-chevron-down text-primary-500 transform transition-transform duration-300"></i>
                        </div>
                    </button>
                    <div class="hidden px-8 pb-8">
                        <p class="text-gray-600 leading-relaxed">
                            Yes, Sri Lanka is very safe for tourists. We prioritize your safety with experienced guides, vetted accommodations, and reliable transportation. We also provide 24/7 support throughout your journey.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Social Media Section -->
    <section class="py-16 lg:py-24 bg-gradient-to-r from-primary-500 to-orange-500 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="scroll-animate">
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

                <!-- Tours -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Popular Tours</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Cultural Heritage</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Wildlife Safari</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Tea Trail</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Coastal Paradise</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300">Ramayana Trail</a></li>
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
                    <a href="{{ route('privacy.policy', ['locale' => app()->getLocale()]) }}" class="hover:text-white transition-colors duration-300">{{ __("messages.legal.privacy") }}</a>
                    <span>•</span>
                    <a href="{{ route('terms.conditions', ['locale' => app()->getLocale()]) }}" class="hover:text-white transition-colors duration-300">{{ __("messages.legal.terms") }}</a>
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

        // Form validation enhancement
        document.querySelectorAll('.form-input').forEach(input => {
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
