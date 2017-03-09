<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DadosAutenticacaoLinhas extends Model
{
	protected $table = "dados_autenticacao_linhas";
	
    protected $fillable = ['linha_id',
    					   'login_ata',
    					   'usuario',
    					   'senha',
    					   'num_linha',
    					   'ip',
    					   'porta',
    					   'tech_fix',
    					   ];
}
