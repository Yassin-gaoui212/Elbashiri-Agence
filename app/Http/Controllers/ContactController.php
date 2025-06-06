<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Exception;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact', [
            'title' => 'Contact',
            'description' => 'Contactez-nous pour plus d\'informations sur nos services'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string'
        ]);

        try {
            $mailData = [
                'name' => (string) $validated['name'],
                'email' => (string) $validated['email'],
                'phone' => (string) $validated['phone'],
                'message' => (string) $validated['message']
            ];

            Mail::to('yassingaoui19@gmail.com')->send(new ContactFormMail($mailData));
            return redirect()->route('contact')->with('success', 'Votre message a été envoyé avec succès. Nous vous contacterons bientôt.');
        } catch (Exception $e) {
            \Log::error('Email sending failed: ' . $e->getMessage());
            return redirect()->route('contact')->with('error', 'Erreur: ' . $e->getMessage());
        }
    }
} 