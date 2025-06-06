@extends('layouts.app')

@section('meta_title', 'FAQ - Agence Elbashiri')
@section('meta_description', 'Questions fréquemment posées sur nos services de visa, éducation et voyage')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h1 class="text-center mb-5">Questions Fréquemment Posées</h1>

            <div class="accordion" id="faqAccordion">
                <!-- General Questions -->
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#generalSection">
                            Questions Générales
                        </button>
                    </h2>
                    <div id="generalSection" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            @foreach($faqs as $faq)
                            <div class="mb-4">
                                <h5>{{ $faq['question'] }}</h5>
                                <p>{{ $faq['answer'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Visa Section -->
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#visaSection">
                            Questions sur les Visas
                        </button>
                    </h2>
                    <div id="visaSection" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <div class="mb-4">
                                <h5>Quels documents sont nécessaires pour une demande de visa ?</h5>
                                <p>Les documents requis varient selon le type de visa et le pays de destination. Généralement, vous aurez besoin de :</p>
                                <ul>
                                    <li>Passeport valide</li>
                                    <li>Formulaire de demande complété</li>
                                    <li>Photos d'identité récentes</li>
                                    <li>Justificatifs de ressources financières</li>
                                    <li>Lettre d'invitation ou d'admission (si applicable)</li>
                                </ul>
                            </div>
                            <div class="mb-4">
                                <h5>Combien de temps faut-il pour obtenir un visa ?</h5>
                                <p>Le délai de traitement varie selon le type de visa et le pays. En moyenne, il faut compter entre 2 à 4 semaines. Nous vous recommandons de faire votre demande au moins 2 mois avant votre date de départ prévue.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Education Section -->
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#educationSection">
                            Questions sur l'Éducation
                        </button>
                    </h2>
                    <div id="educationSection" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <div class="mb-4">
                                <h5>Comment puis-je étudier à l'étranger ?</h5>
                                <p>Nous vous accompagnons dans toutes les étapes :</p>
                                <ul>
                                    <li>Choix de l'université et du programme</li>
                                    <li>Préparation du dossier d'admission</li>
                                    <li>Demande de visa étudiant</li>
                                    <li>Logement et transport</li>
                                    <li>Intégration dans le pays d'accueil</li>
                                </ul>
                            </div>
                            <div class="mb-4">
                                <h5>Quels sont les coûts moyens des études à l'étranger ?</h5>
                                <p>Les coûts varient selon le pays et le programme choisi. Ils incluent généralement :</p>
                                <ul>
                                    <li>Frais de scolarité</li>
                                    <li>Logement</li>
                                    <li>Assurance santé</li>
                                    <li>Frais de visa</li>
                                    <li>Frais de vie quotidiens</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Travel Section -->
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#travelSection">
                            Questions sur les Voyages
                        </button>
                    </h2>
                    <div id="travelSection" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <div class="mb-4">
                                <h5>Quels services de voyage proposez-vous ?</h5>
                                <p>Nous proposons une gamme complète de services :</p>
                                <ul>
                                    <li>Réservation de billets d'avion</li>
                                    <li>Réservation d'hôtels</li>
                                    <li>Organisation de circuits touristiques</li>
                                    <li>Assistance voyage 24/7</li>
                                    <li>Assurance voyage</li>
                                </ul>
                            </div>
                            <div class="mb-4">
                                <h5>Comment réserver un voyage avec vous ?</h5>
                                <p>Vous pouvez réserver de plusieurs façons :</p>
                                <ul>
                                    <li>En ligne via notre site web</li>
                                    <li>Par téléphone</li>
                                    <li>En visitant notre agence</li>
                                    <li>Par email</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="text-center mt-5">
                <h4>Vous n'avez pas trouvé votre réponse ?</h4>
                <p class="mb-4">N'hésitez pas à nous contacter pour toute question supplémentaire.</p>
                <a href="{{ route('contact') }}" class="btn btn-primary">Contactez-nous</a>
            </div>
        </div>
    </div>
</div>

<style>
    .accordion-button {
        background-color: #f8f9fa;
        color: var(--primary-color);
        font-weight: 600;
    }

    .accordion-button:not(.collapsed) {
        background-color: var(--primary-color);
        color: white;
    }

    .accordion-button:focus {
        box-shadow: none;
        border-color: rgba(0,0,0,.125);
    }

    .accordion-body {
        background-color: white;
    }

    .accordion-item {
        border: 1px solid rgba(0,0,0,.125);
        border-radius: 0.5rem;
        overflow: hidden;
    }

    .btn-primary {
        background: linear-gradient(90deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        border: none;
        padding: 0.75rem 2rem;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
</style>
@endsection 