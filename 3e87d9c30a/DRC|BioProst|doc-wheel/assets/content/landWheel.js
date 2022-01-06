 var resultWrapper = document.querySelector('.spin-result-wrapper');
var wheel = document.querySelector('.wheel-img');

$('a').click(function(e){
	e.preventDefault();
	 var top = $('.toform').offset().top;
	$('body,html').animate({scrollTop: top}, 800);
});

function spin() {
   if (wheel.classList.contains('rotated')) {
	   resultWrapper.style.display = "block";
   } else {
	   wheel.classList.add('super-rotation');
	   setTimeout(function() {
		   resultWrapper.style.display = "block";
	   }, 8000);
	   wheel.classList.add('rotated');
   }
}

var closePopup = document.querySelector('.close-popup');
var closePopup2 = document.querySelector('.pop-up-button');

$('.close-popup, .pop-up-button, .hhh').click(function(e){
	$('.spin-result-wrapper').fadeOut();
	$('.spin-result-wrapper').fadeOut();
    $('.spin-wrapper').slideUp();
	$('.order_block').slideDown();
	start_timer();
});
		
function outputDat(m2, fullM) {
	 var d2 = new Date();
	 var p2 = new Date(d2.getTime() - m2 * 86400000);
	 var monthA = (fullM === false) ? '01,02,03,04,05,06,07,08,09,10,11,12'.split(',') : ''.split(',');
	 var w = p2.getDate();
	 var ret = (fullM === false) ? p.getDate() + '.' + monthA[p2.getMonth()] + '.' + p2.getFullYear() : p2.getDate() + ' ' + monthA[p2.getMonth()] + ' ' + p2.getFullYear();
	 return ret;
  }

var time = 600;
var intr;
function start_timer() {
	intr = setInterval(tick, 1000);
}
function tick() {
	time = time-1;
	var mins = Math.floor(time/60);
	var secs = time - mins*60;
	if( mins == 0 && secs == 0 ) {
	clearInterval(intr);
}
secs = secs >= 10 ? secs : "0"+secs;
	$("#min2").html("0"+mins);
	$("#sec2").html(secs);
}