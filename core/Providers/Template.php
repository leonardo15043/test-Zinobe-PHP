<?php

namespace Core\Providers;

class Template
{
    public function view( $tmp, $data ){
        
        foreach ($data as $key => $value) {
            ${$key} = $value;
        }
        
        require_once(__DIR__.'/../../src/views/'.$tmp.".php");
    }
}