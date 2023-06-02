<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    public function show(string $name)
    {
        return "Hello, {$name}";
    }
}