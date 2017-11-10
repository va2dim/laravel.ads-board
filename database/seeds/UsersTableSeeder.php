<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        static $password;

        foreach(range(1, 15) as $index) {
            DB::table('users')->insert([
              'name' => $faker->name,
              'password' => $password ?: $password = bcrypt('123456'),
              'remember_token' => str_random(10),
            ]);
        }

    }
}
