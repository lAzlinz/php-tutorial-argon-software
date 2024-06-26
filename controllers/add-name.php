<?php

$app['database']->insert(
    tableName:'users_t',
    fields: [
        'name' => $_POST['name']
    ]
);

header('Location: /');