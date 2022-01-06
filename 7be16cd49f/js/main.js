/*timer*/
now = new Date();
var perem = new Date() * 3600;
$(".el-timer").attr("data-timer", perem);
$(".el-timer").TimeCircles({
    "animation": "smooth",
    "bg_width": 0.5,
    "fg_width": 0.015,
    "circle_bg_color": "transparent",
    "time": {
        "Days": {
            "text": "Days",
            "color": "#fff",
            "show": false
        },
        "Hours": {
            "text": "horas",
            "color": "#fff",
            "show": true
        },
        "Minutes": {
            "text": "minutos",
            "color": "#fff",
            "show": true
        },
        "Seconds": {
            "text": "segundos",
            "color": "#fff",
            "show": true
        }
    }
});



$('.slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    arrows: false,
    autoplay: false,
    autoplaySpeed: 3000,
});


$(function () {
    $('a[href^="#"]').on('click', function (event) {
        // отменяем стандартное действие
        event.preventDefault();

        var sc = $(this).attr("href"),
            dn = $(sc).offset().top;
        /*
        * sc - в переменную заносим информацию о том, к какому блоку надо перейти
        * dn - определяем положение блока на странице
        */

        $('html, body').animate({ scrollTop: dn }, 1000);

        /*
        * 1000 скорость перехода в миллисекундах
        */
    });
});