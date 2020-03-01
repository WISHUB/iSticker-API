<?php

use App\Sticker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class StickersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        Sticker::truncate();

        for ($i = 0; $i < 100; $i++) {
            Sticker::create([
                'user_id' => 1,
                'category_id' => rand(1, 17),
                'pack_id' => rand(1, 100),
                'name' => $faker->name,
                'shared_code' => Str::random(10),
                'views' => rand(1, 10000),
                'likes' => rand(1, 10000),
                'size' => rand(1, 1000) . ' kb'
            ]);
        }
    }
}
