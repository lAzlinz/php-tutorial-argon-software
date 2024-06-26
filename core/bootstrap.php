<?php

use App\Core\App;
use App\Core\Database\{Connection, QueryBuilder};

App::bind('config', $config = require 'config.php');
App::bind(
    'database',
    new QueryBuilder(
        Connection::make($config['database'])
    )
);

function view(string $viewName, array $data = []): string {
    extract($data);
    return require "app/views/{$viewName}.view.php";
}