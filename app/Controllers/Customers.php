<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function customers()
    {
        $data = [
            'customers' => [
                [
                    'image' => 'crlsstne.png',
                    'full-name' => 'Carlos Stone',
                    'email' => 'crlsstne@gmail.com',
                    'phone' => '+63 9078979533',
                ],
                [
                    'image' => 'mantoinette.png',
                    'full-name' => 'Marie Antoinette',
                    'email' => 'mantoinette@gmail.com',
                    'phone' => '+63 8984404489',
                ],
                [
                    'image' => 'jdelacruz.png',
                    'full-name' => 'Juan Dela Cruz',
                    'email' => 'juandc@gmail.com',
                    'phone' => '+63 9967889848',
                ],
                [
                    'image' => 'luccheng.png',
                    'full-name' => 'Lucia Cheng',
                    'email' => 'lucia_cheng@gmail.com',
                    'phone' => '+63 8963069804',
                ],
                [
                    'image' => 'rastamanov.png',
                    'full-name' => 'Rasta Manozovski',
                    'email' => 'rastaman@gmail.com',
                    'phone' => '+63 9894863258',
                ],
            ],
        ];

        return view('customers', $data);
    }
}
