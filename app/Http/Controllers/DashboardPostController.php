<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Posts = Post::where('user_id',auth()->user()->id)->get();
        return view('dashboard.post.index',[
            'title' => 'MFL | My Post',
            'posts' => $Posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.post.create',[
            'title'=>'MFL | Create Post',
            'categories'=> Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validasi = $request->validate([
            'category_id' => 'required',
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'image' => 'image|file|max:2024',
            'body' => 'required'
        ]);

        // upload image
        if($request->file('image')){
            $validasi['image'] = $request->file('image')->store('post-images');
        }

        $validasi['user_id'] = auth()->user()->id;
        $validasi['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::create($validasi);
        return redirect ('/dashboard/mypost')->with('success','Post Has Been Added :)'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $mypost)
    {
        //
        return view('dashboard.post.show',[
            'post' => $mypost,
            'title' => 'MFL | My Post'
        ]);
        
        // agar supaya user lain gabisa edit punya kita
        if($mypost->author->id !== auth()->user()->id) {
            abort(403);
       }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $mypost)
    {
        //
        return view('dashboard.post.edit',[
            'title'=>'MFL | Edit Post',
            'post' => $mypost,
            'categories'=> Category::all()
        ]);

        // agar supaya user lain gabisa lihat punya kita
        if($mypost->author->id !== auth()->user()->id) {
            abort(403);
       }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $mypost)
    {
        //// request itu data baru, mypost itu yang lama
        $validasi = $request->validate([
            'category_id' => 'required',
            'title' => 'required|max:255',
            'slug' => "required|unique:posts,slug,$mypost->id",
            'image' => 'image|file|max:2024',
            'body' => 'required'
        ]);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validasi['image'] = $request->file('image')->store('post-images');
        }
        $validasi['user_id'] = auth()->user()->id;
        $validasi['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::where('id',$mypost->id)->update($validasi);
        return redirect ('/dashboard/mypost')->with('success','Post Has Been Updated :)'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $mypost)
    {
        //
        if($mypost->image){
            Storage::delete($mypost->image);
        }
        Post::destroy($mypost->id);
        return redirect ('/dashboard/mypost')->with('success','Post Has Been Deleted :)');
    }
}
