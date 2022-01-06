 var comebackerID = 'comeback';
 var comebacker = document.getElementById(comebackerID);
 var isShow = 0;

 window.isShow = 0;
 var stateObj = {
     foo: "bar"
 };
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



 function getUrlVars() {
     var vars = {};
     var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
         vars[key] = value;
     });
     return vars;
 }

 function getUrlParam(parameter, defaultvalue) {
     var urlparameter = defaultvalue;
     if (window.location.href.indexOf(parameter) > -1) {
         urlparameter = getUrlVars()[parameter];
     }
     return urlparameter;
 }
 var country = getUrlParam('country', 'Empty');
 switch (country.toLowerCase()) {
     case "us":
         $(".prodname").text("Prime TRT");
         $(".podyshka").attr("src", "img/podyshka_prime.jpg");
         $(".comeback_img, .prod").attr("src", "img/prod_prime.png");
         $(".stoit").attr("src", "img/stoit_prime.jpg");
         $(".stena").attr("src", "img/stena_prime.jpg");
         $(".posilka").attr("src", "img/posilka_prime.jpg");
         $(".vannaya").attr("src", "img/vannaya_prime.jpg");
         $(".chashka").attr("src", "img/chashka_prime.jpg");
         $(".ruka").attr("src", "img/ruka_prime.jpg");
         break;
     case "ca":
         $(".prodname").text("Vital Alpha Testo");
         $(".podyshka").attr("src", "img/podyshka_vat.jpg");
         $(".comeback_img, .prod").attr("src", "img/prod_vat.png");
         $(".stoit").attr("src", "img/stoit_vat.jpg");
         $(".stena").attr("src", "img/stena_vat.jpg");
         $(".posilka").attr("src", "img/posilka_vat.jpg");
         $(".vannaya").attr("src", "img/vannaya_vat.jpg");
         $(".chashka").attr("src", "img/chashka_vat.jpg");
             $(".ruka").attr("src", "img/ruka_vat.jpg");
         break;
     case "gb":
        // $(".prodname").text("SilderaRX Male Enhancement");
        // $(".podyshka").attr("src", "img/podyshka_sil.jpg");
        // $(".comeback_img, .prod").attr("src", "img/prod_sil.png");
        // $(".stoit").attr("src", "img/stoit_sil.jpg");
        // $(".stena").attr("src", "img/stena_sil.jpg");
        // $(".posilka").attr("src", "img/posilka_sil.jpg");
        // $(".vannaya").attr("src", "img/vannaya_sil.jpg");
        // $(".chashka").attr("src", "img/chashka_sil.jpg");
        // $(".ruka").attr("src", "img/ruka_sil.jpg");
        // break;
     case "za":
     case "au":
     case "nz":
        // $(".prodname").text("Velofel Male Enhancement");
        // $(".podyshka").attr("src", "img/podyshka_vel.jpg");
        // $(".comeback_img, .prod").attr("src", "img/prod_vel.png");
        // $(".stoit").attr("src", "img/stoit_vel.jpg");
        // $(".stena").attr("src", "img/stena_vel.jpg");
        // $(".posilka").attr("src", "img/posilka_vel.jpg");
        // $(".vannaya").attr("src", "img/vannaya_vel.jpg");
        // $(".chashka").attr("src", "img/chashka_vel.jpg");
        // $(".ruka").attr("src", "img/ruka_vel.jpg");
        $(".prodname").text("Truvalast Male Enhancement");
        $(".podyshka").attr("src", "img/podyshka_tru.jpg");
        $(".comeback_img, .prod").attr("src", "img/prod_tru.png");
        $(".stoit").attr("src", "img/stoit_tru.jpg");
        $(".stena").attr("src", "img/stena_tru.jpg");
        $(".posilka").attr("src", "img/posilka_tru.jpg");
        $(".vannaya").attr("src", "img/vannaya_tru.jpg");
        $(".chashka").attr("src", "img/chashka_tru.jpg");
        $(".ruka").attr("src", "img/ruka_tru.jpg");
         break;
     default:
         $(".prodname").text("Prime TRT");
         $(".podyshka").attr("src", "img/podyshka_prime.jpg");
         $(".comeback_img, .prod").attr("src", "img/prod_prime.png");
         $(".stoit").attr("src", "img/stoit_prime.jpg");
         $(".stena").attr("src", "img/stena_prime.jpg");
         $(".posilka").attr("src", "img/posilka_prime.jpg");
         $(".vannaya").attr("src", "img/vannaya_prime.jpg");
         $(".chashka").attr("src", "img/chashka_prime.jpg");
             $(".ruka").attr("src", "img/ruka_prime.jpg");
         break;
 }