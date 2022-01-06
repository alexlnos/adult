var slider;
$(document).ready(function () {
  slider = $('.content__slider').bxSlider({
    controls: false,
      slideMargin : 5,
    auto: false,
    infiniteLoop : false,
    touchEnabled: false,
    hideControlOnEnd: true,
      adaptiveHeight: true
  });

    $('.next-btn').on('click', function () {
        slider.goToNextSlide();
    });


});

$(document).ready(function(){
    var nav = $(".fxd");
    var h = nav.offset().top;
    var obj = $("#ftr");
    var obj2 = $("#hdr");
    $(window).scroll(function () {
        if ($(window).scrollTop() > h) {
            obj.fadeIn();
            obj2.fadeIn();
        } else {
            obj.fadeOut();
            obj2.fadeOut();
        }
    });
});

