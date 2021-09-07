<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

    	$this->truncateTables([
    		'Usuario',
    		'Equipo',
    		'Evidencia',
    		'Reporte'	
    	]);


    

        $this->call(UsuarioSeeder::class);
        $this->call(EquipoSeeder::class);
        $this->call(EvidenciaSeeder::class);
        $this->call(ReporteSeeder::class);
    }

    protected function truncateTables(array $tables)
    { 
     DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    	foreach ($tables as $table) {
    	 
    	DB::table($table)->truncate();
    	

    	}
    	   // $this->call(UserSeeder::class);
      
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }

}
