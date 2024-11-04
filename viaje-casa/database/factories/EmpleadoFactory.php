<?php

namespace Database\Factories;

use App\Models\Empleado;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * El nombre del modelo asociado con este factory.
     *
     * @var string
     */
    protected $model = Empleado::class;

    /**
     * Define el estado por defecto del factory.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create('es_ES');

        $esActivo = $this->faker->boolean(50);

        return [
            'nif' => $this->faker->unique()->regexify('[A-Z]{3}-[0-9]{3}'),
            'nombre' => $this->faker->firstName(),
            'apellido1' => $this->faker->lastName(),
            'apellido2' => $this->faker->optional()->lastName(),
            'fecha_nacimiento' => $this->faker->optional()->date(),
            'observaciones' => $this->faker->optional()->paragraph(),
            'activo' => $esActivo,
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'deleted_at' => $this->faker->optional()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
