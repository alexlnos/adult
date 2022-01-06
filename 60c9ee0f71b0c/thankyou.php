<?php
if (array_key_exists('phone', $_POST)) {
    $phoneHash = md5($_POST['phone']);
    if (!array_key_exists($phoneHash, $_COOKIE)) {
        setcookie($phoneHash);
        $url = 'https://metacpa.ru/create?' . http_build_query($_POST);
        $response = file_get_contents($url);
    }

    $json_data = json_decode($response, true);

    if ($json_data["status"] == "success") {
        header('Location: thanks/index.html');
        exit;
    } else {
        header('Location: index.php');
        exit;
    }
}
?>
<?php

?>
<h4>Request</h4>
<pre>
<?= print_r($url, 1); ?>
</pre>
<h4>Response</h4>
<pre>
<?= print_r($response, 1); ?>
</pre>