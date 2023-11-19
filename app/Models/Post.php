<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'author', 'excerpt', 'body']; // ini adalah yang boleh di isi oleh user

    protected $guarded = ['id'];// ini adalah yang tidak boleh di isi oleh user


    /* 
     *Logic tentang  satu postingan punya satu category
    */
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
