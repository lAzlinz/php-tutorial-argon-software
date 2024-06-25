<?php

require 'functions.php';

class Task {

    protected $description;
    protected $completed = false;
    
    public function __construct(string $description) {
        $this->setDescription($description);
    }

    public function isComplete(): bool {
        return $this->completed;
    }

    public function complete() {
        $this->completed = true;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    /**
     * Generate a Task
     *
     * @param string $description The description of the task.
     * @return Task
     */
    public static function generate(string $description): Task {
        return new Task($description);
    }
}

$tasks = [
    Task::generate('Go to the store'),
    Task::generate('Clean my room'),
    Task::generate('Eat lunch')
];

$tasks[0]->complete();

require 'index.view.php';