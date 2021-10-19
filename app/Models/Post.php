<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis aliquid consectetur temporibus. Facilis similique ut nostrum quod rerum. Exercitationem officia saepe labore omnis ut eligendi aspernatur dignissimos ipsum blanditiis enim."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy Ferdiansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam temporibus, nesciunt perferendis quidem accusamus dicta dolores voluptas distinctio dignissimos suscipit! Inventore explicabo modi quidem maiores hic voluptatem accusamus, debitis porro quaerat temporibus veniam suscipit blanditiis corporis alias minus amet sapiente assumenda similique voluptatum, odio numquam perspiciatis? Voluptate in nam reprehenderit. Minus, vitae, enim dignissimos soluta cumque esse suscipit labore, iste ut ab animi quo? Debitis maiores tenetur deserunt aliquam alias magnam expedita aut laudantium vel repellendus? Autem provident qui laborum repellendus a, ducimus cumque nisi totam quae, corrupti quod? Vel repudiandae ratione laudantium reprehenderit ab aut assumenda non hic molestiae."
        ]
    ];
    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
