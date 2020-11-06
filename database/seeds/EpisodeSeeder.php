<?php

use Illuminate\Database\Seeder;
use App\Episode;
use App\Movie;
use Faker\Factory as Faker;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        $movies = Movie::get();
        foreach ($movies as $movie) {
            for ($i=0; $i <9 ; $i++) { 
                $episode = new Episode;
                $episode->fill(["title" => $faker->paragraph(1),"episode" => $i+1,"movie_id" => $movie->id]);
                $episode->save();
            }
        }
        
    }
}
