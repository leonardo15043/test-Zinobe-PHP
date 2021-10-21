<?php

namespace App\Controllers;

use Core\Providers\Template;

class SiteController 
{
    public function index()
    {
        return Template::view('home');
    }

}