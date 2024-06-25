<?php

class Task {
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

    //
    public static function convertAllTo(array $toBeConverted) {
        $converted = array_map(['Task', 'convertTo'], $toBeConverted);
        return $converted;
    }

    private static function convertTo(stdClass $toBeConverted): Task {
        $task = new Task();
        $task->setDescription($toBeConverted->description);
        $task->setCompleted($toBeConverted->completed);
        return $task;
    }
}