<?php

use Illuminate\Database\Seeder;

class AdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach(range(1, 55) as $index) {
            $year = rand(2009, 2017);
            $month = rand(1, 12);
            $day = rand(1, 28);
            $dt = \Carbon\Carbon::create($year, $month, $day, 0, 0, 0);

            DB::table('ads')->insert([
                'title' => $faker->sentence(3),
                'description' => $faker->sentence(50),
                'user_id' => \App\User::inRandomOrder()->first()->id,
                'created_at' => $dt,
            ]);
        }

    }
}
