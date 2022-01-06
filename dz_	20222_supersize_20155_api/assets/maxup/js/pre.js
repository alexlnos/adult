$(document).ready(function(){
	// $.each($('a'), function(k){
	// 	if($(this).attr('href')){
	// 		$(this).attr('href',lpu);
	// 	}
	// });
	if($('.lpTimer').length>0){
		now = parseInt(Date.now() / 1000);
		tdur = 60*15;
		if(localStorage.lpTimer==null || now>(parseInt(localStorage.lpTimer)+tdur)){
			localStorage.lpTimer = now;
		}
		setInterval(function(){
			now = parseInt(Date.now() / 1000);
			dif = (parseInt(localStorage.lpTimer)+tdur)-now;
			if(dif<0){
				localStorage.lpTimer = now;
				dif = (parseInt(localStorage.lpTimer)+tdur)-now;
			}
			hours = (dif / 60 / 60) | 0;
			minutes = (dif / 60) | 0;
			seconds = (dif % 60) | 0;
			hours = hours < 10 ? "0" + hours : hours;
			minutes = minutes < 10 ? "0" + minutes : minutes;
			seconds = seconds < 10 ? "0" + seconds : seconds;
			$('.hours').html(hours);
			$('.minutes').html(minutes);
			$('.seconds').html(seconds);
		},1000);
	}
});
