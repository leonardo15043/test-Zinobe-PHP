<?php

namespace App\Services;

use GuzzleHttp\Client;

class CountrieService
{
    public $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => $_ENV['PINTFUL_ENDPOINT'],
            'timeout'  => 2.0,
        ]);
    }

    public function getAll()
    {
        $obj = new CountrieService();
        $response = $obj->client->request('GET', '/countries');
        return $response->getBody()->getContents();
    }   
}