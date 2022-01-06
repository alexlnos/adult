<?php

if ($_POST['phone']) {


    $curl = curl_init();
    var_dump($_POST);

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://tracking.affscale.com/api/v2/affiliate/leads?api-key=dba66d2a7e93b245d60a9ba5e59b32e15e9b0195',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($_POST),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);
    $res = json_decode($response);
    var_dump($res);

    curl_close($curl);

    header('Location: thanks.html');

}