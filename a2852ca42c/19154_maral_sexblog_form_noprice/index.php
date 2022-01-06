<!DOCTYPE html><html><head>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="assets/js/dr-dtime.min.js"></script>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta charset="utf-8">
    <title>Blog de Sergio López</title>
    <meta content="width=device-width" name="viewport">
    <link media="all" href="assets/css/index.css" type="text/css" rel="stylesheet">
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <style>
    .label-select {
    text-align: center;
    font-style: normal;
    display: block;
    }
    .feedback-form select {
    margin-bottom: 25px;
    height: 35px;
    font-size: 16px;
    width: 100%;
    max-width: 100%;
    }
    .feedback-form {
    display: block;
    width: 70%;
    box-sizing: border-box;
    padding: 15px 20px;
    margin: 10px auto;
    /*  background-color: #dedede; */
    border-radius: 4px;
    min-height: 160px;
    box-shadow: 2px 2px 7px 1px black;
    }
    
    .feedback-label {
    text-align: center;
    font-style: normal;
    display: block;
    }
    .feedback-fio,
    .feedback-phone {
    width: 100%;
    box-sizing: border-box;
    display: block;
    outline: none;
    line-height: 30px;
    color: black;
    padding: 5px 10px;
    font-size: 16px;
    border: 2px solid #eee;
    margin: 5px auto;
    border-radius: 2px;
    margin-bottom: 25px;
    }
    .feedback-fio:hover,
    .feedback-phone:hover {
    outline: 2px solid #8e8e8e;
    }
    .feedback-fio:focus,
    .feedback-phone:focus {
    outline: 2px solid #e38e54;
    }
    .feedback-btn {
    width: 100%;
    box-sizing: border-box;
    display: block;
    outline: none;
    line-height: 30px;
    color: black;
    padding: 5px 10px;
    font-size: 15px;
    border: none;
    margin: 5px auto;
    border-radius: 2px;
    /* background-color: rgb(255, 102, 0); */
    background-color: #005f88;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    }
    .feedback-btn:hover {
    background-color: #fff;
    color: #005f88;
    transition: background-color 0.8s, color 0.8s;
    cursor: pointer;
    }
    @media  screen and  (max-width: 920px) {
    .feedback-form {
    width:100%;
    }
    }
    @media  screen and  (max-width: 720px) {
    .feedback-form {
    width:100%;
    }
    .feedback-btn {
    font-size: 14px;
    }
    }
    @media  screen and  (max-width: 450px) {
    .feedback-btn {
    font-size: 12px;
    }
    }
    </style>

  <!-- INTH_SNIPPET_TOP -->



</head>

<body class="light">
    <!-- ############################## -->
    <div class="container">
        <div class="b-nav">
            <ul class="b-menu">
                <li class="b-menu__li">
                    <a href><i class="dark"><img src="assets/img/nav-line-icon-news.svg" width="18"></i> <i class="light"><img src="assets/img/nav-line-icon-news-white.svg" width="18"></i> Noticias </a>
                </li>
                <li class="b-menu__li">
                    <a href><i class="dark"><img src="assets/img/nav-line-icon-articles.svg" width="15"></i> <i class="light"><img src="assets/img/nav-line-icon-articles-white.svg" width="15"></i> Artículos</a>
                </li>
                <li class="b-menu__li">
                    <a href><i class="dark"><img src="assets/img/nav-line-icon-videos.svg" width="17"></i> <i class="light"><img src="assets/img/nav-line-icon-videos-white.svg" width="17"></i> Vídeo</a>
                </li>
                <li class="b-menu__li">
                    <a href><i class="dark"><img src="assets/img/nav-line-icon-offtop.svg" width="18"></i> <i class="light"><img src="assets/img/nav-line-icon-offtop-white.svg" width="18"></i> Off-topic </a>
                </li>
                <li class="b-menu__li">
                    <a href><i class="dark"><img src="assets/img/nav-line-icon-tweets.svg" width="16"></i> <i class="light"><img src="assets/img/nav-line-icon-tweets-white.svg" width="16"></i> Tuits</a>
                </li>
                <li class="b-menu__write">
                    <a class="b-write-btn fancybox-login-popup" href><i class="icon-plus-1"></i> Escribir</a>
                </li>
            </ul>
        </div>
        <div class="b-content" id="b-content">
            <div class="b-content-container">
                <div class="b-content-wrapper">
                    <div class="b-content__b1">
                        <div class="b-w-article-club">
                            <div class="b-feed-tabs-w">
                                <div class="b-feed-tabs">
                                    <ul class="b-tabs b-tabs-p b-tabs-s">
                                        <li class="active visible">
                                            <a href><b> Temas del Momento</b></a>
                                        </li>
                                        <li class="visible">
                                            <a href><b> Lo último</b></a>
                                        </li>
                                        <li class="visible">
                                            <a href><b> de la semana </b></a>
                                        </li>
                                        <li class="visible">
                                            <a href><b> Redacción</b></a>
                                        </li>
                                        <li class="b-tabs-s__search">
                                            <div class="b-search">
                                                <i class="icon-search"></i>
                                                <form class="main-order-form" action>
                                                    <input type="hidden" name="sub1" value="{clickid}">
                                                    <input id="mainSearch" placeholder="Buscar" type="search">
                                                  
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="b-block b-block-article-club">
                                <div class="b-article b-article-club">
                                    <div class="b-article__infoline">
                                        <a href><span class="b-article__infoline__date"> <script>dtime_nums(-5, true);</script>, 22:17</span></a>
                                        <a href><span class="b-article__infoline__author"><img src="assets/img/1.jpg"> Blog de Sergio López</span></a>
                                        <div class="b-article__infoline__actions">
                                            <span class="b-article__infoline__views"><i class="icon-eye-1"></i><b id="hitsCount"> 75 210</b></span> <a href><span class="b-article__infoline__comments"><i class="icon-chat-1"></i><b> 55</b></span></a>
                                        </div>
                                    </div>
                                    <div class="b-article__title">
                                        <i class="icon-star" data-objectid="25326" data-objecttype="5"></i>
                                        <h1 class="aff_sub"> He estado a punto de ser impotente, ¡pero <span> ahora soy capaz de tener sexo 3 horas </span> sin descanso! </h1>
                                        <article>
                                            <div class="likely likely_some likely_secondary b-article__likely likely_visible likely_ready" data-type="club">
                                                <span class=" likely__widget likely__widget_odnoklassniki" data-ok="large" data-type="Odnoklassniki" data-type-short="ok"><span class="likely__icon likely__icon_odnoklassniki"><svg height="16" viewBox="0 0 16 16" width="16">
                                                            <path d="M8 2.6c.9 0 1.7.7 1.7 1.7C9.7 5.2 9 6 8 6c-.9 0-1.7-.7-1.7-1.7S7.1 2.6 8 2.6zm0 5.7c2.2 0 4-1.8 4-4s-1.8-4-4-4-4 1.8-4 4 1.8 4 4 4zm1.6 3.2c.8-.2 1.6-.5 2.3-1 .5-.3.7-1.1.4-1.6-.3-.6-1.1-.7-1.6-.4-1.6 1-3.8 1-5.4 0-.6-.3-1.3-.1-1.6.4-.4.6-.2 1.3.3 1.7.7.5 1.5.8 2.3 1l-2.2 2.2c-.5.5-.5 1.2 0 1.7.2.2.5.3.8.3.3 0 .6-.1.8-.3L8 13.2l2.2 2.2c.5.5 1.2.5 1.7 0s.5-1.2 0-1.7l-2.3-2.2z"/>
                                                        </svg></span><span class="likely__button likely__button_odnoklassniki"> Compartir</span></span>
                                                <div class=" likely__widget likely__widget_twitter" data-type="Twitter" data-type-short="tw">
                                                    <span class="likely__icon likely__icon_twitter"><svg height="16" viewBox="0 0 16 16" width="16">
                                                            <path d="M15.96 3.42c-.04.153-.144.31-.237.414l-.118.058v.118l-.59.532-.237.295c-.05.036-.398.21-.413.237V6.49h-.06v.473h-.058v.294h-.058v.296h-.06v.235h-.06v.237h-.058c-.1.355-.197.71-.295 1.064h-.06v.116h-.06c-.02.1-.04.197-.058.296h-.06c-.04.118-.08.237-.118.355h-.06c-.038.118-.078.236-.117.353l-.118.06-.06.235-.117.06v.116l-.118.06v.12h-.06c-.02.057-.038.117-.058.175l-.118.06v.117c-.06.04-.118.08-.177.118v.118l-.237.177v.118l-.59.53-.532.592h-.117c-.06.078-.118.156-.177.236l-.177.06-.06.117h-.118l-.06.118-.176.06v.058h-.118l-.06.118-.353.12-.06.117c-.078.02-.156.04-.235.058v.06c-.118.038-.236.078-.354.118v.058H8.76v.06h-.12v.06h-.176v.058h-.118v.06H8.17v.058H7.99v.06l-.413.058v.06h-.237c-.667.22-1.455.293-2.36.293h-.886v-.058h-.53v-.06H3.27v-.06h-.295v-.06H2.68v-.057h-.177v-.06h-.236v-.058H2.09v-.06h-.177v-.058h-.177v-.06H1.56v-.058h-.12v-.06l-.294-.06v-.057c-.118-.04-.236-.08-.355-.118v-.06H.674v-.058H.555v-.06H.437v-.058H.32l-.06-.12H.142v-.058c-.13-.08-.083.026-.177-.118H1.56v-.06c.294-.04.59-.077.884-.117v-.06h.177v-.058h.237v-.06h.118v-.06h.177v-.057h.118v-.06h.177v-.058l.236-.06v-.058l.236-.06c.02-.038.04-.078.058-.117l.237-.06c.02-.04.04-.077.058-.117h.118l.06-.118h.118c.036-.025.047-.078.118-.118V12.1c-1.02-.08-1.84-.54-2.303-1.183-.08-.058-.157-.118-.236-.176v-.117l-.118-.06v-.117c-.115-.202-.268-.355-.296-.65.453.004.987.008 1.354-.06v-.06c-.254-.008-.47-.08-.65-.175v-.058H2.32v-.06c-.08-.02-.157-.04-.236-.058l-.06-.118h-.117l-.118-.178h-.12c-.077-.098-.156-.196-.235-.294l-.118-.06v-.117l-.177-.12c-.35-.502-.6-1.15-.59-2.006h.06c.204.234.948.377 1.357.415v-.06c-.257-.118-.676-.54-.827-.768V5.9l-.118-.06c-.04-.117-.08-.236-.118-.354h-.06v-.118H.787c-.04-.196-.08-.394-.118-.59-.06-.19-.206-.697-.118-1.005h.06V3.36h.058v-.177h.06v-.177h.057V2.83h.06c.04-.118.078-.236.117-.355h.118v.06c.12.097.237.196.355.295v.118l.118.058c.08.098.157.197.236.295l.176.06.354.413h.118l.177.236h.118l.06.117h.117c.04.06.08.118.118.177h.118l.06.118.235.06.06.117.356.12.06.117.53.176v.06h.118v.058l.236.06v.06c.118.02.236.04.355.058v.06h.177v.058h.177v.06h.176v.058h.236v.06l.472.057v.06l1.417.18v-.237c-.1-.112-.058-.442-.057-.65 0-.573.15-.99.354-1.358v-.117l.118-.06.06-.235.176-.118v-.118c.14-.118.276-.236.414-.355l.06-.117h.117l.12-.177.235-.06.06-.117h.117v-.058H9.7v-.058h.177v-.06h.177v-.058h.177v-.06h.296v-.058h1.063v.058h.294v.06h.177v.058h.178v.06h.177v.058h.118v.06h.118l.06.117c.08.018.158.038.236.058.04.06.08.118.118.177h.118l.06.117c.142.133.193.163.472.178.136-.12.283-.05.472-.118v-.06h.177v-.058h.177v-.06l.236-.058v-.06h.177l.59-.352v.176h-.058l-.06.295h-.058v.117h-.06v.118l-.117.06v.118l-.177.118v.117l-.118.06-.354.412h-.117l-.177.236h.06c.13-.112.402-.053.59-.117l1.063-.353z"/>
                                                        </svg></span><span class="likely__button likely__button_twitter"> Tuitear</span><span class="likely__counter likely__counter_twitter"> 95</span>
                                                </div>
                                                <div class=" likely__widget likely__widget_facebook" data-type="Facebook" data-type-short="fb">
                                                    <span class="likely__icon likely__icon_facebook"><svg height="16" viewBox="0 0 16 16" width="16">
                                                            <path d="M5.9 16h3.3V8h2.2l.3-2.8H9.2V3.8c0-.7.1-1.1 1.1-1.1h1.4V0H9.5C6.9 0 5.9 1.3 5.9 3.6v1.7H4.3V8H6v8z"/>
                                                        </svg></span><span class="likely__button likely__button_facebook"> Compartir</span><span class="likely__counter likely__counter_facebook"> 204</span>
                                                </div>

                                                <div class=" likely__widget likely__widget_pocket" data-type="Pocket" data-type-short="po">
                                                    <span class="likely__icon likely__icon_pocket"><svg height="16" viewBox="0 0 16 16" width="16">
                                                            <path d="M12.533 6.864L8.77 10.4c-.213.2-.486.3-.76.3-.273 0-.547-.1-.76-.3L3.488 6.865c-.437-.41-.45-1.09-.032-1.52.42-.428 1.114-.443 1.55-.032l3.006 2.823 3.004-2.823c.438-.41 1.132-.396 1.55.032.42.43.406 1.11-.03 1.52zm3.388-4.928c-.207-.56-.755-.936-1.363-.936H1.45C.854 1 .31 1.368.096 1.917.032 2.08 0 2.25 0 2.422v4.73l.055.94c.232 2.14 1.366 4.01 3.12 5.314.03.024.063.047.094.07l.02.013c.94.673 1.992 1.13 3.128 1.353.524.104 1.06.157 1.592.157.492 0 .986-.045 1.472-.133.058-.01.116-.022.175-.034.016-.003.033-.01.05-.018 1.088-.233 2.098-.677 3.003-1.326l.02-.015c.032-.022.064-.045.096-.07 1.753-1.303 2.887-3.173 3.12-5.312l.054-.94v-4.73c0-.165-.02-.327-.08-.487z"/>
                                                        </svg></span><span class="likely__button likely__button_pocket"></span><span class="likely__counter likely__counter_pocket"> 27</span>
                                                </div>
                                                <div class=" likely__widget likely__widget_telegram" data-type="Telegram" data-type-short="tg">
                                                    <span class="likely__icon likely__icon_telegram"><svg height="16" viewBox="0 0 16 16" width="16">
                                                            <path d="M12.4 4.2L6.6 9.6c-.2.2-.3.4-.4.7L6 11.8c0 .2-.3.2-.3 0l-.8-2.6c-.1-.4.1-.7.3-.8l7-4.3c.2-.2.4 0 .2.1zm2.9-3L.5 6.9c-.4.1-.4.7 0 .8L4.1 9l1.4 4.5c.1.3.4.4.7.2l2-1.6c.2-.2.5-.2.7 0l3.6 2.6c.3.2.6 0 .7-.3l2.6-12.8c.1-.2-.2-.5-.5-.4z"/>
                                                        </svg></span><span class="likely__button likely__button_telegram"></span>
                                                </div>
                                                <div class=" likely__widget likely__widget_whatsapp" data-type="WhatsApp" data-type-short="wa">
                                                    <span class="likely__icon likely__icon_whatsapp"><svg height="16" viewBox="0 0 16 16" width="16">
                                                            <path d="M15.8 7.8c0 4.2-3.4 7.6-7.6 7.6-1.3 0-2.6-.3-3.7-.9L.3 15.8l1.4-4.1C1 10.6.6 9.2.6 7.8.6 3.6 4 .2 8.2.2c4.2 0 7.6 3.4 7.6 7.6M8.1 1.4c-3.5 0-6.4 2.9-6.4 6.4 0 1.4.5 2.7 1.2 3.7l-.8 2.4 2.5-.8c1 .7 2.2 1.1 3.5 1.1 3.5 0 6.4-2.9 6.4-6.4.1-3.5-2.8-6.4-6.4-6.4M12 9.5c0-.1-.2-.1-.4-.2s-1.1-.5-1.3-.6c-.2-.1-.3-.1-.4.1-.1.2-.4.6-.6.7-.1.1-.2.1-.4 0-.1 0-.8-.2-1.5-.8-.6-.5-.9-1.1-1-1.3-.1-.2 0-.3.1-.4l.3-.3c.1-.1.1-.2.2-.3 0-.2 0-.3-.1-.4 0-.1-.4-1-.6-1.4-.1-.3-.3-.2-.4-.2h-.4c-.1 0-.3 0-.5.2-.1.2-.6.6-.6 1.5s.7 1.8.8 1.9c.1.1 1.3 2.1 3.2 2.8 1.9.7 1.9.5 2.2.5.3 0 1.1-.4 1.3-.9.1-.4.1-.8.1-.9z"/>
                                                        </svg></span><span class="likely__button likely__button_whatsapp"></span>
                                                </div>
                                                <div class=" likely__widget likely__widget_viber" data-type="Viber" data-type-short="vi">
                                                    <span class="likely__icon likely__icon_viber"><svg height="16" viewBox="0 0 16 16" width="16">
                                                            <path d="M13.7 6.7c0 .3.1.7-.3.8-.6.1-.5-.4-.5-.8-.4-2.3-1.2-3.2-3.5-3.7-.4-.1-.9 0-.8-.5.1-.5.5-.4.9-.3 2.3.3 4.2 2.3 4.2 4.5zM8.8 1.2c3.7.6 5.5 2.4 5.9 6.1 0 .3-.1.9.4.9s.4-.5.4-.9c0-3.6-3.1-6.8-6.7-7-.2.1-.8-.1-.8.5 0 .4.4.3.8.4zm5.7 10.2c-.5-.4-1-.7-1.5-1.1-1-.7-1.9-.7-2.6.4-.4.6-1 .6-1.6.4-1.7-.8-2.9-1.9-3.7-3.6-.3-.7-.3-1.4.5-1.9.4-.3.8-.6.8-1.2 0-.8-2-3.5-2.7-3.7-.3-.1-.6-.1-1 0C.9 1.2.2 2.7.9 4.4c2.1 5.2 5.8 8.8 11 11 .3.1.6.2.8.2 1.2 0 2.5-1.1 2.9-2.2.3-1-.5-1.5-1.1-2zM9.7 4c-.2 0-.5 0-.6.3-.1.4.2.5.5.5.9.2 1.4.7 1.5 1.7 0 .3.2.5.4.4.3 0 .4-.3.4-.6 0-1.1-1.2-2.3-2.2-2.3z"/>
                                                        </svg></span><span class="likely__button likely__button_viber"></span>
                                                </div>
                                                <div class=" likely__widget likely__widget_more">
                                                    <span class="likely__icon likely__icon_more"><svg height="16" viewBox="0 0 16 16" width="16">
                                                            <path d="M12.7 11.3c-.6 0-1.1.2-1.6.6L5.6 8.6c0-.2.1-.4.1-.6 0-.2 0-.4-.1-.6l5.6-3.3c.4.4 1 .6 1.6.6 1.3 0 2.4-1.1 2.4-2.4S14 .1 12.7.1s-2.4 1.1-2.4 2.4c0 .2 0 .4.1.6L4.9 6.3c-.4-.4-1-.6-1.6-.6C2 5.7.9 6.7.9 8s1.1 2.4 2.4 2.4c.6 0 1.2-.2 1.6-.6l5.6 3.3c0 .2-.1.3-.1.5 0 1.3 1 2.3 2.3 2.3s2.3-1 2.3-2.3-1-2.3-2.3-2.3z"/>
                                                        </svg></span><span class="likely__button likely__button_more"></span>
                                                </div>
                                            </div>
                                            <div class="wrapper-wide">
                                                <div class="img-wrap">
                                                    <img src="assets/img/gif.gif" alt>
                                                </div>
                                            </div>
                                            <p><span> ¡Chicos! </span> ¡Hola a todos!</p>
                                            <p> Estoy seguro de que por lo menos uno de cada tres hombres ha tenido el mismo problema que yo… Es difícil de hablar, es complicado conseguir una consulta médica y es difícil de vivir con ello. Por eso muchos no van ni al médico ni a cualquier otro especialista, y prefieren mantener silencio. </p>
                                            <p style="font-size: 24px; font-weight: bold;"> ¡Mi pene casi no se paraba! </p>
                                            <p> Por supuesto no era impotente por completo, pero casi todas las chicas se alejaban de mí después de nuestro primer encuentro… Y todo esto pasaba porque si mi pene se levantaba, en 5 minutos terminaba. Era tan humillante. Algunos ni siquiera saben cómo es vivir sin poder satisfacer bien a una mujer. </p>
                                            <p style="font-size: 24px; font-weight: bold;"> ¡¡¡Pero debe existir algún remedio!!!</p>
                                            <p> No pude asimilar la idea, y en realidad tuve muchos complejos. Pero  hay señores mayores que tienen sexo con sus novias más jóvenes.<b> ¡Y YO QUE TENÍA TAN SOLO 27 AÑOS, YA NO PODÍA CONTROLAR MI PROPIO PENE! </b></p>
                                            <div class="wrapper-image">
                                                <div class="wrapper-label">
                                                    <div class="wrapper-wide">
                                                        <a href><img src="assets/img/old.jpg" width="640"></a>
                                                    </div><span></span>
                                                </div>
                                            </div>
                                            <p> La verdad, estaba muy cansado de toda esta situación. Comprendí que solo no lo superaría de ninguna manera. Por eso empecé la búsqueda de remedios para mejorar la potencia que estaban en el oído de todos. Probé decenas de suplementos, gotas, pastillas, cremas y espráis para la erección. No me dieron ningún resultado. Después decidí probar algo más fuerte: viagra, pero con ella me empezó a fallar el corazón. Aunque era joven y fuerte, me asusté bastante. </p>
                                            <p style="font-size: 24px; font-weight: bold;"> ¡El remedio existe! </p>
                                            <p> Mi proceso de búsqueda fue largo, probé muchos productos con la esperanza de encontrar algo. Cuando empezaron mis problemas con el hígado y el corazón, me asusté aún más. Así que muerto de la vergüenza decidí acudir con un amigo urólogo, porque un pene flácido es más vergonzoso que una consulta médica. </p>
                                            <p> El médico me regañó por haber tomado todos estos productos químicos que envenenaban mi organismo. Me aconsejó unas cápsulas que son seguras y que él mismo toma como una prevención. Se llaman "Maral Gel".</p>
                                            <p> ¡El urólogo me aseguró de que estas cápsulas no tenían componentes sintéticos! <b> Elementos naturales y extractos de plantas. </b> Y según él, cada elemento es en sí <b> un afrodisíaco muy potente </b>, pero cada uno es responsable de cosas diferentes: una planta facilita <b> el flujo de sangre al pene </b>, otra <b> mejora la capacidad de transmitir los impulsos nerviosos</b>, la tercera mejora la producción <b> de la testosterona, </b> etc.</p>
                                            <div class="wrapper-wide">
                                                <div class="img-wrap">
                                                    <img src="assets/img/phot-2.jpg" alt>
                                                </div>
                                            </div>
                                            <p> Bueno, me quedaba una última oportunidad, así que tomé la decisión de ir a la página web y pedir estas cápsulas. Esperé a que me llegaran y empecé a tomarlas a tope… Como resultado, en tres días sentí un enorme deseo de tener sexo! Pero pensé que todavía era temprano así que simplemente me masturbe. Por cierto, <b> ese día estuvo increíble! </b> ¡¡¡Me quedé en shock!!!!! <b> ¡¡¡Manché toda la mesa por todo lo que me salió!!! </b> Aunque mi mesa es bastante alta y mi silla es bajita. ¡Vaya cantidad de esperma! Pero yo decidí esperar y todavía no tener relaciones con las mujeres. Pero después de una semana decidí tener sexo y ver qué tal. </p>
                                            <div class="wrapper-image">
                                                <div class="wrapper-label">
                                                    <div class="wrapper-wide">
                                                        <a href><img src="assets/img/pr2.jpg" width="640"></a>
                                                    </div><span></span>
                                                </div>
                                            </div>
                                            <p style="font-size: 24px; font-weight: bold;"> ¡Mi realidad de ahora es  sexo de tres horas seguidas y un montón de amantes fieles!</p>
                                            <p> Me registré en Tinder y empecé a darle likes a todas las mujeres guapas. Quedé con una mosquita muerta, así parece a primera vista, porque son las más viciosas. Después de cenar en el restaurante fuimos a un club, y después a mi casa. Allí <b> tuvimos sexo como locos, ¡ella gritó como en una película porno! </b> ¡Me arañó<b> toda la piel! </b> La primera vez <b> tuvimos sexo una hora y media</b>, ¡y después <b> tres veces más! </b> ¡Yo me controlaba, aunque había bebido bastante!</p>
                                            <p> ¡Así es cómo empezó mi <b> nueva vida</b>!Me la pasaba con una y otra chica, pero ahora ellas son las que me llevan a la cama y <b> hacen todo lo que les diga! </b> ¡Una me ofreció el sexo anal! ¡Aunque a ella no le gusta, pero me quería satisfacer muchísimo, <b> para que siguiéramos teniendo sexo! </b></p>
                                            <p> Mira lo que me manda: </p>
                                            <div class="wrapper-image">
                                                <div class="wrapper-label">
                                                    <div class="wrapper-wide">
                                                        <a href><img src="assets/img/main3.png" width="640"></a>
                                                    </div><span></span>
                                                </div>
                                            </div>
                                            <p style="font-size: 24px; font-weight: bold;"> ¿Quieres que tu potencia sea igual? </p>
                                            <p> ¡El producto <b> «Maral Gel»</b> me ha ayudado muchísimo! Hasta le he regalado una botella de whisky al médico para darle las gracias. Me contó que el efecto de <b> «Maral Gel»</b> es creciente a largo plazo. Eso significa que ahora hago dos cursos de tratamiento de 21 días, y esta potencia fuerte se quedará conmigo por lo menos un par de años. </p>
                                            <p> Estoy tan contento porque en la <a href><b> página oficial </b></a> hice un pedido de un curso entero para mi padre. ¡Le quiero regalar una segunda juventud para su cumpleaños número 50! </p>
                                            <div class="wrapper-image">
                                                <div class="wrapper-label">
                                                    <div class="wrapper-wide">
                                                        <center>
                                                            <a href><img src="assets/img/box.png" width="220"></a>
                                                        </center>
                                                    </div><span></span>
                                                </div>
                                            </div>
                                            <p> Yo hago pedidos en <a href><b> esta web </b></a> . El doctor me dio el enlace y yo ya no busqué más, así que no sé en qué otros lugares se puede comprar este producto. He oído que aparecen copias y equivalentes de este producto, pero yo ya he encontrado uno que me funciona. No voy a buscar más. Así que les aconsejo que compren  estas cápsulas, porque pronto mucha gente sabrá de ellas</p>
                                            <p> .<b> ¡basta de complejos</b> y dudas horrorosas antes del sexo si se va a levantar o no! <b> ¡Ahora sí se va a levantar!</b>! ¡Y cómo! ¡Las amigas van a estar muy impresionadas y no podrán resistir! </p>
                                            <center>
                                                <a href style="font-size: 22px; font-weight: bold;"> Haced los pedidos aquí </a>
                                            </center>
                                            <p><b> ¡Les deseo un sexo increíble! </b> ¡Escríbanme en los comentarios sobre sus hazañas, si quieren de forma anónima!)) </p>
                                        </article>
										
										
										
										<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script>
  $(document).ready(function (){
    $("a").click(function (e){
      e.preventDefault();
      $('html, body').animate({
        scrollTop: $(".toform").offset().top
      }, 1000);
    });
  });
</script><div class="toform"></div>
											 <form  class="feedback-form orderForm " method="post">
                                                <input type="hidden" name="sub1" value="{clickid}">
        <div>
          <label class="feedback-label lt18" for="#name"> Tu nombre </label><input class="feedback-fio" id="#name" name="name" required type="text">
        </div>
        <div>
          <label class="feedback-label lt19" for="phone"> Número de teléfono </label><input class="feedback-phone" id="phone" name="phone"   onkeyup="this.value=this.value.replace(/\s/,'')" minlength="5" required  type="text">
		   	   


          </div><input class="feedback-btn" type="submit" value="¡Ordene con 50% de descuento!"><!--Để đặt-->
        </form>
                                        <div class="b-article__actions">
                                            <div class="b-articles__b__rating rtClubEntryLikeCount25326 positive">
                                                <a class="article-like b-articles-info__rating__down fancybox-login-popup" href><i class="icon-down-big"></i></a> <b> +146</b> <a class="article-like b-articles-info__rating__up fancybox-login-popup" href><i class="icon-up-big"></i></a>
                                            </div>
                                            <div class="b-article__shares">
                                                <div class="likely likely_some likely_visible likely_ready" data-type="club">
                                                    <span class=" likely__widget likely__widget_odnoklassniki" data-ok="large" data-type="Odnoklassniki" data-type-short="ok"><span class="likely__icon likely__icon_odnoklassniki"><svg height="16" viewBox="0 0 16 16" width="16">
                                                                <path d="M8 2.6c.9 0 1.7.7 1.7 1.7C9.7 5.2 9 6 8 6c-.9 0-1.7-.7-1.7-1.7S7.1 2.6 8 2.6zm0 5.7c2.2 0 4-1.8 4-4s-1.8-4-4-4-4 1.8-4 4 1.8 4 4 4zm1.6 3.2c.8-.2 1.6-.5 2.3-1 .5-.3.7-1.1.4-1.6-.3-.6-1.1-.7-1.6-.4-1.6 1-3.8 1-5.4 0-.6-.3-1.3-.1-1.6.4-.4.6-.2 1.3.3 1.7.7.5 1.5.8 2.3 1l-2.2 2.2c-.5.5-.5 1.2 0 1.7.2.2.5.3.8.3.3 0 .6-.1.8-.3L8 13.2l2.2 2.2c.5.5 1.2.5 1.7 0s.5-1.2 0-1.7l-2.3-2.2z"/>
                                                            </svg></span><span class="likely__button likely__button_odnoklassniki"> Compartir </span></span>
                                                    <div class=" likely__widget likely__widget_twitter" data-type="Twitter" data-type-short="tw">
                                                        <span class="likely__icon likely__icon_twitter"><svg height="16" viewBox="0 0 16 16" width="16">
                                                                <path d="M15.96 3.42c-.04.153-.144.31-.237.414l-.118.058v.118l-.59.532-.237.295c-.05.036-.398.21-.413.237V6.49h-.06v.473h-.058v.294h-.058v.296h-.06v.235h-.06v.237h-.058c-.1.355-.197.71-.295 1.064h-.06v.116h-.06c-.02.1-.04.197-.058.296h-.06c-.04.118-.08.237-.118.355h-.06c-.038.118-.078.236-.117.353l-.118.06-.06.235-.117.06v.116l-.118.06v.12h-.06c-.02.057-.038.117-.058.175l-.118.06v.117c-.06.04-.118.08-.177.118v.118l-.237.177v.118l-.59.53-.532.592h-.117c-.06.078-.118.156-.177.236l-.177.06-.06.117h-.118l-.06.118-.176.06v.058h-.118l-.06.118-.353.12-.06.117c-.078.02-.156.04-.235.058v.06c-.118.038-.236.078-.354.118v.058H8.76v.06h-.12v.06h-.176v.058h-.118v.06H8.17v.058H7.99v.06l-.413.058v.06h-.237c-.667.22-1.455.293-2.36.293h-.886v-.058h-.53v-.06H3.27v-.06h-.295v-.06H2.68v-.057h-.177v-.06h-.236v-.058H2.09v-.06h-.177v-.058h-.177v-.06H1.56v-.058h-.12v-.06l-.294-.06v-.057c-.118-.04-.236-.08-.355-.118v-.06H.674v-.058H.555v-.06H.437v-.058H.32l-.06-.12H.142v-.058c-.13-.08-.083.026-.177-.118H1.56v-.06c.294-.04.59-.077.884-.117v-.06h.177v-.058h.237v-.06h.118v-.06h.177v-.057h.118v-.06h.177v-.058l.236-.06v-.058l.236-.06c.02-.038.04-.078.058-.117l.237-.06c.02-.04.04-.077.058-.117h.118l.06-.118h.118c.036-.025.047-.078.118-.118V12.1c-1.02-.08-1.84-.54-2.303-1.183-.08-.058-.157-.118-.236-.176v-.117l-.118-.06v-.117c-.115-.202-.268-.355-.296-.65.453.004.987.008 1.354-.06v-.06c-.254-.008-.47-.08-.65-.175v-.058H2.32v-.06c-.08-.02-.157-.04-.236-.058l-.06-.118h-.117l-.118-.178h-.12c-.077-.098-.156-.196-.235-.294l-.118-.06v-.117l-.177-.12c-.35-.502-.6-1.15-.59-2.006h.06c.204.234.948.377 1.357.415v-.06c-.257-.118-.676-.54-.827-.768V5.9l-.118-.06c-.04-.117-.08-.236-.118-.354h-.06v-.118H.787c-.04-.196-.08-.394-.118-.59-.06-.19-.206-.697-.118-1.005h.06V3.36h.058v-.177h.06v-.177h.057V2.83h.06c.04-.118.078-.236.117-.355h.118v.06c.12.097.237.196.355.295v.118l.118.058c.08.098.157.197.236.295l.176.06.354.413h.118l.177.236h.118l.06.117h.117c.04.06.08.118.118.177h.118l.06.118.235.06.06.117.356.12.06.117.53.176v.06h.118v.058l.236.06v.06c.118.02.236.04.355.058v.06h.177v.058h.177v.06h.176v.058h.236v.06l.472.057v.06l1.417.18v-.237c-.1-.112-.058-.442-.057-.65 0-.573.15-.99.354-1.358v-.117l.118-.06.06-.235.176-.118v-.118c.14-.118.276-.236.414-.355l.06-.117h.117l.12-.177.235-.06.06-.117h.117v-.058H9.7v-.058h.177v-.06h.177v-.058h.177v-.06h.296v-.058h1.063v.058h.294v.06h.177v.058h.178v.06h.177v.058h.118v.06h.118l.06.117c.08.018.158.038.236.058.04.06.08.118.118.177h.118l.06.117c.142.133.193.163.472.178.136-.12.283-.05.472-.118v-.06h.177v-.058h.177v-.06l.236-.058v-.06h.177l.59-.352v.176h-.058l-.06.295h-.058v.117h-.06v.118l-.117.06v.118l-.177.118v.117l-.118.06-.354.412h-.117l-.177.236h.06c.13-.112.402-.053.59-.117l1.063-.353z"/>
                                                            </svg></span><span class="likely__button likely__button_twitter"> Tuitear </span><span class="likely__counter likely__counter_twitter"> 95</span>
                                                    </div>
                                                    <div class=" likely__widget likely__widget_facebook" data-type="Facebook" data-type-short="fb">
                                                        <span class="likely__icon likely__icon_facebook"><svg height="16" viewBox="0 0 16 16" width="16">
                                                                <path d="M5.9 16h3.3V8h2.2l.3-2.8H9.2V3.8c0-.7.1-1.1 1.1-1.1h1.4V0H9.5C6.9 0 5.9 1.3 5.9 3.6v1.7H4.3V8H6v8z"/>
                                                            </svg></span><span class="likely__button likely__button_facebook"> Compartir </span><span class="likely__counter likely__counter_facebook"> 204</span>
                                                    </div>
                                                    <div class=" likely__widget likely__widget_vkontakte" data-type="VK" data-type-short="vk">
                                                        <span class="likely__icon likely__icon_vkontakte"><svg height="16" viewBox="0 0 16 16" width="16">
                                                                <path d="M7.8 12.4h.9s.3 0 .4-.2c.1-.1.1-.4.1-.4s0-1.3.6-1.4c.6-.2 1.3 1.2 2.1 1.7.6.4 1 .3 1 .3H15s1.1-.1.6-.9c0-.1-.3-.6-1.6-1.8-1.3-1.2-1.1-1 .4-3.1 1-1.3 1.3-2.1 1.2-2.4.1-.3-.6-.3-.6-.3h-2.4s-.2 0-.3.1c-.1.1-.2.3-.2.3s-.4 1-.9 1.8c-1 1.8-1.5 1.9-1.6 1.8-.4-.3-.3-1-.3-1.6 0-1.7.3-2.4-.5-2.6-.3-.1-.4-.2-1.1-.2-.8 0-1.5 0-2 .2-.2.2-.4.5-.3.5.2 0 .5.1.7.3.2.3.2 1.1.2 1.1s.1 2-.3 2.3c-.3.1-.7-.2-1.7-1.8-.5-.8-.8-1.8-.8-1.8l-.2-.2-.4-.2H.7s-.3 0-.5.2c-.1.1 0 .4 0 .4S2 8.6 4 10.7c1.8 1.8 3.8 1.7 3.8 1.7z"/>
                                                            </svg></span><span class="likely__button likely__button_vkontakte"> Compartir </span><span class="likely__counter likely__counter_vkontakte"> 146</span>
                                                    </div>
                                                    <div class=" likely__widget likely__widget_gplus" data-type="Google+" data-type-short="gp">
                                                        <span class="likely__icon likely__icon_gplus"><svg height="16" viewBox="0 0 16 16" width="16">
                                                                <path d="M8,6.5v3h4.291c-0.526,2.01-2.093,3.476-4.315,3.476C5.228,12.976,3,10.748,3,8c0-2.748,2.228-4.976,4.976-4.976c1.442,0,2.606,0.623,3.397,1.603L13.52,2.48C12.192,0.955,10.276,0,8,0C3.582,0,0,3.582,0,8s3.582,8,8,8s7.5-3.582,7.5-8V6.5H8z"/>
                                                            </svg></span><span class="likely__button likely__button_gplus"></span><span class="likely__counter likely__counter_gplus">2</span>
                                                    </div>
                                                    <div class=" likely__widget likely__widget_odnoklassniki" data-ok="small" data-type="Odnoklassniki" data-type-short="ok">
                                                        <span class="likely__icon likely__icon_odnoklassniki"><svg height="16" viewBox="0 0 16 16" width="16">
                                                                <path d="M8 2.6c.9 0 1.7.7 1.7 1.7C9.7 5.2 9 6 8 6c-.9 0-1.7-.7-1.7-1.7S7.1 2.6 8 2.6zm0 5.7c2.2 0 4-1.8 4-4s-1.8-4-4-4-4 1.8-4 4 1.8 4 4 4zm1.6 3.2c.8-.2 1.6-.5 2.3-1 .5-.3.7-1.1.4-1.6-.3-.6-1.1-.7-1.6-.4-1.6 1-3.8 1-5.4 0-.6-.3-1.3-.1-1.6.4-.4.6-.2 1.3.3 1.7.7.5 1.5.8 2.3 1l-2.2 2.2c-.5.5-.5 1.2 0 1.7.2.2.5.3.8.3.3 0 .6-.1.8-.3L8 13.2l2.2 2.2c.5.5 1.2.5 1.7 0s.5-1.2 0-1.7l-2.3-2.2z"/>
                                                            </svg></span><span class="likely__button likely__button_odnoklassniki"></span>
                                                    </div>
                                                    <div class=" likely__widget likely__widget_pocket" data-type="Pocket" data-type-short="po">
                                                        <span class="likely__icon likely__icon_pocket"><svg height="16" viewBox="0 0 16 16" width="16">
                                                                <path d="M12.533 6.864L8.77 10.4c-.213.2-.486.3-.76.3-.273 0-.547-.1-.76-.3L3.488 6.865c-.437-.41-.45-1.09-.032-1.52.42-.428 1.114-.443 1.55-.032l3.006 2.823 3.004-2.823c.438-.41 1.132-.396 1.55.032.42.43.406 1.11-.03 1.52zm3.388-4.928c-.207-.56-.755-.936-1.363-.936H1.45C.854 1 .31 1.368.096 1.917.032 2.08 0 2.25 0 2.422v4.73l.055.94c.232 2.14 1.366 4.01 3.12 5.314.03.024.063.047.094.07l.02.013c.94.673 1.992 1.13 3.128 1.353.524.104 1.06.157 1.592.157.492 0 .986-.045 1.472-.133.058-.01.116-.022.175-.034.016-.003.033-.01.05-.018 1.088-.233 2.098-.677 3.003-1.326l.02-.015c.032-.022.064-.045.096-.07 1.753-1.303 2.887-3.173 3.12-5.312l.054-.94v-4.73c0-.165-.02-.327-.08-.487z"/>
                                                            </svg></span><span class="likely__button likely__button_pocket"></span><span class="likely__counter likely__counter_pocket"> 27</span>
                                                    </div>
                                                    <div class=" likely__widget likely__widget_telegram" data-type="Telegram" data-type-short="tg">
                                                        <span class="likely__icon likely__icon_telegram"><svg height="16" viewBox="0 0 16 16" width="16">
                                                                <path d="M12.4 4.2L6.6 9.6c-.2.2-.3.4-.4.7L6 11.8c0 .2-.3.2-.3 0l-.8-2.6c-.1-.4.1-.7.3-.8l7-4.3c.2-.2.4 0 .2.1zm2.9-3L.5 6.9c-.4.1-.4.7 0 .8L4.1 9l1.4 4.5c.1.3.4.4.7.2l2-1.6c.2-.2.5-.2.7 0l3.6 2.6c.3.2.6 0 .7-.3l2.6-12.8c.1-.2-.2-.5-.5-.4z"/>
                                                            </svg></span><span class="likely__button likely__button_telegram"></span>
                                                    </div>
                                                    <div class=" likely__widget likely__widget_whatsapp" data-type="WhatsApp" data-type-short="wa">
                                                        <span class="likely__icon likely__icon_whatsapp"><svg height="16" viewBox="0 0 16 16" width="16">
                                                                <path d="M15.8 7.8c0 4.2-3.4 7.6-7.6 7.6-1.3 0-2.6-.3-3.7-.9L.3 15.8l1.4-4.1C1 10.6.6 9.2.6 7.8.6 3.6 4 .2 8.2.2c4.2 0 7.6 3.4 7.6 7.6M8.1 1.4c-3.5 0-6.4 2.9-6.4 6.4 0 1.4.5 2.7 1.2 3.7l-.8 2.4 2.5-.8c1 .7 2.2 1.1 3.5 1.1 3.5 0 6.4-2.9 6.4-6.4.1-3.5-2.8-6.4-6.4-6.4M12 9.5c0-.1-.2-.1-.4-.2s-1.1-.5-1.3-.6c-.2-.1-.3-.1-.4.1-.1.2-.4.6-.6.7-.1.1-.2.1-.4 0-.1 0-.8-.2-1.5-.8-.6-.5-.9-1.1-1-1.3-.1-.2 0-.3.1-.4l.3-.3c.1-.1.1-.2.2-.3 0-.2 0-.3-.1-.4 0-.1-.4-1-.6-1.4-.1-.3-.3-.2-.4-.2h-.4c-.1 0-.3 0-.5.2-.1.2-.6.6-.6 1.5s.7 1.8.8 1.9c.1.1 1.3 2.1 3.2 2.8 1.9.7 1.9.5 2.2.5.3 0 1.1-.4 1.3-.9.1-.4.1-.8.1-.9z"/>
                                                            </svg></span><span class="likely__button likely__button_whatsapp"></span>
                                                    </div>
                                                    <div class=" likely__widget likely__widget_viber" data-type="Viber" data-type-short="vi">
                                                        <span class="likely__icon likely__icon_viber"><svg height="16" viewBox="0 0 16 16" width="16">
                                                                <path d="M13.7 6.7c0 .3.1.7-.3.8-.6.1-.5-.4-.5-.8-.4-2.3-1.2-3.2-3.5-3.7-.4-.1-.9 0-.8-.5.1-.5.5-.4.9-.3 2.3.3 4.2 2.3 4.2 4.5zM8.8 1.2c3.7.6 5.5 2.4 5.9 6.1 0 .3-.1.9.4.9s.4-.5.4-.9c0-3.6-3.1-6.8-6.7-7-.2.1-.8-.1-.8.5 0 .4.4.3.8.4zm5.7 10.2c-.5-.4-1-.7-1.5-1.1-1-.7-1.9-.7-2.6.4-.4.6-1 .6-1.6.4-1.7-.8-2.9-1.9-3.7-3.6-.3-.7-.3-1.4.5-1.9.4-.3.8-.6.8-1.2 0-.8-2-3.5-2.7-3.7-.3-.1-.6-.1-1 0C.9 1.2.2 2.7.9 4.4c2.1 5.2 5.8 8.8 11 11 .3.1.6.2.8.2 1.2 0 2.5-1.1 2.9-2.2.3-1-.5-1.5-1.1-2zM9.7 4c-.2 0-.5 0-.6.3-.1.4.2.5.5.5.9.2 1.4.7 1.5 1.7 0 .3.2.5.4.4.3 0 .4-.3.4-.6 0-1.1-1.2-2.3-2.2-2.3z"/>
                                                            </svg></span><span class="likely__button likely__button_viber"></span>
                                                    </div>
                                                    <div class=" likely__widget likely__widget_more">
                                                        <span class="likely__icon likely__icon_more"><svg height="16" viewBox="0 0 16 16" width="16">
                                                                <path d="M12.7 11.3c-.6 0-1.1.2-1.6.6L5.6 8.6c0-.2.1-.4.1-.6 0-.2 0-.4-.1-.6l5.6-3.3c.4.4 1 .6 1.6.6 1.3 0 2.4-1.1 2.4-2.4S14 .1 12.7.1s-2.4 1.1-2.4 2.4c0 .2 0 .4.1.6L4.9 6.3c-.4-.4-1-.6-1.6-.6C2 5.7.9 6.7.9 8s1.1 2.4 2.4 2.4c.6 0 1.2-.2 1.6-.6l5.6 3.3c0 .2-.1.3-.1.5 0 1.3 1 2.3 2.3 2.3s2.3-1 2.3-2.3-1-2.3-2.3-2.3z"/>
                                                            </svg></span><span class="likely__button likely__button_more"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="b-article__misprint">
                                                <p> ¿Has encontrado una errata? Selecciona el fragmento y envíanoslo presionando Ctrl+Enter. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b-block b-comments-3-comments">
                                    <a href id="comments" name="comments"> </a>
                                    <div class="b-comments-3-comments__comments b-comments">
                                        <b class="b-comments-3-comments__comments__title"><i class="icon-chat-1"></i> últimos comentarios</b>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="icon-star fancybox-login-popup"></i> <a class="b-comment__user" href><span> Anónimo</span></a>
                                                    <div class="b-comment__datetime"> 12:22:17 <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/img/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p> Sergio, muchas gracias por tu post tan sincero! Muy actual y justo a tiempo! Porque de verdad puede pasar a los chicos jóvenes, pero siempre nos callamos. Hay que probar estas cápsulas naturales, si te han funcionado, igual a mi también me van a funcionar! </p>
                                                 
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 439 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="icon-star fancybox-login-popup"></i> <a class="b-comment__user" href><span> R.L.B. </span></a>
                                                    <div class="b-comment__datetime"> 12:22:17 <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/img/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p> Que chulada! Ya me gustaría a mí! Me parece que no tengo problemas, y mi novia no se queja, pero estamos juntos 6 años y me doy cuenta de que el sexo ya no es el mismo… </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 32 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="icon-star fancybox-login-popup"></i> <a class="b-comment__user" href><span> Andi </span></a>
                                                    <div class="b-comment__datetime"> 12:52:32 <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/img/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p> Pues prueba este Maral Gel! Sergio ya te lo explicó muy bien. Además si el tuyo se levanta bien, podrás tener sexo toda la noche sin descanso! El mío es mi herramienta de trabajo, si se puede decir así. </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 24 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="icon-star fancybox-login-popup"></i> <a class="b-comment__user" href><span> Boroboro </span></a>
                                                    <div class="b-comment__datetime"> 13:29:19 <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/img/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p> Yo terminé el curso de estas cápsulas hace un mes. Una pasada! Si alguien sigue dudando, no lo hagan, realiza un pedido! Que si no, se van a quedar con sus hilos tristes! </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 41 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="icon-star fancybox-login-popup"></i> <a class="b-comment__user" href><span> Martín Suárez </span></a>
                                                    <div class="b-comment__datetime"> 15:12:09 <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/img/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p> Hace poco me ha llegado un paquete de <a href> esta web </a>, todo anónimo y sin que nadie sepa. Por cierto, fui a propósito a una farmacia para comprobar los precios, y la verdad la diferencia es enorme. O sea, hoy es el quinto día que lo tomo, mi mujer después de la noche de ayer está contentísima)))))</p>
                                             
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 22 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="icon-star fancybox-login-popup"></i> <a class="b-comment__user" href><span> Víctor C.G. </span></a>
                                                    <div class="b-comment__datetime"> 16:04:52 <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/img/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p> Yo también he probado Maral Gel hace poco, escuché el nombre en la entrevista de un actor porno. Es algo increíble! Ahora mi pistola está lista siempre! Las mujeres están felices - yo puedo toda la noche sin descanso. El otro día incluso pude con dos, las satisfice tanto que todavía me escriben dando las gracias e insinúan que quieren repetir. </p>
                                                    <p></p>
                                                    <p> Miren que foto, es para enmarcar )))</p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 39 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="icon-star fancybox-login-popup"></i> <a class="b-comment__user" href><span> Vane </span></a>
                                                    <div class="b-comment__datetime"> 16:14:23 <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/img/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p> El otro día conocí a un chico en el club, pues la cosa llegó a la cama… Mmm… Fue el mejor sexo en mi vida! Y en su mesilla de noche vi la cajita de este producto:) <br> ¡Así que no tengan vergüenza, chicos! </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 50 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="icon-star fancybox-login-popup"></i> <a class="b-comment__user" href><span> Fer</span></a>
                                                    <div class="b-comment__datetime"> 16:18:51 <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/img/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p> Vane, yo tomo Maral Gel cada día, vente que te voy a dar lo tuyo:):):)</p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 54 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="icon-star fancybox-login-popup"></i> <a class="b-comment__user" href><span> Anónimo </span></a>
                                                    <div class="b-comment__datetime"> 16:23:11 <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/img/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p> Antes mi mujer se quejaba siempre de que me corría muy rápido. Mi amigo me aconsejó estas cápsulas de las que están hablando. Ahora mi mujer dice que el sexo le da tres veces más placer! El acto dura mucho y terminamos los dos felices. Ahora aconsejo el producto a todos mis amigos - nadie se ha quejado. </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 98 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="icon-star fancybox-login-popup"></i> <a class="b-comment__user" href><span> Chocolate </span></a>
                                                    <div class="b-comment__datetime"> 16:26:41 <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/img/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p> He pedido 5 cajas para mi novio! ¡Estoy cansada de fingir!:( </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 44 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="icon-star fancybox-login-popup"></i> <a class="b-comment__user" href><span> Ariadna </span></a>
                                                    <div class="b-comment__datetime"> 16:36:45 <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/img/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p> Mi marido tenía este problema. Su pene casi nunca se paraba, por mucho que me esforzara. Y si se erguía y teníamos sexo, todo terminaba literalmente en 5 minutos. Ni él ni yo estábamos contentos, por eso dejamos de esforzarnos. Pero después un compañero suyo le contó sobre Maral Gel, del que está escribiendo el autor… Ahora lo hacemos cada día! varias veces por noche </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 64 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="icon-star fancybox-login-popup"></i> <a class="b-comment__user" href><span> Don Juan </span></a>
                                                    <div class="b-comment__datetime"> 16:41:31 <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/img/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p> Qué suerte has tenido con el médico, Sergio! El mío casi me manda a hacer una operación! Y el dineral que gasté en todos estos productos químicos!((( Yo mismo busqué información en Internet y encontré Maral Gel, me lo pedí, y en una semana ya tenía mi problema resuelto! </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 65 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="icon-star fancybox-login-popup"></i> <a class="b-comment__user" href><span> Ricardo</span></a>
                                                    <div class="b-comment__datetime"> 16:44:58 <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/img/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p> Estoy muy sorprendido. Nunca habría pensado que hayas tenido este tipo de problema. Que bien que todo haya terminado bien! Bueno, yo también me lo he pedido. </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 101 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="icon-star fancybox-login-popup"></i> <a class="b-comment__user" href><span> Anónimo</span></a>
                                                    <div class="b-comment__datetime"> 16:53:52 <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/img/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p> Hola, impotentes! ¿Que, sin las cápsulas ya no son capaces?):)</p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 1 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="icon-star fancybox-login-popup"></i> <a class="b-comment__user" href><span> Arturo</span></a>
                                                    <div class="b-comment__datetime"> 16:69:33 <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/img/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p> Y tú que, gigante sexual, tan valiente que ocultas tu nombre? Seguro que eres virgen con los granos!!! </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 45 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="icon-star fancybox-login-popup"></i> <a class="b-comment__user" href><span> Arturo</span></a>
                                                    <div class="b-comment__datetime"> 17:04:52 <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/img/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p> Y respecto al tema, sí, la vieja historia. Empieza a funcionar en un par de días, luego el efecto dura mucho. </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 56 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="icon-star fancybox-login-popup"></i> <a class="b-comment__user" href><span> NapalmDeath</span></a>
                                                    <div class="b-comment__datetime"> 17:06:42 <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/img/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p> Mi hermano es farmacéutico, y en su laboratorio hicieron pruebas de este Maral Gel. Él dice que el producto es genial, capaz de ayudar a cualquiera! La composición es de verdad natural, tal como lo dice el fabricante, el efecto súper! Los tíos de su laboratorio lo tienen todos, porque claro les salió gratis. </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 43 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="icon-star fancybox-login-popup"></i> <a class="b-comment__user" href><span> Andrés</span></a>
                                                    <div class="b-comment__datetime"> 17:11:12 <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/img/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p> Supe de Maral Gel hace mucho. Hace medio año que deje de tomarlo. Cada día mi mujer me espera del trabajo con su minnet y se corre como una prostituta pidiéndome que le diera lo suyo! </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 132 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="icon-star fancybox-login-popup"></i> <a class="b-comment__user" href><span> Juan</span></a>
                                                    <div class="b-comment__datetime"> 17:33:45 <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/img/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p> Después de Maral Gel mi récord es 6 veces en una noche! Y eso que antes yo tenía el mismo problema que el autor… </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 39 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="order-lov" href> HAZ TU PEDIDO DE Maral Gel</a>
                                    </div>
                                    <div class="b-comments-3-comments__wrapper">
                                        <div class="b-comments-3-comments__people animated">
                                            <div class="b-comments-3-comments__people__wrapper">
                                                <ul>
                                                    <li>
                                                        <a href><img src="assets/img/10_001.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href><img src="assets/img/11.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href><img src="assets/img/11_001.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href><img src="assets/img/12.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href><img src="assets/img/12_001.jpg"></a>
                                                    </li>
                                                </ul>
                                            </div><b> 55 comentarios disponibles solo a los propietarios de la cuenta <strong> BJ+</strong></b>
                                        </div>
                                        <div class="b-comments-3-comments__about">
                                            <a class="b-comments-not-in-club__about__login fancybox-login-popup" href> o <u> autorizarse </u></a>
                                        </div>
                                    </div>
                                </div>
																			 <form  class="feedback-form orderForm  " method="post">
                                                                                <input type="hidden" name="sub1" value="{clickid}">
        <div>
          <label class="feedback-label lt18" for="#name"> Tu nombre </label><input class="feedback-fio" id="#name" name="name" required type="text">
        </div>
        <div>
          <label class="feedback-label lt19" for="phone"> Número de teléfono </label><input class="feedback-phone" id="phone" name="phone"   onkeyup="this.value=this.value.replace(/\s/,'')" minlength="5" required  type="text">
		   	   
	
          </div><input class="feedback-btn" type="submit" value="¡Ordene con 50% de descuento!"><!--Để đặt-->
        </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="b-footer">
                    <div class="b-footer__about"></div>
                    <div class="b-footer__navigation">
                        <ul>
                            <li>
                                <a href> Sobre el proyecto </a>
                            </li>
                            <li>
                                <a href> Publicidad</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href> Mapa de sitio web </a>
                            </li>
                            <li>
                                <a href> Proyectos especiales </a>
                            </li>
                        </ul>
                    </div>
                    <div class="b-footer__branches">
                        <a class="tw" href><i class="icon-tw"></i><b> Cuenta de TJournal en Twitter </b></a>
                        <a class="fb" href><i class="icon-facebook"></i><b> Cuenta de TJournal en Facebook </b></a>
                        <a class="tg" href><i class="icon-paper-plane"></i><b> Cuenta de TJournal en Telegram</b></a>
                        <a class="rss" href><i class="icon-rss"></i><b> Rss de TJournal</b></a>
                    </div>
                    <div class="b-footer__search"></div>
                </div>
            </div>
        </div><a class="up" href><i class="icon-up-big"></i></a>
        <div class="tip">
            <div class="tip__item">
                <p></p><a class="tip__item__close" href><i class="icon-cancel-circled"></i></a>
            </div>
        </div>
    </div>

   <script>console.clear()</script>
   
   <?php
if (!function_exists('curl_version')) {
    echo 'Curl is not installed';
}

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    // Required params
    $token = 'OWUWMTEYMJETNMMZNC00ZGUYLTK0YZQTNGI0ZGRJYJAXNTRL';
    $stream_code = 'a6pa2';

    // Fields to send
    $post_fields = [
        'stream_code'   => $stream_code,    // required
        'client'        => [
            'phone'     => $_POST['phone'], // required
            'name'      => $_POST['name'],
            // 'surname'   => $_POST['surname'],
            // 'email'     => $_POST['email'],
            // 'address'   => $_POST['address'],
            // 'ip'        => $_POST['ip'],
            // 'country'   => $_POST['country'],
            // 'city'      => $_POST['city'],
            // 'postcode'  => $_POST['postcode'],
        ],
        'sub1'      => $_POST['sub1'],
        'sub2'      => $_GET['sub2'],
        'sub3'      => $_GET['sub3'],
        'sub4'      => $_GET['sub4'],
        'sub5'      => $_GET['sub5'],
    ];

    $headers = [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $token
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://order.drcash.sh/v1/order");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_fields));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, true);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $body = substr($response, $header_size);

    curl_close ($ch);

    if ($httpcode != 200) {
        echo 'Error: ' . $httpcode;
        echo '<br>';
        echo $response;
    }
    if ($httpcode == 200) {
        echo '<script language="javascript" type="text/javascript">
            window.location.href = "thanks/";
        </script>';
    }
}
?>
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

</body></html>