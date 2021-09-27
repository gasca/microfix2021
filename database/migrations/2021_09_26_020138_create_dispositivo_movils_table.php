<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDispositivoMovilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispositivo_movils', function (Blueprint $table) {
            $table->id();
            $table->string('Marca');
            $table->string('Modelo');
            $table->string('SN');
            $table->string('Memoria_Ram');
            $table->string('Almacenamiento');
            $table->string('Sistema_Operativo');
            $table->string('Tipo_Equipo'); /* Tablet. ipad, smarpthone, celular*/
            $table->string('Estatus_Equipo'); /*nuevo, usado */
            $table->string('Manipulacion'); /*manipulacion por tecnico/ ninguna */
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
        Schema::dropIfExists('dispositivo_movils');
    }
}
