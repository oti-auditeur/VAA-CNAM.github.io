<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        // Logique pour traiter le formulaire de contact
        // Vous pouvez accéder aux données du formulaire avec $request->all()

        // Rediriger l'utilisateur après le traitement
        return redirect()->route('contact')->with('success', 'Votre message a été envoyé avec succès!');
    }
}