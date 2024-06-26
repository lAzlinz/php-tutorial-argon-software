<?php

namespace App\Core\Database;

interface IQueryConverter {
    public static function convertAllTo(array $toBeConverted): array;
}
