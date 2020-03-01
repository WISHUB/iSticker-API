<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        Category::insert([
            [
                'categorizable_id' => rand(1, 100),
                'categorizable_type' => 'App\Sticker',
                'name' => 'Animales',
                'popularity' => rand(0, 1000)
            ],
            [
                'categorizable_id' => rand(1, 100),
                'categorizable_type' => 'App\Sticker',
                'name' => 'Política',
                'popularity' => rand(0, 1000)
            ],
            [
                'categorizable_id' => rand(1, 100),
                'categorizable_type' => 'App\Sticker',
                'name' => 'Anime',
                'popularity' => rand(0, 1000)
            ],
            [
                'categorizable_id' => rand(1, 100),
                'categorizable_type' => 'App\Sticker',
                'name' => 'Autos',
                'popularity' => rand(0, 1000)
            ],
            [
                'categorizable_id' => rand(1, 100),
                'categorizable_type' => 'App\Sticker',
                'name' => 'Juegos',
                'popularity' => rand(0, 1000)
            ],
            [
                'categorizable_id' => rand(1, 100),
                'categorizable_type' => 'App\Sticker',
                'name' => 'Amor',
                'popularity' => rand(0, 1000)
            ],
            [
                'categorizable_id' => rand(1, 100),
                'categorizable_type' => 'App\Sticker',
                'name' => 'Música',
                'popularity' => rand(0, 1000)
            ],
            [
                'categorizable_id' => rand(1, 100),
                'categorizable_type' => 'App\Sticker',
                'name' => 'Gente',
                'popularity' => rand(0, 1000)
            ],
            [
                'categorizable_id' => rand(1, 100),
                'categorizable_type' => 'App\Sticker',
                'name' => 'Deportes',
                'popularity' => rand(0, 1000)
            ],
            [
                'categorizable_id' => rand(1, 100),
                'categorizable_type' => 'App\Sticker',
                'name' => 'Tecnología',
                'popularity' => rand(0, 1000)
            ],
            [
                'categorizable_id' => rand(1, 100),
                'categorizable_type' => 'App\Sticker',
                'name' => 'Equipos',
                'popularity' => rand(0, 1000)
            ],
            [
                'categorizable_id' => rand(1, 100),
                'categorizable_type' => 'App\Sticker',
                'name' => 'Peliculas',
                'popularity' => rand(0, 1000)
            ],
            [
                'categorizable_id' => rand(1, 100),
                'categorizable_type' => 'App\Sticker',
                'name' => 'Frases',
                'popularity' => rand(0, 1000)
            ],
            [
                'categorizable_id' => rand(1, 100),
                'categorizable_type' => 'App\Sticker',
                'name' => 'Gatos',
                'popularity' => rand(0, 1000)
            ],
            [
                'categorizable_id' => rand(1, 100),
                'categorizable_type' => 'App\Sticker',
                'name' => 'Memes',
                'popularity' => rand(0, 1000)
            ],
            [
                'categorizable_id' => rand(1, 100),
                'categorizable_type' => 'App\Sticker',
                'name' => 'Caras',
                'popularity' => rand(0, 1000)
            ],
            [
                'categorizable_id' => rand(1, 100),
                'categorizable_type' => 'App\Sticker',
                'name' => 'Random',
                'popularity' => rand(0, 1000)
            ]
        ]);
    }
}
