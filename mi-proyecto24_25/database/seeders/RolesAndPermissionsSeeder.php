<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear roles
        $roles = ['USER', 'ADMIN'];
        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }

        // Crear administrador y asignarle todos los roles
        $admin = User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@admin',
            'password' => 'copito',
        ]);
        $admin->syncRoles($roles);

        $prueba = User::factory()->create([
            'name' => 'Alecs',
            'email' => 'alecs@gmail.com',
            'password' => 'alecs',
        ]);
        $prueba->syncRoles('USER');

    }
}
