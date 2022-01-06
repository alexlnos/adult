<?php
const THANKS_URL = 'thanks/index.html';
const CLIENT_TOKEN = 'YZE5YZUWMZMTYTIZNI00NDYZLTG3MWMTMGQZNTCWZDQ4MGQX';

if (isset($_POST['name']) && $_POST['phone'] != '') {
    $post = [
            "stream_code" => $_POST['flow'],
			"client" => [
				'name' => $_POST['name'],
				'phone' => $_POST['phone'],
                'address' => $_POST['address'],
                'postcode'  => $_POST['postcode'],                
			],
			'sub1' => $_POST["sub1"],
			'sub2' => $_POST["sub2"],
			'sub3' => $_POST["sub3"],
			'sub4' => $_POST["sub4"],
			'sub5' => $_POST["sub5"]
    ];
    // отправляем заявку
    $ch = curl_init('https://affiliate.drcash.sh/v1/order');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Bearer '.CLIENT_TOKEN));
    $response = json_decode(curl_exec($ch));
    curl_close($ch);
    if (isset($response->uuid)) {
        header('Location: '. THANKS_URL); // редирект
        exit;
    }
} else {
    header('Location: /'); // редирект
}
?>