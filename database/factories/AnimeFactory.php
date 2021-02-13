<?php

namespace Database\Factories;

use App\Models\anime;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnimeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = anime::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nome'=> $this->faker->word,
            'estudio'=>$this->faker->word,
        ];
    }
}
