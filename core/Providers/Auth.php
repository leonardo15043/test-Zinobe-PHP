<?php

namespace Core\Providers;

class Auth
{
    public function __construct()
    { 
        if(!isset($_SESSION)){
            session_start(); 
        }

        if (isset($_SESSION['time']) && (time() - $_SESSION['time'] > $_ENV['TIME_SESSION'])) {
            session_unset(); 
            session_destroy(); 
        }
    }

    public function start($name,$value){
        $_SESSION[$name] = $value;
        $_SESSION['time'] = time();
    }

    public function all(){   
        if(isset($_SESSION)){
            return "<pre>".print_r($_SESSION)."</pre>";
        }else{
            echo "No hay variables de session inicializadas";
        }
    }

    public function destroy(){
        session_destroy();
        return header("Location:login");
    }

}