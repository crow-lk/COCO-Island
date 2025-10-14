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
    <title>{{ __("messages.legal.terms") }} | COCO Island Holidays - Travel Agency</title>
    <meta name="description" content="Read our terms and conditions for booking and using COCO Island Holidays services.">
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
        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4" style="text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);">{{ __("messages.legal.terms") }}</h1>
            <p class="text-xl md:text-2xl opacity-90" style="text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);">Important information for your booking</p>
        </div>
    </section>

    <!-- {{ __("messages.legal.terms") }} Content -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-lg p-8 md:p-12">
                <div class="space-y-8">
                    <div class="text-center mb-8">
                        <p class="text-lg text-gray-700">
                            When booking a trip with <strong class="text-primary-500">COCO Island Holidays</strong>, you agree to the following terms:
                        </p>
                    </div>

                    <div class="space-y-8">
                        <!-- Term 1 -->
                        <div class="border-l-4 border-primary-500 pl-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-3 flex items-center">
                                <span class="w-10 h-10 bg-primary-500 text-white rounded-full flex items-center justify-center text-lg font-bold mr-4">1</span>
                                Bookings & Payments
                            </h3>
                            <p class="text-lg text-gray-700 leading-relaxed">
                                A deposit is required to confirm your booking. Full payment must be made prior to trip commencement, as specified in your itinerary.
                            </p>
                        </div>

                        <!-- Term 2 -->
                        <div class="border-l-4 border-primary-500 pl-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-3 flex items-center">
                                <span class="w-10 h-10 bg-primary-500 text-white rounded-full flex items-center justify-center text-lg font-bold mr-4">2</span>
                                Cancellations & Refunds
                            </h3>
                            <p class="text-lg text-gray-700 leading-relaxed">
                                Cancellations must be made in writing. Refunds are subject to our cancellation policy and may vary based on notice period and third-party provider rules (hotels, guides, etc.).
                            </p>
                        </div>

                        <!-- Term 3 -->
                        <div class="border-l-4 border-primary-500 pl-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-3 flex items-center">
                                <span class="w-10 h-10 bg-primary-500 text-white rounded-full flex items-center justify-center text-lg font-bold mr-4">3</span>
                                Travel Insurance
                            </h3>
                            <p class="text-lg text-gray-700 leading-relaxed">
                                We recommend all travelers have comprehensive travel insurance covering health, accidents, delays, and cancellations.
                            </p>
                        </div>

                        <!-- Term 4 -->
                        <div class="border-l-4 border-primary-500 pl-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-3 flex items-center">
                                <span class="w-10 h-10 bg-primary-500 text-white rounded-full flex items-center justify-center text-lg font-bold mr-4">4</span>
                                Itinerary Changes
                            </h3>
                            <p class="text-lg text-gray-700 leading-relaxed">
                                We reserve the right to modify itineraries due to unforeseen circumstances (e.g., weather, road conditions, local regulations) while ensuring equivalent or better alternatives.
                            </p>
                        </div>

                        <!-- Term 5 -->
                        <div class="border-l-4 border-primary-500 pl-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-3 flex items-center">
                                <span class="w-10 h-10 bg-primary-500 text-white rounded-full flex items-center justify-center text-lg font-bold mr-4">5</span>
                                Liability
                            </h3>
                            <p class="text-lg text-gray-700 leading-relaxed">
                                COCO Island Holidays is not liable for loss, injury, delays, or unforeseen incidents beyond our control. However, we always strive to support and safeguard your journey.
                            </p>
                        </div>
                    </div>

                    <!-- Agreement Notice -->
                    <div class="bg-orange-50 border border-orange-200 rounded-lg p-6 mt-8">
                        <div class="flex items-start">
                            <i class="fas fa-info-circle text-orange-500 text-xl mr-4 mt-1"></i>
                            <div>
                                <h4 class="text-lg font-semibold text-orange-800 mb-2">Agreement Confirmation</h4>
                                <p class="text-lg text-orange-700">
                                    By proceeding with a booking, you confirm that you have read and agreed to these terms and conditions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        @include('components.footer')

    <script>
        // Loading screen
        window.addEventListener('load', function() {
            document.getElementById('loading').classList.add('hidden');
        });


    </script>
</body>
</html>
