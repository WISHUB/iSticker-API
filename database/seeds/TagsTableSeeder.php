<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::truncate();
        Tag::insert([
            [
                'taggable_id' => rand(1, 100),
                'taggable_type' => 'App\Sticker',
                'name' => 'Felicidad',
                'popularity' => rand(0, 1000)
            ],
            [
                'taggable_id' => rand(1, 100),
                'taggable_type' => 'App\Sticker',
                'name' => 'Chistoso',
                'popularity' => rand(0, 1000)
            ],
            [
                'taggable_id' => rand(1, 100),
                'taggable_type' => 'App\Sticker',
                'name' => 'Meme',
                'popularity' => rand(0, 1000)
            ],
            [
                'taggable_id' => rand(1, 100),
                'taggable_type' => 'App\Sticker',
                'name' => 'Nuevo',
                'popularity' => rand(0, 1000)
            ],
            [
                'taggable_id' => rand(1, 100),
                'taggable_type' => 'App\Sticker',
                'name' => 'Simpson',
                'popularity' => rand(0, 1000)
            ],
            [
                'taggable_id' => rand(1, 100),
                'taggable_type' => 'App\Sticker',
                'name' => 'Messi',
                'popularity' => rand(0, 1000)
            ],
            [
                'taggable_id' => rand(1, 100),
                'taggable_type' => 'App\Sticker',
                'name' => 'Boca',
                'popularity' => rand(0, 1000)
            ],
            [
                'taggable_id' => rand(1, 100),
                'taggable_type' => 'App\Sticker',
                'name' => 'River',
                'popularity' => rand(0, 1000)
            ],
            [
                'taggable_id' => rand(1, 100),
                'taggable_type' => 'App\Sticker',
                'name' => 'Fortnite',
                'popularity' => rand(0, 1000)
            ],
            [
                'taggable_id' => rand(1, 100),
                'taggable_type' => 'App\Sticker',
                'name' => 'Joker',
                'popularity' => rand(0, 1000)
            ],
            [
                'taggable_id' => rand(1, 100),
                'taggable_type' => 'App\Sticker',
                'name' => 'Instagram',
                'popularity' => rand(0, 1000)
            ],
            [
                'taggable_id' => rand(1, 100),
                'taggable_type' => 'App\Sticker',
                'name' => 'WhatsApp',
                'popularity' => rand(0, 1000)
            ],
            [
                'taggable_id' => rand(1, 100),
                'taggable_type' => 'App\Sticker',
                'name' => 'Facebook',
                'popularity' => rand(0, 1000)
            ],
            [
                'taggable_id' => rand(1, 100),
                'taggable_type' => 'App\Sticker',
                'name' => 'Frase',
                'popularity' => rand(0, 1000)
            ],
            [
                'taggable_id' => rand(1, 100),
                'taggable_type' => 'App\Sticker',
                'name' => 'Perro',
                'popularity' => rand(0, 1000)
            ],
            [
                'taggable_id' => rand(1, 100),
                'taggable_type' => 'App\Sticker',
                'name' => 'Gato',
                'popularity' => rand(0, 1000)
            ],
            [
                'taggable_id' => rand(1, 100),
                'taggable_type' => 'App\Sticker',
                'name' => 'Trump',
                'popularity' => rand(0, 1000)
            ]
        ]);
    }
}
