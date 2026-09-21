<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'username' => 'admin',
                'full_name' => 'System Administrator',
                'role' => 'Administrator'
            ],
            [
                'username' => 'jdelacruz',
                'full_name' => 'Juan Dela Cruz',
                'role' => 'Cashier'
            ],
            [
                'username' => 'msantos',
                'full_name' => 'Maria Santos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'creyes',
                'full_name' => 'Carlo Reyes',
                'role' => 'Staff'
            ],
            [
                'username' => 'agarcia',
                'full_name' => 'Angela Garcia',
                'role' => 'Staff'
            ]
        ];

        return view('users', $data);
    }
}