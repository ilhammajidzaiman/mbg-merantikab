<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show(string $id)
    {
        // $data['record'] = Article::show()
        //     ->withOnly(['tags', 'category'])
        //     ->where('slug', $id)
        //     ->first();
        // return view('pages.article', $data);

        return view('pages.article');
    }
}
