<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar Registros
        DB::table('users')->insert(array(
			'cedula'         => 15093281,
			'nombres'        => 'Ramon Jose',
			'apellidos'		 => 'Gimenez Tamayo',
			'email'     	 => '15093281@aptca.gob.ve',
			'password'       =>  Hash::make('12345678'),
            'user_types_id'  => 1,
		));
    }
}
