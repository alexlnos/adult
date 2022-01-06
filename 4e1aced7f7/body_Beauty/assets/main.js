function func() {
    $(document).ready(function () {
            var h = $('.fxd').offset().top;
            var object1 = $('#hdr');
            var object2 = $('#ftr');
            $(window).scroll(function () {
                if ($(window).scrollTop() > h) {
                    object1.fadeIn();
                    object2.fadeIn();
                } else {
                    object1.fadeOut();
                    object2.fadeOut();
                }
            });
        })
}
setTimeout(func, 1000);