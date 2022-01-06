<?php
if (empty( $_POST )) die("Bad request");
$data = $_POST;
$data["offer"] = 4;
$data["flow"] = 336;
$data["ip"] = $_SERVER["HTTP_CF_CONNECTING_IP"] ? $_SERVER["HTTP_CF_CONNECTING_IP"] : ( $_SERVER["HTTP_X_FORWARDED_FOR"] ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"] );
$data["ua"] = $_SERVER["HTTP_USER_AGENT"];
$data["subid"] = $_POST['sub1'];
$p = $_POST['p'];
if (isset( $data["phonecc"] )) $data["phone"] = $data["phonecc"].$data["phone"];
$data = http_build_query( $data );
$curl = curl_init( "https://offer.store/api/wm/push.json?id=109-800592ec64dae74bb520af4ffc055922" );
curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $curl, CURLOPT_TIMEOUT, 30 );
curl_setopt( $curl, CURLOPT_POST, 1 );
curl_setopt( $curl, CURLOPT_POSTFIELDS, $data );
$result = json_decode( curl_exec( $curl ), true );
curl_close( $curl );
if ( $result["url"] ) {
	header( "Location: " . $result["url"] );
} else header( "Location: thanks/" );
die();
?>