<?php

use Illuminate\Database\Seeder;
use App\Tag;
use Illuminate\Support\Str;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'HTML',
            'CSS',
            'JavaScript',
            'PHP',
            'Laravel'
        ];

        foreach ($tags as $tag) {
            // creazione
            $newTag = new Tag();
            
            //valorizzazione
            $newTag->name = $tag;
            $newTag->slug = Str::slug($tag);
            
            //salvataggio
            $newTag->save();
        }
    }
}
