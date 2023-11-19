<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
            "judul" => "All Posts",
            // "posts" => Post::all()
            "posts" => Post::with(['author', 'category'])->latest()->get() // agar yang terakhir di masukan muncul paling atas
        ]);
    }

    public function show(Post $post){
        return view('post', [
            "judul" => "Single post",
            "post" => $post//Post::find($id)
        ]);
    }
}
