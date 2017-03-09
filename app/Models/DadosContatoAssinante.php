<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DadosContatoAssinante extends Model
{
    protected $table = "dados_contato_assinantes";

    protected $fillable = [
	    					"assinante_id",
							"cep",
							"endereco",
							"complemento",
							"bairro",
							"cidade",
							"estado",
							"pais",
							"email",
							"site",
							"telefone",
							"fax",
							"celular"
	    					];


}
