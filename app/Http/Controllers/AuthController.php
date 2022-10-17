<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me() {
    return
        [
            'NIS'  => 3103120132,
            'Name' => 'Martryatus Sofia',
            'Phone' => '081226035216',
            'Class' => 'XII RPL 4'
        ];
    }
}
