<?php 
const THANKS_URL = 'thanks/index.html';
const CLIENT_TOKEN = 'NMYYNJRKMWUTYJA0YS00YZKWLWFJZMUTYZIWNJIWZJLHYTCZ';

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $post = [
            "stream_code" => $_POST['flow'],
			"client" => [
				'name' => $_POST['name'],
				'phone' => $_POST['phone']
			],
			'sub1' => $_POST["sub1"],
			'sub2' => $_POST["sub2"],
			'sub3' => $_POST["sub3"],
			'sub4' => $_POST["sub4"],
			'sub5' => $_POST["sub5"]
    ];

    $headers = [
        'Content-Type: application/json',
        'Authorization: Bearer ' . CLIENT_TOKEN
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://order.drcash.sh/v1/order");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $body = substr($response, $header_size);
    curl_close ($ch);   

    if ($httpcode != 200) {
        header('Location: '. ERROR_URL);    
    }
    if ($httpcode == 200) {
        header('Location: '. THANKS_URL);
    }    

}
?>