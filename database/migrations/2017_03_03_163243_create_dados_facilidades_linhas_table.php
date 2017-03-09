<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadosFacilidadesLinhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_facilidades_linhas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('linha_id')->unsigned();
            $table->foreign('linha_id')
                      ->references('id')
                      ->on('linhas')
                      ->onDelete('cascade');

            $table->boolean("transferencia");
            $table->boolean("gravacao");
            $table->boolean("cadeado_pessoal");
            $table->boolean("siga_me");
            $table->boolean("reproduzir_erros");
            $table->boolean("qualidade_video");
            $table->boolean("caixa_postal");
            $table->string("pin")->nullable();
            $table->string("num_siga_me")->nullable();
            $table->string("funcionalidade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dados_facilidades_linhas');
    }
}
