<?php

namespace App\Constants;

use JsonSerializable;

class EnumObject implements JsonSerializable
{

    private int $codigo;
    private string $nome;

    public function __construct(int $codigo, string $nome) {
        $this->codigo = $codigo;
        $this->nome = $nome;
    }

    public function getCodigo(): int {
        return $this->codigo;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function jsonSerialize(): mixed
    {
        return get_object_vars($this);
    }

}
