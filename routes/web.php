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
    return view('home', [
        "title" => "Home"

    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muhammad fauzan kamal",
        "email" => "fauzankamall17@gmail.com",
        "image" => "foto.jpeg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
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
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
