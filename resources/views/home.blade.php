@extends('layouts.app')

@section('meta_title', 'Agence Elbashiri - Accueil')
@section('meta_description', 'Votre partenaire de confiance pour les services de voyage et de visa')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-image"></div> 
        <div class="container hero-content">
            <div class="text-center position-relative">
                <h1 class="display-4 mb-4">Votre Voyage vers le Succès Commence Ici</h1>
                <p class="lead mb-4">Accompagnement professionnel pour votre parcours d'études à l'étranger</p>
                <div class="d-flex justify-content-center gap-3">
                    <!-- <a href="{{ route('services') }}" class="btn btn-light">Our Services</a> -->
                    <a href="{{ route('contact') }}" class="btn btn-outline-danger text-white hover-text-danger">Contactez-nous</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section --> 
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Nos Services
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                    Découvrez notre gamme complète de services pour votre réussite
                </p>
            </div>
            <div class="mt-12 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-semibold text-gray-900">Entretien initial (gratuit)</h3>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-500">Il s'agit d'un service de conseil gratuit pour identifier les universités et programmes appropriés en fonction de vos besoins.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-semibold text-gray-900">Assistance pour l'inscription</h3>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-500">Grâce à nos conseillers francophones et anglophones, vos documents professionnels sont créés ou corrigés pour garantir votre admission.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-semibold text-gray-900">Préparation du dossier de visa</h3>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-500">Grâce à notre expertise, nous vous accompagnons dans toutes les démarches administratives pour obtenir votre visa.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-8">
                <a href="{{ route('services') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                    Voir tous nos services
                    <svg class="ml-2 -mr-1 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Destinations Slider Section -->
    <section class="py-5 bg-gradient-to-b from-white to-gray-50">
        <div class="container">
            <h2 class="text-center mb-2 text-4xl font-bold text-gray-800">Nos Destinations</h2>
            <p class="text-center mb-8 text-gray-600">Découvrez nos destinations d'études les plus populaires</p>
            <div id="destinationsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#destinationsCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#destinationsCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#destinationsCarousel" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#destinationsCarousel" data-bs-slide-to="3"></button>
                </div>
                <div class="carousel-inner">
                    <!-- Canada -->
                    <div class="carousel-item active">
                        <div class="row align-items-center destination-card">
                            <div class="col-md-6">
                                <div class="destination-image-wrapper">
                                    <img src="{{ asset('images/destinations/canadian flag.jpg') }}" class="destination-img" alt="Canada">
                                    <div class="destination-overlay">
                                        <!-- <span class="">Top Destination</span> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="destination-content">
                                    <h3 class="destination-title">Canada</h3>
                                    <p class="destination-description">Le Canada est reconnu mondialement pour la qualité de son système éducatif et son accueil chaleureux des étudiants internationaux. Avec des frais de scolarité abordables et un excellent niveau de vie, c'est une destination de choix pour les études supérieures.</p>
                                    <div class="destination-features">
                                        <span class="feature"><i class="fas fa-graduation-cap"></i> Excellence académique</span>
                                        <span class="feature"><i class="fas fa-home"></i> Qualité de vie</span>
                                        <span class="feature"><i class="fas fa-briefcase"></i> Opportunités</span>
                                    </div>
                                    <a href="{{ route('destination', 'canada') }}" class="btn btn-danger destination-btn">
                                        En savoir plus <i class="fas fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- France -->
                    <div class="carousel-item">
                        <div class="row align-items-center destination-card">
                            <div class="col-md-6">
                                <div class="destination-image-wrapper">
                                    <img src="{{ asset('images/destinations/france.jpg') }}" class="destination-img" alt="France">
                                    <div class="destination-overlay">
                                        <!-- <span class="">Culture & Éducation</span> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="destination-content">
                                    <h3 class="destination-title">France</h3>
                                    <p class="destination-description">La France, berceau de la culture et de l'éducation, offre un système universitaire de renommée mondiale avec des frais de scolarité accessibles et une riche expérience culturelle.</p>
                                    <div class="destination-features">
                                        <span class="feature"><i class="fas fa-landmark"></i> Patrimoine culturel</span>
                                        <span class="feature"><i class="fas fa-euro-sign"></i> Frais abordables</span>
                                        <span class="feature"><i class="fas fa-globe-europe"></i> Europe centrale</span>
                                    </div>
                                    <a href="{{ route('destination', 'france') }}" class="btn btn-danger destination-btn">
                                        En savoir plus <i class="fas fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Espagne -->
                    <div class="carousel-item">
                        <div class="row align-items-center destination-card">
                            <div class="col-md-6">
                                <div class="destination-image-wrapper">
                                    <img src="{{ asset('images/destinations/spain.jpg') }}" class="destination-img" alt="Espagne">
                                    <div class="destination-overlay">
                                        <!-- <span class="">Climat idéal</span> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="destination-content">
                                    <h3 class="destination-title">Espagne</h3>
                                    <p class="destination-description">L'Espagne combine qualité de vie, climat méditerranéen et excellence académique. Ses universités offrent des programmes innovants dans un environnement dynamique et multiculturel.</p>
                                    <div class="destination-features">
                                        <span class="feature"><i class="fas fa-sun"></i> Climat méditerranéen</span>
                                        <span class="feature"><i class="fas fa-university"></i> Innovation</span>
                                        <span class="feature"><i class="fas fa-users"></i> Multiculturalisme</span>
                                    </div>
                                    <a href="{{ route('destination', 'spain') }}" class="btn btn-danger destination-btn">
                                        En savoir plus <i class="fas fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Belgique -->
                    <div class="carousel-item">
                        <div class="row align-items-center destination-card">
                            <div class="col-md-6">
                                <div class="destination-image-wrapper">
                                    <img src="{{ asset('images/destinations/belgium.jpg') }}" class="destination-img" alt="Belgique">
                                    <div class="destination-overlay">
                                        <!-- <span class="">Cœur de l'Europe</span> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="destination-content">
                                    <h3 class="destination-title">Belgique</h3>
                                    <p class="destination-description">La Belgique, au cœur de l'Europe, propose un enseignement supérieur de qualité avec des frais de scolarité modérés et une excellente qualité de vie.</p>
                                    <div class="destination-features">
                                        <span class="feature"><i class="fas fa-map-marker-alt"></i> Europe centrale</span>
                                        <span class="feature"><i class="fas fa-chart-line"></i> Qualité d'enseignement</span>
                                        <span class="feature"><i class="fas fa-hand-holding-usd"></i> Frais modérés</span>
                                    </div>
                                    <a href="{{ route('destination', 'belgium') }}" class="btn btn-danger destination-btn">
                                        En savoir plus <i class="fas fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#destinationsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#destinationsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Videos Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Histoires de Réussite de Visa</h2>
            <div class="row g-4">
                <!-- Video 1 -->
                <div class="col-md-4">
                    <div class="video-wrapper">
                        <video controls>
                            <source src="{{ asset('videos/visa1.mp4') }}" type="video/mp4">
                            Votre navigateur ne prend pas en charge la balise vidéo.
                        </video>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="col-md-4">
                    <div class="video-wrapper">
                        <video controls>
                            <source src="{{ asset('videos/visa2.mp4') }}" type="video/mp4">
                            Votre navigateur ne prend pas en charge la balise vidéo.
                        </video>
                    </div>
                </div>

                <!-- Video 3 -->
                <div class="col-md-4">
                    <div class="video-wrapper">
                        <video controls>
                            <source src="{{ asset('videos/visa3.mp4') }}" type="video/mp4">
                            Votre navigateur ne prend pas en charge la balise vidéo.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
@endsection

@push('styles')
<style>
    /* Common Section Styles */
    section {
        padding: 60px 0;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 800;
        color: #1a202c;
        text-align: center;
        margin-bottom: 0.75rem;
        position: relative;
        padding-bottom: 0.75rem;
    }

    .section-subtitle {
        font-size: 1.125rem;
        line-height: 1.75rem;
        color: #4a5568;
        text-align: center;
        max-width: 600px;
        margin: 0 auto 2rem;
    }

    /* Hero Section */
    .hero-section {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
        padding: 0;
    }
    
    .hero-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('{{ asset("images/background.png") }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    
    .hero-content {
        position: relative;
        z-index: 2;
        padding: 2rem;
        color: red;
        margin-top: 82vh;
        transform: translateY(-50%);
    }
    
    .hero-content h1 {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    
    .hero-content .lead {
        font-size: 1.5rem;
        font-weight: 400;
        margin-bottom: 2rem;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
    }
    
    .hero-content .btn {
        padding: 0.8rem 2rem;
        font-size: 1.1rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease;
    }
    
    .hero-content .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }
    
    .video-wrapper {
        position: relative;
        width: 100%;
        padding-top: 177.78%;
        background: #000;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        max-width: 400px;
        margin: 0 auto;
    }
    
    .video-wrapper:hover {
        transform: translateY(-5px);
    }
    
    .video-wrapper video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        background: #000;
    }
    
    .video-wrapper video::-webkit-media-controls {
        background-color: rgba(0, 0, 0, 0.5);
    }
    
    .video-wrapper video::-webkit-media-controls-panel {
        padding: 0 10px;
    }
    
    .destination-img {
        height: 300px;
        object-fit: cover;
        object-position: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }
    
    .destination-img:hover {
        transform: scale(1.02);
    }
    
    .carousel-item {
        padding: 20px;
    }
    
    .carousel-item .row {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }
    
    .destination-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin: 20px 0;
        height: 100%;
    }
    
    .destination-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }
    
    .destination-image-wrapper {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        margin: 20px;
        aspect-ratio: 16/9;
    }
    
    .destination-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        transition: transform 0.5s ease;
    }
    
    .destination-image-wrapper:hover .destination-img {
        transform: scale(1.05);
    }
    
    .destination-overlay {
        position: absolute;
        top: 20px;
        right: 20px;
        z-index: 2;
    }
    
    .destination-content {
        padding: 30px;
    }
    
    .destination-title {
        font-size: 2rem;
        font-weight: 700;
        color: #2d3748;
        margin-bottom: 15px;
    }
    
    .destination-description {
        color: #4a5568;
        line-height: 1.6;
        margin-bottom: 20px;
    }
    
    .destination-features {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin-bottom: 25px;
    }
    
    .feature {
        display: flex;
        align-items: center;
        gap: 8px;
        background: #f7fafc;
        padding: 8px 15px;
        border-radius: 20px;
        font-size: 0.9rem;
        color: #4a5568;
    }
    
    .feature i {
        color: #dc3545;
    }
    
    .destination-btn {
        padding: 12px 25px;
        border-radius: 25px;
        font-weight: 600;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .destination-btn:hover {
        transform: translateX(5px);
        box-shadow: 0 5px 15px rgba(220, 53, 69, 0.3);
    }
    
    .carousel-control-prev,
    .carousel-control-next {
        width: 50px;
        height: 50px;
        background: rgba(220, 53, 69, 0.9);
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
        margin: 0 20px;
    }
    
    .carousel-indicators {
        bottom: -50px;
    }
    
    .carousel-indicators button {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        margin: 0 5px;
        background-color: #dc3545;
        opacity: 0.5;
        transition: all 0.3s ease;
    }
    
    .carousel-indicators button.active {
        opacity: 1;
        transform: scale(1.2);
    }

    /* Services Section */
    .bg-gray-50 {
        background-color: white;
    }

    .text-3xl {
        font-size: 2.5rem;
        font-weight: 800;
        color: #1a202c;
        text-align: center;
        margin-bottom: 0.75rem;
        position: relative;
        padding-bottom: 0.75rem;
    }

    .text-3xl::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background-color: #dc3545;
        border-radius: 2px;
    }

    .text-lg {
        font-size: 1.125rem;
        line-height: 1.75rem;
        color: #4a5568;
        max-width: 600px;
        margin: 0 auto;
    }

    .grid {
        display: grid;
        gap: 2rem;
        margin-top: 3rem;
    }

    .grid-cols-1 {
        grid-template-columns: repeat(1, minmax(0, 1fr));
    }

    @media (min-width: 768px) {
        .md\:grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (min-width: 1024px) {
        .lg\:grid-cols-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }
    }

    .bg-white {
        background-color: white;
        border-radius: 1rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: center;
    }

    .bg-white:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    .p-6 {
        padding: 2rem;
    }

    .flex {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .items-center {
        align-items: center;
    }

    .flex-shrink-0 {
        flex-shrink: 0;
        margin-bottom: 1.5rem;
    }

    .h-6 {
        height: 3rem;
        width: 3rem;
    }

    .w-6 {
        width: 3rem;
    }

    .text-blue-600 {
        color: #dc3545;
    }

    .ml-4 {
        margin-left: 0;
    }

    .text-xl {
        font-size: 1.5rem;
        line-height: 2rem;
        font-weight: 600;
        color: #1a202c;
        margin-bottom: 1rem;
    }

    .mt-4 {
        margin-top: 1rem;
    }

    .text-gray-500 {
        color: #6b7280;
        line-height: 1.5;
    }

    .mt-8 {
        margin-top: 2rem;
    }

    .inline-flex {
        display: inline-flex;
    }

    .items-center {
        align-items: center;
    }

    .px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }

    .py-3 {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
    }

    .border {
        border-width: 1px;
    }

    .border-transparent {
        border-color: transparent;
    }

    .text-base {
        font-size: 1rem;
        line-height: 1.5rem;
    }

    .font-medium {
        font-weight: 500;
    }

    .rounded-md {
        border-radius: 0.375rem;
    }

    .text-white {
        color: white;
    }

    .bg-blue-600 {
        background-color: #dc3545;
    }

    .hover\:bg-blue-700:hover {
        background-color: #bb2d3b;
    }

    .ml-2 {
        margin-left: 0.5rem;
    }

    .-mr-1 {
        margin-right: -0.25rem;
    }

    .h-5 {
        height: 1.25rem;
    }

    .w-5 {
        width: 1.25rem;
    }

    /* Destinations Section */
    .py-5 {
        padding: 60px 0;
    }

    .text-4xl {
        font-size: 2.5rem;
        font-weight: 800;
        color: #1a202c;
        text-align: center;
        margin-bottom: 0.75rem;
        position: relative;
        padding-bottom: 0.75rem;
    }

    .text-4xl::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background-color: #dc3545;
        border-radius: 2px;
    }

    /* Videos Section */
    .py-5 {
        padding: 60px 0;
    }

    h2.text-center {
        font-size: 2.5rem;
        font-weight: 800;
        color: #1a202c;
        text-align: center;
        margin-bottom: 0.75rem;
        position: relative;
        padding-bottom: 0.75rem;
    }

    h2.text-center::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background-color: #dc3545;
        border-radius: 2px;
    }

    /* Large Desktop Screens (1366px and up) */
    @media (min-width: 1366px) {
        .hero-section {
            height: 100vh;
        }

        .hero-content {
            margin-top: 75vh;
        }

        .hero-content h1 {
            font-size: 4rem;
        }

        .hero-content .lead {
            font-size: 1.75rem;
        }

        .hero-content .btn {
            padding: 1rem 2.5rem;
            font-size: 1.2rem;
        }
    }

    /* Medium Desktop Screens (1024px to 1365px) */
    @media (min-width: 1024px) and (max-width: 1365px) {
        .hero-section {
            height: 100vh;
        }

        .hero-content {
            margin-top: 78vh;
        }

        .hero-content h1 {
            font-size: 3.75rem;
        }

        .hero-content .lead {
            font-size: 1.6rem;
        }

        .hero-content .btn {
            padding: 0.9rem 2.2rem;
            font-size: 1.15rem;
        }
    }

    /* Mobile Responsive Styles */
    @media (max-width: 768px) {
        .hero-section {
            height: 80vh;
        }

        .hero-image {
            background-image: url('{{ asset("images/hero-bg.jpg") }}');
        }

        .hero-content {
            margin-top: 60vh;
        }

        .hero-content h1 {
            font-size: 2.5rem;
        }

        .hero-content .lead {
            font-size: 1.25rem;
        }
    }

    @media (max-width: 480px) {
        .hero-content h1 {
            font-size: 2rem;
        }

        .hero-content .lead {
            font-size: 1.1rem;
        }

        .hero-content .btn {
            padding: 0.6rem 1.5rem;
            font-size: 1rem;
        }
    }

    /* Destination Image Styles */
    .destination-image-wrapper {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        margin: 20px;
        aspect-ratio: 16/9;
    }
    
    .destination-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        transition: transform 0.5s ease;
    }
    
    .destination-image-wrapper:hover .destination-img {
        transform: scale(1.05);
    }

    /* Mobile Responsive Styles for Destination Images */
    @media (max-width: 768px) {
        .destination-image-wrapper {
            margin: 10px;
            aspect-ratio: 4/3;
        }

        .destination-img {
            object-position: center center;
        }
    }

    @media (max-width: 480px) {
        .destination-image-wrapper {
            margin: 5px;
            aspect-ratio: 3/2;
        }

        .destination-img {
            object-position: center center;
        }
    }
</style>
@endpush

<!-- @push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Removed Typed.js initialization as language directives are removed
    });
</script>
@endpush  -->