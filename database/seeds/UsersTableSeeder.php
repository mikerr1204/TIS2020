<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Administrador
        User::create([
            'name'       => 'Adm',
            'apellido'       => 'Adm',
            'sis'       => '223456789',
            'ci'       => '1234567',
            'email'      => 'adm@gmail.com',
            'password'      => '$2y$10$eBGatcDo6yl47bBqW.QHX.6byBlRsRMn/rzjSML86yu1HHdRpexv6',
        ]);
        \DB::table('role_user')->insert(array(
            'role_id'    => '1',
            'user_id'=> '1',
        ));
        User::create([
            'name'       => 'admin',
            'apellido'       => 'admin',
            'sis'       => '123456709',
            'ci'       => '1234507',
            'email'      => 'admin@gmail.com',
            'password'      => bcrypt('admin1234507'),
        ]);
        \DB::table('role_user')->insert(array(
            'role_id'    => '1',
            'user_id'=> '2',
        ));

        User::create([
            'name'       => 'comisionario',
            'apellido'       => 'comisionario',
            'sis'       => '123456777',
            'ci'       => '5905038',
            'email'      => 'comisionario@gmail.com',
            'password'      => bcrypt('comisionario5905038'),
        ]);
        \DB::table('role_user')->insert(array(
            'role_id'    => '3',
            'user_id'=> '3',
        ));

        User::create([
            'name'       => 'postulante',
            'apellido'       => 'postulante',
            'sis'       => '123456787',
            'valEst'    => '12345678',
            'valKardex' => '12345678',
            'ci'       => '5905039',
            'email'      => 'postulante@gmail.com',
            'password'      => bcrypt('postulante5905039'),
        ]);
        \DB::table('role_user')->insert(array(
            'role_id'    => '2',
            'user_id'=> '4',
        ));

        User::create([
            'name'       => 'admin2',
            'apellido'       => 'admin2',
            'sis'       => '123456779',
            'ci'       => '1234577',
            'email'      => 'admin2@gmail.com',
            'password'      => bcrypt('1234567'),
        ]);
        \DB::table('role_user')->insert(array(
            'role_id'    => '1',
            'user_id'=> '5',
        ));

        User::create([
            'name'       => 'comisionario2',
            'apellido'       => 'comisionario2',
            'sis'       => '123456778',
            'ci'       => '5905040',
            'email'      => 'comisionario2@gmail.com',
            'password'      => bcrypt('1234567'),
        ]);
        \DB::table('role_user')->insert(array(
            'role_id'    => '3',
            'user_id'=> '6',
        ));

        User::create([
            'name'       => 'postulante2',
            'apellido'       => 'postulante2',
            'sis'       => '123456789',
            'valEst'    => '12345678',
            'valKardex' => '12345678',
            'ci'       => '5905041',
            'email'      => 'postulante2@gmail.com',
            'password'      => bcrypt('1234567'),
        ]);
        \DB::table('role_user')->insert(array(
            'role_id'    => '2',
            'user_id'=> '7',
        ));

        User::create([
            'name'       => 'secretaria2',
            'apellido'       => 'secretaria2',
            'sis'       => '111111119',
            'ci'       => '5905045',
            'email'      => 'secretaria2@gmail.com',
            'password'      => bcrypt('1234567'),
        ]);
        \DB::table('role_user')->insert(array(
            'role_id'    => '4',
            'user_id'=> '8',
        ));

        User::create([
            'name'       => 'secretaria',
            'apellido'       => 'secretaria',
            'sis'       => '111111120',
            'ci'       => '5905048',
            'email'      => 'secretaria@gmail.com',
            'password'      => bcrypt('secretaria5905048'),
        ]);
        \DB::table('role_user')->insert(array(
            'role_id'    => '4',
            'user_id'=> '9',
        ));
    }
}
