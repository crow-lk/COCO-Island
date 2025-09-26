<!DOCTYPE html>
<html lang="en" class="scroll-smooth      <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-black/20 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">                          <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{ asset('frontend/assets/img/logo/coco-logo.png') }}" 
                             alt="COCO Island Holidays Logo" 
                             class="h-20 w-auto opacity-90 hover:opacity-100 transition-all duration-300 hover:scale-105">
                    </a>
                </div>ead>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy | COCO Island Holidays - Travel Agency</title>
    <meta name="description" content="Read our privacy policy to understand how COCO Island Holidays protects your personal information and data.">
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
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-primary block px-3 py-2 text-base font-medium">About</a>
                <a href="{{ route('packages') }}" class="text-gray-700 hover:text-primary block px-3 py-2 text-base font-medium">Packages</a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-primary block px-3 py-2 text-base font-medium">Contact</a>
            </div>
        </div>
    </nav>

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

        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
