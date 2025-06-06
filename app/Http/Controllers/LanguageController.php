<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switchLang($lang)
    {
        if (in_array($lang, ['en', 'fr'])) {
            session()->put('locale', $lang);
        }
        return redirect()->back();
    }
} 