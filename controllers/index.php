<?php

require 'core/MyName.php';

$names = $app['database']->selectAll('users_t', MyName::class);

require 'views/index.view.php';