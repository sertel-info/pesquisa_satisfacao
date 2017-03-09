<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfiguracoesLinhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracoes_linhas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->foreign('linha_id')
                      ->references('id')
                      ->on('linhas')
                      ->onDelete('cascade');

            $table->string('callerid_externo');
            $table->string('callerid_interno');
            $table->boolean('envio_dtmf');
            $table->boolean('ring_falso');
            $table->boolean('nat');
            $table->boolean('audio_p2p');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configuracoes_linhas');
    }
}
