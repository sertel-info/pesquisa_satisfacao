<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanosTable extends Migration
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
            $table->string('nome', 50); //pós ou pré
            $table->string('descricao', 255)->nullable(); //pós ou pré
            $table->decimal('valor_sms', 10, 2)->default(0.00);
            $table->decimal('valor_fixo_local', 10, 2)->default(0.00);
            $table->decimal('valor_fixo_ddd', 10, 2)->default(0.00);
            $table->decimal('valor_movel_local', 10, 2)->default(0.00);
            $table->decimal('valor_movel_ddd', 10, 2)->default(0.00);
            $table->decimal('valor_ddi', 10, 2)->default(0.00);
            $table->decimal('valor_ip', 10, 2)->default(0.00);
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
