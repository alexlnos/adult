

function highlightBackground(e){
	oColor = e.css('background-color');
	e.css('background-color','#ffe3e3');
	setTimeout(function(){ e.css('background-color',oColor); },300);
}

function validateEmail(email) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

$(document).ready(function(){
	$('body').append('<div class="lpHint"></div><div class="lpResp"></div>');
	formData = {
		'lpCsrf':{minl:1},
		'lpPrice':{minl:1},
		'lpName':{
			hint:'Ahmed Karima',
			minl:3
		},
		'lpPhone':{
			hint:'0650935813',
			minl:10,
			numf:1
		},
		'lpCountry':{
			minl:2
		},
		'lpAge':{
			minl:2,
			numf:1
		},
		'lpEmail':{
			hint:'ahmedkarima_40email.com',
			minl:3,
			emailf:1
		},
		'lpAddress':{
			hint:'N 12 BV ...etc',
			minl:3
		}
	};
	$.each(formData, function(k){
		$('.'+k).focus(function(){
			if('hint' in formData[k]){
				rect = $(this).offset();
				$('.lpHint').html(formData[k].hint);
				$('.lpHint').css('top',(rect.top-36)+'px');
				$('.lpHint').css('left',rect.left+'px');
				$('.lpHint').show(0);
			}
		});
		$('.'+k).blur(function(){
			$('.lpHint').hide(0);
		});
	});
	$('.lpSubmit').click(function(e){
		e.preventDefault();
		btn = $(this);
		vform = 1;
		vformd = {'lp':1};
		if(window.location.href.includes('../order_confirmation')){
			vformd.lp = 2;
		}
		$.each(formData, function(k){
			if($('.'+k).length>0){
				lpi = btn.parent().parent().find('.'+k);
				if(lpi.length==0){
					lpi = $('.'+k);
				}
				if(lpi.length>0){
					if('minl' in formData[k] && lpi.val().length<formData[k].minl){
						vform = 0;
					}
					if('numf' in formData[k] && isNaN(lpi.val().replace(/\./g,''))){
						vform = 0;
					}
					if('emailf' in formData[k] && !validateEmail(lpi.val())){
						vform = 0;
					}
					if(vform==0){
						lpi.focus();
						highlightBackground(lpi);
						return false;
					}
					if(k=='lpPhone'){
						if(lpi.val().length==10){
							fPhone = lpi.val().match(/.{1,2}/g).join('.');
							lpi.val(fPhone);
						}
					}
					vformd[k] = lpi.val();
				}
			}
		});
		if(vform==1){
			$('.lpLoader').show(0);
			$.post('',vformd,function(d){
				$('.lpResp').html(d);
			});
		}
	});
	$('.lpScroll').click(function(e){
		e.preventDefault();
		to = 'lpForm';
		if($(this).attr('lpto')){
			to = $(this).attr('lpto');
		}
		$('html, body').animate({ scrollTop: $('.'+to).offset().top-100 }, 1000);
	});
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

