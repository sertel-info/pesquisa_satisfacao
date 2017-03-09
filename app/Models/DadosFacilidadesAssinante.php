<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DadosFacilidadesAssinante extends Model
{
    protected $table = "dados_facilidades_assinantes";

    protected $fillable = [
    					"assinante_id",
						"acesso_ramais",
						"acesso_dids",
						"portal_voz",
						"sala_conferencia",
						"fila_atendimento",
						"ura_atendimento",
						"envio_sms"
    					  ];

	

}
