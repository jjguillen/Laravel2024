<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Incidencia>
 */
class IncidenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'latitud' => $this->faker->latitude,
            'longitud' => $this->faker->longitude,
            'ciudad' => $this->faker->city,
            'direccion' => $this->faker->streetAddress,
            'etiqueta' => Str::random(3),
            'descripcion' => $this->faker->text($maxNbChars = 200),
            'estado' => 'abierta'
        ];
    }
}
