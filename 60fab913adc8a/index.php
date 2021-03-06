<?php

$api = [
    'key' => '14674',
    'secret' => 'MlofrKtp9zaKyB9dNOe6GiPVXXkay4NJ',
    'flow_url' => 'https://leadrock.com/URL-CCC92-CA7BE'
];

function send_the_order($post, $api)
{
    $params = [

        'flow_url' => $api['flow_url'],
        'user_phone' => $post['phone'],
        'user_name' => $post['name'],
        'other' => $post['other'],
        'ip' => $_SERVER['REMOTE_ADDR'],
        'ua' => $_SERVER['HTTP_USER_AGENT'],
        'api_key' => $api['key'],
        'sub1' => $post['sub1'],
        'sub2' => $post['sub2'],
        'sub3' => $post['sub3'],
        'sub4' => $post['sub4'],
        'sub5' => $post['sub5'],
        'ajax' => 1,
    ];

    $url = 'https://leadrock.com/api/v2/lead/save';

    $trackUrl = $params['flow_url'] . (strpos($params['flow_url'], '?') === false ? '?' : '&') . http_build_query($params);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $trackUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    $params['track_id'] = curl_exec($ch);

    $params['sign'] = sha1(http_build_query($params) . $api['secret']);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    curl_exec($ch);
    curl_close($ch);

    header('Location: ' . (empty($post['success_page']) ? 'thanks/index.html' : $post['success_page']));

}

if (!empty($_POST['phone'])) {
    send_the_order($_REQUEST, $api);
}

if (!empty($_GET)) {

?>

  <script type="text/javascript">
    window.onload = function() {
        let forms = document.getElementsByTagName("form");
        for(let i=0; i<forms.length; i++) {
            let form = forms[i];
            form.setAttribute('action', form.getAttribute('action') + "?<?php echo http_build_query($_GET)?>");
            form.setAttribute('method', 'post');
        }
    };
  </script>

<?php

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<title>MEN'S HEALTH</title>
    <meta content="initial-scale=1, width=device-width" name="viewport">
    <meta content="en-AU" http-equiv="content-language">
    <link href="assets/favicon.png" rel="icon" type="image/png">
	<style>body,h1,h2,h4{color:#000}*,:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}h1{font-size:48px;line-height:78px}h2{font-size:34px;line-height:58px}h4{font-size:22px;line-height:39px}p{font-size:14px;line-height:23px}h4 span{font-weight:700}.head span{font-weight:300;float:left}img{max-width:100%;margin:10px auto}ul{padding-left:0;margin:0}li{list-style:none}body,html{height:100%;width:100%}body{font-family:'Roboto Condensed',sans-serif;font-size:14px;line-height:normal;margin:auto!important;overflow-x:hidden!important;background:#333}a{text-decoration:underline;color:#ed1b24}a:hover{text-decoration:none}.vplique{text-transform:uppercase}.menu li,.menu ul{display:inline-block}.btn{display:inline-block;padding:10px 25px;background:#ff380c;color:#fff;text-transform:uppercase;font-weight:600;font-size:25px;text-decoration:none;margin:10px 0;-moz-transition:all .7s ease-out;-o-transition:all .7s ease-out;-webkit-transition:all .7s ease-out;transition:all .7s ease-out;-webkit-transform:scale(1);-moz-transform:scale(1);-o-transform:scale(1);transform:scale(1)}.btn:hover{-webkit-transform:scale(1.1);-moz-transform:scale(1.1);-o-transform:scale(1.1);transform:scale(1.1)}.contenulu .btn{font-size:17px;width:100%;text-align:center;text-decoration:none}.contentsol h1 div,.contenulu,.facezizou,.headbeyaz,.lavalse .facezizou,.menu,.menu ul,.yazi2. .yazi3,.zizou2. .zizou3{overflow:hidden}#header:after,.ctevid:after,.dismoi:after,.head:after,.lavalse:after,.zizou1:after{content:'';clear:both}.clear{content:"";display:block;clear:both}body,p{font-size:14px}.dismoi a,.lavalse a{color:#14A1D0;font-weight:700}.dismoi a:hover,.lavalse a:hover{color:#14A1D0;text-decoration:none}.head{float:right}a{font-weight:700}.contenulu p,.vpouste>p,.zizou p,.zizou strong>span,.zizou2 p,.zizou3 p{font-weight:300}.vplique{background:#ed1b24;font-size:35px;color:#fff;padding:15px 0 15px 15px;clear:both}.dismoi:after,.lavalse:after,.zizou strong,.zizou1:after{display:block}.res,.zizou1 p b,.zizou3 p{width:100%}.zizou strong{color:red;font-size:28px;line-height:normal;margin-bottom:20px}.zizou strong>span{font-size:22px}.zizou p{margin:0 0 20px;font-size:17px}.zizou h4{margin:0 0 30px;line-height:28px;color:red;font-size:28px}.zizou1 p{margin:0;line-height:normal}.zizou h4 span{font-size:18px}.zizou1 p{font-size:20px;font-weight:300}.zizou1 p{float:left;margin:10px 0}.vpouste{border:5px solid #ed1b24}.vpouste{display:block;flex-direction:column;justify-content:center;align-items:center;text-align:center}.vpouste h2:first-child{margin:0}.zizou2 p,.zizou3 p{font-size:19px;line-height:normal}.zizou2 p{margin:0 0 30px}.zizou2{text-align:center}.vpouste{padding:15px;background:#ffefbf}.vpouste>p{margin:0;font-size:17px;line-height:normal}.contenulu{background:#ffefbf;width:250px;display:block}.contenulu p{margin:20px 10px 25px 20px;font-size:17px;line-height:normal}.contenulu strong{margin:15px 0 30px;width:100%;float:left;padding-left:20px}.contenulu p a{color:#000}.fessebouc{background:#fff;padding:20px 20px 75px}.lavalse{float:right;width:890px}.fessedebook{width:110px;float:left;margin-right:20px}.facezizou{width:auto}.facezizou img{display:block;margin:10px auto;width:100%;max-width:400px}.dismoi .facezizou p{font-size:16px;margin:0;font-weight:700;line-height:normal}.dismoi,.lavalse{clear:both;margin:0 0 15px}.fessedebook img{width:100%;margin:2px 0}.dismoi .facezizou span{font-size:15px;line-height:normal;margin:0 10px 0 0;display:inline-block}.dismoi .facezizou>img{margin-top:10px}.lavalse .facezizou p{font-size:16px;margin:0;font-weight:700;line-height:normal}.facezizou strong{width:100%;margin-top:10px;display:block}.facezizou strong span{margin-right:25px;color:#14A1D0}@media screen and (min-width: 0\0){.contenulu{height:5552px}}.ctevid{margin:0 0 20px}.ctevid:after{display:block}@media screen and (max-width: 1023px){.contenulu{display:none}.lavalse{float:none;width:auto;clear:both}.fessedebook{width:60px;float:left;margin-right:10px}.zizou1 p{float:none;width:auto!important;margin-left:0!important}.video{width:auto;margin-right:0}}@media screen and (max-width: 600px){#header img{margin-left:0;width:70px}.fessebouc{padding:15px 15px 95px}.menu{padding:0 0 0 10px}.menu ul{height:66px}.menu li{margin:25px 10px}.zizou{padding-left:0;overflow:hidden}.video{float:left;margin:0 0 10px}.toplay{text-align:center}}#header{width:100%;position:relative;background:#222}#header img{float:left;padding-top:10px;margin-left:30px}.menu li,.menu ul{display:inline-block}.container{width:100%;margin:0 auto;max-width:1040px;background:#FFEFBF}.menu{background:#222;text-align:right;padding:0}.menu ul{height:102px}.menu li{color:#fff;margin:43px 10px;font-size:13px}.headbeyaz{background:#fff;overflow:hidden}.head{margin-left:30px;color:#ed1b24}.head:after{display:block}.head span{font-size:38px;padding-right:10px}.ustbaslik,a{font-weight:700}.ustbaslik{width:100%;font-size:24px;background:#ed1b24;color:#fff;padding:5px 0 3px 30px;float:left}.contentsol{float:left;width:770px;background:#fff;padding:30px 10px 0 30px}.contentsol h1{margin:0;font-size:51px;line-height:54px;width:100%}.contentsol h1 img{float:left;margin-right:24px}.contentsol>p{width:100%;margin:0 0 30px;line-height:normal;font-weight:300;font-size:18px}.video{float:left;max-width:337px;margin:auto;margin-right:20px}.contentsol h2,.res{width:100%}.contentsol h2,.contentsol h1{margin:15px 0}.contentsol h2{line-height:normal}.res{float:left;margin-top:15px}.res{display:block;align-items:center;margin:auto;justify-content:center;text-align:center}.contentsol h4{margin:0;line-height:40px;font-size:40px}@media screen and (max-width: 1023px){.headbeyaz{float:none;padding:5px 0}.contentsol{float:none;width:100%;padding:20px 10px}.contentsol h1 img{width:75px;margin-right:10px}}@media screen and (max-width: 600px){#header img{padding:15px}.contentsol h1{font-size:25px;line-height:1.2}.menu{display:none;padding:0 0 0 10px}.menu ul{height:66px}.menu li{margin:25px 10px}.ustbaslik{padding:5px}.video{float:none;margin:0 auto}}.flex-column{display:block;flex-direction:column;align-items:center}.footer-fixed{background:rgba(0,0,0,.68);position:fixed;bottom:0;width:100%;text-align:center;z-index:1;font-size:36px}.footer-fixed div a,.footer-fixed div p{display:inline-block;color:#fff;font-size:22px;font-family:'Roboto Condensed',sans-serif}.footer-fixed div p{padding:1px 6px;line-height:1.2}.footer-fixed div a{padding:6px 8px;font-size:21px}.footer-fixed a{padding:20px;background:#e31c02;border-radius:10px}@media screen and (max-width: 308px){.footer-fixed div p{font-size:18px}}@media screen and (min-width: 309px) and (max-width: 320px){.footer-fixed div p{font-size:20px;margin:2px}}@media screen and (min-width: 309px) and (max-width: 338px){.footer-fixed div p{font-size:20px}}@media screen and (min-width: 663px) and (max-width: 767px){.footer-fixed div p{font-size:26px;line-height:1.2;margin:0 5px 0 0;padding:0}.footer-fixed div a{font-size:12px;padding:9px 8px}.footer-fixed{padding-top:7px;padding-bottom:7px}}@media screen and (max-width: 992px){.fessebouc .comment:nth-of-type(-n+10){display:none}.menu,.headbeyaz{display:none}header{padding:10px 0 0;text-align:center}#header img{float:none;margin:0;padding:0;display:inline-block;width:280px;max-width:100%;margin-bottom:5px}}</style>
	<style>.comeback_layout{display:none;position:fixed;color:#000;left:0;top:0;width:100%;height:100%;z-index:20000000;background:rgba(0,0,0,.75);overflow-y:scroll;-ms-overflow-style:none;overflow:-moz-scrollbars-none}.comeback_layout::-webkit-scrollbar{width:0}.comeback_wrapper{width:100%;max-width:550px;margin:0 auto}.comeback_container{background:#fff;background-image:url(assets/comebackground.jpg);padding:25px;margin-top:2%;text-align:center;border-radius:25px;background-size:100% 100%}.comeback_container h1{font-size:40px}.comeback_container .btn{display:block;width:240px;color:#fff;background:#f82a5e;text-transform:uppercase;padding:10px 0;font-size:19px;font-weight:400;line-height:1.42;text-align:center;vertical-align:middle;border:1px solid transparent;border-radius:4px;margin:0 auto;text-decoration:none}.comeback_img{width:100%;margin:10px auto;max-width:200px}.comeback_close{float:right;cursor:pointer}#comeback p{font-size:16px}@media (max-width:700px){.comeback_container h1{line-height:18px;font-size:16px}.comeback_img{margin:5px auto}.comeback_container p{line-height:14px;font-size:15px}.comeback_container{padding:5px}}#block1{float:left;display:block;width:130px;margin:2px}#block2{float:left;display:block;width:165px;margin:2px}</style>

  <!-- INTH_SNIPPET_TOP -->
</head>

<body>
<div id="wrapper">
    <div class="container">
        <header id="header"><meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
            <a href="#fff"><img src="assets/mens-health-life.png"></a>
            <div class="menu">
                <ul>
                    <li> NOTICIAS</li>
                    <li> CONSEJOS PARA CITAS</li>
                    <li> PRODUCTOS</li>
                    <li> HISTORIAS SEXUALES DE LECTORES</li>
                </ul>
            </div>
            <div class="headbeyaz">
                <div class="head">
                    <span><b>+18</b> NOTICIAS </span>
                </div>
            </div>
            <div class="ustbaslik">
                <center>
                    ATENCI??N - AVANCE M??DICO SOLO PARA HOMBRES CON UN PENE PEQUE??O
                </center>
            </div>
        </header>
        <div class="contentsol">
            <p style="margin-bottom: 10px;">
          Publicado no <span style="font-weight: 700">10.03.2021</span>
            </p>
            <h1>
                <a href="#fff"><img src="assets/sexelongplus-a659130e87.jpg"></a>
                <div> Un descubrimiento secreto aumentar?? el tama??o de tu pene
                    <a href="#fff">4CM A LA SEMANA</a>
                </div>
            </h1>
            <p> Querido lector, </p>
            <p> ??Por fin??podemos compartir esto contigo! </p>
            <p> Durante los ??ltimos 2 meses hemos estado deseando contarte este maravilloso secreto, gracias al cual aumentar??s el tama??o de tu pene. </p>
            <p> Si has sido nuestro lector durante mucho tiempo, entonces sabr??s que a menudo compartimos art??culos sobre curas y tratamientos naturales que realmente funcionan - seg??n la ciencia - y que, por alguna raz??n, no salen a la luz por la corriente principal. </p>
            <p> Hoy vamos a compartir contigo historias de c??mo las p??ldoras ha ayudado a m??s de 1147 hombres a aumentar su pene 5-8 cm y mejorar su resistencia sexual y confianza.??Sus esposas y novias llaman a este descubrimiento el "Creador secreto de estrellas porno" porque ha convertido a sus parejas en bestias sexuales. </p>
            <p> Debido a estas afirmaciones, decidimos realizar nuestra propia investigaci??n y comprobar la seguridad y eficacia de este producto. </p>
            <div class="ctevid">
                <div class="video video2" style="display: block;">
            <span class="toplay">
              <a href="#fff"><img src="assets/pary.jpg" style="display: block;"></a>
            </span>
                </div>
                <div class="zizou">
                    <strong> MANUEL Y MAR??A <br><span> 35 a??os/28 a??os </span></strong>
                    <p> Hemos estado juntos durante 3 a??os y vivimos en Santiago City. </p>
                    <p> Nuestra vida sexual se estanc?? hace un poco m??s de un a??o y sab??amos que nuestra relaci??n no iba a durar mucho si continuaba as??.??Por ello, empezamos a buscar soluciones. </p>
                    <p> Mi pene era de 12 cm de largo y me corr??a en 3 minutos.??Consult?? a un sex??logo, fui al gimnasio, dej?? de tomar medicaci??n... Incluso prob?? una bomba de vac??o... No me ayud?? nada. </p>
                    <p> Finalmente, un amigo m??o me recomend?? que probara las p??ldoras que ??l hab??a estado usando durante mucho tiempo.??Busqu?? en Internet y encontr?? testimonios asombrosos que mostraban impresionantes fotos de antes y despu??s.??Los hombres dec??an que hab??an salvado su relaci??n usando <a href="#fff"><b> Priapus</b></a>.??Nunca cre?? en este tipo de publicidad, pero esta vez decid?? probarlo, al fin y al cabo, no ten??a mucho que perder. </p>
                    <p> Me lleg?? en 2 d??as en un paquete discreto que mi novia ni siquiera hab??a notado. </p>
                    <p> Segu?? las instrucciones - tuve que aplic??rmelo cada d??a y 2 semanas despu??s me qued?? sorprendido por mi nuevo y colosal tama??o y energ??a??? </p>
                    <p> Mi novia tambi??n se dio cuenta cuando me la foll??... Resulta que no estaba cansada del sexo... Solamente quer??a una enorme y dura polla con la que podr??a correrse. </p>
                    <p> Ahora cada vez que lo hacemos le parece poco. </p>
                    <div class="video" style="display: block;">
              <span class="toplay">
                <a href="#fff"><img src="assets/handjob.gif" style="display: block;"></a>
              </span>
                    </div>
                    <h4> ??Me despierta con una mamada casi todos los d??as y me ruega que me la folle! </h4>
                    <p> Mis resultados desde que comenc?? a aplicarme <a href="#fff"><b> Priapus</b></a>: mi pene se ha hecho 7 cm m??s largo y tambi??n mucho m??s grueso.??Ahora puedo durar 1 hora seguida sin correrme y finalmente puedo satisfacer a mi novia.??Ha pasado solo un mes y medio desde que comenc?? el tratamiento, pero todav??a tengo el mismo tama??o y resistencia sexual... </p>
                    <p>??Tenga cuidado con las copias falsas de Priapus !. Pueden ser peligrosos. Hice un pedido desde el sitio web oficial y recib?? un producto incre??ble en un paquete muy discreto.</p>
                    <div class="clear"></div>
                    <center>
                        <a href="#fff"><img src="assets/product.png"></a>
                    </center>
                    <center>
                        <a href="#fff">Haga clic aqu?? para asegurarse de haber realizado su pedido en el sitio web oficial.</a>
                    </center>
                </div>
            </div>
            <h1> LOS SEX??LOGOS Y ESPECIALISTAS RECOMIENDAN <a href="#fff"> Priapus</a><br>
</h1>
            <strong> NUMEROSOS M??DICOS RECOMIENDAN <a href="#fff"><b> Priapus</b></a> COMO EL MEJOR REMEDIO PARA LA
                DISFUNCI??N ER??CTIL Y EL AUMENTO DEL TAMA??O DEL PENE, LA CAUSA N??1 DE LA INSATISFACCI??N DE LAS MUJERES EN
                LOS MATRIMONIOS Y LAS RELACIONES. </strong>
            <div>
                <div class="video"><a href="#fff"><img src="assets/dr-36bfd290d1.jpg"></a></div>
                <div class="zizou">
                    <h4> Tomas Berdych <br><span> SEX??LOGO </span>
</h4>
                    <p> Como m??dicos, recomendamos <a href="#fff"><b> Priapus</b></a> a los hombres que desean agrandar su pene y/o tienen problemas de erecci??n. </p>
                    <p><a href="#fff"><b> Priapus</b></a> no implica ninguno de los riesgos asociados con la cirug??a, y sus efectos en el agrandamiento y el retraso de la eyaculaci??n son muy satisfactorios. </p>
                    <p> Cada vez m??s, son las esposas o novias las que vienen a mi consulta porque no est??n satisfechas con su vida sexual, pero no quieren cambiar a sus maridos. Por ello, les recomiendo Priapus y no es raro que regresen con sus maridos para darme las gracias. </p>
                    <p><a href="#fff"><b> Priapus</b></a> aumenta el tama??o del pene 5-8 cm en promedio y he visto personalmente el buen efecto que tiene en mis pacientes, haciendo que ambos se sientan m??s seguros y satisfechos. </p>
                    <p><strong><i> La mezcla de 3 hierbas antiguas tiene un efecto incre??ble en tus
                        erecciones </i></strong></p>
                    <p> No estamos hablando de nuevos y extra??os f??rmacos fabricados en un laboratorio (como el Viagra). </p>
                    <p> En este caso, se trata de plantas que se han utilizado durante miles de a??os por muchas razones diferentes.??El gran avance aqu?? es que <a href="#fff"><b> Priapus</b></a> ha combinado las 3 y ha descubierto el incre??ble poder que tienen para tus erecciones. </p>
                    <p><strong> ??La mejor parte? </strong></p>
                    <p><u> ??No hay efectos secundarios indeseados! </u></p>
                    <p> Obtienes justo lo que quieres... ??Y lo que ella necesita! </p>
                    <ul>
                        <p> Dura m??s tiempo en la cama con un pene tan grande como cuando ten??as 18 a??os y... ??Convi??rtete en el hombre que sabes que puedes ser! Explota con poder y energ??a aumentando el flujo de sangre a tu pene de forma segura y efectiva, creando erecciones tan duras como una piedra que agradan a tu mujer (o mujeres). Enciende tu pasi??n y haz que ella empiece a adorarte como te mereces. </p>
                    </ul>
                    <center><a href="#fff"><img src="assets/product.png"></a></center>
                </div>
            </div>
            <h2> HOMBRES QUE CONSIGUIERON UN PENE DE ''ACTOR PORNO'' QUE TANTO GUSTA A LAS
                MUJERES </h2>
            <p> Las fotos y v??deos presentados en este blog se muestran con el acuerdo de los interesados.??Est?? prohibido usar sus fotos en otras p??ginas web. </p>
            <div style="margin-bottom: 25px;">
                <div class="zizou1">
                    <p style="width: 48%;">
                        <a href="#fff"><img src="assets/22plus-1761b7df80.gif" style="width: 100%; display: block; max-width: 400px; margin: 10px auto;"></a>
                        <strong> Alejandro S. </strong>
                        <br> He estado usando <a href="#fff"><b> Priapus</b></a> durante tres meses.??Al final del segundo mes, mi pene hab??a crecido 7 cm.??Ahora mide 21 cm de largo y puedo hacer el amor durante media hora sin eyacular.
                    </p>
                    <p style="width: 48%; float: right; overflow: hidden;">
                        <a href="#fff"><img src="assets/olivierplus-ca29a77264.jpg" style="width: 100%; display: block;max-width: 400px; margin: 10px auto;"></a>
                        <strong> ??scar B. </strong>
                        <br> He estado usando <a href="#fff"><b> Priapus</b></a> durante un mes.??Fue un m??dico quien me lo recomend?? porque ten??a un complejo por el tama??o de mi pene.??Mi pene ya ha crecido varios cent??metros, pero lo mejor es que ahora es m??s grueso y mis erecciones son mucho m??s duras.????Por fin he olvidado mis complejos!
                    </p>
                </div>
            </div>
            <center><a href="#fff"><img src="assets/flag-pt.jpg"></a></center>
            <div class="vpouste">
                <h2> ATENCI??N </h2>
                <p> ??Hemos recibido miles de correos electr??nicos de hombres que buscan <a href="#fff"><b> Priapus</b></a>
                    <br> ??Estuvo de acuerdo en darles a nuestros lectores un <strong> TIEMPO LIMITADO.</strong><br> ??Ahora puede pedir Priapus! en Chile con 50% de descuento. Esto es solo para nuestros lectores y, desafortunadamente, esta propuesta de valor es limitada, por lo que debe realizar su pedido lo antes posible.</p>
      
                <b>
                </b>
                <center id="fff" style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
                    <a href="#fff"><img src="assets/product.png"></a>
                   
				   
				   
				   
				   
				   
				   
				
                      <div style="max-width: 100%" class="spin-wrapper" id="roulettes">
    <p class="ruletka-p " style=""> Prueba tu suerte!<br>
??Gira la rueda de la costura salada! Obtenga descuentos hasta 50%
</span></p>
    <div class="wheel-wrapper">
      <div class="wheel" style="max-width:100%">
        <img alt="" class="wheel-img" src="assets/prizewheel.png">
        <div class="wheel-cursor">
          <img alt="" src="assets/wheel-cursor.png"><span style="color:black" class="cursor-text lt48" onclick="spin();">SPIN</span>
        </div>
      </div>
    </div>
  </div>

  <div class="spin-result-wrapper">
  <div class="pop-up-window">
    <div class="close-popup"></div>
    <span class="pop-up-heading"  >??Felicidades!</span>
    <p class="ruletka-p pop-up-text"  style="padding: 15px 15px 20px">
??Puedes comprar el producto con un 50% de descuento!</p>
    <a class="pop-up-button" href="#roulettes">OK</a>
  </div>
</div>

<div class="order_block">

  <center><s>65800 CLP	
</s>
              
			 <b style="color:red">  
32900 CLP
 </b>	</center>
 
  <h3><br></h3>
  <form method="post" class="orderForm" id="form" action="index.php">

    <input type="hidden" name="sub1" value="{clickid}">
    <input type="hidden" name="sub2" value="chs">
    <input type="hidden" name="sub3" value="<?= $_GET['sub3'];?>">
    <input type="hidden" name="sub4" value="<?= $_GET['sub4'];?>">
    <input type="hidden" name="sub5" value="<?= $_GET['sub5'];?>">

    <input type="text" class="input-roulette" id="name" style="max-width:100%"  name="name" placeholder="Tu nombre" required><br>

    <input type="tel" class="input-roulette phone-mask" style="max-width:100%"  id="phone" name="phone"   onkeyup="this.value=this.value.replace(/\s/,'')" minlength="5" required placeholder="N??mero de tel??fono" ><br>
 

    <input type="submit" name="submit"  style="max-width:100%"  class="submit-roulette" value="??Ordene con 50% de descuento!">
  </form>
</div>


 <style>.submit-roulette:hover {
    background: #bb0000;
    transition: background 0.3s;
}

.spin-result-wrapper {
    display: none;
    padding: 0 10px;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    width: 100%;
    top: 0;
    z-index: 999;
    left: 0;
    height: 100%;
    position: fixed;
    background-color: rgba(0, 0, 0, .6);
    text-align: center;
}

.pop-up-window {
    position: relative;
    max-width: 400px;
    right: 0px;
    left: 0px;
    top: 40%;
    margin: 0px auto;
    background: #ffffff none repeat scroll 0% 0%;
    text-align: center;
    padding: 10px;
    padding-top: 70px;
    padding-bottom: 20px;
    border-radius: 10px;
    animation: 0.7s ease 0s normal none 1 running pop-up-appear;
}

.close-popup {
    position: absolute;
    width: 30px;
    height: 30px;
    background-image: url("cross.svg");
    background-size: 100%;
    top: -40px;
    border-radius: 50%;
    -webkit-box-shadow: 0 0 10px #fff;
    box-shadow: 0 0 10px #fff;
    right: -40px;
    cursor: pointer;
}

.pop-up-heading {
    font-size: 40px;
    margin-bottom: 20px;
}



.pop-up-button {
    text-transform: uppercase;
    text-decoration: none !important;
    padding: 10px 20%;
    font-size: 20px;
    border-radius: 5px;
    background-color: rgb(113, 195, 65);
    color: rgb(255, 255, 255) !important;
    border: medium none;
    cursor: pointer;
    outline: medium none;
}
.pop-up-window::before {
    content: "";
    position: absolute;
    width: 110px;
    height: 110px;
    top: -55px;
    left: 0;
    right: 0px;
    margin: 0 auto;
    background-color: rgb(113, 195, 65);
    border-radius: 50%;
    animation: 0.5s ease 0.6s normal backwards 1 running pop-up-appear-before;
}

.submit-roulette:active {
    transform: translateY(2px);
    box-shadow: none;
}

.super-rotation {
    -webkit-animation-name: super-rotation;
    animation-name: super-rotation;
    -webkit-animation-duration: 7s;
    animation-duration: 7s;
    -webkit-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
    -webkit-transition-timing-function: ease-in-out;
    -o-transition-timing-function: ease-in-out;
    transition-timing-function: ease-in-out
}

@-webkit-keyframes super-rotation {
    70% {
        -webkit-transform: rotate(1783deg);
        transform: rotate(1783deg);
    }
    100% {
        -webkit-transform: rotate(1774deg);
        transform: rotate(1774deg);
    }
}

@keyframes super-rotation {
    70% {
        -webkit-transform: rotate(1962deg);
        transform: rotate(1962deg);
    }
    100% {
        -webkit-transform: rotate(1950deg);
        transform: rotate(1950deg);
    }
}

input[value="?????????????????????????????????? ?????????????????????????????????????"], .submit-roulette {
    text-transform: uppercase;
    padding: 10px 15px;
    margin: 15px 0;
    outline: none;
    border: none;
    margin-top: 5px;
    border-radius: 5px;
    box-shadow: 0px 4px 3px #242120;
    background: red;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.3s;
}

input[value="?????????????????????????????????? ?????????????????????????????????????"]:hover {
    background: #bb0000 !important;
    transition: background 0.3s;
}

input[value="?????????????????????????????????? ?????????????????????????????????????"]:active {
    transform: translateY(2px);
    box-shadow: none !important;
}

.input-roulette {
    padding-left: 5px;
    height: 42px;
    margin-bottom: 10px;
    width: 300px !important;
}

input[placeholder="????????????????? ????????????"], input[placeholder="????????????? ??????????????????????????????"] {
    padding-left: 5px;
    height: 42px;
    margin-bottom: 10px;
}

.ruletka-p {
    text-indent: 0px;
    color: black;
    text-align: center !important;
    margin: 15px;
    line-height: 25px;
    font-weight: bold;
}
.order_block {
    display: none;
    text-align: center !important;
}

.order_block img {
    width: 70%;
}

.order_block h3 {
    font: bold 18px Arial !important;
    background: transparent;
}

.ruletka-p h2 {
    font-size: 25px;
    margin-bottom: 15px;
}

.ruletka-a {
    color: rgb(22, 151, 206);
}

.spin-wrapper {
    -webkit-box-shadow: 0 0 10px;
    box-shadow: 0 0 10px;
    border: 3px solid red;
    padding: 20px 10px;
    border-radius: 10px;
    text-align: center;
    box-sizing: border-box;
}

.spin-wrapper .ruletka-p {
    margin-bottom: 15px;
}

.danger-text {
    color: red;
    font-weight: bold;
}

.wheel {
    width: 380px !important;
    margin: 0 auto;
    position: relative;
}

.wheel img {
    max-width: 100%;
}

.wheel-img {
    -webkit-transition: 4s;
    -o-transition: 4s;
    transition: 4s;
}

.wheel-cursor {
    position: absolute;
    width: 35% !important;
    height: 35%;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}
.cursor-text {
    position: absolute;
    z-index: 2;
    display: inline-block;
    width: 45% !important;
    height: 45%;
    font: 16px Arial !important;
    line-height: 61px !important;
    cursor: pointer;
    border-radius: 50%;
    vertical-align: middle;
    text-align: center;
    background-color: #ccc;
    border: 1px solid #ccc;
    top: 55%;
    left: 50%;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    -webkit-box-shadow: rgba(255, 255, 255, 1) 0px -2px 0px inset, rgba(255, 255, 255, 1) 0px 2px 0px inset, rgba(0, 0, 0, 0.4) 0px 0px 5px;
    box-shadow: rgba(255, 255, 255, 1) 0px -2px 0px inset, rgba(255, 255, 255, 1) 0px 2px 0px inset, rgba(0, 0, 0, 0.4) 0px 0px 5px;
    background: rgb(255, 255, 255);
    background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(255, 255, 255, 1)), color-stop(100%, rgba(234, 234, 234, 1)));
    background: -webkit-radial-gradient(center, ellipse cover, rgba(255, 255, 255, 1) 0%, rgba(234, 234, 234, 1) 100%);
    background: -o-radial-gradient(center, ellipse cover, rgba(255, 255, 255, 1) 0%, rgba(234, 234, 234, 1) 100%);
    background: -webkit-radial-gradient(center, ellipse, rgba(255, 255, 255, 1) 0%, rgba(234, 234, 234, 1) 100%);
    background: -o-radial-gradient(center, ellipse, rgba(255, 255, 255, 1) 0%, rgba(234, 234, 234, 1) 100%);
    background: radial-gradient(ellipse at center, rgba(255, 255, 255, 1) 0%, rgba(234, 234, 234, 1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#eaeaea', GradientType=1);
}
.pop-up-text {
    margin-bottom: 25px;
    font-size: 24px;
    line-height: 30px;
    text-align: center !important;
}
.pop-up-window::after {
    content: "";
    position: absolute;
    width: 50px;
    height: 20px;
    top: -20px;
    left: 0px;
    right: 0;
    margin: 0 auto;
    border-width: medium medium 4px 4px;
    border-style: none none solid solid;
    border-color: currentcolor currentcolor rgb(255, 255, 255) rgb(255, 255, 255);
    -moz-border-top-colors: none;
    -moz-border-right-colors: none;
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    border-image: none;
    transform: rotate(-45deg);
    transition: opacity 1s ease 0s;
    animation: 0.5s ease 0.6s normal backwards 1 running pop-up-appear-after;
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="assets/ruletka.js"></script>



				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
				   
                    <a href="#fff" rel="nofollow"> P.D. ??Ten cuidado!??Estas pastillas puede hacer que tu PENE
                        SE HAGA DEMASIADO GRANDE.??Por favor, lee las instrucciones primero.</a>
                </center>
            </div>
            <div class="flex-column" style="margin-bottom: 10px;">
                <h1> M??S USUARIOS DE Priapus</h1>
                <div class="video"><a href="#fff"><img src="assets/vip-1e7d63adc6.gif" style="width: 100%; max-width: 700px"></a></div>
                <div class="zizou1">
                    <p> Lorenzo: La verdad es que no me arrepiento de haber probado <a href="#fff"><b> Priapus</b></a>, mi esposa est?? muy contenta con el resultado y nuestras relaciones sexuales duran 3 veces m??s. Nuestra relaci??n ha mejorado bastante y me he vuelto m??s seguro de m?? mismo. </p>
                    <p> Acabo de terminarme el 3er tubo.??No dudar?? en pedir m??s una vez que utilice mis 6 tubos, pero dicen que los efectos duran incluso despu??s de haber acabado el tratamiento, as?? que volver?? para deciros si es verdad. </p>
                </div>
            </div>
            <h2> ??UN PENE GIGANTE COMO EL DE UN ACTOR PORNO! </h2>
            <p><a href="#fff"><b> EL USUARIO DE Priapus</b></a> MATEO P. DA SU TESTIMONIO </p>
            <div style="margin-bottom: 50px;">
                <div class="res" style="margin-bottom:10px;">
                    <a href="#fff"><img src="assets/mathieuplus-1669647536.jpg"></a>
                </div>
                <div class="zizou1">
                    <p> No ten??a un pene demasiado peque??o, pero cuando un amigo me habl?? de <a href="#fff"><b>
                        Priapus</b></a> quise probarlo. Resultado: ??mi pene se ha vuelto enorme!????Pero lo mejor de todo es que puedo hacer el amor durante horas!????Qu?? m??s se podr??a pedir? </p>
                </div>
            </div>
            <h2> AHORA LAS MUJERES ME PERSIGUEN GRACIAS AL TAMA??O DE MI PENE </h2>
            <p> EL
                <a href="#fff">
                    Priapus</a> MATEO P. DA SU TESTIMONIO
            </p>
            <div class="flex-column" style="margin-bottom: 40px;">
                <div class="zizou2">
<a href="#fff"><img src="assets/headersex.jpg"></a>
                    <p> Era una persona t??mida y retra??da, a??n virgen a los 21 a??os.??No soy guapo y las chicas ni siquiera me miraban, as?? que nunca me atrev?? a acercarme a una.??Desde que empec?? a usar <a href="#fff"><b> Priapus</b></a>, mi vida ha cambiado por completo. </p>
                    <p> Me di cuenta de que la apariencia no es tan importante.??Lo ??nico que importa es el tama??o.??En solo 1 mes, obtuve los primeros resultados.??Al cabo de tres meses, mi pene se hab??a vuelto enorme.????Y no pas?? desapercibido!??No pens?? que las chicas iban a notar cosas as??, ??al final me di cuenta de que era lo ??nico en lo que pensaban!
                    </p>
                </div>
                <div class="zizou3">
                    <p> Todo comenz?? cuando pude pasar una noche incre??ble con una chica de mi curso de ingl??s.??Luego, todo se hizo muy dif??cil.??Al igual que los hombres hablan sobre sus relaciones, las mujeres tambi??n hablan sobre sus experiencias sexuales entre s??. As?? que bueno, todas las chicas de mi universidad comenzaron a fantasear sobre el tama??o de mi pene.??Ahora tengo noches inolvidables.??Si alguien me hubiera dicho eso hace unos meses, nunca lo hubiera cre??do... </p>
                </div>
            </div>
        </div>
        <div class="contenulu" style="overflow: hidden;">
            <a href="#fff"><img src="assets/regisplus-2ac596d0b3.jpg"></a><strong> Rodrigo L. </strong>
            <p> Ped?? <a href="#fff"><b> Priapus</b></a> en el sitio web oficial y en 3 d??as recib?? mi paquete en la oficina.??El paquete pas?? completamente desapercibido, mis colegas no sospecharon nada.??Segu?? el tratamiento de 6 meses y lo termin?? hace 3 meses.????Ahora los resultados son impresionantes y duraderos!
            </p>
            <a class="btn" href="#fff"> PEDIR Priapus</a>
            <a href="#fff" rel="nofollow"><img src="assets/rolandplus-61d381748e.jpg"></a>
            <strong> V??ctor R. </strong>
            <p> Siempre tuve un pene peque??o y fue la verg??enza de mi vida.??A d??a de hoy tengo un pene de tama??o normal, mi esposa est?? encantada y yo tambi??n, estar?? eternamente agradecido a <a href="#fff"><b>
                Priapus</b></a> por haber cambiado mi vida. </p>
            <a href="#fff"><img src="assets/sebplus-f8bdac299d.jpg"></a><strong> Sebasti??n C. </strong>
            <p> Viv?? 2 a??os en el Reino Unido y all?? descubr?? <a href="#fff"><b> Priapus</b></a>, ??es muy popular!??Me agrada saber que ahora se fabrique y comercialice en mi pa??s, ya que podr?? pedirlo directamente a casa y, adem??s, los gastos de env??o son baratos. </p>
            <a href="#fff"><img src="assets/nicolasplus-65865cf24d.jpg"></a><strong> Nicol??s D. </strong>
            <p> Creo que la imagen habla por s?? sola... Ahora estoy muy orgulloso de mi polla, ??gracias <a href="#fff"><b> Priapus</b></a>! </p>
            <a href="#fff"><img src="assets/guillaumeplus-a587b84973.jpg"></a><strong> Marco F. </strong>
            <p> Despu??s de a??os de verg??enza y decepciones, me cans?? de mi peque??o pene.??Me sent??a menos que un hombre y mi confianza era abismal... Un amigo me recomend?? probar <a href="#fff"><b> Priapus</b></a> . ??Fue la mejor decisi??n que hubiera hecho nunca!??Ahora mi pene es enorme, puedo follar durante horas y las mujeres no pueden dejar de perseguirme para polvos r??pidos. ??Anhelan mi monstruosa polla! </p>
            <a href="#fff"><img src="assets/marcos.jpg"></a><strong> Alberto F. </strong>
            <p> Despu??s de un tratamiento de 4 meses, creci?? 3,8 cm, ??ahora es enorme!??Pero <a href="#fff"><b>
                Priapus</b></a> tuvo un segundo efecto totalmente inesperado en m?? - gan?? tanta confianza que me convert?? en un verdadero im??n para las chicas. Antes ni siquiera se fijaban en m??, ??pero ahora todas me quieren!??Y nunca se sienten decepcionadas... Mis amigos me preguntan qu?? ha cambiado, pero eso no se discute. No pienso revelar mi secreto. </p>
        </div>
        <div class="yorumlar">
            <div class="vplique"> COMENTARIOS DE LECTORES</div>
            <div class="fessebouc">
                <div class="dismoi comment">
                    <div class="fessedebook">
                        <a href="#fff"><img src="assets/avatar-b48c97e17a.jpg"></a>
                    </div>
                    <div class="facezizou" style="overflow: hidden;">
                        <p> Marcos C. </p>
<span> Antes mi pene era de 10,7 cm y ten??a miedo de acercarme a las chicas o ir m??s all??.??En solo un mes, mi pene alcanz?? los 17,6 cm y ahora puedo acercarme a cualquier chica con confianza. <br></span>
                        <a href="#fff"><img src="assets/maxime-ffe569f6ab.jpg"></a>
                        <strong> <span> <a href="#fff"> Me gusta</a> </span> <span> <a href="#fff"> A??adir un comentario</a> </span>
                        </strong>
                    </div>
                </div>
                <div class="dismoi comment">
                    <div class="fessedebook">
                        <a href="#fff"><img src="assets/avatar-b48c97e17a.jpg"></a>
                    </div>
                    <div class="facezizou" style="overflow: hidden;">
                        <p> Mart??n R. </p>
<span> He estado casado durante 5 a??os y, por primera vez, he visto a mi esposa disfrutar del sexo.??Qu?? orgullo hacerla gemir de placer. Antes de probar <a href="#fff"><b> Priapus</b></a>, termin??bamos en unos minutos. <br></span><a href="#fff"><img src="assets/martin-c829573d41.jpg"></a>
                        <strong> <span> <a href="#fff"> Me gusta</a> </span> <span> <a href="#fff"> A??adir un comentario</a> </span>
                        </strong>
                    </div>
                </div>
                <div class="lavalse comment">
                    <div class="fessedebook">
                        <a href="#fff"><img src="assets/camille-173f0dba96.jpg"></a>
                    </div>
                    <div class="facezizou" style="overflow: hidden;">
                        <p> Camila L. </p>
<span> No he tenido ni un solo orgasmo durante a??os.??Me emociona leer tu comentario.??Acabas de convencerme de compr??rselo a mi marido.??Muchas gracias por tu recomendaci??n. </span>
                        <strong><span> <a href="#fff"> Me gusta</a> </span> <span> <a href="#fff"> A??adir un comentario</a> </span>
                        </strong>
                    </div>
                </div>
                <div class="dismoi comment">
                    <div class="fessedebook">
                        <a href="#fff"><img src="assets/av-pat-80bfab26d6.jpg"></a>
                    </div>
                    <div class="facezizou" style="overflow: hidden;">
                        <p> Patricia D. </p>
<span> Compramos este producto porque mi marido ten??a un problema de eyaculaci??n precoz.??El problema desapareci?? despu??s de unos d??as y, despu??s de un mes, su pene creci?? considerablemente. <br></span><a href="#fff"><img src="assets/patricia-f36e794f37.jpg"></a><strong><span> <a href="#fff"> Me gusta</a> </span>
                        <span> <a href="#fff"> A??adir un comentario</a> </span>
                    </strong>
                    </div>
                </div>
                <div class="dismoi comment">
                    <div class="fessedebook">
                        <a href="#fff"><img src="assets/avatar-b48c97e17a.jpg"></a>
                    </div>
                    <div class="facezizou" style="overflow: hidden;">
                        <p> Dami??n T. </p>
<span> Han pasado 3 meses desde que comenc?? a usar estas pastillas a diario.??Mi pene creci?? 4,5 cm y tambi??n se hizo m??s grueso.??Puedo follar durante 20-30 minutos antes de correrme y ahora todas las chicas hablan de m??.??Incluso me llaman mujeres que no conozco. <a href="#fff"><b> Priapus</b></a> ha revolucionado mi vida sexual. </span>
                        <a href="#fff"><img src="assets/damien-deaf61bdc7.jpg"></a>
                        <strong><span> <a href="#fff"> Me gusta</a> </span> <span> <a href="#fff"> A??adir un comentario</a> </span>
                        </strong>
                    </div>
                </div>
                <div class="dismoi comment">
                    <div class="fessedebook">
                        <a href="#fff"><img src="assets/david-b6ed217a74.jpg"></a>
                    </div>
                    <div class="facezizou" style="overflow: hidden;">
                        <p> David M. </p>
<span> Compr?? este producto para tener una polla m??s grande, pero finalmente fue la cura para todos mis problemas sexuales.??Ya no tengo disfunci??n sexual ni eyaculaci??n precoz.??Mi pene creci?? 4,5 cm.????Es impresionante! </span><strong><span> <a href="#fff"> Me gusta</a> </span><span> <a href="#fff"> A??adir un comentario</a> </span>
                    </strong>
                    </div>
                </div>
                <div class="dismoi comment">
                    <div class="fessedebook">
                        <a href="#fff"><img src="assets/marie-dcfabfffb2.jpg"></a>
                    </div>
                    <div class="facezizou" style="overflow: hidden;">
                        <p> Mar??a P. </p>
<span> Ped?? este producto para mi novio.??Nuestra vida sexual era todo un aburrimiento.??Despu??s de solo una semana de uso, comenzamos a hacer el amor de nuevo como en nuestra primera noche juntos.??Si ten??is problemas en la cama, no perd??is la oportunidad de pedir este producto. </span><strong><span> <a href="#fff"> Me gusta</a> </span><span> <a href="#fff"> A??adir un comentario</a> </span>
                    </strong>
                    </div>
                </div>
                <div class="dismoi comment">
                    <div class="fessedebook">
                        <a href="#fff"><img src="assets/avatar-b48c97e17a.jpg"></a>
                    </div>
                    <div class="facezizou" style="overflow: hidden;">
                        <p> Borja J. </p>
<span> Durante a??os, he estado molesto por el tama??o de mi pene.??Lamento todos esos a??os que pas?? deprimido por eso. <a href="#fff"><b> Priapus</b></a> resolvi?? mis problemas en 2 meses y ahora mi polla es de 19,2 cm:) </span><a href="#fff"><img src="assets/boris-456f74843d.jpg"></a><strong><span> <a href="#fff"> Me gusta</a> </span>
                        <span> <a href="#fff"> A??adir un comentario</a> </span>
                    </strong>
                    </div>
                </div>
                <div class="dismoi comment">
                    <div class="fessedebook">
                        <a href="#fff"><img src="assets/gregav-67110a33e9.jpg"></a>
                    </div>
                    <div class="facezizou" style="overflow: hidden;">
                        <p> Jorge S. </p>
<span> Ahora mi esposa tiene dificultades para meter mi polla en su boca.??Pod??is verlo vosotros mismos.??No pens?? que podr??a crecer tanto. <br></span><a href="#fff"><img src="assets/greg-1dff7fe182.jpg"></a><strong><span> <a href="#fff"> Me gusta</a> </span>
                        <span> <a href="#fff"> A??adir un comentario</a> </span>
                    </strong>
                    </div>
                </div>
                <div class="lavalse comment">
                    <div class="fessedebook">
                        <a href="#fff"><img src="assets/emilie-3e05a4257b.jpg"></a>
                    </div>
                    <div class="facezizou" style="overflow: hidden;">
                        <p> Emilia V. </p>
<span> Algunas mujeres tienen suerte... Les envidio.??Es un gran aumento... en longitud y grosor. </span><strong><span> <a href="#fff"> Me gusta</a> </span><span> <a href="#fff"> A??adir un comentario</a> </span>
                    </strong>
                    </div>
                </div>
                <div class="dismoi comment">
                    <div class="fessedebook">
                        <a href="#fff"><img src="assets/guillaumeav-50b114c75d.jpg"></a>
                    </div>
                    <div class="facezizou" style="overflow: hidden;">
                        <p> Lorenzo D. </p>
<span> Ahora mi pene es m??s grande y puedo decidir cu??ndo correrme. Me he olvidado de lo que es ser prematuro, siento que me he convertido en un dios del sexo. </span><strong><span> <a href="#fff"> Me gusta</a> </span><span> <a href="#fff"> A??adir un comentario</a> </span>
                    </strong>
                    </div>
                </div>
                <div class="dismoi comment">
                    <div class="fessedebook">
                        <a href="#fff"><img src="assets/6-0c432c4fe9.jpg"></a>
                    </div>
                    <div class="facezizou" style="overflow: hidden;">
                        <p> Jos?? R. </p>
<span> Este producto pr??cticamente ha salvado mi matrimonio.??Mi pene es mucho m??s grande y mi esposa lo disfruta como nunca.??;) </span><strong><span> <a href="#fff"> Me gusta</a> </span> <span> <a href="#fff"> A??adir un comentario</a> </span>
                    </strong>
                    </div>
                </div>
                <div class="lavalse comment">
                    <div class="fessedebook">
                        <a href="#fff"><img src="assets/virginie-769ad0d7f6.jpg"></a>
                    </div>
                    <div class="facezizou" style="overflow: hidden;">
                        <p> Virginia F. </p>
<span> ??Incre??ble!????Y tambi??n previene la eyaculaci??n precoz???Mi marido tiene eso, as?? que estoy pensando en comprarle este producto.??Estar??amos muy felices si pudi??rais responder. </span><strong><span> <a href="#fff"> Me gusta</a> </span> <span> <a href="#fff"> A??adir un comentario</a> </span>
                    </strong>
                    </div>
                </div>
                <div class="lavalse comment">
                    <div class="fessedebook">
                        <a href="#fff"><img src="assets/6-0c432c4fe9.jpg"></a>
                    </div>
                    <div class="facezizou" style="overflow: hidden;">
                        <p> Jos?? R. </p>
                        <span> S??, Virginia. Antes yo tambi??n me corr??a en 5 minutos como m??ximo.??Con <a href="#fff"><b> Priapus</b></a> nunca me he corrido en menos de 20 minutos, y mi esposa por fin tiene orgasmos reales. </span><strong><span> <a href="#fff"> Me gusta</a> </span> <span> <a href="#fff"> A??adir un comentario</a> </span>
                    </strong>
                    </div>
                </div>
                <div class="dismoi comment">
                    <div class="fessedebook">
                        <a href="#fff"><img src="assets/avatar-b48c97e17a.jpg"></a>
                    </div>
                    <div class="facezizou" style="overflow: hidden;">
                        <p> Pedro B. </p>
<span> Gracias <a href="#fff"><b> Priapus</b></a> .????Salvaste mi matrimonio!??Adem??s de un pene peque??o, no tuve erecciones en 3 a??os.??Ahora mi pene tiene un tama??o normal y tengo erecciones cada vez que lo hago con una chica.??Si alguien aqu?? se pregunta si deber??a comprar este producto, no hay necesidad de dudarlo.??Salv?? mi matrimonio y se lo recomiendo a todos. <a href="#fff"><img src="assets/pierre-6319d08a9f.jpg"></a></span><strong><span> <a href="#fff"> Me gusta</a> </span> <span> <a href="#fff"> A??adir un comentario</a> </span>
                    </strong>
                    </div>
                </div>
                <div class="dismoi comment">
                    <div class="fessedebook">
                        <a href="#fff"><img src="assets/avatar-b48c97e17a.jpg"></a>
                    </div>
                    <div class="facezizou" style="overflow: hidden;">
                        <p> Eric L. </p>
<span> Sin comentarios.??Os mostrar?? una foto, juzgad vosotros mismos.??Empec?? solo hace 1 mes y mi polla ya es 4,3 cm m??s grande. <br></span><a href="#fff"><img src="assets/eric-5deb66c956.jpg"></a><strong><span> <a href="#fff"> Me gusta</a> </span><span> <a href="#fff"> A??adir un comentario</a> </span>
                    </strong>
                    </div>
                </div>
                <div class="dismoi comment">
                    <div class="fessedebook">
                        <a href="#fff"><img src="assets/7-e1c78db5f5.jpg"></a>
                    </div>
                    <div class="facezizou" style="overflow: hidden;">
                        <p> Alberto C. </p>
<span> Recib?? <a href="#fff"><b>Priapus</b></a> hace un mes y ahora que he descubierto este blog, he aprovechado el descuento para comprar 2 m??s.??Mi polla ha crecido 3,6 cm en solo un mes.??Es realmente asombroso. </span><strong><span> <a href="#fff"> Me gusta</a> </span> <span> <a href="#fff"> A??adir un comentario</a> </span>
                    </strong>
                    </div>
                </div>
                <center>
                    <a class="btn" href="#fff"> PEDIR Priapus</a>
                </center>
            </div>
        </div>
    </div>
</div>
<div class="footer-fixed">
    <div>


            <a href="#fff">Haga clic aqu??</a>
    </div>
</div>
<div id="comeback" style="display:none" class="comeback_layout">
    <div class="comeback_wrapper">
        <div class="comeback_container center-block">
            <span class="comeback_close" onclick="document.getElementById('comeback').style.display = 'none';"><img src="assets/cross.png" width="21" height="21" class="cross"></span>
            <h1 style="margin: 0 auto; width: 300px;text-align:center;color: crimson;">Espere!</h1>
            <p style="line-height: 6px;">Est??s seguro que quieres irte?</p>
            <p style="text-transform: uppercase;"><b>No te pierdas esta oferta exclusiva</b></p>
            <br>
            <div style="position: relative;display: inline-block;">
                <div id="block1"><a href="#fff"><img class="comeback_img" src="assets/product.png"></a></div>
                <div id="block2"><p style="text-transform: uppercase; font-size: 31px; line-height: 33px;margin: 41px 5px;"><b>OBTENGA UN GRAN  <span style="color: crimson;">DESCUENTO</span> + ENV??O GRATIS</b></p></div>
            </div>            <br>
            <br>
            <a class="btn" href="#fff">Orden Priapus</a>
        </div>
    </div>
</div>

    
   
  <script>
    $(document).ready(function (){
      $("a").on('click', function(event) {
        console.log(this.hash);
        if (this.hash !== "") {
          console.log('hash');
          event.preventDefault();
          var hash = this.hash;

          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 600, function(){

          });
        } else {
          console.log('hash empty');
          if ($('.fff').length > 0) {
            $('html, body').animate({
              scrollTop: $('.fff').offset().top
            }, 600, function(){

            });
          }
        }
      });
    });
  </script>

<script>
    if (typeof(window.orientation)=="undefined")
    {
        var o = document.createElement("img");
        o.src='https://adltnews.com/click.php?event9=0';
    }
    else
    {
        var o = document.createElement("img");
        o.src='https://adltnews.com/click.php?event9=1';
    }
</script>
<script type="text/javascript">
var scroll = 0;
window.onscroll = function(){
if( scroll != 1 ){
    scroll = 1;
    var o = document.createElement("img");
    o.src = "https://adltnews.com/click.php?event8=1";
    }
}
</script>
<script>
function pushToTrackerViaImage(){
    var pushURL = 'https://adltnews.com/click.php?event7=1';
    var img = document.createElement('img');
    img.src=pushURL;
    img.style.display='none';
    document.body.appendChild( img );
}
function pushAfterTimeout(timeout){
    setTimeout(pushToTrackerViaImage, timeout*1000);
}
var TIMEOUT_IN_SECONDS = 30;
pushAfterTimeout(TIMEOUT_IN_SECONDS);
</script>
<script>
function pushToTrackerViaImage(){
    var pushURL = 'https://adltnews.com/click.php?event6=1';
    var img = document.createElement('img');
    img.src=pushURL;
    img.style.display='none';
    document.body.appendChild( img );
}
function pushAfterTimeout(timeout){
    setTimeout(pushToTrackerViaImage, timeout*1000);
}
var TIMEOUT_IN_SECONDS = 3;
pushAfterTimeout(TIMEOUT_IN_SECONDS);
</script>
</body>
</html>
