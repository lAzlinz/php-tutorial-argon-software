<?php

$query = require 'bootstrap.php';

require 'Task.php';

$tasks = $query->selectAll(tableName:'todos_t', convertToClass:'Task');

$tasks[0]->setCompleted(true);

require 'index.view.php';