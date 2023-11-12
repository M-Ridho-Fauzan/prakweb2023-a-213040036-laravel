<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|Di sinilah Anda dapat mendaftarkan rute web untuk aplikasi Anda.Ini
|rute dimuat oleh ruteServiceProvider dan semuanya akan
|Ditugaskan ke grup middleware "web".Buat sesuatu yang hebat!
|
| jika ingin membuat rute maka ubah nya di sini
|
*/

Route::get('/', function () {
    return view('home', [
        "judul" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "judul" => "About",
        "nama" => "M.Ridho Fauzan",
        "email" => "ridho.213040036@mail.unpas.ac.id", 
        "foto" => "profile.jpg"
    ]);
});



Route::get('/blog', [PostController::class, 'index']);

// function () {


//     // return view('posts', [
//     //     "judul" => "Blog",
//     //     "posts" => Post::all()
//     // ]);
// });

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// function ($slug) {

//     return view('post', [
//         "judul" => "Single post",
//         "post" => Post::find($slug)
//     ]);
// });

Route::get('/categories', function(){
    return view('categories', [
        'judul' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'judul' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});
