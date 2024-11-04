<?php

namespace Database\Factories;

use App\Models\Viaje;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Viaje>
 */
class ViajeFactory extends Factory
{
    /**
     * El nombre del modelo asociado con este factory.
     *
     * @var string
     */
    protected $model = Viaje::class;

    /**
     * Define el estado por defecto del factory.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create('es_ES');

        $esActivo = $this->faker->boolean(50);
        $titulo = $this->faker->sentence(2);

        return [
            'referencia' => $this->faker->unique()->regexify('[A-Z]{5}-[0-9]{3}'),
            'titulo' => $titulo,
            'slug' => Str::slug($titulo),
            'precio' => $this->faker->optional()->randomFloat(2, 100, 100),
            'participantes' => $this->faker->optional()->numberBetween(1, 10),
            'salida' => $this->faker->optional()->dateTimeBetween('now', '+1 year'),
            'llegada' => $this->faker->optional()->dateTimeBetween('now', '+2 years'),
            'descripcion' => $this->faker->optional()->paragraph(3),
            'activo' => $esActivo,
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'deleted_at' => $this->faker->optional()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
