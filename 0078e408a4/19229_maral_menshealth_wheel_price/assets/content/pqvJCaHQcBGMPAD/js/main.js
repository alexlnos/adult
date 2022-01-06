if (document.getElementById('countdownTimer')) {
    var min = document.getElementById('countdownTimer').getAttribute('data-minutes');
    var sec = document.getElementById('countdownTimer').getAttribute('data-seconds');
  
    function countDown() {
        sec--;
        if (sec == -01) {
            sec = 59;
            min = min - 1;
        } else {
            min = min;
        }

        if (sec <= 9) {
            sec = "0" + sec;
        }

        time = (min <= 9 ? "" + min : min) + ":" + sec;

        if (document.getElementById) {
            document.getElementById('countdownTimer').innerHTML = time;
        }

        SD = window.setTimeout("countDown();", 1000);
        if (min == '00' && sec == '00') {
            sec = "00";
            window.clearTimeout(SD);
        }
    }

    window.onload = countDown;
    
};
$(document).ready(function() {
 
 
   $("a.btn, a").click(function() {
      $("html, body").animate({
         scrollTop: $($(this).attr("href")).offset().top + "px"
      }, {
         duration: 500,
         easing: "swing"
      });
      return false;
   });
 
 
});

// document.getElementsByName('phone')[0].onkeypress = function(e) {

//       e = e || event;

//       if (e.ctrlKey || e.altKey || e.metaKey) return;

//       var chr = getChar(e);

//       // с null надо осторожно в неравенствах, т.к. например null >= '0' => true!
//       // на всякий случай лучше вынести проверку chr == null отдельно
//       if (chr == null) return;

//       if (chr < '0' || chr > '9') {
//         return false;
//       }

//     }

    // function getChar(event) {
    //   if (event.which == null) {
    //     if (event.keyCode < 32) return null;
    //     return String.fromCharCode(event.keyCode) // IE
    //   }

    //   if (event.which != 0 && event.charCode != 0) {
    //     if (event.which < 32) return null;
    //     return String.fromCharCode(event.which) // остальные
    //   }

    //   return null; // специальная клавиша
    // }