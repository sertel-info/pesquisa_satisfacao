<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Linhas extends Model
{
    protected $table = "linhas";

    protected $fillable = ["assinante_id",
							"tecnologia",
							"ddd_local"];

    
}
