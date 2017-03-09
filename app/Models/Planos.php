<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planos extends Model
{
    protected $table = "planos";

    protected $fillable = ["nome",
    						"tipo",
							"valor_sms",
							"valor_fixo_local",
							"valoro_fixo_ddd",
							"valor_movel_local",
							"valor_movel_ddd",
							"valor_ddi",
							"valor_ip",
							"simultaneas",
							"descricao"
						   ];


	function assinantes(){
		return $this->hasMany("App\Models\Assinantes", "plano");
	} 
}
