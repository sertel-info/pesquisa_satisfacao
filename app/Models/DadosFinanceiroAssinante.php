<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DadosFinanceiroAssinante extends Model
{
    protected $table = "dados_financeiro_assinantes";

    protected $fillable = ["assinante_id",
							"dias_bloqueio",
							"dia_vencimento",
							"espaco_disco",
							"limite_credito",
							"alerta_saldo"
						  ];

    
}
