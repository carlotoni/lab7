<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;
use function Sodium\add;

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

//        $data = array($_REQUEST);

//        $counter = 0;
//
//        foreach ($_REQUEST as $order) {
//            echo "Order ";
//            echo $counter;
//            echo ") ";
//            echo $order;
//            echo "\n";
//            $counter++;
//        }
        return $_REQUEST;

//        return json_encode($_REQUEST);
    }
}