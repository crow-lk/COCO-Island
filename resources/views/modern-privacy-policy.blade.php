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
    <title>{{ __("messages.legal.privacy") }} | COCO Island Holidays - Travel Agency</title>
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
        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4" style="text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);">{{ __("messages.legal.privacy") }}</h1>
            <p class="text-xl md:text-2xl opacity-90" style="text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);">Your privacy matters to us</p>
        </div>
    </section>

    <!-- {{ __("messages.legal.privacy") }} Content -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="prose prose-lg max-w-none">
                <div class="bg-white rounded-2xl shadow-lg p-8 md:p-12">
                    <div class="space-y-8 text-gray-700 leading-relaxed">
                        <p class="text-lg">
                            Your privacy matters to us. At <strong class="text-primary-500">COCO Island Holidays</strong>, we are committed to
                            protecting the personal information you share with us, whether through online inquiries,
                            bookings, or communications.
                        </p>
                        
                        <p class="text-lg">
                            We collect only the information necessary to serve you better, such as your name, email,
                            travel preferences, and payment details, and we use it solely for trip coordination,
                            customer support, and service improvements. Your data is never shared with third parties
                            without your consent, except where legally required or to fulfill your booking (e.g.,
                            hotels, transport providers).
                        </p>
                        
                        <p class="text-lg">
                            All transactions are secured and handled with confidentiality. By using our website and
                            services, you agree to our privacy practices.
                        </p>
                        
                        <div class="bg-primary-50 rounded-lg p-6 border-l-4 border-primary-500">
                            <p class="mb-0 text-lg">
                                <strong class="text-primary-600">Questions or Concerns?</strong><br>
                                For any privacy-related concerns, feel free to contact us at
                                <a href="mailto:info@cocoislandholidays.com" class="text-primary-500 hover:text-primary-600 transition-colors font-semibold">info@cocoislandholidays.com</a>.
                            </p>
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
