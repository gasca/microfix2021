<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->string('curp')->unique();
            $table->string('domicilio');                    
            $table->string('colonia');
            $table->string('ciudad');
            $table->string('codigo_postal');
            $table->string('telefono');
            $table->string('correo')->unique();
            $table->timestamp('correo_verificado')->nullable();
            $table->string('contrasena')->nullable();
            $table->string('tipo_usuario')->nullable();
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
        Schema::dropIfExists('usuario');
    }
}
