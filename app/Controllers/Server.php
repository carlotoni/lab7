<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;

use App\Models\WorkModel;

class Server extends Controller
{
    use ResponseTrait;
<<<<<<< HEAD
=======

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
    }

    public function work() {
//        $client = \Config\Services::curlrequest();
//
//        $response = $client->request('GET', base_url(), [
//            'order' => ['name', 'quantity', 'price']
//        ]);
//
//        echo $response->getStatusCode();
//        echo $response->getBody();
//        echo $response->getHeader('Content-Type');
//        $language = $response->negotiateLanguage(['en', 'fr']);
        return json_encode($_REQUEST);
    }
>>>>>>> fe8bc29fa005267855cf9705b889282c1686471f
}