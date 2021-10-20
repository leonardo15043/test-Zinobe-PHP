<?php

namespace Core\Providers;
use League\Plates\Engine;

class Template
{
    public function view( $tmp, $data = [] ){
        
        $template = new Engine($_ENV['TMP_PATH']);
        echo $template->render( $tmp, $data );
        
    }

}