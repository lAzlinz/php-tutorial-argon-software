<?php

enum Status: string {
    case Todo = 'todo';
    case Done = 'done';
    case Archived = 'archived';
}

class MyTask
{
    protected string $description;
    protected Status $status;

    private function __construct(string $description, Status $status) {
        $this->setDescription($description);
        $this->setStatus($status);
    }

    // others

    public function done(): void {
        $this->setStatus(Status::Done);
    }

    public function archive(): void {
        $this->setStatus(Status::Archived);
    }

    // Getters
    public function getDescription(): string {
        return $this->description;
    }
    public function getStatus(): Status {
        return $this->status;
    }

    // Setters
    public function setDescription(string $description): void {
        $this->description = $description;
    }
    public function setStatus(Status $status): void {
        $this->status = $status;
    }

    // Static Functions

    public static function createTask(string $description): self {
        $task = new self(description:$description, status:Status::Todo);
        return $task;
    }

    /**
     * Only get the tasks with done status.
     * @param array<self> $tasks The array of tasks.
     * @return array<self>
     */
    public static function filterDoneTasks(array $tasks): array {
        return array_filter($tasks, function (self $task) { return ! $task->getStatus() == Status::Done; });
    }

    /**
     * Only get the tasks with todo status.
     * @param array<self> $tasks The array of tasks.
     * @return array<self>
     */
    public static function filterTodoTasks(array $tasks): array {
        return array_filter($tasks, function (self $task) { return $task->getStatus() == Status::Todo; });
    }
}

$tasks = [
    'Task 1',
    'Task 2',
    'Task 3',
    'Take out the Trash'
];

$tasks = array_map(function ($taskDescription): MyTask {
    return MyTask::createTask($taskDescription);
}, $tasks);

$tasks[0]->done();
$tasks[2]->done();

$toDoTasks = MyTask::filterTodoTasks($tasks);

foreach ($toDoTasks as $task) {
    var_dump($task);
    echo '<br>';
}
