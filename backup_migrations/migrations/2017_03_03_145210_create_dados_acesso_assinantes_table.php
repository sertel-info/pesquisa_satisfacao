<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadosAcessoAssinantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_acesso_assinantes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->foreign('assinante_id')
                      ->references('id')
                      ->on('assinantes')
                      ->onDelete('cascade');

            $table->string('usuario');
            $table->string('senha');
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dados_acesso_assinantes');
    }
}
