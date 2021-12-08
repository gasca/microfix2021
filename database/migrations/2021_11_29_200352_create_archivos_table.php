<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArchivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('Usuario')
            ->onUpdate('cascade')
            ->onDelete('cascade') //poner el valor en nulo si se elimina usuario set null 11
            ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('archivos_usuario_id_foreign');
        Schema::dropIfExists('archivos');
    }
}
