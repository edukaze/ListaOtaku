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
        	
	        Genero::create([
	        	'anime_id'=> $anime->id,
	        	'acao'=> 'ação',
	        	'aventura' => 'aventura',
	        	'comedia' => 'comedia',
	        	'drama'=> 'drama',
	        	'fantasia'=> 'fantasia',
	        	'ecchi'=> 'ecchi',
	        	'musical' => 'musical',
	        	'romance'=> 'romance',
	        	'ficcao_cientifica' => 'ficcão cientifica',
	        	'seinen'=> 'seinen,',
	        	'shoujo' => 'shoujo',
	        	'shounen'=> 'shounen',
	        	'slife-of-slife'=> 'slife-of-slife',
	        	'esportes'=> 'esportes',
	        	'sobrenatural'=> 'sobrenatural',
	        	'suspense'=> 'suspense'
	        ]);
        }
    }
}
