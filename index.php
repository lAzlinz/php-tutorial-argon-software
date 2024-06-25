<?php

$person = [
    'age' => 31,
    'hair' => 'brown'
];

$person['name'] = 'Azriel'; // added at the end of the associative array

unset($person['name']); // remove an element of an associative array via its key

require 'index.view.php';