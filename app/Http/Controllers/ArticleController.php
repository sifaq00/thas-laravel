<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        // 1. Ambil Input dari URL
        $search = $request->input('search');
        $categoryId = $request->input('category');

        // 2. Siapkan Query Builder (Belum dieksekusi)
        $query = Article::query();

        // 3. Tambahkan Filter SEARCH (Jika ada input)
        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%')
                  ->orWhere('content', 'like', '%' . $search . '%')
                  ->orWhereHas('category', function($subQ) use ($search) {
                      $subQ->where('name', 'like', '%' . $search . '%');
                  });
            });
        }

        // 4. Tambahkan Filter KATEGORI (Jika ada input)
        $selectedCategory = null;
        if ($categoryId) {
            $query->where('category_id', $categoryId);
            $selectedCategory = Category::find($categoryId);
        }

        // 5. EKSEKUSI QUERY (Ambil Data)
        // Kita gunakan 'latest()' untuk urutan terbaru
        // Kita gunakan 'paginate(12)' untuk membagi halaman
        $articles = $query->latest()->paginate(12);

        // 6. PENTING: Tambahkan query string ke pagination link
        // Ini pengganti withQueryString() agar search tidak hilang saat pindah halaman
        $articles->appends($request->query());

        // 7. Data Tambahan untuk Sidebar
        $recentArticles = Article::latest()->take(5)->get();
        $categories = Category::all();

        return view('articles.index', compact(
            'articles',
            'recentArticles',
            'categories',
            'selectedCategory'
        ));
    }

    public function show($id)
    {
        // Ambil detail artikel
        $article = Article::findOrFail($id);

        // Sidebar: Ambil 5 artikel terbaru KECUALI yang sedang dibuka
        $recentArticles = Article::latest()->where('id', '!=', $id)->take(5)->get();
        $categories = Category::all();

        // Di halaman detail, biasanya selectedCategory dikosongkan atau diambil dari artikel
        $selectedCategory = null;

        return view('articles.show', compact(
            'article',
            'recentArticles',
            'categories',
            'selectedCategory'
        ));
    }
}
