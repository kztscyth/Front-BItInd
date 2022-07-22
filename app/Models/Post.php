<?php

namespace App\Models;

class Post
{
    private static $examples_posts = [
        [
            "title" => "Judul Example Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Risco Ramadhan",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus recusandae, quos dolorem fuga facere excepturi
            consectetur unde et iusto consequuntur nesciunt ipsa. Tempore fugiat similique temporibus mollitia. Esse, accusantium
            dolore."
        ],
        [
            "title" => "Judul Example Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ikhsan Nur",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus recusandae, quos dolorem fuga facere excepturi
            consectetur unde et iusto consequuntur nesciunt ipsa. Tempore fugiat similique temporibus mollitia. Esse, accusantium
            dolore."
        ],
        [
            "title" => "Judul Example Ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Falah",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus recusandae, quos dolorem fuga facere excepturi
            consectetur unde et iusto consequuntur nesciunt ipsa. Tempore fugiat similique temporibus mollitia. Esse, accusantium
            dolore."
        ]
    ];

    public static function all()
    {
        return collect(self::$examples_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
