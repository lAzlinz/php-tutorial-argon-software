<?php

require 'database/IQueryConverter.php';

class Task implements IQueryConverter {
    public string $description;
    public bool $completed = false;

    // Getters
    public function getDescription(): string {
        return $this->description;
    }

    public function getCompleted(): bool {
        return $this->completed;
    }

    // Setters
    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function setCompleted(bool $completed): void {
        $this->completed = $completed;
    }

    public static function convertAllTo(array $toBeConverted): array {
        $converted = array_map(function ($convert) {return self::convertTo($convert);}, $toBeConverted);
        return $converted;
    }

    private static function convertTo(stdClass $toBeConverted): object {
        $task = new Task();
        $task->setDescription($toBeConverted->description);
        $task->setCompleted($toBeConverted->completed);
        return $task;
    }
}