<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarifacaoAssinantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('tipo', 10); //pós ou pré
            $table->decimal('valor_sms', 10, 2);
            $table->decimal('valor_minuto_fixo_local', 10, 2);
            $table->decimal('valor_minuto_fixo_ddd', 10, 2);
            $table->decimal('valor_minuto_movel_local', 10, 2);
            $table->decimal('valor_minuto_movel_ddd', 10, 2);
            $table->string('modo_tarifacao_fixo', 11);
            $table->string('modo_tarifacao_movel', 11); 
            $table->string('modo_tarifacao_ddi', 11);
            $table->integer('simultaneas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planos');
    }
}
