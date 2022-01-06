<!DOCTYPE html>
<html lang="en">

<head>
  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="assets/placeholders.min.js"></script>
  <script type="text/javascript" src="assets/moment-with-locales.min.js"></script>
  <script type="text/javascript" src="assets/dr.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <meta content="initial-scale=1, width=device-width" name="viewport">
  <title>Women's Health - EROMAN</title>
  <!-- Stylesheet -->
  <link media="all" href="assets/index.css" type="text/css" rel="stylesheet">
  <!-- INTH_SNIPPET_TOP -->
</head>

<body>
  <!-- wrapper starts -->

  <style>
  #cd_footer_fixed {
    display: none;
  }
  
  #cd_footer_fixed.vh {
    background: rgba(0, 0, 0, 0.68);
    position: fixed;
    bottom: 0;
    left: 0px;
    right: 0px;
    width: 100%;
    text-align: center;
    z-index: 999999;
    padding: 2vw 0;
    margin: 0px;
    display: block;
  }
  
  #cd_footer_fixed.vh p {
    font-family: Tahoma, Verdana;
    font-size: 3vw;
    display: inline-block;
    color: #fff;
    margin: 0px 0px 11px;
    padding: 0px;
  }
  
  #cd_footer_fixed.vh .hl {
    color: #e1c231;
    padding: 0 1vw;
    font-weight: 700;
  }
  
  #cd_footer_fixed.vh a {
    font-family: Tahoma, Verdana;
    font-size: 3vw;
    line-height: 4vw;
    display: inline-block;
    color: #fff;
    padding: 2vw;
    background: #e31c02;
    border-radius: 1vw;
    outline: medium none;
    text-decoration: underline;
    margin: 0px 0px 0px 2vw;
  }
  
  #cd_footer_fixed.vw {
    background: rgba(0, 0, 0, 0.68);
    position: fixed;
    bottom: 0;
    left: 0px;
    right: 0px;
    width: 100%;
    text-align: center;
    z-index: 999999;
    padding: 2vh 0;
    margin: 0px;
    display: block;
  }
  
  #cd_footer_fixed.vw p {
    font-family: Tahoma, Verdana;
    font-size: 3vh;
    display: inline-block;
    color: #fff;
    margin: 0px 0px 11px;
    padding: 0px;
  }
  
  #cd_footer_fixed.vw .hl {
    color: #e1c231;
    padding: 0 1vh;
    font-weight: 700;
  }
  
  #cd_footer_fixed.vw a {
    font-family: Tahoma, Verdana;
    font-size: 3vh;
    line-height: 4vh;
    display: inline-block;
    color: #fff;
    padding: 2vh;
    background: #e31c02;
    border-radius: 1vh;
    outline: medium none;
    text-decoration: underline;
    margin: 0px 0px 0px 2vh;
  }
  </style>
  <script>
  if(document.getElementById('countdownTimer')) {
    var cd_min = document.getElementById('countdownTimer').getAttribute('data-minutes');
    var cd_sec = document.getElementById('countdownTimer').getAttribute('data-seconds');
    var cd_inited = false;
    var cd_sd = '';

    function countDown() {
      //if (!cd_inited){
      if(window.innerHeight < window.innerWidth) document.getElementById('cd_footer_fixed').setAttribute('class', 'vw');
      else document.getElementById('cd_footer_fixed').setAttribute('class', 'vh');
      //}
      cd_sec--;
      if(cd_sec == -01) {
        cd_sec = 59;
        cd_min = cd_min - 1;
      } else {
        cd_min = cd_min;
      }
      if(cd_sec <= 9) {
        cd_sec = "0" + cd_sec;
      }
      var cd_time = (cd_min <= 9 ? "" + cd_min : cd_min) + ":" + cd_sec;
      if(document.getElementById) {
        document.getElementById('countdownTimer').innerHTML = cd_time;
      }
      cd_sd = window.setTimeout("countDown();", 1000);
      if(cd_min == '00' && cd_sec == '00') {
        cd_sec = "00";
        window.clearTimeout(cd_sd);
      }
      cd_inited = true;
    }
    window.onload = countDown;
  }
  </script>
  <div id="wrapper">
    <div class="container">
      <header id="header"> <img src="assets/logo.jpg">
        <div class="menu">
          <ul>
            <li> ACASĂ </li>
            <li> ȘTIRI </li>
            <li> EXPERIENȚE </li>
            <li> CONȚINUT </li>
            <li> PRODUSE </li>
            <li> MAGAZIN </li>
            <li> LUCREAZĂ CU NOI </li>
            <li> DESPRE NOI </li>
            <li> CONSIMȚĂMÂNT </li>
          </ul>
        </div>
        <div class="headbeyaz">
          <div class="head"> <span>ȘTIRI <b>+18</b></span>
            <p> NU POȚI ACCESA ACEST SITE WEB
              <br> DACĂ AI SUB 18 ANI</p>
          </div>
        </div>
        <div class="headsag">
          <p>
            <script>
            dtime_nums(-1, true)
            </script>
          </p>
        </div>
        <div class="ustbaslik">MEN'S HEALTH PENTRU FEMEI</div>
      </header>
      <div class="contentsol">
        <h1><img src="assets/baslikres.jpg">
        <div> ADEVĂRUL DESPRE EROMAN <span> ȘI MĂRIREA </span> CU 7CM
          <p> PRODUSELE FALSE SUNT DĂUNĂTOARE </p>
        </div>
      </h1>
        <p> Pentru un timp, am văzut produse <a href="#form2">EROMAN</a> pe piață care contribuie la mărirea penisului și îmbunătățirea relațiilor sexuale. Așa cum am văzut în revista <b> 'Women's Health' </ b>, am decis să începem propriile cercetări și am constatat că EROMAN poate prelungi penisul cu mai mult de 7 centimetri și poate crește potența sexuală de cel puțin cinci ori, însă versiunile false acestui produs pot provoca daune corpului. <b> Din acest motiv, am decis să investigăm persoanele care au folosit acest produs. </b></p>
        <div class="fovid">
          <div class="video" style="display: block;"> <span class="toplay"> <img src="assets/gif.gif" style="display: block;"> </span> </div>
          <div class="yazi"> <strong> ANDREI ȘI RAMONA EXPLICĂ <br>
          <span> 32 ani / 28 ani - București </span> </strong>
            <p> Salut, trăim în București și am fost împreună timp de 3 ani.</p>
            <p> Lucrez la vamă și prietena mea este o asistentă de spital. Viața noastră sexuală, care este o parte indispensabilă a vieții noastre în general, a fost moartă. Să fim cinstiți. </p>
            <p> Penisul meu are o lungime de 5,2 cm și ejaculam în maxim 3 minute. Am făcut niște practici, am luat diverse medicamente și am folosit creme, dar niciunul nu a ajutat.</p>
            <p> În cele din urmă, am găsit câteva fotografii online. Unii bărbați au spus că au reușit să-și mărească penisul folosind EROMAN. Am fost amăgit de mai multe ori în trecut cu anunțuri, dar de data aceasta am decis să încercăm. După ce am primit produsul, am început să observ modificări chiar și în a doua sau a treia oară când l-am folosit. </p>
            <p> După ce am folosit produsul, nu mai ejaculam atât de repede. Am reușit să îi ofer Ramonei 3 orgasme la rând, și a trecut doar o lună și jumătate de când am început să îl folosesc. Tot ce pot spune este să te asiguri că nu cumperi produse false.</p>
          </div>
        </div>
        <h1> UROLOGI ȘI GINECOLOGI <br>
      </h1>
        <p> RECOMANDĂ EROMAN </p> <b> MAI MULȚI DOCTORI DE RENUME AU RECOMANDAT EROMAN ÎN ULTIMELE 3 LUNI CA TRATAMENT PENTRU <br>
      DISFUNCȚIA SEXUALĂ MASCULINĂ, <br>
      CARE ESTE UNA DINTRE MARILE PROBLEME ALE FEMEILOR ÎN CADRUL MARIAJELOR ȘI RELAȚIILOR </b>
        <div>
          <div class="video"><img src="assets/dr.jpg"></div>
          <div class="yazi">
            <h4> Prof. Dr. Tiberiu Popa <br>
            <span> Urologist </span> </h4>
            <p> Am recomandat acest produs în special bărbaților care necesită o extindere a penisului și care suferă de disfuncție erectilă.</p>
            <p> EROMAN nu are niciun risc asociat cu intervenția chirurgicală sau cu utilizarea medicamentelor chimice, dar, în același timp, efectele sale în prelungirea și creșterea puterii sunt incredibile. </P>
            <p> Cel mai important lucru de care oamenii ar trebui să îl țină cont este că produsul este original. Acest produs este autorizat oficial de către Minister, deci este important să fii atent cu produsele false. </P>
            <p> Produsul poate prelungi penisul cu cel puțin 3 centimetri și am văzut personal cum au reușit pacienții mei să facă asta. </P>
          </div>
        </div>
        <h2> ALȚI UTILIZATORI <br>
      </h2>
        <p> Imaginile și videoclipurile de aici au fost folosite cu permisiune. Este interzisă utilizarea fotografiilor pe alte pagini web. </p>
        <div style="margin-bottom: 25px;">
          <div class="yazi1">
            <p style="width: 48%;"> <img src="assets/il.jpg" style="width: 100%; display: block; max-width: 400px; margin: 10px auto;"> <b> Radu and Ana</b>
              <br> Am folosit produsul timp de trei luni. Până la sfârșitul lunii a doua, penisul a crescut cu 6 centimetri. Apoi a încetat să crească. Este acum în jur de 22cm și pot face sex timp de o jumătate de oră fără ejaculare. </p>
            <p style="width: 48%; float: right; overflow: hidden;"> <img src="assets/ir.jpg" style="width: 100%; display: block; max-width: 400px; margin: 10px auto;"> <b> Dragoș. / Constanța </b>
              <br> L-am folosit timp de o lună. Un medic mi-a recomandat produsul și a fost puțin dificil de găsit site-ul produsului original. Oricum, penisul meu a crescut mai mult de 4 centimetri, dar asta pentru ca nu folosesc produsul foarte des. Ar trebui să îl folosesc zilnic, dar câteodată uit și sare peste anumite zile.
              <br>
              <br> Dacă găsesc o prietenă în două luni, îi o voi da totul. :) </p>
          </div>
        </div>
        <div class="satici">
          <a href="#form2"> <span> AM INVESTIGAT ADEVĂRATUL EROMAN ȘI DISTRIBUITORUL SĂU</span>
            <br> <b> CLICK AICI PENTRU ACCES LA DISTRIBUITORUL EROMAN</b>
            <br> <b style="font-size: 20px; text-transform: none;"> POȚI LUA ACEST PRODUS CU UN DISCOUNT DE 50% <br>
        VA TREBUI SĂ PLĂTEȘTI DOAR PENTRU TRANSPORT </b> </a>
        </div>
        <h3><img src="assets/soruisareti.jpg">CE CELEBRITĂȚI ÎL UTILIZEAZĂ?<br>
      </h3>
        <p> CE CELEBRITATE A FOST PRINSĂ CU EROMAN ÎN RUCSAC ȘI A DEVENIT SUBIECT DE BÂRFĂ PENTRU TOATE SITE-URILE DE PROFIL?</p>
        <div style="margin-bottom: 25px;">
          <div class="res"> <strong>ȘTIM MULTE ALTE CELEBRITĂȚI CARE AU FOLOSIT ACEST PRODUS, DAR NU LE PUTEM DEZVĂLUI NUMELE </strong> <img src="assets/pipisko1.jpg" style="width: 100%; max-width: 700px;"> </div>
          <div class="yazi1">
            <p> <b> Eduard V. / București </b>
              <br> Tot ce pot spune cititorilor este: Vrei să fii fericit? Perfect! Un penis mare? Perfect! Vrei sex peste 1 oră? Perfect! Le poți face pe toate cu acest produs!
              <br>
              <br> Ce poți cere mai mult? Am terminat de pachete. Dar atenție la produsele false. </p>
          </div>
        </div>
        <h4> SEXUL DUREAZĂ PESTE 1 ORĂ <br>
      </h4>
        <p> Clientul EROMAN Teo ÎȘI EXPUNE PĂREREA </p>
        <div style="margin-bottom: 50px;">
          <div class="res" style="margin-bottom: 25px;"> <img src="assets/sakso.jpg"> </div>
          <div class="yazi1">
            <p> Tot ce pot spune cititorilor este: Vrei să fii fericit? Perfect! Un penis mare? Perfect! Vrei sex peste 1 oră? Perfect! Le poți face pe toate cu acest produs!
              <br>
              <br> What more could you ask for? I've finished 3 packs. But beware of fake products. </p>
          </div>
        </div>
        <h4 style="margin-bottom: 30px;">SEXUL DUREAZĂ PESTE O ORĂ <br>
      </h4>
        <p>Clientul EROMAN Teo ÎȘI EXPUNE PĂREREA</p>
        <div style="margin-bottom: 40px;">
          <div class="yazi2">
            <p> Am fost o persoană care nu știa ce era sexul acum 2 ani și au avut loc schimbări incredibile în viața mea. Deoarece nu sunt atractiv, nu am putut avea întâlniri sexuale. </ P>
              <p>Dar atunci mi-am dat seama că aspectul nu este atât de important. Ceea ce contează este dimensiune penisului. În doar o lună, micul meu penis a crescut la o dimensiune normală. Până în a treia lună, a crescut enorm. </ P>
          </div>
          <div class="yazi3">
            <p> Totul a început când am reușit să îi ofer o noapte uimitoare unei femei bestiale. Totul s-a întâmplat rapid. Așa cum și bărbații vorbesc despre relații, și femeile discută despre experiențele lor sexuale între ele. Deci toate fetele de la facultatea mea au început să se întrebe de lungimea penisului meu. Practic, nu am dezamăgit pe nimeni. Am avut mereu câte o noapte grozavă, una după după alta. Sper că toți oamenii pot fi atât de norocoși. Acest produs simplu m-a ajutat să am experiențe minunate. </p>
          </div>
        </div>
        <div class="titanform">
          <div class="titanust"> <span> La fel ca și revista Women's Health, primim o reducere specială pentru cititorii noștri de la distribuitor și o garanție: dacă produsul nu este eficient, există o garanție de 100% pentru rambursarea prețului de achiziție.<b> Această reducere este disponibilă pentru o perioadă limitată de timp. </b></span>
            <div class="link">
              <a href="#form2"> <strong> CLICK PENTRU A PRIMI </strong><span> UN DISCOUNT DE 50% </span><strong> PENTRU EROMAN </strong> </div>
            <p><img src="assets/rhino.png" height="250"> </a>
              <br> ULTIMA ZI A PROMOȚIEI:
              <script>
              dtime_nums(-1, true)
              </script>
              <br> Stocul este limitat din cauza cererii foarte mari. </p>
          </div>
        </div>
        <h4 style="margin: 20px 0px;">PROSTITUATELE CER CU PÂNĂ LA 3 ORI MAI MULȚI BANI <br>
    </h4>
        <p> PENTRU UTILIZATORII EROMAN </p>
        <div style="margin-bottom: 15px;">
          <div class="res" style="margin-bottom: 17px;"> <img src="assets/grup.jpg"></div>
          <div class="yazi1">
            <p> Iată. Cercetările noastre arată că prostituatele solicită de până la 3 ori mai mulți bani de la bărbații care au folosit EROMAN și ale căror penisuri sunt mai mari de 20 cm.
              <br> Ele sunt conștienți de numărul tot mai mare de bărbați care au folosit acest produs în ultimele 6 luni. În timp ce în trecut doar 1 din 10 clienți au avut un penis de 20 cm, acest raport este acum 3 din 10 clienți. </P>
          </div>
        </div>
        <br>
        <center>
          <a href="#form2"><img id="form2" src="assets/rhino.png" height="250"></a>
        </center>
        <br>
        <div class="spin-wrapper" id="roulettes">
          <p style="" class="ruletka-p">IMPORTANT!
            <br> Site-ul nostru oferă o reducere suplimentară. Încercați-vă norocul și apăsați butonul „SPIN”. Dacă aveți noroc, puteți comanda produsul la un preț și mai mic! Noroc! </span>
          </p>
          <div class="wheel-wrapper">
            <div class="wheel" style="max-width:100%"> <img alt="" class="wheel-img" src="assets/prizewheel.png">
              <div class="wheel-cursor"> <img alt="" src="assets/wheel-cursor.png"><span class="cursor-text lt48" style="color:black" onclick="spin();">SPIN</span> </div>
            </div>
          </div>
        </div>
        <div class="spin-result-wrapper">
          <div class="pop-up-window">
            <div class="close-popup"></div> <span style="color:black" class="pop-up-heading">Felicitări!</span>
            <p class="ruletka-p pop-up-text" style="padding: 15px 15px 20px">Puteți cumpăra produsul cu o reducere de 50%!</p> <a class="pop-up-button" href="#roulettes">OK</a> </div>
        </div>
        <div class="order_block">
          <center><s> 318ron
</s> <b style="color:red">

159ron
 </b> </center>
          <form method="post" class="orderForm" id="form" action="order.php">
            <input type="hidden" name="flow" value="y2ksv">
            <input type="hidden" name="sub1" value="{clickid}">
            <input type="hidden" name="sub2" value="{trafficsource}">
            <input type="hidden" name="sub3" value="{campaign}">
            <input type="hidden" name="sub4" value="{lander}">
            <input type="hidden" name="sub5" value="<?=@$_GET['sub5']?>">
            <input type="text" class="input-roulette" id="name" style="max-width:100%" name="name" placeholder="Nume" required>
            <br>
            <input type="tel" class="input-roulette phone-mask" style="max-width:100%" pattern="(?=.*[0-9+]).{7,}" id="phone" name="phone" minlength="7" placeholder="Telefon" value="+40" title="+40xxxxxxxxxx" required>
            <br>
            <input type="submit" name="submit" style="max-width:100%" class="submit-roulette" value="CUMPĂRĂ EROMAN"> </form>
        </div>
        <script>
        $(document).ready(function() {
          $('#phone').bind("change keyup input click", function() {
            if(this.value.match(/[^0-9+]/g)) {
              this.value = this.value.replace(/[^0-9+]/g, '');
            }
            if(this.value.length < 3) {
              this.value = '+40';
            }
            if(!this.value.match(/^\+40/g)) {
              this.value = '+40';
            }
          });
        });
        </script>
        <style>
        .submit-roulette:hover {
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
          top: 25%;
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
        
        input[value="ÐŸÐ¾Ð»ÑƒÑ‡Ð¸Ñ‚ÑŒ Ð±ÐµÑÐ¿Ð»Ð°Ñ‚Ð½Ð¾"],
        .submit-roulette {
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
        
        input[value="ÐŸÐ¾Ð»ÑƒÑ‡Ð¸Ñ‚ÑŒ Ð±ÐµÑÐ¿Ð»Ð°Ñ‚Ð½Ð¾"]:hover {
          background: #bb0000 !important;
          transition: background 0.3s;
        }
        
        input[value="ÐŸÐ¾Ð»ÑƒÑ‡Ð¸Ñ‚ÑŒ Ð±ÐµÑÐ¿Ð»Ð°Ñ‚Ð½Ð¾"]:active {
          transform: translateY(2px);
          box-shadow: none !important;
        }
        
        .input-roulette {
          padding-left: 5px;
          height: 42px;
          margin-bottom: 10px;
          width: 300px !important;
        }
        
        input[placeholder="Ð’Ð°ÑˆÐµ Ð¸Ð¼Ñ"],
        input[placeholder="Ð’Ð°Ñˆ Ñ‚ÐµÐ»ÐµÑ„Ð¾Ð½"] {
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
          top: 49%;
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
          filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#eaeaea', GradientType=1);
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
        <script src="assets/ruletka.js"></script>
      </div>
      <div class="contentsag">
        <p> Interviurile cu urologi, efectuate de editorii revistei Women's Health, au descoperit efectul uimitor al EROMAN real în ceea ce privește extinderea penisului.</p> <img src="assets/grupsag.jpg"> <strong> Radu S. / Brașov </strong>
        <p> A fost o mare cerere pentru adevăratul EROMAN în întreaga lume în ultimul timp. Deoarece acest produs minunat provoacă o mărire a penisului, precum și o creștere a potenței, găsirea acestuia pe piață a devenit din ce în ce mai dificilă, pentru că atât de mulți au început să producă versiuni false și ineficiente ale produsului. Există un singur site unde poți găsi EROMAN original.</p>
        <p><b><a href="#form2">Cum se obține produsul: Fă clic pentru a obține EROMAN cu discount  &gt;&gt; </a></b></p> <a class="buton" href="#form2"> Comandă EROMAN </a> <img src="assets/agizsakso.jpg"> <strong> Alexandru M. / Iași </strong>
        <p>I-am cerut soției să-l aplice pe penisul meu dimineața și seara. Acum suntem amândoi foarte fericiți. Am reușit să obțin o dimensiune medie într-o perioadă scurtă de timp și mă simt foarte împlinită. EROMAN, ești minunat! </p> <img src="assets/cibilicibili.jpg"> <strong> Anton C. / Slatina </strong>
        <p> Acum o săptămână, un prieten mi-a spus despre produsul respectiv. Nu a sunat foarte realist. Nu credeam că produsul ar ajuta la mărirea penisului meu și că îmi va îmbunătăți funcția sexuală. Dar atunci când un alt prieten mi-a spus despre același produs, am decis să comand. Rezultatele pe care le-am văzut în prima săptămână m-au surprins. Recomand acest produs eficient. </p> <img src="assets/cubuk.jpg"> <strong>Radu / Oradea </strong>
        <p> Soția mea și cu mine aveam unele probleme. Am vizitat medicul să discutăm disfuncția mea sexuală. În acest moment, nu mai este doar pentru plăcere, ci pentru sănătate și am încercat multe alte produse. Nu am vrut să iau pilule periculoase. Printre produsele pe bază de plante pe care le-am testat până în prezent, EROMAN este cel mai bun fără îndoială. Utilizați acest produs și sunt sigur că veți vedea avantajele acestuia. </p> <img src="assets/dildo.jpg"> <strong> Cătălin. / Cluj-Napoca</strong>
        <p> Nu am putut să fac sex ca înainte din cauza unei boli pe care am avut-o cu un an în urmă. Soția mea nu a menționat preocupările ei, dar știu că a deranjat-o. Și ca bărbat, este o chestie de mândrie. Oricum, ea a comandat acest produs pentru mine prin Internet. Așa că nu aveam de ales decât să îl folosesc. L-am folosit timp de o lună și jumătate. Este un produs eficient și de înaltă calitate. </p>
      </div>
      <div class="yorumlar">
        <div class="titanbaslik"> Comentariile utilizatorilor </div>
        <div class="faceyorumlars">
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum1.jpg"></div>
            <div class="faceyazi">
              <p> Andrei Bercea </p> <span> Multe mulțumiri producătorilor EROMAN pentru că EROMAN mi-a salvat căsnicia. Sexul obișnuit și plăcut este esențial în căsătorie. În ultimii ani, devenisem mai degrabă prieteni. Cu toate acestea, acum 2 luni am aflat despre EROMAN, iar viața noastră sexuală a făcut o schimbare completă. </span> <img src="assets/p2.jpg"> <strong><span> Îmi place</span> <span> Adaugă un comentariu </span> Cu 12 zile în urmă </strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum2.jpg"></div>
            <div class="faceyazi">
              <p> Radu Andrei </p> <span> Am învățat multe despre mine cu EROMAN. Înainte, penisul meu era de 10 cm și mi-era teamă să mă apropii de fete sau să merg mai departe. În doar o lună, penisul meu a crescut la 18cm și acum pot să mă adresez oricarei fete cu încredere. </span> <strong><span> Îmi place</span> <span> Adaugă un comentariu </span> Cu 12 zile în urmă </strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum3.jpg"></div>
            <div class="faceyazi">
              <p> Popescu Mihnea </p> <span> Am folosit EROMAN în fiecare seară înainte de a merge la culcare. Au trecut 4 săptămâni și penisul meu a crescut deja cu aproximativ 4 cm. Acesta este un adevărat miracol. :) </span> <strong><span> Îmi place</span> <span> Adaugă un comentariu </span> Cu 11 zile în urmă </strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum4.jpg"></div>
            <div class="faceyazi">
              <p> Tony Popescu </p> <span> Penisul meu este mai mare și pot face sex mai mult. Fata mea geme ca o nebună. Vecinii au început să se plângă de zgomot. :) Ea are orgasm de cel puțin 3 ori în fiecare noapte. E chiar mai fericită decât mine cu EROMAN. </span> <strong><span>Îmi place</span> <span> Adaugă un comentariu </span> Cu 10 zile în urmă </strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum5.jpg"></div>
            <div class="faceyazi">
              <p> Theodor Vicor </p> <span> Sunt căsătorit de 5 ani și, pentru prima dată, mi-am văzut soția țipând când ea a avut orgasm. EROMAN a adus o nouă dimensiune vieții noastre sexuale. <br>
          </span> <img src="assets/p1.jpg"> <strong><span> Îmi place</span> <span> Adaugă un comentariu </span> Cu 10 zile în urmă </strong> </div>
          </div>
          <div class="yorumcevap">
            <div class="faceresim"><img src="assets/yorum6.jpg"></div>
            <div class="faceyazi">
              <p> Ștefan Vicin </p> <span> N-am avut orgasm de ani de zile. Îmi dau seama de asta și am emoții. Mă gândesc să comand un produs pentru soțul meu, deoarece comentariul tău m-a convins cu adevărat. Îți mulțumesc foarte mult pentru recomandarea ta. </span> <strong><span> Îmi place</span> <span> Adaugă un comentariu </span> Cu 10 zile în urmă</strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum7.jpg"></div>
            <div class="faceyazi">
              <p> Andreea Rox </p> <span> Am cumpărat acest produs din cauza problemei soțului meu de ejaculare prematură. Problema a dispărut spre a 3-a zi, iar după o lună, penisul său crescuse foarte mult. Este mult mai eficient decât orice alt produs pe care l-am cumpărat în farmacii. Începem fiecare noapte cu ajutorul EROMAN. ;) și nu vrem să mai vină dimineața. </span> <img src="assets/p3.jpg"> <strong><span> Îmi place</span> <span> Adaugă un comentariu </span> Cu 10 zile în urmă</strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum8.jpg"></div>
            <div class="faceyazi">
              <p> Simina </p> <span> L-a folosit cineva? </span> <strong><span> Îmi place</span> <span> Adaugă un comentariu </span> Cu 9 zile în urmă</strong> </div>
          </div>
          <div class="yorumcevap">
            <div class="faceresim"><img src="assets/yorum9.jpg"></div>
            <div class="faceyazi">
              <p> Olivia Ionescu </p> <span> Eu folosesc acest produs înainte de sex și este nevoie de doar o oră înainte de a începe să funcționeze </span> <strong><span> Îmi place</span> <span> Adaugă un comentariu </span> </strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum10.jpg"></div>
            <div class="faceyazi">
              <p>Mohammed Tehsin</p> <span> Am folosit acest produs în mod regulat timp de 3 luni. Cocoșul meu a crescut timp de 6 cm și este, de asemenea, mai gros. Pot să fac sex timp de 20-30 de minute înainte de a mă termina și acum toate fetele vorbesc despre mine. Chiar primesc apeluri de la fete pe care nu le știu. EROMAN mi-a crescut viața sexuală. <br>
          </span> <img src="assets/ba1.jpg"> <strong><span> Îmi place</span> <span> Adaugă un comentariu </span> Cu 8 zile în urmă </strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum12.jpg"></div>
            <div class="faceyazi">
              <p>George Militaru </p> <span> Datorită acestei creme, penisul meu este acum mai lung atât în lungime, cât și în circumferință. Cred că grosimea este la fel de importantă ca și lungimea. Îmi pot termina partenerul de 3-4 ori în fiecare noapte. </span> <img src="assets/ba2.jpg"> <strong><span>Îmi place</span> <span> Adaugă un comentariu </span> Cu 6 zile în urmă</strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum27.jpg"></div>
            <div class="faceyazi">
              <p> Răzvan Memron</p> <span> Acest produs a fost mult mai bun decât mă așteptam. Când l-am cumpărat pentru prima dată, am avut mari speranțe, iar rezultatele sunt minunate. Puteți vedea diferența dintre imagini. <br>
          </span> <img src="assets/ba4.jpg"> <strong><span>Îmi place</span> <span> Adaugă un comentariu </span> Cu 6 zile în urmă </strong></div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum13.jpg"></div>
            <div class="faceyazi">
              <p> Dumitru Andrei </p> <span> Am cumpărat produsul doar pentru a avea un penis mai mare, dar s-a dovedit a fi leacul pentru toate problemele mele sexuale. Nu mai am ejaculare prematură sau disfuncție sexuală. Penisul meu a crescut cu 4,5 cm. Acest lucru este minunat! </span> <strong><span> Îmi place</span> <span> Adaugă un comentariu </span> Cu 6 zile în urmă</strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum14.jpg"></div>
            <div class="faceyazi">
              <p> Dragoș Cetin </p> <span> Am comandat acest produs pentru prietenul meu. Deși trăim împreună, viața noastră sexuală nu a fost foarte interesantă în ultimul an. După o săptămână de utilizare, am început să facem sex la fel ca prima noastră noapte împreună. Dacă ai probleme la pat, nu pierde șansa de a comanda acest produs. Am atașat niște poze cu noi și am explicat în detaliu povestea noastră, așa că sper că o postați pe site. </span> <strong><span>Îmi place</span> <span> Adaugă un comentariu </span> Cu 6 zile în urmă</strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum15.jpg"></div>
            <div class="faceyazi">
              <p> Valentin Petcu </p> <span> De ani de zile, dimensiunea penisului meu a fost ceva care m-a îngrijorat. Regret toți anii pe care i-am petrecut deprimat din cauza asta. EROMAN mi-a rezolvat problemele în 2 luni, iar acum cocoșul meu este de 5 cm mai mare :) </span> <img src="assets/ba6.jpg"> <strong><span> Îmi place</span> <span> Adaugă un comentariu </span> Cu 6 zile în urmă</strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum16.jpg"></div>
            <div class="faceyazi">
              <p>Anton Mic </p> <span> Soția mea are acum probleme cu luarea penisului meu în gură. Puteți vedea singuri. N-am crezut niciodată că aș putea crește atât de mult. <br>
          </span> <img src="assets/p7.jpg"> <strong><span> Îmi place</span> <span> Adaugă un comentariu </span> Cu 5 zile în urmă</strong> </div>
          </div>
          <div class="yorumcevap">
            <div class="faceresim"><img src="assets/yorum17.jpg"></div>
            <div class="faceyazi">
              <p> Mirabela Popescu </p> <span> Unele femei au noroc ... Sunt atât de invidioasă. Este foarte mare creșterea... în lungime și circumferință. </span> <strong><span> Îmi place</span> <span> Adaugă un comentariu </span> Cu 5 zile în urmă </strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum18.jpg"></div>
            <div class="faceyazi">
              <p>Andrei Boss </p> <span> Penisul meu este acum mai mare și eu decid când să mă termin. Am uitat totul despre ejacularea prematură. Mă simt ca un rege în pat. </span> <strong><span> Îmi place</span> <span> Adaugă un comentariu </span> Cu 5 zile în urmă </strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum19.jpg"></div>
            <div class="faceyazi">
              <p> Luca Tomescu </p> <span> Acest produs mi-a salvat, practic, căsnicia. Penisul meu este cu 1,5 inch mai lung și mă bucur de el. </span> <strong><span> Îmi place</span> <span> Adaugă un comentariu </span> Cu 4 zile în urmă </strong> </div>
          </div>
          <div class="yorumcevap">
            <div class="faceresim"><img src="assets/yorum20.jpg"></div>
            <div class="faceyazi">
              <p> Daniel Costi </p> <span> Aceasta este o lungire incredibilă! Și, de asemenea, previne ejacularea prematură? Soțul meu suferă de asta, deci intenționez să cumpăr produsul. V-am fi recunoscători dacă mi-ați putea răspunde. </span> <strong><span>Îmi place</span> <span> Adaugă un comentariu </span> Cu 4 zile în urmă </strong> </div>
          </div>
          <div class="yorumcevap">
            <div class="faceresim"><img src="assets/yorum19.jpg"></div>
            <div class="faceyazi">
              <p> Roxana Vancea </p> <span> Da, draga mea, soțul meu se termina, de asemenea, în maxim 5 minute. Cu EROMAN, nu l-am văzut cu mai puțin de 20 de minute. În cele din urmă, mă bucur de orgasme reale. </span> <strong><span>Îmi place</span> <span> Adaugă un comentariu </span> Cu 4 zile în urmă</strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum22.jpg"></div>
            <div class="faceyazi">
              <p> Mihai Ertimel </p> <span> Producători EROMAN, vă mulțumesc. Mi-ați salvat căsnicia! Dacă cineva vă pune la îndoială, dacă să cumpere sau nu produsul, să știți că nu aveți nicio îndoială. Mi-ați salvat căsnicia și vă recomand tuturor. <img src="assets/p4.jpg"> </span> <strong><span> Îmi place</span> <span> Adaugă un comentariu </span> Cu 3 zile în urmă</strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum23.jpg"></div>
            <div class="faceyazi">
              <p> Andra Văduvescu </p> <span> Am văzut EROMAN pe Twitter. Un cuplu l-a folosit, iar penisul tipului a creascut enorm. După insistența mea constantă, soțul meu a cumpărat produsul în cele din urmă și l-a folosit-o timp de o lună. Astăzi sunt din nou pe site pentru a cumpăra un alt pachet. Îi recomandăm tuturor. Am încercat toate celelalte produse, dar EROMAN este mai bun decât toate. </span> <strong><span> Îmi place</span> <span> Adaugă un comentariu </span> Cu 2 zile în urmă </strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum24.jpg"></div>
            <div class="faceyazi">
              <p> Antonio Pop </p> <span> Nu este nevoie de comentarii. Vă voi adăuga fotografiile, veți judeca voi înșivă. Am folosit produsul timp de o lună și penisul meu a crescut cu aproximativ 4,5 cm. <br>
          </span> <img src="assets/ba8.jpg"> <strong><span> Îmi place</span> <span> Adaugă un comentariu </span> Cu 2 zile în urmă </strong> </div>
          </div>
          <div class="yorumcevap">
            <div class="faceresim"><img src="assets/yorum25.jpg"></div>
            <div class="faceyazi">
              <p> Luis Valentin </p> <span> Arată foarte bine. Dacă  bărbații care utilizează EROMAN ar arăta rezultatele, astfel încât să nu pierdem timpul cu restul, ar fi perfect. </span> <strong><span> Îmi place</span> <span> Adaugă un comentariu </span> Cu 2 zile în urmă</strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum26.jpg"></div>
            <div class="faceyazi">
              <p> Brad Tedol </p> <span> Am cumpărat EROMAN acum o săptâmană și dat fiind faptul că revista oferă o reducere, am cumpărat alte trei pachete. Penisul meu a crescut 2 cm în doar o săptămână. Acest lucru este foarte bun. </span> <strong><span> Îmi place</span> <span> Adaugă un comentariu </span> Cu 1 zi în urmă</strong> </div>
          </div> <a class="buton" href="#form2"> Comandă EROMAN </a> </div>
      </div>
    </div>
  </div>
  <script>
  $(document).ready(function() {
    $("a").on('click', function(event) {
      if(this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 600, function() {});
      }
    });
  });
  </script>
  <script>
  console.clear()
  </script>
</body>

</html>