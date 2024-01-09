<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Cultural;
use Illuminate\Http\Request;

class CulturalController extends Controller
{
    public function dropdown()
    {
        $culturals = Cultural::all();
        return view('culturals.dropdown', compact('culturals'));
    }
}