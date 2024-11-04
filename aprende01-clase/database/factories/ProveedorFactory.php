<?php

namespace Database\Factories;

use App\Models\Proveedor;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

// Importar el modelo Proveedor

// Importar Faker correctamente

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proveedor>
 */
class ProveedorFactory extends Factory
{
    /**
     * El nombre del modelo asociado con este factory.
     *
     * @var string
     */
    protected $model = Proveedor::class;

    /**
     * Define el estado por defecto del factory.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create('es_ES'); // Usar Faker correctamente

        $esEmpresa = $this->faker->boolean(50); // Usar $this->faker

        return [
            'nif' => !$esEmpresa ?
                $this->faker->unique()->regexify('[0-9]{8}[A-Z]') :
                $this->faker->unique()->regexify('[A-Z][0-9]{7}[A-Z0-9]'),
            'razon_social' => $esEmpresa ? $this->faker->company() : null,
            'nombre' => !$esEmpresa ? $this->faker->firstName() : null,
            'apellido1' => !$esEmpresa ? $this->faker->lastName() : null,
            'apellido2' => !$esEmpresa ? $this->faker->optional()->lastName() : null,
            'autonomo' => $esEmpresa,
            'direccion' => $this->faker->address(),
            'telefono' => $this->faker->phoneNumber(),
            'observaciones' => $this->faker->optional()->text(),
        ];
    }
}
