<?php

$person = [
    'age' => 31,
    'hair' => 'brown'
];

$person['name'] = 'Azriel'; // added at the end of the associative array

$animals = ['cat', 'dog'];
$animals[] = 'bird'; // added at the end of the normal array (no key needed)


require 'index.view.php';