<?php

namespace Core\Providers;

class Route
{
    public function path($uri,$controller){

        if($_GET['action'] == $uri){
           return eval('App\Controllers\\'.$controller.';');
        }
        
    }
}