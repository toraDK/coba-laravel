<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "Tora Digda Kristiawan",
        "email" => "toradigda@gmail.com",
        "image" => "test.jpg"
    ]);
});



Route::get('/blog', [PostController::class, 'index']);

//halaman singel post
Route::get('post/{post:slug}', [PostController::class, 'show']);