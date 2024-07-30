<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $titlePage = 'Blog';
    
        return view('page.blog', compact('titlePage'));
    }
}
