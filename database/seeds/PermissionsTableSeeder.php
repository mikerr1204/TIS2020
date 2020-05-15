<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Rol
        Permission::create([
            'name'  => 'Ver Lista de Roles',
            'slug'  => 'roles.index',
            'description'  => 'Lista todos los roles del sistema',
        ]);
        Permission::create([
            'name'  => 'Ver Perfil de Roles',
            'slug'  => 'roles.show',
            'description'  => 'Ver perfil todos los roles del sistema',
        ]);
        Permission::create([
            'name'  => 'Crear Roles',
            'slug'  => 'roles.create',
            'description'  => 'Crear y Guardar roles en el sistema',
        ]);
        Permission::create([
            'name'  => 'Editar roles',
            'slug'  => 'roles.edit',
            'description'  => 'Editar los roles del sistema',
        ]);
        Permission::create([
            'name'  => 'Eliminar roles',
            'slug'  => 'roles.destroy',
            'description'  => 'Eliminar los roles del sistema',
        ]);

        //Postulante
        Permission::create([
            'name'  => 'Ver Lista de Notas',
            'slug'  => 'postulantes.index',
            'description'  => 'Lista todas las notas del postulante',
        ]);
    }
}
