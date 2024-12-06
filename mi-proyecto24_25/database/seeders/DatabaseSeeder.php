<?php

namespace Database\Seeders;

use App\Models\Genero;
use App\Models\Pelicula;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $generos = ['Acción', 'Comedia', 'Drama', 'Terror', 'Romance'];

        foreach ($generos as $nombre) {
            Genero::create(['nombre' => $nombre]);
        }




        $this->call(RolesAndPermissionsSeeder::class);
    }
}
