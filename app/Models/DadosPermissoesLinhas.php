<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DadosPermissoesLinhas extends Model
{
    protected $table = "dados_permissoes_linhas";

    protected $fillable = [
    						"ligacao_fixo",
							"ligacao_internacional",
							"ligacao_movel",
							"ligacao_ip",
							"status"
						  ];


}
