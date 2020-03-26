<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 5; $i++){
            $newuser = new User();
            $newuser->name = $faker->name;
            $newuser->email = $faker->email;
            $newuser->password = $faker->password;


            $newuser->save();
            
        }
    }
}
