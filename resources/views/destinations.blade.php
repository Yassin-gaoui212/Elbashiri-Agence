@extends('layouts.app')

@section('content')
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block">Nos Destinations d'Études</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Découvrez les meilleures destinations pour vos études à l'étranger
                </p>
            </div>
        </div>
    </div>

    <div class="bg-gray-50">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach($destinations as $destination)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        @php
                            $imageMap = [
                                'france' => 'france.jpg',
                                'belgium' => 'belgium.jpg',
                                'spain' => 'spain.jpg',
                                'poland' => 'poland.jpg',
                                'canada' => 'Canadian Flag.jpg',
                            ];
                            $imgFile = $imageMap[$destination['slug']] ?? $destination['image'];
                        @endphp
                        <img src="{{ asset('images/destinations/' . $imgFile) }}" alt="{{ $destination['name'] }}" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900">{{ $destination['name'] }}</h3>
                            <p class="mt-4 text-gray-500">{{ $destination['description'] }}</p>
                            <div class="mt-6">
                                <a href="{{ route('destination', $destination['slug']) }}" class="inline-flex items-center text-blue-600 hover:text-blue-800">
                                    En savoir plus
                                    <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Pourquoi étudier à l'étranger ?
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                    Les avantages d'une expérience internationale
                </p>
            </div>
            <div class="mt-12 grid gap-8 md:grid-cols-3">
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-900">Développement Personnel</h3>
                    <p class="mt-4 text-gray-500">Découvrez de nouvelles cultures, développez votre autonomie et votre adaptabilité.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-900">Excellence Académique</h3>
                    <p class="mt-4 text-gray-500">Accédez à des programmes d'études de qualité dans des établissements renommés.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-900">Opportunités Professionnelles</h3>
                    <p class="mt-4 text-gray-500">Développez un réseau international et augmentez vos chances sur le marché du travail.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-blue-600">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                <span class="block">Prêt à commencer votre aventure?</span>
                <span class="block text-blue-200">Contactez-nous dès aujourd'hui.</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-white hover:bg-blue-50">
                        Contactez-nous
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection 