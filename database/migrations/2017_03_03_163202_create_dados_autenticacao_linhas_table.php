<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadosAutenticacaoLinhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_autenticacao_linhas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('linha_id')->unsigned();
            $table->foreign('linha_id')
                      ->references('id')
                      ->on('linhas')
                      ->onDelete('cascade');

            $table->string('login_ata');
            $table->string('usuario');
            $table->string('senha');
            $table->string('num_linha');
            $table->string('ip');
            $table->string('porta');
            $table->string('tech_fix');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dados_autenticacao_linhas');
    }
}
