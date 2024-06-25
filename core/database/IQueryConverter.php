<?php

interface IQueryConverter {
    public static function convertAllTo(array $toBeConverted): array;
}
