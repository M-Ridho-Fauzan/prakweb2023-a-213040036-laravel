<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post
{
    // Var $blog_post ini hanya sementara sampai DB di buat
    private static $blog_posts = [
        [
            "title" => "Tulisan ke satu",
            "slug" => "Tulisan-ke-satu",
            "author" => "Ridho fauzan",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos veniam necessitatibus sapiente quidem rerum iste ducimus
            voluptates libero voluptatibus eveniet, ullam nobis sunt impedit, ut, neque non vero inventore. Quo placeat veniam animi
            dignissimos hic consequuntur illum provident odio! Maxime dolores voluptas incidunt blanditiis quisquam officia aperiam
            est minima voluptatum."
        ], 
        [
            "title" => "Tulisan ke dua",
            "slug" => "Tulisan-ke-dua",
            "author" => "Alphine Tsaurus",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis doloremque incidunt vero quam natus eveniet quod
            mollitia, placeat accusamus, rem aut minus error ipsam dolores enim nesciunt laudantium blanditiis sequi minima eos
            nulla veniam voluptatem iste! Sunt qui, illum est molestias nihil repudiandae ducimus iste nulla dolore a, possimus,
            natus cumque eligendi! Sapiente libero quae facilis fugit natus eaque veritatis sunt tenetur excepturi laboriosam in,
            doloremque molestiae repudiandae quaerat perspiciatis iusto minus, placeat unde voluptas odio. Expedita doloremque
            repudiandae laudantium, laboriosam minima inventore dolores dolorem explicabo laborum quis perferendis alias mollitia
            illum sint dicta commodi veniam aperiam soluta exercitationem. Maiores?"
        ]
    ];
    // akhir $blog_post

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();    
        // $post = [];
        // foreach($posts as $p){
        //     if($p['slug'] === $slug){
        //         $post = $p;
        //     }
        // }
        // maksud kode ini adalah, ambil dulu semua nya dengan $posts, 
        // lalu di looping satu2
        
        // return di bawah ini menggantikan foreach di atas
        return $posts->firstWhere('slug', $slug);
        // return ini maksud nya adalah ambil satu data yang pertama di temukan, yang dimana 'slug' nya
        // itu sama dengan (,) $slug
    }
}
