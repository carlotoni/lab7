<?php
namespace App\Controllers;
use CodeIgniter\Controller;
<<<<<<< HEAD
use CodeIgniter\API\ResponseTrait;

class Client extends Controller
{
    use ResponseTrait;
}
=======
use CodeIgniter\HTTP\CURLRequest;

class Client extends Controller
{
    public function index() {
        # some data, from a form perhaps
//        $order = $_POST['TEST'];
//        $quantity = $_POST[9];
//        $price = $_POST[10];

# data needs to be POSTed to the service
        $data = array("order" => "TEST", "quantity" => 9, "price" => 10);
        $data_string = json_encode($data);

        $ch = curl_init('http://localhost:8080/server/work');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string))
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

//execute post
        $result = curl_exec($ch);

//close connection
        curl_close($ch);

        return $data_string;
    }

//    public function index() {
//        $client = \Config\Services::curlrequest();
//        $response = $client->request('POST', 'localhost:8080/server/work', [
//            'user_input' => ['order' => 'test', 'quantity' => '999', 'price' => '10000']
//        ]);
//
//        return $response->getBody();
//    }
}


>>>>>>> fe8bc29fa005267855cf9705b889282c1686471f
