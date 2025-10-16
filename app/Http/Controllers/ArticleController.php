<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return view('pages.article.index');
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
