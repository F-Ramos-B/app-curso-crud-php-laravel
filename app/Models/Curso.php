<?php

namespace App\Models;

class Curso extends BaseModel
{

    protected $table = 'cursos';

    protected $hidden = [];

    public function professor()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id', 'id');
    }
}
