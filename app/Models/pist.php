<?php

namespace App\Models;

/* buat terhubung ke database
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
*/
class Pisst
{
    private static $blog_posts = [
        [
            "judul"=> "Ini judul artikel",
            "slug"=>"blog-pertama",
            "author"=> "Reihan Manzis S",
            "isi"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet est commodi expedita. Veniam distinctio impedit possimus aspernatur porro mollitia quas quam quaerat laborum, perspiciatis amet ipsum quibusdam? Quaerat, vero totam!"
        ],
        [
            "judul"=> "Ini judul artikel kedua hehe",
            "slug"=>"blog-kedua",
            "author"=>"Devaranalgoo",
            "isi"=>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam repellat sequi quod esse neque ex tenetur rem! Cumque quasi consequatur, dolorum, possimus voluptates ullam sint pariatur dignissimos ipsum laudantium aliquam molestiae laborum architecto a, rem unde minima perferendis dolore molestias et maxime? Minus eum iste ea explicabo eaque sed quis, sunt sint maxime quos temporibus ipsam nesciunt eos repellendus. Debitis quo sequi laudantium iure sapiente natus facere eveniet asperiores magnam maxime ratione nisi consectetur corrupti, rem nemo dolorum, voluptatum ullam?"
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function single($slug){
        
        $postingan = static::all();
        return $postingan->firstWhere('slug',$slug);
    }
}

