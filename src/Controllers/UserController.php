<?php

namespace App\Controllers;

use App\Models\User;
use Core\Providers\Template;

class UserController 
{
    public function index()
    {
        $data = User::find(1);
        return Template::view('user',[ 'data' => $data ]);
    }
}