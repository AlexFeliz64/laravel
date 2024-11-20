<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PeliculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'portada' => $this->faker->imageUrl(100, 100, 'cats'),
            'titulo' => $this->faker->sentence(),
            'genero' => $this->faker->sentence(),
            'fecha_lanzamiento' => $this->faker->date(),
            'duracion' => $this->faker->randomDigit(),
            'director' => $this->faker->name(),
            'sinopsis' => $this->faker->paragraph(),
        ];
    }
}
