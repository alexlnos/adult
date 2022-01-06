<?php
class ACLandingConfig {
    const API_URL = 'https://api.adcombo.com/api/v2/order/create/';
    const API_KEY = '1dc23383f2a50c8379f8a14679421fe2';
    const LOG_ENABLED = true;        // Log orders to orderlog.php
    const GEOIP_ENABLED = true;      // Enable GeoIP detection
    const DETECT_MOBILE = true;      // Enable mobile browser detection
    const API_URL_PAYMENT_REDIRECT = 'https://adc-land-api.com/payment/proxy';
    // Pixel code. Multiline PHP variable.
    const PIXEL_CODE = <<<EOV
<!-- Empty pixel code -->
EOV;
//     This is EXAMPLE of custom parameters. They will we added to order regardless of URL arguments\macros.
//     You can use them with "clean" links and add specific parameters to order. They will NOT OVERWRITE link args.
    const CUSTOM_PARAMS = array(
       'subacc' => '{clickid}',
       'subacc2' => 'sm',
       'subacc3' => '',
       'subacc4' => '',
    );
}
?>