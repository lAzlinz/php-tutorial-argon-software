<?php

require 'core/Router.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
$config = require 'config.php';

return $query = new QueryBuilder(
    pdo:Connection::make($config['database'])
);