<?php

const THANKS_URL = 'thanks/index.html';
const ERROR_URL = 'index.php';

if ($_SERVER["REQUEST_METHOD"]=="POST") {

    $post = [
        "stream_code" => $_POST['flow'],
        'firstname' => $_POST['firstname'],
        'phone' => $_POST['phone'],
        'goal_id' => $_POST['goal_id'],
        'aff_click_id' => $_POST['aff_click_id'],
        'sub_id2' => $_POST["sub_id2"],
        'sub_id3' => $_POST["sub_id3"],
        'sub_id4' => $_POST["sub_id4"],
        'sub_id5' => $_POST["sub_id5"],
        'aff_param1' => $_POST["aff_param1"],
        'aff_param2' => $_POST["aff_param2"],
        'aff_param3' => $_POST["aff_param3"],
        'aff_param4' => $_POST["aff_param4"],
        'aff_param5' => $_POST["aff_param5"]
    ];

    $headers = [
        'Content-Type: application/json',
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://tracking85020.com/api/v2/affiliate/leads?api-key=c072fcb58458a4e5ffcf98727479e851efc33978");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_ENCODING, "");
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120);
    curl_setopt($ch, CURLOPT_TIMEOUT, 120);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    
    $response = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    // var_dump($response);

    if ($httpcode != 200) {
        var_dump($response);
    }
    if ($httpcode == 200) {
        header('Location: '. THANKS_URL);
        exit;
    }    

}
?>