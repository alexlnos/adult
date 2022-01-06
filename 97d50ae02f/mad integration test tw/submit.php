<?php

if ($_POST['phone']) {


    $curl = curl_init();
    var_dump($_POST);

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://monadvert.scaletrk.com/api/v2/affiliate/leads?api-key=da32ee1f99505046cb4a1f5849e4c564a71fb90c',
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