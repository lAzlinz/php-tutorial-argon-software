<?php

require 'core/Task.php';

$tasks = $app['database']->selectAll('todos_t', convertToClass:Task::class);

require 'views/index.view.php';