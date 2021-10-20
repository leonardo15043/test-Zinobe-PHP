<?php

namespace App\Controllers;

use App\Models\User;
use Core\Providers\Template;
use Core\Providers\Validator;
use App\Services\CountrieService;

class UserController 
{
    public function index()
    {
        if($_POST){
            
            $validator = Validator::data(array(
                'email' => array(
                    'value'=> $_POST['email'],
                    'pattern' => '/\S+@\S+\.\S+/',
                ),
                'password' => array(
                    'value'=> $_POST['password'],
                    'pattern' => '/^(?=.*?[0-9])[A-Za-z\d@$!%*#?&]{6,}$/i',
                )
            ));

            $existUser = User::where("email",$_POST['email'])->Where("password",md5($_POST['password']))->first();

            if($validator['state'] === true && isset($existUser) ){
                return Template::view('home');
            }else{
                return Template::view('user/login', $validator);
            }
        }

        return Template::view('user/login');
    }

    public function register(){

        $countries = CountrieService::getAll();

        if($_POST){
            $validator = Validator::data(array(
                'name' => array(
                    'value'=> $_POST['name'],
                    'pattern' => "/^[a-z ,.'-].{3,}+$/i",
                ),
                'identification' => array(
                    'value'=> $_POST['identification'],
                    'pattern' => "/^[1-9][0-9]*$/i",
                ),
                'email' => array(
                    'value'=> $_POST['email'],
                    'pattern' => "/\S+@\S+\.\S+/",
                ),
                'password' => array(
                    'value'=> $_POST['password'],
                    'pattern' => "/^(?=.*?[0-9])[A-Za-z\d@$!%*#?&]{6,}$/i",
                )
            ));

            
    
            $existUser = User::where("identification",$_POST['identification'])
                              ->orWhere("email",$_POST['email'])->first();
           
            if($validator['state'] === true && empty($existUser) ){
                
               $user = new User;
               $user->name = $_POST['name'];
               $user->identification = $_POST['identification'];
               $user->email = $_POST['email'];
               $user->password = md5($_POST['password']);
               $user->country = $_POST['country'];
               $user->save();
    
               $validator['save'] = true;
               unset($_POST);
               $dataUser = array_merge($validator,['countries'=> json_decode($countries)]);
               return Template::view('user/registration', $dataUser );
    
            }else{;
               if($existUser){
                 $validator['exist'] = true;
               }
                $dataUser = array_merge($validator,['countries'=> json_decode($countries)]);
                return Template::view('user/registration', $dataUser );
            }
        }

        return Template::view('user/registration', ['countries'=> json_decode($countries)]);
    }

}