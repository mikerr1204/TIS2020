<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Administrador
        Role::create([
            'name'      => 'Administrador',
            'slug'      => 'administrador',
            'description'=> 'Persona con control total',
            'special'   => 'all-access',
        ]);


        //Postulante
        Role::create([
            'name'      => 'Postulante',
            'slug'      => 'postulante',
            'description'=> 'Persona con control de postulante',
        ]);
        // Ver perfil de convocatoria
        // \DB::table('permission_role')->insert(array(
        //     'permission_id'    => '12',
        //     'role_id'=> '2',
        // ));
        // Ver Lista de Notas
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '15',
            'role_id'=> '2',
        ));
        // Ver Lista de Postulacion
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '16',
            'role_id'=> '2',
        ));
        // Ver Perfil de Postulacion
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '17',
            'role_id'=> '2',
        ));
        // Crear Postulacion Postulacion
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '18',
            'role_id'=> '2',
        ));
        // Postularse a Convocatorias
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '21',
            'role_id'=> '2',
        ));
        // Listar Archivo
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '22',
            'role_id'=> '2',
        ));
        // Ver Pefil Archivo
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '23',
            'role_id'=> '2',
        ));
        // crear Archivo
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '24',
            'role_id'=> '2',
        ));
        // ediar Archivo
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '25',
            'role_id'=> '2',
        ));
        // Eliminar Archivo
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '26',
            'role_id'=> '2',
        ));
        // Listar Certificados
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '27',
            'role_id'=> '2',
        ));
        // Ver Pefil Certificados
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '28',
            'role_id'=> '2',
        ));
        // crear Certificados
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '29',
            'role_id'=> '2',
        ));
        // ediar Certificados
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '30',
            'role_id'=> '2',
        ));
        // Eliminar Certificados
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '31',
            'role_id'=> '2',
        ));
        
    }
}
