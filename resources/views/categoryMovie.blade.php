@extends('layout.template')

@section('title',$genres->name)
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
@endsection

@section('content')
    <div class="container mt-md-3 p-3 home">
        <h3 class="mt-3 text-uppercase">{{ $genres->name }}</h3>
        <div class="card-group">
            @foreach ($movies as $movie)
                    <div class="card">
                        <img src="{{ asset($movie->photo) }}" class="card-img-top" alt="...">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center">{{ $movie->title }}</li>
                        </ul>
                        <a href="/movies/{{ $movie->id }}" class="btn btn-dark btn-sm">LIHAT FILM</a>
                    </div>
            @endforeach
        </div>
    </div>
@endsection
