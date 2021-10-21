<?php

namespace Core\Providers;

class Auth
{
    public function __construct()
    { 
        //Comprobamos que este inicializada una session
        if (!isset($_SESSION)) {
            session_start(); 
        }
        /*
        Con la variable time que es creada cada vez que se crea una variable de session medimos el tiempo de duracion,
        esta duracion puede ser configurada desde el archivo .env
        */
        if (isset($_SESSION['time']) && (time() - $_SESSION['time'] > $_ENV['TIME_SESSION'])) {
            session_unset(); 
            session_destroy(); 
        }
    }

    public function start($name,$value)
    {
        //Este metodo crea una variable de session y tambien la varible time para actializar la duracion de la session.
        $_SESSION[$name] = $value;
        $_SESSION['time'] = time();
    }

    public function get($name)
    {
        return $_SESSION[$name];
    }

    public function all()
    {   
        if (isset($_SESSION)) {
            return "<pre>".print_r($_SESSION)."</pre>";
        } else {
            echo "No hay variables de session inicializadas";
        }
    }

    public function destroy()
    {
        session_destroy();
        return header("Location:login");
    }

}