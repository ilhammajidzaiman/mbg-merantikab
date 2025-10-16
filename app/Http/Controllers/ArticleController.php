<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $data['article'] = Article::withOnly(['tags', 'category'])
            ->latest()
            ->take(9)
            ->get();
        return view('pages.article.index', $data);
    }

    public function show(string $id)
    {
        $data['record'] = Article::active()
            ->withOnly(['tags', 'category'])
            ->where('slug', $id)
            ->first();
        return view('pages.article.show', $data);
    }
}
