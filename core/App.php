<?php

namespace App\Core;

use \Exception;

class App
{
    protected static $registry = array();

    public static function bind(string $label, mixed $value): void {
        static::$registry[$label] = $value;
    }

    public static function get(string $label): mixed {

        if(! array_key_exists($label, static::$registry)) {
            throw new Exception("No {$label} is bound in the container.");
        }

        return static::$registry[$label];
    }
}