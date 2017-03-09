<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadosFinanceirosAssinantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_financeiros_assinantes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->foreign('assinante_id')
                      ->references('id')
                      ->on('assinantes')
                      ->onDelete('cascade');


            $table->integer('dias_bloqueio');
            $table->integer('dia_vencimento');
            $table->integer('espaco_disco');
            $table->decimal('limite_credito', 10, 2);
            $table->decimal('alerta_saldo', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dados_financeiros_assinantes');
    }
}
