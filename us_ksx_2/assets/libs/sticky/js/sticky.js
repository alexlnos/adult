var sticky_device = 'dsk';
if(isMobile()){
  sticky_device = 'mbl';
}

var sticky_param = getUrlVars()['sticky'];
if(sticky_param !== undefined){
  var sticky_type = 'text';
  if(!isNaN(parseInt(sticky_param))){
    sticky_type = 'image';
  }
  showSticky(sticky_type, sticky_param, sticky_device);
}

$(window).on('scroll', function() {
    scrollPosition = $(this).scrollTop();
    if (scrollPosition >= 80) {
        $('.sticky-message').css({'position':'fixed'});
    } else if(scrollPosition <= 0){
        $('.sticky-message').css({'position':'relative'});
    }
});

function showSticky(type, param, device){

  var sticky_link = $('body').attr('data-link');


  if(type == 'image'){

    if((param == 1) || (param == 3)){
      var css_bg_color = 'background-color:#fff;';
    } else {
      var css_bg_color = 'background-color:#000;';
    }
    var sticky = '<div class="sticky-message" style="width: 100%; z-index: 999999999;text-align:center; display:none;border-bottom: 1px solid #fa4239;' + css_bg_color + '"><a href="' + sticky_link + '"><img style="max-width: 100%;" src="../libs/sticky/images/' + param + '_' + device + '.jpg" alt=""></a></div>';

  } else {
    var sticky_text = 'Hurry! Only 4 FREE Trials Remaining!';
    if(param == "b"){
      sticky_text = 'ACT NOW! EXCLUSIVE CYBER MONDAY TRIAL! Ends in:';
    } else if(param == "c"){
      sticky_text = 'DONT MISS OUT! CYBER MONDAY - FREE TRIAL!  Ends in:';
    } else if(param == "d"){
      sticky_text = 'CYBER MONDAY DEAL - FREE TRIAL!  Ends in:';
    } else if(param == "e"){
      sticky_text = 'REDEEM YOUR CYBER MONDAY TRIAL NOW!  Ends in:';
    } else if(param == "g"){
      sticky_text = 'Hurry! Only 4 FREE Trials Remaining!';
    } else if(param == "m"){
        sticky_text = 'Memorial Day Weekend Sale FREE Trial';
    } else if(param == "j"){
        sticky_text = '<img style="width: 100%; width: 20px; padding-right: 3px; margin-top: -4px;" src="../libs/sticky/images/icons/maple-leaf.png" alt="">Canada Day Sale FREE Trial';
    } else if(param == "k"){
        sticky_text = '4th of July Sale FREE Trial';
    }

    var sticky = '<div class="sticky-message" style="width: 100%; z-index: 999999999;text-align:center; display:none;background-color:#000;padding: 10px 5px;line-height: 1; border-bottom: 1px solid rgb(250, 66, 57);"><a style="font-size: 1.1em;color: #fff;font-weight: bold;text-decoration: none!important;line-height: 1;" href="' + sticky_link + '" >' + sticky_text + ' <span id="sticky-timer" style="color:#ff2a2a"></span></a></div>';

    if(param == "f"){
      var sticky = '<div class="black-friday-banner" style="margin-top: 0px;display: flex;justify-content: center;align-items: center;background-color: #000;padding: 0 10px;text-align: center;font-size: .8em;line-height: 1.2;font-weight: 700;text-transform: uppercase;color: #FFF;-webkit-box-shadow: 0px 0px 8px 0px rgba(0,0,0,0.5);-moz-box-shadow: 0px 0px 8px 0px rgba(0,0,0,0.5);box-shadow: 0px 0px 8px 0px rgba(0,0,0,0.5);margin: 0 auto;-moz-font-feature-settings: "lnum" 1;-moz-font-feature-settings: "lnum=1";-ms-font-feature-settings: "lnum" 1;-o-font-feature-settings: "lnum" 1;-webkit-font-feature-settings: "lnum" 1;font-feature-settings: "lnum" 1;">Cyber Monday Promo FREE Trials<div class="arrow-black-left" style="width: 0;height: 0;border-top: 19px solid transparent;border-left: 19px solid #000;border-bottom: 19px solid transparent;margin-right: -33px;z-index: 999;margin-left: 12px;"></div><div id="sticky-timer" style="color: #000;width: 180px;padding: 10px 10px 10px 30px;text-transform: lowercase;margin: 0 14px;background: #feeb3b;">d : h : m : s</div><div class="arrow-yellow-right" style="width: 0;height: 0;border-top: 19px solid transparent;border-left: 19px solid #feeb3b;border-bottom: 19px solid transparent;margin-left: -14px;margin-right: 12px;"></div></div>';
    } else if(param == "h"){
      sticky_text = 'Hurry! Only 4 FREE Trials Remaining!';
      var sticky = '<div class="sticky-message" style="width: 100%; z-index: 999999999;text-align:center; display:none;background-color:rgb(250, 66, 57);padding: 10px 5px;line-height: 1; border-bottom: 1px solid rgb(0, 0, 0);"><a style="font-size: 1.1em;color: #fff;font-weight: bold;text-decoration: none!important;line-height: 1;" href="' + sticky_link + '" >' + sticky_text + ' <span id="sticky-timer" style="color:#fff"></span></a></div>';

    } else if(param == "i"){
      sticky_text = 'Hurry! Only 4 FREE Trials Remaining!';
      var sticky = '<div class="sticky-message" style="width: 100%; z-index: 999999999;text-align:center; display:none;background-color:rgb(250, 66, 57);padding: 20px 5px;line-height: 1; border-bottom: 1px solid rgb(0, 0, 0);"><a style="font-size: 1.1em;color: #fff;font-weight: bold;text-decoration: none!important;line-height: 1;" href="' + sticky_link + '" >' + sticky_text + ' <span id="sticky-timer" style="color:#fff"></span></a></div>';

    }

  }

  $('body').prepend(sticky);

  setTimeout(function(){
    $( ".sticky-message" ).slideDown( 300, function() {
    });
  }, 1200);

}

var bf_today = new Date();

var sticky_param = getUrlVars()['sticky'];

if(sticky_param == "m"){
    bf_today.setDate(27);
} else if(sticky_param == "j"){
    bf_today.setHours(24);
} else if(sticky_param == "k"){
    bf_today.setHours(24);
} else {
    bf_today.setDate(bf_today.getDate() + 1);
}

bf_date = (bf_today.getMonth()+1) + '/' + bf_today.getDate() + '/' + bf_today.getFullYear();

CountDownTimer('' + bf_date + ' 00:00 AM', 'sticky-timer');

function CountDownTimer(dt, id) {
       var end = new Date(dt);

       var _second = 1000;
       var _minute = _second * 60;
       var _hour = _minute * 60;
       var _day = _hour * 24;
       var timer;

       function showRemaining() {
           var now = new Date();
           var distance = end - now;
           if (distance < 0) {

               clearInterval(timer);
               document.getElementById(id).innerHTML = 'EXPIRED!';

               return;
           }
           var days = Math.floor(distance / _day);
           var hours = Math.floor((distance % _day) / _hour);
           var minutes = Math.floor((distance % _hour) / _minute);
           var seconds = Math.floor((distance % _minute) / _second);

           $('#' + id).text(days + 'd ' + hours + 'h ' + ('0' + minutes).slice(-2) + 'm ' + ('0' + seconds).slice(-2) + 's');

       }

       timer = setInterval(showRemaining, 1000);
}