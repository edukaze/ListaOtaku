<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;


protected $fillable = [
        'nome',
        'estudio',
        'user_id'
    ];
  
     public function animes(){
        return $this->belongToMany(Anime::class, 'anime_generos');
    }

}
