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

        //Comisionario
        Role::create([
            'name'      => 'Comisionario',
            'slug'      => 'comisionario',
            'description'=> 'Persona con control de comisionario',
        ]);

        //Comisionario
        Role::create([
            'name'      => 'Secretaria',
            'slug'      => 'secretaria',
            'description'=> 'Persona con control de secretaria',
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

        // Editar puntajes
        // postulations.edit
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '19',
            'role_id'=> '3',
        ));
        // Ver convocatorias
        // convocatorias.index
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '11',
            'role_id'=> '3',
        ));
        // Ver postulaciones
        // postulations.index
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '16',
            'role_id'=> '3',
        ));

        // Ver pdf del certificado
        // certificados.show
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '27',
            'role_id'=> '3',
        ));

        // Editar puntajes
        // certificados.edit
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '30',
            'role_id'=> '3',
        ));

        // Ver Archivo
        // archivos.show
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '23',
            'role_id'=> '3',
        ));

        // Editar puntaje
        // puntajes.edit
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '63',
            'role_id'=> '2',
        ));

        // Crear puntaje
        // puntajes.create
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '64',
            'role_id'=> '2',
        ));

        // Ver puntaje
        // puntajes.show
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '65',
            'role_id'=> '2',
        ));

        // Borrar puntaje
        // puntajes.destroy
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '66',
            'role_id'=> '2',
        ));

        // Ver lista de puntajes
        // puntajes.index
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '67',
            'role_id'=> '2',
        ));

        \DB::table('permission_role')->insert(array(
            'permission_id'    => '11',
            'role_id'=> '4',
        ));

        \DB::table('permission_role')->insert(array(
            'permission_id'    => '42',
            'role_id'=> '4',
        ));

        \DB::table('permission_role')->insert(array(
            'permission_id'    => '43',
            'role_id'=> '4',
        ));

        \DB::table('permission_role')->insert(array(
            'permission_id'    => '45',
            'role_id'=> '4',
        ));

        \DB::table('permission_role')->insert(array(
            'permission_id'    => '16',
            'role_id'=> '4',
        ));

        \DB::table('permission_role')->insert(array(
            'permission_id'    => '16',
            'role_id'=> '4',
        ));

        \DB::table('permission_role')->insert(array(
            'permission_id'    => '17',
            'role_id'=> '4',
        ));

        //Editar validacion de postulacion
        \DB::table('permission_role')->insert(array(
            'permission_id'    => '19',
            'role_id'=> '4',
        ));
    }
}
