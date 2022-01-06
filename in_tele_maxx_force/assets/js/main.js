// fixed header
window.onscroll = function () { myFunction() };
var header = document.getElementById("header");
var main = document.querySelector("main");
var sticky = header.offsetTop;
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    main.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
    main.classList.remove("sticky");
  }
}

// like
$('.comment-like .align-items-center').one('click', function () {
	var counter = true;
	var like = $(this).children('p');
	if (counter) {
		like.text(+like.text() + 1);
		counter = false;
	}
});