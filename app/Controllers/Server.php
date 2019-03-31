<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;
use RecursiveArrayIterator;
use RecursiveIteratorIterator;

class Server extends Controller
{
    use ResponseTrait;

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
    }

    public function work() {

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
//
//        $json = array(
//            'order'=>'test3',
//            'quantity'=>3,
//            'price'=>13
//        );
//
//        $form = json_encode($form);
//        $xml = json_encode($xml);
//        $json = json_encode($json);

        $json = $this->request->getJSON(true);

        echo $json;

//        $json = json_encode($data);
//
//        $jsonIterator = new RecursiveIteratorIterator(
//            new RecursiveArrayIterator(json_decode($json, TRUE)),
//            RecursiveIteratorIterator::SELF_FIRST);
//
//        foreach ($jsonIterator as $key => $val) {
//            if(is_array($val)) {
//                echo "$key:\n";
//            } else {
//                echo "$key => $val\n";
//            }
//        }
    }
}