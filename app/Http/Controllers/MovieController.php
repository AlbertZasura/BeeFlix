<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;
use App\Episode;
class MovieController extends Controller
{
    public function index()
    {
        $movie = Movie::get();
        $genre = Genre::get();
	    return view('home',['movies' => $movie,'genres' =>$genre]);
    }

    public function movieDetail($id){
        $movie = Movie::find($id);
        $genre = Genre::find($movie->genre_id);
        $episode = Episode::where('movie_id', $id)->paginate(3);
        return view('detailMovie',['movies' => $movie,'genres' =>$genre, 'episodes'=> $episode]);
    }
}
