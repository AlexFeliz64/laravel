<?php

namespace Database\Seeders;

use App\Models\Cliente;
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
            'name' => 'Alecsdaw',
            'email' => 'alecsdaw@gmail.com',
            'password' => 'copito',
        ]);
        Cliente::factory()->count(30)->create();
        $this->call(RolesAndPermissionsSeeder::class);
    }
}
