<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aula extends BaseModel
{
    use HasFactory;

    public function topicos()
    {
        return $this->hasMany(Topico::class, 'aula_id', 'id');
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id', 'id');
    }
}
