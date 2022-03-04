<?php

namespace App\Constants;

class EnumTipoUsuario extends BaseEnum
{

    public static function declareValuesByCodigo(): array
    {
        return [
            ['codigo' => 1, 'nome' => 'ALUNO'],
            ['codigo' => 2, 'nome' => 'PROFESSOR'],
        ];
    }

    public static function ALUNO(): EnumObject
    {
        return static::fromNome('ALUNO');
    }

    public static function PROFESSOR(): EnumObject
    {
        return static::fromNome('PROFESSOR');
    }
}

EnumTipoUsuario::__init();
