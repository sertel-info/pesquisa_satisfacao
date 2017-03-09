<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Respostas extends Model{
	protected $table = "respostas";

	protected $fillable = ["ramal",
							"pergunta",
							"resposta"];
}