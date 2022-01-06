
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Men's Secrets</title>
    <link href="img/logo.png" rel="shortcut icon" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/content/style.css" type="text/css" />
    <style>

        a {
            font-weight: 700
        }

        img {
            max-width: 100%
        }

        .first-p {
            margin-top: -3px
        }

        .fb-avatar img {
            float: left;
            margin-right: 10px
        }

        .fb-comment-load {
            position: relative;
            margin-bottom: 15px;
            padding: 0 10px 15px;
            border-bottom: 1px solid #dae1e8
        }

        .fb-comment-name {
            font-weight: 700;
            font-size: 12px;
            color: #2b587a
        }

        .fb-comment-text {
            margin-left: 60px
        }

        .fb-comment-text img {
            display: block
        }

        .fb-comment-date {
            margin-left: 60px;
            color: #999
        }

        .fb-comment-like:hover {
            cursor: pointer;
            opacity: .5
        }

        body {
            margin: 0;
            padding: 0
        }

        body * {
            font-family: Arial, sans-serif
        }

        h1, h2 {
            margin: 0;
            font-weight: 400
        }

        h1 {
            font-size: 27px
        }

        h2 {
            font-size: 21px
        }

        a {
            color: #ba0009
        }

        a:hover {
            color: red;
            text-decoration: none
        }

        .wrap {
            min-width: 240px;
            max-width: 700px;
            margin: 0 auto
        }

        body img {
            max-width: 100%
        }

        .content {
            box-sizing: border-box;
            width: 100%;
            margin: 0 auto;
            background: #fff none repeat scroll 0 0;
            border: 1px solid #1e9c79;
            border-radius: 10px;
            -webkit-box-shadow: 0 0 20px #ccc;
            box-shadow: 0 0 20px #ccc
        }

        .post {
            padding: 15px;
            font-size: 17px
        }

        .post .info {
            font-size: 11px;
            color: #999;
            font-style: italic
        }

        .post a {
            font-size: 19px
        }

        .center {
            text-align: center
        }

        .btn a {
            display: inline-block;
            box-sizing: border-box;
            padding: 10px 20px;
            font-weight: 700;
            font-size: 21px;
            line-height: 23px !important;
            color: #fff;
            text-decoration: none;
            background: #ff2000;
            background: linear-gradient(to bottom, #ff7400, #ff2000);
            background: -moz-linear-gradient(bottom, #ff7400, #ff2000);
            background: -o-linear-gradient(bottom, #ff7400, #ff2000);
            border-top: 2px solid #ffb300;
            border-radius: 7px;
            -webkit-transition: all .5s ease-in-out;
            -moz-transition: all .5s ease-in-out;
            -o-transition: all .5s ease-in-out;
            transition: all .5s ease-in-out
        }

        .btn a:hover {
            -webkit-transform: scale(1.06);
            -moz-transform: scale(1.06);
            -ms-transform: scale(1.06);
            -o-transform: scale(1.06);
            transform: scale(1.06)
        }

        .footer {
            margin-top: 5px;
            padding: 15px;
            font-size: 14px;
            text-align: center;
            background: #fff none repeat scroll 0 0;
            border-top: 1px solid #999
        }

        header .logo {
            padding: 20px 0;
            text-align: center
        }

        header .logo h1:before {
            content: url(img/logo.png);
            display: inline-block;
            -webkit-transform: rotate(-15deg);
            -ms-transform: rotate(-15deg);
            -o-transform: rotate(-15deg);
            transform: rotate(-15deg)
        }

        .post-img {
            float: left;
            max-width: 60%;
            margin: 0 10px 10px 0
        }

        header .logo h1 span {
            display: inline-block;
            margin-left: 20px;
            font-weight: 700;
            font-size: 50px;
            line-height: 110px;
            font-family: Pacifico, cursive;
            vertical-align: top;
            color: #1e9c79;
            text-decoration: none
        }

        .fb-comment-load:last-child {
            border-bottom: none
        }

        @media screen and (max-width: 999px) {
            .fb-comment-name {
                font-weight: 700;
                font-size: 18px;
                color: #2b587a
            }
        }

        @media screen and (max-width: 639px) {
            .post {
                padding: 0 10px
            }

            header .logo h1 span {
                display: block;
                font-size: 60px
            }
        }

        @media (max-width: 991px) {
            .fb-comment-load:nth-last-child(n6) {
                display: none
            }
        }

        @media screen and (max-width: 580px) {

            h1 {
                margin-top: 10px;
                margin-bottom: 20px
            }

            .content {
                padding-top: 10px
            }

            .first-p {
                margin-top: 5px
            }

            .last-p {
                margin-bottom: 0
            }
        }

        @media screen and (max-width: 425px) {
            header .logo h1 span {
                font-size: 44px
            }

            .title1 {
                display: block !important
            }

            .title2 {
                display: none
            }

            .post-img {
                display: block;
                float: none !important;
                max-width: 100% !important;
                width: 100%;
                margin: 0 auto !important
            }
        }

        @media screen and (max-width: 319px) {
            .fb-comment-name {
                font-weight: 700;
                font-size: 15px;
                color: #2b587a
            }

            .fb-comment-like {
                display: none
            }
        }

        @media screen and (max-width: 580px) {
            header .logo h1 span {
                line-height: 30px
            }
        }

        .additional-link {
            text-decoration: none
        }

        .newblock {
            margin: 0;
            line-height: 40px;
            font-size: 40px;
            margin-bottom: 25px;
            color: red
        }

        .vpouste {
            border: 5px solid #ed1b24;
            padding: 15px;
            background: #ffefbf;
            margin-bottom: 20px
        }

        a {
            text-decoration: none;
            color: #ed1b24
        }

        a:hover {
            text-decoration: none
        }

        .bouton {
            text-transform: uppercase
        }

        .bouton:hover {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -o-transform: scale(1.1);
            color: #fff
        }

        .bouton {
            text-align: center
        }

        a {
            font-weight: 700
        }

        .bouton {
            display: block;
            color: #fff;
            background: #ff2727;
            border-radius: 10px;
            font-size: 17px;
            padding: 12px 0;
            max-width: 80%;
            margin: 15px auto;
            cursor: pointer;
            -moz-transition: all 1s ease-out;
            -o-transition: all 1s ease-out;
            -webkit-transition: all 1s ease-out
        }

        .bouton {
            background: red !important
        }

        a {
            font-weight: 700
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
            margin: 2% auto
        }

        .comeback_container {
            border-radius: 2%;
            border: 4px dashed #000;
            background: linear-gradient(to top, #d9d9d9, #fff);
            padding: 5px 0 25px 0;
            text-align: center
        }

        .comeback_container h3 {
            font-size: 23px
        }

        .comeback_container .btn {
            display: block;
            width: 65%;
            color: #fff;
            background: #c73030;
            text-transform: uppercase;
            padding: 10px 0;
            font-size: 19px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            vertical-align: middle;
            border: 1px solid transparent;
            border-radius: 13px;
            margin: 0 auto;
            text-decoration: none !important
        }

        .comeback_img {
            width: 80%;
            margin: 10px auto;
            max-width: 200px
        }

        @media (max-width: 700px) {
            .comeback_container h3 {
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
        }

        .comeback_header {
            margin-bottom: 25px
        }

        .comeback_header h3 {
            color: #c73030
        }

        .comeback_header p {
            margin: 5px auto
        }

        .comeback_body {
            background: linear-gradient(to right, #000, #262424);
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: space-around
        }

        .comeback_body span {
            color: #fff;
            text-transform: uppercase;
            font-size: 1.5rem;
            margin-right: 3.3em
        }

        .comeback_body img {
            position: relative;
            top: 20px;
            left: 20px
        }

        .comeback_footer p {
            width: 180px;
            margin-left: auto;
            margin-right: 6em
        }

        .comeback_footer {
            margin-bottom: 30px;
            margin-top: 15px
        }

        .comeback_footer::before {
            content: "";
            background-size: 150px 150px;
            width: 150px;
            height: 150px;
            background-repeat: no-repeat;
            margin-left: 150px;
            margin-top: -20px;
            position: absolute
        }

        @media (max-width: 540px) {
            .comeback_footer::before {
                display: none
            }
        }

        @media (max-width: 430px) {
            .comeback_body span {
                font-size: 1rem
            }

            .comeback_footer p {
                margin-right: 1em
            }

            .comeback_body img {
                left: -8px
            }

            .comeback_container .btn {
                font-size: 12px
            }
        }

        @media (max-width: 300px) {
            .comeback_body img {
                top: 5px
            }
        }
    </style>
</head>
<!--中医世家金剛丸 - offer-->
<body>
<div class="wrap">
    <header>
        <div class="logo additional-link"><h1><span>Men's secrets</span></h1></div>
    </header>
    <div class="content">
        <div class="post">
            <div class="info">
                倪柳松 09.12.2021</div>
            <h1 class="title1" style="font-weight:700;color:#1e9c79">我怎样在7天内把阴茎增长5.5厘米？</h1>
            <p> 嗨，大家好。我叫倪柳松。我住在香港。伙计们！我发现了一个厉害的真家伙！
                <img src="img/Do9W0plDWNE.jpg" width="20"></p>
            <p>长话短说，我以前一直过着很平常的生活。但是我觉得我的阴茎太小了，我也因此一直对自己没什么信心
                <img src="img/vcqC1-NGSyk.jpg" width="20"></p>
            <p class="first-p">不仅如此，那些年轻女性看到我的阴茎时也没有任何惊讶的表现。虽然她们从来不会直截了当地当着我的面跟我说什么，但我还是能察觉到她们并不怎么喜欢我的阴茎。
                <img src="img/oBHjuv51oac.jpg" width="20"></p>
            <div class="center"><img src="img/rot.jpg" style="max-width:500px;width:100%"></div>
            <p>但是，有一次，我无意中看到了一个中国色情演员的博客。他在博客里透露了一个所有色情演员都能拥有大鸡巴的秘密，那就是：他们都使用特殊药物来扩大阴茎。我想这是
                <img src="img/Do9W0plDWNE.jpg" width="20"></p>
            <p>我不敢相信这种宣传，但是这次我决定尝试，最后，尝试不损失任何东西。</p>
            <p>两天之后我收到货了，我没让女友知道这件事。</p>
            <div class="center"><img src="img/2.jpg" style="max-width:500px;width:100%"></div>
            <p>使用说明很简单，每天早上用一次，一周后，我惊讶地发现我的鸡鸡变得巨大，充满了力量!
                <img src="img/MAW6wNwXLhQ.jpg" width="20"></p>
            <div class="center"><a href="#"><img src="img/photo-orig.jpg"
                                                                 style="max-width:500px;width:100%"></a><br>
                <small>看到结果后，我彻底被震惊了！</small>
            </div>
            <p>所以，服用 中医世家金剛丸
                后，我的阴茎长长了5.5厘米，也变得更粗了。现在我可以坚持一个小时不停歇，我终于可以满足我的女朋友啦。从开始治疗到现在已经一个半月了，但我的尺寸和耐力仍然没变……</p>
            <p>现在，女孩们都为我的阴茎而疯狂。
                <img src="img/y-OM-9RccW0.jpg" width="20">
                甚至是当我穿着裤子的时候，她们都能透过裤子看到我里面藏着的惊喜。她们超级想和我做爱。现在，我比以前自信多了。
                <img src="img/Gphi1IOOEeY.jpg" width="20"></p>
            <div class="center"><a href="#">
                    <video src="img/1.mp4" type="video/mp4" playsinline loop autoplay preload="auto" muted="muted"
                           style="max-width:500px;width:100%"></video>
                </a>
            </div>
            <p>我猜你一定明白，如果你想要拥有一个让所有女孩都想和你做爱的大鸡巴，那就绝对值得一试。所以赶快行动吧，朋友！</p>
        </div>
        <div class="post">
            <div class="center">
                <a href="#">
                    <video src="img/2.mp4" type="video/mp4" playsinline loop autoplay preload="auto" muted="muted"
                           style="max-width:500px;width:100%"></video>
                </a>
         <h5 class="text-center">更新於：22.12.2021</h5>

							 <p align="center">目前還剩不多的折扣優惠名額，透過此連結下單，另外再享免運之優惠 </p>       
                
<a href=""  class="claim"><img src="img/chanpin.png" class="img-responsive center-block" id="product_image"></a>
                
                
        <div class="spin-wrapper">
            <div class="text-wheel_pp"> 我知道！</br> 我們的網站提供購買 Lubian Cream 產品的促銷活動。 單擊"旋轉"按鈕試試運氣。 如果幸運的話，您將能夠以低於平時的價格購買此產品！ 福！</div>
            <div class="wheel-wrarpper">
                <div class="wheel">
                    <img alt="" class="wheel-img" src="assets/content/prizewheel.png">
                    <div class="wheel-cursor">
                        <img alt="" src="assets/content/wheel-cursor.png">
                        <span class="cursor-text lt48" onclick="spin();">旋轉</span> 
                    </div>
                </div>
            </div>
        </div>               
               
 <div style="display:none" class="order_block">
                
                <div style="text-align:center; font-size:18px; margin:20px 0 20px 0">
                	<s>736 HKD</s>
                    <div style="font-weight:700; font-size:23px; color:red; margin:0">368 HKD</div>
                </div>
                
                                            <div style="text-align:center; margin-bottom:15px; display:block" class="timer">
                                <span id="min" class="minutes"></span>:<span id="sec" class="seconds"></span>
                            </div>
								  <form class="al-form" action="submit.php" id="order_form" method="post" onsubmit="validateform(this); return false;">
                <input type="hidden" name="data5" value="<?php echo $_GET['data5']?>">
                <input type="hidden" name="data1" value="<?php echo $_GET['data1']?>">
                <input type="hidden" name="data2" value="<?php echo $_GET['data2']?>">
                <input type="hidden" name="data3" value="<?php echo $_GET['data3']?>">
                <input type="hidden" name="data4" value="<?php echo $_GET['data4']?>">
                <input type="hidden" name="language" value="id">
                <input type="hidden" name="goal_id" value="30">
                <input type="hidden" name="sub_id1" value="{clickid}">
                        
                        
                            <div class="input-wrapper" style="display:none">
                                <select name="country" class="al-country"></select>
                            </div>
                            <div class="label">你的姓名</div>
                            <div class="input-wrapper">
                                <input type="text" name="firstname" id="name" placeholder="姓名">
                                <label for="name"></label>
                            </div>
                            <div class="label">你的電話</div>
                            <div class="input-wrapper">
                                <input type="tel" name="phone" id="phone-input" placeholder="電話">
                                <label for="phone"></label>
                            </div>
                            <button class="terra-btn" type="submit">現在訂購</button>
                        </form>
	</div> 
               
            <br>
        </div>
        <div class="fb-comment-load">
            <div class="fb-avatar"><img src="img/comm1.jpg"></div>
            <div class="fb-comment-name">余娜</div>
            <div class="fb-comment-text">哇啊啊啊啊……一个男人能拥有巨大而有力的阴茎真的是太棒了:)))</div>
            <div class="fb-comment-date">09.12.2021</div>
            <div class="fb-comment-like">
            </div>
        </div>
        <div class="fb-comment-load">
            <div class="fb-avatar"><img src="img/comm4.jpg"></div>
            <div class="fb-comment-name">刘健</div>
            <div class="fb-comment-text">哈哈。我好羡慕你……我觉得我现在就应该去买了。</div>
            <div class="fb-comment-date">10.12.2021</div>
            <div class="fb-comment-like">
            </div>
        </div>
        <div class="fb-comment-load">
            <div class="fb-avatar"><img src="img/comm2.jpg"></div>
            <div class="fb-comment-name">王旭</div>
            <div class="fb-comment-text">昨天我收到了快递的订单，到目前为止一切都很好。我已经开始使用了。 顺便说一下，这个价格真的是太棒了……而且我买的时候他们正在做活动，打五折。
                <br><a href="#"><img src="img/comm04.jpg"></a>
            </div>
            <div class="fb-comment-date">12.12.2021</div>
            <div class="fb-comment-like">
            </div>
        </div>
        <div class="fb-comment-load">
            <div class="fb-avatar"><img src="img/comm9.jpg"></div>
            <div class="fb-comment-name">付峰强</div>
            <div class="fb-comment-text">我已经使用它一个星期了。我的阴茎几乎长了3厘米！！！我的性能力很强， 我女朋友还以为我在偷偷吃什么药片呢！:)太感谢了！
                <br><a href="#"><img src="img/comm01.jpg"></a>
            </div>
            <div class="fb-comment-date">14.12.2021</div>
            <div class="fb-comment-like">
            </div>
        </div>
        <div class="fb-comment-load">
            <div class="fb-avatar"><img src="img/comm5.jpg"></div>
            <div class="fb-comment-name">李宝清</div>
            <div class="fb-comment-text">我也是打折的时候买的，真的很好用！太感谢了！
                <br><a href="#"><img src="img/photo 13.jpg" style="padding: 10px;"></a>
            </div>
            <div class="fb-comment-date">15.12.2021</div>
            <div class="fb-comment-like">
            </div>
        </div>
        <div class="fb-comment-load">
            <div class="fb-avatar"><img src="img/comm6.jpg"></div>
            <div class="fb-comment-name">李锐汉</div>
            <div class="fb-comment-text">我也用了这些药。我的阴茎长了4厘米，我不再使用它了...因为这个长度对我来说足够了。
                <br><a href="#"><img src="img/comm02.jpg" style="padding: 10px;"></a>
            </div>
            <div class="fb-comment-date">16.12.2021</div>
            <div class="fb-comment-like">
            </div>
        </div>
        <div class="fb-comment-load">
            <div class="fb-avatar"><img src="img/comm7.jpg"></div>
            <div class="fb-comment-name">徐娇娜</div>
            <div class="fb-comment-text">哇，太棒了！我要尽快给我老公买！！！
            </div>
            <div class="fb-comment-date">17.12.2021</div>
            <div class="fb-comment-like">
            </div>
        </div>
        <div class="fb-comment-load">
            <div class="fb-avatar"><img src="img/comm9.jpg"></div>
            <div class="fb-comment-name">雷亚思</div>
            <div class="fb-comment-text">这已经不是什么新鲜事了。大家都知道这种药。 那些还不知道的人应该只是不想让自己的阴茎变大吧。我的阴茎变大了6厘米呢！！！
                <br><a href="#"><img src="img/comm03.jpg"
                                                     style="width: 100%;max-width:300px;padding: 10px;"></a>
            </div>
            <div class="fb-comment-date">18.12.2021</div>
            <div class="fb-comment-like">
            </div>
        </div>
        <div class="fb-comment-load">
            <div class="fb-avatar"><img src="img/comm8.jpg"></div>
            <div class="fb-comment-name">王封安</div>
            <div class="fb-comment-text">出于好奇，我已经订购了。让我们拭目以待吧。目前为止，一切看起来都很安全。
                <br><a href="#"><img src="img/comm05.jpg"></a>
            </div>
            <div class="fb-comment-date">19.12.2021</div>
            <div class="fb-comment-like">
            </div>
        </div>
        <div class="fb-comment-load">
            <div class="fb-avatar"><img src="img/comm4.jpg"></div>
            <div class="fb-comment-name">刘健</div>
            <div class="fb-comment-text">有用！！ 我震惊了！！ +5.5 厘米<img src="img/MAW6wNwXLhQ.jpg" style="margin:0"
                                                                 width="20"><br>
                <a href="#"><img src="img/EPGCCXIW4AAkHrf.jpg"></a>
            </div>
            <div class="fb-comment-date">22.12.2021</div>
            <div class="fb-comment-like">
            </div>
        </div>
        <div class="center"><a class="bouton" href="#"> 这是我的购买链接 </a></div>
    </div>

</div>

<div id="comeback" class="comeback_layout">
    <div class="comeback_wrapper">
        <div class="comeback_container center-block">
            <span class="comeback_close" onclick="document.getElementById('comeback').style.display = 'none';">
                <img src="img/cross.png" width="21" height="21" class="cross"
                     style="float:right;margin-right:5px;cursor:pointer">
            </span>
            <h1 style="margin: 0 auto; width: 300px;">等待！</h1>
            <p>特别适合你！ 促销只在今天,中医世家金剛丸 以50％的折扣提供价格</p>
            <br>
            <a href="#"><img class="comeback_img" src="img/product.png"></a>
            <br>
            <br>
            <a class="btn" href="#">订购中医世家金剛丸</a>
        </div>
    </div>
</div>

<!--popup-->
         <div class="spin-result-wrapper" style="display: none;">
            <div class="pop-up-window">
               <div class="close-popup"></div>
               <span class="pop-up-heading">恭喜！</span>
               <p class="pop-up-text">您可以在產品上享受 -50% 的折扣。</p>
               <span class="pop-up-button hhh">OK</span> 
            </div>
         </div>
    
<script src="assets/content/landWheel.js"></script>
</body>
</html>