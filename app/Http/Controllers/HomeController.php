<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Logique pour récupérer les événements depuis la base de données
        //$events = []; // Remplacez ceci par la logique réelle

        return view('welcome');
    }
}
