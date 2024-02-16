<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/blog', function () {

    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Tora Digda K",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio temporibus quam totam. Explicabo, numquam quod nam est omnis dolor, laborum velit cupiditate impedit suscipit quisquam quas pariatur beatae eos maxime."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Tora Digda K",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio temporibus quam totam. Explicabo, numquam quod nam est omnis dolor, laborum velit cupiditate impedit suscipit quisquam quas pariatur beatae eos maxime."
        ]
    ];

    return view('posts', [
        "title" => "blog",
        "post" => $blog_post
    ]);
});

//halaman singel post
Route::get('post/{slug}', function ($slug) {

    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Tora Digda K",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio temporibus quam totam. Explicabo, numquam quod nam est omnis dolor, laborum velit cupiditate impedit suscipit quisquam quas pariatur beatae eos maxime."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Tora Digda K",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio temporibus quam totam. Explicabo, numquam quod nam est omnis dolor, laborum velit cupiditate impedit suscipit quisquam quas pariatur beatae eos maxime."
        ]
    ];

    foreach($blog_post as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});