<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'users',
            'description' => 'Gestionar Usuarios y Roles de la aplicación'
        ]);
        Permission::create([
            'name' => 'Permiso 1',
            'description' => 'Gestionar Usuarios y Roles de la aplicación'
        ]);
        Permission::create([
            'name' => 'Permiso 2',
            'description' => 'Gestionar Usuarios y Roles de la aplicación'
        ]);
    }
}
