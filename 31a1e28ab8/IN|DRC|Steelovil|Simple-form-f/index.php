<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="format-detection" content="telephone=no" />
      <meta name="viewport" content="width=device-width">
      <title>Steelovil - محسن طول القضيب</title>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   </head>
   <body style="background-color: #EEE;color:#000;">                          
      <div style="width: 425px;position: absolute;left: 50%;margin-right: -50%;transform: translate(-50%, 0%)">
         <div align="center">
            <div>
               <div style="padding-bottom:15px;"><span style="font-size:46px;line-height:52px;">Steelovil<br></span><span style="text-align: center;font-size:36px;line-height:44px;">محسن طول القضيب</span></div>
            </div>
            <img src="img/eg_prod_steelovil.png" style="left:22px;height:343px;padding-bottom:10px;padding-top:10px;">
            <div></div>
            <img src="img/empty.png" style="padding-bottom:10px;">
         </div>
         <div style="left:0px;top:240px;width: 425px;text-align: center;">
            
                                     <form  id="orderform" action="order.php" method="POST">
                                        <input type="hidden" name="flow" value="1grnn">
                                        <input type="hidden" name="sub1" value="{clickid}">
                                        <input type="hidden" name="sub2" value="{trafficsource}">
                                        <input type="hidden" name="sub3" value="{campaign}">
                                        <input type="hidden" name="sub4" value="<?=@$_GET['sub4']?>">
                                        <input type="hidden" name="sub5" value="<?=@$_GET['sub5']?>">
            
            
               <span style="font-size: 24px;text-align: center;">أدخل رقم هاتفك</span>  
               <input style="font-size: 24px;width: 295px;left:28px;width: 365px;margin: 12px;" type="tel" required id="phone" name="phone" autocomplete="tel" value="+20"> 
               <div id="divvv">
                  <span style="font-size: 24px;text-align: center;">أدخل أسمك</span>  
                  <input style="font-size: 24px;width: 295px;left:28px;width: 365px;margin: 12px;" type="text" id="name" name="name" autocomplete="name">
                  <button id="ordbut" type="submit" style="font-size: 26px;width: 225px;left:100px;margin: 20px;padding: 0;margin: 0;border: 0;background: transparent;background-color: transparent;background-image: none;border: medium none;text-decoration: underline;cursor: pointer;color:#000;font-weight: bold;">طلب<br>EGP 649</button>
               </div>
               <br><br><br><br><br><br><br><br>
            </form>
         </div>
      </div>
<script> 
$(document).ready(function() {
  $('#phone').bind("change keyup input click", function() {
    if (this.value.match(/[^0-9+]/g)) {
      this.value = this.value.replace(/[^0-9+]/g, '');
    }
    if (this.value.length < 3) {
      this.value = '+20';
    } 
  });
});    
</script> 
   </body>
</html>