<?php

use Illuminate\Database\Seeder;
use App\Genre;
class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $genreNames = ["Drama","Kids","Tv Show"];
        foreach ($genreNames as $genreName) {
            $genre = new Genre;
            $genre->fill(["name" => $genreName]);
            $genre->save();
        }
        
    }
}
