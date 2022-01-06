<?php
const THANKS_URL = './thanks/thanks.php'; // ссылка на страницу "спасибо"
// const FLOW_TOKEN = 'flow'; // ТОКЕН ПОТОКА
const CLIENT_TOKEN = 'ZTG0MMNLMJETZDQ5ZI00ODU4LWFHY2ITZMQ4ZMEZYJJJMJVJ'; // ТОКЕН КЛИЕНТА (получается в настройках ПП)

if (isset($_POST['name']) && $_POST['phone'] != '') {
    $post = [
            // "stream_code" => FLOW_TOKEN,
            "stream_code" => $_POST['flow'],
            
			"client" => [
				'name' => $_POST['name'],
				'phone' => $_POST['phone'],
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
        $arr = (array)$response;
        $arr['name'] = $_POST['name'];
        $arr['phone'] = $_POST['phone'];
        $arr['sub3'] = $_POST['sub3'];
        $arr['lang'] = $_POST['language'];
        $url = THANKS_URL . (strrpos(THANKS_URL, '?') ? '&' : '?') .
        http_build_query($arr); // добавляем параметры
        header('Location: '. $url); // редирект
        exit;
    }
} else {
    header('Location: /'); // редирект
}
?>