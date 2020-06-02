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

        //Convocatoria
        Permission::create([
            'name'  => 'Ver Lista de Convocatorias',
            'slug'  => 'convocatorias.index',
            'description'  => 'Lista todos las convocatorias del sistema',
        ]);
        Permission::create([
            'name'  => 'Ver Perfil de Convocatorias',
            'slug'  => 'convocatorias.show',
            'description'  => 'Ver perfil todas las convocatorias del sistema',
        ]);
        Permission::create([
            'name'  => 'Crear Convocatorias',
            'slug'  => 'convocatorias.create',
            'description'  => 'Crear y Guardar roles en el sistema',
        ]);
        Permission::create([
            'name'  => 'Editar Convocatorias',
            'slug'  => 'convocatorias.edit',
            'description'  => 'Editar las convocatorias del sistema',
        ]);
        Permission::create([
            'name'  => 'Eliminar Convocatorias',
            'slug'  => 'convocatorias.destroy',
            'description'  => 'Eliminar las convocatorias del sistema',
        ]);

        //Postulante
        Permission::create([
            'name'  => 'Ver Lista de Notas',
            'slug'  => 'postulantes.index',
            'description'  => 'Lista todas las notas del postulante',
        ]);

        //Postulacion
        Permission::create([
            'name'  => 'Ver Lista de Postulacion',
            'slug'  => 'postulations.index',
            'description'  => 'Lista todos las Postulacion del sistema',
        ]);
        Permission::create([
            'name'  => 'Ver Perfil de Postulacion',
            'slug'  => 'postulations.show',
            'description'  => 'Ver perfil todas las Postulacion del sistema',
        ]);
        Permission::create([
            'name'  => 'Crear Postulacion',
            'slug'  => 'postulations.create',
            'description'  => 'Crear y Guardar Postulacion en el sistema',
        ]);
        Permission::create([
            'name'  => 'Editar Postulacion',
            'slug'  => 'postulations.edit',
            'description'  => 'Editar las Postulacion del sistema',
        ]);
        Permission::create([
            'name'  => 'Eliminar Postulacion',
            'slug'  => 'postulations.destroy',
            'description'  => 'Eliminar las Postulacion del sistema',
        ]);
        Permission::create([
            'name'  => 'Postularse a Convocatorias',
            'slug'  => 'postulations.apply',
            'description'  => 'Se postula a la Postulacion del sistema',
        ]);

        //Documentos
        Permission::create([
            'name'  => 'Ver Lista de Documentos',
            'slug'  => 'documentos.index',
            'description'  => 'Lista todos los documentos en una convocatoria',
        ]);
        Permission::create([
            'name'  => 'Ver Perfil de Documentos',
            'slug'  => 'documentos.show',
            'description'  => 'Ver perfil todas los documentos en una convocatoria',
        ]);
        Permission::create([
            'name'  => 'Crear Documentos',
            'slug'  => 'documentos.create',
            'description'  => 'Crear y Guardar documentos en una convocatoria',
        ]);
        Permission::create([
            'name'  => 'Editar Documentos',
            'slug'  => 'documentos.edit',
            'description'  => 'Editar el documento de una convocatoria',
        ]);
        Permission::create([
            'name'  => 'Eliminar Documentos',
            'slug'  => 'documentos.destroy',
            'description'  => 'Eliminar documentos de una convocatoria',
        ]);

        //Meritos
        Permission::create([
            'name'  => 'Ver Lista de Meritos',
            'slug'  => 'meritos.index',
            'description'  => 'Lista todos los meritos en una convocatoria',
        ]);
        Permission::create([
            'name'  => 'Ver Perfil de Meritos',
            'slug'  => 'meritos.show',
            'description'  => 'Ver perfil de todos los meritos en una convocatoria',
        ]);
        Permission::create([
            'name'  => 'Crear Meritos',
            'slug'  => 'meritos.create',
            'description'  => 'Crear y Guardar meritos en una convocatoria',
        ]);
        Permission::create([
            'name'  => 'Editar meritos',
            'slug'  => 'meritos.edit',
            'description'  => 'Editar el merito de una convocatoria',
        ]);
        Permission::create([
            'name'  => 'Eliminar Meritos',
            'slug'  => 'meritos.destroy',
            'description'  => 'Eliminar los meritos de una convocatoria',
        ]);

        //Requisitos
        Permission::create([
            'name'  => 'Ver Lista de Requisitos',
            'slug'  => 'requisitos.index',
            'description'  => 'Lista todos los requisitos en una convocatoria',
        ]);
        Permission::create([
            'name'  => 'Ver Perfil de Requisitos',
            'slug'  => 'requisitos.show',
            'description'  => 'Ver perfil de todos los requisitos en una convocatoria',
        ]);
        Permission::create([
            'name'  => 'Crear Requisitos',
            'slug'  => 'requisitos.create',
            'description'  => 'Crear y Guardar requisitos en una convocatoria',
        ]);
        Permission::create([
            'name'  => 'Editar Requisitos',
            'slug'  => 'requisitos.edit',
            'description'  => 'Editar el requisito de una convocatoria',
        ]);
        Permission::create([
            'name'  => 'Eliminar Requisitos',
            'slug'  => 'requisitos.destroy',
            'description'  => 'Eliminar los requisitos de una convocatoria',
        ]);
    }
}
