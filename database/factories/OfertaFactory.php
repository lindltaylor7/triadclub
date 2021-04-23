<?php

namespace Database\Factories;

use App\Models\Empresa;
use App\Models\Oferta;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfertaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Oferta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->word(20),
            'description' => $this->faker->text(250),
            'fecha_cad' => $this->faker->date('Y-m-d','now'),
            'empresa_id'=> Empresa::all()->random()->id
        ];
    }
}
