<?php

namespace Database\Seeders;

use App\Models\Genero;
use App\Models\Anime;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        foreach (anime::all() as $anime) {
        	$generos = collect(['ação', 'aventura', 'comedia', 'drama', 'fantasia', 'echhi', 'musical', 'romance', 'ficção cientifica', 'seinen', 'shoujo', 'shounen', 'slife of life', 'esportes', 'sobrenatural', 'suspense'])->random(3);
        	foreach ($generos as $genero) {
	        	Genero::create([
	    			'genero'=> $genero,
	    			'anime_id'=>$anime->id,
                    'user_id' => $anime->user_id,
	        ]);
        	}
        }
    }
}
