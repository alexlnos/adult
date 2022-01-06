<!DOCTYPE html>
<html lang="id">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
      <title>Men's Secrets</title>
      <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
      <meta http-equiv="x-dns-prefetch-control" content="on" />
      <style>
         a {
         font-weight: bold;
         }
         img {
         max-width: 100%;
         }
         .first-p {
         margin-top: -3px;
         }
         .fb-avatar img {
         float: left;
         margin-right: 10px;
         }
         .fb-comment-load {
         position: relative;
         margin-bottom: 15px;
         padding: 0 10px 15px;
         border-bottom: 1px solid rgb(218, 225, 232);
         }
         .fb-comment-name {
         font-weight: bold;
         font-size: 12px;
         color: rgb(43, 88, 122);
         }
         .fb-comment-text {
         margin-left: 60px;
         }
         .fb-comment-text img {
         display: block;
         }
         .fb-comment-date {
         margin-left: 60px;
         color: rgb(153, 153, 153);
         }
         .fb-comment-like:hover {
         cursor: pointer;
         opacity: 0.5;
         }
         body {
         margin: 0;
         padding: 0;
         }
         body * {
         font-family: "Arial", sans-serif;
         }
         h1,
         h2 {
         margin: 0;
         font-weight: normal;
         }
         h1 {
         font-size: 27px;
         }
         h2 {
         font-size: 21px;
         }
         a {
         color: rgb(186, 0, 9);
         }
         a:hover {
         color: rgb(255, 0, 0);
         text-decoration: none;
         }
         .wrap {
         min-width: 240px;
         max-width: 700px;
         margin: 0 auto;
         }
         body img {
         max-width: 100%;
         }
         .content {
         box-sizing: border-box;
         width: 100%;
         margin: 0 auto;
         background: rgb(255, 255, 255) none repeat scroll 0 0;
         border: 1px solid #1e9c79;
         border-radius: 10px;
         -webkit-box-shadow: 0 0 20px #ccc;
         box-shadow: 0 0 20px #ccc;
         }
         .post {
         padding: 15px;
         font-size: 17px;
         }
         .post .info {
         font-size: 11px;
         color: rgb(153, 153, 153);
         font-style: italic;
         }
         .post a {
         font-size: 19px;
         }
         .center {
         text-align: center;
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
         -webkit-transition: all 0.5s ease-in-out;
         -moz-transition: all 0.5s ease-in-out;
         -o-transition: all 0.5s ease-in-out;
         transition: all 0.5s ease-in-out;
         }
         .btn a:hover {
         -webkit-transform: scale(1.06);
         -moz-transform: scale(1.06);
         -ms-transform: scale(1.06);
         -o-transform: scale(1.06);
         transform: scale(1.06);
         }
         .footer {
         margin-top: 5px;
         padding: 15px;
         font-size: 14px;
         text-align: center;
         background: rgb(255, 255, 255) none repeat scroll 0 0;
         border-top: 1px solid rgb(153, 153, 153);
         }
         header .logo {
         padding: 20px 0;
         text-align: center;
         }
         header .logo h1:before {
         content: url(img/logo.png);
         display: inline-block;
         -webkit-transform: rotate(-15deg);
         -ms-transform: rotate(-15deg);
         -o-transform: rotate(-15deg);
         transform: rotate(-15deg);
         }
         .post-img {
         float: left;
         max-width: 60%;
         margin-right: 10px;
         }
         header .logo h1 span {
         display: inline-block;
         margin-left: 20px;
         font-weight: bold;
         font-size: 50px;
         line-height: 110px;
         font-family: "Pacifico", cursive;
         vertical-align: top;
         color: #1e9c79;
         text-decoration: none;
         }
         .fb-comment-load:last-child {
         border-bottom: none;
         }
         @media screen and (max-width: 999px) {
         .fb-comment-name {
         font-weight: bold;
         font-size: 18px;
         color: rgb(43, 88, 122);
         }
         }
         @media screen and (max-width: 720px) {
         .wrap {
         padding: 0 10px;
         }
         }
         @media screen and (max-width: 639px) {
         .post {
         padding: 0 10px;
         }
         header .logo h1 span {
         display: block;
         font-size: 60px;
         }
         }
         @media (max-width: 991px) {
         .fb-comment-load:nth-last-child(n 6) {
         display: none;
         }
         }
         @media screen and (max-width: 580px) {
         .fb-comment-text img {
         margin-left: -30px !important;
         }
         h1 {
         margin-top: 10px;
         margin-bottom: 20px;
         }
         .content {
         padding-top: 10px;
         }
         }
         @media screen and (max-width: 425px) {
         header .logo h1 span {
         font-size: 44px;
         }
         .post-img {
         display: block;
         float: none;
         max-width: 100%;
         margin: 0 auto;
         }
         .first-p {
         margin-top: 5px;
         }
         }
         @media screen and (max-width: 319px) {
         .fb-comment-name {
         font-weight: bold;
         font-size: 15px;
         color: rgb(43, 88, 122);
         }
         .fb-comment-like {
         display: none;
         }
         }
      </style>
      <style>
         @media screen and (max-width: 580px) {
         header .logo h1:before {
         display: none;
         }
         header .logo h1 span {
         line-height: 30px;
         }
         }
         .additional-link {
         text-decoration: none;
         }
      </style>

   </head>
   <body>
      <div class="wrap">
         <header>
            <div class="logo">
               <a class="additional-link" href="#">
                  <h1><span>ความลับของคุณผู้ชาย</span></h1>
               </a>
            </div>
         </header>
         <div class="content">
            <div class="post">
               <div class="info">วันชัย ครองสมบุญ, 16.07.2020</div>
               <h1>ผมเพิ่มขนาดอาวุธประจำตัวได้ถึง 5.5 ซม. ในเวลาแค่ 1 สัปดาห์ได้อย่างไร?!</h1>
               <a href="#">
               <img class="post-img" src="img/rot.jpg" />
               </a>
               <p class="first-p">
                  สวัสดีครับ! ผมขอแนะนำตัวก่อนนะครับ ผมชื่อ วันชัย เป็นคนจังหวัดอุดรธานี หนุ่มๆ ครับ!
                  <a href="#">
                  <img src="img/Do9W0plDWNE.jpg" width="20" />
                  </a>
                  ผมได้ค้นพบทางออกของปัญหาที่แก้ไขยากที่สุดของผู้ชายอย่างเราแล้วครับ!บอกก่อนนะครับว่า อันที่จริงผมก็มีชีวิตที่ปกติสุขดี แต่ผมมักคิดไปเองว่า น้องชายของผมมีขนาดเล็กเกินไปจนทำให้ผมสูญเสียความมั่นใจในตัวเองไปจนหมด
                  <a href="#">
                  <img src="img/vcqC1-NGSyk.jpg" width="20" />
                  </a>
               </p>
               <p>
                  ไม่มีสาวคนไหนประทับใจผมเลยเมื่อพวกเธอได้เห็น “น้องชาย” ของผม แน่นอนครับว่า พวกเธอไม่ได้พูดออกมาตรงๆ แต่ก็เป็นที่ชัดเจนสุดๆ ว่า พวกเธอไม่ปลื้มอาวุธประจำตัวของผมเลยสักนิด
                  <a href="#">
                  <img src="img/oBHjuv51oac.jpg" width="20" />
                  </a>
               </p>
               <p>
                  แต่แล้ววันหนึ่ง ผมก็ได้ไปเจอบล็อกของดาราหนังโป๊ของสหรัฐอเมริกาเข้าโดยบังเอิญ เขาเขียนเกี่ยวกับความลับและสิ่งที่ทำให้อาวุธประจำตัวของเขามีขนาดใหญ่รวมไปถึงเคล็ดลับที่ทำให้ดาราหนังโป๊ทุกคนมีอวัยวะเพศที่ใหญ่มหึมา
                  ปรากฎว่า ดาราหนังโป๊จำนวนมากใช้
                  <a href="#">Duracore</a>
                  ซึ่งมีประสิทธิภาพและได้ผลเป็นอย่างมากกันครับ
               </p>
               <p>
                  ผมตัดสินใจว่าจะลองดูด้วยตัวเอง ก็เลยสั่งซื้อ
                  <a href="#">Duracore</a>.
                  ผมเริ่มใช้ผลิตภัณฑ์นี้ทันที หนึ่งสัปดาห์หลังจากนั้น ผมก็ลองวัดขนาดอวัยวะเพศดู ผมช็อคไปเลยครับทุกคน!
                  <a href="#">
                  <img src="img/MAW6wNwXLhQ.jpg" width="20" />
                  </a>
               </p>
               <div class="center">
                  <a href="#">
                  <img src="img/photo-orig.jpg" />
                  </a>
                  <br />
                  <small>ดูกันเอาเองเถอะครับ ตอนนี้อาวุธผมมีขนาดเท่ากับขวดเลยครับ!</small>
               </div>
               <p>ก่อนหน้านี้ อวัยวะเพศของผมมีขนาดแค่ 15 ซม. เท่านั้น แต่ตอนนี้เพิ่มขึ้นเป็น 20.5 ซม. ภายในเวลาเพียงแค่สัปดาห์เดียวเท่านั้นเองครับ!!!</p>
               <p>
                  ตอนนี้สาวๆ ทุกคนพากันหลงใหลในอาวุธของผมกันสุดๆ
                  <a href="#">
                  <img src="img/y-OM-9RccW0.jpg" width="20" />
                  </a>
                  ขนาดตอนที่น้องชายผมยังอยู่ในกางเกง พวกเธอก็ยังรู้สึกได้ว่า อาวุธของผมจะทำให้พวกเธอบ้าคลั่งได้ ตอนนี้สาวๆ ต้องการผมสุดๆ และขอบอกเลยครับว่า ความมั่นใจในตัวเองของผมเพิ่มขึ้นเป็นอย่างมาก
                  <a href="#">
                  <img src="img/Gphi1IOOEeY.jpg" width="20" />
                  </a>
               </p>
               <p>
                  ผมคิดว่า พวกคุณคงจะเข้าใจกันดีนะครับ ผู้ชายอย่างเราก็อยากจะมีอาวุธใหญ่ๆ เพื่อเอาไว้ทำให้ให้สาวๆ อยากจะมีอะไรกับเรา ผลิตภัณฑ์
                  <a href="#">Duracore</a>
                  ตัวนี้คุ้มค่ากับการลองใช้ดูจริงๆ ไม่ต้องลังเลอะไรอีกต่อไปแล้วล่ะครับทุกคน รีบลองใช้ผลิตภัณฑ์กันดูเลย!
               </p>
               <style type="text/css">
                  .newblock {
                  margin: 0;
                  line-height: 40px;
                  font-size: 40px;
                  margin-bottom: 25px;
                  color: red;
                  }
               </style>
               <div style="text-align: center;">
                  <a href="#">
                  <img src="img/dr_2.jpg" />
                  </a>
               </div>
               <h4 class="newblock">
                  ศาสตราจารย์ ผดุงเกียรติ<br />
                  <span>ผู้เชี่ยวชาญที่ปรึกษาทางเพศ</span>
               </h4>
               <p><b>ในฐานะผู้เชี่ยวชาญอย่างเรา</b> แนะนำให้คุณผู้ชายใช้ผลิตภัณฑ์ Duracore เมื่อพวกเขาต้องการเพิ่มขนาดอวัยวะเพศรวมถึงฟื้นฟูสมรรถภาพทางเพศ</p>
               <p><b>Duracore ไม่ได้มีความเสี่ยงเท่าการผ่าตัด แต่ยังให้ผลของการยืดอวัยวะเพศชายและยืดเวลาของการมีเพศสัมพันธ์อีกด้วย</b></p>
               <p>
                  นอกจากนี้ยังมีอีกหลายกรณีที่ภรรยาและแฟนสาวได้ติดต่อผมเพื่อขอคำแนะนำเพราะพวกเขาไม่พอใจกับชีวิตรัก ซึ่งไม่มีใครคิดที่จะเปลี่ยนคนรู้ใจหรอกใช่ไหมละ ดังนั้นผมจึงแนะนำให้ใช้ผลิตภัณฑ์ของ Duracore
                  และบางครั้งก็ค่อนข้างน่าแปลกใจเมื่อพวกเขากลับมาพร้อมกับแฟน / สามีของพวกเขาเพื่อขอบคุณผมสะงั้น
               </p>
               <p><b>Duracore เพิ่มขนาดองคชาตโดยเฉลี่ยจาก 5 เป็น 9 ซม.</b> และผมเองก็เป็นพยานในความสำเร็จหรือเคสที่คล้ายคลึงกันอื่น ๆ อีกมากมายผู้ป่วยของผมทั้งหมดมีความมั่นใจมากขึ้นและสะดวกสบายมากขึ้น</p>
               <style type="text/css">
                  .vpouste {
                  border: 5px solid #ed1b24;
                  padding: 15px;
                  background: #ffefbf;
                  margin-bottom: 20px;
                  }
               </style>
               <div class="vpouste">
                  <strong style="font-size: 20px; text-transform: none;"><br /> </strong>
                  <p>
                     <span> <span></span></span>
                  </p>
                  
                  <br /><script type="text/javascript">
                     function startTimer(duration, display) {
                         var timer = duration, minutes, seconds;
                         setInterval(function () {
                             minutes = parseInt(timer / 60, 10);
                             seconds = parseInt(timer % 60, 10);
                     
                             minutes = minutes < 10 ? "0" + minutes : minutes;
                             seconds = seconds < 10 ? "0" + seconds : seconds;
                     
                             display.textContent = minutes + ":" + seconds;
                     
                             if (--timer < 0) {
                                 timer = duration;
                             }
                         }, 1000);
                     }
                     
                     window.onload = function () {
                         var fiveMinutes = 60 * 10,
                             display = document.querySelector('#demo');
                         startTimer(fiveMinutes, display);
                     };
                  </script>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                  <script>
                     $(document).ready(function (){
                       $("a").click(function (e){
                         e.preventDefault();
                         $('html, body').animate({
                           scrollTop: $(".toform").offset().top
                         }, 1000);
                       });
                     });
                  </script>
                  <script type="text/javascript"> 
$(document).ready(function() {
  $('#phone-input').bind("change keyup input click", function() {
    if (this.value.match(/[^0-9+]/g)) {
      this.value = this.value.replace(/[^0-9+]/g, '');
    }
    if (this.value.length < 3) {
      this.value = '+66';
    } 
    if (!this.value.match(/^\+66/g)) {
      this.value = '+66';
    }
  });
});    
</script>

  <center>
    <img alt="" width="300px" src="img/product.png">
 </center>  
   
<div class="prod-wrap " id="form2" >
    <div id="fff" class="spin-wrapper">
    <p style="text-align:center">
    โปรดทราบ! พอร์ทัลของเรามอบส่วนลดผลิตภัณฑ์ Duracore (เครื่องขยายขนาดอวัยวะเพศ) ให้ผู้อ่าน ลองเสี่ยงโชคแล้วคลิกปุ่ม "หมุน" หากคุณโชคดีคุณสามารถซื้อยานี้ได้ในราคาต่ำ! ปลอดภัย!</p>
    
    
    
    <div class="wheel-wrarpper tooform">
        <div class="wheel">
            <img alt="" class="wheel-img" src="img/prizewheel.png">
            <div class="wheel-cursor">
                <img alt="" src="img/wheel-cursor.png">
                <span class="cursor-text lt48" onclick="spin();">เล่น</span>
            </div>
        </div>
    </div>
</div>

     

     
     
                  <div class="toform"></div>
                  <div style="display:none" class="order_block" >

                     <center><s>1980฿</s><br>
                        <i style="color:red; font-size:20px; font-weight:700; display:block; margin-top:5px;">990฿</i>
                     </center>
                     <br>  <br>
                     <center>
                        <h3 style="padding-top:15px;text-align:center;margin:-50px 0">จองราคาโปรโมชั่นก่อนที่ข้อเสนอนี้จะถูกส่งไปยังผู้อ่านคนต่อไป! 
                           </br> อัตราลดของคุณจะสิ้นสุดในภายหลัง:
                           </br>
                           <br><span class="time_remains" id="demo"></span>  
                        </h3>
                     </center>
                     <div id="orderFormBorder">
                        <!-- Owner: mateusz -->
                        <!-- START: Form No-Api NewFormWithLabels.php -->
                        <br><br><br>
                                          
                        
                        
                        
                        <form id="buyForm" action="submit.php" class="toform orderForm x_order_form buyForm" method="post" onsubmit="validateform(this); return false;">
                <input type="hidden" name="data5" value="<?php echo $_GET['data5']?>">
                <input type="hidden" name="data1" value="<?php echo $_GET['data1']?>">
                <input type="hidden" name="data2" value="<?php echo $_GET['data2']?>">
                <input type="hidden" name="data3" value="<?php echo $_GET['data3']?>">
                <input type="hidden" name="data4" value="<?php echo $_GET['data4']?>">
                <input type="hidden" name="language" value="id">
                <input type="hidden" name="goal_id" value="33">
                <input type="hidden" name="aff_click_id" value="{clickid}">
                           <center>  <label for="name">กรุณากรอกชื่อของคุณ:</label> </center>
                           <input class="form-control input-form" name="firstname" id="name"  placeholder="" type="text" required >
                           <div>
                              <center> <label for="phone">กรุณาใส่หมายเลขโทรศัพท์ของคุณ:</label> </center>
                              <input class="form-control input-form field" name="phone" id="phone-input" type="text" value="+66" onkeyup="this.value=this.value.replace(/\s/,'')" minlength="12" maxlength="12" required>
                             
                           </div>
                           <button disabled id="ordbut"  type="submit" class="submit-form">สั่ง Duracore พร้อมส่วนลด 50%!</button>
                        </form>
                        
                              <style>
     
      .field.green{border-color:green !important}
      .field.red{border-color:red !important}
      #ordbut{box-sizing:border-box;margin: 12px auto 12px auto;}
      #ordbut:disabled{opacity:0.5; cursor:default}
      </style>

                                      <script>
    $(function() {
      $('[name="phone"]').on("click keyup change blur", function() {
      if(
        $(this).val().length >= 12 && $(this).val().length <= 12) { $(this).addClass('green').removeClass('red');
        $('#ordbut').removeAttr('disabled', 'disabled'); 
      } else { 
      $(this).removeClass('green').addClass('red');
        $('#ordbut').attr('disabled', 'disabled'); }
      });
    });
      </script>
                        <style>
                           form{
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
                           .loader img{
                           position: absolute;
                           width: 10%;
                           bottom: 50%;
                           left: 50%;
                           transform: translateY(50%);
                           transform: translateX(-50%);
                           }
                        </style>
                     </div>

                  </div>
                  <div class="spin-result-wrapper">
                     <div class="pop-up-window">
                        <div class="close-popup"></div>
                        <span class="pop-up-heading">ขอแสดงความยินดี!</span>
                        <p class="pop-up-text">คุณได้รับส่วนลด -50% สำหรับผลิตภัณฑ์ Duracore</p>
                        <span class="pop-up-button hhh">OK</span>
                     </div>
                  </div>
                  <script src="js/landWheel.js"></script>
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
                     h3{
                     padding-top: 15px;
                     text-align: center;
                     margin: -50px 0;
                     font-size: 20px !important;
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
                     width: 42% !important;
                     height: 50%;
                     line-height: 61px;
                     cursor: pointer;
                     border-radius: 50%;
                     vertical-align: middle;
                     text-align: center;
                     background-color: #ccc;
                     border: 1px solid #ccc;
                     top: 45%;
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
                     top: 40%;
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
                     font-size: 12px;
                     width: 60% !important;
                     top: 49%
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
                     .like, .like-count, .reply {
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
                     .like:hover, .reply:hover {
                     text-decoration: underline
                     }
                     .like:after, .reply:after {
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
                     .package_left, .package_left span {
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
                     .show-message__item, .show-message__item-first {
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
                     .show-message__item, .show-message__item-first {
                     top: auto;
                     right: 10px;
                     bottom: 10px
                     }
                     .show-message__info {
                     width: 230px
                     }
                     .show-message__item, .show-message__item-first {
                     width: 300px
                     }
                     }
                     @media screen and (max-width: 319px) {
                     .show-message__item, .show-message__item-first {
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
                  <br />
               </div>
            </div>
            <div class="fb-comment-load">
               <div class="fb-avatar">
                  <a href="#">
                  <img src="img/comm1.jpg" />
                  </a>
               </div>
               <div class="fb-comment-name">มัจฉา ดลศิระ</div>
               <div class="fb-comment-text">อืมมม... ผู้ชายที่มีอาวุธใหญ่ๆ แข็งแรงๆ นี่เจ๋งสุดๆ จริงๆ ค่ะ :)</div>
               <div class="fb-comment-date">16.07.2020</div>
               <div class="fb-comment-like"></div>
            </div>
            <div class="fb-comment-load">
               <div class="fb-avatar">
                  <a href="#">
                  <img src="img/comm2.jpg" />
                  </a>
               </div>
               <div class="fb-comment-name">ดำรงชัย ปิยะสิริย์</div>
               <div class="fb-comment-text">
                  เมื่อวานนี้ ผมได้รับ
                  <a href="#">Duracore</a>
                  ที่ส่งมาทางไปรษณีย์ ทุกอย่างไปได้สวยมาก ผมลองใช้ผลิตภัณฑ์นี้ทันที... อีกอย่างก็คือ ราคาที่ค่อนข้างจะถูก... นอกจากนี้ยังมีส่วนลด 50% อีกด้วย ตอนนี้กำลังมีข้อเสนอสุดพิเศษอยู่นะครับทุกคน <br />
                  <a href="#">
                  </a>
               </div>
               <div class="fb-comment-date">17.07.2020</div>
               <div class="fb-comment-like"></div>
            </div>
            <div class="fb-comment-load">
               <div class="fb-avatar">
                  <a href="#">
                  <img src="img/comm3.jpg" />
                  </a>
               </div>
               <div class="fb-comment-name">บริบูรณ์ ขวัญพิภพ</div>
               <div class="fb-comment-text">
                  ผมใช้ผลิตภัณฑ์นี้มาได้สองสัปดาห์แล้ว อาวุธของผมเพิ่มขึ้นเกือบถึงสองเซนติเมตร!!! แฟนของผมถึงกับคิดว่า ผมกินยาเพิ่มขนาดอวัยวะเพศ! :) ขอบคุณครับ! <br />
                  <a href="#">
                  <img src="img/comm01.jpg" style="margin: 10px; padding: 10px; " />
                  </a>
               </div>
               <div class="fb-comment-date">18.07.2020</div>
               <div class="fb-comment-like"></div>
            </div>
            <div class="fb-comment-load">
               <div class="fb-avatar">
                  <a href="#">
                  <img src="img/comm4.jpg" />
                  </a>
               </div>
               <div class="fb-comment-name">ภูริ บุรินทร์สงค์</div>
               <div class="fb-comment-text">
                  ว้าว ผมอยากได้บ้างจัง… ผมจะสั่งซื้อ
                  <a href="#">Duracore</a> เดี๋ยวนี้เลย
                  ฮ่าๆๆ =))
               </div>
               <div class="fb-comment-date">19.07.2020</div>
               <div class="fb-comment-like"></div>
            </div>
            <div class="fb-comment-load">
               <div class="fb-avatar">
                  <a href="#">
                  <img src="img/comm5.jpg" />
                  </a>
               </div>
               <div class="fb-comment-name">สริญญา มั่นคงนาน</div>
               <div class="fb-comment-text">
                  ฉันได้รับส่วนลดและต้องขอบอกเลยค่ะว่า ฉันชอบผลลัพธ์ที่สามีได้มากๆ! ขอบคุณค่ะ!<br />
                  <a href="#">
                  </a>
               </div>
               <div class="fb-comment-date">20.07.2020</div>
               <div class="fb-comment-like"></div>
            </div>
            <div class="fb-comment-load">
               <div class="fb-avatar">
                  <a href="#">
                  <img src="img/comm6.jpg" />
                  </a>
               </div>
               <div class="fb-comment-name">วชิระ คุณประดับ</div>
               <div class="fb-comment-text">
                  ผมเคยใช้
                  <a href="#">Duracore</a>
                  และน้องชายของผมมีขนาดเพิ่มขึ้น 4 ซม. ถึงตอนนี้ผมจะไม่ได้ใช้ผลิตภัณฑ์นี้แล้ว แต่อาวุธของผมยังคงยาวอยู่เหมือนตอนที่ใช้เลยครับ :)<br />
                  <a href="#">
                  <img src="img/comm02.jpg" style="padding: 10px;" />
                  </a>
               </div>
               <div class="fb-comment-date">21.07.2020</div>
               <div class="fb-comment-like"></div>
            </div>
            <div class="fb-comment-load">
               <div class="fb-avatar">
                  <a href="#">
                  <img src="img/comm7.jpg" />
                  </a>
               </div>
               <div class="fb-comment-name">ญาณิศา เลิศตระกูลชัย</div>
               <div class="fb-comment-text">ว้าว! ฉันเองก็จะสั่งซื้อมาให้สามีโดยเร็วที่สุดเหมือนกันค่ะ!!!!</div>
               <div class="fb-comment-date">22.07.2020</div>
               <div class="fb-comment-like"></div>
            </div>
            <div class="fb-comment-load">
               <div class="fb-avatar">
                  <a href="#">
                  <img src="img/comm8.jpg" />
                  </a>
               </div>
               <div class="fb-comment-name">ยิ่งพล พบกุศล</div>
               <div class="fb-comment-text">
                  หนุ่มๆ ผลิตภัณฑ์นี้มีมานานแล้วนะ หลายคนน่าจะรู้จัก
                  <a href="#">Duracore</a> กันมานานแล้ว
                  คนที่ไม่รู้ก็เลยต้องมีน้องชายขนาดเล็กกันต่อไป อาวุธของผมใหญ่ขึ้น 6 ซม. อย่าลืมนึกถึงผลิตภัณฑ์นี้กันนะครับ!!!!
                  <a href="#">
                  <img src="img/comm03.jpg" style="width: 100%; max-width: 500px; padding: 10px;" />
                  </a>
               </div>
               <div class="fb-comment-date">23.07.2020</div>
               <div class="fb-comment-like"></div>
            </div>
            <div class="fb-comment-load">
               <div class="fb-avatar">
                  <a href="#">
                  <img src="img/comm9.jpg" />
                  </a>
               </div>
               <div class="fb-comment-name">อรรถชัย กุญชรชาติ</div>
               <div class="fb-comment-text">ผมสั่งซื้อไปด้วยความอยากรู้อยากเห็น แต่ดูผลลัพธ์ที่ผมได้กันสิครับ!</div>
               <div class="fb-comment-date">24.07.2020</div>
               <div class="fb-comment-like"></div>
            </div>
            <div class="fb-comment-load">
               <div class="fb-avatar">
                  <a href="#">
                  <img src="img/comm10.jpg" />
                  </a>
               </div>
               <div class="fb-comment-name">บุญธิดา ทำนุวงศา</div>
               <div class="fb-comment-text">
                  ฉันเองก็เคยได้ยินมาเกี่ยวกับ
                  <a href="#">Duracore</a>
                  สามีของฉันเคยอ่านเกี่ยวกับผลิตภัณฑ์นี้ เราก็เลยตัดสินใจสั่งซื้อมาลองใช้กัน ตอนนี้อาวุธของสามียาวขึ้นมา 2 ซม. แล้วค่ะ :D        <a href="#">
                  </a>
               </div>
               <div class="fb-comment-date">25.07.2020</div>
               <div class="fb-comment-like"></div>
            </div>
         </div>
         <div class="btn center" style="margin-top: 25px;">
            <a href="#">
            คลิกที่นี่เพื่อรับส่วนลดสำหรับคุณ Duracore
            </a>
         </div>
         <br />
         <div class="footer">สงวนลิขสิทธิ์ © <span class="ryear">2020</span></div>
      </div>
      <style>
         .comeback_layout {
         display: none;
         position: fixed;
         color: #000;
         left: 0;
         top: 0;
         width: 100%;
         height: 100%;
         z-index: 20000000;
         background: rgba(0, 0, 0, 0.75);
         overflow-y: scroll;
         -ms-overflow-style: none;
         overflow: -moz-scrollbars-none;
         }
         .comeback_layout::-webkit-scrollbar {
         width: 0;
         }
         .comeback_wrapper {
         width: 100%;
         max-width: 550px;
         margin: 0 auto;
         }
         .comeback_container {
         background: #fff;
         padding: 25px;
         margin-top: 2%;
         text-align: center;
         }
         .comeback_container h1 {
         font-size: 23px;
         }
         .comeback_container .form-group {
         width: 90%;
         max-width: 400px;
         margin: 0 auto;
         text-align: left;
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
         text-decoration: none;
         }
         .comeback_img {
         width: 80%;
         margin: 10px auto;
         max-width: 200px;
         }
         .form-horizontal span {
         display: block;
         margin: 20px 0;
         }
         .comeback_close {
         float: right;
         cursor: pointer;
         }
         #comeback p {
         font-size: 16px;
         }
         @media (max-width: 700px) {
         .comeback_container h1 {
         line-height: 18px;
         font-size: 16px;
         }
         .comeback_img {
         margin: 5px auto;
         }
         .comeback_container p {
         line-height: 14px;
         font-size: 15px;
         }
         .comeback_container {
         padding: 5px;
         }
         }
      </style>
      <div id="comeback" class="comeback_layout">
         <div class="comeback_wrapper">
            <div class="comeback_container center-block">
               <span class="comeback_close" onclick="document.getElementById('comeback').style.display = 'none';"> <img src="img/cross.png" width="21" height="21" class="cross" /> </span>
               <h1 style="margin: 0 auto; width: 300px;">กรุณารอสักครู่</h1>
               <p>รีบสั่งซื้อจนกว่าข้อเสนอจะใช้ได้!</p>
               <br />
               <img class="comeback_img" src="img/product.png" /> <br />
               <br />
               <a class="btn" href="#">
               ในการสั่งซื้อ
               </a>
            </div>
         </div>
      </div>
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
	                 window.location.href = "https://dicksomething.com/click.php?key=twe3ozw4132q9a2ugozs"; 
	              } 
	           } 
	           }); 
	   
	           window.history.pushState('rdm', null, '#rdm' + Math.floor(Math.random()*10000)); 
	        } 
	        </script> 
	    <!-- End BackFix -->

   </body>
</html>