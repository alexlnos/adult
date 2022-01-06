<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <title> LongUp </title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <style>
    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box
    }
    
    .center {
        text-align: center
    }
    
    img {
        max-width: 100%;
        height: auto
    }
    
    .post-img {
        max-width: 100%;
        float: left;
        padding: 20px 20px 10px 0
    }
    
    .vk-comment-text img {
        margin: 20px auto
    }
    
    .vk-avatar img {
        float: left;
        margin-right: 10px
    }
    
    .vk-comment-load {
        margin-bottom: 15px;
        position: relative;
        border-bottom: 1px solid #dae1e8;
        padding: 0 15px 15px
    }
    
    .vk-comment-name {
        color: #2b587a;
        font-weight: 700;
        font-size: 12px
    }
    
    .vk-comment-text {
        margin-left: 60px
    }
    
    .vk-comment-date {
        margin-left: 60px;
        color: #999
    }
    
    .vk-comment-like:hover {
        opacity: .5;
        cursor: pointer
    }
    
    @media screen and (max-width:999px) {
        .vk-comment-name {
            color: #2b587a;
            font-weight: 700;
            font-size: 18px
        }
    }
    
    @media screen and (max-width:319px) {
        .vk-comment-name {
            color: #2b587a;
            font-weight: 700;
            font-size: 15px
        }
        .vk-comment-like {
            display: none
        }
    }
    
    body {
        padding: 0;
        margin: 0
    }
    
    body * {
        font-family: Arial, sans-serif
    }
    
    h1 {
        font-weight: 400;
        margin: 0
    }
    
    h1 {
        font-size: 27px
    }
    
    a {
        color: #ba0009
    }
    
    a:hover {
        text-decoration: none;
        color: red
    }
    
    .wrap {
        max-width: 700px;
        min-width: 240px;
        margin: 0 auto
    }
    
    body img {
        max-width: 100%
    }
    
    .content {
        width: 95%;
        margin: 0 auto;
        background: #fff none repeat scroll 0 0;
        border: 1px solid #1e9c79;
        -webkit-box-shadow: 0 0 20px #ccc;
        box-shadow: 0 0 20px #ccc;
        border-radius: 10px
    }
    
    .post {
        padding: 15px;
        font-size: 17px
    }
    
    .post .info {
        color: #999;
        font-size: 11px;
        font-style: italic
    }
    
    .post a {
        font-size: 19px
    }
    
    .footer {
        margin-top: 5px;
        padding: 15px;
        height: 50px;
        font-size: 11px
    }
    
    header .logo {
        padding: 20px 0;
        text-align: center
    }
    
    header .logo h1 span {
        display: inline-block;
        vertical-align: top;
        margin-left: 20px;
        line-height: 110px;
        color: #1e9c79;
        text-decoration: none;
        font-family: Pacifico, cursive;
        font-size: 80px;
        font-weight: 700
    }
    
    header .logo h1:before {
        content: url(assets/img/logo.png);
        display: inline-block;
        -webkit-transform: rotate(-15deg);
        -ms-transform: rotate(-15deg);
        -o-transform: rotate(-15deg);
        transform: rotate(-15deg)
    }
    
    @media only screen and (max-width:640px) {
        header .logo h1:before {
            content: url(assets/img/logo-sm.png)
        }
        header .logo h1 a {
            font-size: 50px;
            line-height: 60px;
            margin-left: 10px
        }
    }
    
    @media only screen and (max-width:440px) {
        header .logo h1 a {
            font-size: 30px;
            line-height: 60px;
            margin-left: 0
        }
    }
    
    .btn-center {
        text-align: center
    }
    
    .btn-center a {
        background: linear-gradient(to bottom, #ff7400, #ff2000);
        color: #fff;
        padding: 20px;
        text-decoration: none;
        font-size: 22px;
        display: inline-block;
        position: relative
    }
    
    .btn-center a span {
        position: relative;
        z-index: 2
    }
    
    .btn-center a:before {
        background: linear-gradient(to top, #ff7400, #ff2000);
        position: absolute;
        content: "";
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        z-index: 1;
        opacity: 0;
        transition: all .4s ease-out
    }
    
    .btn-center a:hover:before {
        opacity: 1
    }
    
    .footer {
        font-size: 14px;
        text-align: center
    }
    
    img[height="1"],
    img[width="1"] {
        display: none!important
    }
    
    .comeback_layout {
        display: none;
        position: fixed;
        color: #000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 20000000;
        background: rgba(0, 0, 0, .75);
        overflow-y: scroll;
        -ms-overflow-style: none;
        overflow: -moz-scrollbars-none
    }
    
    .comeback_layout::-webkit-scrollbar {
        width: 0
    }
    
    .comeback_wrapper {
        width: 100%;
        max-width: 550px;
        margin: 0 auto
    }
    
    .comeback_container {
        background: #fff;
        padding: 25px;
        margin-top: 2%;
        text-align: center
    }
    
    .comeback_container h1 {
        font-size: 23px
    }
    
    .comeback_container .btn {
        display: block;
        width: 240px;
        color: #fff;
        background: #f82a5e;
        text-transform: uppercase;
        padding: 10px 0;
        font-size: 19px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        vertical-align: middle;
        border: 1px solid transparent;
        border-radius: 4px;
        margin: 0 auto;
        text-decoration: none
    }
    
    .comeback_img {
        width: 80%;
        margin: 10px auto;
        max-width: 200px
    }
    
    .comeback_close {
        float: right;
        cursor: pointer
    }
    
    #comeback p {
        font-size: 16px
    }
    
    @media (max-width:700px) {
        .comeback_container h1 {
            line-height: 18px;
            font-size: 16px
        }
        .comeback_img {
            margin: 5px auto
        }
        .comeback_container p {
            line-height: 14px;
            font-size: 15px
        }
        .comeback_container {
            padding: 5px
        }
    }
    
    .vpouste {
        border: 5px solid #ed1b24;
        padding: 15px;
        background: #ffefbf;
        margin-bottom: 20px
    }
    
    @media(max-width:540px) {
        .post-img {
            max-width: 100%;
            width: 100%;
            float: none;
            padding: 10px
        }
    }
    
    @media(max-width:320px) {
        header .logo h1 span {
            font-size: 60px;
            line-height: 70px;
            margin-left: 0
        }
    }
    
    @media(max-width:240px) {
        header .logo h1 span {
            font-size: 45px;
            line-height: 50px
        }
    }
    </style>
    <link href="assets/img/logo.png" rel="shortcut icon" type="image/x-icon">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- INTH_SNIPPET_TOP -->
</head>

<body>
    <div class="wrap">
        <header>
            <div class="logo">
                <h1><span> Tajemství mužů</span></h1></div>
        </header>
        <div class="content">
            <div class="post">
                <div class="info"> Marek Musil,
                    <script>
                    DAYS = 6;
                    dayMilliseconds = 24 * 60 * 60 * 1000;
                    var currentDate = new Date();
                    currentDate.setTime(currentDate.getTime() - dayMilliseconds * DAYS);
                    yyyy = currentDate.getFullYear();
                    mm = currentDate.getMonth() + 1;
                    dd = currentDate.getDate();
                    if(mm < 10) {
                        mm = '0' + mm;
                    }
                    if(dd < 10) {
                        dd = '0' + dd;
                    }
                    document.write(dd + '.' + mm + '.' + yyyy)
                    </script>
                </div>
                <h1> Jak jsem si zvětšil penis o 5.5 cm za 14 týdnů? </h1> <img class="post-img lazy" data src="assets/img/rot.jpg">
                <p>Ahoj všichni. Jmenuju se Marek a jsem z Opavy. Pánové! Našel jsem něco skvělého! <img src="assets/img/Do9W0plDWNE.jpg" width="20"> V krátkosti, měl jsem naprosto obyčejný život, ale měl jsem pocit, že mám moc malý penis a kvůli tomu jsem měl špatné sebevědomí. <img src="assets/img/vcqC1-NGSyk.jpg" width="20"> </p>
                <p>Dívky z mého penisu taky nebyly zrovna nadšené. Nikdy mi to neřekly narovinu, ale dobře jsem věděl, že se jim můj penis nelíbí. <img src="assets/img/oBHjuv51oac.jpg" width="20"> <img class="post-img lazy" data src="assets/img/rot2.jpg" style="float:right;margin:0 0 0 10px"> </p>
                <p>Jednou jsem narazil na blog o americkém porno herci. Odhalil tam tajemství velkého penisu všech porno hvězd. Používají speciální drogu pro penis. </p>
                <p>Řekl jsem si, že to stojí za zkoušku a objednal jsem si ten tyto prášky. Začal jsem je používat a po týdnu jsem změřil penis. Byl jsem NAPROSTO OHROMENÝ! <img src="assets/img/MAW6wNwXLhQ.jpg" width="20"> </p>
                <p> Měl jsem 15 cm dlouhý penis a teď je to 20,5 cm za pouhých 14 dní!!! To je neuvěřitelné!!! </p>
                <p> Holky jsou z mého penisu nadšené. <img src="assets/img/y-OM-9RccW0.jpg" width="20"> I když ho mám schovaný v kalhotách, jde vidět, že se mají na co těšit. Všechny se mnou teď chtějí mít sex. Mám mnohem vyšší sebevědomí. <img src="assets/img/Gphi1IOOEeY.jpg" width="20"> </p>
                <div class="center">
                    <a href="#form2"><img class="lazy" data src="assets/img/photo-orig.jpg" style="max-width:500px;width:100%"></a>
                    <br> <small> Podívejte, je obrovský! </small> </div>
                <p> Určitě chápete, že když chcete velký penis, který budou holky milovat, stojí za to to vyzkoušet. Tak jděte do toho, kluci! </p>
            </div>
            <div class="post">
                <div style="line-height:inherit;letter-spacing:initial;float:initial;height:auto;">
                    <div class="zizou">
                        <h1 style="color:red"><span style="font-weight:700">Radoslav Polák</span> - Specialista na urologii</h1>
                        <a href="#form2"><img class="post-img lazy" data src="assets/img/dr.jpg"></a>
                        <p>Tento výrobek doporučujeme především mužům, kteří potřebují zvětšení penisu a prožívají dysfunkci ztopoření.</p>
                        <p>Používání tyto prášky <a href="#form2">LongUp</a> se nepojí s rizikem, jako v případě operace a užívání pilulek, a jeho vliv na zvětšení penisu a potence je jedinečný.</p>
                        <p>Nejdůležitější věcí, jíž je nutné věnovat obzvláštní pozornost, je aby byl výrobek originální. Protože jen originální výrobek je licencovaný, musíme se vyhnout napodobeninám.</p>
                        <p><a href="#form2">LongUp</a> může penis zvětšit až o 8 cm. Viděl jsem, jak toho dosahují moji zákazníci.</p>
                    </div>
                    <div class="vpouste">
                        <center>
                            <h2 style="font-size:30px;">Pozornost!</h2></center>
                        <center>
                            <p><b>Získali jsme speciální slevu pro naše čtenáře od oficiálního distributora, který zajišťuje také záruku: pokud uznáte, že výrobek není účinný, vrátí vám 100 % nákladů. Sleva je dostupná jen do konce <script> DAYS = 0; dayMilliseconds = 24*60*60*1000; var currentDate = new Date(); currentDate.setTime(currentDate.getTime() - dayMilliseconds * DAYS);yyyy = currentDate.getFullYear();mm = currentDate.getMonth() + 1; dd = currentDate.getDate();if(mm<10){ mm = '0'+mm;} if(dd<10){dd = '0'+dd;} document.write(dd  + '.' +  mm + '.' +yyyy)</script>
.</b></p>
                        </center>
                        <br>
                        <center>
                            <a href="#form2"><img class="lazy" data src="assets/img/product.png" style="width:35%"></a>
                        </center>
                        <br>
                        <script type="text/javascript">
                        function startTimer(duration, display) {
                            var timer = duration,
                                minutes, seconds;
                            setInterval(function() {
                                minutes = parseInt(timer / 60, 10);
                                seconds = parseInt(timer % 60, 10);
                                minutes = minutes < 10 ? "0" + minutes : minutes;
                                seconds = seconds < 10 ? "0" + seconds : seconds;
                                display.textContent = minutes + ":" + seconds;
                                if(--timer < 0) {
                                    timer = duration;
                                }
                            }, 1000);
                        }
                        window.onload = function() {
                            var fiveMinutes = 60 * 10,
                                display = document.querySelector('#demo');
                            startTimer(fiveMinutes, display);
                        };
                        </script>
                        <script>
                        $(document).ready(function() {
                            $("a").click(function(e) {
                                e.preventDefault();
                                $('html, body').animate({
                                    scrollTop: $(".toform").offset().top
                                }, 1000);
                            });
                        });
                        </script>
                        <div class="toform"></div>
                        <div id="fff" class="spin-wrapper toform">
                            <p style="text-align:center"> Ja vím!</br> "Naše webová stránka nabízí promo akce při nákupu produktů LongUp. Zkuste své štěstí a klikněte na tlačítko SPIN. Když budete mít štěstí, získáte slevu na tento produkt! Hodně štěstí! "
                                <div class="wheel-wrarpper">
                                    <div class="wheel"><img alt="" class="wheel-img" src="assets/prizewheel.png">
                                        <div class="wheel-cursor"><img alt="" src="assets/wheel-cursor.png"><span class="cursor-text lt48" onclick="spin();"> SPIN </span> </div>
                                    </div>
                                </div>
                        </div>
                        <div class="order_block" style="display:none">
                            <br>
                            <center><s>  2390 Kč
</s> <b style="color:red"> 1195 Kč
 </b> </center>
                            <br>
                            <center> <b style="color:red; font-size:24px" id="demo"></b> </center>
                            <br>
                            <div id="orderFormBorder">
                                <!-- Owner: mateusz -->
                                <form id="buyForm" class="toform orderForm x_order_form buyForm" method="post" action="order.php">
            <input type="hidden" name="flow" value="kcrcj">
            <input type="hidden" name="sub1" value="{clickid}">
            <input type="hidden" name="sub2" value="{trafficsource}">
            <input type="hidden" name="sub3" value="{campaign}">
            <input type="hidden" name="sub4" value="{lander}">
            <input type="hidden" name="sub5" value="<?=@$_GET['sub5']?>">                                    
                                    <center>
                                        <label for="name">Vaše jméno: </label>
                                    </center>
                                    <input class="form-control input-form" name="name" id="name" placeholder="" type="text" required>
                                    <div>
                                        <center>
                                            <label for="phone"> Vaše telefonní číslo:</label>
                                        </center>
                                        <input class="form-control input-form " name="phone" id="phone"  placeholder="" type="tel" pattern="(?=.*[0-9+]).{7,}" minlength="7" value="+420" title="+420xxxxxxxxx" required> <span class="message1" style="display:none;margin-bottom:10px;font-size:12px;color:#D91E18;font-weight:bold;font-family:Arial;"></span> </div>
                                    <button type="submit" class="submit-form">Haga un pedido y obtenga "LongUp" con un descuento. </button>
                                </form>
         <script>
        $(document).ready(function() {
          $('#phone').bind("change keyup input click", function() {
            if(this.value.match(/[^0-9+]/g)) {
              this.value = this.value.replace(/[^0-9+]/g, '');
            }
            if(this.value.length < 4) {
              this.value = '+420';
            }
            if(!this.value.match(/^\+420/g)) {
              this.value = '+420';
            }
          });
        });
        </script>                                 
                                <style>
                                form {
                                    position: relative;
                                }
                                
                                .loader {
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    right: 0;
                                    bottom: 0;
                                    width: 100%;
                                    z-index: 10000;
                                    display: none;
                                }
                                
                                .loader img {
                                    position: absolute;
                                    width: 10%;
                                    bottom: 50%;
                                    left: 50%;
                                    transform: translateY(50%);
                                    transform: translateX(-50%);
                                }
                                </style>
                            </div>
                            <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
                        </div>
                        <div class="spin-result-wrapper">
                            <div class="pop-up-window">
                                <div class="close-popup"></div> <span class="pop-up-heading">Gratulujeme!</span>
                                <p class="pop-up-text">Vyhráli jste 50% slevu na produkty LongUp!</p><span class="pop-up-button hhh">OK</span> </div>
                        </div>
                        <script src="https://static.infothroat.com/pages/77bf462a-6ba6-4f39-847c-10bed7a6d313/landWheel.js"></script>
                        <style type="text/css">
                        input {
                            padding: 10px !important;
                            display: block !important;
                            margin: 0 auto 20px!important;
                            padding: 10px !important;
                            width: 50% !important;
                            border: 2px solid grey !important;
                            border-radius: 5px !important;
                        }
                        
                        .time_remains {
                            font-size: 1.1em;
                            color: red;
                            font-weight: 700;
                        }
                        
                        p.pricec {
                            position: absolute;
                            right: 0;
                            top: 424px;
                            color: #000;
                            width: 160px;
                            height: 129px;
                            text-align: center!important;
                            font-size: 19px;
                            font-weight: 700;
                            line-height: 1.3;
                            -webkit-transform: rotate(-7deg);
                            transform: rotate(-7deg);
                            margin: -160px auto 30px;
                            background: url(../img/star.png);
                            background-size: contain;
                            padding-top: 29px;
                        }
                        
                        .submit-form {
                            display: block;
                            margin: 40px auto;
                            padding: 20px;
                            font-size: 20px;
                            text-decoration: none;
                            background-color: #de0606;
                            text-align: center;
                            color: #fff!important;
                            border-radius: 4px;
                            border: none;
                            cursor: pointer;
                        }
                        
                        p.pricec {
                            right: 16%;
                            width: 160px;
                        }
                        
                        p.priceс {
                            position: relative;
                            left: 100px;
                            top: -100px;
                            color: #000;
                            box-shadow: rgba(0, 0, 0, .8) 0 3px 30px;
                            width: 165px;
                            height: 98px;
                            text-align: center !important;
                            font-size: 19px;
                            font-weight: 700;
                            line-height: 1.3;
                            transform: rotateZ(-7deg);
                            margin: -160px auto 30px;
                            background: linear-gradient(to right, #eea513 0, #fded13 100%);
                            border-width: 2px;
                            border-style: solid;
                            border-color: #fff;
                            border-image: initial;
                            border-radius: 19%
                        }
                        
                        .discountс {
                            display: block;
                            margin-top: 9px;
                            font-size: 16px
                        }
                        
                        .price_main {
                            border-bottom: 2px solid #d31812;
                            font-size: 25px;
                            line-height: 0
                        }
                        
                        .js_old_price {
                            margin: 0 30px
                        }
                        
                        .Wheel_input {
                            padding: 10px !important;
                            display: block !important;
                            margin: 0 auto !important;
                            padding: 10px !important;
                            width: 50% !important;
                            border: 2px solid grey !important;
                            border-radius: 5px !important
                        }
                        
                        .country_select {
                            display: none
                        }
                        
                        .order_form {
                            display: block !important;
                            margin: 0 auto !important;
                            text-align: center !important
                        }
                        
                        @media screen and (max-width: 480px) {
                            input {
                                width: 90%
                            }
                        }
                        
                        .main-link {
                            display: block;
                            margin: 20px auto;
                            padding: 20px;
                            font-size: 20px;
                            text-decoration: none;
                            background-color: #de0606;
                            text-align: center;
                            color: #fff !important;
                            border-radius: 4px;
                            border: none;
                            cursor: pointer
                        }
                        
                        .main-link:hover {
                            opacity: .8
                        }
                        
                        .spin-wrapper {
                            -webkit-box-shadow: 0 0 10px;
                            box-shadow: 0 0 10px;
                            border: 3px solid red;
                            padding: 20px 10px;
                            border-radius: 10px;
                            text-align: center;
                            box-sizing: border-box
                        }
                        
                        #align .spin-wrapper p {
                            text-align: center;
                            font-size: 21px !important;
                            line-height: 1.4 !important;
                            margin-bottom: 15px
                        }
                        
                        .wheel-wrapper {
                            text-align: center
                        }
                        
                        .wheel {
                            margin: 0 auto;
                            position: relative
                        }
                        
                        .wheel-cursor {
                            position: absolute;
                            width: 35% !important;
                            height: 35%;
                            top: 49%;
                            left: 50%;
                            -webkit-transform: translate(-50%, -50%);
                            -ms-transform: translate(-50%, -50%);
                            transform: translate(-50%, -50%)
                        }
                        
                        .cursor-text {
                            position: absolute;
                            z-index: 2;
                            display: inline-block;
                            width: 35% !important;
                            height: 40%;
                            line-height: 61px;
                            cursor: pointer;
                            border-radius: 50%;
                            vertical-align: middle;
                            text-align: center;
                            background-color: #ccc;
                            border: 1px solid #ccc;
                            top: 43%;
                            left: 50%;
                            -webkit-user-select: none;
                            -moz-user-select: none;
                            -ms-user-select: none;
                            user-select: none;
                            -webkit-transform: translate(-50%, -50%);
                            -ms-transform: translate(-50%, -50%);
                            transform: translate(-50%, -50%);
                            -webkit-box-shadow: rgba(255, 255, 255, 1) 0 -2px 0 inset, rgba(255, 255, 255, 1) 0 2px 0 inset, rgba(0, 0, 0, .4) 0 0 5px;
                            box-shadow: rgba(255, 255, 255, 1) 0 -2px 0 inset, rgba(255, 255, 255, 1) 0 2px 0 inset, rgba(0, 0, 0, .4) 0 0 5px;
                            background: #fff;
                            background: -webkit-gradient(radial, center center, 0, center center, 100%, color-stop(0, rgba(255, 255, 255, 1)), color-stop(100%, rgba(234, 234, 234, 1)));
                            background: -webkit-radial-gradient(center, ellipse cover, rgba(255, 255, 255, 1) 0, rgba(234, 234, 234, 1) 100%);
                            background: -o-radial-gradient(center, ellipse cover, rgba(255, 255, 255, 1) 0, rgba(234, 234, 234, 1) 100%);
                            background: -webkit-radial-gradient(center, ellipse, rgba(255, 255, 255, 1) 0, rgba(234, 234, 234, 1) 100%);
                            background: -o-radial-gradient(center, ellipse, rgba(255, 255, 255, 1) 0, rgba(234, 234, 234, 1) 100%);
                            background: radial-gradient(ellipse at center, rgba(255, 255, 255, 1) 0, rgba(234, 234, 234, 1) 100%)
                        }
                        
                        .wheel-img {
                            -webkit-transition: 4s;
                            -o-transition: 4s;
                            transition: 4s
                        }
                        
                        .close-popup {
                            position: absolute;
                            width: 30px;
                            height: 30px;
                            background-size: 100%;
                            top: -40px;
                            border-radius: 50%;
                            -webkit-box-shadow: 0 0 10px #fff;
                            box-shadow: 0 0 10px #fff;
                            right: -40px;
                            cursor: pointer
                        }
                        
                        .cursor-text:active {
                            -webkit-box-shadow: rgba(0, 0, 0, .4) 0 0 5px inset;
                            box-shadow: rgba(0, 0, 0, .4) 0 0 5px inset
                        }
                        
                        .spin-result-wrapper {
                            display: none;
                            padding: 0 10px;
                            -webkit-box-sizing: border-box;
                            box-sizing: border-box;
                            width: 100%;
                            top: 0;
                            z-index: 999;
                            left: 0;
                            height: 100%;
                            position: fixed;
                            background-color: rgba(0, 0, 0, .6);
                            text-align: center
                        }
                        
                        .pop-up-layer {
                            position: fixed !important;
                            top: 0 !important;
                            width: 100% !important;
                            height: 100% !important;
                            background-color: rgba(0, 0, 0, .7) !important;
                            z-index: 99 !important
                        }
                        
                        .pop-up-layer-show {
                            display: block
                        }
                        
                        .pop-up-window {
                            position: relative;
                            max-width: 400px;
                            right: 0;
                            left: 0;
                            top: 25%;
                            margin: 0 auto;
                            background: #fff none repeat scroll 0 0;
                            text-align: center;
                            padding: 10px;
                            padding-top: 70px;
                            padding-bottom: 20px;
                            border-radius: 10px;
                            animation: .7s ease 0s normal none 1 running pop-up-appear
                        }
                        
                        .pop-up-window::before {
                            content: "";
                            position: absolute;
                            width: 110px;
                            height: 110px;
                            top: -55px;
                            left: 0;
                            right: 0;
                            margin: 0 auto;
                            background-color: #42b7e0;
                            border-radius: 50%;
                            animation: .5s ease .6s normal backwards 1 running pop-up-appear-before
                        }
                        
                        .pop-up-window::after {
                            content: "";
                            position: absolute;
                            width: 50px;
                            height: 20px;
                            top: -20px;
                            left: 0;
                            right: 0;
                            margin: 0 auto;
                            border-width: medium medium 4px 4px;
                            border-style: none none solid solid;
                            border-color: currentcolor currentcolor #fff #fff;
                            -moz-border-top-colors: none;
                            -moz-border-right-colors: none;
                            -moz-border-bottom-colors: none;
                            -moz-border-left-colors: none;
                            border-image: none;
                            transform: rotate(-45deg);
                            transition: opacity 1s ease 0s;
                            animation: .5s ease .6s normal backwards 1 running pop-up-appear-after
                        }
                        
                        @keyframes pop-up-appear {
                            0% {
                                transform: translateY(-2000px)
                            }
                            30% {
                                transform: translateY(100px)
                            }
                            100% {
                                transform: translateY(0)
                            }
                        }
                        
                        @keyframes pop-up-appear-before {
                            0% {
                                transform: scale(0)
                            }
                            100% {
                                transform: scale(1)
                            }
                        }
                        
                        @keyframes pop-up-appear-after {
                            0% {
                                opacity: 0
                            }
                            100% {
                                opacity: 1
                            }
                        }
                        
                        .pop-up-heading {
                            font-size: 40px;
                            margin-bottom: 20px
                        }
                        
                        .pop-up-text {
                            margin-bottom: 25px;
                            font-size: 24px;
                            line-height: 30px;
                            text-align: center
                        }
                        
                        .pop-up-button {
                            text-transform: uppercase;
                            text-decoration: none;
                            padding: 10px 20%;
                            font-size: 20px;
                            border-radius: 5px;
                            background-color: #42b7e0;
                            color: #fff !important;
                            border: medium none;
                            cursor: pointer;
                            outline: medium none
                        }
                        
                        .pop-up-button:hover {
                            color: #fff;
                            text-decoration: none
                        }
                        
                        .wheel img {
                            max-width: 100%
                        }
                        
                        @media all and (max-width: 520px) {
                            .cursor-text {
                                line-height: 48px;
                                font-size: 14px;
                                width: 50% !important;
                                top: 52%
                            }
                            .close-popup {
                                position: absolute;
                                width: 30px;
                                height: 30px;
                                background-image: url(img/cross.svg);
                                background-size: 100%;
                                top: -40px;
                                border-radius: 50%;
                                -webkit-box-shadow: 0 0 10px #fff;
                                box-shadow: 0 0 10px #fff;
                                right: -10px;
                                cursor: pointer
                            }
                            p.priceс {
                                top: -120px;
                                left: 20px
                            }
                        }
                        
                        .super-rotation {
                            -webkit-animation-name: super-rotation;
                            animation-name: super-rotation;
                            -webkit-animation-duration: 7s;
                            animation-duration: 7s;
                            -webkit-animation-fill-mode: forwards;
                            animation-fill-mode: forwards;
                            -webkit-transition-timing-function: ease-in-out;
                            -o-transition-timing-function: ease-in-out;
                            transition-timing-function: ease-in-out
                        }
                        
                        @-webkit-keyframes super-rotation {
                            70% {
                                -webkit-transform: rotate(1783deg);
                                transform: rotate(1783deg)
                            }
                            100% {
                                -webkit-transform: rotate(1774deg);
                                transform: rotate(1774deg)
                            }
                        }
                        
                        @keyframes super-rotation {
                            70% {
                                -webkit-transform: rotate(1783deg);
                                transform: rotate(1783deg)
                            }
                            100% {
                                -webkit-transform: rotate(1774deg);
                                transform: rotate(1774deg)
                            }
                        }
                        
                        .time_remains {
                            font-size: 1.1em;
                            color: red;
                            font-weight: 700
                        }
                        
                        .time_remains_title {
                            padding-top: 15px;
                            text-align: center;
                            font-size: 22px
                        }
                        
                        .comments {
                            padding-top: 10px
                        }
                        
                        .comments-item {
                            max-width: 90%;
                            box-sizing: border-box;
                            margin: 0 auto;
                            margin-bottom: 15px;
                            padding-bottom: 10px;
                            border-bottom: 1px solid #e1e2e3
                        }
                        
                        .comment-avatar {
                            display: inline-block;
                            vertical-align: top;
                            margin-right: 10px;
                            font-size: 0
                        }
                        
                        .comment-text {
                            display: inline-block;
                            max-width: 79%;
                            vertical-align: top;
                            font-size: 16px
                        }
                        
                        .comment-username {
                            color: #365899;
                            font-weight: 700;
                            margin-right: 10px;
                            cursor: pointer
                        }
                        
                        .comment-username:hover {
                            text-decoration: underline
                        }
                        
                        .comment-action {
                            padding-left: 50px
                        }
                        
                        .like,
                        .like-count,
                        .reply {
                            color: #365899;
                            font-size: 13px;
                            cursor: pointer;
                            margin-right: 10px;
                            position: relative;
                            -webkit-user-select: none;
                            -moz-user-select: none;
                            -ms-user-select: none;
                            user-select: none
                        }
                        
                        .like:hover,
                        .reply:hover {
                            text-decoration: underline
                        }
                        
                        .like:after,
                        .reply:after {
                            content: " · ";
                            position: absolute;
                            font-weight: 700;
                            right: -10px;
                            top: 0;
                            color: #90949c
                        }
                        
                        .like-count {
                            padding-left: 20px;
                            position: relative
                        }
                        
                        .like-count:before {
                            content: '';
                            position: absolute;
                            width: 18px;
                            height: 18px;
                            left: 0;
                            background-image: url(img/like.png)
                        }
                        
                        .like-count-liked {
                            animation: .5s like-change
                        }
                        
                        .like-count-unliked {
                            animation: .5s like-unchange
                        }
                        
                        @keyframes like-change {
                            50% {
                                top: -10px;
                                opacity: 0
                            }
                            51% {
                                bottom: -10px
                            }
                            100% {
                                bottom: 0;
                                opacity: 1
                            }
                        }
                        
                        @keyframes like-unchange {
                            50% {
                                bottom: -10px;
                                opacity: 0
                            }
                            100% {
                                top: 0;
                                opacity: 1
                            }
                        }
                        
                        .comment-date {
                            font-size: 13px;
                            color: #90949c;
                            position: relative
                        }
                        
                        .comment-input {
                            width: 90%;
                            margin: 0 auto;
                            margin-bottom: 20px
                        }
                        
                        .comment-input-area {
                            display: inline-block;
                            vertical-align: top;
                            width: 80%;
                            font-size: 0;
                            perspective: 800px
                        }
                        
                        .comment-input input[type=text] {
                            width: 150px;
                            box-sizing: border-box;
                            padding-left: 10px;
                            padding-top: 5px;
                            padding-bottom: 5px;
                            margin-bottom: 10px;
                            transition: .4s;
                            word-wrap: wrap
                        }
                        
                        .textarea {
                            width: 100%;
                            max-width: 100%;
                            box-sizing: border-box;
                            padding-left: 10px;
                            padding-top: 10px;
                            padding-bottom: 10px;
                            height: 40px;
                            font-family: Arial, sans-serif;
                            transition: .5s
                        }
                        
                        .textarea-focus {
                            height: 80px
                        }
                        
                        .input-action {
                            display: none;
                            transition: .4s;
                            background-color: #f6f7f9;
                            border: 1px solid #ccc;
                            border-top: none;
                            padding: 10px 10px;
                            transform-origin: top;
                            padding: 10px 10px
                        }
                        
                        .input-action-focus {
                            display: block;
                            animation: .6s action-appear
                        }
                        
                        .comment-appear {
                            animation: comment-appear .4s
                        }
                        
                        @keyframes comment-appear {
                            from {
                                transform: scale(0)
                            }
                            to {
                                transform: scale(1)
                            }
                        }
                        
                        @keyframes action-appear {
                            0% {
                                opacity: 0;
                                transform: rotateX(-90deg)
                            }
                            60% {
                                transform: rotateX(30deg)
                            }
                            100% {
                                opacity: 1;
                                transform: rotateX(0)
                            }
                        }
                        
                        .send-btn {
                            float: right;
                            padding: 5px 10px;
                            background-color: #4267b2;
                            border: none;
                            border-radius: 2px;
                            color: #fff;
                            font-weight: 700;
                            cursor: pointer
                        }
                        
                        .send-btn:hover {
                            background-color: #365899
                        }
                        
                        @media all and (max-width: 720px) {
                            main {
                                width: 100%
                            }
                            .sidebar {
                                display: none
                            }
                            .mobile-header {
                                display: block
                            }
                        }
                        
                        .button {
                            display: inline-block;
                            vertical-align: top;
                            text-decoration: none;
                            font-size: 18px;
                            padding: 15px 15px;
                            background-color: #f44336;
                            color: #fff;
                            text-align: center;
                            letter-spacing: .5px;
                            border: none;
                            margin: 10px 0;
                            text-transform: uppercase;
                            border-radius: 2px;
                            -webkit-box-shadow: 0 0 2px rgba(0, 0, 0, .12), 0 2px 2px rgba(0, 0, 0, .2);
                            box-shadow: 0 0 2px rgba(0, 0, 0, .12), 0 2px 2px rgba(0, 0, 0, .2);
                            transition: .3s ease-out
                        }
                        
                        .button:hover {
                            background-color: #f55a4e;
                            box-shadow: 0 3px 3px 0 rgba(0, 0, 0, .14), 0 1px 7px 0 rgba(0, 0, 0, .12), 0 3px 1px -1px rgba(0, 0, 0, .2)
                        }
                        
                        .pulse {
                            position: relative;
                            z-index: 1
                        }
                        
                        .pulse:hover:before {
                            content: '';
                            display: block;
                            position: absolute;
                            width: 100%;
                            height: 100%;
                            top: 0;
                            left: 0;
                            background-color: #f44336;
                            border-radius: inherit;
                            transition: opacity .3s, -webkit-transform .3s;
                            transition: opacity .3s, transform .3s;
                            transition: opacity .3s, transform .3s, -webkit-transform .3s;
                            -webkit-animation: pulse-animation 5s cubic-bezier(.24, 0, .38, 1) infinite;
                            animation: pulse-animation 5s cubic-bezier(.24, 0, .38, 1) infinite;
                            z-index: -1
                        }
                        
                        @-webkit-keyframes pulse-animation {
                            0% {
                                opacity: 1;
                                -webkit-transform: scale(1);
                                transform: scale(1)
                            }
                            15% {
                                opacity: 0;
                                -webkit-transform: scale(1.2);
                                transform: scale(1.2)
                            }
                            100% {
                                opacity: 0;
                                -webkit-transform: scale(1.2);
                                transform: scale(1.2)
                            }
                        }
                        
                        @keyframes pulse-animation {
                            0% {
                                opacity: 1;
                                -webkit-transform: scale(1);
                                transform: scale(1)
                            }
                            15% {
                                opacity: 0;
                                -webkit-transform: scale(1.2);
                                transform: scale(1.2)
                            }
                            100% {
                                opacity: 0;
                                -webkit-transform: scale(1.2);
                                transform: scale(1.2)
                            }
                        }
                        
                        .comments-refreshing {
                            display: none;
                            text-align: center
                        }
                        
                        .comments-refreshing img {
                            max-width: 100px
                        }
                        
                        .refresh-appear {
                            display: block;
                            animation: typing-show .5s
                        }
                        
                        @keyframes typing-show {
                            0% {
                                opacity: 0
                            }
                            100% {
                                opacity: 1
                            }
                        }
                        
                        @keyframes new-comment-show {
                            0% {
                                transform: scale(.2)
                            }
                            80% {
                                transform: scale(1.2)
                            }
                            100% {
                                transform: scale(1)
                            }
                        }
                        
                        .show-message {
                            font-family: Roboto-Regular
                        }
                        
                        .blink {
                            color: red !important;
                            animation-name: blinker;
                            animation-duration: 1s;
                            animation-timing-function: linear;
                            animation-iteration-count: infinite;
                            -webkit-animation-name: blinker;
                            -webkit-animation-duration: 1s;
                            -webkit-animation-timing-function: linear;
                            -webkit-animation-iteration-count: infinite;
                            -moz-animation-name: blinker;
                            -moz-animation-duration: 1s;
                            -moz-animation-timing-function: linear;
                            -moz-animation-iteration-count: infinite;
                            text-decoration: line-through
                        }
                        
                        .show-message p {
                            margin: 0 !important
                        }
                        
                        .show-message__icon {
                            width: 50px !important;
                            display: inline-block;
                            vertical-align: middle
                        }
                        
                        .show-message__info {
                            width: 248px;
                            line-height: normal;
                            display: inline-block;
                            margin-left: 15px;
                            color: #000;
                            vertical-align: middle;
                            margin-bottom: 0;
                            font-size: 19px;
                            font-family: RobotoRegular, sans-serif
                        }
                        
                        .show-message__info span {
                            font-size: 20px;
                            font-family: RobotoRegular, sans-serif
                        }
                        
                        .show-message__left {
                            font-size: 14px
                        }
                        
                        .show-message__left span {
                            font-size: 15px
                        }
                        
                        .show-message_call {
                            background-color: #363636
                        }
                        
                        .show-message__info span {
                            color: #000
                        }
                        
                        .package_left,
                        .package_left span {
                            font-size: 15px !important
                        }
                        
                        #ouibounce-modal {
                            background-color: rgba(0, 0, 0, .9)
                        }
                        
                        .show-message_online {
                            background-color: #cd5555;
                            background-color: rgba(0, 0, 0, .9)
                        }
                        
                        .show-message__inner {
                            line-height: 90px;
                            display: inline-block;
                            vertical-align: middle
                        }
                        
                        .show-message__item,
                        .show-message__item-first {
                            position: fixed;
                            right: 20px;
                            top: 120px;
                            width: 318px;
                            background-color: rgba(255, 255, 255, .92);
                            color: #000;
                            padding: 0 25px;
                            font-size: 14px;
                            line-height: 90px;
                            border-radius: 5px;
                            display: none;
                            z-index: 98;
                            box-sizing: border-box;
                            border: 2px solid #7474ff;
                            border-left-style: dashed;
                            border-right-style: dashed;
                            text-shadow: 0 0 2px #fff;
                            box-shadow: 0 0 1px 0;
                            -webkit-box-shadow: 0 0 1px 0;
                            -moz-box-shadow: 0 0 1px 0
                        }
                        
                        .lost_position {
                            display: none !important;
                            opacity: 0 !important
                        }
                        
                        .block_position {
                            display: block !important;
                            opacity: 1 !important
                        }
                        
                        @media screen and (max-width: 767px) {
                            .show-message__item,
                            .show-message__item-first {
                                top: auto;
                                right: 10px;
                                bottom: 10px
                            }
                            .show-message__info {
                                width: 230px
                            }
                            .show-message__item,
                            .show-message__item-first {
                                width: 300px
                            }
                        }
                        
                        @media screen and (max-width: 319px) {
                            .show-message__item,
                            .show-message__item-first {
                                width: 225px
                            }
                            .show-message__info {
                                width: 160px;
                                margin-left: 7px;
                                font-size: 15px
                            }
                            .show-message__info span {
                                font-size: 17px
                            }
                            .show-message__icon {
                                width: 38px !important
                            }
                            .show-message__info br {
                                display: none
                            }
                        }
                        
                        @-moz-keyframes blinker {
                            0% {
                                opacity: 1
                            }
                            50% {
                                opacity: 0
                            }
                            100% {
                                opacity: 1
                            }
                        }
                        
                        @-webkit-keyframes blinker {
                            0% {
                                opacity: 1
                            }
                            50% {
                                opacity: 0
                            }
                            100% {
                                opacity: 1
                            }
                        }
                        
                        @keyframes blinker {
                            0% {
                                opacity: 1
                            }
                            50% {
                                opacity: 0
                            }
                            100% {
                                opacity: 1
                            }
                        }
                        </style>
                    </div>
                </div>
                <div class="vk-comment-load">
                    <div class="vk-avatar"> <img src="assets/img/comm1.jpg"> </div>
                    <div class="vk-comment-name"> Diana Nováková </div>
                    <div class="vk-comment-text"> mmm.... je skvělé, když má muž velký a silný penis :))) </div>
                    <div class="vk-comment-date">
                        <script>
                        DAYS = 6;
                        dayMilliseconds = 24 * 60 * 60 * 1000;
                        var currentDate = new Date();
                        currentDate.setTime(currentDate.getTime() - dayMilliseconds * DAYS);
                        yyyy = currentDate.getFullYear();
                        mm = currentDate.getMonth() + 1;
                        dd = currentDate.getDate();
                        if(mm < 10) {
                            mm = '0' + mm;
                        }
                        if(dd < 10) {
                            dd = '0' + dd;
                        }
                        document.write(dd + '.' + mm + '.' + yyyy)
                        </script>
                    </div>
                    <div class="vk-comment-like"></div>
                </div>
                <div class="vk-comment-load">
                    <div class="vk-avatar"> <img src="assets/img/comm2.jpg"> </div>
                    <div class="vk-comment-name"> Max Borovský </div>
                    <div class="vk-comment-text"> Včera jsem si na poště vyzvedl balíček. Všechno je v pořádku, už to začínám používat. Mimochodem, cena je skvělá... Kromě toho teď mají 50% slevu - mají na stránce nějakou speciální nabídku </div>
                    <div class="vk-comment-date">
                        <script>
                        DAYS = 5;
                        dayMilliseconds = 24 * 60 * 60 * 1000;
                        var currentDate = new Date();
                        currentDate.setTime(currentDate.getTime() - dayMilliseconds * DAYS);
                        yyyy = currentDate.getFullYear();
                        mm = currentDate.getMonth() + 1;
                        dd = currentDate.getDate();
                        if(mm < 10) {
                            mm = '0' + mm;
                        }
                        if(dd < 10) {
                            dd = '0' + dd;
                        }
                        document.write(dd + '.' + mm + '.' + yyyy)
                        </script>
                    </div>
                    <div class="vk-comment-like"></div>
                </div>
                <div class="vk-comment-load">
                    <div class="vk-avatar"> <img src="assets/img/comm3.jpg"> </div>
                    <div class="vk-comment-name"> Michal Horáček </div>
                    <div class="vk-comment-text"> Používám to už dva týdny. Můj penis SE ZVĚTŠIL skoro o 4,5 cm!!!! V posteli jsem tak výkonný, že si moje holka podezření, že beru nějaké tablety! :) Děkuju!
                        <br>
                        <a href="#form2"><img class="lazy" data src="assets/img/comm01.jpg" style="margin: 10px;padding: 10px;"></a>
                    </div>
                    <div class="vk-comment-date">
                        <script>
                        DAYS = 5;
                        dayMilliseconds = 24 * 60 * 60 * 1000;
                        var currentDate = new Date();
                        currentDate.setTime(currentDate.getTime() - dayMilliseconds * DAYS);
                        yyyy = currentDate.getFullYear();
                        mm = currentDate.getMonth() + 1;
                        dd = currentDate.getDate();
                        if(mm < 10) {
                            mm = '0' + mm;
                        }
                        if(dd < 10) {
                            dd = '0' + dd;
                        }
                        document.write(dd + '.' + mm + '.' + yyyy)
                        </script>
                    </div>
                    <div class="vk-comment-like"></div>
                </div>
                <div class="vk-comment-load">
                    <div class="vk-avatar"> <img src="assets/img/comm4.jpg"> </div>
                    <div class="vk-comment-name"> Andrej Zika </div>
                    <div class="vk-comment-text"> Haha, závidím... myslím, že si to taky objednám =)) </div>
                    <div class="vk-comment-date">
                        <script>
                        DAYS = 4;
                        dayMilliseconds = 24 * 60 * 60 * 1000;
                        var currentDate = new Date();
                        currentDate.setTime(currentDate.getTime() - dayMilliseconds * DAYS);
                        yyyy = currentDate.getFullYear();
                        mm = currentDate.getMonth() + 1;
                        dd = currentDate.getDate();
                        if(mm < 10) {
                            mm = '0' + mm;
                        }
                        if(dd < 10) {
                            dd = '0' + dd;
                        }
                        document.write(dd + '.' + mm + '.' + yyyy)
                        </script>
                    </div>
                    <div class="vk-comment-like"></div>
                </div>
                <div class="vk-comment-load">
                    <div class="vk-avatar"> <img src="assets/img/comm5.jpg"> </div>
                    <div class="vk-comment-name"> Šimon Fridrich </div>
                    <div class="vk-comment-text"> Koupil jsem si to se slevou a je to skvělé! Děkuju </div>
                    <div class="vk-comment-date">
                        <script>
                        DAYS = 4;
                        dayMilliseconds = 24 * 60 * 60 * 1000;
                        var currentDate = new Date();
                        currentDate.setTime(currentDate.getTime() - dayMilliseconds * DAYS);
                        yyyy = currentDate.getFullYear();
                        mm = currentDate.getMonth() + 1;
                        dd = currentDate.getDate();
                        if(mm < 10) {
                            mm = '0' + mm;
                        }
                        if(dd < 10) {
                            dd = '0' + dd;
                        }
                        document.write(dd + '.' + mm + '.' + yyyy)
                        </script>
                    </div>
                    <div class="vk-comment-like"></div>
                </div>
                <div class="vk-comment-load">
                    <div class="vk-avatar"> <img src="assets/img/comm6.jpg"> </div>
                    <div class="vk-comment-name"> David Janeček </div>
                    <div class="vk-comment-text"> Používal jsem tento tyto prášky a zvětšil jsem si penis o 4 cm. Pak jsem přestal, myslím, že to už stačí))))
                        <br>
                        <a href="#form2"><img class="lazy" data src="assets/img/comm02.jpg" style="padding: 10px;"></a>
                    </div>
                    <div class="vk-comment-date">
                        <script>
                        DAYS = 3;
                        dayMilliseconds = 24 * 60 * 60 * 1000;
                        var currentDate = new Date();
                        currentDate.setTime(currentDate.getTime() - dayMilliseconds * DAYS);
                        yyyy = currentDate.getFullYear();
                        mm = currentDate.getMonth() + 1;
                        dd = currentDate.getDate();
                        if(mm < 10) {
                            mm = '0' + mm;
                        }
                        if(dd < 10) {
                            dd = '0' + dd;
                        }
                        document.write(dd + '.' + mm + '.' + yyyy)
                        </script>
                    </div>
                    <div class="vk-comment-like"></div>
                </div>
                <div class="vk-comment-load">
                    <div class="vk-avatar"> <img src="assets/img/comm7.jpg"> </div>
                    <div class="vk-comment-name"> Jana Peterková </div>
                    <div class="vk-comment-text"> Wow! Hned to jdu objednat pro svého manžela!!! </div>
                    <div class="vk-comment-date">
                        <script>
                        DAYS = 3;
                        dayMilliseconds = 24 * 60 * 60 * 1000;
                        var currentDate = new Date();
                        currentDate.setTime(currentDate.getTime() - dayMilliseconds * DAYS);
                        yyyy = currentDate.getFullYear();
                        mm = currentDate.getMonth() + 1;
                        dd = currentDate.getDate();
                        if(mm < 10) {
                            mm = '0' + mm;
                        }
                        if(dd < 10) {
                            dd = '0' + dd;
                        }
                        document.write(dd + '.' + mm + '.' + yyyy)
                        </script>
                    </div>
                    <div class="vk-comment-like"></div>
                </div>
                <div class="vk-comment-load">
                    <div class="vk-avatar"> <img src="assets/img/comm8.jpg"> </div>
                    <div class="vk-comment-name"> Jakub Svoboda </div>
                    <div class="vk-comment-text"> To není nic nového. <a href="#form2">Tento produkt</a> už každý zná. Kdo o něm neví, ten asi nechce mít větší penis. Já jsem si ho zvětšil o 6 cm!!!!
                        <a href="#form2"><img class="lazy" data src="assets/img/comm03.jpg" style="width: 100%;max-width: 500px;padding: 10px;"></a>
                    </div>
                    <div class="vk-comment-date">
                        <script>
                        DAYS = 3;
                        dayMilliseconds = 24 * 60 * 60 * 1000;
                        var currentDate = new Date();
                        currentDate.setTime(currentDate.getTime() - dayMilliseconds * DAYS);
                        yyyy = currentDate.getFullYear();
                        mm = currentDate.getMonth() + 1;
                        dd = currentDate.getDate();
                        if(mm < 10) {
                            mm = '0' + mm;
                        }
                        if(dd < 10) {
                            dd = '0' + dd;
                        }
                        document.write(dd + '.' + mm + '.' + yyyy)
                        </script>
                    </div>
                    <div class="vk-comment-like"></div>
                </div>
                <div class="vk-comment-load">
                    <div class="vk-avatar"> <img src="assets/img/comm9.jpg"> </div>
                    <div class="vk-comment-name"> Tomáš Janeček </div>
                    <div class="vk-comment-text"> Objednal jsem si to jen ze zvědavosti. Uvidím, co se stane, vypadá to dobře. </div>
                    <div class="vk-comment-date">
                        <script>
                        DAYS = 2;
                        dayMilliseconds = 24 * 60 * 60 * 1000;
                        var currentDate = new Date();
                        currentDate.setTime(currentDate.getTime() - dayMilliseconds * DAYS);
                        yyyy = currentDate.getFullYear();
                        mm = currentDate.getMonth() + 1;
                        dd = currentDate.getDate();
                        if(mm < 10) {
                            mm = '0' + mm;
                        }
                        if(dd < 10) {
                            dd = '0' + dd;
                        }
                        document.write(dd + '.' + mm + '.' + yyyy)
                        </script>
                    </div>
                    <div class="vk-comment-like"></div>
                </div>
                <div class="vk-comment-load">
                    <div class="vk-avatar"> <img class="lazy" data src="assets/img/comm10.jpg"> </div>
                    <div class="vk-comment-name"> Helena Novotná </div>
                    <div class="vk-comment-text"> Taky znám <a href="#form2">LongUp</a>. Můj manžel ho používal a četla jsem o něm. Už se mu penis zvětšil o 4 cm :D </div>
                    <div class="vk-comment-date">
                        <script>
                        DAYS = 1;
                        dayMilliseconds = 24 * 60 * 60 * 1000;
                        var currentDate = new Date();
                        currentDate.setTime(currentDate.getTime() - dayMilliseconds * DAYS);
                        yyyy = currentDate.getFullYear();
                        mm = currentDate.getMonth() + 1;
                        dd = currentDate.getDate();
                        if(mm < 10) {
                            mm = '0' + mm;
                        }
                        if(dd < 10) {
                            dd = '0' + dd;
                        }
                        document.write(dd + '.' + mm + '.' + yyyy)
                        </script>
                    </div>
                    <div class="vk-comment-like"></div>
                </div>
                <div class="btn-center"><a href="#form2"><span>Zde je odkaz na objednání produktu</span></a></div>
                <br> </div>
            <div class="footer"> Copyright © <span class="ryear">2021</span> </div>
        </div>
        <div id="comeback" class="comeback_layout">
            <div class="comeback_wrapper">
                <div class="comeback_container center-block"> <span class="comeback_close"><img src="assets/img/cross.png" width="21" height="21" class="cross"></span>
                    <h1 style="margin: 0 auto; width: 300px;">Počkejte!</h1>
                    <p>Speciálně pro vás! Promo pouze dnes, nabídky cen za 50% slevu! </p>
                    <br>
                    <a href="#form2"><img class="comeback_img lazy" data src="assets/img/product.png"></a>
                    <br>
                    <br> <a class="btn" href="#form2">Objednat LongUp</a> </div>
            </div>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.lazy.min.js"></script>
        <script type="text/javascript">
        $(function() {
            $('.lazy').lazy();
        });
        </script>
        <script>
        $(document).ready(function() {
            $("a").on('click', function(event) {
                if(this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 600, function() {});
                }
            });
        });
        </script>
        <script>
        console.clear()
        </script>
</body>

</html>