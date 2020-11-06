@extends('layout.template')

@section('title', 'Home')
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
@endsection

@section('content')
    <div class="container mt-md-3 p-3 home">
        @foreach ($genres as $genre)
            <h3 class="mt-3 text-uppercase">{{ $genre->name }}</h3>
            <div class="card-group">
                @foreach ($movies as $movie)
                    @if ($movie->genre_id == $genre->id)
                        <div class="card">
                            <img src="{{ $movie->photo }}" class="card-img-top" alt="...">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-center">{{ $movie->title }}</li>
                            </ul>
                            <a href="/movies/{{$movie->id}}" class="btn btn-dark btn-sm">LIHAT FILM</a>
                        </div>
                    @endif
                @endforeach
            </div>
        @endforeach

    </div>
@endsection
