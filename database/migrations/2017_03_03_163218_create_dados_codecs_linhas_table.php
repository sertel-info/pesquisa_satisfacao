<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadosCodecsLinhasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_codecs_linhas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('linha_id')->unsigned();
            $table->foreign('linha_id')
                      ->references('id')
                      ->on('linhas')
                      ->onDelete('cascade');
                      
            $table->boolean('g729');
            $table->boolean('ulaw');
            $table->boolean('alaw');
            $table->boolean('g726');
            $table->boolean('g723');
            $table->boolean('gsm');
            $table->boolean('speex');
            $table->boolean('slin');
            $table->boolean('h261');
            $table->boolean('h263');
            $table->boolean('h263p');
            $table->boolean('ilbc');
            $table->boolean('g722');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dados_codecs_linhas');
    }
}
