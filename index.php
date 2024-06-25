<?php

try {
    $pdo = new PDO(dsn:'mysql:host=127.0.0.1;dbname=todo_db', username:'root', password:'');
} catch (PDOException $e) {
    die($e->getMessage());
}

$statement = $pdo->prepare('SELECT * FROM todos_t');
$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

$tasks[0]->completed = true;

require 'index.view.php';