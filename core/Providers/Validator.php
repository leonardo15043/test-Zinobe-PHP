<?php

namespace Core\Providers;

class Validator
{
    //Este metodo facilita la validacion de los formulario pasandoles los la data correspondiente y un exprecion regular
    public function data($request)
    {
        $valid['state'] = true;
        $valid['exist'] = false;
        $valid['save'] = false;
        foreach ($request as $key => $value) {
            $valid[$key]['value'] = $value['value'];
            if (preg_match($value['pattern'],$value['value'])) { 
                $valid[$key]['state'] = true;
            } else {
                $valid[$key]['state'] = false;
                $valid['state'] = false;
            }
        }
        if (!$valid['state']) {
            return $valid;
        } else {
            return $valid;
        }
    }
}