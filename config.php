<?php

return [
    'database' => [
        'name' => 'todo_db',
        'username' => 'root',
        'password' => 'mysqlAzitron2003',
        'connection' => 'mysql',
        'host' => '127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];