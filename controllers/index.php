<?php

require 'core/Task.php';

$tasks = $app['database']->selectAll(tableName:'todos_t', convertToClass:Task::class);

require 'views/index.view.php';