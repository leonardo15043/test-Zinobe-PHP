<?php

namespace App\Controllers;

use Core\Providers\Template;
use Core\Providers\Auth;
use App\Models\Customer;
use App\Services\CustomerDataService;

class SiteController 
{
    public function index()
    {
        if ($_POST) {
            $customerData = new CustomerDataService;
            //Enviamos el dato de busqueda al servicio para retornar la respuesta
            $customers = $customerData::getAll($_POST['search']);
            //Si se encontraron resultados los guardamos en la entidad Customer
            if (isset($customers)) {
                foreach ($customers as $key => $value) {
                    $customer = new Customer;
                    $customer->id_user = Auth::get('id_user');
                    $customer->job_title = $customers[$key]->job_title;
                    $customer->email = $customers[$key]->email;
                    $customer->first_name = $customers[$key]->first_name;
                    $customer->last_name = $customers[$key]->last_name;
                    $customer->document = $customers[$key]->document;
                    $customer->phone_number = $customers[$key]->phone_number;
                    $customer->country = $customers[$key]->country;
                    $customer->job_title = $customers[$key]->job_title;
                    $customer->state = $customers[$key]->state;
                    $customer->city = $customers[$key]->city;
                    $customer->save();
                }
            }

            return Template::view('home',['result'=> $customers]);
        }

        return Template::view('home');
    }
}