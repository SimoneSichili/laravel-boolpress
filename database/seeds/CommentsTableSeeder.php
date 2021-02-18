<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Comment;
use Faker\Generator as Faker;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $posts = Post::all();

        foreach ($posts as $post) {

            for ($i=0; $i < 3; $i++) { 
                //creare
                $newComment = new Comment();
                //valorizzare
                $currentDate = $faker->dateTime();
                $newComment->post_id = $post->id;
                $newComment->author = $faker->userName;
                $newComment->text = $faker->text(200);
                $newComment->created_at = $currentDate;
                $newComment->updated_at = $currentDate;

                //salvare
                $newComment->save();
            }

        }

    }
}
