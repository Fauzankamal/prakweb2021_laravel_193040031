<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Fauzan Kamal',
            'username' => 'fauzankamal',
            'email' => 'fauzan@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Kamal',
        //     'email' => 'Kamal@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);



        User::factory(3)->create();
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);


        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugaobcaecatiincidunt sapiente odit perspiciatis ea ut quod nostrum providentfacilis magnam excepturi amet, iusto repellat quidem quae asperiores dolor!Fuganumquam, corporis delectus hic et inventore id mollitia.</p><p>Culpa dolore hic corrupti a, optio cumque non quam pariatur odit? Ea placeatdeleniti nulla dolor, nam magnam quam consequatur dolores maioresporrofacilis dicta perferendis doloremque odio reprehenderit quasi nihil,sedsequi omnis aut, itaque quibusdam laboriosam iste. Nisi,dolorerecusandae!Amet excepturi perferendis sed, debitis impedit nostrumcommodi ipsamarchitecto eligendi id placeat deserunt alias at laborum, fugitexpedita, abea quae reiciendis. Iusto laboriosam fugit consequatur. Inciduntest dolorequas, doloribus eligendi ipsam non odio saepe quae iure ut.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugaobcaecatiincidunt sapiente odit perspiciatis ea ut quod nostrum providentfacilis magnam excepturi amet, iusto repellat quidem quae asperiores dolor!Fuganumquam, corporis delectus hic et inventore id mollitia.</p><p>Culpa dolore hic corrupti a, optio cumque non quam pariatur odit? Ea placeatdeleniti nulla dolor, nam magnam quam consequatur dolores maioresporrofacilis dicta perferendis doloremque odio reprehenderit quasi nihil,sedsequi omnis aut, itaque quibusdam laboriosam iste. Nisi,dolorerecusandae!Amet excepturi perferendis sed, debitis impedit nostrumcommodi ipsamarchitecto eligendi id placeat deserunt alias at laborum, fugitexpedita, abea quae reiciendis. Iusto laboriosam fugit consequatur. Inciduntest dolorequas, doloribus eligendi ipsam non odio saepe quae iure ut.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugaobcaecatiincidunt sapiente odit perspiciatis ea ut quod nostrum providentfacilis magnam excepturi amet, iusto repellat quidem quae asperiores dolor!Fuganumquam, corporis delectus hic et inventore id mollitia.</p><p>Culpa dolore hic corrupti a, optio cumque non quam pariatur odit? Ea placeatdeleniti nulla dolor, nam magnam quam consequatur dolores maioresporrofacilis dicta perferendis doloremque odio reprehenderit quasi nihil,sedsequi omnis aut, itaque quibusdam laboriosam iste. Nisi,dolorerecusandae!Amet excepturi perferendis sed, debitis impedit nostrumcommodi ipsamarchitecto eligendi id placeat deserunt alias at laborum, fugitexpedita, abea quae reiciendis. Iusto laboriosam fugit consequatur. Inciduntest dolorequas, doloribus eligendi ipsam non odio saepe quae iure ut.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugaobcaecatiincidunt sapiente odit perspiciatis ea ut quod nostrum providentfacilis magnam excepturi amet, iusto repellat quidem quae asperiores dolor!Fuganumquam, corporis delectus hic et inventore id mollitia.</p><p>Culpa dolore hic corrupti a, optio cumque non quam pariatur odit? Ea placeatdeleniti nulla dolor, nam magnam quam consequatur dolores maioresporrofacilis dicta perferendis doloremque odio reprehenderit quasi nihil,sedsequi omnis aut, itaque quibusdam laboriosam iste. Nisi,dolorerecusandae!Amet excepturi perferendis sed, debitis impedit nostrumcommodi ipsamarchitecto eligendi id placeat deserunt alias at laborum, fugitexpedita, abea quae reiciendis. Iusto laboriosam fugit consequatur. Inciduntest dolorequas, doloribus eligendi ipsam non odio saepe quae iure ut.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
