<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //  bekas video 9 di ganti di video 10 dengan factory
        // User::create([
        //     'name' => 'Makima',
        //     'email' => 'makima@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Simanjuntak',
        //     'email' => 'simanjuntak@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(5)->create();

        Category::create([
            'name' => 'Programing',
            'slug' => 'programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Ke Satu',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-satu',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
        //             <p>Tempore quibusdam velit quia ipsa earum nisi odit, eius eveniet 
        //             cupiditate similique architecto soluta repellendus sapiente minima 
        //             voluptates, obcaecati nemo molestiae explicabo nulla ab et iusto officiis, 
        //             sit quod? Ex explicabo nesciunt quod aut laborum, harum non odit accusantium, 
        //             voluptatem consectetur sint consequuntur unde ipsam inventore commodi itaque 
        //             architecto! Aspernatur ipsam earum corrupti, iusto veniam nihil temporibus 
        //             quos voluptates consequatur dolores commodi error quae facilis officia 
        //             quibusdam, voluptatibus quis.</p>
        //             <p> Velit nesciunt aspernatur eius cumque. 
        //             Vitae provident tenetur tempore dolorum at dolores, voluptatum eius error 
        //             fugiat dignissimos libero, vel quos sunt quas laudantium.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
        //             <p>Tempore quibusdam velit quia ipsa earum nisi odit, eius eveniet 
        //             cupiditate similique architecto soluta repellendus sapiente minima 
        //             voluptates, obcaecati nemo molestiae explicabo nulla ab et iusto officiis, 
        //             sit quod? Ex explicabo nesciunt quod aut laborum, harum non odit accusantium, 
        //             voluptatem consectetur sint consequuntur unde ipsam inventore commodi itaque 
        //             architecto! Aspernatur ipsam earum corrupti, iusto veniam nihil temporibus 
        //             quos voluptates consequatur dolores commodi error quae facilis officia 
        //             quibusdam, voluptatibus quis.</p>
        //             <p> Velit nesciunt aspernatur eius cumque. 
        //             Vitae provident tenetur tempore dolorum at dolores, voluptatum eius error 
        //             fugiat dignissimos libero, vel quos sunt quas laudantium.</p>
        //             <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, quisquam ut vel officia, veritatis assumenda iste omnis
        //             aliquam minus autem esse cum ad.</p> 
        //             <p>Eveniet, saepe non, ad illo laboriosam, rem pariatur quibusdam tempora a aliquid eius
        //             quis! Illum, assumenda facere minus maxime unde dolor fugit, eius eaque delectus inventore, beatae eos?</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
        //             <p>Tempore quibusdam velit quia ipsa earum nisi odit, eius eveniet 
        //             cupiditate similique architecto soluta repellendus sapiente minima 
        //             voluptates, obcaecati nemo molestiae explicabo nulla ab et iusto officiis, 
        //             sit quod? Ex explicabo nesciunt quod aut laborum, harum non odit accusantium, 
        //             voluptatem consectetur sint consequuntur unde ipsam inventore commodi itaque 
        //             architecto! Aspernatur ipsam earum corrupti, iusto veniam nihil temporibus 
        //             quos voluptates consequatur dolores commodi error quae facilis officia 
        //             quibusdam, voluptatibus quis.</p>
        //             <p> Velit nesciunt aspernatur eius cumque. 
        //             Vitae provident tenetur tempore dolorum at dolores, voluptatum eius error 
        //             fugiat dignissimos libero, vel quos sunt quas laudantium.</p>
        //             <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, quisquam ut vel officia, veritatis assumenda iste omnis
        //             aliquam minus autem esse cum ad.</p> 
        //             <p>Eveniet, saepe non, ad illo laboriosam, rem pariatur quibusdam tempora a aliquid eius
        //             quis! Illum, assumenda facere minus maxime unde dolor fugit, eius eaque delectus inventore, beatae eos?</p>
        //             <p> Eum, labore etrepellendus cupiditate officiis quasi optio fuga laudantium perspiciatis ipsam! Recusandae nobis quas nihil, enim
        //             doloribus rem animi corrupti earum ullam, maiores velit quos labore? Ipsa architecto ullam vel, aspernatur recusandae
        //             consequatur necessitatibus iste quam autem suscipit perspiciatis explicabo, voluptatem repellendus, quia obcaecati enim
        //             hic nesciunt doloremque.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
        //             <p>Tempore quibusdam velit quia ipsa earum nisi odit, eius eveniet 
        //             cupiditate similique architecto soluta repellendus sapiente minima 
        //             voluptates, obcaecati nemo molestiae explicabo nulla ab et iusto officiis, 
        //             sit quod? Ex explicabo nesciunt quod aut laborum, harum non odit accusantium, 
        //             voluptatem consectetur sint consequuntur unde ipsam inventore commodi itaque 
        //             architecto! Aspernatur ipsam earum corrupti, iusto veniam nihil temporibus 
        //             quos voluptates consequatur dolores commodi error quae facilis officia 
        //             quibusdam, voluptatibus quis.</p>'
        // ]);
    }
}
