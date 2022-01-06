<!DOCTYPE html><html dir="ltr"><head>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="assets/dr-dtime.min.js"></script>
    <meta charset="utf-8" />
    <meta charset="utf-8">
    <title> Abhilash Khatri&#039;s blog. </title>
    <meta content="width=device-width" name="viewport">
    <link media="all" href="assets/index.css" type="text/css" rel="stylesheet">
	   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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
                    <a href><i class="dark"><img src="assets/nav-line-icon-news.svg" width="18"></i> <i class="light"><img src="assets/nav-line-icon-news-white.svg" width="18"></i>  News  </a>
                </li>
                <li class="b-menu__li">
                    <a href><i class="dark"><img src="assets/nav-line-icon-articles.svg" width="15"></i> <i class="light"><img src="assets/nav-line-icon-articles-white.svg" width="15"></i>  Item(s) </a>
                </li>
                <li class="b-menu__li">
                    <a href><i class="dark"><img src="assets/nav-line-icon-videos.svg" width="17"></i> <i class="light"><img src="assets/nav-line-icon-videos-white.svg" width="17"></i>  Video(s) </a>
                </li>
                <li class="b-menu__li">
                    <a href><i class="dark"><img src="assets/nav-line-icon-offtop.svg" width="18"></i> <i class="light"><img src="assets/nav-line-icon-offtop-white.svg" width="18"></i>  Off-topic  </a>
                </li>
                <li class="b-menu__li">
                    <a href><i class="dark"><img src="assets/nav-line-icon-tweets.svg" width="16"></i> <i class="light"><img src="assets/nav-line-icon-tweets-white.svg" width="16"></i>  Tweets </a>
                </li>
                <li class="b-menu__write">
                    <a class="b-write-btn fancybox-login-popup" href><i class="plus-1"></i>  Write </a>
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
                                            <a href><b>  The moment&#039;s topics </b></a>
                                        </li>
                                        <li class="visible">
                                            <a href><b>  The Latest </b></a>
                                        </li>
                                        <li class="visible">
                                            <a href><b>  of the week  </b></a>
                                        </li>
                                        <li class="visible">
                                            <a href><b>  Narration </b></a>
                                        </li>
                                        <li class="b-tabs-s__search">
                                            <div class="b-search">
                                                <i class="search"></i>
                                                <form class="main-order-form" action>
                                                    <input type="hidden" name="sub1" value="{clickid}">
                                                    <input id="mainSearch" placeholder="Search" type="search">
                                                  
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="b-block b-block-article-club">
                                <div class="b-article b-article-club">
                                    <div class="b-article__infoline">
                                        <a href><span class="b-article__infoline__date"> <script>dtime_nums(-5, true);</script> , 22:17 </span></a>
                                        <a href><span class="b-article__infoline__author"><img src="assets/1.jpg">  Abhilash Khatri&#039;s blog. </span></a>
                                        <div class="b-article__infoline__actions">
                                            <span class="b-article__infoline__views"><i class="eye-1"></i><b id="hitsCount">  75 210 </b></span> <a href><span class="b-article__infoline__comments"><i class="chat-1"></i><b> 55</b></span></a>
                                        </div>
                                    </div>
                                    <div class="b-article__title">
                                        <i class="star" data-objectid="25326" data-objecttype="5"></i>
                                        <h1 class="aff_sub">  I was on the verge of being impotent,  <span>  but now I&#039;m able to have sex 3 hours  </span>  non stop!  </h1>
                                        <article>
                                            <div class="likely likely_some likely_secondary b-article__likely likely_visible likely_ready" data-type="club">
                                                <span class="likely__widget likely__widget_odnoklassniki" data-ok="large" data-type="Odnoklassniki" data-type-short="ok"><span class="likely__icon likely__icon_odnoklassniki"><svg height="16" viewbox="0 0 16 16" width="16">
                                                            <path d="M8 2.6c.9 0 1.7.7 1.7 1.7C9.7 5.2 9 6 8 6c-.9 0-1.7-.7-1.7-1.7S7.1 2.6 8 2.6zm0 5.7c2.2 0 4-1.8 4-4s-1.8-4-4-4-4 1.8-4 4 1.8 4 4 4zm1.6 3.2c.8-.2 1.6-.5 2.3-1 .5-.3.7-1.1.4-1.6-.3-.6-1.1-.7-1.6-.4-1.6 1-3.8 1-5.4 0-.6-.3-1.3-.1-1.6.4-.4.6-.2 1.3.3 1.7.7.5 1.5.8 2.3 1l-2.2 2.2c-.5.5-.5 1.2 0 1.7.2.2.5.3.8.3.3 0 .6-.1.8-.3L8 13.2l2.2 2.2c.5.5 1.2.5 1.7 0s.5-1.2 0-1.7l-2.3-2.2z"/>
                                                        </svg></span><span class="likely__button likely__button_odnoklassniki">  Share </span></span>
                                                <div class="likely__widget likely__widget_twitter" data-type="Twitter" data-type-short="tw">
                                                    <span class="likely__icon likely__icon_twitter"><svg height="16" viewbox="0 0 16 16" width="16">
                                                            <path d="M15.96 3.42c-.04.153-.144.31-.237.414l-.118.058v.118l-.59.532-.237.295c-.05.036-.398.21-.413.237V6.49h-.06v.473h-.058v.294h-.058v.296h-.06v.235h-.06v.237h-.058c-.1.355-.197.71-.295 1.064h-.06v.116h-.06c-.02.1-.04.197-.058.296h-.06c-.04.118-.08.237-.118.355h-.06c-.038.118-.078.236-.117.353l-.118.06-.06.235-.117.06v.116l-.118.06v.12h-.06c-.02.057-.038.117-.058.175l-.118.06v.117c-.06.04-.118.08-.177.118v.118l-.237.177v.118l-.59.53-.532.592h-.117c-.06.078-.118.156-.177.236l-.177.06-.06.117h-.118l-.06.118-.176.06v.058h-.118l-.06.118-.353.12-.06.117c-.078.02-.156.04-.235.058v.06c-.118.038-.236.078-.354.118v.058H8.76v.06h-.12v.06h-.176v.058h-.118v.06H8.17v.058H7.99v.06l-.413.058v.06h-.237c-.667.22-1.455.293-2.36.293h-.886v-.058h-.53v-.06H3.27v-.06h-.295v-.06H2.68v-.057h-.177v-.06h-.236v-.058H2.09v-.06h-.177v-.058h-.177v-.06H1.56v-.058h-.12v-.06l-.294-.06v-.057c-.118-.04-.236-.08-.355-.118v-.06H.674v-.058H.555v-.06H.437v-.058H.32l-.06-.12H.142v-.058c-.13-.08-.083.026-.177-.118H1.56v-.06c.294-.04.59-.077.884-.117v-.06h.177v-.058h.237v-.06h.118v-.06h.177v-.057h.118v-.06h.177v-.058l.236-.06v-.058l.236-.06c.02-.038.04-.078.058-.117l.237-.06c.02-.04.04-.077.058-.117h.118l.06-.118h.118c.036-.025.047-.078.118-.118V12.1c-1.02-.08-1.84-.54-2.303-1.183-.08-.058-.157-.118-.236-.176v-.117l-.118-.06v-.117c-.115-.202-.268-.355-.296-.65.453.004.987.008 1.354-.06v-.06c-.254-.008-.47-.08-.65-.175v-.058H2.32v-.06c-.08-.02-.157-.04-.236-.058l-.06-.118h-.117l-.118-.178h-.12c-.077-.098-.156-.196-.235-.294l-.118-.06v-.117l-.177-.12c-.35-.502-.6-1.15-.59-2.006h.06c.204.234.948.377 1.357.415v-.06c-.257-.118-.676-.54-.827-.768V5.9l-.118-.06c-.04-.117-.08-.236-.118-.354h-.06v-.118H.787c-.04-.196-.08-.394-.118-.59-.06-.19-.206-.697-.118-1.005h.06V3.36h.058v-.177h.06v-.177h.057V2.83h.06c.04-.118.078-.236.117-.355h.118v.06c.12.097.237.196.355.295v.118l.118.058c.08.098.157.197.236.295l.176.06.354.413h.118l.177.236h.118l.06.117h.117c.04.06.08.118.118.177h.118l.06.118.235.06.06.117.356.12.06.117.53.176v.06h.118v.058l.236.06v.06c.118.02.236.04.355.058v.06h.177v.058h.177v.06h.176v.058h.236v.06l.472.057v.06l1.417.18v-.237c-.1-.112-.058-.442-.057-.65 0-.573.15-.99.354-1.358v-.117l.118-.06.06-.235.176-.118v-.118c.14-.118.276-.236.414-.355l.06-.117h.117l.12-.177.235-.06.06-.117h.117v-.058H9.7v-.058h.177v-.06h.177v-.058h.177v-.06h.296v-.058h1.063v.058h.294v.06h.177v.058h.178v.06h.177v.058h.118v.06h.118l.06.117c.08.018.158.038.236.058.04.06.08.118.118.177h.118l.06.117c.142.133.193.163.472.178.136-.12.283-.05.472-.118v-.06h.177v-.058h.177v-.06l.236-.058v-.06h.177l.59-.352v.176h-.058l-.06.295h-.058v.117h-.06v.118l-.117.06v.118l-.177.118v.117l-.118.06-.354.412h-.117l-.177.236h.06c.13-.112.402-.053.59-.117l1.063-.353z"/>
                                                        </svg></span><span class="likely__button likely__button_twitter">  Tweet </span><span class="likely__counter likely__counter_twitter"> 95</span>
                                                </div>
                                                <div class="likely__widget likely__widget_facebook" data-type="Facebook" data-type-short="fb">
                                                    <span class="likely__icon likely__icon_facebook"><svg height="16" viewbox="0 0 16 16" width="16">
                                                            <path d="M5.9 16h3.3V8h2.2l.3-2.8H9.2V3.8c0-.7.1-1.1 1.1-1.1h1.4V0H9.5C6.9 0 5.9 1.3 5.9 3.6v1.7H4.3V8H6v8z"/>
                                                        </svg></span><span class="likely__button likely__button_facebook">  Share </span><span class="likely__counter likely__counter_facebook"> 204</span>
                                                </div>

                                                <div class="likely__widget likely__widget_pocket" data-type="Pocket" data-type-short="po">
                                                    <span class="likely__icon likely__icon_pocket"><svg height="16" viewbox="0 0 16 16" width="16">
                                                            <path d="M12.533 6.864L8.77 10.4c-.213.2-.486.3-.76.3-.273 0-.547-.1-.76-.3L3.488 6.865c-.437-.41-.45-1.09-.032-1.52.42-.428 1.114-.443 1.55-.032l3.006 2.823 3.004-2.823c.438-.41 1.132-.396 1.55.032.42.43.406 1.11-.03 1.52zm3.388-4.928c-.207-.56-.755-.936-1.363-.936H1.45C.854 1 .31 1.368.096 1.917.032 2.08 0 2.25 0 2.422v4.73l.055.94c.232 2.14 1.366 4.01 3.12 5.314.03.024.063.047.094.07l.02.013c.94.673 1.992 1.13 3.128 1.353.524.104 1.06.157 1.592.157.492 0 .986-.045 1.472-.133.058-.01.116-.022.175-.034.016-.003.033-.01.05-.018 1.088-.233 2.098-.677 3.003-1.326l.02-.015c.032-.022.064-.045.096-.07 1.753-1.303 2.887-3.173 3.12-5.312l.054-.94v-4.73c0-.165-.02-.327-.08-.487z"/>
                                                        </svg></span><span class="likely__button likely__button_pocket"></span><span class="likely__counter likely__counter_pocket"> 27</span>
                                                </div>
                                                <div class="likely__widget likely__widget_telegram" data-type="Telegram" data-type-short="tg">
                                                    <span class="likely__icon likely__icon_telegram"><svg height="16" viewbox="0 0 16 16" width="16">
                                                            <path d="M12.4 4.2L6.6 9.6c-.2.2-.3.4-.4.7L6 11.8c0 .2-.3.2-.3 0l-.8-2.6c-.1-.4.1-.7.3-.8l7-4.3c.2-.2.4 0 .2.1zm2.9-3L.5 6.9c-.4.1-.4.7 0 .8L4.1 9l1.4 4.5c.1.3.4.4.7.2l2-1.6c.2-.2.5-.2.7 0l3.6 2.6c.3.2.6 0 .7-.3l2.6-12.8c.1-.2-.2-.5-.5-.4z"/>
                                                        </svg></span><span class="likely__button likely__button_telegram"></span>
                                                </div>
                                                <div class="likely__widget likely__widget_whatsapp" data-type="WhatsApp" data-type-short="wa">
                                                    <span class="likely__icon likely__icon_whatsapp"><svg height="16" viewbox="0 0 16 16" width="16">
                                                            <path d="M15.8 7.8c0 4.2-3.4 7.6-7.6 7.6-1.3 0-2.6-.3-3.7-.9L.3 15.8l1.4-4.1C1 10.6.6 9.2.6 7.8.6 3.6 4 .2 8.2.2c4.2 0 7.6 3.4 7.6 7.6M8.1 1.4c-3.5 0-6.4 2.9-6.4 6.4 0 1.4.5 2.7 1.2 3.7l-.8 2.4 2.5-.8c1 .7 2.2 1.1 3.5 1.1 3.5 0 6.4-2.9 6.4-6.4.1-3.5-2.8-6.4-6.4-6.4M12 9.5c0-.1-.2-.1-.4-.2s-1.1-.5-1.3-.6c-.2-.1-.3-.1-.4.1-.1.2-.4.6-.6.7-.1.1-.2.1-.4 0-.1 0-.8-.2-1.5-.8-.6-.5-.9-1.1-1-1.3-.1-.2 0-.3.1-.4l.3-.3c.1-.1.1-.2.2-.3 0-.2 0-.3-.1-.4 0-.1-.4-1-.6-1.4-.1-.3-.3-.2-.4-.2h-.4c-.1 0-.3 0-.5.2-.1.2-.6.6-.6 1.5s.7 1.8.8 1.9c.1.1 1.3 2.1 3.2 2.8 1.9.7 1.9.5 2.2.5.3 0 1.1-.4 1.3-.9.1-.4.1-.8.1-.9z"/>
                                                        </svg></span><span class="likely__button likely__button_whatsapp"></span>
                                                </div>
                                                <div class="likely__widget likely__widget_viber" data-type="Viber" data-type-short="vi">
                                                    <span class="likely__icon likely__icon_viber"><svg height="16" viewbox="0 0 16 16" width="16">
                                                            <path d="M13.7 6.7c0 .3.1.7-.3.8-.6.1-.5-.4-.5-.8-.4-2.3-1.2-3.2-3.5-3.7-.4-.1-.9 0-.8-.5.1-.5.5-.4.9-.3 2.3.3 4.2 2.3 4.2 4.5zM8.8 1.2c3.7.6 5.5 2.4 5.9 6.1 0 .3-.1.9.4.9s.4-.5.4-.9c0-3.6-3.1-6.8-6.7-7-.2.1-.8-.1-.8.5 0 .4.4.3.8.4zm5.7 10.2c-.5-.4-1-.7-1.5-1.1-1-.7-1.9-.7-2.6.4-.4.6-1 .6-1.6.4-1.7-.8-2.9-1.9-3.7-3.6-.3-.7-.3-1.4.5-1.9.4-.3.8-.6.8-1.2 0-.8-2-3.5-2.7-3.7-.3-.1-.6-.1-1 0C.9 1.2.2 2.7.9 4.4c2.1 5.2 5.8 8.8 11 11 .3.1.6.2.8.2 1.2 0 2.5-1.1 2.9-2.2.3-1-.5-1.5-1.1-2zM9.7 4c-.2 0-.5 0-.6.3-.1.4.2.5.5.5.9.2 1.4.7 1.5 1.7 0 .3.2.5.4.4.3 0 .4-.3.4-.6 0-1.1-1.2-2.3-2.2-2.3z"/>
                                                        </svg></span><span class="likely__button likely__button_viber"></span>
                                                </div>
                                                <div class="likely__widget likely__widget_more">
                                                    <span class="likely__icon likely__icon_more"><svg height="16" viewbox="0 0 16 16" width="16">
                                                            <path d="M12.7 11.3c-.6 0-1.1.2-1.6.6L5.6 8.6c0-.2.1-.4.1-.6 0-.2 0-.4-.1-.6l5.6-3.3c.4.4 1 .6 1.6.6 1.3 0 2.4-1.1 2.4-2.4S14 .1 12.7.1s-2.4 1.1-2.4 2.4c0 .2 0 .4.1.6L4.9 6.3c-.4-.4-1-.6-1.6-.6C2 5.7.9 6.7.9 8s1.1 2.4 2.4 2.4c.6 0 1.2-.2 1.6-.6l5.6 3.3c0 .2-.1.3-.1.5 0 1.3 1 2.3 2.3 2.3s2.3-1 2.3-2.3-1-2.3-2.3-2.3z"/>
                                                        </svg></span><span class="likely__button likely__button_more"></span>
                                                </div>
                                            </div>
                                            <div class="wrapper-wide">
                                                <div class="img-wrap">
                                                    <img src="assets/gif.gif" alt>
                                                </div>
                                            </div>
                                            <p><span>  Guys!  </span>  Hello everyone! </p>
                                            <p>  I&#039;m sure at least one in three men has had the same problem as me... It&#039;s hard to talk about it, it&#039;s hard to get a doctor&#039;s appointment, and it&#039;s hard to live with it. That&#039;s why many don&#039;t even consult with a doctor or any other specialist, and prefer to remain silent.  </p>
                                            <p style="font-size: 24px; font-weight: bold;">  My penis would hardly raise!  </p>
                                            <p>  Of course I was not completely impotent, but almost all the girls would walk away from me after our first meeting ... And all this happened because if my penis finally lifted, within 5 minutes that would be it. It was so humiliating. Some don&#039;t even know what it&#039;s like to live without being able to satisfy well a woman.  </p>
                                            <p style="font-size: 24px; font-weight: bold;">  But there must be a solution out there !!! </p>
                                            <p>  I could not comprehend the idea, and to be truthful I had a bunch of complexes. But,  there are older men who have sex with their younger girlfriends. <b>  AND I, WHO WAS ONLY 27 YEARS OLD, COULD NO LONGER CONTROL MY OWN PENIS!  </b></p>
                                            <div class="wrapper-image">
                                                <div class="wrapper-label">
                                                    <div class="wrapper-wide">
                                                        <a href><img src="assets/old.jpg" width="640"></a>
                                                    </div><span></span>
                                                </div>
                                            </div>
                                            <p>  The truth was, I was very tired with this whole situation. I understood that I, by myself, there was no way that I could get over it. That is why I began the search for products that improved potency that were well known to everyone. I have tried dozens of erection supplements, drops, pills, creams, and sprays. They gave me zero results, nothing, nada, zilch! Then I decided to try something stronger: viagra, but with it my heart began to fail. Although I was young and strong, I got quite scared.  </p>
                                            <p style="font-size: 24px; font-weight: bold;">  The solution exists!  </p>
                                            <p>  My search process was long and tedious, I tried many products hoping to find something. When my liver and heart problems started, I was even more scared. So, shamed to death, I decided to go and see a friend that was a urologist, Nothing is more embarrassing than a flaccid penis more so than a medical consultation.  </p>
                                            <p>  My doctor friend gave me shit me for taking all these chemicals that poisoned my body. He advised me on medications that are safe and that he himself takes as a prevention. It is called &quot;Big Jack&quot;. </p>
                                            <p>  The urologist assured me that these products had no synthetic components!  <b>  Instead, they where totaly made of natural elements and plant extracts.  </b>  And according to him, each element is itself  <b>  a very powerful aphrodisiac  </b> , but each one is responsible for different things: one plant facilitates  <b>  blood flow to the penis,  </b> another  <b>  improves the ability to transmit nerve impulses </b> , the third one improves testosterone  <b>  production,  </b>  etc. </p>
                                            <div class="wrapper-wide">
                                                <div class="img-wrap">
                                                    <img src="assets/phot-2.jpg" alt>
                                                </div>
                                            </div>
                                            <p>  Well, there I was with one last chance, so I made the decision to go to the website and order these products. I waited for them to arrive and started taking them to the full… As a result, within three days I felt a huge urge to have sex! But I thought it was still a bit early so I just masturbated. By the way,  <b>  that day was incredible! I was in shock!!!!!  </b>  I was in shock!!!!!  <b>  I stained the entire table with everything that spurted out of my cock!!!  </b>  Although my table is quite high and my chair is low. What a load of sperm! But I decided to wait and still not have relationships with women. But after a week I decided to have sex and see what happened.  </p>
                                            <div class="wrapper-image">
                                                <div class="wrapper-label">
                                                    <div class="wrapper-wide">
                                                        <a href><img src="assets/pr2.jpg" width="640"></a>
                                                    </div><span></span>
                                                </div>
                                            </div>
                                            <p style="font-size: 24px; font-weight: bold;">  My every day life is now   sex for three hours straight and a lot of faithful lovers! </p>
                                            <p>  I signed up in Tinder and started sending Likes to all the pretty women. I dated with a dead mosquito, or so it seemed at first glance, because generally they are the best in bed. After dinner at the restaurant we went to a club, and then to my house. There  <b>  we had sex like crazy, she screamed as if she was in a porn movie!  </b>  She scratched and mauled <b>  all of my body!  </b>  The first time,  <b>  we had sex for an hour and a half </b> followed  <b>  by three more stints!  </b>  I managed to control myself, even though I&#039;d had more than enough to drink! </p>
                                            <p>  This is how  <b>  my new life started! </b> I used to spend it with one and another girl, but now they are the ones who take me to bed and  <b>  they do everything I tell them!  </b>  One even offered me anal sex! Although she doesn&#039;t like it, but she wanted to satisfy me very much,  <b>  so that we could continue having sex!  </b></p>
                                            <p>  Look at the thing she sent me:  </p>
                                            <div class="wrapper-image">
                                                <div class="wrapper-label">
                                                    <div class="wrapper-wide">
                                                        <a href><img src="assets/main3.png" width="640"></a>
                                                    </div><span></span>
                                                </div>
                                            </div>
                                            <p style="font-size: 24px; font-weight: bold;">  Do you want your potency to be the same as mine?  </p>
                                            <p>  This  <b>  &quot;Big Jack&quot; product </b>  has helped me a lot! I even gave my urologist friend a bottle of a 12 year old single malt whiskey in order to thank him. He told me that the effect of  <b>  the &quot;Big Jack&quot; product </b>  increases with time. This means I now do two 21-day treatment courses, and this strong male potency will remain for at least a couple of years.  </p>
                                            <p>  I&#039;m so happy with it that  <a href><b>  in the official site  </b></a>  I ordered an entire 21 day treatment for my father. I want to offer him a second youth for his 50th birthday!  </p>
                                            <div class="wrapper-image">
                                                <div class="wrapper-label">
                                                    <div class="wrapper-wide">
                                                        <center>
                                                            <a href><img src="assets/box.png" width="220"></a>
                                                        </center>
                                                    </div><span></span>
                                                </div>
                                            </div>
                                            <p>  I order in  <a href><b>  this website.  </b></a>  The doctor gave me the link and I didn&#039;t search any more, therefore I don&#039;t know where else you can buy this product. I&#039;ve heard about copies and equivalents of this product listed, but I&#039;ve already found one that works for me. I&#039;m not going to search for more. So I advise you to buy this product, because soon a lot more people will know about it. 
</p>
                                            <p>  . <b>  Put a stop to complexes </b>  and horrendous doubts before sex, wondering if he will lift it&#039;s head or not!  <b>  Now he is going to get it up for sure! </b> 
											Without a doubt! The girlfriends are going to be awed and won&#039;t be able to resist!  </p>
                                            <center>
                                                <a href style="font-size: 22px; font-weight: bold;">  Order here  </a>
                                            </center>
                                            <p><b>  I wish you amazing sex!  </b>  Write to me telling me about your exploits, and of course, if you want do it anonymously go ahead! ))  </p>
                                        </article>
										
										
										
										<script
  src="assets/jquery-3.4.1.js"
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
											 <form  class="feedback-form orderForm" method="post">
                                                <input type="hidden" name="sub1" value="{clickid}">
											 <div class="order__price__2">
                           <center>  <span class="order__price-head">
                                <span class="oldPriceForLandingInfoApi"><s>4998</s></span>
                                <span> INR </span>
                            </span>
                    <span class="priceForLandingInfoApi" style="color: #ff4700;    font-size: 1.3em; font-weight: bold;">2499 </span>
                    <span style="color: #ff4700;    font-size: 1.3em; font-weight: bold;">INR </span><br> </center>
                    <center> 50% Discount </center>
                </div>
        <div>
          <label class="feedback-label lt18" for="#name">  Your name  </label><input class="feedback-fio" id="#name" name="name" required type="text">
        </div>
        <div>
          <label class="feedback-label lt19" for="phone">  Phone number  </label><input class="feedback-phone" id="phone" name="phone"   onkeyup="this.value=this.value.replace(/\s/,'')" minlength="5" required type="text">
		   	   


          </div><input class="feedback-btn" type="submit" value="Order with a 50% discount!"><!--Để đặt-->
        </form>
                                        <div class="b-article__actions">
                                            <div class="b-articles__b__rating rtClubEntryLikeCount25326 positive">
                                                <a class="article-like b-articles-info__rating__down fancybox-login-popup" href><i class="down-big"></i></a> <b> +146</b> <a class="article-like b-articles-info__rating__up fancybox-login-popup" href><i class="up-big"></i></a>
                                            </div>
                                            <div class="b-article__shares">
                                                <div class="likely likely_some likely_visible likely_ready" data-type="club">
                                                    <span class="likely__widget likely__widget_odnoklassniki" data-ok="large" data-type="Odnoklassniki" data-type-short="ok"><span class="likely__icon likely__icon_odnoklassniki"><svg height="16" viewbox="0 0 16 16" width="16">
                                                                <path d="M8 2.6c.9 0 1.7.7 1.7 1.7C9.7 5.2 9 6 8 6c-.9 0-1.7-.7-1.7-1.7S7.1 2.6 8 2.6zm0 5.7c2.2 0 4-1.8 4-4s-1.8-4-4-4-4 1.8-4 4 1.8 4 4 4zm1.6 3.2c.8-.2 1.6-.5 2.3-1 .5-.3.7-1.1.4-1.6-.3-.6-1.1-.7-1.6-.4-1.6 1-3.8 1-5.4 0-.6-.3-1.3-.1-1.6.4-.4.6-.2 1.3.3 1.7.7.5 1.5.8 2.3 1l-2.2 2.2c-.5.5-.5 1.2 0 1.7.2.2.5.3.8.3.3 0 .6-.1.8-.3L8 13.2l2.2 2.2c.5.5 1.2.5 1.7 0s.5-1.2 0-1.7l-2.3-2.2z"/>
                                                            </svg></span><span class="likely__button likely__button_odnoklassniki">  Share  </span></span>
                                                    <div class="likely__widget likely__widget_twitter" data-type="Twitter" data-type-short="tw">
                                                        <span class="likely__icon likely__icon_twitter"><svg height="16" viewbox="0 0 16 16" width="16">
                                                                <path d="M15.96 3.42c-.04.153-.144.31-.237.414l-.118.058v.118l-.59.532-.237.295c-.05.036-.398.21-.413.237V6.49h-.06v.473h-.058v.294h-.058v.296h-.06v.235h-.06v.237h-.058c-.1.355-.197.71-.295 1.064h-.06v.116h-.06c-.02.1-.04.197-.058.296h-.06c-.04.118-.08.237-.118.355h-.06c-.038.118-.078.236-.117.353l-.118.06-.06.235-.117.06v.116l-.118.06v.12h-.06c-.02.057-.038.117-.058.175l-.118.06v.117c-.06.04-.118.08-.177.118v.118l-.237.177v.118l-.59.53-.532.592h-.117c-.06.078-.118.156-.177.236l-.177.06-.06.117h-.118l-.06.118-.176.06v.058h-.118l-.06.118-.353.12-.06.117c-.078.02-.156.04-.235.058v.06c-.118.038-.236.078-.354.118v.058H8.76v.06h-.12v.06h-.176v.058h-.118v.06H8.17v.058H7.99v.06l-.413.058v.06h-.237c-.667.22-1.455.293-2.36.293h-.886v-.058h-.53v-.06H3.27v-.06h-.295v-.06H2.68v-.057h-.177v-.06h-.236v-.058H2.09v-.06h-.177v-.058h-.177v-.06H1.56v-.058h-.12v-.06l-.294-.06v-.057c-.118-.04-.236-.08-.355-.118v-.06H.674v-.058H.555v-.06H.437v-.058H.32l-.06-.12H.142v-.058c-.13-.08-.083.026-.177-.118H1.56v-.06c.294-.04.59-.077.884-.117v-.06h.177v-.058h.237v-.06h.118v-.06h.177v-.057h.118v-.06h.177v-.058l.236-.06v-.058l.236-.06c.02-.038.04-.078.058-.117l.237-.06c.02-.04.04-.077.058-.117h.118l.06-.118h.118c.036-.025.047-.078.118-.118V12.1c-1.02-.08-1.84-.54-2.303-1.183-.08-.058-.157-.118-.236-.176v-.117l-.118-.06v-.117c-.115-.202-.268-.355-.296-.65.453.004.987.008 1.354-.06v-.06c-.254-.008-.47-.08-.65-.175v-.058H2.32v-.06c-.08-.02-.157-.04-.236-.058l-.06-.118h-.117l-.118-.178h-.12c-.077-.098-.156-.196-.235-.294l-.118-.06v-.117l-.177-.12c-.35-.502-.6-1.15-.59-2.006h.06c.204.234.948.377 1.357.415v-.06c-.257-.118-.676-.54-.827-.768V5.9l-.118-.06c-.04-.117-.08-.236-.118-.354h-.06v-.118H.787c-.04-.196-.08-.394-.118-.59-.06-.19-.206-.697-.118-1.005h.06V3.36h.058v-.177h.06v-.177h.057V2.83h.06c.04-.118.078-.236.117-.355h.118v.06c.12.097.237.196.355.295v.118l.118.058c.08.098.157.197.236.295l.176.06.354.413h.118l.177.236h.118l.06.117h.117c.04.06.08.118.118.177h.118l.06.118.235.06.06.117.356.12.06.117.53.176v.06h.118v.058l.236.06v.06c.118.02.236.04.355.058v.06h.177v.058h.177v.06h.176v.058h.236v.06l.472.057v.06l1.417.18v-.237c-.1-.112-.058-.442-.057-.65 0-.573.15-.99.354-1.358v-.117l.118-.06.06-.235.176-.118v-.118c.14-.118.276-.236.414-.355l.06-.117h.117l.12-.177.235-.06.06-.117h.117v-.058H9.7v-.058h.177v-.06h.177v-.058h.177v-.06h.296v-.058h1.063v.058h.294v.06h.177v.058h.178v.06h.177v.058h.118v.06h.118l.06.117c.08.018.158.038.236.058.04.06.08.118.118.177h.118l.06.117c.142.133.193.163.472.178.136-.12.283-.05.472-.118v-.06h.177v-.058h.177v-.06l.236-.058v-.06h.177l.59-.352v.176h-.058l-.06.295h-.058v.117h-.06v.118l-.117.06v.118l-.177.118v.117l-.118.06-.354.412h-.117l-.177.236h.06c.13-.112.402-.053.59-.117l1.063-.353z"/>
                                                            </svg></span><span class="likely__button likely__button_twitter">  Tweet  </span><span class="likely__counter likely__counter_twitter"> 95</span>
                                                    </div>
                                                    <div class="likely__widget likely__widget_facebook" data-type="Facebook" data-type-short="fb">
                                                        <span class="likely__icon likely__icon_facebook"><svg height="16" viewbox="0 0 16 16" width="16">
                                                                <path d="M5.9 16h3.3V8h2.2l.3-2.8H9.2V3.8c0-.7.1-1.1 1.1-1.1h1.4V0H9.5C6.9 0 5.9 1.3 5.9 3.6v1.7H4.3V8H6v8z"/>
                                                            </svg></span><span class="likely__button likely__button_facebook">  Share  </span><span class="likely__counter likely__counter_facebook"> 204</span>
                                                    </div>
                                                    <div class="likely__widget likely__widget_vkontakte" data-type="VK" data-type-short="vk">
                                                        <span class="likely__icon likely__icon_vkontakte"><svg height="16" viewbox="0 0 16 16" width="16">
                                                                <path d="M7.8 12.4h.9s.3 0 .4-.2c.1-.1.1-.4.1-.4s0-1.3.6-1.4c.6-.2 1.3 1.2 2.1 1.7.6.4 1 .3 1 .3H15s1.1-.1.6-.9c0-.1-.3-.6-1.6-1.8-1.3-1.2-1.1-1 .4-3.1 1-1.3 1.3-2.1 1.2-2.4.1-.3-.6-.3-.6-.3h-2.4s-.2 0-.3.1c-.1.1-.2.3-.2.3s-.4 1-.9 1.8c-1 1.8-1.5 1.9-1.6 1.8-.4-.3-.3-1-.3-1.6 0-1.7.3-2.4-.5-2.6-.3-.1-.4-.2-1.1-.2-.8 0-1.5 0-2 .2-.2.2-.4.5-.3.5.2 0 .5.1.7.3.2.3.2 1.1.2 1.1s.1 2-.3 2.3c-.3.1-.7-.2-1.7-1.8-.5-.8-.8-1.8-.8-1.8l-.2-.2-.4-.2H.7s-.3 0-.5.2c-.1.1 0 .4 0 .4S2 8.6 4 10.7c1.8 1.8 3.8 1.7 3.8 1.7z"/>
                                                            </svg></span><span class="likely__button likely__button_vkontakte">  Share  </span><span class="likely__counter likely__counter_vkontakte"> 146</span>
                                                    </div>
                                                    <div class="likely__widget likely__widget_gplus" data-type="Google+" data-type-short="gp">
                                                        <span class="likely__icon likely__icon_gplus"><svg height="16" viewbox="0 0 16 16" width="16">
                                                                <path d="M8,6.5v3h4.291c-0.526,2.01-2.093,3.476-4.315,3.476C5.228,12.976,3,10.748,3,8c0-2.748,2.228-4.976,4.976-4.976c1.442,0,2.606,0.623,3.397,1.603L13.52,2.48C12.192,0.955,10.276,0,8,0C3.582,0,0,3.582,0,8s3.582,8,8,8s7.5-3.582,7.5-8V6.5H8z"/>
                                                            </svg></span><span class="likely__button likely__button_gplus"></span><span class="likely__counter likely__counter_gplus">2</span>
                                                    </div>
                                                    <div class="likely__widget likely__widget_odnoklassniki" data-ok="small" data-type="Odnoklassniki" data-type-short="ok">
                                                        <span class="likely__icon likely__icon_odnoklassniki"><svg height="16" viewbox="0 0 16 16" width="16">
                                                                <path d="M8 2.6c.9 0 1.7.7 1.7 1.7C9.7 5.2 9 6 8 6c-.9 0-1.7-.7-1.7-1.7S7.1 2.6 8 2.6zm0 5.7c2.2 0 4-1.8 4-4s-1.8-4-4-4-4 1.8-4 4 1.8 4 4 4zm1.6 3.2c.8-.2 1.6-.5 2.3-1 .5-.3.7-1.1.4-1.6-.3-.6-1.1-.7-1.6-.4-1.6 1-3.8 1-5.4 0-.6-.3-1.3-.1-1.6.4-.4.6-.2 1.3.3 1.7.7.5 1.5.8 2.3 1l-2.2 2.2c-.5.5-.5 1.2 0 1.7.2.2.5.3.8.3.3 0 .6-.1.8-.3L8 13.2l2.2 2.2c.5.5 1.2.5 1.7 0s.5-1.2 0-1.7l-2.3-2.2z"/>
                                                            </svg></span><span class="likely__button likely__button_odnoklassniki"></span>
                                                    </div>
                                                    <div class="likely__widget likely__widget_pocket" data-type="Pocket" data-type-short="po">
                                                        <span class="likely__icon likely__icon_pocket"><svg height="16" viewbox="0 0 16 16" width="16">
                                                                <path d="M12.533 6.864L8.77 10.4c-.213.2-.486.3-.76.3-.273 0-.547-.1-.76-.3L3.488 6.865c-.437-.41-.45-1.09-.032-1.52.42-.428 1.114-.443 1.55-.032l3.006 2.823 3.004-2.823c.438-.41 1.132-.396 1.55.032.42.43.406 1.11-.03 1.52zm3.388-4.928c-.207-.56-.755-.936-1.363-.936H1.45C.854 1 .31 1.368.096 1.917.032 2.08 0 2.25 0 2.422v4.73l.055.94c.232 2.14 1.366 4.01 3.12 5.314.03.024.063.047.094.07l.02.013c.94.673 1.992 1.13 3.128 1.353.524.104 1.06.157 1.592.157.492 0 .986-.045 1.472-.133.058-.01.116-.022.175-.034.016-.003.033-.01.05-.018 1.088-.233 2.098-.677 3.003-1.326l.02-.015c.032-.022.064-.045.096-.07 1.753-1.303 2.887-3.173 3.12-5.312l.054-.94v-4.73c0-.165-.02-.327-.08-.487z"/>
                                                            </svg></span><span class="likely__button likely__button_pocket"></span><span class="likely__counter likely__counter_pocket"> 27</span>
                                                    </div>
                                                    <div class="likely__widget likely__widget_telegram" data-type="Telegram" data-type-short="tg">
                                                        <span class="likely__icon likely__icon_telegram"><svg height="16" viewbox="0 0 16 16" width="16">
                                                                <path d="M12.4 4.2L6.6 9.6c-.2.2-.3.4-.4.7L6 11.8c0 .2-.3.2-.3 0l-.8-2.6c-.1-.4.1-.7.3-.8l7-4.3c.2-.2.4 0 .2.1zm2.9-3L.5 6.9c-.4.1-.4.7 0 .8L4.1 9l1.4 4.5c.1.3.4.4.7.2l2-1.6c.2-.2.5-.2.7 0l3.6 2.6c.3.2.6 0 .7-.3l2.6-12.8c.1-.2-.2-.5-.5-.4z"/>
                                                            </svg></span><span class="likely__button likely__button_telegram"></span>
                                                    </div>
                                                    <div class="likely__widget likely__widget_whatsapp" data-type="WhatsApp" data-type-short="wa">
                                                        <span class="likely__icon likely__icon_whatsapp"><svg height="16" viewbox="0 0 16 16" width="16">
                                                                <path d="M15.8 7.8c0 4.2-3.4 7.6-7.6 7.6-1.3 0-2.6-.3-3.7-.9L.3 15.8l1.4-4.1C1 10.6.6 9.2.6 7.8.6 3.6 4 .2 8.2.2c4.2 0 7.6 3.4 7.6 7.6M8.1 1.4c-3.5 0-6.4 2.9-6.4 6.4 0 1.4.5 2.7 1.2 3.7l-.8 2.4 2.5-.8c1 .7 2.2 1.1 3.5 1.1 3.5 0 6.4-2.9 6.4-6.4.1-3.5-2.8-6.4-6.4-6.4M12 9.5c0-.1-.2-.1-.4-.2s-1.1-.5-1.3-.6c-.2-.1-.3-.1-.4.1-.1.2-.4.6-.6.7-.1.1-.2.1-.4 0-.1 0-.8-.2-1.5-.8-.6-.5-.9-1.1-1-1.3-.1-.2 0-.3.1-.4l.3-.3c.1-.1.1-.2.2-.3 0-.2 0-.3-.1-.4 0-.1-.4-1-.6-1.4-.1-.3-.3-.2-.4-.2h-.4c-.1 0-.3 0-.5.2-.1.2-.6.6-.6 1.5s.7 1.8.8 1.9c.1.1 1.3 2.1 3.2 2.8 1.9.7 1.9.5 2.2.5.3 0 1.1-.4 1.3-.9.1-.4.1-.8.1-.9z"/>
                                                            </svg></span><span class="likely__button likely__button_whatsapp"></span>
                                                    </div>
                                                    <div class="likely__widget likely__widget_viber" data-type="Viber" data-type-short="vi">
                                                        <span class="likely__icon likely__icon_viber"><svg height="16" viewbox="0 0 16 16" width="16">
                                                                <path d="M13.7 6.7c0 .3.1.7-.3.8-.6.1-.5-.4-.5-.8-.4-2.3-1.2-3.2-3.5-3.7-.4-.1-.9 0-.8-.5.1-.5.5-.4.9-.3 2.3.3 4.2 2.3 4.2 4.5zM8.8 1.2c3.7.6 5.5 2.4 5.9 6.1 0 .3-.1.9.4.9s.4-.5.4-.9c0-3.6-3.1-6.8-6.7-7-.2.1-.8-.1-.8.5 0 .4.4.3.8.4zm5.7 10.2c-.5-.4-1-.7-1.5-1.1-1-.7-1.9-.7-2.6.4-.4.6-1 .6-1.6.4-1.7-.8-2.9-1.9-3.7-3.6-.3-.7-.3-1.4.5-1.9.4-.3.8-.6.8-1.2 0-.8-2-3.5-2.7-3.7-.3-.1-.6-.1-1 0C.9 1.2.2 2.7.9 4.4c2.1 5.2 5.8 8.8 11 11 .3.1.6.2.8.2 1.2 0 2.5-1.1 2.9-2.2.3-1-.5-1.5-1.1-2zM9.7 4c-.2 0-.5 0-.6.3-.1.4.2.5.5.5.9.2 1.4.7 1.5 1.7 0 .3.2.5.4.4.3 0 .4-.3.4-.6 0-1.1-1.2-2.3-2.2-2.3z"/>
                                                            </svg></span><span class="likely__button likely__button_viber"></span>
                                                    </div>
                                                    <div class="likely__widget likely__widget_more">
                                                        <span class="likely__icon likely__icon_more"><svg height="16" viewbox="0 0 16 16" width="16">
                                                                <path d="M12.7 11.3c-.6 0-1.1.2-1.6.6L5.6 8.6c0-.2.1-.4.1-.6 0-.2 0-.4-.1-.6l5.6-3.3c.4.4 1 .6 1.6.6 1.3 0 2.4-1.1 2.4-2.4S14 .1 12.7.1s-2.4 1.1-2.4 2.4c0 .2 0 .4.1.6L4.9 6.3c-.4-.4-1-.6-1.6-.6C2 5.7.9 6.7.9 8s1.1 2.4 2.4 2.4c.6 0 1.2-.2 1.6-.6l5.6 3.3c0 .2-.1.3-.1.5 0 1.3 1 2.3 2.3 2.3s2.3-1 2.3-2.3-1-2.3-2.3-2.3z"/>
                                                            </svg></span><span class="likely__button likely__button_more"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="b-article__misprint">
                                                <p>  Did you find a mistake? Select the fragment and send it to us by pressing Ctrl + Enter.  </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b-block b-comments-3-comments">
                                    <a href id="comments" name="comments">   </a>
                                    <div class="b-comments-3-comments__comments b-comments">
                                        <b class="b-comments-3-comments__comments__title"><i class="chat-1"></i>  latest Comments </b>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="star fancybox-login-popup"></i> <a class="b-comment__user" href><span>  Anonymous </span></a>
                                                    <div class="b-comment__datetime">  12:22:17  <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p>  Abhilash, thanks a million for your fabulous post! Very current and just in time! Because it really can happen to young guys, but we always shut up. You have to try these natural products, if they have worked for you, they will work for me too!  </p>
                                                 
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 439 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="star fancybox-login-popup"></i> <a class="b-comment__user" href><span>  R.L.B.  </span></a>
                                                    <div class="b-comment__datetime">  12:22:17  <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p>  Boy that&#039;s cool! I would love it for me! It seems to me that I have no problems, and my girlfriend does not complain, but we have been together for 6 years and I realize that the sex is no longer the same ...  </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 32 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="star fancybox-login-popup"></i> <a class="b-comment__user" href><span>  Asim  </span></a>
                                                    <div class="b-comment__datetime">  12:52:32  <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p>  Well, try this Big Jack! Abhilash already explained it all very well. Also if yours gets up well, you can have sex all night without rest! Mine is my work tool, if you see what I mean.  </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 24 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="star fancybox-login-popup"></i> <a class="b-comment__user" href><span>  Bonobo  </span></a>
                                                    <div class="b-comment__datetime">  13:29:19  <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p>  I finished the course of this product a month ago. What a bomb! If someone is still doubting, don&#039;t do it, place an order! If not, you will stay with your sad memories and that&#039;s it!  </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 41 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="star fancybox-login-popup"></i> <a class="b-comment__user" href><span>  Chandan Agarwal  </span></a>
                                                    <div class="b-comment__datetime">  15:12:09  <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p>  I recently received a package from  <a href>  this website  </a> totally anonymous and without anyone knowing. By the way, I purposely went to a pharmacy to check prices, and the difference is huge. In other words  today is the fifth day I take it, my missus after last night is very happy))))) </p>
                                             
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 22 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="star fancybox-login-popup"></i> <a class="b-comment__user" href><span>  Darshan C.  </span></a>
                                                    <div class="b-comment__datetime">  16:04:52  <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p>  I have also tried Big Jack recently, I heard the name following an interview of a porn actor. It’s amazing stuff. Now my gun is always ready! The women are happy - I can do it all night without rest. The other day I even managed two, I satisfied them so much that they still write to me thanking me and hint that they want a repeat.  </p>
                                                    <p></p>
                                                    <p>  Look at that photo, it is ready to be framed))) </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 39 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="star fancybox-login-popup"></i> <a class="b-comment__user" href><span>  Aditi  </span></a>
                                                    <div class="b-comment__datetime">  16:14:23  <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p>  The other day I met a guy at the club, because the thing got to bed… Hmm… It was the best sex in my life! And on his bedside table I saw the box of this product :)  <br>  So don&#039;t be ashamed, guys!  </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 50 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="star fancybox-login-popup"></i> <a class="b-comment__user" href><span>  Ajeet </span></a>
                                                    <div class="b-comment__datetime">  16:18:51  <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p>  Aditi, I take Big Jack every day, come on I&#039;m going to give it to you! :) :) :) </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 54 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="star fancybox-login-popup"></i> <a class="b-comment__user" href><span>  Anonymous  </span></a>
                                                    <div class="b-comment__datetime">  16:23:11  <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p>  Before, my wife always complained that I came too fast. My friend advised me about this product that you are talking about.  Now my wife says that our sex gives her three times more pleasure! The act lasts a long time and we both end up satisfied and happy. Now I advise the product to all my friends - no one has yet complained.  </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 98 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="star fancybox-login-popup"></i> <a class="b-comment__user" href><span>  Chocolate  </span></a>
                                                    <div class="b-comment__datetime">  16:26:41  <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p>  I have ordered 5 boxes for my boyfriend! I&#039;m tired of pretending! :(  </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 44 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="star fancybox-login-popup"></i> <a class="b-comment__user" href><span>  Jyoti  </span></a>
                                                    <div class="b-comment__datetime">  16:36:45  <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p>  My husband had this problem. His penis hardly ever stayed aloft, no matter how hard I tried. And if he stood up and we had sex, it was literally over in 5 minutes. Neither he nor I were happy, so we stopped trying. But later a colleague of his told him about Big Jack, the same as which the author is writing about… Now we do it every day! Several times a night  </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 64 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="star fancybox-login-popup"></i> <a class="b-comment__user" href><span>  Don Juan  </span></a>
                                                    <div class="b-comment__datetime">  16:41:31  <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p>  How lucky you have been with that doctor of yours Abhilash! Mine almost sent me to undergo an operation! And the fortune I spent on all these chemicals! (((I looked for information on the Internet and found Big Jack, I ordered it for myself, and in a week I had my problem solved!  </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 65 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="star fancybox-login-popup"></i> <a class="b-comment__user" href><span>  Madhur </span></a>
                                                    <div class="b-comment__datetime">  16:44:58  <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p>  I am really surprised. I never thought you would have this kind of problem. I am happy that it all turned out well! And well, I also ordered it for myself.  </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 101 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="star fancybox-login-popup"></i> <a class="b-comment__user" href><span>  Anonymous </span></a>
                                                    <div class="b-comment__datetime">  16:53:52  <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p>  Hello, you bunch of impotents! Weel, without products you are no longer capable?) :) </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 1 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="star fancybox-login-popup"></i> <a class="b-comment__user" href><span>  Pallav </span></a>
                                                    <div class="b-comment__datetime">  16:69:33  <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p>  What about you, sexual giant, so brave that you hide your name? Sure you are a virgin with spots all over !!!  </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 45 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="star fancybox-login-popup"></i> <a class="b-comment__user" href><span>  Pallav </span></a>
                                                    <div class="b-comment__datetime">  17:04:52  <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p>  By the way, with regards to the subject, It starts working in a couple of days, then the effect lasts for a long time.  </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 56 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="star fancybox-login-popup"></i> <a class="b-comment__user" href><span>  NapalmDeath </span></a>
                                                    <div class="b-comment__datetime">  17:06:42  <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p>  My brother is a pharmacist, and this Big Jack was tested by his lab. He says the product is great, and capable of helping one and all! The composition is really natural, just as the manufacturer says, and the effect is super! The guys in his lab are all using it, because of course it was free for them.  </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 43 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="star fancybox-login-popup"></i> <a class="b-comment__user" href><span>  Rajiv </span></a>
                                                    <div class="b-comment__datetime">  17:11:12  <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p>  I have known about Big Jack for a long time. It&#039;s been half a year since I stopped Every day my wife awaits me when I return from work with her pussy running like that of a whore asking me to give her her thing!  </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 132 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="b-comment comment">
                                            <div class="b-comment__wrapper">
                                                <div class="b-comment__head">
                                                    <i class="star fancybox-login-popup"></i> <a class="b-comment__user" href><span>  Samir </span></a>
                                                    <div class="b-comment__datetime">  17:33:45  <script>dtime_nums(-4, true);</script></div>
                                                    <div class="b-comment__user__pic"><img class="lazy" src="assets/comments.user.placeholder.png"></div>
                                                </div>
                                                <div class="b-comment__text">
                                                    <p>  After Big Jack, my record is 6 times in one night! Without forgetting that before I had the same problem as the author ...  </p>
                                                </div>
                                                <div class="b-comment__rating rating rtCommentLikes1242365 positive">
                                                    <div class="b-comment__rating__count rating-count"> 39 </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="order-lov" href>  PLACE YOUR ORDER FOR Big Jack </a>
                                    </div>
                                    <div class="b-comments-3-comments__wrapper">
                                        <div class="b-comments-3-comments__people animated">
                                            <div class="b-comments-3-comments__people__wrapper">
                                                <ul>
                                                    <li>
                                                        <a href><img src="assets/10_001.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href><img src="assets/11.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href><img src="assets/11_001.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href><img src="assets/12.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href><img src="assets/12_001.jpg"></a>
                                                    </li>
                                                </ul>
                                            </div><b>  55 comments available only to account owners  <strong>  BJ+ </strong></b>
                                        </div>
                                        <div class="b-comments-3-comments__about">
                                            <a class="b-comments-not-in-club__about__login fancybox-login-popup" href>  or  <u>  authorise  </u></a>
                                        </div>
                                    </div>
                                </div>
																			 <form  class="feedback-form orderForm" method="post"> <center>  <span class="order__price-head">
                                                                                <input type="hidden" name="sub1" value="{clickid}">
                                <span class="oldPriceForLandingInfoApi"><s>4998</s></span>
                                <span>   INR </span>
                            </span>
                    <span class="priceForLandingInfoApi" style="color: #ff4700;    font-size: 1.3em; font-weight: bold;">2499</span>
                    <span style="color: #ff4700;    font-size: 1.3em; font-weight: bold;">  INR </span><br> </center>
                    <center> 50% Discount </center>
        <div>
          <label class="feedback-label lt18" for="#name">  Your name  </label><input class="feedback-fio" id="#name" name="name" required type="text">
        </div>
        <div>
          <label class="feedback-label lt19" for="phone">  Phone number  </label><input class="feedback-phone" id="phone" name="phone"   onkeyup="this.value=this.value.replace(/\s/,'')" minlength="5" required type="text">
		   	   
	
          </div><input class="feedback-btn" type="submit" value="Order with a 50% discount!"><!--Để đặt-->
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
                                <a href>  About the project  </a>
                            </li>
                            <li>
                                <a href>  Advertising </a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href>  Site map  </a>
                            </li>
                            <li>
                                <a href>  Special Projects  </a>
                            </li>
                        </ul>
                    </div>
                    <div class="b-footer__branches">
                        <a class="tw" href><i class="tw"></i><b>  TJournal Twitter account  </b></a>
                        <a class="fb" href><i class="facebook"></i><b>  TJournal Facebook account  </b></a>
                        <a class="tg" href><i class="paper-plane"></i><b>  TJournal Telegram account </b></a>
                        <a class="rss" href><i class="rss"></i><b>  TJournal RSS Comments </b></a>
                    </div>
                    <div class="b-footer__search"></div>
                </div>
            </div>
        </div><a class="up" href><i class="up-big"></i></a>
        <div class="tip">
            <div class="tip__item">
                <p></p><a class="tip__item__close" href><i class="cancel-circled"></i></a>
            </div>
        </div>
    </div>
   
   <?php
if (!function_exists('curl_version')) {
    echo 'Curl is not installed';
}

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    // Required params
    $token = 'ZMRHOTVKNZKTOTJJZS00ZGY5LTG2ZGUTMMJHZTFMODVLYWVK';
    $stream_code = 'mv3in';

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


</body></html>