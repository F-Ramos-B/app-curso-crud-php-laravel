<?php

namespace App\Utils;

use Illuminate\Support\Str;

class EntityOrderedUUIDGenerator
{

    public static function generate()
    {
        return EntityOrderedUUIDGenerator::simpleOrderedUUID();
    }

    private static function upperNoDashesOrderedUUID(): string
    {
        $orderedUuid = Str::orderedUuid()->getHex();
        return Str::upper($orderedUuid);
    }

    private static function simpleOrderedUUID(): string
    {
        return Str::orderedUuid();
    }
}
