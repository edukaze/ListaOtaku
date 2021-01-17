<?php

namespace Database\Seeders;

use App\Models\anime;
use App\Models\User;
use Illuminate\Database\Seeder;

class AnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	$users = User::all();
    	foreach ($users as $user) {
	        anime::factory(5)->create([
	        	'user_id'=> $user->id
        	]);
    	}
    }
}
