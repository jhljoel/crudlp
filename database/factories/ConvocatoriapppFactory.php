<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Convocatoriappp>
 */
class ConvocatoriapppFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->word(),
            'descripcion'=>$this->faker->sentence(),
            'fecha_inicio'=>$this->faker->date(),
            'fecha_fin'=>$this->faker->date(),
            'numero_plazas_disponibles'=>$this->faker->numberBetween(10.80),
            'requisitos'=>$this->faker->sentence(),
            'adjuntar_documento'=>$this->faker->sentence(),
            'empresa_id'=>$this->faker->numberBetween(1,20),
        ];
    }
}
