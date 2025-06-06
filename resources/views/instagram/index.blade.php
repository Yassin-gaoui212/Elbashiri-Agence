@extends('layouts.app')

@section('content')
<div class="bg-white">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
                <span class="block">Notre Instagram</span>
            </h1>
            <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                Découvrez nos dernières actualités et moments partagés sur Instagram
            </p>
        </div>
    </div>
</div>

<div class="bg-gray-50">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($posts as $post)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    @if($post['type'] === 'image')
                        <div class="relative pb-[100%]">
                            <img src="{{ $post['url'] }}" alt="{{ $post['caption'] }}" class="absolute inset-0 w-full h-full object-cover">
                        </div>
                    @elseif($post['type'] === 'video')
                        <div class="relative pb-[100%]">
                            <video class="absolute inset-0 w-full h-full object-cover" controls>
                                <source src="{{ $post['url'] }}" type="video/mp4">
                                Votre navigateur ne supporte pas la lecture de vidéos.
                            </video>
                        </div>
                    @elseif($post['type'] === 'carousel')
                        <div class="relative pb-[100%]">
                            <div class="absolute inset-0">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        @foreach($post['urls'] as $url)
                                            <div class="swiper-slide">
                                                <img src="{{ $url }}" alt="{{ $post['caption'] }}" class="w-full h-full object-cover">
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="p-6">
                        <p class="text-gray-600 text-sm mb-4">{{ $post['caption'] }}</p>
                        <div class="flex items-center justify-between text-sm text-gray-500">
                            <div class="flex items-center">
                                <svg class="h-5 w-5 text-red-500 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                                </svg>
                                <span>{{ $post['likes'] }}</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="h-5 w-5 text-gray-500 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"/>
                                </svg>
                                <span>{{ $post['comments'] }}</span>
                            </div>
                            <div>{{ \Carbon\Carbon::parse($post['date'])->format('d/m/Y') }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@push('scripts')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swipers = document.querySelectorAll('.swiper-container');
        swipers.forEach(swiper => {
            new Swiper(swiper, {
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
    });
</script>
@endpush
@endsection 