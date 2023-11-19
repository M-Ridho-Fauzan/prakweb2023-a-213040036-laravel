@extends('layouts/main')

{{-- @dd($posts) --}}

@section('container')
    <h1 class="container text-center">{{ $judul }}</h1>
    <br>
    <div class="pb-5 mb-5">
        @foreach ($posts as $post)
            <article class="mb-5">
                <h2>
                    <a href="/posts/{{ $post->slug }}" target="_blank" rel="noopener noreferrer" id="link-terbuka">
                        {{ $post->title }}
                    </a>
                </h2>
                <p><sup>Oleh: </sup>
                    <a href="/authors/{{ $post->author->username }}">
                        {{ $post->author->name }}
                    </a>
                    <b> | </b>
                    <sup>Category: </sup>
                    <a href="/categories/{{ $post->category->slug }}">
                        {{ $post->category->name }}.
                    </a>
                </p>
                <p>{{ $post->excerpt }}</p>
                <p><a href="/posts/{{ $post->slug }}" class="btn btn-primary btn-sm" target="_blank"
                        rel="noopener noreferrer" id="link-terbuka">Read More...</a></p>
                {{-- <p>{{ str_limit($post['body'], $limit = 100, $end = '...') }}</p> --}}
                <hr class="mb-5">
            </article>
        @endforeach
    </div>
@endsection
