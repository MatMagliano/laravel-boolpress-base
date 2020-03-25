<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++){
            $newpost = new Post();
            $newpost->title = $faker->word;
            $newpost->subtitle = $faker->word;
            $newpost->description = $faker->word;
            $newpost->author = $faker->name;
            $newpost->date = $faker->date($format = 'Y-m-d', $max = 'now');
            $newpost->save();
            
        }
    }
}
