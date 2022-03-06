<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topico extends BaseModel
{
    use HasFactory;

    public function aula()
    {
        return $this->belongsTo(Aula::class, 'aula_id', 'id');
    }
}
