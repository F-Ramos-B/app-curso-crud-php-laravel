<?php

namespace App\Constants;

use JsonSerializable;

class EnumObject implements JsonSerializable
{

    private int $codigo;
    private string $descricao;

    public function __construct(int $codigo, string $descricao) {
        $this->codigo = $codigo;
        $this->descricao = $descricao;
    }

    public function getCodigo(): int {
        return $this->codigo;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function jsonSerialize(): mixed
    {
        return get_object_vars($this);
    }

}
