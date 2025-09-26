@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-100 py-16">
    <div class="max-w-4xl mx-auto px-4">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-3xl font-bold mb-8 text-center">{{ __('Translation Test') }}</h1>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h2 class="text-xl font-semibold mb-4">Navigation Translations</h2>
                    <ul class="space-y-2">
                        <li><strong>Home:</strong> {{ __('messages.nav.home') }}</li>
                        <li><strong>About:</strong> {{ __('messages.nav.about') }}</li>
                        <li><strong>Tours:</strong> {{ __('messages.nav.tours') }}</li>
                        <li><strong>Contact:</strong> {{ __('messages.nav.contact') }}</li>
                    </ul>
                </div>
                
                <div>
                    <h2 class="text-xl font-semibold mb-4">Hero Section</h2>
                    <p class="text-sm mb-4"><strong>Title:</strong><br>{{ __('messages.hero.title') }}</p>
                    <p class="text-sm"><strong>Subtitle:</strong><br>{{ __('messages.hero.subtitle') }}</p>
                </div>
            </div>
            
            <div class="mt-8 pt-8 border-t">
                <h2 class="text-xl font-semibold mb-4">Current Language: {{ app()->getLocale() }}</h2>
                <div class="flex gap-4">
                    <a href="{{ route('language.switch', 'en') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">English</a>
                    <a href="{{ route('language.switch', 'si') }}" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">සිංහල</a>
                    <a href="{{ route('language.switch', 'ta') }}" class="px-4 py-2 bg-purple-500 text-white rounded hover:bg-purple-600">தமிழ்</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
