<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;

class Usuario extends BaseModel
{

    protected $table = 'usuarios';

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
        return $this->hasMany(Curso::class, 'usuario_id', 'id');
    }
}
