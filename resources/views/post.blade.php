@extends('layouts/main')

{{-- @dd($posts) --}}

@section('container')
<a class="btn btn-primary btn-sm" href="javascript:window.close();">&laquo; back</a>
    <h1 class="container text-center">{{ $post['title'] }}</h1>
    <br>
    <div class="pb-5 mb-5">
        <article class="mb-5">
            <div class="d-flex flex-column-reverse">
                <h5><sup class="opacity-50">Oleh: </sup>
                    <a href="/authors/{{ $post->author->username }}">
                        {{ $post->author->username }}.
                    </a></h5>
                <h5><sup class="opacity-50">Category: </sup><a href="/categories/{{ $post->category->slug }}">
                        {{ $post->category->name }}.
                    </a></h5>
            </div>

            <br>
            {!! $post->body !!}
            <hr>
        </article>
    </div>
    {{-- <button type="button"></button> --}}
@endsection

{{-- 
Post::create([
    'title' => 'Judul ke Tiga', 
    'category_id' => 3, 
    'slug' => 'judul-ke-tiga', 
    'author' => 'Dadali', 
    'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.', 
    'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
            <p>Tempore quibusdam velit quia ipsa earum nisi odit, eius eveniet 
            cupiditate similique architecto soluta repellendus sapiente minima 
            voluptates, obcaecati nemo molestiae explicabo nulla ab et iusto officiis, 
            sit quod? Ex explicabo nesciunt quod aut laborum, harum non odit accusantium, 
            voluptatem consectetur sint consequuntur unde ipsam inventore commodi itaque 
            architecto! Aspernatur ipsam earum corrupti, iusto veniam nihil temporibus 
            quos voluptates consequatur dolores commodi error quae facilis officia 
            quibusdam, voluptatibus quis.</p>
            <p> Velit nesciunt aspernatur eius cumque. 
            Vitae provident tenetur tempore dolorum at dolores, voluptatum eius error 
            fugiat dignissimos libero, vel quos sunt quas laudantium.</p>']) --}}

{{-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, quisquam ut vel officia, veritatis assumenda iste omnis
aliquam minus autem esse cum ad.</p> 
<p>Eveniet, saepe non, ad illo laboriosam, rem pariatur quibusdam tempora a aliquid eius
quis! Illum, assumenda facere minus maxime unde dolor fugit, eius eaque delectus inventore, beatae eos?</p>
<p> Eum, labore etrepellendus cupiditate officiis quasi optio fuga laudantium perspiciatis ipsam! Recusandae nobis quas nihil, enim
doloribus rem animi corrupti earum ullam, maiores velit quos labore? Ipsa architecto ullam vel, aspernatur recusandae
consequatur necessitatibus iste quam autem suscipit perspiciatis explicabo, voluptatem repellendus, quia obcaecati enim
hic nesciunt doloremque.</p> --}}
