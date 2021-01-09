<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');

Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');

Route::get('profile', function(){
    return view('profile');
})->name('profile');