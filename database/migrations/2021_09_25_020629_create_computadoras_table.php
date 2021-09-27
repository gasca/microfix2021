<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputadorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computadoras', function (Blueprint $table) {
            $table->id();
            $table->string('Marca');
            $table->string('Modelo');
            $table->string('SN');
            $table->string('Memoria_Ram');
            $table->string('Disco_Duro_SSD');
            $table->string('Disco_Duro_HDD');
            $table->string('Sistema_Operativo');
            $table->string('Tipo_Equipo');
            $table->string('Estatus_Equipo');
            $table->string('Manipulacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('computadoras');
    }
}
