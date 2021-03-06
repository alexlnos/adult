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
            <li> ACAS?? </li>
            <li> ??TIRI </li>
            <li> EXPERIEN??E </li>
            <li> CON??INUT </li>
            <li> PRODUSE </li>
            <li> MAGAZIN </li>
            <li> LUCREAZ?? CU NOI </li>
            <li> DESPRE NOI </li>
            <li> CONSIM????M??NT </li>
          </ul>
        </div>
        <div class="headbeyaz">
          <div class="head"> <span>??TIRI <b>+18</b></span>
            <p> NU PO??I ACCESA ACEST SITE WEB
              <br> DAC?? AI SUB 18 ANI</p>
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
        <div> ADEV??RUL DESPRE EROMAN <span> ??I M??RIREA </span> CU 7CM
          <p> PRODUSELE FALSE SUNT D??UN??TOARE </p>
        </div>
      </h1>
        <p> Pentru un timp, am v??zut produse <a href="#form2">EROMAN</a> pe pia???? care contribuie la m??rirea penisului ??i ??mbun??t????irea rela??iilor sexuale. A??a cum am v??zut ??n revista <b> 'Women's Health' </ b>, am decis s?? ??ncepem propriile cercet??ri ??i am constatat c?? EROMAN poate prelungi penisul cu mai mult de 7 centimetri ??i poate cre??te poten??a sexual?? de cel pu??in cinci ori, ??ns?? versiunile false acestui produs pot provoca daune corpului. <b> Din acest motiv, am decis s?? investig??m persoanele care au folosit acest produs. </b></p>
        <div class="fovid">
          <div class="video" style="display: block;"> <span class="toplay"> <img src="assets/gif.gif" style="display: block;"> </span> </div>
          <div class="yazi"> <strong> ANDREI ??I RAMONA EXPLIC?? <br>
          <span> 32 ani / 28 ani - Bucure??ti </span> </strong>
            <p> Salut, tr??im ??n Bucure??ti ??i am fost ??mpreun?? timp de 3 ani.</p>
            <p> Lucrez la vam?? ??i prietena mea este o asistent?? de spital. Via??a noastr?? sexual??, care este o parte indispensabil?? a vie??ii noastre ??n general, a fost moart??. S?? fim cinsti??i. </p>
            <p> Penisul meu are o lungime de 5,2 cm ??i ejaculam ??n maxim 3 minute. Am f??cut ni??te practici, am luat diverse medicamente ??i am folosit creme, dar niciunul nu a ajutat.</p>
            <p> ??n cele din urm??, am g??sit c??teva fotografii online. Unii b??rba??i au spus c?? au reu??it s??-??i m??reasc?? penisul folosind EROMAN. Am fost am??git de mai multe ori ??n trecut cu anun??uri, dar de data aceasta am decis s?? ??ncerc??m. Dup?? ce am primit produsul, am ??nceput s?? observ modific??ri chiar ??i ??n a doua sau a treia oar?? c??nd l-am folosit. </p>
            <p> Dup?? ce am folosit produsul, nu mai ejaculam at??t de repede. Am reu??it s?? ??i ofer Ramonei 3 orgasme la r??nd, ??i a trecut doar o lun?? ??i jum??tate de c??nd am ??nceput s?? ??l folosesc. Tot ce pot spune este s?? te asiguri c?? nu cumperi produse false.</p>
          </div>
        </div>
        <h1> UROLOGI ??I GINECOLOGI <br>
      </h1>
        <p> RECOMAND?? EROMAN </p> <b> MAI MUL??I DOCTORI DE RENUME AU RECOMANDAT EROMAN ??N ULTIMELE 3 LUNI CA TRATAMENT PENTRU <br>
      DISFUNC??IA SEXUAL?? MASCULIN??, <br>
      CARE ESTE UNA DINTRE MARILE PROBLEME ALE FEMEILOR ??N CADRUL MARIAJELOR ??I RELA??IILOR </b>
        <div>
          <div class="video"><img src="assets/dr.jpg"></div>
          <div class="yazi">
            <h4> Prof. Dr. Tiberiu Popa <br>
            <span> Urologist </span> </h4>
            <p> Am recomandat acest produs ??n special b??rba??ilor care necesit?? o extindere a penisului ??i care sufer?? de disfunc??ie erectil??.</p>
            <p> EROMAN nu are niciun risc asociat cu interven??ia chirurgical?? sau cu utilizarea medicamentelor chimice, dar, ??n acela??i timp, efectele sale ??n prelungirea ??i cre??terea puterii sunt incredibile. </P>
            <p> Cel mai important lucru de care oamenii ar trebui s?? ??l ??in?? cont este c?? produsul este original. Acest produs este autorizat oficial de c??tre Minister, deci este important s?? fii atent cu produsele false. </P>
            <p> Produsul poate prelungi penisul cu cel pu??in 3 centimetri ??i am v??zut personal cum au reu??it pacien??ii mei s?? fac?? asta. </P>
          </div>
        </div>
        <h2> AL??I UTILIZATORI <br>
      </h2>
        <p> Imaginile ??i videoclipurile de aici au fost folosite cu permisiune. Este interzis?? utilizarea fotografiilor pe alte pagini web. </p>
        <div style="margin-bottom: 25px;">
          <div class="yazi1">
            <p style="width: 48%;"> <img src="assets/il.jpg" style="width: 100%; display: block; max-width: 400px; margin: 10px auto;"> <b> Radu and Ana</b>
              <br> Am folosit produsul timp de trei luni. P??n?? la sf??r??itul lunii a doua, penisul a crescut cu 6 centimetri. Apoi a ??ncetat s?? creasc??. Este acum ??n jur de 22cm ??i pot face sex timp de o jum??tate de or?? f??r?? ejaculare. </p>
            <p style="width: 48%; float: right; overflow: hidden;"> <img src="assets/ir.jpg" style="width: 100%; display: block; max-width: 400px; margin: 10px auto;"> <b> Drago??. / Constan??a </b>
              <br> L-am folosit timp de o lun??. Un medic mi-a recomandat produsul ??i a fost pu??in dificil de g??sit site-ul produsului original. Oricum, penisul meu a crescut mai mult de 4 centimetri, dar asta pentru ca nu folosesc produsul foarte des. Ar trebui s?? ??l folosesc zilnic, dar c??teodat?? uit ??i sare peste anumite zile.
              <br>
              <br> Dac?? g??sesc o prieten?? ??n dou?? luni, ??i o voi da totul. :) </p>
          </div>
        </div>
        <div class="satici">
          <a href="#form2"> <span> AM INVESTIGAT ADEV??RATUL EROMAN ??I DISTRIBUITORUL S??U</span>
            <br> <b> CLICK AICI PENTRU ACCES LA DISTRIBUITORUL EROMAN</b>
            <br> <b style="font-size: 20px; text-transform: none;"> PO??I LUA ACEST PRODUS CU UN DISCOUNT DE 50% <br>
        VA TREBUI S?? PL??TE??TI DOAR PENTRU TRANSPORT </b> </a>
        </div>
        <h3><img src="assets/soruisareti.jpg">CE CELEBRIT????I ??L UTILIZEAZ???<br>
      </h3>
        <p> CE CELEBRITATE A FOST PRINS?? CU EROMAN ??N RUCSAC ??I A DEVENIT SUBIECT DE B??RF?? PENTRU TOATE SITE-URILE DE PROFIL?</p>
        <div style="margin-bottom: 25px;">
          <div class="res"> <strong>??TIM MULTE ALTE CELEBRIT????I CARE AU FOLOSIT ACEST PRODUS, DAR NU LE PUTEM DEZV??LUI NUMELE </strong> <img src="assets/pipisko1.jpg" style="width: 100%; max-width: 700px;"> </div>
          <div class="yazi1">
            <p> <b> Eduard V. / Bucure??ti </b>
              <br> Tot ce pot spune cititorilor este: Vrei s?? fii fericit? Perfect! Un penis mare? Perfect! Vrei sex peste 1 or??? Perfect! Le po??i face pe toate cu acest produs!
              <br>
              <br> Ce po??i cere mai mult? Am terminat de pachete. Dar aten??ie la produsele false. </p>
          </div>
        </div>
        <h4> SEXUL DUREAZ?? PESTE 1 OR?? <br>
      </h4>
        <p> Clientul EROMAN Teo ????I EXPUNE P??REREA </p>
        <div style="margin-bottom: 50px;">
          <div class="res" style="margin-bottom: 25px;"> <img src="assets/sakso.jpg"> </div>
          <div class="yazi1">
            <p> Tot ce pot spune cititorilor este: Vrei s?? fii fericit? Perfect! Un penis mare? Perfect! Vrei sex peste 1 or??? Perfect! Le po??i face pe toate cu acest produs!
              <br>
              <br> What more could you ask for? I've finished 3 packs. But beware of fake products. </p>
          </div>
        </div>
        <h4 style="margin-bottom: 30px;">SEXUL DUREAZ?? PESTE O OR?? <br>
      </h4>
        <p>Clientul EROMAN Teo ????I EXPUNE P??REREA</p>
        <div style="margin-bottom: 40px;">
          <div class="yazi2">
            <p> Am fost o persoan?? care nu ??tia ce era sexul acum 2 ani ??i au avut loc schimb??ri incredibile ??n via??a mea. Deoarece nu sunt atractiv, nu am putut avea ??nt??lniri sexuale. </ P>
              <p>Dar atunci mi-am dat seama c?? aspectul nu este at??t de important. Ceea ce conteaz?? este dimensiune penisului. ??n doar o lun??, micul meu penis a crescut la o dimensiune normal??. P??n?? ??n a treia lun??, a crescut enorm. </ P>
          </div>
          <div class="yazi3">
            <p> Totul a ??nceput c??nd am reu??it s?? ??i ofer o noapte uimitoare unei femei bestiale. Totul s-a ??nt??mplat rapid. A??a cum ??i b??rba??ii vorbesc despre rela??ii, ??i femeile discut?? despre experien??ele lor sexuale ??ntre ele. Deci toate fetele de la facultatea mea au ??nceput s?? se ??ntrebe de lungimea penisului meu. Practic, nu am dezam??git pe nimeni. Am avut mereu c??te o noapte grozav??, una dup?? dup?? alta. Sper c?? to??i oamenii pot fi at??t de noroco??i. Acest produs simplu m-a ajutat s?? am experien??e minunate. </p>
          </div>
        </div>
        <div class="titanform">
          <div class="titanust"> <span> La fel ca ??i revista Women's Health, primim o reducere special?? pentru cititorii no??tri de la distribuitor ??i o garan??ie: dac?? produsul nu este eficient, exist?? o garan??ie de 100% pentru rambursarea pre??ului de achizi??ie.<b> Aceast?? reducere este disponibil?? pentru o perioad?? limitat?? de timp. </b></span>
            <div class="link">
              <a href="#form2"> <strong> CLICK PENTRU A PRIMI </strong><span> UN DISCOUNT DE 50% </span><strong> PENTRU EROMAN </strong> </div>
            <p><img src="assets/rhino.png" height="250"> </a>
              <br> ULTIMA ZI A PROMO??IEI:
              <script>
              dtime_nums(-1, true)
              </script>
              <br> Stocul este limitat din cauza cererii foarte mari. </p>
          </div>
        </div>
        <h4 style="margin: 20px 0px;">PROSTITUATELE CER CU P??N?? LA 3 ORI MAI MUL??I BANI <br>
    </h4>
        <p> PENTRU UTILIZATORII EROMAN </p>
        <div style="margin-bottom: 15px;">
          <div class="res" style="margin-bottom: 17px;"> <img src="assets/grup.jpg"></div>
          <div class="yazi1">
            <p> Iat??. Cercet??rile noastre arat?? c?? prostituatele solicit?? de p??n?? la 3 ori mai mul??i bani de la b??rba??ii care au folosit EROMAN ??i ale c??ror penisuri sunt mai mari de 20 cm.
              <br> Ele sunt con??tien??i de num??rul tot mai mare de b??rba??i care au folosit acest produs ??n ultimele 6 luni. ??n timp ce ??n trecut doar 1 din 10 clien??i au avut un penis de 20 cm, acest raport este acum 3 din 10 clien??i. </P>
          </div>
        </div>
        <br>
        <center>
          <a href="#form2"><img id="form2" src="assets/rhino.png" height="250"></a>
        </center>
        <br>
        <div class="spin-wrapper" id="roulettes">
          <p style="" class="ruletka-p">IMPORTANT!
            <br> Site-ul nostru ofer?? o reducere suplimentar??. ??ncerca??i-v?? norocul ??i ap??sa??i butonul ???SPIN???. Dac?? ave??i noroc, pute??i comanda produsul la un pre?? ??i mai mic! Noroc! </span>
          </p>
          <div class="wheel-wrapper">
            <div class="wheel" style="max-width:100%"> <img alt="" class="wheel-img" src="assets/prizewheel.png">
              <div class="wheel-cursor"> <img alt="" src="assets/wheel-cursor.png"><span class="cursor-text lt48" style="color:black" onclick="spin();">SPIN</span> </div>
            </div>
          </div>
        </div>
        <div class="spin-result-wrapper">
          <div class="pop-up-window">
            <div class="close-popup"></div> <span style="color:black" class="pop-up-heading">Felicit??ri!</span>
            <p class="ruletka-p pop-up-text" style="padding: 15px 15px 20px">Pute??i cump??ra produsul cu o reducere de 50%!</p> <a class="pop-up-button" href="#roulettes">OK</a> </div>
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
            <input type="submit" name="submit" style="max-width:100%" class="submit-roulette" value="CUMP??R?? EROMAN"> </form>
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
        
        input[value="?????????????????????????????????? ?????????????????????????????????????"],
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
        
        input[placeholder="????????????????? ????????????"],
        input[placeholder="????????????? ??????????????????????????????"] {
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
        <p> Interviurile cu urologi, efectuate de editorii revistei Women's Health, au descoperit efectul uimitor al EROMAN real ??n ceea ce prive??te extinderea penisului.</p> <img src="assets/grupsag.jpg"> <strong> Radu S. / Bra??ov </strong>
        <p> A fost o mare cerere pentru adev??ratul EROMAN ??n ??ntreaga lume ??n ultimul timp. Deoarece acest produs minunat provoac?? o m??rire a penisului, precum ??i o cre??tere a poten??ei, g??sirea acestuia pe pia???? a devenit din ce ??n ce mai dificil??, pentru c?? at??t de mul??i au ??nceput s?? produc?? versiuni false ??i ineficiente ale produsului. Exist?? un singur site unde po??i g??si EROMAN original.</p>
        <p><b><a href="#form2">Cum se ob??ine produsul: F?? clic pentru a ob??ine EROMAN cu discount  &gt;&gt; </a></b></p> <a class="buton" href="#form2"> Comand?? EROMAN </a> <img src="assets/agizsakso.jpg"> <strong> Alexandru M. / Ia??i </strong>
        <p>I-am cerut so??iei s??-l aplice pe penisul meu diminea??a ??i seara. Acum suntem am??ndoi foarte ferici??i. Am reu??it s?? ob??in o dimensiune medie ??ntr-o perioad?? scurt?? de timp ??i m?? simt foarte ??mplinit??. EROMAN, e??ti minunat! </p> <img src="assets/cibilicibili.jpg"> <strong> Anton C. / Slatina </strong>
        <p> Acum o s??pt??m??n??, un prieten mi-a spus despre produsul respectiv. Nu a sunat foarte realist. Nu credeam c?? produsul ar ajuta la m??rirea penisului meu ??i c?? ??mi va ??mbun??t????i func??ia sexual??. Dar atunci c??nd un alt prieten mi-a spus despre acela??i produs, am decis s?? comand. Rezultatele pe care le-am v??zut ??n prima s??pt??m??n?? m-au surprins. Recomand acest produs eficient. </p> <img src="assets/cubuk.jpg"> <strong>Radu / Oradea </strong>
        <p> So??ia mea ??i cu mine aveam unele probleme. Am vizitat medicul s?? discut??m disfunc??ia mea sexual??. ??n acest moment, nu mai este doar pentru pl??cere, ci pentru s??n??tate ??i am ??ncercat multe alte produse. Nu am vrut s?? iau pilule periculoase. Printre produsele pe baz?? de plante pe care le-am testat p??n?? ??n prezent, EROMAN este cel mai bun f??r?? ??ndoial??. Utiliza??i acest produs ??i sunt sigur c?? ve??i vedea avantajele acestuia. </p> <img src="assets/dildo.jpg"> <strong> C??t??lin. / Cluj-Napoca</strong>
        <p> Nu am putut s?? fac sex ca ??nainte din cauza unei boli pe care am avut-o cu un an ??n urm??. So??ia mea nu a men??ionat preocup??rile ei, dar ??tiu c?? a deranjat-o. ??i ca b??rbat, este o chestie de m??ndrie. Oricum, ea a comandat acest produs pentru mine prin Internet. A??a c?? nu aveam de ales dec??t s?? ??l folosesc. L-am folosit timp de o lun?? ??i jum??tate. Este un produs eficient ??i de ??nalt?? calitate. </p>
      </div>
      <div class="yorumlar">
        <div class="titanbaslik"> Comentariile utilizatorilor </div>
        <div class="faceyorumlars">
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum1.jpg"></div>
            <div class="faceyazi">
              <p> Andrei Bercea </p> <span> Multe mul??umiri produc??torilor EROMAN pentru c?? EROMAN mi-a salvat c??snicia. Sexul obi??nuit ??i pl??cut este esen??ial ??n c??s??torie. ??n ultimii ani, devenisem mai degrab?? prieteni. Cu toate acestea, acum 2 luni am aflat despre EROMAN, iar via??a noastr?? sexual?? a f??cut o schimbare complet??. </span> <img src="assets/p2.jpg"> <strong><span> ??mi place</span> <span> Adaug?? un comentariu </span> Cu 12 zile ??n urm?? </strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum2.jpg"></div>
            <div class="faceyazi">
              <p> Radu Andrei </p> <span> Am ??nv????at multe despre mine cu EROMAN. ??nainte, penisul meu era de 10 cm ??i mi-era team?? s?? m?? apropii de fete sau s?? merg mai departe. ??n doar o lun??, penisul meu a crescut la 18cm ??i acum pot s?? m?? adresez oricarei fete cu ??ncredere. </span> <strong><span> ??mi place</span> <span> Adaug?? un comentariu </span> Cu 12 zile ??n urm?? </strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum3.jpg"></div>
            <div class="faceyazi">
              <p> Popescu Mihnea </p> <span> Am folosit EROMAN ??n fiecare sear?? ??nainte de a merge la culcare. Au trecut 4 s??pt??m??ni ??i penisul meu a crescut deja cu aproximativ 4 cm. Acesta este un adev??rat miracol. :) </span> <strong><span> ??mi place</span> <span> Adaug?? un comentariu </span> Cu 11 zile ??n urm?? </strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum4.jpg"></div>
            <div class="faceyazi">
              <p> Tony Popescu </p> <span> Penisul meu este mai mare ??i pot face sex mai mult. Fata mea geme ca o nebun??. Vecinii au ??nceput s?? se pl??ng?? de zgomot. :) Ea are orgasm de cel pu??in 3 ori ??n fiecare noapte. E chiar mai fericit?? dec??t mine cu EROMAN. </span> <strong><span>??mi place</span> <span> Adaug?? un comentariu </span> Cu 10 zile ??n urm?? </strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum5.jpg"></div>
            <div class="faceyazi">
              <p> Theodor Vicor </p> <span> Sunt c??s??torit de 5 ani ??i, pentru prima dat??, mi-am v??zut so??ia ??ip??nd c??nd ea a avut orgasm. EROMAN a adus o nou?? dimensiune vie??ii noastre sexuale. <br>
          </span> <img src="assets/p1.jpg"> <strong><span> ??mi place</span> <span> Adaug?? un comentariu </span> Cu 10 zile ??n urm?? </strong> </div>
          </div>
          <div class="yorumcevap">
            <div class="faceresim"><img src="assets/yorum6.jpg"></div>
            <div class="faceyazi">
              <p> ??tefan Vicin </p> <span> N-am avut orgasm de ani de zile. ??mi dau seama de asta ??i am emo??ii. M?? g??ndesc s?? comand un produs pentru so??ul meu, deoarece comentariul t??u m-a convins cu adev??rat. ????i mul??umesc foarte mult pentru recomandarea ta. </span> <strong><span> ??mi place</span> <span> Adaug?? un comentariu </span> Cu 10 zile ??n urm??</strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum7.jpg"></div>
            <div class="faceyazi">
              <p> Andreea Rox </p> <span> Am cump??rat acest produs din cauza problemei so??ului meu de ejaculare prematur??. Problema a disp??rut spre a 3-a zi, iar dup?? o lun??, penisul s??u crescuse foarte mult. Este mult mai eficient dec??t orice alt produs pe care l-am cump??rat ??n farmacii. ??ncepem fiecare noapte cu ajutorul EROMAN. ;) ??i nu vrem s?? mai vin?? diminea??a. </span> <img src="assets/p3.jpg"> <strong><span> ??mi place</span> <span> Adaug?? un comentariu </span> Cu 10 zile ??n urm??</strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum8.jpg"></div>
            <div class="faceyazi">
              <p> Simina </p> <span> L-a folosit cineva? </span> <strong><span> ??mi place</span> <span> Adaug?? un comentariu </span> Cu 9 zile ??n urm??</strong> </div>
          </div>
          <div class="yorumcevap">
            <div class="faceresim"><img src="assets/yorum9.jpg"></div>
            <div class="faceyazi">
              <p> Olivia Ionescu </p> <span> Eu folosesc acest produs ??nainte de sex ??i este nevoie de doar o or?? ??nainte de a ??ncepe s?? func??ioneze </span> <strong><span> ??mi place</span> <span> Adaug?? un comentariu </span> </strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum10.jpg"></div>
            <div class="faceyazi">
              <p>Mohammed Tehsin</p> <span> Am folosit acest produs ??n mod regulat timp de 3 luni. Coco??ul meu a crescut timp de 6 cm ??i este, de asemenea, mai gros. Pot s?? fac sex timp de 20-30 de minute ??nainte de a m?? termina ??i acum toate fetele vorbesc despre mine. Chiar primesc apeluri de la fete pe care nu le ??tiu. EROMAN mi-a crescut via??a sexual??. <br>
          </span> <img src="assets/ba1.jpg"> <strong><span> ??mi place</span> <span> Adaug?? un comentariu </span> Cu 8 zile ??n urm?? </strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum12.jpg"></div>
            <div class="faceyazi">
              <p>George Militaru </p> <span> Datorit?? acestei creme, penisul meu este acum mai lung at??t ??n lungime, c??t ??i ??n circumferin????. Cred c?? grosimea este la fel de important?? ca ??i lungimea. ??mi pot termina partenerul de 3-4 ori ??n fiecare noapte. </span> <img src="assets/ba2.jpg"> <strong><span>??mi place</span> <span> Adaug?? un comentariu </span> Cu 6 zile ??n urm??</strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum27.jpg"></div>
            <div class="faceyazi">
              <p> R??zvan Memron</p> <span> Acest produs a fost mult mai bun dec??t m?? a??teptam. C??nd l-am cump??rat pentru prima dat??, am avut mari speran??e, iar rezultatele sunt minunate. Pute??i vedea diferen??a dintre imagini. <br>
          </span> <img src="assets/ba4.jpg"> <strong><span>??mi place</span> <span> Adaug?? un comentariu </span> Cu 6 zile ??n urm?? </strong></div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum13.jpg"></div>
            <div class="faceyazi">
              <p> Dumitru Andrei </p> <span> Am cump??rat produsul doar pentru a avea un penis mai mare, dar s-a dovedit a fi leacul pentru toate problemele mele sexuale. Nu mai am ejaculare prematur?? sau disfunc??ie sexual??. Penisul meu a crescut cu 4,5 cm. Acest lucru este minunat! </span> <strong><span> ??mi place</span> <span> Adaug?? un comentariu </span> Cu 6 zile ??n urm??</strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum14.jpg"></div>
            <div class="faceyazi">
              <p> Drago?? Cetin </p> <span> Am comandat acest produs pentru prietenul meu. De??i tr??im ??mpreun??, via??a noastr?? sexual?? nu a fost foarte interesant?? ??n ultimul an. Dup?? o s??pt??m??n?? de utilizare, am ??nceput s?? facem sex la fel ca prima noastr?? noapte ??mpreun??. Dac?? ai probleme la pat, nu pierde ??ansa de a comanda acest produs. Am ata??at ni??te poze cu noi ??i am explicat ??n detaliu povestea noastr??, a??a c?? sper c?? o posta??i pe site. </span> <strong><span>??mi place</span> <span> Adaug?? un comentariu </span> Cu 6 zile ??n urm??</strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum15.jpg"></div>
            <div class="faceyazi">
              <p> Valentin Petcu </p> <span> De ani de zile, dimensiunea penisului meu a fost ceva care m-a ??ngrijorat. Regret to??i anii pe care i-am petrecut deprimat din cauza asta. EROMAN mi-a rezolvat problemele ??n 2 luni, iar acum coco??ul meu este de 5 cm mai mare :) </span> <img src="assets/ba6.jpg"> <strong><span> ??mi place</span> <span> Adaug?? un comentariu </span> Cu 6 zile ??n urm??</strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum16.jpg"></div>
            <div class="faceyazi">
              <p>Anton Mic </p> <span> So??ia mea are acum probleme cu luarea penisului meu ??n gur??. Pute??i vedea singuri. N-am crezut niciodat?? c?? a?? putea cre??te at??t de mult. <br>
          </span> <img src="assets/p7.jpg"> <strong><span> ??mi place</span> <span> Adaug?? un comentariu </span> Cu 5 zile ??n urm??</strong> </div>
          </div>
          <div class="yorumcevap">
            <div class="faceresim"><img src="assets/yorum17.jpg"></div>
            <div class="faceyazi">
              <p> Mirabela Popescu </p> <span> Unele femei au noroc ... Sunt at??t de invidioas??. Este foarte mare cre??terea... ??n lungime ??i circumferin????. </span> <strong><span> ??mi place</span> <span> Adaug?? un comentariu </span> Cu 5 zile ??n urm?? </strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum18.jpg"></div>
            <div class="faceyazi">
              <p>Andrei Boss </p> <span> Penisul meu este acum mai mare ??i eu decid c??nd s?? m?? termin. Am uitat totul despre ejacularea prematur??. M?? simt ca un rege ??n pat. </span> <strong><span> ??mi place</span> <span> Adaug?? un comentariu </span> Cu 5 zile ??n urm?? </strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum19.jpg"></div>
            <div class="faceyazi">
              <p> Luca Tomescu </p> <span> Acest produs mi-a salvat, practic, c??snicia. Penisul meu este cu 1,5 inch mai lung ??i m?? bucur de el. </span> <strong><span> ??mi place</span> <span> Adaug?? un comentariu </span> Cu 4 zile ??n urm?? </strong> </div>
          </div>
          <div class="yorumcevap">
            <div class="faceresim"><img src="assets/yorum20.jpg"></div>
            <div class="faceyazi">
              <p> Daniel Costi </p> <span> Aceasta este o lungire incredibil??! ??i, de asemenea, previne ejacularea prematur??? So??ul meu sufer?? de asta, deci inten??ionez s?? cump??r produsul. V-am fi recunosc??tori dac?? mi-a??i putea r??spunde. </span> <strong><span>??mi place</span> <span> Adaug?? un comentariu </span> Cu 4 zile ??n urm?? </strong> </div>
          </div>
          <div class="yorumcevap">
            <div class="faceresim"><img src="assets/yorum19.jpg"></div>
            <div class="faceyazi">
              <p> Roxana Vancea </p> <span> Da, draga mea, so??ul meu se termina, de asemenea, ??n maxim 5 minute. Cu EROMAN, nu l-am v??zut cu mai pu??in de 20 de minute. ??n cele din urm??, m?? bucur de orgasme reale. </span> <strong><span>??mi place</span> <span> Adaug?? un comentariu </span> Cu 4 zile ??n urm??</strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum22.jpg"></div>
            <div class="faceyazi">
              <p> Mihai Ertimel </p> <span> Produc??tori EROMAN, v?? mul??umesc. Mi-a??i salvat c??snicia! Dac?? cineva v?? pune la ??ndoial??, dac?? s?? cumpere sau nu produsul, s?? ??ti??i c?? nu ave??i nicio ??ndoial??. Mi-a??i salvat c??snicia ??i v?? recomand tuturor. <img src="assets/p4.jpg"> </span> <strong><span> ??mi place</span> <span> Adaug?? un comentariu </span> Cu 3 zile ??n urm??</strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum23.jpg"></div>
            <div class="faceyazi">
              <p> Andra V??duvescu </p> <span> Am v??zut EROMAN pe Twitter. Un cuplu l-a folosit, iar penisul tipului a creascut enorm. Dup?? insisten??a mea constant??, so??ul meu a cump??rat produsul ??n cele din urm?? ??i l-a folosit-o timp de o lun??. Ast??zi sunt din nou pe site pentru a cump??ra un alt pachet. ??i recomand??m tuturor. Am ??ncercat toate celelalte produse, dar EROMAN este mai bun dec??t toate. </span> <strong><span> ??mi place</span> <span> Adaug?? un comentariu </span> Cu 2 zile ??n urm?? </strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum24.jpg"></div>
            <div class="faceyazi">
              <p> Antonio Pop </p> <span> Nu este nevoie de comentarii. V?? voi ad??uga fotografiile, ve??i judeca voi ??n??iv??. Am folosit produsul timp de o lun?? ??i penisul meu a crescut cu aproximativ 4,5 cm. <br>
          </span> <img src="assets/ba8.jpg"> <strong><span> ??mi place</span> <span> Adaug?? un comentariu </span> Cu 2 zile ??n urm?? </strong> </div>
          </div>
          <div class="yorumcevap">
            <div class="faceresim"><img src="assets/yorum25.jpg"></div>
            <div class="faceyazi">
              <p> Luis Valentin </p> <span> Arat?? foarte bine. Dac??  b??rba??ii care utilizeaz?? EROMAN ar ar??ta rezultatele, astfel ??nc??t s?? nu pierdem timpul cu restul, ar fi perfect. </span> <strong><span> ??mi place</span> <span> Adaug?? un comentariu </span> Cu 2 zile ??n urm??</strong> </div>
          </div>
          <div class="yorumdis">
            <div class="faceresim"><img src="assets/yorum26.jpg"></div>
            <div class="faceyazi">
              <p> Brad Tedol </p> <span> Am cump??rat EROMAN acum o s??pt??man?? ??i dat fiind faptul c?? revista ofer?? o reducere, am cump??rat alte trei pachete. Penisul meu a crescut 2 cm ??n doar o s??pt??m??n??. Acest lucru este foarte bun. </span> <strong><span> ??mi place</span> <span> Adaug?? un comentariu </span> Cu 1 zi ??n urm??</strong> </div>
          </div> <a class="buton" href="#form2"> Comand?? EROMAN </a> </div>
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