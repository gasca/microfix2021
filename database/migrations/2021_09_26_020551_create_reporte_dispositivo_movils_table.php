<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReporteDispositivoMovilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte_dispositivo_movils', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('usuario');

            $table->unsignedBigInteger('dispositivom_id');
            $table->foreign('dispositivom_id')->references('id')->on('dispositivo_movils');

    

            $table->string('Descripcion');
            $table->string('Recepcion');
            $table->string('Recibio');
            $table->string('Entrego');
            $table->string('Estatus');
            $table->string('Observaciones_Microfix');
            $table->string('Observaciones_Cliente');
            $table->string('imagen');
            $table->date('Fecha_Entrada');
            $table->date('Fecha_Salida');
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
        Schema::dropIfExists('reporte_dispositivo_movils');
    }
}
