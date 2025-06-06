<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            'title' => 'À Propos',
            'description' => 'Découvrez qui nous sommes et notre mission pour vous accompagner dans votre projet d\'études à l\'étranger.'
        ]);
    }
} 