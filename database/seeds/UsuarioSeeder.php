<?php

use Illuminate\Database\Seeder;
use \App\Models\Usuario;


class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
                \App\Models\Usuario::create([
                'nombre' => 'Eduardo',
                'ap_paterno' => 'Gasca',
                'ap_materno' => 'Belman',
                'domicilio' => 'Sitael',
                'colonia' => 'villa san angel',
                'ciudad' => 'irapuato',
                'codigo_postal' => '36545',
                'telefono' => '4621173019',
                'correo' => 'ing.eduardogb@gmail.com',
                'contrasena' =>  bcrypt('007larock'),
                'tipo_usuario' => 'Administrador',
            ]); 

/*

        DB::table('Usuario')->
        insert([
        		'nombre' => 'Eduardo',
        		'ap_paterno' => 'Gasca',
        		'ap_materno' => 'Belman',
        		'domicilio' => 'Sitael',
        		'colonia' => 'villa san angel',
        		'ciudad' => 'irapuato',
        		'codigo_postal' => '36545',
        		'telefono' => '4621173019',
        		'correo' => 'ing.eduardogb@gmail.com',
        		'contrasena' =>  bcrypt('007larock'),
        		'tipo_usuario' => 'Administrador',


        ]);
*/
    }
}
