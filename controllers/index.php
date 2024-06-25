<?php

require 'core/Task.php';

$tasks = $query->selectAll(tableName:'todos_t', convertToClass:Task::class);

require 'views/index.view.php';