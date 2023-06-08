<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function index()
    {
        return view('components.news.categoyries');
    }
}
