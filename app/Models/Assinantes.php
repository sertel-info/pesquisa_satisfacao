<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assinantes extends Model
{
    protected $table = "assinantes";

    protected $fillable = ["plano",
    					   "nome_fantasia",
    					   "razao_social",
    					   "cnpj",
    					   "cpf",
    					   "inscricao_estadual",
    					   "rg",
    					   "tipo",
    					   "cliente_desde"];


    public function plano(){
        return $this->belongsTo("App\Models\Planos", "id", "plano");
    }
}
