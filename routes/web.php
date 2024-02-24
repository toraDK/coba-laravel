<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

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

Route::get('/categories',  function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'post' => $category->posts,
        'category' => $category->name
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('posts', [
        'title' => 'User Posts',
        'post' => $author->posts
    ]);
});