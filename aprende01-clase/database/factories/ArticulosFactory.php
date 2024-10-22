<?php

namespace Database\Factories;

use App\Models\Proveedores;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articulos>
 */
class ArticulosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('es_ES');

        return [
            "ref" => fake()->regexify('[A-Z]{3}-[0-9]{3}'),
            "descripcion" => fake()->sentence(5),
            "precio" => fake()->randomFloat(2, 0, 500),
            "observaciones" => fake()->paragraph(),
            "proveedor_id" => Proveedores::inRandomOrder()->first()->id,
        ];
    }
}
