<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContattiController extends Controller
{
    public function index()
    {
        $titlePage = 'Contatti';
    
        return view('page.contatti', compact('titlePage'));
    }
}
