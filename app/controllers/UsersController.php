<?php

namespace App\Controllers;

use \App\Core\{App, MyName};

class UsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users_t', MyName::class);
        return view('users', compact('users')); // compact() is same as ['users' => $users]
    }

    public function store()
    {
        App::get('database')->insert(
            tableName:'users_t',
            fields: [
                'name' => $_POST['name']
            ]
        );
        
        header('Location: /users');
    }
}