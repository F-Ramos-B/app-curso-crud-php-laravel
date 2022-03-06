<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;

class Usuario extends BaseModel
{

    protected $hidden = ['senha'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'data_verificacao_email' => 'datetime'
    ];

    protected function setSenhaAttribute($value)
    {
        $this->attributes['senha'] = bcrypt($value);
    }

    public function cursos()
    {
        return $this->hasMany(Curso::class, 'professor_id', 'id');
    }

    public function cursosInscritos()
    {
        return $this->belongsToMany(Curso::class, 'aluno_curso', 'aluno_id', 'curso_id')->withPivot('status', 'nota')->withTimestamps();
    }
}
