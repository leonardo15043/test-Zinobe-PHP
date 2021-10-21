<?php

namespace Core\Providers;
use League\Plates\Engine;

class Template
{
    //Este metodo nos permite usar plantillas y enviarle parametros al metodo render desde el controlador
    public function view($tmp,$data = [])
    { 
        $template = new Engine($_ENV['TMP_PATH']);
        echo $template->render( $tmp, $data );     
    }
}