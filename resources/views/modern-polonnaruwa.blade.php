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
    
    @php
        $destination = destination_content('polonnaruwa');
        $strings = __('destinations.polonnaruwa');
        if (!is_array($strings)) {
            $strings = [];
        }
        $sectionMap = [];
        foreach ($destination['sections'] ?? [] as $sectionItem) {
            $sectionMap[$sectionItem['key']] = $sectionItem;
        }

        $defaultTitle = "Polonnaruwa - Sri Lanka's Medieval Garden City";
        $titleFull = $destination['title']['full'] ?? $defaultTitle;
        $metaTitle = $titleFull . ' | COCO Island Holidays';

        $defaultDescription = "Stone-carved Buddhas, lotus-ringed tanks, and a royal city planned with elegant symmetry. Experience Polonnaruwa - UNESCO World Heritage medieval capital.";
        $metaDescriptionSource = $destination['intro'] ?? $defaultDescription;
        $metaDescription = \Illuminate\Support\Str::limit($metaDescriptionSource, 160, '...');

        $heroTitleMain = $destination['title']['main'] ?? 'Polonnaruwa';
        $heroTitleHighlight = $destination['title']['highlight'] ?? "Sri Lanka's Medieval Garden City";
        $heroIntro = $destination['intro'] ?? $defaultDescription;
        $heroQuickFacts = $strings['hero']['quick_facts'] ?? [];

        $whySection = $sectionMap['why-polonnaruwa-belongs-on-your-itinerary'] ?? ['items' => []];
        $highlightsSection = $sectionMap['must-see-highlights'] ?? ['items' => []];
        $experiencesSection = $sectionMap['ways-to-experience-polonnaruwa'] ?? ['items' => []];
        $bestTimeSection = $sectionMap['best-time-to-visit'] ?? ['items' => []];
        $practicalSection = $sectionMap['practical-information'] ?? ['items' => []];
        $howToGetThereSection = $sectionMap['how-to-get-there'] ?? ['items' => []];
        $pairSection = $sectionMap['pair-it-with'] ?? ['items' => []];
        $itinerarySection = $sectionMap['sample-one-day-plan-flexible'] ?? ['items' => []];
        $faqSection = $sectionMap['frequently-asked-questions'] ?? ['items' => []];
        $responsibleSection = $sectionMap['travel-responsibly'] ?? ['items' => []];
        $ctaSection = $sectionMap['make-it-seamless-with-coco-island-holidays'] ?? ['items' => []];

        $bestTimeBySlug = [];
        foreach ($bestTimeSection['items'] ?? [] as $item) {
            $slug = \Illuminate\Support\Str::slug($item['title'] ?? '');
            if ($slug) {
                $bestTimeBySlug[$slug] = $item['description'] ?? '';
            }
        }

        $howToGetThereList = array_values(array_filter(array_map(static function ($item) {
            return $item['description'] ?? null;
        }, $howToGetThereSection['items'] ?? [])));

        $itinerarySchedules = array_values(array_filter($itinerarySection['items'] ?? [], static function ($item) {
            return ($item['type'] ?? '') === 'schedule';
        }));
        $itineraryNotes = array_values(array_filter($itinerarySection['items'] ?? [], static function ($item) {
            return ($item['type'] ?? '') === 'note';
        }));

        $highlightIcons = [
            'fas fa-crown',
            'fas fa-square',
            'fas fa-praying-hands',
            'fas fa-building',
            'fas fa-chess-rook',
            'fas fa-swimming-pool',
            'fas fa-landmark'
        ];

        $pairGradients = [
            'from-green-500 to-emerald-600',
            'from-orange-500 to-red-600',
            'from-purple-500 to-indigo-600',
            'from-blue-500 to-cyan-600',
        ];

        $pairIcons = [
            'fas fa-elephant',
            'fas fa-mountain',
            'fas fa-place-of-worship',
            'fas fa-leaf'
        ];
    @endphp
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
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

<style>
    .hero-bg {
        background-image: url('https://wherethesoulswander.com/wp-content/uploads/2019/12/things-to-do-in-Polonnaruwa-1.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: scroll;
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
    
    .floating-element {
        animation: float 6s ease-in-out infinite;
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    
    .feature-card {
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .feature-card:hover {
        transform: translateY(-8px) scale(1.02);
    }

    .timeline-item {
        position: relative;
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        left: 15px;
        top: 60px;
        bottom: -20px;
        width: 2px;
        background: linear-gradient(to bottom, #f97316, #ea580c);
    }

    .timeline-item:last-child::before {
        display: none;
    }

    .mirror-effect {
        position: relative;
        background: linear-gradient(135deg, #f97316, #ea580c);
        overflow: hidden;
    }

    .mirror-effect::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(
            90deg,
            transparent,
            rgba(255, 255, 255, 0.4),
            transparent
        );
        animation: mirror-shine 3s infinite;
    }

    .mirror-effect::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(
            135deg,
            rgba(255, 255, 255, 0.2) 0%,
            transparent 50%,
            rgba(255, 255, 255, 0.1) 100%
        );
        pointer-events: none;
    }

    @keyframes mirror-shine {
        0% {
            left: -100%;
        }
        50% {
            left: 100%;
        }
        100% {
            left: 100%;
        }
    }

    .glass-morphism {
        backdrop-filter: blur(10px);
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
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
            <div class="absolute top-20 left-20 w-64 h-64 bg-white/10 rounded-full blur-3xl floating-element"></div>
            <div class="absolute bottom-20 right-20 w-48 h-48 bg-white/10 rounded-full blur-3xl floating-element" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 left-1/4 w-32 h-32 bg-white/10 rounded-full blur-2xl floating-element" style="animation-delay: 4s;"></div>
        </div>

        <!-- Gradient Overlay for Text Readability -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>

        <!-- Content -->
        <div class="relative z-10 text-center max-w-6xl mx-auto px-4 scroll-animate">
            <div class="mb-8">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-md rounded-full mb-6">
                    <i class="fas fa-university text-3xl text-white"></i>
                </div>
            </div>
            <h1 class="text-4xl lg:text-7xl font-bold mb-6 leading-tight">
                {{ $heroTitleMain }} <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 to-yellow-300">{{ $heroTitleHighlight }}</span>
            </h1>
            <p class="text-xl lg:text-2xl mb-8 text-white/90 leading-relaxed max-w-4xl mx-auto">
                {{ $heroIntro }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                <a href="{{ route('contact', app()->getLocale()) }}" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold rounded-xl bg-white text-primary-600 hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-calendar-check mr-3"></i>
                    {{ $strings['hero']['cta_primary'] ?? 'Plan Your Visit' }}
                </a>
                <a href="https://wa.me/94776605054" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold rounded-xl bg-green-600 text-white hover:bg-green-700 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fab fa-whatsapp mr-3"></i>
                    {{ $strings['hero']['cta_secondary'] ?? 'Contact Heritage Guide' }}
                </a>
            </div>

            <!-- Quick Facts -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-4xl mx-auto">
                @forelse($heroQuickFacts as $fact)
                    <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                        <div class="text-2xl font-bold text-amber-300 mb-1">{{ $fact['value'] ?? '' }}</div>
                        <div class="text-sm text-white/80">{{ $fact['label'] ?? '' }}</div>
                    </div>
                @empty
                    <div class="bg-white/10 backdrop-blur-md rounded-xl p-4 text-center">
                        <div class="text-2xl font-bold text-amber-300 mb-1">UNESCO</div>
                        <div class="text-sm text-white/80">World Heritage</div>
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-center scroll-animate">
            <div class="flex flex-col items-center text-white/80">
                <span class="text-sm mb-2">{{ $strings['hero']['scroll_hint'] ?? 'Discover Ancient City' }}</span>
                <div class="animate-bounce">
                    <i class="fas fa-chevron-down text-xl"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Polonnaruwa belongs on your itinerary -->
    <section class="py-16 lg:py-24 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-animate">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">{{ $strings['sections']['why']['preheading'] ?? 'Ancient Capital' }}</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">{{ $whySection['heading'] ?? 'Why Polonnaruwa Belongs on Your Itinerary' }}</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    {{ $strings['sections']['why']['description'] ?? 'A showcase of hydraulic genius and refined architecture set across leafy, wildlife-friendly grounds.' }}
                </p>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                @foreach(array_slice($whySection['items'] ?? [], 0, 4) as $whyItem)
                    <div class="feature-card bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl">
                        <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl flex items-center justify-center mb-6">
                            <i class="fas fa-landmark text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">{{ $whyItem['title'] ?? '' }}</h3>
                        <p class="text-gray-600 leading-relaxed">
                            {{ $whyItem['description'] ?? '' }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Must-see Highlights -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-animate">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">{{ $strings['sections']['highlights']['preheading'] ?? 'Archaeological Wonders' }}</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">{{ $highlightsSection['heading'] ?? 'Must-see highlights' }}</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    {{ $strings['sections']['highlights']['description'] ?? 'From royal palaces to sacred shrines, discover the architectural gems of this medieval capital.' }}
                </p>
            </div>

            <!-- Highlights Timeline -->
            <div class="relative">
                @foreach($highlightsSection['items'] ?? [] as $index => $highlight)
                    <div class="timeline-item flex items-start mb-12 scroll-animate">
                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-primary-500 to-orange-600 rounded-full flex items-center justify-center mr-6 relative z-10">
                            <i class="{{ $highlightIcons[$index % count($highlightIcons)] ?? 'fas fa-landmark' }} text-white text-lg"></i>
                        </div>
                        <div class="flex-grow">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $highlight['title'] ?? '' }}</h3>
                            <p class="text-gray-600 leading-relaxed">
                                {{ $highlight['description'] ?? ($highlight['details'] ?? '') }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Ways to Experience -->
    <section class="py-16 lg:py-24 mirror-effect text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="scroll-animate">
                <div class="mb-8">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-md rounded-full mb-6">
                        <i class="fas fa-route text-3xl"></i>
                    </div>
                </div>
                <h2 class="text-3xl lg:text-4xl font-bold mb-8">{{ $experiencesSection['heading'] ?? 'Ways to experience Polonnaruwa' }}</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12 text-left">
                    @foreach($experiencesSection['items'] ?? [] as $experience)
                        <div class="glass-morphism rounded-2xl p-6">
                            <h3 class="text-xl font-bold mb-4">{{ $experience['title'] ?? '' }}</h3>
                            <p class="text-primary-100 leading-relaxed">
                                {{ $experience['description'] ?? '' }}
                            </p>
                        </div>
                    @endforeach
                </div>

                <div class="glass-morphism rounded-2xl p-8">
                    <h3 class="text-2xl font-bold mb-4">{{ $strings['sections']['experiences']['cta_heading'] ?? 'Experience Medieval Grandeur' }}</h3>
                    <p class="text-primary-100 mb-6">{{ $strings['sections']['experiences']['cta_description'] ?? "Explore Sri Lanka's most beautiful open-air museum with expert guides who bring ancient stories to life." }}</p>
                    <a href="https://wa.me/94776605054" class="inline-flex items-center bg-white text-primary-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                        <i class="fab fa-whatsapp mr-3"></i>
                        {{ $strings['sections']['experiences']['cta_button'] ?? 'Plan Your Ancient City Tour' }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Best Time to Visit & Practical Tips -->
    <section class="py-16 lg:py-24 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Best Time to Visit -->
                <div class="scroll-animate">
                    <div class="bg-white rounded-2xl p-8 shadow-lg h-full">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-primary-500 to-orange-500 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-clock text-white text-lg"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">{{ $strings['sections']['timing']['title'] ?? 'Best Time to Visit' }}</h3>
                        </div>
                        <div class="space-y-4">
                            @if(isset($bestTimeBySlug['time-of-day']))
                                <div class="border-l-4 border-primary-500 pl-4">
                                    <h4 class="font-semibold text-gray-900 mb-2">{{ $strings['sections']['timing']['time_of_day'] ?? 'Time of Day' }}</h4>
                                    <p class="text-gray-600">{{ $bestTimeBySlug['time-of-day'] }}</p>
                                </div>
                            @endif
                            @if(isset($bestTimeBySlug['season']))
                                <div class="border-l-4 border-orange-500 pl-4">
                                    <h4 class="font-semibold text-gray-900 mb-2">{{ $strings['sections']['timing']['season'] ?? 'Season' }}</h4>
                                    <p class="text-gray-600">{{ $bestTimeBySlug['season'] }}</p>
                                </div>
                            @endif
                            @if(!empty($howToGetThereList))
                                <div class="border-l-4 border-blue-500 pl-4">
                                    <h4 class="font-semibold text-gray-900 mb-2">{{ $strings['sections']['timing']['getting_there'] ?? 'Getting There' }}</h4>
                                    <ul class="text-gray-600 list-disc list-inside space-y-1 text-sm">
                                        @foreach(array_slice($howToGetThereList, 0, 3) as $route)
                                            <li>{{ $route }}</li>
                                        @endforeach
                                    </ul>
                                    @if(count($howToGetThereList) > 3)
                                        <p class="text-gray-600 text-sm mt-2">{{ $howToGetThereList[count($howToGetThereList) - 1] }}</p>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Practical Information -->
                <div class="scroll-animate">
                    <div class="bg-white rounded-2xl p-8 shadow-lg h-full">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-lg flex items-center justify-center mr-4">
                                <i class="fas fa-lightbulb text-white text-lg"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">{{ $strings['sections']['practical']['title'] ?? 'Practical Information' }}</h3>
                        </div>

                        <div class="space-y-4">
                            @foreach($practicalSection['items'] ?? [] as $practical)
                                <div class="flex items-start">
                                    <i class="fas fa-check-circle text-primary-500 mr-3 mt-1"></i>
                                    <div>
                                        <h4 class="font-semibold text-gray-900 mb-1">{{ $practical['title'] ?? '' }}</h4>
                                        <p class="text-gray-600 text-sm">{{ $practical['description'] ?? '' }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nearby Attractions -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-animate">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">{{ $strings['sections']['nearby']['preheading'] ?? 'Cultural Triangle' }}</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">{{ $pairSection['heading'] ?? 'Pair it with' }}</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    {{ $strings['sections']['nearby']['description'] ?? 'Extend your cultural journey with these complementary ancient sites and wildlife experiences.' }}
                </p>
            </div>

            <!-- Attractions Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach(array_slice($pairSection['items'] ?? [], 0, 4) as $idx => $pair)
                    <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                        <div class="aspect-w-16 aspect-h-12 bg-gradient-to-br {{ $pairGradients[$idx % count($pairGradients)] ?? 'from-primary-500 to-orange-500' }} relative overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                            <div class="absolute bottom-4 left-4 text-white">
                                <h4 class="font-bold text-lg">{{ $pair['title'] ?? '' }}</h4>
                            </div>
                            <i class="{{ $pairIcons[$idx % count($pairIcons)] ?? 'fas fa-map-marker-alt' }} text-white text-4xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                        </div>
                        <div class="p-6">
                            <p class="text-gray-600 text-sm leading-relaxed">
                                {{ $pair['description'] ?? '' }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Sample Itinerary -->
    <section class="py-16 lg:py-24 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-animate">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">{{ $strings['sections']['itinerary']['preheading'] ?? 'Perfect Itinerary' }}</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">{{ $itinerarySection['heading'] ?? 'Sample One-Day Plan (Flexible)' }}</h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    {{ $strings['sections']['itinerary']['description'] ?? 'Our thoughtfully planned itinerary designed for the perfect Polonnaruwa archaeological experience.' }}
                </p>
            </div>

            <!-- Timeline Schedule -->
            <div class="bg-white rounded-2xl p-8 shadow-lg scroll-animate">
                <div class="space-y-6">
                    @foreach($itinerarySchedules as $schedule)
                        @php
                            $time = $schedule['time'] ?? '';
                            $details = $schedule['details'] ?? '';
                            $titleText = $details;
                            $bodyText = '';
                            if (str_contains($details, ';')) {
                                [$titleText, $bodyText] = array_map('trim', explode(';', $details, 2));
                            } elseif (str_contains($details, '. ')) {
                                [$titleText, $bodyText] = array_map('trim', explode('. ', $details, 2));
                            }
                        @endphp
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-20 text-primary-600 font-bold text-lg">{{ $time }}</div>
                            <div class="flex-grow">
                                <h4 class="font-semibold text-gray-900 mb-1">{{ $titleText }}</h4>
                                @if($bodyText !== '')
                                    <p class="text-gray-600">{{ $bodyText }}</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>

                @if(!empty($itineraryNotes))
                    <div class="mt-8 p-6 bg-gradient-to-r from-primary-50 to-orange-50 rounded-xl border border-primary-100">
                        @foreach($itineraryNotes as $note)
                            <p class="text-center text-gray-700">
                                <i class="fas fa-info-circle text-primary-600 mr-2"></i>
                                {{ $note['details'] ?? '' }}
                            </p>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 lg:py-24 bg-white" id="book-now">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 scroll-animate">
                <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">{{ $strings['sections']['faq']['preheading'] ?? 'Questions?' }}</p>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6 text-gray-900">{{ $faqSection['heading'] ?? 'Frequently Asked Questions' }}</h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    {{ $strings['sections']['faq']['description'] ?? 'Everything you need to know for your Polonnaruwa archaeological adventure.' }}
                </p>
            </div>

            <!-- FAQ Items -->
            <div class="space-y-6">
                @foreach($faqSection['items'] ?? [] as $faq)
                    <div class="bg-white rounded-2xl shadow-lg scroll-animate">
                        <button class="w-full text-left p-8 focus:outline-none" onclick="toggleFAQ(this)">
                            <div class="flex justify-between items-center">
                                <h3 class="text-xl font-semibold text-gray-900">{{ $faq['question'] ?? '' }}</h3>
                                <i class="fas fa-chevron-down text-primary-500 transform transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div class="hidden px-8 pb-8">
                            <p class="text-gray-600 leading-relaxed">
                                {{ $faq['answer'] ?? '' }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @if(!empty($responsibleSection['items']))
        <section class="py-16 lg:py-24 bg-gradient-to-br from-gray-50 to-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12 scroll-animate">
                    <p class="text-primary-600 uppercase tracking-widest text-sm font-semibold mb-4">{{ $strings['sections']['responsible']['preheading'] ?? 'Travel Responsibly' }}</p>
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900">{{ $responsibleSection['heading'] ?? 'Travel responsibly' }}</h2>
                </div>
                <div class="bg-white rounded-2xl shadow-lg p-8 scroll-animate">
                    <ul class="space-y-3">
                        @foreach($responsibleSection['items'] as $tip)
                            <li class="flex items-start">
                                <i class="fas fa-leaf text-primary-500 mr-3 mt-1"></i>
                                <span class="text-gray-600 leading-relaxed">{{ $tip['details'] ?? '' }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
    @endif

    <!-- CTA Section -->
    <section class="py-16 lg:py-24 mirror-effect text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="scroll-animate">
                <div class="mb-8">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-md rounded-full mb-6">
                        <i class="fas fa-calendar-check text-3xl"></i>
                    </div>
                </div>
                <h2 class="text-3xl lg:text-4xl font-bold mb-6">{{ $strings['sections']['cta']['heading'] ?? 'Make it Seamless with Coco Island Holidays' }}</h2>
                <p class="text-xl text-primary-100 mb-12 leading-relaxed">
                    {{ $ctaSection['items'][0]['details'] ?? "We arrange tickets, bikes or private tuk-tuks, licensed guides, cool-box water, and photo-friendly pacing—and we'll weave in a Minneriya elephant drive or a Sigiriya sunrise the next day." }}
                </p>
                <div class="glass-morphism rounded-2xl p-8">
                    <h3 class="text-2xl font-bold mb-4">{{ $ctaSection['heading'] ?? 'Ready to Explore Ancient Polonnaruwa?' }}</h3>
                    <p class="text-primary-100 mb-6">{{ $ctaSection['items'][1]['details'] ?? "Tell us what you love (architecture, photography, wildlife, slow travel), and we'll craft your perfect Polonnaruwa day." }}</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://wa.me/94776605054" class="inline-flex items-center bg-white text-primary-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <i class="fab fa-whatsapp mr-3"></i>
                            {{ $strings['sections']['cta']['button_primary'] ?? 'Plan Your Ancient City Tour' }}
                        </a>
                        <a href="{{ route('contact', app()->getLocale()) }}" class="inline-flex items-center bg-green-600 text-white px-8 py-4 rounded-xl font-semibold hover:bg-green-700 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-envelope mr-3"></i>
                            {{ $strings['sections']['cta']['button_secondary'] ?? 'Get Custom Itinerary' }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

        @include('components.footer')

    <script>
        // Scroll Progress Bar
        function updateScrollProgress() {
            const scrollTop = window.pageYOffset;
            const docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (scrollTop / docHeight) * 100;
            const progressBar = document.getElementById('scroll-progress');
            if (progressBar) {
                progressBar.style.width = `${Math.min(scrolled, 100)}%`;
            }
        }

        window.addEventListener('scroll', updateScrollProgress);
        window.addEventListener('load', updateScrollProgress);

        // Scroll reveal animations
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.scroll-animate').forEach(element => observer.observe(element));

        // FAQ toggles
        function toggleFAQ(button) {
            const content = button.nextElementSibling;
            const icon = button.querySelector('i');
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                content.classList.add('block');
                icon.classList.add('rotate-180');
            } else {
                content.classList.add('hidden');
                content.classList.remove('block');
                icon.classList.remove('rotate-180');
            }
        }
        window.toggleFAQ = toggleFAQ;
    </script>
</body>
</html>
