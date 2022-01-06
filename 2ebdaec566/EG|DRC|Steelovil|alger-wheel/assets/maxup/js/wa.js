

function elementInViewport(el) {
  var top = el.offsetTop;
  var left = el.offsetLeft;
  var width = el.offsetWidth;
  var height = el.offsetHeight;

  while(el.offsetParent) {
    el = el.offsetParent;
    top += el.offsetTop;
    left += el.offsetLeft;
  }

  return (
    top >= window.pageYOffset &&
    left >= window.pageXOffset &&
    (top + height) <= (window.pageYOffset + window.innerHeight) &&
    (left + width) <= (window.pageXOffset + window.innerWidth)
  );
}

FBC=0;
FBL=1;

function shWA(){
	FBL=0;
	$('.fbmessenger').remove();
	sWA();
}

function rndS(){
	return Math.random().toString(36).substring(7);
}

//$('body').append('<img style="position:fixed;width:0px;height:0px;opacity:0;" src="?flr" onerror="FBC=1;shWA();">');

window.addEventListener('popstate', (event) => {
	event.preventDefault();
	if(event.state.p==2){
		// window.location.href = BLNK;
	}
	if(event.state.p==1111){
		$('.fbmessenger').remove();
		$('.wa__popup_chat_box').addClass('wa__active');
		$('.wa__btn_popup_txt').hide(0);
	}
});
history.pushState({p: 1}, "1");
history.pushState({p: 2}, "2");
history.pushState({p: 3}, "3");
history.replaceState({p: 4}, '4');


function sWA(){

	$(document).ready(function(){
		$('.wa__btn_popup').click(function(){
			$('.wa__popup_chat_box').addClass('wa__active');
	  		$('.wa__btn_popup_txt').hide(0);
		});
		$('.wa__close').click(function(){
			$('.wa__popup_chat_box').removeClass('wa__active');
	  		$('.wa__btn_popup_txt').show(0);
		});
		$('.lpForm').click(function(){
			$('.wa__popup_chat_box').removeClass('wa__active');
	  		$('.wa__btn_popup_txt').show(0);
		});
		window.onscroll = function(ev) {
			if(elementInViewport(document.getElementsByClassName('lpFooterLogo')[0])) {
			    $('.wa__popup_chat_box').removeClass('wa__active');
				$('.wa__btn_popup').hide(0);
			}else{
				$('.wa__btn_popup').show(0);
				$('.wa__btn_popup_txt').show(0);
			}
		};
	});

}

// if(MSNGR=='wa'){ 
// 	$('.fbmessenger').remove();
// 	sWA();
// }
$(document).ready(function(){
	$('.fbmessenger').remove();
	sWA();
});
