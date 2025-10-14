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
    <title>About Us | COCO Island Holidays - Travel Agency</title>
    <meta name="description" content="Learn more about COCO Island Holidays, our story, mission, vision, and values.">
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
        <div class="w-16 h-16 border-4 border-primary border-t-transparent rounded-full animate-spin"></div>
    </div>

    @include('components.header')

    <!-- Hero Section -->
    <section class="hero-bg relative h-screen flex items-center justify-center">
        <div class="text-center text-white animate-on-scroll">
            <h1 class="text-2xl md:text-4xl font-bold mb-4" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">{{ __('messages.about_page.title') }}</h1>
            <p class="text-lg md:text-xl opacity-90" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">{{ __('messages.about_page.subtitle') }}</p>
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

    @include('components.footer')

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
