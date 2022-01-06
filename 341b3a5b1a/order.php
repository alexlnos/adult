<?php
const THANKS_URL = 'thanks/index.html';
$url = "https://api.nutrafirst.in/affiliate/lead/add";

// POST ARRAY DATA

$postdata = array(
    
	"offer_id" => $_POST['offer'],
    "first_name" => $_POST['name'],
    "telephone" =>  $_POST['phone'],
	"pincode" =>  $_POST['pincode'],
    "sub1" => $_POST["sub1"],
    "sub2" => $_POST["sub2"],
    "sub3" => $_POST["sub3"],
	"sub4" => $_POST["sub4"],
	"sub5" => $_POST["sub5"]
);

var_dump($postdata);

$data_string = json_encode($postdata);

var_dump($data_string);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'api-key:rhlDSDuFWE2H36cb3z24pecKFBSztYBk',
    'Content-Type:application/json'
));

$output = curl_exec($ch);

var_dump($output);

header('Location: '. THANKS_URL); // редирект
        


die();
?>