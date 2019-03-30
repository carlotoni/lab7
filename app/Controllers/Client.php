<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CURLRequest;

class Client extends Controller
{
    public function index() {
        $client = \Config\Services::curlrequest();

//        $form = [
//            'order' => 'test',
//            'quantity' => 1,
//            'price' => 11
//        ];

//        $xml = new \SimpleXMLElement('<order/>');
//        $xml -> order = 'test2';
//        $xml -> quantity = 2;
//        $xml -> price = 12;
//
//        $json = json_encode(array("test3", 3, 13));

        $response = $client->request('POST', 'http://localhost:8080/server/work', [
            'form_params' => [
                'order' => 'test',
                'quantity' => 1,
                'price' => 11]
//            $form
//            $xml,
//            $json
        ]);

        return $response->getBody();
    }
}


