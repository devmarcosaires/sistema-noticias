<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news()
    {
        $news = News::all(); // ou qualquer outra maneira de buscar os dados de notícias
        return view('admin.mynews', compact('news'));
    }
    public function create_news()
    {
        return view('admin.news_create');
    }

}
