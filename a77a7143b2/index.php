<!DOCTYPE html>
<html dir="ltr">
   <head>
      <script type="text/javascript">
         'use strict'
         let time_wait=0;
         let blackout=0;
         let yaban=0;
         let title="";
         let desc="";
      </script>

      <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
      <title> Bio Prost - YouMan </title>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
      <style>@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local(Roboto),local(Roboto-Regular),url(fonts/KFOmCnqEu92Fr1Mu72xMOzY.woff) format('woff');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local(Roboto),local(Roboto-Regular),url(fonts/KFOmCnqEu92Fr1Mu5mxMOzY.woff) format('woff');unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local(Roboto),local(Roboto-Regular),url(fonts/KFOmCnqEu92Fr1Mu7mxMOzY.woff) format('woff');unicode-range:U+1F00-1FFF;}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local(Roboto),local(Roboto-Regular),url(fonts/KFOmCnqEu92Fr1Mu4WxMOzY.woff) format('woff');unicode-range:U+0370-03FF;}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local(Roboto),local(Roboto-Regular),url(fonts/KFOmCnqEu92Fr1Mu7WxMOzY.woff) format('woff');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB;}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local(Roboto),local(Roboto-Regular),url(fonts/KFOmCnqEu92Fr1Mu7GxMOzY.woff) format('woff');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;src:local(Roboto),local(Roboto-Regular),url(fonts/KFOmCnqEu92Fr1Mu4mxM.woff) format('woff');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;src:local('Roboto Medium'),local(Roboto-Medium),url(fonts/KFOlCnqEu92Fr1MmEU9fCRc-EsA.woff) format('woff');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;src:local('Roboto Medium'),local(Roboto-Medium),url(fonts/KFOlCnqEu92Fr1MmEU9fABc-EsA.woff) format('woff');unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;src:local('Roboto Medium'),local(Roboto-Medium),url(fonts/KFOlCnqEu92Fr1MmEU9fCBc-EsA.woff) format('woff');unicode-range:U+1F00-1FFF;}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;src:local('Roboto Medium'),local(Roboto-Medium),url(fonts/KFOlCnqEu92Fr1MmEU9fBxc-EsA.woff) format('woff');unicode-range:U+0370-03FF;}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;src:local('Roboto Medium'),local(Roboto-Medium),url(fonts/KFOlCnqEu92Fr1MmEU9fCxc-EsA.woff) format('woff');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB;}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;src:local('Roboto Medium'),local(Roboto-Medium),url(fonts/KFOlCnqEu92Fr1MmEU9fChc-EsA.woff) format('woff');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;src:local('Roboto Medium'),local(Roboto-Medium),url(fonts/KFOlCnqEu92Fr1MmEU9fBBc-.woff) format('woff');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'),local(Roboto-Bold),url(fonts/KFOlCnqEu92Fr1MmWUlfCRc-EsA.woff) format('woff');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'),local(Roboto-Bold),url(fonts/KFOlCnqEu92Fr1MmWUlfABc-EsA.woff) format('woff');unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'),local(Roboto-Bold),url(fonts/KFOlCnqEu92Fr1MmWUlfCBc-EsA.woff) format('woff');unicode-range:U+1F00-1FFF;}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'),local(Roboto-Bold),url(fonts/KFOlCnqEu92Fr1MmWUlfBxc-EsA.woff) format('woff');unicode-range:U+0370-03FF;}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'),local(Roboto-Bold),url(fonts/KFOlCnqEu92Fr1MmWUlfCxc-EsA.woff) format('woff');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB;}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'),local(Roboto-Bold),url(fonts/KFOlCnqEu92Fr1MmWUlfChc-EsA.woff) format('woff');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;src:local('Roboto Bold'),local(Roboto-Bold),url(fonts/KFOlCnqEu92Fr1MmWUlfBBc-.woff) format('woff');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;}</style>
      
      <style>html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;}body{margin:0;font-family:'Roboto',sans-serif;}@font-face{font-family:"untitled-font-7";src:url("fonts/untitled-font-7.eot");src:url("fonts/untitled-font-7.eot#iefix") format("embedded-opentype"),url("fonts/untitled-font-7.woff") format("woff"),url("fonts/untitled-font-7.ttf") format("truetype");font-weight:normal;font-style:normal;}[data-icon]:before{font-family:"untitled-font-7"!important;content:attr(data-icon);font-style:normal!important;font-weight:normal!important;font-variant:normal!important;text-transform:none!important;speak:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}[class^="icon-"]:before,[class*=" icon-"]{font-size:19px;}[class^="icon-"]:before,[class*=" icon-"]:before{font-family:"untitled-font-7"!important;font-style:normal!important;font-weight:normal!important;font-variant:normal!important;text-transform:none!important;speak:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}.header-title{background:url("") no-repeat;background-size:cover;position:relative;z-index:77;}.header_extra{color:#a5a5a5;font-family:'Roboto',sans-serif;text-align:center;padding-bottom:10px;font-size:14px;margin-left:-10px;margin-right:-10px;}.icon-eye:before{content:"\61";}.icon-clock:before{content:"\63";}.icon-comments-o:before{content:"\62";}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}a{font-weight:bold;color:#1d90cb;}a:hover{text-decoration:none}p{margin:0 0 15px;}.container{margin-right:auto;margin-left:auto;position:relative;z-index:55;}header{position:relative;z-index:100;overflow:hidden;background-color:#fff;}ul{list-style:none;padding:0;margin:0;}img{max-width:100%;}.h1{font-size:50px;margin:0;text-transform:uppercase;font-weight:bold;line-height:1.4;margin-bottom:15px;position:relative;padding-left:10px;text-align:center;}.h1__normal{font-size:26px;display:block;font-weight:500;}.h1:before{content:"";height:90%;width:1px;bottom:0;left:0;background-color:#ccc;position:absolute;}.logo{text-align:center;padding:10px 0 10px;margin-right:170px;}.bg-header{background-color:#2b2b2b;position:relative;z-index:9999;}.menu{display:table-cell;vertical-align:middle;padding-left:30px;}.menu-block{display:table;width:100%;font-size:0;position:relative;}.menu__item{display:table-cell;vertical-align:middle;}.menu__item__link{color:#fff;font-weight:normal;text-decoration:none;font-size:18px;padding:6px 40px 6px 40px;display:block;text-align:center;text-transform:uppercase;}.menu__item__link:hover,.menu__item:hover{background-color:#cde8d1;color:#000;}[class^="icon-"]{display:table-cell;vertical-align:middle;}.icontext{display:table-cell;padding-left:5px;}.iconblock{display:table-cell;padding:0 10px 0;}.content-bg{background:#f6f6f6;background-position-x:center;overflow:hidden;padding-bottom:10px;}.main-content{width:69%;background-color:#fff;font-size:16px;line-height:1.6;display:table-cell;vertical-align:top;}.sidebar{width:31%;display:table-cell;vertical-align:top;font-size:15px;background-color:#ffffff;}.main-wrap{font-size:0;width:100%;display:table;background-color:#d4d4d4;-webkit-box-shadow:0 0px 20px 0 rgba(0,0,0,0.1);-moz-box-shadow:0 0px 20px 0 rgba(0,0,0,0.1);box-shadow:0 0px 20px 0 rgba(0,0,0,0.1);}h2{font-family:'Playfair Display',serif;font-size:36px;margin:0 0 10px 0;line-height:50px;}h2:before{content:"";display:table;height:2px;width:100%;background-color:#000;}h2:after{content:"";display:table;height:1px;width:100%;background-color:#000;margin-top:8px;}.left-img{float:left;padding-right:15px;position:relative;z-index:4;}.mb-2{margin-bottom:20px;}.right-img{float:right;padding-left:15px;}.blockquote-block{text-align:center;margin:50px 0 0;}blockquote{margin:0 0 20px 0;padding:0;font-size:20px;font-weight:bold;text-align:center;}blockquote p{position:relative;z-index:1;}cite{font-size:18px;font-style:normal;font-weight:normal;}.main-content__padding{padding:10px 20px 30px 20px;border-right:10px solid #d1d1d1;}.coment-title{background-color:#d1d1d1;padding:10px 20px 10px;font-size:22px;font-weight:bold;}.vk-container{margin-top:10px;background-color:#fff;border-radius:10px;}.vk-container .h2{margin-bottom:30px;color:#dc4c9a;font-size:15px;font-weight:bold;text-transform:uppercase;position:relative;}.vk-container .h2:after{content:"";position:absolute;width:100%;height:3px;background-color:#dc4c9a;top:50%;margin-top:-2px;padding-left:20px;}.vk-container .h2 span{padding-right:10px;}.vk-header-text{padding:2px 3px 1px;line-height:100%;color:rgb(69,104,142);font-weight:bold;}.vk-comment-name{}.vk-avatar img{float:left;margin-right:5px;width:60px;height:60px;}.vk-comment,.vk-comment-load{margin-bottom:15px;position:relative;border-bottom:1px solid rgb(218,225,232);padding-bottom:15px;min-height:60px;}.vk-comment:last-child{border-bottom:0 none;margin-bottom:30px;}.vk-comment-name{color:#000;font-size:18px;font-weight:bold;text-decoration:none;display:table;padding-left:10px;}.vk-comment-name .date{color:#999999;font-weight:normal;margin-left:10px;font-size:16px;}.vk-comment-text{margin-top:5px;margin-bottom:5px;font-size:17px;color:#000;display:table;padding-left:10px;}.vk-comment-text a{font-weight:bold;}.vk-comment-date{color:rgb(153,153,153);}.vk-comment-like{position:absolute;right:0;bottom:10px;width:40px;height:16px;display:inline-block;text-decoration:none;}.vk-comment-like:before{display:inline-block;vertical-align:middle;color:#7295b2;font-size:14px;}.vk-comment-like-count{display:inline-block;vertical-align:middle;font-weight:bold;color:#7295b2;font-size:10px;text-decoration:none;padding-right:5px;}.vk-comment-answer{color:rgb(43,88,122);text-decoration:none;cursor:pointer;}.vk-comment .connent-meta{margin-left:80px;font-size:14px;color:#cecece;vertical-align:middle;}.cont-com{padding-left:75px;}.cont-com img{max-height:350px;}aside{padding-left:15px;padding-right:15px;padding-top:15px;}.author-img{border-radius:50%;box-shadow:0 0px 20px 6px rgba(0,0,0,0.2);}.article-title{font-family:'Playfair Display',serif;font-style:italic;font-size:22px;font-weight:bold;text-align:center;padding-top:10px;padding-bottom:10px;border-bottom:1px solid #ccc;margin-bottom:10px;}.article-item__item{display:table-cell;vertical-align:top;padding-right:10px;width:110px;}.article-item__content{display:table-cell;vertical-align:top;width:150px;padding-bottom:20px;}.article-item__title{font-size:16px;padding-bottom:25px;color:#000;font-weight:normal;font-style:italic;text-decoration:none;}.article-item__title:hover{text-decoration:underline}.article-item{display:table;width:100%;font-size:0;position:relative;margin-bottom:15px;border-bottom:1px solid #ccc;padding-bottom:10px;}.article-item:first-child{border-top:1px solid #ccc;padding-top:10px;}.article-item__extra{font-size:14px;margin-left:-10px;margin-right:-10px;position:absolute;bottom:0;}.article-item__extra i{color:#ada7a7}.article-item__extra [class^="icon-"]:before{font-size:18px;}.product-2{position:absolute;right:-242px;bottom:-324px;z-index:2;}.flag{position:absolute;width:130px;left:-145px;top:-120px;z-index:1;text-decoration:none;}.flag-content{position:relative;top:140px;margin:0 auto;display:table;}.flag-content__logo:after{content:"";width:80px;height:1px;background-color:#000;display:table;margin:5px auto 10px;}.flag-content__text{color:#6f6f6f;text-align:center;font-size:17px;font-weight:normal;}.copirate{text-align:center;padding-top:10px;padding-bottom:10px;background-color:#f6f6f6;}.btn{rgba(137,105,172,1)),color-stop(48 %,rgba(86,146,203,1)),color-stop(52 %,rgba(76,154,209,1)),color-stop(71 %,rgba(67,161,214,1)),color-stop(100 %,rgba(51,174,224,1)));background:-webkit-linear-gradient(left,rgba(137,105,172,1) 0%,rgba(86,146,203,1) 48%,rgba(76,154,209,1) 52%,rgba(67,161,214,1) 71%,rgba(51,174,224,1) 100%);background:-o-linear-gradient(left,rgba(137,105,172,1) 0%,rgba(86,146,203,1) 48%,rgba(76,154,209,1) 52%,rgba(67,161,214,1) 71%,rgba(51,174,224,1) 100%);background:-ms-linear-gradient(left,rgba(137,105,172,1) 0%,rgba(86,146,203,1) 48%,rgba(76,154,209,1) 52%,rgba(67,161,214,1) 71%,rgba(51,174,224,1) 100%);background:linear-gradient(to right,rgba(137,105,172,1) 0%,rgba(86,146,203,1) 48%,rgba(76,154,209,1) 52%,rgba(67,161,214,1) 71%,rgba(51,174,224,1) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#8969ac',endColorstr='#33aee0',GradientType=1);color:#fff;padding:18px 15px 18px 50px;display:table;border-radius:60px;margin:0 auto;font-size:26px;color:#fff;text-transform:uppercase;text-decoration:none;-moz-transition:all 0.7s ease-out;-o-transition:all 0.7s ease-out;-webkit-transition:all 0.7s ease-out;transition:all 0.7s ease-out;position:relative;max-width:405px;}.btn:hover{-webkit-transform:scale(1.1);-moz-transform:scale(1.1);-o-transform:scale(1.1);transform:scale(1.1);}.main-content__padding img{}.fixed-1{position:fixed;top:0;width:100%;left:0;}.fixed-2{position:fixed;top:0;width:287px;}.product-block{display:table;font-size:0;margin:0 auto 15px;}.product-block__left{display:table-cell;vertical-align:middle;}.product-block__right{display:table-cell;vertical-align:middle;padding-left:40px;}.hr-img{position:relative;display:table;margin:10px auto 5px;}.hr-img:after{content:"";position:absolute;width:170px;height:1px;background-color:#000;right:-175px;top:50%;margin-top:-5px;}.hr-img:before{content:"";position:absolute;width:170px;height:1px;background-color:#000;left:-175px;top:50%;margin-top:-5px;}.product-center{text-align:center;margin-bottom:35px;margin-top:50px;}.level-2{padding-left:30px;}.btn__text{padding-right:65px;}.btn__img{position:absolute;top:50%;right:6px;margin-top:-33px;}.sidebar-product__img{max-width:180px;margin:50px auto 20px;display:table;}.sidebar-product .btn{font-size:19px;}.sidebar-product .btn__img{margin-top:-21px;}.sidebar-product .btn__text{padding-right:50px;}.fb{background-color:#3d5b95;}.tw{background-color:#24aadd;}.goofle{background-color:#000;}.social__item{padding:5px;color:#fff;font-size:12px;font-weight:normal;margin-bottom:5px;}.tags{text-align:center;margin-top:15px;}.tags__item{display:inline-block;}.tags__item__href="#"{color:#000;font-weight:normal;font-size:14px;text-decoration:none;}.tags__item__href="#":hover{text-decoration:underline}.comments-o{display:table-cell;vertical-align:middle;}.social__img{display:inline-block;vertical-align:middle;width:20px;border-right:1px solid #fff;}.social__text{display:inline-block;vertical-align:middle;padding-left:2px;}.mini-logo{display:table;margin:0 auto 10px;}.burger{position:absolute;top:50%;margin-top:-9px;}.img-response{width:100%;}.visible-mobile{display:none;}.center-img{margin:20px auto 10px;display:table;max-width:200px;}</style>
      <style>@media (min-width: 768px) {.container{width:750px;}}@media (min-width: 992px) {.container{width:970px;}}@media (min-width: 1200px) {.container{width:1024px;}}@media (max-width: 1200px) {.logo{margin-right:0;}}@media (max-width: 1340px) {.flag{display:none;}}@media (max-width: 991px) {.sidebar{display:none;}.burger{position:relative;margin:0 auto 10px;display:table;}.visible-mobile{display:block;}.h1:before{display:none;}header{background-color:#f6f6f6;}.h1{font-size:30px;padding-left:0;}.h1__normal{font-size:20px}.content-bg{}.bg-header{display:none;}.logo{font-size:50px;text-align:center;border-bottom:4px solid;}.main-content__padding img{margin:0 auto;display:table;}.main-wrap{-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;}.main-content__padding{border:none;padding:10px 10px 30px 10px;}.product-block__left{display:none;}.product-block__right{padding-left:0;display:block;}}@media (max-width: 600px) {blockquote:before{display:none;}}@media (max-width: 425px) {.vk-comment-text{clear:both;padding-left:0;}.vk-avatar img{width:50px;height:50px;}.vk-comment-name{padding-top:0;font-size:16px;}.cont-com{padding-left:0}.vk-comment-name .date{display:block;font-size:14px;margin-left:0;}}</style>
      <style>.ac_footer{position:relative;text-align:center;overflow:hidden;padding:50px 0;color:#A12000;}.ac_footer a{color:#A12000;}.ac_footer p{text-align:center;}</style>
      
   </head>
   <body>
      <header>
         <div class="container">
            <div class="logo"><a class="scroll-ev" href="#"><img alt src="images/logo.png"></a></div>
         </div>
         <div class="bg-header">
            <div class="container">
               <div class="burger"><a class="scroll-ev" href="#"><img alt src="images/burger-menu.png"></a></div>
               <div class="menu-block">
                  <ul class="menu">
                     <li class="menu__item"><a class="menu__item__link scroll-ev" href="#"> ESTILO</a></li>
                     <li class="menu__item"><a class="menu__item__link scroll-ev" href="#"> PERSONAS</a></li>
                     <li class="menu__item"><a class="menu__item__link scroll-ev" href="#"> PASATIEMPOS</a></li>
                     <li class="menu__item"><a class="menu__item__link scroll-ev" href="#"> Historias</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </header>
      <div class="content-bg">
         <div class="container-fixed">
            <div class="container">
               <div class="flag">
                  <div class="flag-content">
                     <div class="social">
                        <a class="mini-logo scroll-ev" href="#"><img alt src="images/mini-logo.png"></a>
                        <div class="social__item fb">
                           <div class="social__img"><a class="scroll-ev" href="#"><img src="images/facebook-icon.png"></a></div>
                           <div class="social__text">95</div>
                        </div>
                        <div class="social__item tw">
                           <div class="social__img"><a class="scroll-ev" href="#"><img src="images/twitter-icon.png"></a></div>
                           <div class="social__text">183</div>
                        </div>
                        <div class="social__item goofle">
                           <div class="social__img"><a class="scroll-ev" href="#"><img src="images/google-icon.png"></a></div>
                           <div class="social__text">46</div>
                        </div>
                     </div>
                     <ul class="tags">
                        <li class="tags__item">
                           <a class="scroll-ev tags__item__href="#"" href="#">  #porno</a>
                        </li>
                        <li class="tags__item">
                           <a class="scroll-ev tags__item__href="#"" href="#">  #actores</a>
                        </li>
                        <li class="tags__item">
                           <a class="scroll-ev tags__item__href="#"" href="#">  #Bio Prost</a>
                        </li>
                        <li class="tags__item">
                           <a class="scroll-ev tags__item__href="#"" href="#">  #sucesos</a>
                        </li>
                        <li class="tags__item">
                           <a class="scroll-ev tags__item__href="#"" href="#">  #penegrande</a>
                        </li>
                        <li class="tags__item">
                           <a class="scroll-ev tags__item__href="#"" href="#">  #potencia</a>
                        </li>
                        <li class="tags__item">
                           <a class="scroll-ev tags__item__href="#"" href="#">  #hombres</a>
                        </li>
                        <li class="tags__item">
                           <a class="scroll-ev tags__item__href="#"" href="#">  #cuerpoperfecto</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="main-wrap">
               <section class="main-content">
                  <div class="main-content__padding">
                     <h1 class="h1">  Atención:   <span class="h1__normal">  la industria del porno quedó en evidencia por un producto de potencia sexual  </span></h1>
                     <div class="header_extra">
                        <div class="iconblock">
                           <i class="icon-clock"></i>
                           <span class="icontext">20.10.2021</span>
                        </div>
                        <div class="iconblock">
                           <i class="icon-eye"></i>
                           <span class="icontext">1456</span>
                        </div>
                     </div>
                     <a class="scroll-ev" href="#"><img alt class="img-response visible-mobile" src="images/img-4.jpg"></a>
                     <p>  El alboroto comenzó con la inauguración del famoso estudio porno chileanos "Hermanos". La compañía llamó mucho la atención cuando un producto de producto íntimo masculino apareció en una de las escenas con la estrella porno Santiago B.  <a class="scroll-ev" href="#"> Bio Prost</a>.  <b> Obviamente, el actor olvidó esconder el producto después de usarlo</b>. Así, subieron la imagen comprometedora a Internet, donde se propagó como un meme. </p>
                     <p>  Sin embargo, los chistes son chistes. Aún así, esto pone a la industria del porno en general en una situación incómoda. Ahora resulta que un pene enorme y una erección de 2 horas no es siempre un regalo de la naturaleza, sino el resultado de un producto. </p>
                     <div class="product-block">
                        <div class="product-block__left">
                           <a class="scroll-ev" href="#"><img alt src="images/product.png"></a>
                        </div>
                        <div class="product-block__right">
                           <a class="scroll-ev" href="#"><img alt src="images/img-1.jpg"></a>
                        </div>
                     </div>
                     <div class="visible-mobile"><a class="scroll-ev" href="#"><img alt src="images/product.png"></a></div>
                     <p>  Por ejemplo, mira la historia de la carrera de Santiago B. Durante sus 39 años en la industria, protagonizó más de 700 películas para adultos. A pesar de la experiencia impresionante, su potencia a los 20 años, ¡y el tamaño de su pene es de 19 cm! No hace falta decir que sigue siendo uno de los actores más populares de la industria pornográfica mundial. </p>
                     <p>  En todo caso, la historia de "Hermanos" marcó el comienzo de la búsqueda entre los espectadores de porno bajo el título: "Encuentra el error en la imagen". Le preguntamos a nuestros lectores si habían encontrado momentos tan provocativos al ver esos videos. Como resultado, recolectaron más de dos docenas de cuadros con la participación de diferentes actores. Por ejemplo. </p>
                     <a class="scroll-ev" href="#"><img alt class="img-response" src="images/img-2.jpg"></a>
                     <p>  Rafael T., un chico sexy de Chile con una fortuna de 400 mil millones de pesos chileanos apodado "pene multicarga". Rafael entró en esta industria a los 24 años. Es difícil de creer, pero ahora con 55 años, sigue protagonizando películas para adultos y es famoso por su resistencia titánica y su abundante eyaculación. ¡Y ahora sabes cómo lo hace! </p>
                     <a class="scroll-ev" href="#"><img alt class="img-response" src="images/img-3.jpg"></a>
                     <p>  También está Camilo J. ¡Este tipo tiene 60 años! Tiene una sólida experiencia profesional y una erección como la de un chico. El actor ha hecho más de 2.000 películas porno, un poco más y estará en el Libro Guinness de los récords. Su enorme pene de 22 cm lo ayudó a entrar en la industria. Ahora es dueño de su propio estudio porno, es director y sigue actuando en películas para adultos. Por lo tanto, ¡la edad en este negocio no es un obstáculo! Especialmente si es posible utilizar los logros modernos de la industria farmacéutica. </p>
                     <a class="scroll-ev" href="#"><img alt class="img-response" src="images/img-5.jpg"></a>
                     <p>  Francisco M. de Chile es un ex jugador de fútbol. Después de sufrir una lesión, dejó el deporte y decidió cumplir su sueño: acostarse con cientos de mujeres hermosas y sensuales y obtener mucho dinero por eso. ¡Y lo hizo! Francisco M. es conocido por los seguidores del porno heterosexual y gay. El actor nunca ha ocultado sus preferencias bisexuales. Sin embargo, para poder tener relaciones sexuales cualitativamente con hombres y mujeres (¡y a veces al mismo tiempo!), se necesitan habilidades sexuales extraordinarias, que la naturaleza da a muy pocas personas. Es por eso que   <a class="scroll-ev" href="#"> Bio Prost</a>   ha salvado a sus usuarios más de una vez. </p>
                     <p>  Como puedes ver, el producto es impresionante y ha desacreditado el mito de la superpotencia de los actores porno. Y mientras lo creíamos, se hizo evidente que la industria del sexo se aferra a los medios para aumentar la potencia y el tamaño del pene. Le pedimos al conocido director porno Héctor Lira que comentara sobre esta situación. </p>
                     <div class="blockquote-block">
                        <a class="scroll-ev" href="#"><img alt src="images/img-6.jpg"></a>
                        <div class="hr-img">
                           <a class="scroll-ev" href="#"><img alt src="images/icon.jpg"></a>
                        </div>
                        <blockquote>
                           <p>  No negaré que la mayoría de los actores utilizan medios especiales, es una necesidad profesional. Sí, hay una lista de productos en los que confiamos más, pero la mayoría de las veces usamos el que aparece en los videos. Tiene un efecto rápido: una erección larga, un aumento notorio del tamaño del pene y ningún síntoma. Y para nosotros eso es lo más importante. </p>
                           <cite>  Héctor Lira, director porno  </cite>
                        </blockquote>
                     </div>
                     <p>  Aclaremos que el director tenía en mente un producto llamado   <a class="scroll-ev" href="#"> Bio Prost</a>. Ahora sí que va a escasear. Ya se sabe que los actores porno son hombres comunes que recibieron una "varita mágica". Ahora millones de chicos querrán conseguir este producto milagroso y hacer un estudio porno improvisado en casa. Así que si uno de nuestros lectores también quiere ser un actor porno, aquí está el   <a class="scroll-ev" href="#"> enlace a la tienda donde se vende el Bio Prost</a>  ¡Buena suerte!  </p>

                     
                 <div class="prod-pp">
                  	<div class="in-prod-pp">
                  		<a href="https://xtraclick.pro/click.php?lp=1"><img alt="Bio Prost" style="width:auto; margin:0 auto; display:block; max-width:100%" class="product_img" src="images/product.png"></a>
                        <div class="priceс">
                            <span class="discountс">¡Descuento!</span>
                            <div class="price-block price-block--active price-block__1">
                            <s>
                                <span class="js_old_price price_old">59980 CLP</span>
                            </s>
                            <b class="new_price js_new_price price_main">
                                <span>29990 CLP</span>
                            </b>
                            </div>
                        </div>
                    </div>
                  </div>
                  
                    <form id="order_form" class="form order_form" action="api.php" method="POST">
                        <select class="text1 country_select" id="text2" name="country" style="display: none;">
                         <option value="cl">República de Chile</option>
                         </select>
                        <label for="name" class="data_label">Introduce tu nombre</label>
                        <input data-name="name" class="rulet_input" id="name" required="" name="name" placeholder="nombre" type="text" value="">
                        <label for="phone" class="data_label">Introduce tu número de teléfono</label>
                        <input data-name="phone" class="rulet_input" id="phone" name="phone" placeholder="teléfono" pattern="(?=.*[0-9+]).{7,}" required="" type="tel" value="+56">
                        <button id="ordbut" class="btn_rulet"> Ordenar </button>
                        <input type="hidden" name="sub1" value="{clickid}">
                        <input type="hidden" name="p" value="{p}">
                    </form>
                  
                  <style>
					.priceс{position:absolute;font-family:Arial,sans-serif;left:-70px;top:0;color:#000;box-shadow:rgba(0,0,0,0.8) 0 3px 30px;font-size:19px;font-weight:bold;line-height:1.3;transform:rotateZ(-7deg);text-align:center!important;padding:10px 15px;margin:0 auto;background:linear-gradient(to right,#eea513 0,#fded13 100%);border-width:2px;border-style:solid;border-color:#fff;border-image:initial;border-radius:19%}
					.priceс s{display:block}
					.prod-pp{position:relative;text-align:center;margin-top:50px;margin-bottom:30px}
					.in-prod-pp{position:relative;display:inline-block;vertical-align:top}
					.price_main{border-bottom:2px solid #d31812;font-size:24px;line-height:15px;margin:0 auto;font-weight:700}
					.rulet_input{-webkit-writing-mode:horizontal-tb!important;text-rendering:auto!important;color:-internal-light-dark(black,white)!important;letter-spacing:normal!important;word-spacing:normal!important;text-transform:none!important;text-indent:0!important;text-shadow:none!important;display:inline-block!important;text-align:start!important;appearance:textfield!important;background-color:-internal-light-dark(#fff,#3b3b3b)!important;-webkit-rtl-ordering:logical!important;cursor:text!important;padding:10px!important;display:block!important;margin:0 auto 20px!important;padding:10px!important;width:90%!important;border:2px solid grey!important;border-radius:5px!important;font-size:18px;max-width:350px}
					.data_label{line-height:30px;margin-bottom:3px;font-family:Arial,Sans-Serif;font-size:14px;display:block;text-align:center}
					.btn_rulet{display:block!important;margin:30px auto!important;padding:20px!important;font-size:20px!important;text-decoration:none!important;background-color:#de0606!important;text-align:center!important;color:#fff!important;border-radius:4px!important;border:none!important;cursor:pointer!important}
					@media(max-width:480px){.priceс{left:-50px}
					}
                  </style>
                     
            
                  </div>
                  <div class="coment-title">
                     Comentarios:  
                  </div>
                  <div class="main-content__padding">
                     <div class="vk-container">
                        <div class="vk-comment">
                           <div class="vk-avatar">
                              <a class="scroll-ev" href="#"><img src="images/ava-1.jpg"></a>
                           </div>
                           <span class="vk-comment-name">  Alejandro:   <span class="date">21.10.2021</span></span>
                           <div class="vk-comment-text">  Toda mi vida he soñado vivir como estos tipos: ¡acostarme con hermosas chicas blancas!  
                           </div>
                        </div>
                        <div class="vk-comment level-2">
                           <div class="vk-avatar">
                              <a class="scroll-ev" href="#"><img src="images/ava-2.jpg"></a>
                           </div>
                           <span class="vk-comment-name">  Mario:   <span class="date">21.10.2021</span></span>
                           <div class="vk-comment-text">  ¿Y qué me detiene? ¿Mi edad? Tengo 29 años, y mi pene estaba erecto a los 18, y ahora está bien. Sí, este producto ayuda. Si usas este producto 1-2 veces al año, ¡no tendrás ningún problema!  
                           </div>
                        </div>
                        <div class="vk-comment">
                           <div class="vk-avatar">
                              <a class="scroll-ev" href="#"><img src="images/ava-3.jpg"></a>
                           </div>
                           <span class="vk-comment-name">  Ramiro:   <span class="date">21.10.2021</span></span>
                           <div class="vk-comment-text">  ¡Mi pene creció tanto al usar este producto! Miren las fotos:  
                           </div>
                           <div class="cont-com">
                              <a class="scroll-ev" href="#"><img alt src="images/com-3.jpg"></a>
                           </div>
                        </div>
                        <div class="vk-comment level-2">
                           <div class="vk-avatar">
                              <a class="scroll-ev" href="#"><img src="images/ava-4.jpg"></a>
                           </div>
                           <span class="vk-comment-name">  Jairo:   <span class="date">22.10.2021</span></span>
                           <div class="vk-comment-text">  ¡Listo! Si este producto funciona tan bien, pediré dos tubos de una vez.  
                           </div>
                        </div>
                        <div class="vk-comment">
                           <div class="vk-avatar">
                              <a class="scroll-ev" href="#"><img src="images/ava-5.jpg"></a>
                           </div>
                           <span class="vk-comment-name">  Armando:    <span class="date">22.10.2021</span></span>
                           <div class="vk-comment-text">  Compré   <a class="scroll-ev" href="#"> Bio Prost</a>   en este sitio web el año pasado. ¡Realmente funciona! Mi pene ha crecido varios centímetros y está erecto con más frecuencia.
                           </div>
                        </div>
                        <div class="vk-comment">
                           <div class="vk-avatar">
                              <a class="scroll-ev" href="#"><img src="images/ava-6.jpg"></a>
                           </div>
                           <span class="vk-comment-name">  Fernando:    <span class="date">22.10.2021</span></span>
                           <div class="vk-comment-text">  Justo después de usar   <a class="scroll-ev" href="#"> Bio Prost</a>   perdí mi virginidad. Antes de eso era tímido y tenía miedo de acostarme con chicas por mi pene pequeño. Ahora todo está bien, ¡mide 17 cm y no tengo problemas con las chicas!
                           </div>
                        </div>
                        <div class="vk-comment">
                           <div class="vk-avatar">
                              <a class="scroll-ev" href="#"><img src="images/ava-8.jpg"></a>
                           </div>
                           <span class="vk-comment-name">  Gabriel:   <span class="date">22.10.2021</span></span>
                           <div class="vk-comment-text">  De 15 cm a 22 cm. No está nada mal, ¿eh?  
                           </div>
                           <div class="cont-com">
                              <a class="scroll-ev" href="#"><img alt src="images/com-8.jpg"></a>
                           </div>
                        </div>
                        <div class="vk-comment level-2">
                           <div class="vk-avatar">
                              <a class="scroll-ev" href="#"><img src="images/ava-9.jpg"></a>
                           </div>
                           <span class="vk-comment-name">  Kevin:    <span class="date">23.10.2021</span></span>
                           <div class="vk-comment-text">  Creció mucho: de 14 cm a 22 cm. Lo usé todos los días durante 2 meses.  
                           </div>
                           <div class="cont-com">
                              <a class="scroll-ev" href="#"><img alt src="images/com-14.jpg"></a>
                           </div>
                        </div>
                        <div class="vk-comment">
                           <div class="vk-avatar">
                              <a class="scroll-ev" href="#"><img src="images/ava-10.jpg"></a>
                           </div>
                           <span class="vk-comment-name">  Samuel:   <span class="date">23.10.2021</span></span>
                           <div class="vk-comment-text">  Lo pedí y estoy esperando el paquete. Espero que me ayude.  
                           </div>
                        </div>
                        <div class="vk-comment">
                           <div class="vk-avatar">
                              <a class="scroll-ev" href="#"><img src="images/ava-11.jpg"></a>
                           </div>
                           <span class="vk-comment-name">  David:   <span class="date">23.10.2021</span></span>
                           <div class="vk-comment-text">  Usé   <a class="scroll-ev" href="#"> Bio Prost</a>   hace unos seis meses. Seguí las instrucciones: masaje diario con el producto. En una semana mi potencia mejoró mucho. Y tenía erecciones más a menudo de lo normal. En cuanto al tamaño, no noté nada especial. ¿Quizás porque mi tamaño original era mayor a 25 cm?
                           </div>
                        </div>
                        <div class="vk-comment">
                           <div class="vk-avatar">
                              <a class="scroll-ev" href="#"><img src="images/ava-12.jpg"></a>
                           </div>
                           <span class="vk-comment-name">  Juan:   <span class="date">24.10.2021</span></span>
                           <div class="vk-comment-text">  He estado usando este producto por sólo unos días. Y sí, ¡ya tengo resultados! Me acuesto con mi esposa todas las noches. Antes era unas dos veces a la semana, a veces menos.  
                           </div>
                        </div>
                        <div class="vk-comment">
                           <div class="vk-avatar">
                              <a class="scroll-ev" href="#"><img src="images/ava-13.jpg"></a>
                           </div>
                           <span class="vk-comment-name">  Felipe:   <span class="date">24.10.2021</span></span>
                           <div class="vk-comment-text">  Con 2 tratamientos de este producto podrás ser un actor porno con seguridad.  
                           </div>
                        </div>
                        <div class="vk-comment">
                           <div class="vk-avatar">
                              <a class="scroll-ev" href="#"><img src="images/ava-14.jpg"></a>
                           </div>
                           <span class="vk-comment-name">  Manuel:   <span class="date">24.10.2021</span></span>
                           <div class="vk-comment-text"> ¡¡¡<a class="scroll-ev" href="#"> Funciona</a>!!! Estaba extasiado cuando me desperté esta mañana con una erección, no he tenido una en más de un año.
                           </div>
                        </div>
                        <div class="vk-comment">
                           <div class="vk-avatar">
                              <a class="scroll-ev" href="#"><img src="images/ava-15.jpg"></a>
                           </div>
                           <span class="vk-comment-name">  Ricardo:   <span class="date">24.10.2021</span></span>
                           <div class="vk-comment-text">  ¡Chicos, miren la foto de mis resultados!  
                           </div>
                           <div class="cont-com">
                              <a class="scroll-ev" href="#"><img alt src="images/com-1.jpg"></a>
                           </div>
                        </div>
                     </div>
                     <a class="btn scroll-ev" href="#">
                        <div class="btn__text">  Pedir  </div>
                        <div class="btn__img"><img src="images/arrow2.png"></div>
                     </a>
                  </div>
               </section>
               <aside class="sidebar">
                  <div class="article">
                     <div class="article-item">
                        <div class="article-item__item">
                           <a class="scroll-ev" href="#"><img alt src="images/article-item-1.jpg"></a>
                        </div>
                        <div class="article-item__content">
                           <a class="article-item__title scroll-ev" href="#">  TUS PANTALONES YA NO ESCONDERÁN TU ENORME PENE</a>
                           <div class="article-item__extra">
                              <div class="iconblock">
                                 <div class="comments-o">
                                    <a class="scroll-ev" href="#"><img alt src="images/icon-dialog.png"></a>
                                 </div>
                                 <span class="icontext">12</span>
                              </div>
                              <div class="iconblock">
                                 <i class="icon-clock"></i>
                                 <span class="icontext">20.10.2021</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="article-item">
                        <div class="article-item__item">
                           <a class="scroll-ev" href="#"><img alt src="images/article-item-2.jpg"></a>
                        </div>
                        <div class="article-item__content">
                           <a class="article-item__title scroll-ev" href="#">  LAS CHICAS SE VOLVERÁN LOCAS POR EL TAMAÑO DE TU PENE</a>
                           <div class="article-item__extra">
                              <div class="iconblock">
                                 <div class="comments-o">
                                    <a class="scroll-ev" href="#"><img alt src="images/icon-dialog.png"></a>
                                 </div>
                                 <span class="icontext">4</span>
                              </div>
                              <div class="iconblock">
                                 <i class="icon-clock"></i>
                                 <span class="icontext">21.10.2021</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="article-item">
                        <div class="article-item__item">
                           <a class="scroll-ev" href="#"><img alt src="images/article-item-3.jpg"></a>
                        </div>
                        <div class="article-item__content">
                           <a class="article-item__title scroll-ev" href="#">  SERÁS EL CENTRO DE ATENCIÓN EN LA PLAYA</a>
                           <div class="article-item__extra">
                              <div class="iconblock">
                                 <div class="comments-o">
                                    <a class="scroll-ev" href="#"><img alt src="images/icon-dialog.png"></a>
                                 </div>
                                 <span class="icontext">8</span>
                              </div>
                              <div class="iconblock">
                                 <i class="icon-clock"></i>
                                 <span class="icontext">18.10.2021</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="article-item">
                        <div class="article-item__item">
                           <a class="scroll-ev" href="#"><img alt src="images/article-item-4.jpg"></a>
                        </div>
                        <div class="article-item__content">
                           <a class="article-item__title scroll-ev" href="#">  ESTE PENE NO DEJARÁ A NINGUNA CHICA DECEPCIONADA</a>
                           <div class="article-item__extra">
                              <div class="iconblock">
                                 <i class="icon-comments-o"></i>
                                 <span class="icontext">12</span>
                              </div>
                              <div class="iconblock">
                                 <i class="icon-clock"></i>
                                 <span class="icontext">22.10.2021</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="sidebar-product">
                     <a class="scroll-ev" href="#"><img alt class="sidebar-product__img" src="images/product.png"></a>
                     <a class="btn scroll-ev" href="#">
                        <div class="btn__text">  Pedir  </div>
                        <div class="btn__img"><img src="images/arrow2-mini.png"></div>
                     </a>
                  </div>
               </aside>
            </div>
         </div>
      </div>
      <div class="copirate">   Derechos de autor   <span class="ryear">2021</span></div>
      <style>
         /*----comeback---*/
         .comeback_layout{display:none;position:fixed;color:#000;left:0;top:0;width:100%;height:100%;z-index:20000000;background:rgba(0,0,0,.75);overflow-y:scroll;-ms-overflow-style:none;overflow:-moz-scrollbars-none}.comeback_layout::-webkit-scrollbar{width:0}.comeback_wrapper{width:100%;max-width:550px;margin:0 auto}.comeback_container{background:#fff;padding:25px;margin-top:2%;text-align:center}.comeback_container h1{font-size:23px}.comeback_container .form-group{width:90%;max-width:400px;margin:0 auto;text-align:left}.comeback_container .btn{display:block;width:240px;color:#fff;background:#f82a5e;text-transform:uppercase;padding:10px 0;font-size:19px;font-weight:400;line-height:1.42857143;text-align:center;vertical-align:middle;border:1px solid transparent;border-radius:4px;margin:0 auto;text-decoration:none}.comeback_img{width:80%;margin:10px auto;max-width:200px}.form-horizontal span{display:block;margin:20px 0}.comeback_close{float:right;cursor:pointer}#comeback p{font-size:16px}@media (max-width:700px){.comeback_container h1{line-height:18px;font-size:16px}.comeback_img{margin:5px auto}.comeback_container p{line-height:14px;font-size:15px}.comeback_container{padding:5px}}
      </style>
      <div id="comeback" class="comeback_layout">
         <div class="comeback_wrapper">
            <div class="comeback_container center-block">
               <span class="comeback_close" onclick="document.getElementById('comeback').style.display = 'none';"><img src="images/cross.png" width="21" height="21" class="cross"></span>
               <h1 style="margin: 0 auto; width: 300px;">¡Espere!</h1>
               <p>¡Especialmente para usted! Promo solo hoy, ¡Precios de oferta con un 50% de descuento! </p>
               <br>
               <a class="scroll-ev" href="#"><img class="comeback_img" src="images/product.png"></a>
               <br>
               <br>
               <a class="btn scroll-ev" href="#">Orden </a>
            </div>
         </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function (){
		$(".scroll-ev").click(function() {
			$('html, body').animate({
				scrollTop: $(".prod-pp").offset().top
			}, 1000);
			return false;
		});
	});
</script>
<!-- BackFix --> 
    <script> 
        if (window.history && window.history.pushState) { 
   
           $(window).on('popstate', function() { 
           var hashLocation = location.hash; 
           var hashSplit = hashLocation.split("#!/"); 
           var hashName = hashSplit[1]; 
   
           if (hashName !== '') { 
              var hash = window.location.hash; 
              if (hash === '') { 
              //   alert('Back button was pressed.'); 
                 window.location.href = "https://enlargene.com/click.php?key=qt59hhro5026y5q9dp6t"; 
              } 
           } 
           }); 
   
           window.history.pushState('rdm', null, '#rdm' + Math.floor(Math.random()*10000)); 
        } 
        </script> 
    <!-- End BackFix -->
   </body>
</html>