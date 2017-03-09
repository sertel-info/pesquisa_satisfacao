<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadosFacilidadesAssinantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_facilidades_assinantes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('assinante_id')->unsigned();
            $table->foreign('assinante_id')
                      ->references('id')
                      ->on('assinantes')
                      ->onDelete('cascade');

            $table->boolean("acesso_ramais");
            $table->boolean("acesso_dids");
            $table->boolean("portal_voz");
            $table->boolean("sala_conferencia");
            $table->boolean("fila_atendimento");
            $table->boolean("ura_atendimento");
            $table->boolean("envio_sms");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dados_facilidades_assinantes');
    }
}
