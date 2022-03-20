<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    //nanganin blog all
    public function index(){

        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in '. $category->name;
        }
        if(request('user')){
            $user = User::firstWhere('username', request('user'));
            $title = ' by '. $user->name;
        }
        return view('halaman-blog',[
            "title"=>"MFL | Blog" . $title,
            //kirim ke searching controller 
            "blog" => Post::latest()->filter(request(['search', 'category','user']))->paginate(7)->withQueryString()
        ]);
    }

    //nanganin single blog
    public function singlepost(Post $post){
        return view ('halaman-single',[
            "title"=>"Single Post",
            "postingan"=> $post
        ]);
    }

    //nanganin home
    public function home(){
        return view('halaman-home',[
            "title"=>"MFL | Home"
        ]);
    }


    //nanganin about
    public function about(){
        return view('halaman-about', [
            "title"=> "MFL | About",
            "name" => "Reihan Manzis Syahputra",
            "email" => "reihanmanzis@upi.edu",
            "gambar" => "foto.jpg"
        ]);
    }

    //nanganin halaman kategori

    //nanganin halaman semua kategori
    public function categories(){
        return view('categories',[
            'title'=>'MFL | Categories',
            'categories'=> Category::all()
        ]);
    }

    //nanganin halaman postingan user
    
}
