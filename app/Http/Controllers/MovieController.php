<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;
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
        $genre = $movie->genre;
        $episode = $movie->episodes()->paginate(3);
        return view('detailMovie',['movies' => $movie,'genres' =>$genre, 'episodes'=> $episode]);
    }
}
