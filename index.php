<?php

require 'Task.php';
require 'functions.php';

$pdo = connectToDB();

$tasks = fetchAllTasks(pdo:$pdo);

$tasks[0]->completed = true;

require 'index.view.php';