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
    }
}
