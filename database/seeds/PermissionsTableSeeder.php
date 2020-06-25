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

        //Usuario
        Permission::create([
            'name'  => 'Ver Lista de Usuarios',
            'slug'  => 'users.index',
            'description'  => 'Lista todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'  => 'Ver Perfil de Usuarios',
            'slug'  => 'users.show',
            'description'  => 'Ver perfil todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'  => 'Crear Usuarios',
            'slug'  => 'users.create',
            'description'  => 'Crear y Guardar usuarios en el sistema',
        ]);
        Permission::create([
            'name'  => 'Editar Usuarios',
            'slug'  => 'users.edit',
            'description'  => 'Editar los usuarios del sistema',
        ]);
        Permission::create([
            'name'  => 'Eliminar Usuarios',
            'slug'  => 'users.destroy',
            'description'  => 'Eliminar los usuarios del sistema',
        ]);

        //Convocatoria
        Permission::create([
            'name'  => 'Ver Lista de Convocatorias',
            'slug'  => 'convocatorias.index',
            'description'  => 'Lista todos las convocatorias del sistema',
        ]);
        // Permission::create([
        //     'name'  => 'Ver Perfil de Convocatorias',
        //     'slug'  => 'convocatorias.show',
        //     'description'  => 'Ver perfil todas las convocatorias del sistema',
        // ]);
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

        //Archivos
        Permission::create([
            'name'  => 'Ver Lista de Archivos',
            'slug'  => 'archivos.index',
            'description'  => 'Lista todos las Archivos del sistema',
        ]);
        Permission::create([
            'name'  => 'Ver Perfil de Archivos',
            'slug'  => 'archivos.show',
            'description'  => 'Ver perfil todas las Archivos del sistema',
        ]);
        Permission::create([
            'name'  => 'Crear Archivos',
            'slug'  => 'archivos.create',
            'description'  => 'Crear y Guardar Archivos en el sistema',
        ]);
        Permission::create([
            'name'  => 'Editar Archivos',
            'slug'  => 'archivos.edit',
            'description'  => 'Editar las Archivos del sistema',
        ]);
        Permission::create([
            'name'  => 'Eliminar Archivos',
            'slug'  => 'archivos.destroy',
            'description'  => 'Eliminar las Archivos del sistema',
        ]);

        //Certificados
        Permission::create([
            'name'  => 'Ver Lista de Certificados',
            'slug'  => 'certificados.index',
            'description'  => 'Lista todos las Certificados del sistema',
        ]);
        Permission::create([
            'name'  => 'Ver Perfil de Certificados',
            'slug'  => 'certificados.show',
            'description'  => 'Ver perfil todas las Certificados del sistema',
        ]);
        Permission::create([
            'name'  => 'Crear Certificados',
            'slug'  => 'certificados.create',
            'description'  => 'Crear y Guardar Certificados en el sistema',
        ]);
        Permission::create([
            'name'  => 'Editar Certificados',
            'slug'  => 'certificados.edit',
            'description'  => 'Editar las Certificados del sistema',
        ]);
        Permission::create([
            'name'  => 'Eliminar Certificados',
            'slug'  => 'certificados.destroy',
            'description'  => 'Eliminar las Certificados del sistema',
        ]);

        //Materias
        Permission::create([
            'name'  => 'Ver Lista de Materias',
            'slug'  => 'materias.index',
            'description'  => 'Lista todos las Materias del sistema',
        ]);
        Permission::create([
            'name'  => 'Ver Perfil de Materias',
            'slug'  => 'materias.show',
            'description'  => 'Ver perfil todas las Materias del sistema',
        ]);
        Permission::create([
            'name'  => 'Crear Materias',
            'slug'  => 'materias.create',
            'description'  => 'Crear y Guardar Materias en el sistema',
        ]);
        Permission::create([
            'name'  => 'Editar Materias',
            'slug'  => 'materias.edit',
            'description'  => 'Editar las Materias del sistema',
        ]);
        Permission::create([
            'name'  => 'Eliminar Materias',
            'slug'  => 'materias.destroy',
            'description'  => 'Eliminar las Materias del sistema',
        ]);

        //Requerimientos
        Permission::create([
            'name'  => 'Ver Lista de Requerimientos',
            'slug'  => 'requerimientos.index',
            'description'  => 'Lista todos las Requerimientos del sistema',
        ]);
        Permission::create([
            'name'  => 'Ver Perfil de Requerimientos',
            'slug'  => 'requerimientos.show',
            'description'  => 'Ver perfil todas las Requerimientos del sistema',
        ]);
        Permission::create([
            'name'  => 'Crear Requerimientos',
            'slug'  => 'requerimientos.create',
            'description'  => 'Crear y Guardar Requerimientos en el sistema',
        ]);
        Permission::create([
            'name'  => 'Editar Requerimientos',
            'slug'  => 'requerimientos.edit',
            'description'  => 'Editar las Requerimientos del sistema',
        ]);
        Permission::create([
            'name'  => 'Eliminar Requerimientos',
            'slug'  => 'requerimientos.destroy',
            'description'  => 'Eliminar las Requerimientos del sistema',
        ]);

        //Requisitos
        Permission::create([
            'name'  => 'Ver Lista de Requisitos',
            'slug'  => 'requisitos.index',
            'description'  => 'Lista todos las Requisitos del sistema',
        ]);
        Permission::create([
            'name'  => 'Ver Perfil de Requisitos',
            'slug'  => 'requisitos.show',
            'description'  => 'Ver perfil todas las Requisitos del sistema',
        ]);
        Permission::create([
            'name'  => 'Crear Requisitos',
            'slug'  => 'requisitos.create',
            'description'  => 'Crear y Guardar Requisitos en el sistema',
        ]);
        Permission::create([
            'name'  => 'Editar Requisitos',
            'slug'  => 'requisitos.edit',
            'description'  => 'Editar las Requisitos del sistema',
        ]);
        Permission::create([
            'name'  => 'Eliminar Requisitos',
            'slug'  => 'requisitos.destroy',
            'description'  => 'Eliminar las Requisitos del sistema',
        ]);

        //Documentos
        Permission::create([
            'name'  => 'Ver Lista de Documentos',
            'slug'  => 'documentos.index',
            'description'  => 'Lista todos las Documentos del sistema',
        ]);
        Permission::create([
            'name'  => 'Ver Perfil de Documentos',
            'slug'  => 'documentos.show',
            'description'  => 'Ver perfil todas las Documentos del sistema',
        ]);
        Permission::create([
            'name'  => 'Crear Documentos',
            'slug'  => 'documentos.create',
            'description'  => 'Crear y Guardar Documentos en el sistema',
        ]);
        Permission::create([
            'name'  => 'Editar Documentos',
            'slug'  => 'documentos.edit',
            'description'  => 'Editar las Documentos del sistema',
        ]);
        Permission::create([
            'name'  => 'Eliminar Documentos',
            'slug'  => 'documentos.destroy',
            'description'  => 'Eliminar las Documentos del sistema',
        ]);

        //Fechas
        Permission::create([
            'name'  => 'Ver Lista de Fechas',
            'slug'  => 'fechas.index',
            'description'  => 'Lista todos las Fechas del sistema',
        ]);
        Permission::create([
            'name'  => 'Ver Perfil de Fechas',
            'slug'  => 'fechas.show',
            'description'  => 'Ver perfil todas las Fechas del sistema',
        ]);
        Permission::create([
            'name'  => 'Crear Fechas',
            'slug'  => 'fechas.create',
            'description'  => 'Crear y Guardar Fechas en el sistema',
        ]);
        Permission::create([
            'name'  => 'Editar Fechas',
            'slug'  => 'fechas.edit',
            'description'  => 'Editar las Fechas del sistema',
        ]);
        Permission::create([
            'name'  => 'Eliminar Fechas',
            'slug'  => 'fechas.destroy',
            'description'  => 'Eliminar las Fechas del sistema',
        ]);

        //Meritos
        Permission::create([
            'name'  => 'Ver Lista de Meritos',
            'slug'  => 'meritos.index',
            'description'  => 'Lista todos las Meritos del sistema',
        ]);
        Permission::create([
            'name'  => 'Ver Perfil de Meritos',
            'slug'  => 'meritos.show',
            'description'  => 'Ver perfil todas las Meritos del sistema',
        ]);
        Permission::create([
            'name'  => 'Crear Meritos',
            'slug'  => 'meritos.create',
            'description'  => 'Crear y Guardar Meritos en el sistema',
        ]);
        Permission::create([
            'name'  => 'Editar Meritos',
            'slug'  => 'meritos.edit',
            'description'  => 'Editar las Meritos del sistema',
        ]);
        Permission::create([
            'name'  => 'Eliminar Meritos',
            'slug'  => 'meritos.destroy',
            'description'  => 'Eliminar las Meritos del sistema',
        ]);
        Permission::create([
            'name'  => 'Ver Convocatorias',
            'slug'  => 'convocatorias.show',
            'description'  => 'Ver convocatorias en el sistema',
        ]);

        // Puntajes
        Permission::create([
            'name'  => 'Editar puntaje',
            'slug'  => 'puntajes.edit',
            'description'  => 'Editar puntaje del certificado',
        ]);
        Permission::create([
            'name'  => 'Crear puntaje',
            'slug'  => 'puntajes.create',
            'description'  => 'Crear puntaje en una convocatoria',
        ]);
        Permission::create([
            'name'  => 'Ver puntaje',
            'slug'  => 'puntajes.show',
            'description'  => 'Ver puntajes en la convocatoria',
        ]);
        Permission::create([
            'name'  => 'Eliminar puntaje',
            'slug'  => 'puntajes.destroy',
            'description'  => 'Eliminar puntaje del certificado',
        ]);
    }
}
