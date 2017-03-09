<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadosContatoAssinantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_contato_assinantes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->foreign('assinante_id')
                      ->references('id')
                      ->on('assinantes')
                      ->onDelete('cascade');
                      
            $table->string('cep', 10);
            $table->string('endereco');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado', 2);
            $table->string('pais');
            $table->string('email');
            $table->string('site');
            $table->string('telefone', 20);
            $table->string('fax');
            $table->string('celular', 20);

        });



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dados_contato_assinantes');
    }
}
