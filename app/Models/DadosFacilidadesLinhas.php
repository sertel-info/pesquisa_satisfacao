<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DadosFacilidadesLinhas extends Model
{
    protected $table = 'dados_facilidades_linhas';

    protected $fillable = [  
						    "linha_id",
							"transferencia",
							"gravacao",
							"cadeado_pessoal",
							"siga_me",
							"reproduzir_erros",
							"qualidade_video",
							"caixa_postal",
							"pin",
							"num_siga_me",
							"funcionalidade"
							];

  
}
