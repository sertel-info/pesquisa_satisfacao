<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssinantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assinantes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            
            $table->foreign('plano')
                      ->references('id')
                      ->on('planos')
                      ->onDelete('cascade');

            $table->string('nome_fantasia');
            $table->string('razao_social');
            $table->string('cnpj')->nullable();
            $table->string('cpf')->nullable();
            $table->string('inscricao_estadual');
            $table->string('rg');
            $table->string('tipo', 2); //pf ou pj
            $table->timestamp('cliente_desde');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assinantes');
    }
}
