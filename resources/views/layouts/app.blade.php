<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('meta_title', 'Agence Elbashiri')</title>
    <meta name="description" content="@yield('meta_description', 'Agence Elbashiri - Votre Partenaire de Voyage')">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')

    <style>
        :root {
            --primary-color: rgb(210, 23, 23);
            --secondary-color: rgb(255, 34, 0);
        }
        
        .navbar {
            background: linear-gradient(90deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            padding: 1rem 0;
            position: sticky !important;
            top: 0 !important;
            z-index: 50;
        }
        
        .navbar-brand {
            text-decoration: none;
            margin-right: 0;
        }
        
        .navbar-brand h1 {
            color: white;
            font-size: 1.8rem;
            font-weight: 700;
            margin: 0;
            position: relative;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: all 0.3s ease;
        }
        
        .navbar-brand h1:hover {
            transform: scale(1.05);
            text-shadow: 0 0 10px rgba(10, 6, 6, 0.5);
        }
        
        .navbar-brand h1::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: white;
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.3s ease;
        }
        
        .navbar-brand h1:hover::after {
            transform: scaleX(1);
            transform-origin: left;
        }
        
        .navbar-nav {
            margin: 0 auto;
        }
        
        .navbar-nav .nav-link {
            color: white !important;
            font-weight: 500;
            padding: 0.5rem 1rem;
            transition: all 0.3s ease;
            text-align: center;
            margin: 0 10px;
            position: relative;
        }
        
        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background-color: white;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .navbar-nav .nav-link:hover::after {
            width: 100%;
        }
        
        .navbar-toggler {
            border-color: white;
        }
        
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        
        .instagram-btn {
            background-color: white;
            color: var(--primary-color);
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: all 0.3s ease;
            white-space: nowrap;
        }
        
        .instagram-btn:hover {
            background-color: rgba(255, 255, 255, 0.9);
            transform: translateY(-2px);
        }
        
        .footer {
            background: linear-gradient(90deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            font-size: 0.9rem;
        }
        
        .footer h5 {
            font-size: 1.1rem;
            font-weight: 600;
        }
        
        .footer a {
            text-decoration: none;
            transition: opacity 0.3s ease;
        }
        
        .footer a:hover {
            opacity: 0.8;
        }
        
        .footer .btn-light {
            font-size: 0.9rem;
            padding: 0.25rem 0.75rem;
        }
        
        .footer hr {
            border-color: rgba(255, 255, 255, 0.1);
            margin: 1rem 0;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .navbar-brand h1 {
            animation: fadeIn 1s ease-out;
        }

        @media (max-width: 991.98px) {
            .navbar-collapse {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: linear-gradient(90deg, var(--primary-color) 0%, var(--secondary-color) 100%);
                padding: 1rem;
                z-index: 1000;
            }
            
            .navbar-nav {
                margin: 1rem 0;
            }
            
            .instagram-btn {
                margin: 1rem 0;
            }
        }

        .navbar-scrolled {
            background: linear-gradient(90deg, rgba(255, 0, 0, 0.8) 0%, rgba(255, 0, 0, 0.8) 100%) !important;
            padding: 0.5rem 0 !important; /* Reduced padding for a more minimal look */
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg sticky top-0 z-50">
        <div class="container">
            <!-- Left: Brand -->
            <a class="navbar-brand" href="{{ route('home') }}">
                <h1>Elbashiri Agency</h1>
            </a>

            <!-- Center: Navigation Links -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">À Propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('destinations') }}">Destinations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('instagram.index') }}">Instagram</a>
                    </li> -->
                </ul>
            </div>

            <!-- Right: Instagram Button -->
            <div class="d-flex align-items-center">
                <a href="https://www.instagram.com/elbashiri_agence" target="_blank" class="instagram-btn">
                    <i class="fab fa-instagram me-2"></i>Suivez-nous
                </a>
                <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer py-4">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <h5 class="mb-3">Agence Elbashiri</h5>
                    <p class="small mb-3">Votre partenaire de confiance pour les services d'éducation internationale et de voyage.</p>
                    <a href="https://www.instagram.com/elbashiri_agence" target="_blank" class="btn btn-light btn-sm">
                        <i class="fab fa-instagram"></i> Suivez-nous
                    </a>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-6">
                            <h5 class="mb-3">Liens Rapides</h5>
                            <ul class="list-unstyled small">
                                <li class="mb-2"><a href="{{ route('home') }}" class="text-white">Accueil</a></li>
                                <li class="mb-2"><a href="{{ route('about') }}" class="text-white">À Propos</a></li>
                                <li class="mb-2"><a href="{{ route('services') }}" class="text-white">Services</a></li>
                                <li class="mb-2"><a href="{{ route('destinations') }}" class="text-white">Destinations</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <h5 class="mb-3">Informations</h5>
                            <ul class="list-unstyled small">
                                <li class="mb-2"><a href="{{ route('contact') }}" class="text-white">Contact</a></li>
                                <li class="mb-2"><a href="{{ route('privacy') }}" class="text-white">Confidentialité</a></li>
                                <li class="mb-2"><a href="{{ route('faq') }}" class="text-white">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5 class="mb-3">Contactez-nous</h5>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i>elbashiriagence@gmail.com</li>
                        <li class="mb-2"><i class="fas fa-phone me-2"></i>+212 763212738</li>
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i>Rue Exa JAMAL EDDINE EL AFGHANI , Nador, Maroc</li>
                    </ul>
                </div>
            </div>
            <hr class="my-3">
            <div class="text-center small">
                <p class="mb-0">&copy; {{ date('Y') }} Agence Elbashiri. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) { // Change 50 to the desired scroll threshold
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });
    </script>
    @stack('scripts')
</body>
</html> 