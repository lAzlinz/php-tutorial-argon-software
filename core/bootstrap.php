<?php

App::bind('config', $config = require 'config.php');
App::bind(
    'database',
    new QueryBuilder(
        Connection::make($config['database'])
    )
);

// $app = [];

// $app['config'] = require 'config.php';

// $app['database'] = new QueryBuilder(
//     pdo:Connection::make($app['config']['database'])
// );