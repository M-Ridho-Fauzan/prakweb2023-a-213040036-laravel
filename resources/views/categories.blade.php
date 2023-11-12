@extends('layouts/main')

{{-- @dd($posts) --}}

@section('container')
    <h1 class="container text-center">Post Categories</h1>
    <div class="container">
        <br>
        <div class="pb-5 mb-5">
            <div class="row">
                @foreach ($categories as $category)
                    {{-- <ul>
                        <li>
                            <h2>
                                <a href="/categories/{{ $category->slug }}" rel="noopener noreferrer" id="">
                                    {{ $category->name }}
                                </a>
                            </h2>
                        </li>
                    </ul> --}}
                    <div class="col-md-4 mb-4">
                        <a href="/categories/{{ $category->slug }}" rel="noopener noreferrer" id="">
                            <div class="card btn btn-secondary">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        {{ $category->name }}
                                    </h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    {{-- <p>{{ str_limit($post['body'], $limit = 100, $end = '...') }}</p> --}}
                    {{-- <hr> --}}
                @endforeach
            </div>
        </div>
    </div>
@endsection
