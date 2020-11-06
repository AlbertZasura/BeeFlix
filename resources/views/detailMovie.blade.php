@extends('layout.template')

@section('title', $movies->title)

@section('content')
    <div class="container mt-md-3 p-3 bg-light">
        <div class="row">
            <div class="col-sm">
                <img src="{{ asset($movies->photo) }}" class="card-img-top" alt="...">
            </div>
            <div class="col-sm">
                <h3>{{ $movies->title }}</h3>
                @for ($i = 0; $i < $movies->rating; $i++)
                    <span class="fa fa-star checked"></span>
                @endfor
                <p>{{ $movies->description }}</p>
                <p>kategori : <a href="/movies/category/{{ $genres->name }}">{{ $genres->name }}</a></p>
            </div>
            <div class="col-sm-4">
                <h6 class="mb-md-4">EPISODE</h6>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">episode</th>
                            <th scope="col">judul</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($episodes as $episode)
                            <tr>
                                <td>episode {{ $episode->episode }}</td>
                                <td>: {{ $episode->title }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $episodes->links() }}
            </div>
        </div>
    </div>

@endsection
