<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class NewsController extends Controller
{
    public function index($category)
    {
        $news = $this->getCategory($category);
        $newsList =$this->getNews(null, $news);

        return view('components.news.news', compact('news', 'newsList'));
    }

    public function show(string $category, int $id): View
    {
        $article = $this->getNews($id, $category);

        return view('components.news.article', compact('article'));
    }
    
}

