<?php

namespace App\Controllers;

use Core\Providers\Template;
use App\Models\User;

class UserController 
{
    public function index()
    {
        $data = User::find(1);
     
        return Template::view('user',[ 'data' => $data ]);
    }
   
}