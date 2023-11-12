@extends('layouts/main')

{{-- @dd($posts) --}}

@section('container')
    <h1 class="container text-center">Post Category : {{ $category }}</h1>
    <br>
    <div class="pb-5 mb-5">
        @foreach ($posts as $post)
            <article class="mb-5">
                <h2>
                    <a href="/posts/{{ $post->slug }}" target="_blank" rel="noopener noreferrer" id="link-terbuka">
                        {{ $post->title }}
                    </a>
                </h2>
                <h5><sup>Oleh: </sup>{{ $post->author }}</h5>
                <p>{{ $post->excerpt }}</p>
                {{-- <p>{{ str_limit($post['body'], $limit = 100, $end = '...') }}</p> --}}
                <hr>
            </article>
        @endforeach
    </div>
@endsection
