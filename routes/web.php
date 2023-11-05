<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


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



Route::get('/blog', function () {


    return view('posts', [
        "judul" => "Blog",
        "posts" => Post::all()
    ]);
});

Route::get('posts/{slug}', function ($slug) {

    return view('post', [
        "judul" => "Single post",
        "post" => Post::find($slug)
    ]);
});
