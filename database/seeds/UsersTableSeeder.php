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
            'sis'       => '123456789',
            'ci'       => '1234567',
            'email'      => 'adm@gmail.com',
            'password'      => '$2y$10$eBGatcDo6yl47bBqW.QHX.6byBlRsRMn/rzjSML86yu1HHdRpexv6',
        ]);
        \DB::table('role_user')->insert(array(
            'role_id'    => '1',
            'user_id'=> '1',
        ));
        User::create([
            'name'       => 'okay',
            'apellido'       => 'okay',
            'sis'       => '123456709',
            'ci'       => '1234507',
            'email'      => 'okay@gmail.com',
            'password'      => bcrypt('okay'),
        ]);
        \DB::table('role_user')->insert(array(
            'role_id'    => '1',
            'user_id'=> '2',
        ));
        User::create([
            'name'       => 'kay',
            'apellido'       => 'kay',
            'sis'       => '12345675',
            'ci'       => '5905037',
            'email'      => 'kay@gmail.com',
            'password'      => bcrypt('okay'),
        ]);
        \DB::table('role_user')->insert(array(
            'role_id'    => '2',
            'user_id'=> '4',
        ));
    }
}
