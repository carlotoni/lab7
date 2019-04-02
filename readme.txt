Form Content
-req:
    $client->request('POST', 'http://localhost:8080/server/work', [
                'form_params' => ['order' => 'test', 'quantity' => 9, 'price' => 99],
            ]);
-header - content type: "application\/x-www-form-urlencoded"
-recognized by - 'form_params'
    uses fields and values

JSON Content
-req:
    $response2 = $client->request('POST', 'http://localhost:8080/server/work', [
                'json' => ['order' => 'test', 'quantity' => 8, 'price' => 88]
            ]);
-header - content type: "application\/json"
-recognized by - 'json'
    has braces {} around content with :'s

XML Content
-req:
    $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,'http://localhost:8080/server/work');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $xml->asXML());
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));

            $data = curl_exec($ch);
-header - content type: "application/xml"
-recognized by - 'xml'
    has tags <eg></eg>

Multipart Form Content
-req:
    $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL,'http://localhost:8080/server/work');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_TIMEOUT, 10);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $xml->asXML());
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: multipart/form-data'));

                $data = curl_exec($ch);
-header - content type: "multipart/form-data"
-recognized by - 'multipart/form'
    has string of --------------------------- and random numbers