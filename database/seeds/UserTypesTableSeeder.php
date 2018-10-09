<?php

use Illuminate\Database\Seeder;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar registros
		DB::table('user_types')->insert(array(
			'nombre'		=>	'Administrador',
			'descripcion'	=>	'Administrador del sistema.'
		));
    }
}
