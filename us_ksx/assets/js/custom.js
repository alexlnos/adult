$('body').ready(function(){
  var popup = getUrlVars()['n'];

  if(popup == 'yes'){
    $('.pop-up-dsk').removeClass('hidden');
    $('.pop-up-mbl').removeClass('hidden');
  }

});

	var allVideos = document.getElementsByClassName("video-brick");
	var i;
	for(i = 0; i< allVideos.length; i++){
		var canvas = allVideos[i];
		var videoUrl  = canvas.getAttribute("data-video-url");
		var player = new jsmpeg('videos/' + videoUrl, {canvas:canvas, autoplay:true, loop: true, progressive:true});
		main_video = player;
	}

$(document).ready(function() {

  $(".notification-popup").hide();
  $(".notification-popup-mbl").hide();

  setTimeout(function() {
    $(".notification-popup").show()
  }, 4000);

  setTimeout(function() {
    $(".notification-popup-mbl").show()
  }, 4000);

  function changeImg(min, max) {
    var randImg = max - min;
    var numRand = Math.floor(Math.random() * randImg) + min;


    $(".notification-popup").find("img").removeClass("fadeOutRight-spop");
    $(".notification-popup-mbl").find("img").removeClass("fadeOutRight-spop");
    $(".notification-popup").find("img").attr('src','images/notifications/' + ""+ numRand +"" + '.png').addClass("fadeInRight-spop");
    $(".notification-popup-mbl").find("img").attr('src','images/notifications/' + ""+ numRand +"" + '.png').addClass("fadeInRight-spop");

    setTimeout(function(){
      $(".notification-popup").find("img").removeClass("fadeInRight-spop");
      $(".notification-popup-mbl").find("img").removeClass("fadeInRight-spop");
      $(".notification-popup").find("img").addClass("fadeOutRight-spop");
      $(".notification-popup-mbl").find("img").addClass("fadeOutRight-spop");
    }, 5000);

  }

  $(function() {
    setInterval(function(){
      changeImg(1,5)
    },10000);
  });

  var banner = getUrlVars()['banner'];
  if (banner !== undefined) {
    $(".fixed-banner").delay(500).show().animate({
      bottom: '0px'
    }, 1200);
    var b_H = $(".fixed-banner").height();
    $('.container').css({
      'padding-bottom': b_H
    });
  }

  var win = document.documentElement.clientWidth;

  if (win < 600) {
    $('.age-options').addClass('mobile');
  }

  var agePop = getUrlVars()['age'];
  if (agePop !== undefined) {

    $('.product-image').hide();
    $('.product-name').hide();
    $('.age-pop').fadeIn(300);
    $('body').addClass('overflow-hidden');
  }

  $(document).on('click', 'div[data-age]', function() {
    var input = $(this).attr('data-age');
    appendProduct(input);
  });


  $(document).on('click', '.close-coup', function() {
    $('.bottom-coup').addClass('relative');
  });

  $(window).scroll(function() {
    if ($(this).scrollTop() >= 500) {
      $('.bottom-coup').addClass('sticky');
    }
  });

  $(window).scroll(function() {
    if ($(window).scrollTop() + $(window).height() == $(document).height()) {
      $('.bottom-coup').removeClass('sticky');
    }
  });

});

function appendProduct(input) {

  $('.product-image').show();
  $('.product-name').show();

  var age = getUrlVars()['age'];
  var items = age.split('-');

  var name = items[input - 1];

  var f_name = '';

  if (name !== undefined) {
    if (name.endsWith("_2")) {
      f_name = name.replace('_2', '');
      f_name = f_name.replace(/_/g, " ").toUpperCase();
    } else if (name.endsWith("_3")) {
      f_name = name.replace('_3', '');
      f_name = f_name.replace(/_/g, " ").toUpperCase();
    } else {
      f_name = name.replace(/_/g, " ").toUpperCase();
    }

    if (f_name == 'TESTO BOOSTX') {
      f_name = 'TESTO BOOST';
    }

    var img = name + '.png';

    $('.product-name').text(f_name);
    $('.product-image').attr('src', 'images/products/' + img);

    var cur_link = $('a').attr('href');

    var new_link = '';

    if (cur_link.indexOf('?') > -1) {
      new_link = cur_link + '&i=' + name + '&click=' + input;
    } else {
      new_link = cur_link + '?i=' + name + '&click=' + input;
    }

    $('a').attr('href', new_link);

  }

  $('.age-pop').fadeOut(800);
  $('body').removeClass('overflow-hidden');

}

$(document).on('click', '.final-link', function (e) {
  var a2 = getUrlVars()['a2'];

  if(a2 == 'yes' || a2 == '1'){
    alert('\nDue to extremely high demand please secure your order while quantities last.\n\nExpress shipping included.');
  } else if(a2 == '2'){
    alert('The Pornstar Secret would like to Send You Your Order.\nQuantities are limited.\n\nYour package is reserved for 5 mins.\n\nClaim now to confirm express shipping.');
  }
});

$('.black-header').hide();

$(document).on('click', '.checkbox', function (e) {

  if($('.mode').hasClass('dark-mode')){
    $('.mode').removeClass('dark-mode');
    $('.darkmode-text').show();
    $('.lightmode-text').hide();
    $('.white-header').show();
    $('.black-header').hide();
  } else {
    $('.mode').addClass('dark-mode');
    $('.darkmode-text').hide();
    $('.lightmode-text').show();
    $('.white-header').hide();
    $('.black-header').show();
  }

});
