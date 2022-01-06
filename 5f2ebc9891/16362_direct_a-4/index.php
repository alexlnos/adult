<!DOCTYPE html>
<html lang="de"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Penirum</title>
	<link href="assets/hhh.css" rel="stylesheet"/>

 <link href="http://penirum.perfectgoods.trade/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <!-- INTH_SNIPPET_TOP -->
</head>
<body>
    <meta name="viewport" content="width=device-width,initial-scale=1">
  
	<header class="page-header">
      <div class="page-header__wrapper">
        <h2 class="page-header__title">
           告别陽痿早泄、腎虛腎寒、射精快疲軟無力;刺激性活動並增加耐力,讓你的陰莖更大、更粗、更持久!中醫獨家秘制配方，讓你的伴侶尖叫。
        </h2>
      </div>
    </header>    <section class="casanova">
      <div class="casanova__wrapper">
        <p class="casanova__logo" style="font-size: 3.6em; color: #ffd800; font-weight: bold;">中醫世家秘製鹿鞭膏</p>
        <p class="casanova__image">
          <img src="assets/gif7.gif" alt="gif" width="289" height="228">
          <img class="casanova__product" src="assets/penirum.png" alt="product" width="122" height="202">
        </p>      </div>
    </section>    <section class="casanova-description">
      <div class="casanova-description__wrapper">
        <h2 class="visually-hidden"></h2>
        <p class="casanova-description__title">
       純植物提取，名貴藥材熬製，從根本上調理體質，激活雄性激素，增強性慾。 <span>中醫世家-鹿鞭膏</span>
        </p>
        <ul class="casanova-description__list">
          <li class="casanova-description__item">
            在幾分鐘內即可勃起，享受從未有過的的性高潮。
          </li>
          <li class="casanova-description__item">
            對早洩說不：您將享受陰道和肛交。
          </li>
          <li class="casanova-description__item">
            增強耐力：您可以輕鬆地一次與幾個女孩發生性關係。
          </li>
          <li class="casanova-description__item">
           改善陰莖血液循環，改善排尿不暢，還你健康良好的前列腺。
          </li>
          <li class="casanova-description__item">
           養精蓄精，提高射精量和射精頻率。
          </li>
        </ul>
      </div>
    </section>    <section class="advantages">
      <div class="advantages__wrapper">
        <h2 class="advantages__title">
          別看色情片了，現在開始做愛。
        </h2>
        <img class="advantages__image" src="assets/gif8.gif" alt="gif" width="309" height="163">
        <h2 class="advantages__list-title">
         對，你會喜歡的。
        </h2>
        <ul class="advantages__list">
          <li class="advantages__item">
           無論年齡大小，這都是一種全新且強大的性能力產品。
          </li>
          <li class="advantages__item">
            長時間的勃起，讓您充分享受性愛，和早洩說再見。
          </li>
          <li class="advantages__item">
            純天然沒有副作用。產品成分不會引起身體不適。
          </li>
        </ul>
      </div>
    </section>    <section class="if-you-think">
      <div class="if-you-think__wrapper">
        <p class="if-you-think__text">
          如果您想延長做愛時間，增大、增粗陰莖，告別腎虛、陽痿、早洩！立即訂購 <span>中醫世家-鹿鞭膏</span>.
          <img class="if-you-think__image" src="assets/penirum.png" alt="product" width="100" height="auto">
        </p>
      </div>
    </section>    <section class="order-form">
      <div class="order-form__wrapper">
        <h2 style="text-decoration:line-through">
         2796 TWD
        </h2>
        <h1 style="    margin: 0;color: red;">
         1398 TWD
        </h1>		
        <div class="order-form__price">
          <div class="price-container">
            <span class="old-price oldPriceAndLabelForLandingInfoApi price_old"></span>
            <span class="new-price priceAndLabelForLandingInfoApi price_main"></span>
          </div>
        </div>
        <form class="form intlTelInput orderForm     "  method="post" id="order-form0">
          <input type="hidden" name="sub1" value="{clickid}">
	
          
          <label class="order-form__label name_helper" for="name"></label>
          <input class="order-form__input not_error" type="text" name="name" id="name" placeholder="姓名" required>
          <label class="order-form__label phone_helper" for="phone"></label>
<input class="order-form__input phone" type="tel" name="phone" id="phone" placeholder="电话"   onkeyup="this.value=this.value.replace(/\s/,'')" minlength="5" required maxlength="17">          <button class="btn order-form__btn" type="submit" name="button">立即訂購</button>

					</form>
      </div>
    </section>


   <script>console.clear()</script>
   
   <?php
if (!function_exists('curl_version')) {
    echo 'Curl is not installed';
}

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    // Required params
    $token = 'OWUWMTEYMJETNMMZNC00ZGUYLTK0YZQTNGI0ZGRJYJAXNTRL';
    $stream_code = 'edzqg';

    // Fields to send
    $post_fields = [
        'stream_code'   => $stream_code,    // required
        'client'        => [
            'phone'     => $_POST['phone'], // required
            'name'      => $_POST['name'],
            // 'surname'   => $_POST['surname'],
            // 'email'     => $_POST['email'],
            // 'address'   => $_POST['address'],
            // 'ip'        => $_POST['ip'],
            // 'country'   => $_POST['country'],
            // 'city'      => $_POST['city'],
            // 'postcode'  => $_POST['postcode'],
        ],
        'sub1'      => $_POST['sub1'],
        'sub2'      => $_GET['{trafficsource}'],
        'sub3'      => $_GET['sub3'],
        'sub4'      => $_GET['sub4'],
        'sub5'      => $_GET['sub5'],
    ];

    $headers = [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $token
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://order.drcash.sh/v1/order");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_fields));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, true);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $body = substr($response, $header_size);

    curl_close ($ch);

    if ($httpcode != 200) {
        echo 'Error: ' . $httpcode;
        echo '<br>';
        echo $response;
    }
    if ($httpcode == 200) {
        echo '<script language="javascript" type="text/javascript">
            window.location.href = "thanks/";
        </script>';
    }
}
?>

<script>
    if (typeof(window.orientation)=="undefined")
    {
        var o = document.createElement("img");
        o.src='https://news4blog.site/click.php?event9=0';
    }
    else
    {
        var o = document.createElement("img");
        o.src='https://news4blog.site/click.php?event9=1';
    }
</script>
<script type="text/javascript">
var scroll = 0;
window.onscroll = function(){
if( scroll != 1 ){
    scroll = 1;
    var o = document.createElement("img");
    o.src = "https://news4blog.site/click.php?event8=1";
    }
}
</script>
<script>
function pushToTrackerViaImage(){
    var pushURL = 'https://news4blog.site/click.php?event7=1';
    var img = document.createElement('img');
    img.src=pushURL;
    img.style.display='none';
    document.body.appendChild( img );
}
function pushAfterTimeout(timeout){
    setTimeout(pushToTrackerViaImage, timeout*1000);
}
var TIMEOUT_IN_SECONDS = 30;
pushAfterTimeout(TIMEOUT_IN_SECONDS);
</script>
<script>
function pushToTrackerViaImage(){
    var pushURL = 'https://news4blog.site/click.php?event6=1';
    var img = document.createElement('img');
    img.src=pushURL;
    img.style.display='none';
    document.body.appendChild( img );
}
function pushAfterTimeout(timeout){
    setTimeout(pushToTrackerViaImage, timeout*1000);
}
var TIMEOUT_IN_SECONDS = 3;
pushAfterTimeout(TIMEOUT_IN_SECONDS);
</script>

</body></html>