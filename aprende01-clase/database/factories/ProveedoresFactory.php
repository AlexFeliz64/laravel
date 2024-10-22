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
        #Poner los datos en español
        $faker = \Faker\Factory::create('es_ES');
        $esPersonaFisica = $this->faker->boolean();
        return [
            "nif" => $esPersonaFisica ?
                fake()->unique()->regexify('[0-9]{8}[A-Z]{1}'):
                fake()->unique()->regexify('[A-Z][0-9]{8}[A-Z]'),
            "razon_social" => !$esPersonaFisica ? fake()->company():null,
            "nombre" => $esPersonaFisica ? fake()->company():null,
            "apellido1" => $esPersonaFisica ? fake()->company():null,
            "apellido2" => $esPersonaFisica ? fake()->optional()->company():null,
            "autonomo" => $esPersonaFisica,
            "direccion" => fake()->address(),
            "telefono" => fake()->phoneNumber(),
            "observaciones" => fake()->optional()->text(),

        ];
    }
}
