<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\InfoPost;
use Faker\Generator as Faker;

class InfoPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        // prendi tutti i post
        $posts = Post::all();

        foreach ($posts as $post) {
            // crea istanza
            $newInfoPost = new InfoPost();
            //valorizza 
            $newInfoPost->post_id = $post->id;
            $newInfoPost->post_status = $faker->randomElement(['public', 'private','draft']);
            $newInfoPost->comment_status = $faker->randomElement(['open', 'close','private']);
            //salva
            $newInfoPost->save();
        }
    }
}
