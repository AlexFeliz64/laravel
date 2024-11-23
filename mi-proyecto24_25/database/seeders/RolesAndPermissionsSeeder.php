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
        $roles = ['USER', 'ADMIN', 'CLIENTE', 'EMPLE'];
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
        $prueba->syncRoles('CLIENTE');

//        // Crear dos empleados
//        $empleado1 = User::factory()->create([
//            'name' => 'Empleado1',
//            'email' => 'empleado1@example.com',
//            'password' => 'password1',
//        ]);
//        $empleado1->assignRole('EMPLE');
//
//        $empleado2 = User::factory()->create([
//            'name' => 'Empleado2',
//            'email' => 'empleado2@example.com',
//            'password' => 'password2',
//        ]);
//        $empleado2->assignRole('EMPLE');

        // Crear tres usuarios
        for ($i = 1; $i <= 3; $i++) {
            $user = User::factory()->create([
                'name' => 'Usuario' . $i,
                'email' => 'usuario' . $i . '@example.com',
                'password' => 'password' . $i,
            ]);
            $user->assignRole('USER');
        }
    }
}
