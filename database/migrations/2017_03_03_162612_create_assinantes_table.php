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
            
            $table->integer('plano')->unsigned();
            $table->foreign('plano')
                      ->references('id')
                      ->on('planos')
                      ->onDelete('cascade');

            $table->string('nome_fantasia')->nullable();
            $table->string('razao_social')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('cpf')->nullable();
            $table->string('inscricao_estadual')->nullable();
            $table->string('rg')->nullable();
            $table->string('tipo', 2); //pf ou pj
            $table->timestamp('cliente_desde')->nullable();
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
