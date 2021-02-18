<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            // creare un istanza
            $post = new Post();
            // valorizzare
            $post->title = $faker->sentence(12);
            $post->subtitle = $faker->sentence(6);
            $post->text = $faker->text(5000);
            $post->author = $faker->name;
            $post->publication_date = $faker->dateTime();
            //salvare
            $post->save();
        }
    }
        
}
