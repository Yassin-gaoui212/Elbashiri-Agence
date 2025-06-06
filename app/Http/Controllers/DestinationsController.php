<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationsController extends Controller
{
    public function index()
    {
        $destinations = [
            [
                'name' => 'Canada',
                'slug' => 'canada',
                'description' => 'Le Canada est reconnu mondialement pour la qualité de son système éducatif et son accueil chaleureux des étudiants internationaux. Avec des frais de scolarité abordables et un excellent niveau de vie, c\'est une destination de choix pour les études supérieures.',
                'image' => 'canada.jpg'
            ],
            [
                'name' => 'France',
                'slug' => 'france',
                'description' => 'La France, berceau de la culture et de l\'éducation, offre un système universitaire de renommée mondiale avec des frais de scolarité accessibles et une riche expérience culturelle.',
                'image' => 'france.jpg'
            ],
            [
                'name' => 'Espagne',
                'slug' => 'spain',
                'description' => 'L\'Espagne combine qualité de vie, climat méditerranéen et excellence académique. Ses universités offrent des programmes innovants dans un environnement dynamique et multiculturel.',
                'image' => 'spain.jpg'
            ],
            [
                'name' => 'Belgique',
                'slug' => 'belgium',
                'description' => 'La Belgique, au cœur de l\'Europe, propose un enseignement supérieur de qualité avec des frais de scolarité modérés et une excellente qualité de vie.',
                'image' => 'belgium.jpg'
            ],
        ];

        return view('destinations', [
            'title' => 'Nos Destinations d\'Études',
            'description' => 'Découvrez les meilleures destinations pour vos études à l\'étranger',
            'destinations' => $destinations
        ]);
    }

    public function show($country)
    {
        $destinations = [
            'canada' => [
                'name' => 'Canada',
                'description' => 'Le Canada est reconnu mondialement pour la qualité de son système éducatif et son accueil chaleureux des étudiants internationaux. Avec des frais de scolarité abordables et un excellent niveau de vie, c\'est une destination de choix pour les études supérieures.',
                'universities' => [
                    'University of Toronto - Classée 18ème mondiale (QS 2024)',
                    'University of British Columbia - Classée 34ème mondiale (QS 2024)',
                    'McGill University - Classée 30ème mondiale (QS 2024)',
                    'University of Montreal - Classée 141ème mondiale (QS 2024)',
                    'University of Alberta - Classée 111ème mondiale (QS 2024)'
                ],
                'requirements' => [
                    'Diplôme de fin d\'études secondaires avec une moyenne minimale de 12/20',
                    'Test de langue : IELTS 6.5+ ou TOEFL 90+',
                    'Lettre de motivation détaillée',
                    'Recommandations académiques',
                    'Portfolio (pour les programmes artistiques)',
                    'Entretien (selon le programme)'
                ],
                'costs' => [
                    'tuition' => '1er cycle : 134 411 à 174 938 MAD/an, 2e cycle : 67 205 MAD/trimestre, 3e cycle : 60 750 MAD/trimestre',
                    'living' => 'Coût de la vie mensuel : 9 876 MAD (9 400 MAD +)',
                    'accommodation' => 'Logement étudiant : variable selon le type de logement choisi'
                ],
                'visa' => [
                    'type' => 'Permis d\'études (Study Permit)',
                    'duration' => 'Valide pour la durée des études + 90 jours',
                    'work' => 'Possibilité de travailler 20h/semaine pendant les études',
                    'post_study' => 'Permis de travail post-diplôme (PGWP) jusqu\'à 3 ans',
                    'requirements' => [
                        'Lettre d\'acceptation d\'un établissement d\'enseignement désigné',
                        'Passeport valide et deux photos de passeport récentes',
                        'Preuve de ressources financières suffisantes pour :',
                        '- Frais de scolarité',
                        '- Frais de subsistance',
                        '- Coûts de transport de retour',
                        'Certificat de police (casier judiciaire)',
                        'Examen médical'
                    ]
                ],
                'general_info' => [
                    'education_system' => 'Le Canada possède un système d\'enseignement de très haute qualité, avec une multitude d\'offres de formation proposées en anglais ou en français. La province francophone de Québec, particulièrement Montréal, est très prisée par les étudiants marocains.',
                    'quality_of_life' => 'Le Québec est reconnu comme une société juste, respectueuse, égalitaire, inclusive et démocratique. Le taux de criminalité est parmi les plus bas en Amérique du Nord.',
                    'job_opportunities' => 'Les diplômés canadiens bénéficient d\'excellentes opportunités d\'emploi, avec la possibilité d\'obtenir un permis de travail post-diplôme pouvant aller jusqu\'à 3 ans.'
                ],
                'admission_process' => [
                    'application_deadlines' => [
                        'Trimestre d\'automne : 1er février',
                        'Trimestre d\'hiver : 1er novembre (1er cycle), 15 septembre (2e et 3e cycles)'
                    ],
                    'required_documents' => [
                        'Baccalauréat',
                        'Une année d\'études universitaires réussie ou une année préparatoire UdeM',
                        'Attestation de langue française',
                        'Lettre de motivation',
                        'Recommandations',
                        'Dossier académique'
                    ],
                    'selection_criteria' => [
                        'Excellence académique',
                        'Niveau de langue (anglais ou français selon l\'université)',
                        'Motivation et projet professionnel',
                        'Expériences pertinentes'
                    ],
                    'language_requirements' => [
                        'Test de langue obligatoire (anglais ou français)',
                        'Niveau requis selon l\'université',
                        'Évaluation au cas par cas pour les universités francophones'
                    ],
                    'programs' => [
                        '1er cycle : Baccalauréat/Bachelor (3-4 ans)',
                        '2e cycle : Maîtrise/Master (1-2 ans)',
                        '3e cycle : Doctorat/Ph.D (3 ans ou plus)',
                        'Études postdoctorales possibles'
                    ],
                    'academic_calendar' => [
                        'Automne : septembre-décembre',
                        'Hiver : janvier-avril'
                    ]
                ],
                'housing' => [
                    'options' => [
                        'Résidences universitaires (priorité aux étudiants de première année)',
                        'Colocations (option la plus populaire)',
                        'Familles d\'accueil (option économique avec repas inclus)',
                        'Appartements étudiants'
                    ],
                    'costs' => [
                        'Résidence universitaire : variable selon le campus',
                        'Colocation : partage des frais',
                        'Famille d\'accueil : inclut les repas',
                        'Appartement : variable selon la localisation'
                    ],
                    'living_expenses' => [
                        'Budget mensuel type : 9 876 MAD',
                        'Frais d\'arrivée et d\'installation : 13 473 MAD',
                        'Dépenses à l\'arrivée : déplacements, logement temporaire, repas, vêtements, articles de maison'
                    ],
                    'tips' => [
                        'Réserver tôt pour les résidences universitaires',
                        'Vérifier les quartiers et la sécurité',
                        'Considérer la proximité avec le campus',
                        'Prévoir les frais de transport',
                        'Évaluer le coût total de la vie'
                    ]
                ],
                'tuition_fees' => [
                    'public' => [
                        '1er cycle : 134 411 à 174 938 MAD/an selon la filière',
                        '2e cycle : 67 205 MAD/trimestre (3 976 MAD pour rédaction)',
                        '3e cycle : 60 750 MAD/trimestre (3 976 MAD pour rédaction)',
                        'Exonération partielle possible pour les étudiants francophones'
                    ]
                ]
            ],
            'france' => [
                'name' => 'France',
                'description' => 'La France est reconnue mondialement pour son excellence académique et sa riche tradition culturelle. Le pays offre un système éducatif de qualité avec des frais de scolarité accessibles et une excellente qualité de vie.',
                'universities' => [
                    'Sorbonne Université - Classée 43ème mondiale (QS 2024)',
                    'École Polytechnique - Classée 38ème mondiale (QS 2024)',
                    'Sciences Po Paris - Classée 3ème en Sciences Politiques',
                    'HEC Paris - Classée 1ère école de commerce en Europe',
                    'École Normale Supérieure - Classée parmi les meilleures écoles'
                ],
                'requirements' => [
                    'Baccalauréat ou équivalent',
                    'Test de langue : DELF B2 ou DALF C1',
                    'Dossier de candidature complet',
                    'Lettre de motivation',
                    'Recommandations',
                    'Entretien (selon l\'établissement)'
                ],
                'costs' => [
                    'tuition' => 'Frais de scolarité : 170 à 380€ par an dans les universités publiques (1 500 à 3 400 Dhs)',
                    'living' => 'Coût de la vie mensuel : 800 à 1 200€ (7 200 à 10 800 Dhs)',
                    'accommodation' => 'Logement étudiant : 400 à 800€ par mois (3 600 à 7 200 Dhs)'
                ],
                'visa' => [
                    'type' => 'Visa Long Séjour Étudiant',
                    'duration' => 'Valide pour la durée des études',
                    'work' => 'Possibilité de travailler 964h/an',
                    'post_study' => 'Possibilité d\'obtenir un APS (Autorisation Provisoire de Séjour)',
                    'requirements' => [
                        'Formulaire de demande de visa rempli',
                        '2 photos d\'identité',
                        'Passeport avec une validité de 6 mois',
                        'Fiche de renseignement d\'étudiant remplie (téléchargeable du site de l\'ambassade)',
                        'Demande d\'attestation OFII',
                        'Attestation de versement de la bourse (si boursier)',
                        'Justificatifs de ressources financières',
                        'Attestation d\'acceptation Campus France',
                        'Attestation d\'inscription ou de pré-inscription dans un établissement scolaire en France',
                        'Le Baccalauréat',
                        'Derniers bulletins scolaires',
                        'Certificat TCF ou DALF',
                        'Justificatifs d\'hébergement'
                    ],
                    'financial_requirements' => [
                        'Virement mensuel permanent d\'un montant minimum de 615 euros',
                        'Blocage de frais obligatoire et irréversible d\'environ 8000 euros pour l\'année d\'étude',
                        'Un ou plusieurs garants financiers salariés avec un salaire correct'
                    ],
                    'academic_requirements' => [
                        'Résultats scolaires',
                        'Appréciations',
                        'Niveau de langue Française',
                        'Entretien Campus France',
                        'Motivation à partir pour étudier'
                    ]
                ],
                'general_info' => [
                    'education_system' => 'Les études supérieures en France sont accessibles à tout étudiant Marocain ayant obtenu son baccalauréat. Le système éducatif français est reconnu pour son excellence et sa diversité, avec des universités publiques et privées offrant des formations de qualité.',
                    'quality_of_life' => 'La France offre une excellente qualité de vie avec un système de santé performant, une riche vie culturelle et un excellent réseau de transport. Le coût de la vie est plus élevé qu\'au Maroc, nécessitant une bonne préparation financière.',
                    'job_opportunities' => 'Les diplômés français bénéficient d\'un bon taux d\'insertion professionnelle, avec la possibilité d\'obtenir un APS après les études. Les opportunités varient selon le domaine d\'études et le niveau de qualification.'
                ],
                'admission_process' => [
                    'application_deadlines' => 'La procédure Campus France débute dès le mois de novembre pour les universités publiques. Pour les écoles privées, vous pouvez postuler jusqu\'à mi-juillet maximum.',
                    'required_documents' => [
                        'Baccalauréat ou équivalent',
                        'Relevés de notes',
                        'Test de langue (TCF, DELF, DALF)',
                        'Lettre de motivation',
                        'Recommandations',
                        'Dossier Campus France',
                        'CV'
                    ],
                    'selection_criteria' => [
                        'Excellence académique (moyenne scolaire adaptée au parcours souhaité)',
                        'Niveau de français (B2 minimum, C1 pour certains masters)',
                        'Motivation et projet professionnel',
                        'Entretien Campus France',
                        'Résultats du test de langue'
                    ],
                    'language_requirements' => [
                        'Niveau B2 minimum requis',
                        'Niveau C1 pour certains masters et études de santé',
                        'Niveau B1 possible pour certains BTS',
                        'Tests acceptés : TCF, DELF, DALF'
                    ],
                    'programs' => [
                        'public' => [
                            'BTS (procédure parcoursup)',
                            'Classes préparatoires (procédure parcoursup)',
                            'DUT (procédure campus France)',
                            'Licences fondamentales et professionnelles (procédure campus France)',
                            'Masters (procédure campus France)',
                            'Doctorats (procédure campus France)'
                        ],
                        'private' => [
                            'Bachelor',
                            'Master',
                            'DBA',
                            'PhD'
                        ]
                    ]
                ],
                'housing' => [
                    'options' => [
                        'Résidences CROUS',
                        'Résidences privées',
                        'Colocations',
                        'Appartements étudiants',
                        'Studios',
                        'Chambres chez l\'habitant'
                ],
                'costs' => [
                        'Résidence CROUS : 200-400€/mois',
                        'Résidence privée : 400-800€/mois',
                        'Colocation : 400-600€/mois',
                        'Appartement : 600-1000€/mois',
                        'Studio : 500-800€/mois',
                        'Chambre chez l\'habitant : 400-700€/mois'
                    ],
                    'living_expenses' => [
                        'Logement : environ 400€/mois (variable selon les villes)',
                        'Courses et nourriture : minimum 250€/mois',
                        'Transports',
                        'Sorties et loisirs',
                        'Autres dépenses'
                    ],
                    'tips' => [
                        'S\'inscrire tôt pour les résidences CROUS',
                        'Vérifier les aides au logement (CAF)',
                        'Considérer la localisation',
                        'Prévoir les frais de transport',
                        'Évaluer le coût total de la vie'
                    ]
                ],
                'tuition_fees' => [
                    'public' => [
                        'Licence, Licence professionnelle, DUT : 2770€',
                        'Master : 3770€',
                        'BTS et Classes préparatoires : exemptés',
                        'Doctorat : exempté'
                    ],
                    'private' => [
                        'En moyenne 8000€ par an',
                        'Varie selon le classement et la renommée de l\'école'
                    ]
                ]
            ],
            'spain' => [
                'name' => 'Espagne',
                'description' => 'L\'Espagne séduit toujours autant d\'étudiants Marocains en quête d\'un cadre de vie idéal et d\'études de qualité. La proximité géographique avec le Maroc, le climat agréable, et le coût de la vie abordable en font une destination privilégiée.',
                'universities' => [
                    'Universidad de Barcelona - Classée 164ème mondiale (QS 2024)',
                    'Universidad Autónoma de Madrid - Classée 199ème mondiale (QS 2024)',
                    'Universidad Complutense de Madrid - Classée 171ème mondiale (QS 2024)',
                    'IE University - Classée parmi les meilleures écoles de commerce',
                    'ESADE Business School - Classée parmi les meilleures écoles de commerce'
                ],
                'requirements' => [
                    'Baccalauréat ou équivalent avec équivalence du diplôme marocain',
                    'Test de langue : DELE B2 ou équivalent',
                    'Examen d\'accès à l\'Université "Selectividad" pour les bacheliers',
                    'Dossier de candidature complet',
                    'Lettre de motivation',
                    'Recommandations',
                    'Entretien (selon l\'établissement)'
                ],
                'costs' => [
                    'tuition' => 'Frais de scolarité : 300 à 1 000€ par an dans les universités publiques, 2 500 à 6 000€ dans les universités privées (2 700 à 54 000 Dhs)',
                    'living' => 'Coût de la vie mensuel : 750€ (6 750 Dhs)',
                    'accommodation' => 'Logement étudiant : 200 à 400€ par mois (1 800 à 3 600 Dhs)'
                ],
                'visa' => [
                    'type' => 'Visa d\'Étudiant',
                    'duration' => 'Valide pour la durée des études',
                    'work' => 'Possibilité de travailler 20h/semaine',
                    'post_study' => 'Possibilité de demander un permis de séjour pour recherche d\'emploi',
                    'requirements' => [
                        '2 formulaires de demande de visa national',
                        '2 photos d\'identité récentes (en couleur, sur fond blanc, format 3×4)',
                        'Passeport valable pour la durée du séjour d\'études',
                        'Photocopie du document d\'identité (CIN) et du livret de famille',
                        'Photocopie du titre ou diplôme donnant accès aux études',
                        'Certificat médical récent (délivré dans les 3 derniers mois)',
                        'Justificatifs de ressources pour les frais de séjour et du retour',
                        'Justificatif d\'hébergement en Espagne avec adresse',
                        'Assurance maladie pour étudiants à l\'étranger',
                        'Lettre d\'admission de l\'établissement d\'enseignement agréé en Espagne'
                    ],
                    'financial_requirements' => [
                        'Compte bloqué de 8000 euros pour l\'année d\'étude (hors frais de scolarité)',
                        'Garant avec revenus satisfaisants'
                    ]
                ],
                'general_info' => [
                    'education_system' => 'L\'Espagne propose trois types d\'universités : publiques, privées et religieuses. L\'État prend en charge une partie des frais de scolarité dans les universités publiques. Les universités espagnoles sont bien classées au niveau mondial et proposent des cours dispensés par un corps professoral qualifié.',
                    'quality_of_life' => 'Le cadre de vie est très agréable avec un climat favorable. Les villes espagnoles proposent de nombreuses activités et sorties, permettant aux étudiants de profiter pleinement de leur expérience. Le coût de la vie est moins élevé que dans la plupart des autres pays européens.',
                    'job_opportunities' => 'Les diplômés espagnols bénéficient de bonnes opportunités d\'emploi, particulièrement dans les secteurs du tourisme, de la technologie et des services. La possibilité d\'obtenir une admission dans des filières difficiles d\'accès (médecine, pharmacie, kinésithérapie) reste accessible en Espagne.'
                ],
                'admission_process' => [
                    'application_deadlines' => 'Il est recommandé de commencer les démarches au mois de janvier précédant la rentrée scolaire',
                    'required_documents' => [
                        'Équivalence du diplôme marocain',
                        'Dossier scolaire avec notes et appréciations',
                        'Test de langue espagnole (DELE B2)',
                        'Résultats du test Selectividad (pour les bacheliers)',
                        'Lettre de motivation',
                        'Recommandations'
                    ],
                    'selection_criteria' => [
                        'Équivalence du diplôme marocain',
                        'Dossier scolaire correct',
                        'Niveau d\'espagnol B2 minimum',
                        'Résultats du test Selectividad'
                    ],
                    'language_requirements' => [
                        'Test DELE (Diplôme d\'espagnol en langue étrangère)',
                        'Niveau B2 minimum requis',
                        'Possibilité de suivre une année de préparation en langue'
                    ],
                    'selectividad' => [
                        'Examen obligatoire pour les bacheliers',
                        'Maximum 4 tentatives',
                        'Composé de deux phases : générale et spécifique',
                        'Possibilité de passer l\'examen au Maroc ou en Espagne'
                    ],
                    'programs' => [
                        'Grado (Licence) : 3 à 4 ans',
                        'Postgrado (Master) : 1 à 2 ans',
                        'Doctorado (Doctorat) : 3 à 4 ans'
                    ]
                ],
                'housing' => [
                    'options' => [
                        'Résidences universitaires',
                        'Colocations',
                        'Appartements étudiants',
                        'Studios',
                        'Chambres chez l\'habitant'
                    ],
                    'costs' => [
                        'Résidence universitaire : 200-400€/mois',
                        'Colocation : 200-400€/mois',
                        'Appartement : 400-700€/mois'
                    ],
                    'living_expenses' => [
                        'Logement : 200-400€/mois',
                        'Sport et activités : 50€/mois',
                        'Assurance : 200€/an',
                        'Nourriture : 50€/semaine',
                        'Divers (loisirs, sorties, shopping) : 50€/semaine'
                    ],
                    'tips' => [
                        'Réserver tôt pour les résidences universitaires',
                        'Vérifier les quartiers et la sécurité',
                        'Considérer la proximité avec le campus',
                        'Prévoir les frais de transport',
                        'Évaluer le coût total de la vie'
                    ]
                ],
                'tuition_fees' => [
                    'public' => [
                        'Frais de scolarité : 300 à 1 000€ par an',
                        'Partiellement pris en charge par l\'État'
                    ],
                    'private' => [
                        'Frais de scolarité : 2 500 à 6 000€ par an',
                        'Aucune prise en charge par l\'État'
                    ]
                ]
            ],
            'belgium' => [
                'name' => 'Belgique',
                'description' => 'La Belgique, au cœur de l\'Europe, propose un enseignement supérieur de qualité avec des frais de scolarité modérés. Le pays est particulièrement reconnu pour ses programmes en ingénierie, commerce et sciences politiques.',
                'universities' => [
                    'KU Leuven - Classée 61ème mondiale (QS 2024)',
                    'Université Libre de Bruxelles - Classée 251ème mondiale (QS 2024)',
                    'Université de Gand - Classée 159ème mondiale (QS 2024)',
                    'Université Catholique de Louvain - Classée 195ème mondiale (QS 2024)',
                    'Vrije Universiteit Brussel - Classée 259ème mondiale (QS 2024)'
                ],
                'requirements' => [
                    'Diplôme de fin d\'études secondaires',
                    'Test de langue : selon la langue d\'enseignement (français/néerlandais/anglais)',
                    'Dossier de candidature',
                    'Lettre de motivation',
                    'Recommandations',
                    'Entretien (selon l\'établissement)'
                ],
                'costs' => [
                    'tuition' => 'Frais de scolarité : 835 à 4 175€ par an (7 500 à 37 500 Dhs)',
                    'living' => 'Coût de la vie mensuel : 800 à 1 200€ (7 200 à 10 800 Dhs)',
                    'accommodation' => 'Logement étudiant : 400 à 700€ par mois (3 600 à 6 300 Dhs)'
                ],
                'visa' => [
                    'type' => 'Visa D pour études',
                    'duration' => 'Valide pour la durée des études',
                    'work' => 'Possibilité de travailler 20h/semaine',
                    'post_study' => 'Possibilité de demander un permis de séjour pour recherche d\'emploi',
                    'requirements' => [
                        'Formulaire de demande de visa rempli',
                        '2 photos d\'identité récentes',
                        'Passeport valide',
                        'Lettre d\'admission de l\'université',
                        'Preuve de ressources financières',
                        'Assurance maladie',
                        'Certificat médical',
                        'Casier judiciaire',
                        'Justificatif d\'hébergement'
                    ]
                ],
                'general_info' => [
                    'education_system' => 'Le système éducatif belge est reconnu pour sa qualité et son innovation. Les universités offrent des programmes en français, néerlandais et anglais.',
                    'quality_of_life' => 'La Belgique offre une excellente qualité de vie avec un système de santé performant, une sécurité sociale développée et une position centrale en Europe.',
                    'job_opportunities' => 'Les diplômés belges bénéficient d\'excellentes opportunités d\'emploi, particulièrement dans les secteurs de l\'ingénierie, du commerce et des institutions européennes.'
                ],
                'admission_process' => [
                    'application_deadlines' => 'Les dates limites varient selon les universités, généralement entre février et avril pour la rentrée de septembre',
                    'required_documents' => [
                        'Diplôme de fin d\'études secondaires',
                        'Relevés de notes',
                        'Test de langue',
                        'Lettre de motivation',
                        'Recommandations',
                        'Dossier d\'équivalence'
                    ],
                    'selection_criteria' => [
                        'Excellence académique',
                        'Niveau de langue',
                        'Motivation et projet professionnel',
                        'Expériences pertinentes'
                    ]
                ],
                'housing' => [
                    'options' => [
                        'Résidences universitaires',
                        'Colocations',
                        'Appartements étudiants',
                        'Kot (logement étudiant belge)'
                    ],
                    'costs' => [
                        'Résidence universitaire : 400-600€/mois',
                        'Kot : 350-500€/mois',
                        'Colocation : 400-600€/mois',
                        'Appartement : 600-900€/mois'
                    ],
                    'tips' => [
                        'Réserver tôt pour les résidences universitaires',
                        'Vérifier les quartiers et la sécurité',
                        'Considérer la proximité avec le campus',
                        'Prévoir les frais de transport'
                    ]
                ]
            ]
        ];

        if (!isset($destinations[$country])) {
            abort(404);
        }

        return view('destination', [
            'title' => 'Étudier en ' . $destinations[$country]['name'],
            'destination' => $destinations[$country]
        ]);
    }
} 