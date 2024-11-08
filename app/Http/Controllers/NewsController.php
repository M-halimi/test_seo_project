<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
//        $news = News::all();
//        dd($news);
        $news = News::latest()->paginate(10);
        return view('news.index', compact('news'));
    }

    public function show(News $news)
    {
//        $seo = $news->seo;

        return view('news.show', compact('news'));  // Pass the news item to the view
    }



}
