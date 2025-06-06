<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstagramController extends Controller
{
    public function index()
    {
        // Ici vous pourrez ajouter la logique pour récupérer les posts Instagram
        // Pour l'instant, nous allons utiliser des données statiques
        $posts = [
            [
                'type' => 'image',
                'url' => 'https://example.com/image1.jpg',
                'caption' => 'Description de votre post Instagram',
                'date' => '2024-03-20',
                'likes' => 150,
                'comments' => 25
            ],
            [
                'type' => 'video',
                'url' => 'https://example.com/video1.mp4',
                'caption' => 'Description de votre vidéo Instagram',
                'date' => '2024-03-19',
                'likes' => 200,
                'comments' => 30
            ],
            [
                'type' => 'carousel',
                'urls' => [
                    'https://example.com/image2.jpg',
                    'https://example.com/image3.jpg',
                    'https://example.com/image4.jpg'
                ],
                'caption' => 'Description de votre carrousel Instagram',
                'date' => '2024-03-18',
                'likes' => 180,
                'comments' => 28
            ]
        ];

        return view('instagram.index', compact('posts'));
    }
} 