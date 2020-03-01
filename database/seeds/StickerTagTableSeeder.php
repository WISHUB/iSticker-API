<?php

use App\StickerTag;
use Illuminate\Database\Seeder;

class StickerTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StickerTag::truncate();
        for ($i = 0; $i < 100; $i++) {
            StickerTag::create([
                'sticker_id' => rand(1, 100),
                'tag_id' => rand(1, 17)
            ]);
        }
    }
}
