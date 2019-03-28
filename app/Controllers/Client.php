<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CURLRequest;

class Client extends Controller
{
    public function index() {
        $client = \Config\Services::curlrequest();

//        $xml = new \SimpleXMLElement('<order/>');
//        $xml -> order = 'test2';
//        $xml -> quantity = 2;
//        $xml -> price = 12;

//        $json = json_encode(array("test3", 3, 13));

//        echo json_encode($xml);
//        echo $json;

        $response = $client->request('POST', 'http://localhost:8080/server/work', [
            'form_params' => [
                'order' => 'test',
                'quantity' => 1,
                'price' => 11]
//            $xml,
//            $json
        ]);

        return $response->getBody();
    }
}


