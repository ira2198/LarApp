<?php

use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\ForEveryone\AuthorizationController;
use App\Http\Controllers\ForEveryone\IndexController;
use App\Http\Controllers\News\ArticleController;
use App\Http\Controllers\News\NewsCategoryController;
use App\Http\Controllers\News\NewsController;
use Illuminate\Support\Facades\Route;

 

// For everyone

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('auth', [AuthorizationController::class, 'index'])->name('authorization');

// News 
Route::get('categories', [NewsCategoryController::class, 'index'])->name('categories');
Route::get('news/{category}', [NewsController::class, 'index'])->name('news.category')
->where('category', '[1-5]+');
Route::get('article/{category?}/{id?}', [NewsController::class, 'show'])->name('article');

//  Admin 

Route::group(['prefix' => 'admin', 'as' => 'admin.'], static function(){
    Route::get('article/create', [AdminArticleController::class, 'create'])->name('article.create');

});