<?php

namespace Database\Factories;

use App\Models\Genero;
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
            'portada' => '',
            'titulo' => $this->faker->sentence(),
            'genero_id' => Genero::Factory(),
            'fecha_lanzamiento' => $this->faker->date(),
            'duracion' => $this->faker->randomDigit(),
            'director' => $this->faker->name(),
            'sinopsis' => $this->faker->paragraph(),
        ];
    }
}
