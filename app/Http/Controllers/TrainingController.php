<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        // Logique pour récupérer les informations sur l'équipe depuis la base de données
        //$teamMembers = []; // Remplacez ceci par la logique réelle

        return view('training');
    }
}
