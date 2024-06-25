<?php

$person = [
    'age' => 31,
    'hair' => 'brown'
];

$person['name'] = 'Azriel'; // added at the end of the associative array

echo '<pre>';
echo var_dump($person); // To echo non-primitive variables
echo '</pre>';

require 'index.view.php';