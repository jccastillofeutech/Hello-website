<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function users()
    {
        $data = [
            'users' => [
                [
                    'image' => 'crlsstne.png',
                    'username' => 'CrlsStne',
                    'name' => 'Carlos Stone',
                    'role' => 'Policeman',
                ],
                [
                    'image' => 'mantoinette.png',
                    'username' => 'MAntoinette',
                    'name' => 'Marie Antoinette',
                    'role' => 'Teacher',
                ],
                [
                    'image' => 'jdelacruz.png',
                    'username' => 'JDC',
                    'name' => 'Juan Dela Cruz',
                    'role' => 'Doctor',
                ],
                [
                    'image' => 'luccheng.png',
                    'username' => 'LucCheng',
                    'name' => 'Lucia Cheng',
                    'role' => 'Chef',
                ],
                [
                    'image' => 'rastamanov.png',
                    'username' => 'Rastaman',
                    'name' => 'Rasta Manozovski',
                    'role' => 'Fireman',
                ],
            ],
        ];
        return view('users', $data);
    }
}
