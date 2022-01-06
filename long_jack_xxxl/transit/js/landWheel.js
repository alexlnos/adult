var resultWrapper = document.querySelector('.spin-result-wrapper');
var wheel = document.querySelector('.wheel-img');

function spin() {
    if (wheel.classList.contains('rotated')) {
        resultWrapper.style.display = "block";
    } else {
        wheel.classList.add('super-rotation');
        setTimeout(function () {
            resultWrapper.style.display = "block";
        }, 8000);
        setTimeout(function () {
            $('.spin-wrapper').slideUp();
            $('.order_block').slideDown();
            start_timer();
        }, 10000);
        wheel.classList.add('rotated');
    }
}

var closePopup = document.querySelector('.close-popup');
var closePopup2 = document.querySelector('.pop-up-button');
$('.close-popup, .pop-up-button, .hhh').click(function (e) {

    $('.spin-result-wrapper').fadeOut();
    $('.spin-result-wrapper').fadeOut();

});




function start_timer() {
    new Timer({
        hour: '#hour',
        min: '#min',
        sec: '#sec' ,
        hourRes: '#hour',
        minRes: '#min',
        secRes: '#sec' ,
    })
    $('.timer').addClass('timer--show');
}
  
$(function () {
    $('[data-href]').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($(this).data('href')).offset().top
        }, 800)
    })

    $('[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 800)
    })
})