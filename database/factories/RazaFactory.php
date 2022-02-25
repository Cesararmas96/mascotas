<?php

namespace Database\Factories;

use App\Models\Especie;
use App\Models\Raza;
use Illuminate\Database\Eloquent\Factories\Factory;

class RazaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Raza::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->unique()->word('20'),
            'especie_id' => Especie::all()->random()->id
        ];
    }
}
