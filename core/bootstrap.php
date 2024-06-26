<?php

App::bind('config', $config = require 'config.php');
App::bind(
    'database',
    new QueryBuilder(
        Connection::make($config['database'])
    )
);

function view(string $viewName, array $data = null): string {
    if (! is_null($data)) {
        extract($data);
    }
    return require "views/{$viewName}.view.php";
}