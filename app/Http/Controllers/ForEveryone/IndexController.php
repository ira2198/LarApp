<?php

namespace App\Http\Controllers\ForEveryone;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    public function index()
    {
       
        return view('components.index');
    
    }
}