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
//
//        $xml = new \SimpleXMLElement('<order/>');
//        $xml -> order = 'test2';
//        $xml -> quantity = 2;
//        $xml -> price = 12;
//        $xml = $xml->asXML();
//
//        $json = json_encode(array("test3", 3, 13));

//        $response = $client ->setBody($form)
//                            ->request('POST', 'http://localhost:8080/server/work');

        $response = $client->request('POST', 'http://localhost:8080/server/work', [
            'form_params' =>
                [
                    ['order' => 'test1', 'quantity' => 1, 'price' => 11]
                ]
        ]);

        echo $response->getBody();

        $response2 = $client->request('POST', 'http://localhost:8080/server/work', [
            'form_params' =>
                [
                    ['order' => 'test2', 'quantity' => 2, 'price' => 22]
                ]
        ]);

        echo $response2->getBody();

//        $data = array("name" => "Hagrid", "age" => "36");
//        $data_string = json_encode($data);
//
//        $ch = curl_init('http://localhost:8080/server/work');
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//                'Content-Type: application/json',
//                'Content-Length: ' . strlen($data_string))
//        );
//
//        $result = curl_exec($ch);
//
//        return $result;
    }
}


