<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespostasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respostas', function (Blueprint $table) {
            $table->increments('id');

            $table->string("ramal", 10);
            $table->integer("resposta");
            $table->integer("pergunta");
            $table->integer("atendimento")->unsigned();

            $table->foreign("atendimento")
                  ->references('id')
                  ->on("atendimentos")
                  ->onDelete('cascade');

            $table->timestamp("created_at");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respostas');
    }
}
