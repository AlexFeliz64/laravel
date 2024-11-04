<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\Viaje;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Alecs',
            'email' => 'aalonsos21@gmail.com',
            'password' => 'password'
        ]);

        Empleado::factory()->count(30)->create();
        Cliente::factory()->count(50)->create();
        Viaje::factory()->count(15)->create();

    }
}
