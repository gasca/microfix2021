<?php

use Illuminate\Database\Seeder;
use \App\Models\Reporte;

class ReporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$equipo = DB::table('equipo')->select('id')->first();
    	
            Reporte::Create([
        		'user_id' => '1',
        		'equipo_id' => $equipo->id,
        		'evidencia_id' => '1',
        		'RevisionHS' => 'Hardware',
        		'status' => 'Revision',
        		'Fecha_Entrada' => '2020/11/08',
        		'Fecha_Salida' => '2020/11/08',
        	
        		
        ]);

    }
}
