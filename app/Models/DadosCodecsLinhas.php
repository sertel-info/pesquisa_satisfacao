<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DadosCodecsLinhas extends Model
{
    protected $table = "dados_codecs_linas";

    protected $fillable = ["linha_id",
							"g729",
							"ulaw",
							"alaw",
							"g726",
							"g723",
							"gsm",
							"speex",
							"slin",
							"h261",
							"h263",
							"h263p",
							"ilbc",
							"g722"
							];
}
