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

<html dir="rtl" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title><?php echo $lang_arr[$lang]["title"]; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700&subset=cyrillic" rel="stylesheet">
    <link href="assets/thanks.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '<?php echo $_GET['fbpix'];?>');
        fbq('track', 'PageView');
        fbq('track', 'Lead');
    </script>
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=<?php echo $_GET['fbpix'];?>&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
    <script>
        function myDate(dig) {
            var d = new Date(new Date().getTime() - dig * 24 * 60 * 60 * 1000);
            var day = d.getDate();
            var month = d.getMonth() + 1;
            var year = d.getFullYear();
            if (day < 10) {
                day = "0" + day;
            };
            if (month < 10) {
                month = "0" + month;
            };
            document.write(day + "." + month + "." + year);
        }
    </script>
</head>

<body>
    <div id="preloader">
        <div class="load">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>


    <header class="header">
       <div class="container">
           <div class="row">
               <div class="logo"><?php echo $_GET["product_name"]; ?></div>
               <span class="btn-text"><?php echo $lang_arr[$lang]["btn_text"]; ?></span>
           </div>
       </div>
    </header>
    <section class="title section">
         <div class="container">
            <h1 class="title__plank" style="display: block;"><?php echo $lang_arr[$lang]["sale_text_1"]; ?> 
                <b class="sale black">21</b> <?php echo $lang_arr[$lang]["sale_text_2"]; ?> 
                <b class="sale black">23</b> <?php echo $lang_arr[$lang]["sale_text_3"]; ?> 
                <b class="sale black">100</b> <?php echo $lang_arr[$lang]["sale_text_4"]; ?> 
                <b class="sale black">5</b> <?php echo $lang_arr[$lang]["sale_text_5"]; ?> 
                <b class="sale black">50%</b>!
            </h1>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h2 class="section__title center">
                <span class="header__info-name accent"><?php echo $_GET["name"]; ?></span>, <?php echo $lang_arr[$lang]["thanks_text_1"]; ?>
            </h2>
            <p class="section__subtitle center">
                <?php echo $lang_arr[$lang]["thanks_text_2"]; ?> 
                <?php echo $_GET["product_name"]; ?> 
                <?php echo $lang_arr[$lang]["thanks_text_3"]; ?> 
            </p>
			<div class="wr-pr">
            <div class="congrat__product">
            <div class="congrat__afisha">
              <span class="sale" style="background: url(&#39;assets/sale2.png&#39;) center center/cover no-repeat;">-50%</span>
              <img src="../assets/product.png">
            </div>
          </div>
		  </div>
            <p><?php echo $lang_arr[$lang]["contact_text_1"]; ?> 
                <b><?php echo $_GET["product_name"]; ?></b> 
                <?php echo $lang_arr[$lang]["contact_text_2"]; ?> 
            </p>

        </div>
    </section>

    <footer class="footer">
        <div class="container">

        </div>
    </footer>

    <!-- <div class="float">
        <div class="float__wrapper">
            <button type="button" class="close"></button>
            <div class="float__pic"><img src="img/count.png"></div>
            <div class="float__body">
                <span class="float__name">Carmen</span> ha comprado con un <span
                    class="float__sale">15%</span>!
                <br>Disponibilidad:
                <span class="pack">0</span> unidades.
            </div>
        </div>
    </div> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        var cnt = 0
        var float = $('.float');
        var title = $('.title__plank');
        var titleSecrtion = $('.title');

        title.slideUp();
            setTimeout(function () {
                cnt = 2;
            title.delay(1500).slideDown(1000);
            $('.btn-text').delay(3000).removeClass('hidden');

            }, 1500);


        $(window).on('load', function () {
            var $preloader = $('#preloader'),
                $spinner = $preloader.find('.load');
            $spinner.fadeOut();
            $preloader.fadeOut(3000).delay(1500);
            cnt = 1;

        });

    </script>

</body></html>