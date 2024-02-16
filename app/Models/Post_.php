<?php

// namespace App\Models;

class Post 
{
    private static $blog_post = [
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

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all(); 
        // $post = [];
        // foreach($posts as $p){
        // if($p["slug"] === $slug){
        //     $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
