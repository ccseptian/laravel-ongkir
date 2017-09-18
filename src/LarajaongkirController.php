<?php

namespace Tian\Larajaongkir;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LarajaongkirController extends Controller
{
    public function province()
    {
        $client = new \GuzzleHttp\Client();
        $request = new \GuzzleHttp\Psr7\Request('GET', 'https://api.rajaongkir.com/starter/province', ['key' => '794e2e86f612e59a0e53bf4c78be58ed']);
        $promise = $client->sendAsync($request)->then(function ($response) {
            echo $response->getBody();
        });
        $promise->wait();
    }

    public function city()
    {
        $client = new \GuzzleHttp\Client();
        $request = new \GuzzleHttp\Psr7\Request('GET', 'https://api.rajaongkir.com/starter/city', ['key' => '794e2e86f612e59a0e53bf4c78be58ed']);
        $promise = $client->sendAsync($request)->then(function ($response) {
            echo $response->getBody();
        });
        $promise->wait();
    }

    public function cost()
    {
        $client = new \GuzzleHttp\Client();
        $request = new \GuzzleHttp\Psr7\Request(
            'GET',
            'https://api.rajaongkir.com/starter/cost',
            [
                'key' => '794e2e86f612e59a0e53bf4c78be58ed'
            ],
            [
                'origin' => 1,
                'destination' => 2,
                'weight' => 1000,
                'courier' => 'pos'
            ]);
        $promise = $client->sendAsync($request)->then(function ($response) {
            dump($response);
        });
        $promise->wait();
    }
}
