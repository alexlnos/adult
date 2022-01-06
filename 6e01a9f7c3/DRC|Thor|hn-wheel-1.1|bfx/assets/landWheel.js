var resultWrapper = document.querySelector('.spin-result-wrapper');
var wheel = document.querySelector('.wheel-img');

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
	$('.main__img-container').slideUp();
	$('.order_block').slideDown();
});