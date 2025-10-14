@php
    $footerData = __('messages.footer');
    $locale = app()->getLocale();
    
    // Helper function to generate route URLs safely
    $generateRoute = function($routeName) use ($locale) {
        try {
            return route($routeName, ['locale' => $locale]);
        } catch (Exception $e) {
            return '#';
        }
    };
@endphp

<!-- WhatsApp Float Button -->
<a href="{{ $footerData['contact']['whatsapp']['url'] }}" class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
    <i class="fab fa-whatsapp text-2xl"></i>
</a>

<style>
    /* WhatsApp Float Button */
    .whatsapp-float {
        position: fixed;
        bottom: 24px;
        right: 24px;
        background: #25d366;
        color: white;
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        z-index: 50;
        text-decoration: none;
    }
    
    .whatsapp-float:hover {
        background: #128c7e;
        transform: scale(1.1);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    }
    
    /* Newsletter Form Styles */
    .newsletter-form input[type="email"]:focus {
        outline: none;
        ring: 2px;
        ring-color: #f97316;
        border-color: #f97316;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .footer-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }
        
        .footer-column-2 {
            grid-template-columns: 1fr;
        }
    }
    
    @media (min-width: 768px) and (max-width: 1024px) {
        .footer-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .footer-column-2 {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>

<!-- Main Footer -->
<footer id="contact" class="bg-gray-900 text-white">
    <!-- Main Footer Content -->
    <div class="py-16 lg:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Footer Grid -->
            <div class="footer-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-12">
                
                <!-- Company Information - Full Width on Mobile, 4 columns on Desktop -->
                <div class="lg:col-span-4">
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold mb-4 text-primary-400">
                            {{ $footerData['company']['name'] }}
                        </h3>
                        <p class="text-gray-300 mb-4 leading-relaxed">
                            {{ $footerData['company']['description'] }}
                        </p>
                        <p class="text-sm text-gray-400 italic">
                            {{ $footerData['company']['tagline'] }}
                        </p>
                    </div>
                    
                    <!-- Trust Badges -->
                    <div class="mb-6">
                        <h4 class="text-sm font-semibold text-gray-300 mb-3 uppercase tracking-wide">
                            {{ $footerData['trust_badges']['title'] }}
                        </h4>
                        <div class="grid grid-cols-2 gap-3">
                            @foreach($footerData['trust_badges']['badges'] as $badge)
                            <div class="flex items-center text-sm text-gray-400">
                                <i class="{{ $badge['icon'] }} text-primary-400 mr-2 w-4"></i>
                                <span>{{ $badge['text'] }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div>
                        <h4 class="text-sm font-semibold text-gray-300 mb-3 uppercase tracking-wide">
                            {{ $footerData['social']['follow_us'] }}
                        </h4>
                        <div class="flex space-x-4">
                            @foreach($footerData['social']['platforms'] as $platform)
                            <a href="{{ $platform['url'] }}" 
                               target="_blank" 
                               class="text-gray-400 hover:text-primary-400 transition-colors duration-300 text-xl"
                               aria-label="{{ $platform['name'] }}">
                                <i class="{{ $platform['icon'] }}"></i>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Navigation Links - 2 columns on desktop -->
                <div class="lg:col-span-4 footer-column-2 grid grid-cols-1 md:grid-cols-2 gap-8">
                    
                    <!-- Quick Links -->
                    <div>
                        <h4 class="text-lg font-semibold mb-4 text-white">
                            {{ $footerData['navigation']['quick_links'] }}
                        </h4>
                        <ul class="space-y-3">
                            @foreach($footerData['links']['quick_links'] as $link)
                            <li>
                                <a href="{{ $generateRoute($link['route']) }}" 
                                   class="text-gray-300 hover:text-primary-400 transition-colors duration-300 text-sm">
                                    {{ $link['label'] }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Destinations -->
                    <div>
                        <h4 class="text-lg font-semibold mb-4 text-white">
                            {{ $footerData['navigation']['destinations'] }}
                        </h4>
                        <ul class="space-y-3">
                            @foreach($footerData['links']['destinations'] as $destination)
                            <li>
                                <a href="{{ $generateRoute($destination['route']) }}" 
                                   class="text-gray-300 hover:text-primary-400 transition-colors duration-300 text-sm">
                                    {{ $destination['label'] }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                </div>

                <!-- Contact & Newsletter - 4 columns on desktop -->
                <div class="lg:col-span-4">
                    
                    <!-- Contact Information -->
                    <div class="mb-8">
                        <h4 class="text-lg font-semibold mb-4 text-white">
                            {{ $footerData['contact']['get_in_touch'] }}
                        </h4>
                        <div class="space-y-3 text-gray-300">
                            <!-- Phone -->
                            <div class="flex items-center">
                                <i class="fas fa-phone text-primary-400 mr-3 w-4"></i>
                                <div>
                                    <span class="text-sm text-gray-400">{{ $footerData['contact']['phone']['label'] }}:</span>
                                    <a href="tel:{{ $footerData['contact']['phone']['value'] }}" 
                                       class="block hover:text-primary-400 transition-colors duration-300">
                                        {{ $footerData['contact']['phone']['display'] }}
                                    </a>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="flex items-center">
                                <i class="fas fa-envelope text-primary-400 mr-3 w-4"></i>
                                <div>
                                    <span class="text-sm text-gray-400">{{ $footerData['contact']['email']['label'] }}:</span>
                                    <a href="mailto:{{ $footerData['contact']['email']['value'] }}" 
                                       class="block hover:text-primary-400 transition-colors duration-300">
                                        {{ $footerData['contact']['email']['value'] }}
                                    </a>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="flex items-start">
                                <i class="fas fa-map-marker-alt text-primary-400 mr-3 w-4 mt-1"></i>
                                <div>
                                    <span class="text-sm text-gray-400">{{ $footerData['contact']['address']['label'] }}:</span>
                                    <p class="text-sm leading-relaxed">{{ $footerData['contact']['address']['value'] }}</p>
                                </div>
                            </div>

                            <!-- Office Hours -->
                            <div class="flex items-center">
                                <i class="fas fa-clock text-primary-400 mr-3 w-4"></i>
                                <div>
                                    <span class="text-sm text-gray-400">{{ $footerData['contact']['office_hours']['label'] }}:</span>
                                    <p class="text-sm">{{ $footerData['contact']['office_hours']['value'] }}</p>
                                    <p class="text-xs text-gray-500">{{ $footerData['contact']['office_hours']['timezone'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Section -->
                    <div class="mb-6">
                        <div class="bg-gray-800 rounded-lg p-4 border border-gray-700">
                            <h4 class="font-semibold text-primary-400 mb-2">
                                {{ $footerData['cta']['plan_trip_title'] }}
                            </h4>
                            <p class="text-sm text-gray-300 mb-4">
                                {{ $footerData['cta']['plan_trip_description'] }}
                            </p>
                            <div class="flex flex-col sm:flex-row gap-2">
                                <a href="tel:{{ $footerData['contact']['phone']['value'] }}" 
                                   class="flex-1 inline-flex items-center justify-center px-4 py-2 bg-primary-600 text-white text-sm font-medium rounded-lg hover:bg-primary-700 transition-colors duration-300">
                                    <i class="fas fa-phone mr-2"></i>
                                    {{ $footerData['cta']['call_us'] }}
                                </a>
                                <a href="{{ $footerData['contact']['whatsapp']['url'] }}" 
                                   target="_blank"
                                   class="flex-1 inline-flex items-center justify-center px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-lg hover:bg-green-700 transition-colors duration-300">
                                    <i class="fab fa-whatsapp mr-2"></i>
                                    {{ $footerData['contact']['whatsapp']['cta'] }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Newsletter Signup -->
                    <div>
                        <h4 class="text-lg font-semibold mb-2 text-white">
                            {{ $footerData['newsletter']['title'] }}
                        </h4>
                        <p class="text-sm text-gray-300 mb-4">
                            {{ $footerData['newsletter']['description'] }}
                        </p>
                        <form class="newsletter-form space-y-3" method="POST" action="#" id="newsletter-form">
                            @csrf
                            <div class="flex flex-col sm:flex-row gap-2">
                                <input type="email" 
                                       name="email" 
                                       placeholder="{{ $footerData['newsletter']['placeholder'] }}" 
                                       required
                                       class="flex-1 px-4 py-2 bg-gray-800 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:border-primary-500 focus:ring-1 focus:ring-primary-500 transition-colors duration-200">
                                <button type="submit" 
                                        class="px-6 py-2 bg-primary-600 text-white font-medium rounded-lg hover:bg-primary-700 transition-colors duration-300 whitespace-nowrap">
                                    {{ $footerData['newsletter']['subscribe_button'] }}
                                </button>
                            </div>
                            <p class="text-xs text-gray-500">
                                {{ $footerData['newsletter']['privacy_note'] }}
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="border-t border-gray-800 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Legal Links -->
            <div class="flex flex-wrap justify-center mb-6 space-x-1 text-sm">
                <a href="{{ route('privacy.policy', ['locale' => $locale]) }}" 
                   class="text-gray-400 hover:text-primary-400 transition-colors duration-300 px-3 py-1">
                    {{ $footerData['legal']['privacy_policy'] }}
                </a>
                <span class="text-gray-600">•</span>
                <a href="{{ route('terms.conditions', ['locale' => $locale]) }}" 
                   class="text-gray-400 hover:text-primary-400 transition-colors duration-300 px-3 py-1">
                    {{ $footerData['legal']['terms_conditions'] }}
                </a>
                <span class="text-gray-600">•</span>
                <a href="#" class="text-gray-400 hover:text-primary-400 transition-colors duration-300 px-3 py-1">
                    {{ $footerData['legal']['cookie_policy'] }}
                </a>
                <span class="text-gray-600">•</span>
                <a href="#" class="text-gray-400 hover:text-primary-400 transition-colors duration-300 px-3 py-1">
                    {{ $footerData['legal']['sitemap'] }}
                </a>
            </div>

            <!-- Copyright -->
            <div class="text-center text-gray-400">
                <p class="text-sm mb-2">
                    {{ __('messages.footer.bottom.copyright', ['year' => now()->year]) }}
                </p>
                <p class="text-xs">
                    {{ $footerData['bottom']['tagline'] }} | {{ $footerData['bottom']['developed_by'] }}
                </p>
            </div>
        </div>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Newsletter form handling
    const newsletterForm = document.getElementById('newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[name="email"]').value;
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            
            // Simple validation
            if (!email || !email.includes('@')) {
                alert('Please enter a valid email address.');
                return;
            }
            
            // Show loading state
            submitBtn.textContent = 'Subscribing...';
            submitBtn.disabled = true;
            
            // Simulate API call (replace with actual implementation)
            setTimeout(() => {
                alert('Thank you for subscribing to our newsletter!');
                this.reset();
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            }, 1000);
        });
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
</script>