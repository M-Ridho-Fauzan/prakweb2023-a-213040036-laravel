@extends('layouts/main')

@section('container')
    <div class="container mt-5">
        <div class="text-center">
            <img src="img/{{ $foto }}" width="200" alt="{{ $nama }}" class="img-thumbnail">
            <h1>{{ $nama }}</h1>
            <p>{{ $email }}</p>
        </div>
        <hr>
        <h2>Tentang Saya</h2>
        <p>Holla, my names is {{ $nama }},
            i'am is freelancer, My age is 300 year old.</p>
    </div>
@endsection
