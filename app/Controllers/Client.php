<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CURLRequest;

class Client extends Controller
{
    public function index() {
        $client = \Config\Services::curlrequest();

        $xml = new \SimpleXMLElement('<order/>');
        $xml -> order = 'test2';
        $xml -> quantity = 2;
        $xml -> price = 12;

//        TODO comment this section to test JSON
        $response = $client->request('POST', 'http://localhost:8080/server/work', [
            'form_params' => ['order' => 'test', 'quantity' => 9, 'price' => 99],
        ]);
        echo $response->getBody();

//        TODO Uncomment this section and comment the previous one to test JSON
//        $response2 = $client->request('POST', 'http://localhost:8080/server/work', [
//            'json' => ['order' => 'test', 'quantity' => 8, 'price' => 88]
//        ]);
//        echo $response2->getBody();

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,'http://localhost:8080/server/work');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xml->asXML());
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));

        $data = curl_exec($ch);
        echo $data;

//        echo $response1->getBody();

//        $response1 = $client->request('POST', 'http://localhost:8080/server/work', [
//            'headers' => [
//                'User-Agent' => 'testing/1.0',
//                'Accept'     => 'application/json',
//                'Content-type'=> 'application/json',
//            ]
//        ]);

//
//        $response2 = $client->request('POST', 'http://localhost:8080/server/work', [
//            'form_params' => $form
//        ]);
//
//        echo $response2->getBody();
//
//        $response3 = $client->request('POST', 'http://localhost:8080/server/work', [
//            'xml' => $xml
//        ]);
//
//        echo $response3->getBody();
//
//        $response4 = $client->request('POST', 'http://localhost:8080/server/work', [
//            'json' => $json
//        ]);
//
//        echo $response4->getBody();
    }
}


