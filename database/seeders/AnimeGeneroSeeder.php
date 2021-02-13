<?php

namespace Database\Seeders;

use App\Models\Anime;
use App\Models\Genero;
use App\Models\AnimeGenero;
use Illuminate\Database\Seeder;

class AnimeGeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (anime::all() as $anime) {
       	$generos = genero::all()->where('user_id', $anime->user_id)->random(1);
       		foreach ($generos as $genero) {
       			AnimeGenero::create([
       				'anime_id'=> $anime->id,
       				'genero_id'=> $genero->id,
       			]);
       		}
        }
    }
}
