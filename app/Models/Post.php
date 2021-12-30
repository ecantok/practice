<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "First Post",
            "slug" => "first-post",
            "author" => "Penembak Jitu",
            "text" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel dolores, sed nesciunt voluptatem in facilis ullam debitis adipisci modi officiis. Quo quaerat quam consectetur hic inventore consequuntur ducimus suscipit earum."
        ],
        [
            "title" => "Second Post",
            "slug" => "second-post",
            "author" => "Sharp Shooter",
            "text" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi tempora voluptatum culpa doloribus unde, quos natus similique corrupti, repudiandae, cum officiis? Incidunt fugit illum, numquam cupiditate a explicabo ipsam inventore iure ea provident tempore minus unde est possimus sapiente facilis minima praesentium vero! Totam exercitationem illo doloribus iure, facilis, vitae debitis consequatur, quasi illum labore quae minus at quo quia natus expedita! Laborum nostrum voluptas mollitia nulla nisi atque cupiditate dolorem quos odit placeat, blanditiis quo. Rem alias vitae quidem."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        // $selected_post = [];
        // foreach ($posts as $post ) {
        //     if ($post["slug"] === $slug) {
        //         $selected_post = $post;
        //     }
        // }
        
        // return $selected_post;

        return $posts->firstWhere('slug', $slug);

    }
}
