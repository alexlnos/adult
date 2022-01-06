<?php

$api = [
    'key' => '14674',
    'secret' => 'MlofrKtp9zaKyB9dNOe6GiPVXXkay4NJ',
    'flow_url' => 'https://leadrock.com/URL-77B0D-B345B'
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

<!DOCTYPE html>
<html dir="ltr">
<head>
<style>
    .ac_footer {
        position: relative;
        text-align: center;
        overflow: hidden;
        padding: 50px 0;
        color: #A12000;
    }

    .ac_footer a {
        color: #A12000;
    }

    .ac_footer p {
        text-align: center;
    }

    img[height="1"], img[width="1"] {
        display: none !important;
    }

</style>


<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
<link href="assets/titan_gel_es/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="assets/titan_gel_es/css/brumolat.com/content/lMafg9BV1eRAWQP/css/index.css" rel="stylesheet"/>
<title> ¡¿Cómo agrandé mi pene unos 5,5 cm en 14 dias?! / Todo Hombres Online </title>
<link rel="stylesheet" type="text/css" href="assets/titan_gel_es/css/style2.css">
<script src="assets/js/createDate.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

  <!-- INTH_SNIPPET_TOP -->
</head>
<body>

<div class="wrap">
<header>
<div class="logo">
<h1>
<span href="#orderblock"> Men's Secrets </span>
</h1>
</div>
</header>
<div class="content">
<div class="post">
<div class="info"> Marcos Tarazona
                    <script type="text/javascript">
                        dtime_nums(-6, true)
                    </script>
</div>
<h1> ¡¿Cómo agrandé mi pene unos 5,5 cm en 14 dias?! </h1>
<br/>
<img class="floatl" src="assets/titan_gel_es/img/3.gif"/>
<p style="margin-top:0;"> Hola a todos. Me llamo Marcos, soy de Chile. ¡He encontrado algo muy
                    real! <img src="assets/titan_gel_es/img/brumolat.com/content/lMafg9BV1eRAWQP/img/Do9W0plDWNE.jpg" width="20px"/> Resumiendo, yo tenía una vida normal. Pero
                    pensaba que tenía el pene demasiado pequeño y me faltaba confianza por culpa de esto. <img src="assets/titan_gel_es/img/brumolat.com/content/lMafg9BV1eRAWQP/img/vcqC1-NGSyk.jpg" width="20px"/></p>
<p> Las tías tampoco parecían impresionadas cuando me veían el chile. Nunca me lo dijeron directamente,
                    pero me di cuenta de que no les gustaba mi chile. <img src="assets/titan_gel_es/img/brumolat.com/content/lMafg9BV1eRAWQP/img/oBHjuv51oac.jpg" width="20px"/></p>
<p> Pero un día me encontré con el blog de un actor porno americano. Revelaba el secreto de las pollas
                    grandes que tienen todos los actores. Utilizan <a href="#orderblock"> pastillas </a> especial para sus penes.
                </p>
<p> Pensé que valía la pena intentarlo y pedí tabletas. Empecé a utilizarlo y, tras una semana, me medí
                    el pene. ¡Me quedé tan IMPRESIONADO! <img src="assets/titan_gel_es/img/brumolat.com/content/lMafg9BV1eRAWQP/img/MAW6wNwXLhQ.jpg" width="20px"/></p>
<center>
<img src="assets/titan_gel_es/img/6.gif"/>
<br/><small> Miren, ¡tiene el tamaño de una botella! </small>
</center>
<p> Antes medía 15 cm y ahora mide 20,5 cm. ¡Solo necesité una semana para conseguirlo! </p>
<p> Ahora las chicas se vuelven locas con mi pene. <img src="assets/titan_gel_es/img/brumolat.com/content/lMafg9BV1eRAWQP/img/y-OM-9RccW0.jpg" width="20px"/>
                    Incluso cuando está dentro del pantalón, pueden ver que tengo algo que las sorprenderá. Y desean
                    tener sexo conmigo. Ahora me siento mucho más seguro. <img src="assets/titan_gel_es/img/brumolat.com/content/lMafg9BV1eRAWQP/img/Gphi1IOOEeY.jpg" width="20px"/></p>
<p> Supongo que comprenderán que, si quieren tener un pene grande que haga que todas las chicas quieran
                    tener sexo con ustedes, vale la pena intentarlo. ¡Así que a trabajar! </p>




                    <script src="assets/titan_gel_es/js/wheel.js"></script>

<center><a href="#orderblock"><img alt="" class="product__img" src="assets/prostazex/img/product.png"  id="productOne"></a></center>
        
        
        
        <div class="productform" id="orderblock">
            <div class="prod-wrap toform">
               <div id="fff" class="spin-wrapper">
                   <div class="wide-p">
                  <p style="text-align:center"> ¡Lo sé! <br> "Nuestra página web tiene ofertas promocionales por la compra de productos SexUp. Prueba tu suerte y pincha en el botón GIRAR. ¡Si tienes suerte, obtendrás un descuento en este producto! ¡Buena suerte!" </p>
                </div>
                  <div class="form-wrapper"></div>
                  <div class="wheel-wrarpper">
                     <div class="wheel">
                        <img alt="" class="wheel-img" src="assets/titan_gel_es/img/prizewheel.png">
                        <div class="wheel-cursor"><img alt="" src="assets/titan_gel_es/img/wheel-cursor.png"><span class="cursor-text lt48" onclick="spin();">GIRAR</span> </div>
                     </div>
                  </div>
               </div>
               <div class="order_block">
                  <div class="prod_img_wrapper">
               <center>      <img src="assets/prostazex/img/product.png" width="300" class="prod_img"></center>
                    
                     <center><s> 7800 ARS </s><br>
                        <i style="color:red;font-size:22px"> 3900 ARS </i></center>

                  </div>
                  <center>
                     <h3 style="text-align: center;margin: 0;"><span class="time_remains" id="min"></span> : <span class="time_remains" id="sec"></span> </h3>
                  </center>
                  <form class="order_form al-form  orderForm " method="POST" action="index.php">

                    <input type="hidden" name="sub1" value="{clickid}">
                    <input type="hidden" name="sub2" value="chs">
                    <input type="hidden" name="sub3" value="<?= $_GET['sub3'];?>">
                    <input type="hidden" name="sub4" value="<?= $_GET['sub4'];?>">
                    <input type="hidden" name="sub5" value="<?= $_GET['sub5'];?>">
                    
                     <label for="name" class="data_label">Tu nombre:</label>
                     <div>
                        <input class="wheel_input" id="name" name="name" placeholder="" required type="text" value="">
                        <label for="phone" class="data_label">Tu número de teléfono:</label>
                        <div>
                           <input class="wheel_input" id="phone" name="phone" placeholder=""  onkeyup="this.value=this.value.replace(/\s/,'')" minlength="5" required type="text" value="">
                        </div>
                      
                        <button class="main-link " type="submit"> ¡Envía tu pedido y llévate tu descuento en SexUp!
                        </button>
                  </form>
                  </div>
                  <style>
                     .priceс br {
                     display: none;
                     }
                  </style>
               </div>
            </div>
    </div>






<p style="text-align:center"> <a class="btn" href="#orderblock" style="font-size: 20px;"><b> Aquí tienen el
                            enlace donde lo pedí </b></a></p>
</div>
<div class="vk-comment-load comment-id-1">
<div class="vk-avatar"><img src="assets/titan_gel_es/img/brumolat.com/content/lMafg9BV1eRAWQP/img/1.png" width="50"/></div>
<div class="vk-comment-name"><span href="#orderblock"> Diana Sánchez </span></div>
<div class="vk-comment-text"> mmmmm... es impresionante cuando un hombre tiene un pene grande y potente
                    :) </div>
<div class="vk-comment-date"> <span class="comm_size">
<script type="text/javascript">
                            dtime_nums(-6, true)
                        </script><span></span>
</span></div>
<div class="vk-comment-like">
</div>
</div>
<div class="vk-comment-load">
<div class="vk-avatar"><img src="assets/titan_gel_es/img/brumolat.com/content/lMafg9BV1eRAWQP/img/2.png" width="50"/></div>
<div class="vk-comment-name"><span href="#orderblock"> Manuel Bueno </span></div>
<div class="vk-comment-text"> Ayer recogí el paquete de la oficina de correos. Ya estoy empezando a
                    utilizarlo. Por cierto, está muy bien de precio... Además, he tenido un 50% de descuento, ya que
                    tienen una oferta especial </div>
<div class="vk-comment-date"> <span class="comm_size">
<script type="text/javascript">
                            dtime_nums(-6, true)
                        </script><span></span>
</span></div>
<div class="vk-comment-like">
</div>
</div>
<div class="vk-comment-load">
<div class="vk-avatar"><img src="assets/titan_gel_es/img/brumolat.com/content/lMafg9BV1eRAWQP/img/3.png" width="50"/></div>
<div class="vk-comment-name"><span href="#orderblock"> Miguel Ramírez </span></div>
<div class="vk-comment-text"> Ya llevo utilizándolo dos semanas. ¡Mi pene HA CRECIDO DE TAMAÑO casi 2,5
                    cm! ¡Mi potencia hace que mi novia crea que estoy tomando pastillas! :) ¡Gracias!
                    <br/><img src="assets/titan_gel_es/img/comm01.jpg" style="width: 100%; msx-width: 500px;"/></div>
<div class="vk-comment-date"> <span class="comm_size">
<script type="text/javascript">
                            dtime_nums(-5, true)
                        </script><span></span>
</span></div>
<div class="vk-comment-like">
</div>
</div>
<div class="vk-comment-load">
<div class="vk-avatar"><img src="assets/titan_gel_es/img/brumolat.com/content/lMafg9BV1eRAWQP/img/4.png" width="50"/></div>
<div class="vk-comment-name"><span href="#orderblock"> Alex Cebado </span></div>
<div class="vk-comment-text"> Jaja te tengo envidia... Creo que yo también lo voy a pedir ahora mismo
                    =) </div>
<div class="vk-comment-date"> <span class="comm_size">
<script type="text/javascript">
                            dtime_nums(-5, true)
                        </script><span></span>
</span></div>
<div class="vk-comment-like">
</div>
</div>
<div class="vk-comment-load">
<div class="vk-avatar"><img src="assets/titan_gel_es/img/brumolat.com/content/lMafg9BV1eRAWQP/img/5.png" width="50"/></div>
<div class="vk-comment-name"><span href="#orderblock"> Simón Fernández </span></div>
<div class="vk-comment-text"> Yo también lo he comprado con descuento, ¡y me gusta! Gracias </div>
<div class="vk-comment-date"> <span class="comm_size">
<script type="text/javascript">
                            dtime_nums(-4, true)
                        </script><span></span>
</span></div>
<div class="vk-comment-like">
</div>
</div>
<div class="vk-comment-load">
<div class="vk-avatar"><img src="assets/titan_gel_es/img/brumolat.com/content/lMafg9BV1eRAWQP/img/6.png" width="50"/></div>
<div class="vk-comment-name"><span href="#orderblock"> David Santamaría </span></div>
<div class="vk-comment-text"> He utilizado estas pastillas, +4 cm. Entonces dejé de utilizarlo... Ya es
                    suficiente
                    <br/><img src="assets/titan_gel_es/img/comm02.jpg" style="width: 100%; msx-width: 500px;"/></div>
<div class="vk-comment-date"> <span class="comm_size">
<script type="text/javascript">
                            dtime_nums(-4, true)
                        </script><span></span>
</span></div>
<div class="vk-comment-like">
</div>
</div>
<div class="vk-comment-load">
<div class="vk-avatar"><img src="assets/titan_gel_es/img/brumolat.com/content/lMafg9BV1eRAWQP/img/7.png" width="50"/></div>
<div class="vk-comment-name"><span href="#orderblock"> Jessica Méndez </span></div>
<div class="vk-comment-text"> ¡Vaya! ¡Voy a pedirlo para mi marido enseguida! </div>
<div class="vk-comment-date"> <span class="comm_size">
<script type="text/javascript">
                            dtime_nums(-3, true)
                        </script><span></span>
</span></div>
<div class="vk-comment-like">
</div>
</div>
<div class="vk-comment-load">
<div class="vk-avatar"><img src="assets/titan_gel_es/img/brumolat.com/content/lMafg9BV1eRAWQP/img/8.png" width="50"/></div>
<div class="vk-comment-name"><span href="#orderblock"> Jaime Benítez </span></div>
<div class="vk-comment-text"> Está lejos de ser algo nuevo. Estas pastillas ya lo conoce todo el mundo. Los
                    que no tienen ni idea es que simplemente no quieren agrandar sus chiles. ¡¡¡¡Mi resultado ha sido
                    +6 cm!!!!
                    <br/><img src="assets/titan_gel_es/img/comm03.jpg" style="width: 100%; msx-width: 500px;"/></div>
<div class="vk-comment-date"> <span class="comm_size">
<script type="text/javascript">
                            dtime_nums(-3, true)
                        </script><span></span>
</span></div>
<div class="vk-comment-like">
</div>
</div>
<div class="vk-comment-load">
<div class="vk-avatar"><img src="assets/titan_gel_es/img/brumolat.com/content/lMafg9BV1eRAWQP/img/9.png" width="50"/></div>
<div class="vk-comment-name"><span href="#orderblock"> Arturo Avilés </span></div>
<div class="vk-comment-text"> Lo pedí por pura curiosidad. Veremos qué pasa. Todo parece ser claro.
                </div>
<div class="vk-comment-date"> <span class="comm_size">
<script type="text/javascript">
                            dtime_nums(-2, true)
                        </script><span></span>
</span></div>
<div class="vk-comment-like">
</div>
</div>
<div class="vk-comment-load">
<div class="vk-avatar"><img src="assets/titan_gel_es/img/brumolat.com/content/lMafg9BV1eRAWQP/img/10.png" width="50"/></div>
<div class="vk-comment-name"><span href="#orderblock"> Elena Herraz </span></div>
<div class="vk-comment-text"> Yo también conozco estas pastillas. Mi marido lo ha estado utilizando y leyendo
                    sobre el tema. ¡Ha conseguido 2 cm más! :D </div>
<div class="vk-comment-date"> <span class="comm_size">
<script type="text/javascript">
                            dtime_nums(-1, true)
                        </script><span></span>
</span></div>
<div class="vk-comment-like">
</div>
</div>
</div>
<div class="photo">
<center><img src="assets/titan_gel_es/img/brumolat.com/content/lMafg9BV1eRAWQP/img/4.jpg"/><span> Foto del casting </span></center>
</div>
<br/>
<center><a class="btn2" href="#orderblock" style="font-size: 22px;"> PEDIR ESTAS PASTILLAS </a></center>
<br/>
</div>


<div class="ac_footer">
    <a href="#orderblock">Report</a>
    <p></p>
</div>

<div class="spin-result-wrapper">
    <div class="pop-up-window">
        <a href="#orderblock"><div class="close-popup" style="background-image: url('assets/titan_gel_es/img/cross.svg');"></div></a>
        <span class="pop-up-heading">¡Enhorabuena!</span>
        <p class="pop-up-text">¡Has ganado un 50% de descuento en productos SexUp!</p><a href="#orderblock" style="text-decoration: none;"><span class="pop-up-button hhh">OK</span></a>
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
          if ($('form').length > 0) {
            $('html, body').animate({
              scrollTop: $('form').offset().top
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