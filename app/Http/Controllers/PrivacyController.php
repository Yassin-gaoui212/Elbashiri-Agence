<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function index()
    {
        return view('privacy', [
            'title' => 'Politique de Confidentialité',
            'description' => 'Notre politique de confidentialité et de protection des données'
        ]);
    }
} 