<?php

namespace Database\Seeders;

use App\Models\Articulos;
use App\Models\Proveedores;
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

        User::factory()->create([
            'name' => 'Alecs',
            'email' => 'aalonsos21@gmail.com',
            'password' => 'password',
        ]);
        Proveedores::factory(30)->create();
        Articulos::factory(100)->create();


    }
}
