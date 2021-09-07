<?php

use Illuminate\Database\Seeder;
use \App\Models\Evidencia;
class EvidenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Evidencia::Create([
        		'hardware' => 'Si',
        		'software' => '',
        		'Descripcion_Hardware' => 'Formateo de equipo',
        		'Descripcion_Software' => '',
        		'Descripcion_General' => 'Formateo y reinstalacion de SO WIN 10',
 	

        ]);

    }
}
