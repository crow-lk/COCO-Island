<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy | COCO Island Holidays - Travel Agency</title>
    <meta name="description" content="Read our privacy policy to understand how COCO Island Holidays protects your personal information and data.">
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
    </style>
</head>
<body class="bg-gray-50">
    <!-- Loading Spinner -->
    <div id="loading" class="fixed inset-0 bg-white z-50 flex items-center justify-center">
        <div class="w-16 h-16 border-4 border-primary border-t-transparent rounded-full animate-spin"></div>
    </div>

    @include('components.header')

    <!-- Hero Section -->
    <section class="hero-bg relative h-96 flex items-center justify-center mt-16">
        <div class="text-center text-gray-900">
            <h1 class="text-base md:text-lg font-bold mb-4">Privacy Policy</h1>
            <p class="text-base md:text-base opacity-90">Your privacy matters to us</p>
        </div>
    </section>

    <!-- Privacy Policy Content -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="prose prose-lg max-w-none">
                <div class="bg-white rounded-2xl shadow-lg p-8 md:p-12">
                    <div class="space-y-6 text-gray-700 leading-relaxed">
                        <p>
                            Your privacy matters to us. At <strong class="text-primary">COCO Island Holidays</strong>, we are committed to
                            protecting the personal information you share with us, whether through online inquiries,
                            bookings, or communications.
                        </p>
                        
                        <p>
                            We collect only the information necessary to serve you better, such as your name, email,
                            travel preferences, and payment details, and we use it solely for trip coordination,
                            customer support, and service improvements. Your data is never shared with third parties
                            without your consent, except where legally required or to fulfill your booking (e.g.,
                            hotels, transport providers).
                        </p>
                        
                        <p>
                            All transactions are secured and handled with confidentiality. By using our website and
                            services, you agree to our privacy practices.
                        </p>
                        
                        <div class="bg-gray-50 rounded-lg p-6 border-l-4 border-primary">
                            <p class="mb-0">
                                <strong>Questions or Concerns?</strong><br>
                                For any privacy-related concerns, feel free to contact us at
                                <a href="mailto:info@cocoislandholidays.com" class="text-primary hover:text-secondary transition-colors">info@cocoislandholidays.com</a>.
                            </p>
                        </div>
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
                <div class="mt-2 space-x-4">
                    <a href="{{ route('privacy.policy') }}" class="hover:text-white transition-colors">Privacy Policy</a>
                    <span>•</span>
                    <a href="{{ route('terms.conditions') }}" class="hover:text-white transition-colors">Terms & Conditions</a>
                </div>
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

    <script>
        // Loading screen
        window.addEventListener('load', function() {
            document.getElementById('loading').classList.add('hidden');
        });


    </script>
</body>
</html>
