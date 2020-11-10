<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller
{
    public function index($name)
    {
        $genre = Genre::where('name', $name)->first();
        $genres = Genre::all();
        $movie = $genre->movies;
	    return view('categoryMovie',['movies' => $movie,'genre' =>$genre,'genres' =>$genres]);
    }
}
