@extends('layouts/main')

{{-- @dd($posts) --}}

@section('container')
    <h1 class="container text-center">{{ $post['title'] }}</h1>
    <br>
    <div class="pb-5 mb-5">
        <article class="mb-5">
            <h5><sup class="opacity-50">By: </sup>{{ $post['author'] }}</h5>
            <br>
            <p>{{ $post['body'] }}</p>
            <hr>
        </article>
    </div>
    <a class="btn btn-primary btn-sm" href="javascript:window.close();">&laquo; back</a>
    {{-- <button type="button"></button> --}}
@endsection
