{{-- Language Switcher Component --}}
<div class="language-switcher relative inline-block">
    <button type="button" class="language-dropdown-btn flex items-center space-x-2 px-3 py-2 text-sm font-medium text-white hover:text-primary-200 transition-colors duration-300 bg-primary-600/20 rounded-lg backdrop-blur-sm">
        <i class="fas fa-globe"></i>
        <span>{{ strtoupper(app()->getLocale()) }}</span>
        <i class="fas fa-chevron-down text-xs transform transition-transform duration-200"></i>
    </button>
    
    <div class="language-dropdown hidden absolute right-0 sm:right-0 left-0 sm:left-auto mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 z-9999">
        <div class="py-2">
            <a href="{{ route('language.switch', 'en') }}" 
               class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition-colors duration-200 {{ app()->getLocale() == 'en' ? 'bg-primary-50 text-primary-600' : '' }}">
                <div class="w-5 h-5 mr-3 rounded-sm bg-gradient-to-r from-blue-600 to-red-600 flex items-center justify-center">
                    <span class="text-xs text-white font-bold">EN</span>
                </div>
                <span>English</span>
            </a>
            
            <a href="{{ route('language.switch', 'si') }}" 
               class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition-colors duration-200 {{ app()->getLocale() == 'si' ? 'bg-primary-50 text-primary-600' : '' }}">
                <div class="w-5 h-5 mr-3 rounded-sm bg-gradient-to-br from-orange-500 to-green-600 flex items-center justify-center">
                    <span class="text-xs text-white font-bold">සි</span>
                </div>
                <span>සිංහල</span>
            </a>
            
            <a href="{{ route('language.switch', 'ta') }}" 
               class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition-colors duration-200 {{ app()->getLocale() == 'ta' ? 'bg-primary-50 text-primary-600' : '' }}">
                <div class="w-5 h-5 mr-3 rounded-sm bg-gradient-to-br from-orange-500 to-green-600 flex items-center justify-center">
                    <span class="text-xs text-white font-bold">த</span>
                </div>
                <span>தமிழ்</span>
            </a>
            
            <div class="border-t border-gray-200 my-2"></div>
            
            <a href="{{ route('language.switch', 'de') }}" 
               class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition-colors duration-200 {{ app()->getLocale() == 'de' ? 'bg-primary-50 text-primary-600' : '' }}">
                <div class="w-5 h-5 mr-3 rounded-sm bg-gradient-to-r from-black to-red-600 flex items-center justify-center">
                    <span class="text-xs text-yellow-400 font-bold">DE</span>
                </div>
                <span>Deutsch</span>
            </a>
            
            <a href="{{ route('language.switch', 'fr') }}" 
               class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition-colors duration-200 {{ app()->getLocale() == 'fr' ? 'bg-primary-50 text-primary-600' : '' }}">
                <div class="w-5 h-5 mr-3 rounded-sm bg-gradient-to-r from-blue-600 to-red-600 flex items-center justify-center">
                    <span class="text-xs text-white font-bold">FR</span>
                </div>
                <span>Français</span>
            </a>
            
            <a href="{{ route('language.switch', 'ru') }}" 
               class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition-colors duration-200 {{ app()->getLocale() == 'ru' ? 'bg-primary-50 text-primary-600' : '' }}">
                <div class="w-5 h-5 mr-3 rounded-sm bg-gradient-to-b from-white via-blue-600 to-red-600 flex items-center justify-center">
                    <span class="text-xs text-white font-bold">RU</span>
                </div>
                <span>Русский</span>
            </a>
            
            <a href="{{ route('language.switch', 'zh') }}" 
               class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition-colors duration-200 {{ app()->getLocale() == 'zh' ? 'bg-primary-50 text-primary-600' : '' }}">
                <div class="w-5 h-5 mr-3 rounded-sm bg-red-600 flex items-center justify-center">
                    <span class="text-xs text-yellow-400 font-bold">中</span>
                </div>
                <span>中文</span>
            </a>
        </div>
    </div>
</div>


