<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = [
            [
                'question' => 'Quels sont les services proposés par Elbashiri Agency ?',
                'answer' => 'Nous proposons une gamme complète de services incluant le coaching et l\'orientation scolaire, l\'assistance aux demandes d\'admission, l\'obtention de visas et permis d\'études, la recherche de logement, et la traduction de diplômes.'
            ],
            [
                'question' => 'Combien coûte l\'accompagnement pour étudier à l\'étranger ?',
                'answer' => 'Les coûts varient en fonction du service choisi et de la destination. Nous proposons des forfaits adaptés à chaque situation. Contactez-nous pour un devis personnalisé.'
            ],
            [
                'question' => 'Quelles sont les destinations proposées ?',
                'answer' => 'Nous proposons des destinations dans plusieurs pays dont le Canada, la France, le Royaume-Uni, les États-Unis, l\'Espagne, et la Belgique.'
            ],
            [
                'question' => 'Quel est le délai pour obtenir une admission ?',
                'answer' => 'Le délai varie selon la destination et l\'établissement choisi. En général, il faut compter entre 3 et 6 mois pour l\'ensemble du processus.'
            ],
            [
                'question' => 'Avez-vous des bureaux dans plusieurs villes ?',
                'answer' => 'Oui, nous sommes présents dans plusieurs villes pour vous accompagner au mieux dans votre projet.'
            ]
        ];

        return view('faq', [
            'title' => 'FAQ',
            'description' => 'Questions fréquemment posées sur nos services',
            'faqs' => $faqs
        ]);
    }
} 