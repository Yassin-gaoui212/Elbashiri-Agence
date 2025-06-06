@extends('layouts.app')

@section('content')
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block">Étudier en {{ $destination['name'] }}</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    {{ $destination['description'] }}
                </p>
            </div>
        </div>
    </div>

    <div class="bg-gray-50">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <!-- Onglets -->
            <ul class="nav nav-tabs mb-4" id="destinationTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" 
                            id="general-tab" 
                            data-bs-toggle="tab" 
                            data-bs-target="#general" 
                            type="button" 
                            role="tab"
                            aria-controls="general"
                            aria-selected="true">
                        Informations générales
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" 
                            id="admission-tab" 
                            data-bs-toggle="tab" 
                            data-bs-target="#admission" 
                            type="button" 
                            role="tab"
                            aria-controls="admission"
                            aria-selected="false">
                        Inscriptions et admissions
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" 
                            id="cout-tab" 
                            data-bs-toggle="tab" 
                            data-bs-target="#cout" 
                            type="button" 
                            role="tab"
                            aria-controls="cout"
                            aria-selected="false">
                        Coût et logement
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" 
                            id="visa-tab" 
                            data-bs-toggle="tab" 
                            data-bs-target="#visa" 
                            type="button" 
                            role="tab"
                            aria-controls="visa"
                            aria-selected="false">
                        Visas
                    </button>
                </li>
            </ul>

            <!-- Contenu des onglets -->
            <div class="tab-content p-4 border border-top-0 bg-white rounded-b-lg" id="destinationTabsContent">
                <!-- Onglet 1: Informations générales -->
                <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                    <h3 class="text-2xl font-bold mb-4">Informations générales</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h4 class="text-xl font-semibold mb-3">Système éducatif</h4>
                            <p class="text-gray-600 mb-4">{{ $destination['general_info']['education_system'] }}</p>
                            
                            <h4 class="text-xl font-semibold mb-3">Qualité de vie</h4>
                            <p class="text-gray-600 mb-4">{{ $destination['general_info']['quality_of_life'] }}</p>
                            
                            <h4 class="text-xl font-semibold mb-3">Opportunités professionnelles</h4>
                            <p class="text-gray-600 mb-4">{{ $destination['general_info']['job_opportunities'] }}</p>
                        </div>
                        <div>
                            <h4 class="text-xl font-semibold mb-3">Universités Renommées</h4>
                            <ul class="space-y-2">
                                @foreach($destination['universities'] as $university)
                                    <li class="flex items-start">
                                        <svg class="h-6 w-6 text-blue-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>{{ $university }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Onglet 2: Inscriptions et admissions -->
                <div class="tab-pane fade" id="admission" role="tabpanel" aria-labelledby="admission-tab">
                    <h3 class="text-2xl font-bold mb-4">Inscriptions et admissions</h3>
                    <div class="space-y-6">
                        <div>
                            <h4 class="text-xl font-semibold mb-3">Dates limites d'inscription</h4>
                            @if(is_array($destination['admission_process']['application_deadlines']))
                                <ul class="space-y-2">
                                    @foreach($destination['admission_process']['application_deadlines'] as $deadline)
                                        <li class="flex items-start">
                                            <svg class="h-6 w-6 text-blue-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <span>{{ $deadline }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p class="text-gray-600 mb-4">{{ $destination['admission_process']['application_deadlines'] }}</p>
                            @endif
                        </div>
                        <div>
                            <h4 class="text-xl font-semibold mb-3">Documents requis</h4>
                            <ul class="space-y-2">
                                @foreach($destination['admission_process']['required_documents'] as $document)
                                    <li class="flex items-start">
                                        <svg class="h-6 w-6 text-blue-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>{{ $document }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-xl font-semibold mb-3">Critères de sélection</h4>
                            <ul class="space-y-2">
                                @foreach($destination['admission_process']['selection_criteria'] as $criterion)
                                    <li class="flex items-start">
                                        <svg class="h-6 w-6 text-blue-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>{{ $criterion }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Onglet 3: Coût et logement -->
                <div class="tab-pane fade" id="cout" role="tabpanel" aria-labelledby="cout-tab">
                    <h3 class="text-2xl font-bold mb-4">Coût et logement</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h4 class="text-xl font-semibold mb-3">Frais de scolarité</h4>
                            <p class="text-gray-600 mb-4">{{ $destination['costs']['tuition'] }}</p>
                            
                            <h4 class="text-xl font-semibold mb-3">Coût de la vie</h4>
                            <p class="text-gray-600 mb-4">{{ $destination['costs']['living'] }}</p>
                            
                            <h4 class="text-xl font-semibold mb-3">Logement</h4>
                            <p class="text-gray-600 mb-4">{{ $destination['costs']['accommodation'] }}</p>
                        </div>
                        <div>
                            <h4 class="text-xl font-semibold mb-3">Options de logement</h4>
                            <ul class="space-y-2 mb-4">
                                @foreach($destination['housing']['options'] as $option)
                                    <li class="flex items-start">
                                        <svg class="h-6 w-6 text-blue-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>{{ $option }}</span>
                                    </li>
                                @endforeach
                            </ul>
                            
                            <h4 class="text-xl font-semibold mb-3">Coûts du logement</h4>
                            <ul class="space-y-2 mb-4">
                                @foreach($destination['housing']['costs'] as $cost)
                                    <li class="flex items-start">
                                        <svg class="h-6 w-6 text-blue-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>{{ $cost }}</span>
                                    </li>
                                @endforeach
                            </ul>
                            
                            <h4 class="text-xl font-semibold mb-3">Conseils pratiques</h4>
                            <ul class="space-y-2">
                                @foreach($destination['housing']['tips'] as $tip)
                                    <li class="flex items-start">
                                        <svg class="h-6 w-6 text-blue-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>{{ $tip }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Onglet 4: Visas -->
                <div class="tab-pane fade" id="visa" role="tabpanel" aria-labelledby="visa-tab">
                    <h3 class="text-2xl font-bold mb-4">Visas</h3>
                    <div class="space-y-6">
                        <div>
                            <h4 class="text-xl font-semibold mb-3">Type de visa</h4>
                            <p class="text-gray-600 mb-4">{{ $destination['visa']['type'] }}</p>
                            
                            <h4 class="text-xl font-semibold mb-3">Durée de validité</h4>
                            <p class="text-gray-600 mb-4">{{ $destination['visa']['duration'] }}</p>
                            
                            <h4 class="text-xl font-semibold mb-3">Travail pendant les études</h4>
                            <p class="text-gray-600 mb-4">{{ $destination['visa']['work'] }}</p>
                            
                            <h4 class="text-xl font-semibold mb-3">Après les études</h4>
                            <p class="text-gray-600 mb-4">{{ $destination['visa']['post_study'] }}</p>
                        </div>
                        <div>
                            <h4 class="text-xl font-semibold mb-3">Documents nécessaires</h4>
                            <ul class="space-y-2">
                                @foreach($destination['visa']['requirements'] as $requirement)
                                    <li class="flex items-start">
                                        <svg class="h-6 w-6 text-blue-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>{{ $requirement }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-blue-600">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                <span class="block">Prêt à commencer votre aventure en {{ $destination['name'] }}?</span>
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