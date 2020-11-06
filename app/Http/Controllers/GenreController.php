<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;

class GenreController extends Controller
{
    public function index($name)
    {
        $genre = Genre::where('name', $name)->first();
        $movie = Movie::where('genre_id', $genre->id)->get();
	    return view('categoryMovie',['movies' => $movie,'genres' =>$genre]);
    }
}
