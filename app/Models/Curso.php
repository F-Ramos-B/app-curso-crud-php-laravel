<?php

namespace App\Models;

class Curso extends BaseModel
{

    protected $hidden = [];

    public function professor()
    {
        return $this->belongsTo(Usuario::class, 'professor_id', 'id');
    }

    public function alunos()
    {
        return $this->belongsToMany(Usuario::class, 'aluno_curso', 'curso_id', 'aluno_id')->withPivot('ativo', 'nota')->withTimestamps();
    }

    public function aulas()
    {
        return $this->hasMany(Aula::class, 'curso_id', 'id');
    }
}
