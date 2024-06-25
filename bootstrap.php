<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';
$config = require 'config.php';

return $query = new QueryBuilder(
    pdo:Connection::make($config['database'])
);