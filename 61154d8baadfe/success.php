<?php

include("PublisherApi.php");

$api = new \Aff1\PublisherApi();

$api->setProperty('api_key', 'qQKvFz4sde21gZ25');
$api->setProperty('flow_hash', '');
$api->setProperty('target_hash', '01op63wy');
$api->setProperty('country_code', request('country_code'));
$api->setPrice(5999);
$api->setProperty('first_name', custom('first_name'));
$api->setProperty('last_name', custom('last_name'));
$api->setProperty('address', request('address'));
$api->setProperty('state', custom('state'));
$api->setProperty('city', custom('city'));
$api->setProperty('zipcode', custom('zipcode'));
$api->setProperty('email', request('email'));
$api->setProperty('comment', request('comment'));
$api->setProperty('size', custom('size'));
$api->setProperty('quantity', custom('quantity'));
$api->setProperty('password', custom('password'));
$api->setProperty('language', custom('language'));
$api->setProperty('tz_name', custom('tz_name'));
$api->setProperty('call_time_frame', custom('call_time_frame'));
$api->setProperty('messenger_code', custom('messenger_code'));
$api->setProperty('sale_code', custom('sale_code'));
$api->setProperty('browser_locale', $api->getBrowserLocale());
$api->setProperty('phone2', request('phone2'));
$api->setProperty('data1', request('data1'));
$api->setProperty('data2', request('data2'));
$api->setProperty('data3', request('data3'));
$api->setProperty('data4', request('data4'));

// if (isset($_REQUEST["clickid"])) {
//     $api->setProperty("clickid", $_REQUEST["clickid"]);
// }

// if (isset($_REQUEST["gvic"])) {
//     $api->setProperty("data1", $_REQUEST["gvic"]);
// }


$response = $api->makeOrder(request('client'), request('phone'), request('data1'), request('data2'));

if (false) {
    writeLog($api);
}

$response = json_decode($response, true);

if ($response['status'] !== 'success') {
    die(var_dump($response));
}

die(showSuccessPage());

/** Functions */
function showSuccessPage()
{
    $data_params = [];

	// if (isset($_REQUEST["clickid"])) {
	// 	$data_params["clickid"] = $_REQUEST["clickid"];
	// }

	// if (isset($_REQUEST["gvic"])) {
	// 	$data_params["gvic"] = $_REQUEST["gvic"];
	// }

    header(
        'Location: success.html?' .
        http_build_query(array_merge(
            $_GET,
            array('name' => request('client'), 'phone' => $_POST['phone'],
            $data_params
        )))
    );
}

function request($field)
{
    return isset($_REQUEST[$field]) ? $_REQUEST[$field] : '';
}

function custom($field)
{
    return isset($_REQUEST['custom'], $_REQUEST['custom'][$field]) ? $_REQUEST['custom'][$field] : '';
}

function writeLog($api)
{
    $params = array_merge(
        $api->getRequestParams(),
        array(
            'date' => date("Y-m-d H:i:s"),
            'success' => (int)in_array($api->getCurlInfo()['http_code'], array(200, 202, 422)),
        )
    );

    @file_put_contents("", sprintf("%s\n", json_encode($params)), FILE_APPEND);
}