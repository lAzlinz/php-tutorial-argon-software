<?php

$person = [
    'age' => 31,
    'hair' => 'brown'
];

$person['name'] = 'Azriel'; // added at the end of the associative array

echo var_dump($person); // To echo non-primitive variables

require 'index.view.php';