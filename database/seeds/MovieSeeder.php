<?php

use Illuminate\Database\Seeder;
use App\Movie;
class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $moviesNames = [
            "Start Up","18 Again","Arthdal Chronicles","Search",
            "No Game No Life","Demon Slayer","Sword Art Online","Your Name",
            "Running Man","Knowing Brother","Master Chef","Hangout with Yoo"
        ];

        $moviePhotos = [
            "img/drama/startup.jpg","img/drama/18_again.jpg","img/drama/arthdal.jpg","img/drama/search.jpg",
            "img/kids/no-game-no-life.jpg","img/kids/Kimetsu_no_Yaiba.jpg","img/kids/Sword-Art-Online-Progressive.jpg","img/kids/YourName.jpg",
            "img/tvshow/running_man.jpg","img/tvshow/KnowingBros.jpg","img/tvshow/masterChef.jpg","img/tvshow/Hangout_with_Yoo.jpg","img/tvshow/infinite_challenge.jpg"
        ];

        $movieDescriptions = [
            "Needing to make $90k to open her own business, Seo Dal-Mi drops out of a university and takes up part-time work. She dreams of becoming someone like Steve Jobs. Nam Do-San is the founder of Samsan Tech. He is excellent with mathematics. He started Samsan Tech two years ago, but the company is not doing well. Somehow, Nam Do-San becomes Seo Dal-Mi’s first love. They cheer each others start and growth.",
            "Jung Da-Jung (Kim Ha-Neul) is married to 37-year-old Hong Dae-Young (Yoon Sang-Hyun). They have have 18-year-old son and daughter. Jung Da-Jung works hard as a rookie announcer and she has a warm heart. She becomes completely fed up with her husband and is unable to deal with him anymore.",
            "The drama revolves around the power struggles, love and growth within four characters in the ancient city of Asdal, the capital of Gojoseon. Eun Sum (Song Joong Ki), was born with the destiny of bringing destruction to Aseudal.",
            "It tells the desperate fight of military members against a creature at the front-line of the DMZ and their comradeship while fighting and escaping the DMZ.",
            "No Game No Life is a surreal comedy that follows Sora and Shiro, shut-in NEET siblings and the online gamer duo behind the legendary username \"Blank.\" They view the real world as just another lousy game; however, a strange e-mail challenging them to a chess match changes everything—the brother and sister are plunged into an otherworldly realm where they meet Tet, the God of Games.",
            "Ever since the death of his father, the burden of supporting the family has fallen upon Tanjirou Kamado's shoulders. Though living impoverished on a remote mountain, the Kamado family are able to enjoy a relatively peaceful and happy life. One day, Tanjirou decides to go down to the local village to make a little money selling charcoal. On his way back, night falls, forcing Tanjirou to take shelter in the house of a strange man, who warns him of the existence of flesh-eating demons that lurk in the woods at night.",
            "In the year 2022, virtual reality has progressed by leaps and bounds, and a massive online role-playing game called Sword Art Online (SAO) is launched. With the aid of \"NerveGear\" technology, players can control their avatars within the game using nothing but their own thoughts. Kazuto Kirigaya, nicknamed \"Kirito,\" is among the lucky few enthusiasts who get their hands on the first shipment of the game. He logs in to find himself, with ten-thousand others, in the scenic and elaborate world of Aincrad, one full of fantastic medieval weapons and gruesome monsters. However, in a cruel turn of events, the players soon realize they cannot log out; the game's creator has trapped them in his new world until they complete all one hundred levels of the game.",
            "Mitsuha Miyamizu is a high school girl living in the countryside town of Itomori. She yearns for a life in Tokyo as she is sick of living in the countryside. At the same time, Taki Tachibana, a high school student, lives in Tokyo and has a great interest in architecture, aiming to become an urban planner in the near future.",
            "Running Man (Korean: 런닝맨) is a South Korean variety show, part of SBS's Good Sunday lineup. This show is classified as a game-variety show, where the cast members and guests complete missions in a landmark to win a race.[1] Running Man first aired on July 11, 2010.",
            "Knowing Brothers (Korean: 아는 형님; RR: Aneun Hyeongnim) is a South Korean variety show, distributed by JTBC every Saturday. This show is classified as a reality television-variety show, where the cast members and guests gather in a classroom environment and discuss personal topics. Knowing Bros first aired on December 5, 2015.",
            "MasterChef Indonesia is a cooking talent search television program adopted from the British show MasterChef which airs on RCTI television station. This event first started on May 1, 2011 and in 2019 it will run for six seasons.",
            "Hangout with Yoo (Bahasa Korea : 놀면 뭐하니? ; Lit. How Do You Play? ) Adalah program reality show Korea Selatan di MBC. Ini ditayangkan di MBC mulai dari 27 Juli 2019 pada hari Sabtu pukul 18:30 ( KST ).",
        ];

        $index=0;
        for ($i=0; $i < 3; $i++) { 
            for ($j=0; $j < 4; $j++) { 
                $movie = new Movie;
                $movie->fill(["genre_id" => $i+1, "title" => $moviesNames[$index], "photo" => $moviePhotos[$index], "description" => $movieDescriptions[$index], "rating" => 5]);
                $movie->save();
                $index=$index+1;
            }
        }
    }
}
