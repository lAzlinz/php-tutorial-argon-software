<?php

namespace App\Core;

require 'database/IQueryConverter.php';
use App\Core\Database\IQueryConverter;

class MyName implements IQueryConverter {
    public string $name;

    public static function convertAllTo(array $toBeConverted): array {
        $converted = array_map(function ($convert) {return self::convertTo($convert);}, $toBeConverted);
        return $converted;
    }

    private static function convertTo(\stdClass $toBeConverted): object {
        $name = new self();
        $name->name = $toBeConverted->name;
        return $name;
    }
}