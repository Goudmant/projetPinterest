<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function index()
    {
        $articles = Article::paginate(9);
        return view('articles', [
            'articles' => $articles
        ]);
    }
}