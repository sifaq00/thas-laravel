<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    public function index()
    {
        $search = request('search');
        $categoryId = request('category');

        $query = Article::query();


        if ($search) {
            $articles = Article::where('title', 'like', '%' . $search . '%')
                                ->orWhere('content', 'like', '%' . $search . '%')
                                ->orWhereHas('category', function($query) use ($search) {
                                    $query->where('name', 'like', '%' . $search . '%');
                                })
                                ->latest()
                                ->paginate(12);
        }
        $selectedCategory = null;
        if ($categoryId) {
            $query->where('category_id', $categoryId);
            $selectedCategory = Category::find($categoryId);
        }
        else {
            $articles = Article::latest()->paginate(12);
        }
        $articles = $query->latest()->paginate(12);

        $recentArticles = Article::latest()->take(5)->get();
        $categories = Category::all();

        return view('articles.index', compact('articles', 'recentArticles', 'categories', 'selectedCategory'));
    }

    public function show($id)
    {
        $categoryId = request('category');
        $query = Article::query();
        $selectedCategory = null;
        if ($categoryId) {
            $query->where('category_id', $categoryId);
            $selectedCategory = Category::find($categoryId);
        }
        $article = Article::findOrFail($id);
        $recentArticles = Article::latest()->take(5)->get();
        $categories = Category::all();
        return view('articles.show', compact('article', 'recentArticles', 'categories', 'selectedCategory'));
    }

}
