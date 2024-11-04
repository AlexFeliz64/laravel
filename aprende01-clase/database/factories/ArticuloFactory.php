<?php

namespace Database\Factories;

use App\Models\Articulo;
use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articulo>
 */
class ArticuloFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Articulo::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ref' => $this->faker->unique()->regexify('[A-Z]{3}-[0-9]{3}'),  // Genera un valor único como "REF-123AB"
            'descripcion' => $this->faker->sentence(5),
            'precio' => $this->faker->randomFloat(2, 0, 500),
            'observaciones' => $this->faker->paragraph(),
            'proveedor_id' => Proveedor::inRandomOrder()->first()->id,
        ];
    }
}
