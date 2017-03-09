<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DadosConfiguracoesLinhas extends Model
{
    protected $table = "dados_configuracoes_linhas";

    protected $fillable = [
    					  "linha_id",
							"callerid_externo",
							"callerid_interno",
							"envio_dtmf",
							"ring_falso",
							"nat",
							"audio_p2p"
    					  ];
}
