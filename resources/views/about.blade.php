@extends('layouts.app')

@section('content')
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block">Qui sommes-nous ?</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Cabinet référent de conseil et coaching en orientation scolaire et professionnelle
                </p>
            </div>
        </div>
    </div>

    <div class="bg-gray-50">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                <div>
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                        Cabinet Elbashiri Agency
                    </h2>
                    <p class="mt-3 text-lg text-gray-500">
                        Créé en 2024, Elbashiri Agency est un cabinet spécialiste du conseil et coaching d'orientation scolaire et professionnelle des élèves, des étudiants et/ou de professionnels dans leur projet d'études à l'étranger.
                    </p>
                    <p class="mt-4 text-lg text-gray-500">
                        Étudier à l'étranger après le bac est un projet qui se prépare et ne s'improvise pas!
                    </p>
                    <p class="mt-4 text-lg text-gray-500">
                        Notre démarche novatrice de l'orientation scolaire permet,
                         suite à un bilan de compétence, de repérer chez les étudiants, marocains ou étrangers,
                          d'avoir une vision globale et claire des futures perspectives universitaires et les différentes possibilités d'emploi associées à chaque choix académique, en se basant surtout sur ses traits de personnalité, ses motivations et ses souhaits.
                    </p>
                </div>
                <div class="relative">
                    <img class="rounded-lg shadow-lg w-full max-w-md mx-auto h-65 object-contain" src="{{ asset('images/page.jpg') }}" alt="About Elbashiri Agency">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Notre Mission
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                    Notre cabinet met à la disposition de chaque élève et étudiant toute son expertise ainsi qu'une panoplie d'outils d'aide, d'orientation et de réorientation scolaire qui leur permettent de concrétiser facilement et rapidement leur projet d'études à l'étranger.
                </p>
            </div>
            <div class="mt-12 grid gap-8 md:grid-cols-3">
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-900">Expertise</h3>
                    <p class="mt-4 text-gray-500">Plus de 15,000 étudiants accompagnés dans leur projet d'études à l'étranger.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-900">Accompagnement</h3>
                    <p class="mt-4 text-gray-500">Un suivi personnalisé de A à Z pour chaque étudiant.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-semibold text-gray-900">Réseau</h3>
                    <p class="mt-4 text-gray-500">Un réseau étendu de partenaires universitaires à travers le monde.</p>
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