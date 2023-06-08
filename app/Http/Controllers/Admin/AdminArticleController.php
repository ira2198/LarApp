<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminArticleController extends Controller
{
    public function show()
    {
        return view('components.admin.createArticle');
    }

    public function create()
    {
        return view('components.admin.createArticle');
    }

}
