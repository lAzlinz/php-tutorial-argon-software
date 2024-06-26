<?php

echo 'You typed: ' . $_POST['username'] . ' and password: ' . $_POST['password'];

$result = $app['database']->addAccount($_POST['username'], $_POST['password']);

if ($result) {
    echo 'Account Registed.'; 
} else {
    echo 'Username already exists.';
}