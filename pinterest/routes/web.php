<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[MainController::class, 'index'])->name('home');

// Route::get('/articles', [ MainController::class, 'index'])->name('articles');

Route::get('/articles/{slug}', [ MainController::class, 'show'])->name('article');
Route::get('/profil', [ ArticleController::class, 'index'])->middleware('user')->name('profil');

Auth::routes();