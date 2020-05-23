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
        // Ver Lista de Notas
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '6',
            'role_id'=> '2',
        ));
        // Ver Lista de Postulacion
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '11',
            'role_id'=> '2',
        ));
        // Ver Perfil de Postulacion
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '12',
            'role_id'=> '2',
        ));
        // Crear Postulacion Postulacion
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '14',
            'role_id'=> '2',
        ));
        // Postularse a Convocatorias
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '17',
            'role_id'=> '2',
        ));
        
    }
}
