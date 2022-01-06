<?php
  $lang = '';
  if (!empty($_GET["lang"])) {
    $lang = $_GET["lang"];
  } else {
    $lang = "EN";
  }
  include_once('languages.php');
?>
<!DOCTYPE html>

<html lang="" class="no-js" dir="ltr">
<head>

  <!-- Facebook Pixel Code -->
  <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '<?php echo $_GET['sub3'];?>');
      fbq('track', 'PageView');
      fbq('track', 'Lead');
    </script>
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=<?php echo $_GET['sub3'];?>&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

  <title><?php echo $lang_arr[$lang]["title"]; ?></title>

  <!-- META -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Fonts -->

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!--[if lt IE 9]>
    <link rel="stylesheet" href="assets2/css/ie/ie8-and-down.css" />
    <script src="cdn/html5shiv.min.js"></script>
    <script src="cdn/css3-mediaqueries.min.js"></script>
  <![endif]-->

  <!-- Connect CSS files -->
  <link rel="stylesheet" href="assets2/css/fonts.css" type="text/css">
  <link rel="stylesheet" href="assets2/css/main.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" type="text/css">
  <link rel="stylesheet" href="assets2/css/font-size.min.css" type="text/css">
  <link rel="stylesheet" href="assets2/css/style.css" type="text/css">
  <link rel="stylesheet" href="assets2/css/media.css" type="text/css">

  <!-- Connect Jquery & Java files -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

  <header>
    <div class="wrap">
      <div class="flex-container">
        <a href="#" target="_blank"><img src="assets2/images/logo_s.svg" class="logo-s"></a>
        <span class="px14 dgray"> <?php echo $lang_arr[$lang]["header_text_0"]; ?>
          <!-- <span class="pnl product-about"> &quot; <span class="product-name pnbd"> Uri Care </span>  — category&quot; </span> -->
      </span>
      </div>
    </div>
  </header>

  <!-- end header -->

  <div class="block order">
    <div class="wrap">
      
      <div class="merged-blocks flex-container">
        <div class="left-block">

          <p class="pnbd px40"><span class="user-name"><?php echo $_GET['name']  ?></span>, <br> <?php echo $lang_arr[$lang]["main_text_0"]; ?> </p>
          <p class="you-order pnbd px18 green"> <?php echo $lang_arr[$lang]["main_text_1"]; ?> <span class="order-number"><?php echo rand(123456,951753); ?></span>  <?php echo $lang_arr[$lang]["main_text_2"]; ?>. </p>
          <p class="pnl"> <?php echo $lang_arr[$lang]["main_text_3"]; ?> <nobr><span class="pnbd user-phone"><?php echo $_GET['phone']  ?></span></nobr> <?php echo $lang_arr[$lang]["main_text_4"]; ?>. 
          </p>

        </div>

        <div class="right-block">
<!-- 
          <div class="product-block">
           
            <div class="flex-container">
              <img src="assets2/images/product.png" class="product-img">
              <div>
                <p class="pnl px14 gray-bg"> Twoje zamówienie: </p>
                <p class="pnl px24"><span class="product-name pnbd"> Uri Care </span> <br><span class="pnl px14 product-description"> category </span></p>
              </div>
            </div>
            <div class="miniblocks flex-container">
              <div class="info-faq-miniblock flex-container">
                <div>
                  <nobr><img src="assets2/images/faq.svg" class="faq-icon"><a href="#faq"> Najczęściej zadawane pytania </a></nobr>
                </div>
                <div>
                  <nobr><img src="assets2/images/info.svg" class="info-icon"><a href="#about"> Informacje o producencie </a></nobr>
                </div>
              </div>
            </div>
          </div> -->

        </div>

      </div>

      <div class="merged-blocks flex-container">
        <div class="additional-products left-block">
          <div class="flex-container">
            <img src="assets2/images/money-back.svg" alt="">
            <p class="pnl px14 lh140"><span class="px18 pnbd"> <?php echo $lang_arr[$lang]["main_text_5"]; ?> </span><br> <?php echo $lang_arr[$lang]["main_text_6"]; ?>  
              <!-- <span class="product-name"> &quot;Uri Care&quot; </span> -->
            </p>
          </div>
        </div>

        <div class="additional-products right-block">
          <div class="additional-products flex-container">
            <img src="assets2/images/additional.svg" alt="">
            <p class="pnl px14 lh140">
              <span class="px18 pnbd"><?php echo $lang_arr[$lang]["main_text_7"]; ?> </span>
              <br> <?php echo $lang_arr[$lang]["main_text_8"]; ?> 
              <span class="pnbd px8 upp lgray2"> WCT TEST REPORT: WT-92772323432-HF-18 </span></p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="wrap">
    <div class="block hr"></div>
  </div>

  <div class="block about" id="about">
    <div class="wrap">

      <p class="pnl px32 no-padding">
        <!-- <span class="product-name pnbd"> Uri Care </span>  — to  -->
        <?php echo $lang_arr[$lang]["main_text_9"]; ?>. </p>

      <div class="about-container flex-container">

        <div class="address">
          <img src="assets2/images/logo_b.svg" alt="" class="logo">
          <p class="px13 lh140"> Lazard inc.  <br> Grenzacherstrasse 124, floor 9-16 <br>4058 Basel, Switzerland</p>
          <p class="px13 lh140"> Phone:  <span class="about-phone"><a href="tel:+62 21 5727585"> +62 21 5727585 </a></span><br><span class="about-website"><a target="_blank" href="lazardhealthcare.com"> lazardhealthcare.com </a></span></p>
        </div>

        <div class="merged-blocks">

          <div class="foto">
            <div class="flex-container">
              <div>
                <img src="assets2/images/foto1.png" alt="">
              </div>
              <div>
                <img src="assets2/images/foto2.png" alt="">
              </div>
              <div>
                <img src="assets2/images/foto3.png" alt="">
              </div>
            </div>
          </div>
          
          <div class="advantages">
            <div class="flex-container">
              <div>
                <img src="assets2/images/ico4.svg" alt="">
                <p class="px13 lh140"><?php echo $lang_arr[$lang]["main_text_10"]; ?></p>
              </div>
              <div>
                <img src="assets2/images/ico5.svg" alt="">
                <p class="px13 lh140"><?php echo $lang_arr[$lang]["main_text_11"]; ?></p>
              </div>
              <div>
                <img src="assets2/images/ico6.svg" alt="">
                <p class="px13 lh140"><?php echo $lang_arr[$lang]["main_text_12"]; ?></p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>

  <!-- end div about -->

  <footer>

    <div class="footer-line"><img src="assets2/images/logo_s.svg" alt=""></div>

  </footer>

  <!-- end footer -->

  <script type="text/javascript" src="assets2/js/main.js"></script>

</body>
</html>
