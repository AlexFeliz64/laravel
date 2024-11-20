<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DirectorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'nombre' => $this->faker->firstName(),
           'apellido' => $this->faker->lastName(),
           'fecha_nacimiento' => $this->faker->date(),
           'foto' => $this->faker->imageUrl(100,100, 'people'),
           'biografia' => $this->faker->paragraph(),
        ];
    }
}
