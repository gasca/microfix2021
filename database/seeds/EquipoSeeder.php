<?php

use Illuminate\Database\Seeder;
use \App\Models\Equipo;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           Equipo::Create([
        		'Marca' => 'DELL',
        		'Modelo' => 'XPS',
              ]);

    }
}
