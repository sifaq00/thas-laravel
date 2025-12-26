<?php

namespace App\Http\Controllers;

use App\Models\Article;

class LandingPageController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->take(3)->get();
        return view('landing.index', compact('articles'));
    }
}
