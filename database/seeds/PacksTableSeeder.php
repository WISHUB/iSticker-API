<?php

use App\Pack;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PacksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        Pack::truncate();

        for ($i = 0; $i < 100; $i++) {
            Pack::create([
                'user_id' => 1,
                'name' => $faker->name,
                'description' => $faker->text,
                'shared_code' => Str::random(10),
                'views' => rand(1, 10000),
                'likes' => rand(1, 10000),
                'size' => rand(1, 1000) . ' kb'
            ]);
        }
    }
}
