<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Articulo;
use App\Models\Proveedor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Alecs',
            'email' => 'aalonsos21@gmail.com',
            'password' => 'password'
        ]);

        Proveedor::factory()->count(30)->create();
        Articulo::factory()->count(100)->create();
    }
}
