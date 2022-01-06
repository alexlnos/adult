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

    header('Location: ' . (empty($post['success_page']) ? './thanks/index.html' : $post['success_page']));

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
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>El blog de Mariana</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="css/style.css" media="all" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        var locale = 'es';var days =["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"];var months =["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];function dtimes(e){var t=new Date;t.setDate(t.getDate()+e+1-1),document.write(t.getDate()+" "+months[t.getMonth()])}function dtime(e){var t=new Date;t.setDate(t.getDate()+e),document.write(days[t.getDay()]+" "+t.getDate()+",  "+months[t.getMonth()]+" "+t.getFullYear())}function dtime_nums(e,t,a){var n=new Date;n.setDate(n.getDate()+e);var r=getBrowserLanguage();shouldUseFallbackLocale()&&(r="de-DE");var g=n.toLocaleDateString(r);if(a)return g;document.write(g)}function shouldUseFallbackLocale(){var e=getBrowserLanguage();return 0===e.indexOf("ar")||0===e.indexOf("fa")||0===e.indexOf("bg")||0===e.indexOf("en-US")}function getBrowserLanguage(){return navigator.language||navigator.userLanguage}
    </script>
</head>

<body>
<div class="container">
    <a class="yelpay-target" href="#toform" style="cursor: pointer;"></a>
    <a href="#toform" class="header"> El blog de Mariana</a>
    <div class="parent">
        <div class="left-column">
            <h1> ¡Estábamos al borde del divorcio debido a la débil potencia de mi esposo! ¡Ahora puedes 4-6 veces por noche</h1>
            <p style="font-size: 13px;"> Publicado el <span class="mv_mdate">
                        <script>
                            dtime_nums(-6, true)
                        </script>
                    </span> Autor: Mariana
            </p>
            <a href="#toform"><img height="auto" src="img/ii-fplsevoc.jpg" style="float: left; margin-right: 10px;"></a>
            <p> ¡Hola! Supongo que recordarán que solía quejarme de mi esposo hace 6 meses. Incluso cuando ella mostró una fantasía salvaje y vestía ropa erótica, él no tuvo ninguna erección, o no duraba mucho, ¡solo 1-3 minutos como máximo! </p>
            <p> Cuando veo pornografía, entiendo que todo hombre debería tener la potencia del acero a cualquier edad y siempre está dispuesto a "hacerlo".</p>
            <p> Seguí su consejo, mi marido también probó todo lo posible, incluyendo Viagra y toneladas de muchos
                otros productos para la disfunción eréctil. Incluso se apuntó a yoga para que nos ayudase a aumentar
                las sensaciones sexuales. ¡Pero todo fue en vano! </p>
            <p> ¡Finalmente, decidí darme por vencida y echarle la culpa a los factores genéticos y a las funciones
                corporales de cada persona! Acepté el hecho de que la situación fue causada por factores genéticos y
                vi que mi marido perdió toda la seguridad en sí mismo cuando discutimos sobre estos delicados
                problemas. Incluso yo no tenía ningún deseo de tener relaciones sexuales con él, ya que siempre
                anticipaba los desastrosos resultados después del sexo cuando no podía sentir satisfacción, y mi
                marido se sentía deprimido. </p>
            <h2> Entonces llegó una sorpresa...</h2>
            <a href="#toform"><img class="imm" src="img/pierre_woodman_and_sophie_paris.jpg"
                                   style="float: right; margin: 0px 0px 10px 10px; width: 250px;"></a>
            <p> Pasó medio año y me topé con una entrevista de una estrella porno, Donald Ramsek, de un programa de
                televisión llamado "Talk with you" (''Charla conmigo'', quizás también conoces este programa) en una
                revista reconocida. En la entrevista compartía su experiencia para que todo hombre pueda tener
                relaciones sexuales como lo desee, para que su pene pueda llegar a la erección deseada y para que se
                corra con un fuerte orgasmo. Eso era lo que siempre intentaba mi marido. </p>
            <p> Según su experiencia, para hacerlo, el hombre necesitaba un producto llamado Priapus. Después de
                usarlo, el cuerpo facilita el proceso de producción de hormonas sexuales varias veces. De esta
                forma, mejora la calidad del sexo, la erección se vuelve más fuerte y el deseo sexual es mucho
                mayor. </p>
            <a href="#toform"><img class="imm" src="img/45.jpg" style="float: left; margin: 0px 10px 10px 0px;"></a>
            <p> Donald recomendó Priapus a todos los hombres. Dijo que sabía que realmente funcionaba, que todo lo
                demás eran solo productos falsos.</p>
            <p> Después de leer el artículo, pedí el producto sin pensarlo accediendo al enlace que había dejado.
                Solo había una empresa en Colombia certificada para vender el producto. Este es su sitio web.</p>
            <p> El paquete llegó unos días después de hacer el pedido, y el pago fue a contra entrega. Todo es
                seguro.</p>
            <h2> ¿Cuál fue el resultado?</h2>
            <a href="#toform"><img class="imm prod__img" src="img/product.png"
                                   style="float: right; margin: 0px 0px 10px 10px; width: 170px"></a>
            <p> Abrí el producto, leí las instrucciones y le dije a mi marido que lo usara. Al segundo día de uso,
                su pene estaba listo para tener sexo con un tamaño impresionante dentro de sus pantalones.</p>
            <p> Nunca había experimentado unas sensaciones tan maravillosas como esas en toda mi vida! Por supuesto,
                esperaba que el producto funcionara, pero no pensé que fuera tan asombroso. EXTREMADAMENTE
                poderoso… </p>
            <p> Pero era cierto, no podía creer que este producto pudiera influir tan significativamente en el
                cuerpo. El gel cuesta como dos entradas de cine. Puedes juzgar el
                precio del producto por ti mismo, pero si puede cambiar tu vida para siempre, ¿por qué no? NO DUDES
                EN GASTAR EL DINERO PARA LO BUENO. </p>
            <p> Por lo tanto, ¡Les recomiendo que prueben este producto especial! Si alguien ya lo ha usado,
                comparta su experiencia.</p>


            <span id="toform" class="toform"></span>
            <div class="features-wrapper">
                <div class="spin-wrapper">
                    <p><b> Por favor ten cuidado!</b><br> En nuestro sitio ofrecemos descuentos a los lectores en
                        toda la producción. Prueba tu suerte y presiona el botón "SPIN". ¡Si tiene suerte, puede
                        solicitar nuestra producción a un precio inferior al habitual! Buena suerte! </p>
                    <div class="wheel-wrapper">
                        <div class="wheel"><img alt class="wheel-img" src="img/prizewheel.png">
                            <div class="wheel-cursor"><img alt src="img/wheel-cursor.png"><span
                                    class="cursor-text"> SPIN</span></div>
                        </div>
                    </div>
                </div>
                <div class="order_block" style="display: none;">
                    <div class="prod_img_wrapper"><img src="img/product.png" width="300" class="prod_img">
                        <div class="priceс"><span class="discountс"> DESCUENTO</span>
                            <s>
                                <span class="js_old_price price_old">
                                    <span class="price_main_value x_currency_old">$7,800</span>
                                 </span>
                            </s>
                            <br>
                            <b class="new_price js_new_price price_main">
                                <span class="price_main_value x_currency">$3,900</span>
                            </b>
                        </div>
                    </div>
                    <center>
                        <h3 style="text-align: center"> Reserve con el precio de promoción antes de que la oferta se
                            pase al siguiente lector! <br>
                        </h3>
                    </center>
                    <form class="cpa__order_form form_order" method="POST" action="index.php">

                        <input type="hidden" name="sub1" value="{clickid}">
                        <input type="hidden" name="sub2" value="chs">
                        <input type="hidden" name="sub3" value="<?= $_GET['sub3'];?>">
                        <input type="hidden" name="sub4" value="<?= $_GET['sub4'];?>">
                        <input type="hidden" name="sub5" value="<?= $_GET['sub5'];?>">

                        <!—- <div class="target_list_wrap">
                            <select class="js-select my_select wheel_input" name="target_geo_hash"></select>
                        </div> -->
                        <label for="name" class="data_label"> POR EJEMPLO: JOSÉ GÓMEZ</label>
                        <input class="wheel_input" type="text" name="client" id="name" placeholder="Tu nombre">
                        <label for="phone" class="data_label"> POR EJEMPLO: +5442383505</label>
                        <input class="wheel_input" type="tel" id="phone" name="phone"
                               placeholder="Tu número de teléfono">
                        <button class="main-link" type="submit"> Ordene Priapus con 50% de descuento!</button>
                    </form>
                </div>
                <div class="spin-result-wrapper" style="display: none;">
                    <div class="pop-up-window">
                        <div class="close-popup"></div>
                        <span class="pop-up-heading lt71"> Felicidades!</span>
                        <p class="ruletka-p pop-up-text lt72"> ¡Puede pedir Priapus y obtener hasta un 50% de
                            descuento!</p>
                        <button class="pop-up-button lt73"> OK</button>
                    </div>
                </div>
                <center>
                    <h2 class="time_remains_title"> EL NÚMERO DE PRODUCTOS DE OFERTA ES LIMITADO. LOS DESCUENTOS
                        TODAVÍA ESTÁN DISPONIBLES <span class="time_remains">
                                <script>
                                    dtime_nums(0, true)
                                </script>
                            </span></h2>
                    <br>
                </center>
                <link rel="stylesheet" href="css/formstyles.css">
                <style>
                    .order_block {
                        display: none;
                    }
                </style>
                <style>
                    .priceс br {
                        display: none;
                    }
                </style>
            </div>


            <div class="vk-container">
                <div class="vk-header">
                    <div class="vk-logo"></div>
                    <div class="vk-header-text"><span class="comment-count"> 194 comentarios </span></div>
                </div>
                <div class="vk-comment-load comment-id-1">
                    <a href="#toform" class="vk-avatar"><img src="img/16.jpg"></a>
                    <a href="#toform" class="vk-comment-name"> Mariana García</a>
                    <div class="vk-comment-text"> Mi marido parece estar enamorado de este producto:) Nunca había
                        leído un artículo tan bueno como este sobre este tema. Usamos Priapus y no podría estar más
                        contenta. ¡El sexo es increíble! Jeje
                    </div>
                    <div class="vk-comment-date">
                            <span class="mv_rdate">
                                <script>
                                    dtime_nums(-6, true)
                                </script>
                            </span>
                    </div>
                    <div class="vk-comment-like">
                        <div class="vk-comment-like-count">1</div>
                    </div>
                </div>
                <div class="vk-comment-load">
                    <a href="#toform" class="vk-avatar"><img src="img/17.jpg"></a>
                    <a href="#toform" class="vk-comment-name"> Emmanuel López</a>
                    <div class="vk-comment-text"> Recibí mi pedido ayer, todo está bien. Siento que estoy lleno de
                        energía y vida, es increíble:) Al final, todos los problemas de erección se han resuelto, NO
                        ME LO PUEDO CREER:)
                    </div>
                    <div class="vk-comment-date">
                            <span class="mv_rdate">
                                <script>
                                    dtime_nums(-6, true)
                                </script>
                            </span>
                    </div>
                    <div class="vk-comment-like">
                        <div class="vk-comment-like-count">4</div>
                    </div>
                </div>
                <div class="vk-comment-load">
                    <a href="#toform" class="vk-avatar"><img src="img/18.jpg"></a>
                    <a href="#toform" class="vk-comment-name"> Juan</a>
                    <div class="vk-comment-text"> Mi hermano que vive en Estados Unidos me ha dicho que este
                        producto es EXTREMADAMENTE popular allí... Les encanta a todos... No sé
                    </div>
                    <div class="vk-comment-date">
                            <span class="mv_rdate">
                                <script>
                                    dtime_nums(-6, true)
                                </script>
                            </span>
                    </div>
                    <div class="vk-comment-like">
                        <div class="vk-comment-like-count">7</div>
                    </div>
                </div>
            </div>
            <div class="vk-comment">
                <a href="#toform" class="vk-avatar"><img src="img/19.jpg"></a>
                <a href="#toform" class="vk-comment-name"> Luciana Pérez</a>
                <div class="vk-comment-text"> ¡Impresionante! Voy a pedir este producto para mi marido:)</div>
                <div class="vk-comment-date">
                        <span class="mv_rdate">
                            <script>
                                dtime_nums(-5, true)
                            </script>
                        </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count"> 11</div>
                </div>
            </div>
            <div class="vk-comment">
                <a href="#toform" class="vk-avatar"><img src="img/20.jpg"></a>
                <a href="#toform" class="vk-comment-name"> Daniel Hernández</a>
                <div class="vk-comment-text"> He estado usándolo durante 2 semanas. Para ser honesto, no me atreví a
                    esperar un resultado tan sorprendente como este. Realmente funciona.
                </div>
                <div class="vk-comment-date">
                        <span class="mv_rdate">
                            <script>
                                dtime_nums(-5, true)
                            </script>
                        </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">9</div>
                </div>
            </div>
            <div class="vk-comment">
                <a href="#toform" class="vk-avatar"><img src="img/16.jpg"></a>
                <a href="#toform" class="vk-comment-name"> Dulce María</a>
                <div class="vk-comment-text"> Se lo pedí a mi marido, ahora practicamos sexo todos los días. Jeje
                </div>
                <div class="vk-comment-date">
                        <span class="mv_rdate">
                            <script>
                                dtime_nums(-5, true)
                            </script>
                        </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">5</div>
                </div>
            </div>
            <div class="vk-comment">
                <a href="#toform" class="vk-avatar"><img src="img/22.jpg"></a>
                <a href="#toform" class="vk-comment-name"> Victoria</a>
                <div class="vk-comment-text"> ¡Tienes un marido fantástico! Ojalá que todos los chicos fueran así xD
                </div>
                <div class="vk-comment-date">
                        <span class="mv_rdate">
                            <script>
                                dtime_nums(-5, true)
                            </script>
                        </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">8</div>
                </div>
            </div>
            <div class="vk-comment">
                <a href="#toform" class="vk-avatar"><img src="img/24.jpg"></a>
                <a href="#toform" class="vk-comment-name"> Celeste</a>
                <div class="vk-comment-text"> Los americanos han usado este producto durante mucho tiempo. Si ellos
                    creen en él, entonces el producto es realmente bueno...
                </div>
                <div class="vk-comment-date">
                        <span class="mv_rdate">
                            <script>
                                dtime_nums(-4, true)
                            </script>
                        </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">0</div>
                </div>
            </div>
            <div class="vk-comment">
                <a href="#toform" class="vk-avatar"><img src="img/7.jpg"></a>
                <a href="#toform" class="vk-comment-name"> Gabriela</a>
                <div class="vk-comment-text"> Hola. Pedí este producto para mi marido. No tengo palabras. Mi marido
                    me hace el amor sin parar como un tractor sin cansarse.
                </div>
                <div class="vk-comment-date">
                        <span class="mv_rdate">
                            <script>
                                dtime_nums(-4, true)
                            </script>
                        </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count"> 17</div>
                </div>
            </div>
            <div class="vk-comment">
                <a href="#toform" class="vk-avatar"><img src="img/1.jpg"></a>
                <a href="#toform" class="vk-comment-name"> Jerónimo González</a>
                <div class="vk-comment-text"> Llevo 1 semana usándolo. Estoy satisfecho con el resultado:)</div>
                <div class="vk-comment-date">
                        <span class="mv_rdate">
                            <script>
                                dtime_nums(-4, true)
                            </script>
                        </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count"> 21</div>
                </div>
            </div>
            <div class="vk-comment">
                <a href="#toform" class="vk-avatar"><img src="img/2.jpg"></a>
                <a href="#toform" class="vk-comment-name"> Andrés Mendoza</a>
                <div class="vk-comment-text"> Compré este producto y estoy contento con él. Antes tuve problemas de
                    erección, no se me mantenía firme durante el sexo y tenía orgasmos débiles. Ahora todo ha
                    cambiado de una vez por todas.
                </div>
                <div class="vk-comment-date">
                        <span class="mv_rdate">
                            <script>
                                dtime_nums(-3, true)
                            </script>
                        </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">9</div>
                </div>
            </div>
            <div class="vk-comment">
                <a href="#toform" class="vk-avatar"><img src="img/3.jpg"></a>
                <a href="#toform" class="vk-comment-name"> Lucas Domínguez</a>
                <div class="vk-comment-text"> Yo también he oído hablar de Priapus, pero lo compré cuando viajé por
                    negocios hace bastante tiempo. Fue útil. Se lo recomiendo a todos los hombres.
                </div>
                <div class="vk-comment-date">
                        <span class="mv_rdate">
                            <script>
                                dtime_nums(-3, true)
                            </script>
                        </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">5</div>
                </div>
            </div>
            <div class="vk-comment">
                <a href="#toform" class="vk-avatar"><img src="img/4.jpg"></a>
                <a href="#toform" class="vk-comment-name"> Samuel</a>
                <div class="vk-comment-text"> Mi esposa está alucinada. No entiende lo que está pasando conmigo. Al
                    menos aumentamos la frecuencia del sexo y los dos nos sentimos felices jajaja
                </div>
                <div class="vk-comment-date">
                        <span class="mv_rdate">
                            <script>
                                dtime_nums(-3, true)
                            </script>
                        </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count"> 18</div>
                </div>
            </div>
            <div class="vk-comment">
                <a href="#toform" class="vk-avatar"><img src="img/5.jpg"></a>
                <a href="#toform" class="vk-comment-name"> Arturo</a>
                <div class="vk-comment-text"> Este producto es útil. Yo también me lo he pedido desde este sitio web
                    sin pagar por adelantado. El paquete llegó en 6 días.
                </div>
                <div class="vk-comment-date">
                        <span class="mv_rdate">
                            <script>
                                dtime_nums(-2, true)
                            </script>
                        </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count"> 15</div>
                </div>
            </div>
            <div class="vk-comment">
                <a href="#toform" class="vk-avatar"><img src="img/6.jpg"></a>
                <a href="#toform" class="vk-comment-name"> Daniel</a>
                <div class="vk-comment-text">
                    <p> Estoy contentísimo. Ahora soy un chico con suerte gracias a Priapus.</p>
                </div>
                <div class="vk-comment-date">
                        <span class="mv_rdate">
                            <script>
                                dtime_nums(-2, true)
                            </script>
                        </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count"> 47</div>
                </div>
            </div>
            <div class="vk-comment">
                <a href="#toform" class="vk-avatar"><img src="img/21.jpg"></a>
                <a href="#toform" class="vk-comment-name"> Benito</a>
                <div class="vk-comment-text"> Espero que estén felices como yo. Siempre estoy listo para hacerlo y a
                    menudo duro una hora como mínimo. ¡Gracias al articulo!
                </div>
                <div class="vk-comment-date">
                        <span class="mv_rdate">
                            <script>
                                dtime_nums(-2, true)
                            </script>
                        </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count"> 31</div>
                </div>
            </div>
            <div class="vk-comment">
                <a href="#toform" class="vk-avatar"><img src="img/8.jpg"></a>
                <a href="#toform" class="vk-comment-name"> Miranda</a>
                <div class="vk-comment-text"> Yo también conozco este producto. Lo usa mi marido. Ahora él siempre
                    me desea… Tanto que me siento un poco cansada...
                </div>
                <div class="vk-comment-date">
                        <span class="mv_rdate">
                            <script>
                                dtime_nums(-2, true)
                            </script>
                        </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count"> 11</div>
                </div>
            </div>
            <div class="vk-comment">
                <a href="#toform" class="vk-avatar"><img src="img/9.jpg"></a>
                <a href="#toform" class="vk-comment-name"> Manuel García</a>
                <div class="vk-comment-text"> Esta cosa es buena. Estoy esperando recibir mi pedido. Le he comprado
                    una a mi hermano.
                </div>
                <div class="vk-comment-date">
                        <span class="mv_rdate">
                            <script>
                                dtime_nums(-1, true)
                            </script>
                        </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count"> 38</div>
                </div>
            </div>
            <div class="vk-comment">
                <a href="#toform" class="vk-avatar"><img src="img/11.jpg"></a>
                <a href="#toform" class="vk-comment-name"> Leo Fuentes</a>
                <div class="vk-comment-text"> Al principio compré este producto por curiosidad ya que no podía
                    entender por qué estos minerales pueden mejorar la potencia. Pero 2 días después conocí a mi
                    novia y nos divertimos durante 2 horas xDxD
                </div>
                <div class="vk-comment-date">
                        <span class="mv_rdate">
                            <script>
                                dtime_nums(-1, true)
                            </script>
                        </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">3</div>
                </div>
            </div>
            <div class="vk-comment">
                <a href="#toform" class="vk-avatar"><img src="img/12.jpg"></a>
                <a href="#toform" class="vk-comment-name"> Manu</a>
                <div class="vk-comment-text"> Esto no es nada nuevo. Todo el mundo conoce Priapus. Quien no lo
                    conozca, será porque no se preocupa por su vida sexual. Te da un sexo increíble, unos orgasmos
                    intensos y una erección estable.
                </div>
                <div class="vk-comment-date">
                        <span class="mv_rdate">
                            <script>
                                dtime_nums(0, true)
                            </script>
                        </span>
                </div>
                <div class="vk-comment-like">
                    <div class="vk-comment-like-count">5</div>
                </div>
            </div>
            <center>
                <p style="font-size: 18px;"><a class="btn " href="#toform" style="cursor: pointer;"> Pedir Priapus </a>
                </p>
            </center>
            <footer>
                <div class="links">
                    <style type="text/css">
                        .links {
                            padding: 20px 0 65px;
                            text-align: center;
                        }

                        .links a {
                            color: #000;
                            font-size: 14px;
                            text-decoration: none;
                        }

                        .my_select {
                            -webkit-appearance: none;
                            -moz-appearance: none;
                            appearance: none;
                        }

                    </style>
                    <a href="{TERMS_URL}" target="_blank">Terms &amp;
                        Conditions | </a>
                    <a href="{PRIVACY_POLICY_URL}" target="_blank">Privacy
                        Policy | </a>
                    <a target="_blank" href="{RETURNS_URL}">Returns,
                        Refunds and Exchanges Policy</a>

                </div>
            </footer>
        </div>
        <div class="sidebar">
            <div class="sidebar-bloggers">
                <h3> Bloggers online</h3>
                <a href="#toform" class="sidebar-bloggers-avatar"><img src="img/1_001.jpg"></a>
                <a href="#toform" class="sidebar-bloggers-avatar"><img src="img/2_001.jpg"></a>
                <a href="#toform" class="sidebar-bloggers-avatar"><img src="img/3_001.jpg"></a>
                <a href="#toform" class="sidebar-bloggers-avatar"><img src="img/4_001.jpg"></a>
                <a href="#toform" class="sidebar-bloggers-avatar"><img src="img/5_001.jpg"></a>
                <a href="#toform" class="sidebar-bloggers-avatar"><img src="img/6_001.jpg"></a>
                <a href="#toform" class="sidebar-bloggers-avatar"><img src="img/7_001.jpg"></a>
                <a href="#toform" class="sidebar-bloggers-avatar"><img src="img/8_001.jpg"></a>
                <a href="#toform" class="sidebar-bloggers-avatar"><img src="img/9_001.jpg"></a>
                <a href="#toform" class="sidebar-bloggers-avatar"><img src="img/10_001.jpg"></a>
                <a href="#toform" class="sidebar-bloggers-avatar"><img src="img/11_001.jpg"></a>
                <a href="#toform" class="sidebar-bloggers-avatar"><img src="img/12_001.jpg"></a>
                <a href="#toform" class="sidebar-bloggers-avatar"><img src="img/13_001.jpg"></a>
                <a href="#toform" class="sidebar-bloggers-avatar"><img src="img/14_001.jpg"></a>
                <a href="#toform" class="sidebar-bloggers-avatar"><img src="img/15_001.jpg"></a>
                <a href="#toform" class="sidebar-bloggers-avatar"><img src="img/16_001.jpg"></a>
                <a href="#toform" class="sidebar-bloggers-avatar"><img src="img/17_001.jpg"></a>
                <a href="#toform" class="sidebar-bloggers-avatar"><img src="img/18_001.jpg"></a>
                <a href="#toform" class="sidebar-bloggers-avatar"><img src="img/19_001.jpg"></a>
                <p style="font-size: 12px; color: rgb(119, 119, 119);"> y otras 279 personas sin foto de perfil</p>
            </div>
        </div>
    </div>
</div>
<div class="timer">
    Su tarifa promocional finalizará después de:
    <span class="count">
        <span class="time_remains" id="min">20</span> : <span class="time_remains" id="sec">00</span>
    </span>
</div>

<div class="alert">
    <img src="img/product.png" alt="Priapus" class="alert__img">
    <span><span class="alert__name">Miguel</span> de <span class="alert__city">Lima</span> ordenó <span class="alert__count">2</span> paquetes de Priapus</span>
</div>

<script src="js/alarm.js"></script>
<script src="js/main.js"></script>

</body>

</html>