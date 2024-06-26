<?php

$router->get('', 'PagesController@home');
$router->get('home', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('about/culture', 'PagesController@aboutCulture');
$router->get('contact', 'PagesController@contact');

$router->post('users', 'UsersController@store');
$router->get('users', 'UsersController@index');