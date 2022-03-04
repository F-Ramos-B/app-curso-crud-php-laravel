<?php

namespace App\Constants;

use Illuminate\Support\Collection;

abstract class BaseEnum
{

    private static Collection $valuesByCodigo;
    private static Collection $valuesByNome;

    public static abstract function declareValuesByCodigo(): array;

    public static function __init(): void
    {
        $values = collect(static::declareValuesByCodigo());
        static::$valuesByCodigo = $values->keyBy('codigo');
        static::$valuesByNome = $values->keyBy('nome');
    }

    public static function fromCodigo(int $codigo): EnumObject
    {
        $enumElement = static::$valuesByCodigo->get($codigo);
        return static::toEnumObject($enumElement);
    }

    public static function fromNome(string $nome): EnumObject
    {
        $enumElement = static::$valuesByNome->get($nome);
        return static::toEnumObject($enumElement);
    }

    private static function toEnumObject($enumElement): EnumObject
    {
        return new EnumObject($enumElement['codigo'], $enumElement['nome']);
    }

    public static function valuesByCodigo(): Collection
    {
        return static::$valuesByCodigo;
    }

    public static function valuesByNome(): Collection
    {
        return static::$valuesByNome;
    }
}
