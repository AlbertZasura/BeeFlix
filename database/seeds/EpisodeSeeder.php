<?php

use Illuminate\Database\Seeder;
use App\Episode;
use App\Movie;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $episodeTitle = [
            "The World of Swords",
            "Beater",
            "The Red-Nosed Reindeer",
            "The Black Swordsman",
            "Murder in the Safe Zone",
            "Illusionary Avenger",
            "The Temperature of the Heart",
            "The Sword Dance of Black and White",
            "The Blue-Eyed Demon"
        ];


        $movies = Movie::get();

        foreach ($movies as $movie) {
            for ($i=0; $i <9 ; $i++) { 
                $episode = new Episode;
                $episode->fill(["title" => $episodeTitle[$i],"episode" => $i+1,"movie_id" => $movie->id]);
                $episode->save();
            }
        }
        
    }
}
