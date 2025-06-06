<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = [
            [
                'title' => 'Coaching & Orientation Scolaire',
                'description' => 'Identifiez vos talents et choisissez votre parcours académique idéal grâce à nos conseils personnalisés.',
                'icon' => 'academic-cap'
            ],
            [
                'title' => 'Demande d\'admission',
                'description' => 'Nous vous accompagnons dans toutes les démarches d\'inscription aux établissements étrangers.',
                'icon' => 'document-text'
            ],
            [
                'title' => 'Visa et Permis d\'études',
                'description' => 'Assistance complète pour l\'obtention de votre visa étudiant et permis d\'études.',
                'icon' => 'passport'
            ],
            [
                'title' => 'Recherche de logement',
                'description' => 'Nous vous aidons à trouver le logement idéal dans votre ville d\'études.',
                'icon' => 'home'
            ],
            [
                'title' => 'Traduction de diplômes',
                'description' => 'Service de traduction certifiée de vos documents académiques.',
                'icon' => 'translate'
            ]
        ];

        return view('services', [
            'title' => 'Nos Services',
            'description' => 'Découvrez notre gamme complète de services pour vous accompagner dans votre projet d\'études à l\'étranger',
            'services' => $services
        ]);
    }
} 