<?php

require 'core/MyName.php';

$names = App::get('database')->selectAll('users_t', MyName::class);

require 'views/index.view.php';