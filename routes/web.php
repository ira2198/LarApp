<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\WelcomeController; 
use App\Http\Controllers\NewsController;


Route::get('/', function () {
 return view('welcome');
}); 
 

Route::get('info', InfoController::class);

Route::get('hello/{name}', [WelcomeController::class, 'show']);

Route::get('news', NewsController::class);