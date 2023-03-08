<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $news = News::query();

        $news->when($request->search, function ($query, $vl){
            $query->where('title', 'like','%' . $vl . '%');
        });

        $news = $news->get();


        return view('/home', [
            'news' => $news
        ]);

        }
        public  function show(News $news)
        {
            return view('news', [
                'news' => $news
            ]);
        }
}
