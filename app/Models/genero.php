<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;
     public function animes(){
        return $this->belongsToMany(Anime::class, 'anime_generos');
	} 
	public function user() {
        return $this->belongsTo(User::class);
    }
}
