<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anime extends Model
{
    use HasFactory;

     public function generos(){
        return $this->hasMany(genero::class);
    } 
     public function animes(){
        return $this->belongToMany(anime::class, 'anime_generos');
    }

}
