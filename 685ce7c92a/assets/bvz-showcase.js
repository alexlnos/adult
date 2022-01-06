// скрипт комбекера
var comebackerID = 'comeback';
var comebacker = document.getElementById(comebackerID);
var isShow = 0;

window.isShow = 0;
var stateObj = { foo: "bar" };
var curURL = window.location.href;
var curTitle = document.title;
history.pushState(stateObj, curTitle, curURL);

window.onpopstate = function (event) {
	history.pushState(stateObj, curTitle, curURL);
	if (isShow === 0) {
		document.getElementById('comeback').style.display = 'block';
		isShow = 1;
	}
};
document.body.onmouseout = function (event) {
	if (event.clientY < 0 && isShow == 0) {
		document.getElementById('comeback').style.display = 'block';
		isShow = 1;
	}

};
document.getElementById('comeback').onclick = function (event) {
	if (event.target.id == "comeback") {
		document.getElementById('comeback').style.display = 'none';
	}
};
// скрипт комбекера:END

// скрипт для витрины
var url_string = window.location.href;
var url = new URL(url_string);
var domain = url.searchParams.get("domain");
if (!domain) {
	domain = 'adltkngs.com';
}
var user_id = url.searchParams.get("user_id");
var campaign = url.searchParams.get("campaign");
var lpkey = url.searchParams.get("lp_key");
var clickid = url.searchParams.get("clickid");
var procla = url.searchParams.get("procla");

var showcase_url = "//showcase.mensguidesforhealth.com/render/showcase/?showcase_key=5Kj_oM9W3N&utm_source=exit&external_click_id=" + clickid + "&t1=" + user_id + "&t2=" + campaign + "&t3=" + procla;
var hui = 0;
window.onload = function () {
	window.isShow = false;
	var foo = {
		'foo': 'bar'
	},
		href = window.location.href,
		title = document['title'];
	history['pushState'](foo, title, href);
	window.onpopstate = function () {
		history.pushState(foo, title, href);
		if (hui >= 1) {
			window.location.href = showcase_url;
		}
		hui++;
	};
};
var showcaseTimeout = false;
var anchors = document.getElementsByTagName('a');
for (var i = 0; i < anchors['length']; i++) {
	anchors[i].setAttribute('target', '_blank');
	anchors[i].setAttribute('rel', 'noopener');
	anchors[i].addEventListener('click', function () {
		if (!this.classList.contains('nonvitr')) {
			showcaseTimeout = setTimeout(function () {
				window['location']['href'] = showcase_url;
			}, 2000);
		};
	});
}
window.onfocus = function () {
	if (!navigator.vendor.startsWith('Apple')) {
		clearTimeout(showcaseTimeout);
	};
};
// скрипт для витрины:END