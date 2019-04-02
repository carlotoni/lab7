<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;

class Server extends Controller
{
    use ResponseTrait;

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
    }

    public function work() {

        static $total = 0;

        $data = $_POST;

        $content_type = $_SERVER["CONTENT_TYPE"];

        if (strcmp($content_type, "application/x-www-form-urlencoded")==0)
        {
            echo nl2br("Form Content Detected!\r");
            if(array_key_exists('price', $data) && array_key_exists('quantity', $data))
            {
                $total += $_POST["price"] * $_POST["quantity"];
            } else {
                echo nl2br("\rWarning no Price and/or quantity included!\r\r");
            }
        }
        if (strcmp($content_type, "application/json")==0)
        {
            $data = $this->request->getJSON();
            echo nl2br("JSON Content Detected!\r");
            $total += $data->price * $data->quantity;
        }
        if (strcmp($content_type, "application/xml")==0)
        {
            echo nl2br("XML Content Detected!\r");
            $data = simplexml_load_string($this->request->getBody());
        }
        if (strpos($content_type, "multipart/form-data")!== false)
        {
            echo nl2br("Multipart Form-Data Content Detected!\r");
            $data = simplexml_load_string($this->request->getBody());
            if(array_key_exists('price', $data) && array_key_exists('quantity', $data))
            {
                $total += $_POST["price"] * $_POST["quantity"];
            } else {
                echo nl2br("\rWarning no Price and/or quantity included!\r\r");
            }
        }
        echo json_encode($content_type);
        echo nl2br("\rContent\r");
        echo json_encode($data);
        echo nl2br("\r");

        $digits = 5;
        echo nl2br("\r"."Order #".rand(pow(10, $digits-1), pow(10, $digits)-1));
        echo nl2br("\r"."TOTAL PRICE: ".$total."\r\r");
    }
}