@php
    $isHomePage = request()->routeIs('home') || request()->is(app()->getLocale()) || request()->is('/');
@endphp

<!-- Tours Dropdown Styles -->
<style>
    .tours-dropdown:hover .dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    
    .dropdown-menu {
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.2s ease-in-out;
        min-width: 250px;
        max-height: 400px;
        overflow-y: auto;
    }
    
    /* Ensure dropdown is properly positioned on transparent header */
    .tours-dropdown {
        position: relative;
        z-index: 60;
    }
    
    .mobile-tours-dropdown .fa-chevron-down {
        transition: transform 0.2s ease-in-out;
    }
    
    .mobile-tours-dropdown .fa-chevron-down.rotate-180 {
        transform: rotate(180deg);
    }
    
    /* Styling for tours in dropdown */
    .dropdown-menu a:hover {
        background-color: rgba(249, 115, 22, 0.05);
    }
</style>

<!-- Navigation -->
<nav class="fixed top-0 left-0 right-0 z-50 bg-black/20 backdrop-blur-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex-shrink-0">
                <a href="{{ $isHomePage ? '#home' : route('home', ['locale' => app()->getLocale()]) }}" class="flex items-center">
                    <img src="{{ asset('frontend/assets/img/logo/coco-logo.png') }}" 
                         alt="COCO Island Holidays Logo" 
                         class="h-20 w-auto opacity-90 hover:opacity-100 transition-all duration-300 hover:scale-105">
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8">
                    @if($isHomePage)
                        <a href="#home" class="text-white hover:text-primary-600 transition-colors duration-300">{{ __('messages.nav.home') }}</a>
                        <a href="#about" class="text-white hover:text-primary-600 transition-colors duration-300">{{ __('messages.nav.about') }}</a>
                        
                        <!-- Tours Dropdown for Homepage -->
                        <div class="relative tours-dropdown">
                            <button class="text-white hover:text-primary-600 transition-colors duration-300 flex items-center" id="tours-dropdown-button-home">
                                {{ __('messages.nav.tours') }}
                                <i class="fas fa-chevron-down ml-1 text-xs transform transition-transform duration-200"></i>
                            </button>
                            
                            <!-- Dropdown Menu -->
                            <div class="dropdown-menu absolute left-0 mt-2 w-64 bg-white rounded-lg shadow-xl border border-gray-100 z-50">
                                <div class="py-2">
                                    <!-- All Tours Link -->
                                    <a href="{{ route('tours.index', ['locale' => app()->getLocale()]) }}" class="block px-4 py-2 text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition-colors duration-200">
                                        <i class="fas fa-list mr-2 text-primary-500"></i>
                                        {{ __('messages.nav.all_tours') ?? 'All Tours' }}
                                    </a>
                                    
                                    @if(isset($menuTours) && $menuTours->count() > 0)
                                        <hr class="my-2 border-gray-100">
                                        @foreach($menuTours as $tour)
                                            <a href="{{ route('tours.show', ['locale' => app()->getLocale(), 'slug' => $tour->slug]) }}" class="block px-4 py-2 text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition-colors duration-200">
                                                <i class="fas fa-map-marked-alt mr-2 text-primary-500"></i>
                                                {{ $tour->title }}
                                            </a>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        
                        <a href="#experiences" class="text-white hover:text-primary-600 transition-colors duration-300">{{ __('messages.nav.experiences') }}</a>
                        <a href="#testimonials" class="text-white hover:text-primary-600 transition-colors duration-300">{{ __('messages.nav.reviews') }}</a>
                    @else
                        <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="text-white hover:text-primary-600 transition-colors duration-300 {{ request()->routeIs('home') ? 'text-primary-500' : '' }}">{{ __('messages.nav.home') }}</a>
                        <a href="{{ route('about', ['locale' => app()->getLocale()]) }}" class="text-white hover:text-primary-600 transition-colors duration-300 {{ request()->routeIs('about') ? 'text-primary-500' : '' }}">{{ __('messages.nav.about') }}</a>
                        
                        <!-- Tours Dropdown -->
                        <div class="relative tours-dropdown">
                            <button class="text-white hover:text-primary-600 transition-colors duration-300 flex items-center {{ request()->routeIs('tours.*') ? 'text-primary-500' : '' }}" id="tours-dropdown-button">
                                {{ __('messages.nav.tours') }}
                                <i class="fas fa-chevron-down ml-1 text-xs transform transition-transform duration-200"></i>
                            </button>
                            
                            <!-- Dropdown Menu -->
                            <div class="dropdown-menu absolute left-0 mt-2 w-64 bg-white rounded-lg shadow-xl border border-gray-100 z-50">
                                <div class="py-2">
                                    <!-- All Tours Link -->
                                    <a href="{{ route('tours.index', ['locale' => app()->getLocale()]) }}" class="block px-4 py-2 text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition-colors duration-200">
                                        <i class="fas fa-list mr-2 text-primary-500"></i>
                                        {{ __('messages.nav.all_tours') }}
                                    </a>
                                    
                                    @if(isset($menuTours) && $menuTours->count() > 0)
                                        <hr class="my-2 border-gray-100">
                                        @foreach($menuTours as $tour)
                                            <a href="{{ route('tours.show', ['locale' => app()->getLocale(), 'slug' => $tour->slug]) }}" class="block px-4 py-2 text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition-colors duration-200">
                                                <i class="fas fa-map-marked-alt mr-2 text-primary-500"></i>
                                                {{ $tour->title }}
                                            </a>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        
                        <a href="{{ route('packages', ['locale' => app()->getLocale()]) }}" class="text-white hover:text-primary-600 transition-colors duration-300 {{ request()->routeIs('packages') ? 'text-primary-500' : '' }}">{{ __('messages.nav.experiences') }}</a>
                    @endif
                    <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="bg-primary-500 text-white px-4 py-2 rounded-xl hover:bg-primary-600 transition-colors duration-300">{{ __('messages.nav.contact') }}</a>
                    <!-- Language Switcher -->
                    @include('components.language-switcher')
                </div>
            </div>
            
            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-white hover:text-primary-600">
                    <i class="fas fa-bars text-base"></i>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
        <div class="px-2 pt-2 pb-3 space-y-1">
            @if($isHomePage)
                <a href="#home" class="block px-3 py-2 text-gray-700 hover:text-primary-600">{{ __('messages.nav.home') }}</a>
                <a href="#about" class="block px-3 py-2 text-gray-700 hover:text-primary-600">{{ __('messages.nav.about') }}</a>
                
                <!-- Mobile Tours Dropdown for Homepage -->
                <div class="mobile-tours-dropdown">
                    <button class="w-full text-left px-3 py-2 text-gray-700 hover:text-primary-600 flex items-center justify-between" id="mobile-tours-button-home">
                        {{ __('messages.nav.tours') }}
                        <i class="fas fa-chevron-down text-xs transform transition-transform duration-200" id="mobile-tours-icon-home"></i>
                    </button>
                    <div class="hidden bg-gray-50 border-l-2 border-primary-200" id="mobile-tours-menu-home">
                        <a href="{{ route('tours.index', ['locale' => app()->getLocale()]) }}" class="block px-6 py-2 text-sm text-gray-600 hover:text-primary-600">
                            <i class="fas fa-list mr-2"></i>{{ __('messages.nav.all_tours') ?? 'All Tours' }}
                        </a>
                        @if(isset($menuTours) && $menuTours->count() > 0)
                            @foreach($menuTours as $tour)
                                <a href="{{ route('tours.show', ['locale' => app()->getLocale(), 'slug' => $tour->slug]) }}" class="block px-6 py-2 text-sm text-gray-600 hover:text-primary-600">
                                    <i class="fas fa-map-marked-alt mr-2"></i>{{ $tour->title }}
                                </a>
                            @endforeach
                        @endif
                    </div>
                </div>
                
                <a href="#experiences" class="block px-3 py-2 text-gray-700 hover:text-primary-600">{{ __('messages.nav.experiences') }}</a>
                <a href="#testimonials" class="block px-3 py-2 text-gray-700 hover:text-primary-600">{{ __('messages.nav.reviews') }}</a>
                
                <!-- Legal Links for Homepage -->
                <div class="border-t border-gray-200 mt-2 pt-2">
                    <a href="{{ route('privacy.policy', ['locale' => app()->getLocale()]) }}" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary-600">{{ __("messages.legal.privacy") }}</a>
                    <a href="{{ route('terms.conditions', ['locale' => app()->getLocale()]) }}" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary-600">{{ __("messages.legal.terms") }}</a>
                </div>
            @else
                <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="block px-3 py-2 text-gray-700 hover:text-primary-600 {{ request()->routeIs('home') ? 'text-primary-500' : '' }}">{{ __('messages.nav.home') }}</a>
                <a href="{{ route('about', ['locale' => app()->getLocale()]) }}" class="block px-3 py-2 text-gray-700 hover:text-primary-600 {{ request()->routeIs('about') ? 'text-primary-500' : '' }}">{{ __('messages.nav.about') }}</a>
                
                <!-- Mobile Tours Dropdown -->
                <div class="mobile-tours-dropdown">
                    <button class="w-full text-left px-3 py-2 text-gray-700 hover:text-primary-600 flex items-center justify-between {{ request()->routeIs('tours.*') ? 'text-primary-500' : '' }}" id="mobile-tours-button">
                        {{ __('messages.nav.tours') }}
                        <i class="fas fa-chevron-down text-xs transform transition-transform duration-200" id="mobile-tours-icon"></i>
                    </button>
                    <div class="hidden bg-gray-50 border-l-2 border-primary-200" id="mobile-tours-menu">
                        <a href="{{ route('tours.index', ['locale' => app()->getLocale()]) }}" class="block px-6 py-2 text-sm text-gray-600 hover:text-primary-600">
                            <i class="fas fa-list mr-2"></i>{{ __('messages.nav.all_tours') ?? 'All Tours' }}
                        </a>
                        @if(isset($menuTours) && $menuTours->count() > 0)
                            @foreach($menuTours as $tour)
                                <a href="{{ route('tours.show', ['locale' => app()->getLocale(), 'slug' => $tour->slug]) }}" class="block px-6 py-2 text-sm text-gray-600 hover:text-primary-600">
                                    <i class="fas fa-map-marked-alt mr-2"></i>{{ $tour->title }}
                                </a>
                            @endforeach
                        @endif
                    </div>
                </div>
                
                <a href="{{ route('packages', ['locale' => app()->getLocale()]) }}" class="block px-3 py-2 text-gray-700 hover:text-primary-600 {{ request()->routeIs('packages') ? 'text-primary-500' : '' }}">{{ __('messages.nav.experiences') }}</a>
                
                <!-- Legal Links -->
                <div class="border-t border-gray-200 mt-2 pt-2">
                    <a href="{{ route('privacy.policy', ['locale' => app()->getLocale()]) }}" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary-600">{{ __("messages.legal.privacy") }}</a>
                    <a href="{{ route('terms.conditions', ['locale' => app()->getLocale()]) }}" class="block px-3 py-2 text-sm text-gray-600 hover:text-primary-600">{{ __("messages.legal.terms") }}</a>
                </div>
            @endif
            <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="block px-3 py-2 bg-primary-500 text-white rounded-xl mx-3 text-center">{{ __('messages.nav.contact') }}</a>
            <!-- Mobile Language Switcher -->
            <div class="px-3 py-2">
                @include('components.language-switcher')
            </div>
        </div>
    </div>
</nav>

<!-- Mobile Menu JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Mobile Tours Dropdown Toggle
        const mobileToursButton = document.getElementById('mobile-tours-button');
        const mobileToursMenu = document.getElementById('mobile-tours-menu');
        const mobileToursIcon = document.getElementById('mobile-tours-icon');
        
        if (mobileToursButton && mobileToursMenu && mobileToursIcon) {
            mobileToursButton.addEventListener('click', function() {
                mobileToursMenu.classList.toggle('hidden');
                mobileToursIcon.classList.toggle('rotate-180');
            });
        }

        // Mobile Tours Dropdown Toggle for Homepage
        const mobileToursButtonHome = document.getElementById('mobile-tours-button-home');
        const mobileToursMenuHome = document.getElementById('mobile-tours-menu-home');
        const mobileToursIconHome = document.getElementById('mobile-tours-icon-home');
        
        if (mobileToursButtonHome && mobileToursMenuHome && mobileToursIconHome) {
            mobileToursButtonHome.addEventListener('click', function() {
                mobileToursMenuHome.classList.toggle('hidden');
                mobileToursIconHome.classList.toggle('rotate-180');
            });
        }
    });
</script>
