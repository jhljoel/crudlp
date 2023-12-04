<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'direccion'=>$this->faker->word(),
            'telefono'=>$this->faker->numberBetween(900000000,999999999),
            'descripcion'=>$this->faker->sentence(),
        ];
    }
}
