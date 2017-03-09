<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DadosAcessoAssinante extends Model
{
    protected $table = "dados_acesso_assinantes";

    protected $fillable = ["assinante_id",
    					   "usuario",
    					   "senha",
    					   "status",
    					  ];
}
