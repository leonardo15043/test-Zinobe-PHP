<?php

namespace Core\Providers;

class Route
{

    public function path($uri,$controller){
            
        if(isset($_GET['action']) && $_GET['action'] != ''){
                  
            switch ($_GET['action']) {
                case $uri:
                    return eval('App\Controllers\\'.$controller.';');
                    break;

                case '':
                    return eval('App\Controllers\\'.$controller.';');
                    break;
                
                default:
                    # code...
                    break;
            }

        }else{
            if( $uri == "/"){
                return eval('App\Controllers\\'.$controller.';');
            }
        }


    }

}