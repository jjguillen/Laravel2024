<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Juego>
 */
class JuegoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => 'Juego ' . $this->faker->text($maxNbChars = 10),
            'plataforma' => 'PC',
            'edad' => $this->faker->numberBetween(5, 18),
        ];
    }
}
