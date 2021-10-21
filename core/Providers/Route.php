<?php

namespace Core\Providers;

use Core\Providers\Auth;
use App\Controllers\SiteController;

class Route
{
    public function path($uri,$controller,$enable_session){

        $session = new Auth();

        if(isset($_GET['action']) && $_GET['action'] != ''){
       
            if(empty($_SESSION['time']) && $enable_session === true && $_GET['action'] == $uri){  
                return header("Location:login");
            }
            if(isset($_SESSION['time']) && $enable_session === false && $_GET['action'] == $uri){ 
                return header("Location:home");
            }else if($_GET['action'] == $uri){
                return eval('App\Controllers\\'.$controller.';');
            }   
    
        }else{
            if( $uri == "/"){
                return header("Location:login");
            }
        }      
              
    }

}