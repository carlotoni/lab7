<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CURLRequest;

class Client extends Controller
{
    public function index() {
        $client = \Config\Services::curlrequest();
        $response = $client->request('POST', 'localhost:8080/server/work', [
            'user_input' => ['order' => 'test', 'quantity' => '999', 'price' => '10000']
        ]);

        return $response->getBody();
    }
}


