<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proveedores>
 */
class ProveedoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nif" => fake()->regexify('[0-9]{8}-[A-Z]{1}'),
            "nombre" => fake()->sentence(1),
            "pais" => fake()->sentence(1),
            "productos" => fake()->sentence(5),
        ];
    }
}
