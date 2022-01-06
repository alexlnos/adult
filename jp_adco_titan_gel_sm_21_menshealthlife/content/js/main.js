$(document).ready(function(){
    var timer = function(element){
        var _currentDate = new Date();
        var count = 15;   
        var _toDate = new Date(_currentDate.getFullYear(), 
            _currentDate.getMonth(), 
            _currentDate.getDate(), 
            _currentDate.getHours(), 
            _currentDate.getMinutes() + count, 1);
        element.countdown(_toDate, function(event) {
            var hours = event.strftime('%H');
            var min = event.strftime('%M');
            var sec = event.strftime('%S');
            $('.hour1').text(hours[0]);
            $('.hour2').text(hours[1]);
            $('.minute1').text(min[0]);
            $('.minute2').text(min[1]);
            $('.second1').text(sec[0]);
            $('.second2').text(sec[1]);
        }); 
    };
    timer($('.timer'));
});

//Smooth scroll to anchor
$(document).ready(function() {
   $("a").click(function() {
      $("html, body").animate({
         scrollTop: $($(this).attr("href")).offset().top + "px"
      }, {
         duration: 500,
         easing: "swing"
      });
      return false;
   });
});