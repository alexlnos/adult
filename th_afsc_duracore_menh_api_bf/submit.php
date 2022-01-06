<?php

if ($_POST['phone']) {


    $curl = curl_init();
    var_dump($_POST);

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://monadvert.scaletrk.com/api/v2/affiliate/leads?api-key=5c7b797fc023e24f7b7de5b597202f370a16eb02',
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

    header('Location: thanks/');

}