<?php

namespace Database\Factories;

use App\Models\Empresa;
use App\Models\Rubro;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpresaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empresa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word(20),
            'ruc' => $this->faker->unique()->numberBetween(7000000, 9000000),
            'direccion' => $this-> faker->streetAddress(),
            'tlf' => $this->faker->tollFreePhoneNumber(),
            'cel' =>  $this->faker->phoneNumber(),
            'logo' => $this->faker->randomElement(['red','yellow','green','blue','indigo','purple','pink']),
            'user_id' => User::all()->random()->id,
            'rubro_id' => Rubro::all()->random()->id

        ];
    }
}
