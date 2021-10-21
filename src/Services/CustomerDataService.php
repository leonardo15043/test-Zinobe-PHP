<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Promise;
use GuzzleHttp\Psr7\Request;

class CustomerDataService
{
    public $client;
    static $respCustomer;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => $_ENV['ZINOBE_ENDPOINT'],
            'timeout'  => 21,
        ]);
    }

    public function getAll($search)
    {
        $objCustomer = new CustomerDataService();
        $request = new Request('GET', '5d9f39263000005d005246ae?mocky-delay=10s');
        $promise = $objCustomer->client->sendAsync($request)->then(function ($response) use ($search) {
            $data = json_decode($response->getBody()->getContents());
            self::$respCustomer = array_filter( $data->objects, function( $ref ) use ($search) {
                 return $ref->first_name == $search || $ref->email == $search;
            });
        });

        $promise->wait();

        return self::$respCustomer;
    }
}