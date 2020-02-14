<?php

$countries = include $_SERVER['DOCUMENT_ROOT']."/includes/countries.php";
include($_SERVER['DOCUMENT_ROOT']."/includes/SxGeo.php");
$SxGeo = new SxGeo();
$ip = $_SERVER['REMOTE_ADDR'];
$ipCountry = $SxGeo->get($ip);
$ipCountry = strtolower($ipCountry);
$choisedCountry='';
foreach ($countries as $key => $val) {
    if ($key == $ipCountry) {
        $choisedCountry = $key;
        break;
    }
}
$options = ['countries' => $countries];

session_start();

?>


<html lang="en">

<head>
  <script>
    window.START_LOAD_TIME = Date.now()
  </script>
  <base href="/">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Bitcoin Circuit</title>
  <meta property="og:image:url" content="http://bitcoin-circuit-app.comimg/screenshot.png">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="img/favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" integrity="sha256-piqEf7Ap7CMps8krDQsSOTZgF+MU/0MPyPW2enj5I40=" crossorigin="anonymous">
  <link href="css/index.min.css" rel="stylesheet">
  <link href="css/index1.min.css" rel="stylesheet">
</head>

<body class="iti-mobile">
<script>
  window.FUNNEL_CONFIG = '{"language":"en","ui_names":[{"name":"Jelena","surname":"Benedetti","photo":"/img/female/10.jpg"},{"name":"Kociss","surname":"D\'amico","photo":"/img/female/21.jpg"},{"name":"Pacifico","surname":"Damico","photo":"/img/male/2.jpg"},{"name":"Muzio","surname":"Caputo","photo":"/img/male/7.jpg"},{"name":"Danuta","surname":"Battaglia","photo":"/img/male/19.jpg"},{"name":"Bacchisio","surname":"Ricci","photo":"/img/male/3.jpg"},{"name":"Kristel","surname":"Bruno","photo":"/img/female/23.jpg"},{"name":"Nunzia","surname":"Fabbri","photo":"/img/female/21.jpg"},{"name":"Jack","surname":"Marino","photo":"/img/female/1.jpg"},{"name":"Mattia","surname":"Basile","photo":"/img/male/14.jpg"},{"name":"Brigitta","surname":"Pellegrini","photo":"/img/male/8.jpg"},{"name":"Guido","surname":"Serr","photo":"/img/female/22.jpg"},{"name":"Matteo","surname":"Guerra","photo":"/img/male/18.jpg"},{"name":"Marzio","surname":"Bellini","photo":"/img/female/24.jpg"},{"name":"Ortensia","surname":"Moretti","photo":"/img/male/4.jpg"},{"name":"Nico","surname":"Neri","photo":"/img/female/13.jpg"},{"name":"Raniero","surname":"Bruno","photo":"/img/female/25.jpg"},{"name":"Rosalba","surname":"Costa","photo":"/img/male/9.jpg"},{"name":"Vera","surname":"Rizzo","photo":"/img/male/24.jpg"},{"name":"Nadir","surname":"Gallo","photo":"/img/female/5.jpg"},{"name":"Serse","surname":"Conte","photo":"/img/female/17.jpg"},{"name":"Brigitta","surname":"Messina","photo":"/img/female/20.jpg"},{"name":"Nick","surname":"Battaglia","photo":"/img/female/15.jpg"},{"name":"Isira","surname":"Galli","photo":"/img/female/1.jpg"},{"name":"Gianmarco","surname":"Coppola","photo":"/img/male/15.jpg"},{"name":"Joseph","surname":"Morelli","photo":"/img/female/5.jpg"},{"name":"Siro","surname":"Serr","photo":"/img/male/17.jpg"},{"name":"Ulrico","surname":"Marini","photo":"/img/male/26.jpg"},{"name":"Clodovea","surname":"Gallo","photo":"/img/female/1.jpg"},{"name":"Sirio","surname":"Carbon","photo":"/img/female/18.jpg"},{"name":"Rufo","surname":"Battaglia","photo":"/img/male/4.jpg"},{"name":"Emanuel","surname":"Milani","photo":"/img/female/20.jpg"},{"name":"Romeo","surname":"Costantin","photo":"/img/male/24.jpg"},{"name":"Sirio","surname":"Costantin","photo":"/img/male/11.jpg"},{"name":"Edipo","surname":"Marini","photo":"/img/male/3.jpg"},{"name":"Evita","surname":"Fior","photo":"/img/male/25.jpg"},{"name":"Caligola","surname":"Caputo","photo":"/img/male/5.jpg"},{"name":"Lucrezia","surname":"Santoro","photo":"/img/male/2.jpg"},{"name":"Battista","surname":"Caputo","photo":"/img/male/26.jpg"},{"name":"Sarita","surname":"Costantin","photo":"/img/female/26.jpg"},{"name":"Domiziano","surname":"Bianc","photo":"/img/male/13.jpg"},{"name":"Gabriele","surname":"Gentile","photo":"/img/male/10.jpg"},{"name":"Noah","surname":"Ruggiero","photo":"/img/male/22.jpg"},{"name":"Selvaggia","surname":"Cattaneo","photo":"/img/female/12.jpg"},{"name":"Ausonio","surname":"De luca","photo":"/img/female/26.jpg"},{"name":"Enrica","surname":"Conte","photo":"/img/female/26.jpg"},{"name":"Sesto","surname":"Parisi","photo":"/img/female/20.jpg"},{"name":"Noemi","surname":"Ferri","photo":"/img/male/3.jpg"},{"name":"Bibiana","surname":"Costa","photo":"/img/female/3.jpg"},{"name":"Isabel","surname":"Guerra","photo":"/img/female/2.jpg"}],"country_data":{"index":112,"languages":["it"],"flag":"https://restcountries.eu/data/ita.svg","name":"Italy","nativeName":"Italia","country_code":"IT","currency_code":"EUR","currency_symbol":"€"},"validate_locale":{"email":{"remote":"Please enter a valid email"},"phone-number":{"remote":"Please enter a valid phone number"},"name":{"validText":"2 characters minimum, no numbers and special characters"},"lastname":{"validText":"2 characters minimum, no numbers and special characters"}},"currency":{"USDUSD":1,"USDEUR":0.89959},"recaptcha":"6LfpFrIUAAAAAOSv0jR7OHHuKNKpzXbE-vxx-QFN","is_sms_verification":false}'
</script>
<meta property="og:title" content="Bitcoin Circuit">
<offers-root _nghost-okf-c0="" ng-version="7.2.15">
  <section _ngcontent-okf-c0="" offerslangclass="" class="style-en">
    <router-outlet _ngcontent-okf-c0=""></router-outlet>
    <offers-sign-up _nghost-okf-c2="">
      <header _ngcontent-wln-c2="" id="wrapper">
        <div _ngcontent-wln-c2="" class="intro-section-1 widget-people warning" data-pause-time="1000" data-animate-time="0" bis_skin_checked="1">
          <p _ngcontent-wln-c2="" class="intro-p"><b data-i18n="">WARNING</b>:<span data-i18n="">Due to extremely high media demand, we will close registration as of</span> <b><span class="tomorrow-date"><span data-content="dateNow" data-format-value="DD/MM/YYYY">09/01/2020</span> </span>- <span data-i18n="">HURRY!</span> </b><span class="countdown-span" data-content="deadline" data-format-value="5">03:46</span></p>
        </div>
        <div _ngcontent-okf-c2="" class="main_row" bis_skin_checked="1">
          <div _ngcontent-okf-c2="" class="widget_box" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="country_box" bis_skin_checked="1">
              <div _ngcontent-okf-c2="" class="exclusive-offers-wrapper intro-margin-div none" bis_skin_checked="1">
                <div _ngcontent-okf-c2="" class="gtd-geo-country-flag-icon" style="background-image:url(https://restcountries.eu/data/ita.svg)" bis_skin_checked="1"></div>
                <div _ngcontent-okf-c2="" class="text" bis_skin_checked="1">
                  <p _ngcontent-okf-c2="" class="purple" data-i18n="exclusive-offer-for">Offerta esclusiva</p><span _ngcontent-okf-c2="" class="red"><p _ngcontent-okf-c2="" data-i18n="traders-in-country">Traders in</p></span></div>
              </div>
            </div>
            <div _ngcontent-okf-c2="" class="user_status animate bounceInDown" style="display:block" bis_skin_checked="1">
              <div class="media notification-top widget-people" data-init="person" bis_skin_checked="1">
                <div class="media-left" bis_skin_checked="1"><img data-attribute="src" data-content="photo" alt="Notification Photo" class="img-circle main_row user_status__img" width="57" height="57" src="/img/male/10.jpg"></div>
                <div _ngcontent-okf-c2="" class="user_status__status" bis_skin_checked="1">
                  <div data-content="name" style="display:inline-block;margin-top:15px" bis_skin_checked="1">Gabriele</div><span>&nbsp; just joined</span></div>
              </div>
            </div>
          </div>
          <div _ngcontent-okf-c2="" class="logo" bis_skin_checked="1"></div>
        </div>
        <div _ngcontent-okf-c2="" class="v2" bis_skin_checked="1">
          <div _ngcontent-okf-c2="" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="hero" bis_skin_checked="1">
              <div class="hero__call" bis_skin_checked="1">
                <div class="titlebox" bis_skin_checked="1">
                  <h1 data-i18n="bitcoin-header">Bitcoin Sta Rendendo le Persone Ricche</h1>
                  <p class="video-subheader"><span data-i18n="bitcoin-sub" class="bitcoin-sub">E tu puoi Diventare Il</span> <span class="bitcoin-sub-b" data-i18n="bitcoin-sub-b">Prossimo Milionario...</span></p>
                </div>
              </div>
              <div class="hero__container" bis_skin_checked="1">
                <div class="hero__video" bis_skin_checked="1">
                  <video class="video" id="video-lite" controls="" muted="" autoplay="autoplay" fluid="" playsinline="" controlslist="nodownload" preload="none" video-ready="true">
                    <source data-src="/media/en-1.mp4"  type="video/mp4" src="/media/en-1.mp4">
                    <track kind="subtitles" srclang="en" data-src-ar="subtitles/Spanish.vtt" data-srclang="es" data-src-at="subtitles/German.vtt" data-src-by="subtitles/Russian.vtt" data-src-bo="subtitles/Spanish.vtt" data-src-cl="subtitles/Spanish.vtt" data-src-co="subtitles/Spanish.vtt" data-src-cr="subtitles/Spanish.vtt" data-src-cu="subtitles/Spanish.vtt" data-src-dk="subtitles/Danish.vtt" data-src-do="subtitles/Spanish.vtt" data-src-ec="subtitles/Spanish.vtt" data-src-sv="subtitles/Spanish.vtt" data-src-ee="subtitles/Estonian.vtt" data-src-fo="subtitles/Danish.vtt" data-src-ge="subtitles/Russian.vtt" data-src-de="subtitles/German.vtt" data-src-it="subtitles/Italian.vtt" data-src-kz="subtitles/Russian.vtt" data-src-kg="subtitles/Russian.vtt" data-src-lv="subtitles/Latvian.vtt" data-src-lt="subtitles/Lithuanian.vtt" data-src-mx="subtitles/Spanish.vtt" data-src-md="subtitles/Russian.vtt" data-src-nl="subtitles/Dutch.vtt" data-src-no="subtitles/Norwegian.vtt" data-src-pa="subtitles/Spanish.vtt" data-src-pe="subtitles/Spanish.vtt" data-src-pl="subtitles/Polish.vtt" data-src-pr="subtitles/Spanish.vtt" data-src-ru="subtitles/Russian.vtt" data-src-es="subtitles/Spanish.vtt" data-src-se="subtitles/Swedish.vtt" data-src-ch="subtitles/German.vtt" data-src-ua="subtitles/Ukrainian.vtt" data-src-uz="subtitles/Russian.vtt" data-src-fr="subtitles/French.vtt" data-src-ko="subtitles/Korean.vtt" data-src-ae="subtitles/Arabic.vtt" data-src-fi="subtitles/Finnish.vtt" data-src-tw="subtitles/Chinese.vtt" data-src-cn="subtitles/Chinese.vtt" data-src-pt="assets/subtitles/Portuguese.vtt" data-src-br="assets/subtitles/Portuguese.vtt" data-src-be="subtitles/French.vtt" default="" src="subtitles/Italian.vtt">
                  </video>
                </div>
                <div _ngcontent-okf-c2="" class="hero__reg_form" id="signUpForm" bis_skin_checked="1">
                  <h3 _ngcontent-okf-c2="" data-i18n="form-header">Cambia la tua Vita Adesso!</h3>
                  <offers-reg-form _ngcontent-okf-c2="" _nghost-okf-c4="">
                    <div _ngcontent-okf-c4="" id="regForm" class="top-form-wrapper member-form scroll-trigger reg-form member-form_en" bis_skin_checked="1">
                      <div _ngcontent-okf-c4="" class="form-container-unique ti-form-1" id="form1" bis_skin_checked="1">
                        <form class="form" method="post" action="mail.php" enctype="application/json" novalidate="novalidate">
                          <div _ngcontent-okf-c4="" class="form-group field-ti0form-first_name" bis_skin_checked="1">
                            <input data-i18n="form-first-name-place-holder" class="form-control input regFormFirstName" name="name" type="text" placeholder="Nome">
                            <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                          </div>
                          <div _ngcontent-okf-c4="" class="form-group field-ti0form-last_name" bis_skin_checked="1">
                            <input data-i18n="form-last-name-place-holder" class="form-control input regFormLastNname" name="secondname" type="text" placeholder="Cognome">
                            <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                          </div>
                          <div _ngcontent-okf-c4="" class="form-group field-ti0form-email email-group" bis_skin_checked="1">
                            <input data-i18n="form-email-place-holder" class="reg-email input form-control regFormEmail" name="email" type="email" placeholder="Email">
                            <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                          </div>
                          <div class="form-content form-actions" bis_skin_checked="1">
                            <div class="form-group" bis_skin_checked="1">
                              <select name="country" class="bfh-countries form-control input">
                                <option value="">Country</option>

                                  <?php if (isset($countries)) : foreach ($countries as $country => $country_data) : ?>
                                      <?php
                                      $selected = '';
                                      if ($choisedCountry!=null){
                                          if ($choisedCountry== $country) {
                                              $phone_code = $country_data['code'];
                                              $selected = 'selected';
                                          } else {
                                              $selected = '';
                                          }}
                                      ?>

                                    <option <?=$selected;?> data-phone-code="<?=$country_data['code']?>" value="<?=$country_data['full_name'];?>"><?=$country_data['full_name'];?></option>
                                  <?php endforeach; endif; ?>

                              </select>
                            </div>
                            <div class="form-group">
                              <input class="form-control input" name="phone" type="phone" placeholder="Telefono">
                              <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                            </div>
                            <button data-i18n="form-button" type="submit" class="get_acc button button-primary register-btn register-btn-en regFormButton">Dammi adesso l'accesso!</button>
                          </div>
                          <input type="hidden" name="country" value="it">
                          <div class="form__preloader" bis_skin_checked="1">
                            <div class="form__loading_2" bis_skin_checked="1">
                              <span class="percent__progress"></span>
                              <span class="chart-one animate">
      <figcaption>
      </figcaption>
    </span>
                              <div class="form__loader_2" bis_skin_checked="1"></div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </offers-reg-form>
                  <offers-confirm-text _ngcontent-okf-c2="" _nghost-okf-c5="">
                    <div _ngcontent-okf-c5="" class="confirm-text" bis_skin_checked="1">
                      <p _ngcontent-okf-c5="" class="confirm-text_links"><span _ngcontent-okf-c5="" data-i18n="CONFIRM">Cliccando sul tasto Iscrizione - Sign Up accetti i nostri </span><span _ngcontent-okf-c5=""><offers-basic-modal-popup _ngcontent-okf-c5="" _nghost-okf-c8=""><a _ngcontent-okf-c8="" data-popbox-target="privacy-policy" id="privacy-policy" data-i18n="CONFIRM_PRIVACY">Politica sulla privacy</a></offers-basic-modal-popup></span><span _ngcontent-okf-c5="" data-i18n="CONFIRM_AND">&ensp;d'uso e la nostra&ensp;</span><span _ngcontent-okf-c5=""><offers-basic-modal-popup _ngcontent-okf-c5="" _nghost-okf-c8=""><a _ngcontent-okf-c8="" data-popbox-target="terms" id="terms" data-i18n="CONFIRM_TERMS">Termini e Condizioni</a></offers-basic-modal-popup></span><span _ngcontent-okf-c5=""></span></p>
                    </div>
                  </offers-confirm-text>
                  <p class="form__error">Something went wrong <br> Please try again later</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div _ngcontent-okf-c2="" class="content" bis_skin_checked="1">
        <div _ngcontent-okf-c2="" class="partners_box" bis_skin_checked="1">
          <ul _ngcontent-okf-c2="">
            <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="bitgo logo" class="logo" src="img/bitgo.jpg"></li>
            <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="norton logo" class="logo" src="img/norton.jpg"></li>
            <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="secure trading logo" class="logo" src="img/secure-trading.jpg"></li>
            <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="mcafee logo" class="logo" src="img/mcafee.jpg"></li>
            <li _ngcontent-okf-c2="" class="partners_box__crypto">
              <crypto-price-widget _ngcontent-okf-c2="" _nghost-okf-c6="">
                <div _ngcontent-okf-c6="" class="wrapper" bis_skin_checked="1">
                  <div _ngcontent-okf-c6="" class="wrapper__item wrapper__item_bid" style="color:#f79721" bis_skin_checked="1"><span _ngcontent-okf-c6="" class="item__status">BID</span><span _ngcontent-okf-c6="" class="item__symbol"> $ </span><span _ngcontent-okf-c6="" class="item__price">10,327.03</span></div>
                  <div _ngcontent-okf-c6="" class="wrapper__item wrapper__item_ask" style="color:#5a6171" bis_skin_checked="1"><span _ngcontent-okf-c6="" class="item__status">ASK</span><span _ngcontent-okf-c6="" class="item__symbol"> $ </span><span _ngcontent-okf-c6="" class="item__price">10,327.03</span></div>
                </div>
              </crypto-price-widget>
            </li>
          </ul>
        </div>
        <div _ngcontent-okf-c2="" class="area" bis_skin_checked="1">
          <div _ngcontent-okf-c2="" class="join_us" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="text_box" bis_skin_checked="1">
              <h1 _ngcontent-okf-c2="" data-i18n="join-us-and-start">Unisciti a Noi e Inizia a Diventare Ricco</h1>
              <p _ngcontent-okf-c2="" data-i18n="join-us-description">La Bitcoin Circuit è un gruppo esclusivo riservato a persone che hanno approfittato degli incredibili guadagni che il Bitcoin offre e che nel farlo hanno messo da parte una fortuna. I nostri membri si godono vacanze in giro per il mondo mentre guadagnano con il loro laptop con soltanto un paio di minuti di 'lavoro' al giorno.</p>
            </div>
            <div _ngcontent-okf-c2="" class="other_logo__box" bis_skin_checked="1">
              <h4 _ngcontent-okf-c2="" data-i18n="as-seen-on">Come visto su</h4>
              <ul _ngcontent-okf-c2="">
                <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/Shape_17_copy.jpg"></li>
                <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/Artwork_1.jpg"></li>
                <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/ft-com-1.jpg"></li>
                <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/time.jpg"></li>
              </ul>
            </div>
          </div>
        </div>
        <h2 _ngcontent-okf-c2="" class="oligarchs__title" data-i18n="testimonials-block-header">Testimonianze reali dai nostri utenti</h2>
        <div _ngcontent-okf-c2="" class="oligarchs" bis_skin_checked="1">
          <div _ngcontent-okf-c2="" class="oligarch_box" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="review" bis_skin_checked="1">
              <p _ngcontent-okf-c2=""><i>'<span data-i18n="testimonials-1-text">Sono stato un membro della Bitcoin Circuit per soli 47 giorni. Ma la mia vita è già cambiata! Non solo ho guadagnato i miei primi 10K€, ma ho anche incontrato dei personaggi incredibili durante questo percorso. Grazie, Bitcoin Circuit!</span>'</i></p>
            </div>
            <div _ngcontent-okf-c2="" class="detail" bis_skin_checked="1">
              <p _ngcontent-okf-c2="" data-i18n="testimonials-1-name">Marco R.</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-1-location">Reggio Emilia, RE</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-profit1">Profitto $8,519</p>
            </div>
          </div>
          <div _ngcontent-okf-c2="" class="oligarch_box" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="review" bis_skin_checked="1">
              <p _ngcontent-okf-c2=""><i>'<span data-i18n="testimonials-2-text">Adesso posso dire di sapere com'è vivere un sogno. Non mi sento più come una persona che guarda da fuori come gli altri si divertono. La Bitcoin Circuit mi ha permesso di ritirarmi prima dal lavoro e di far parte di quel 1% di persone che se la godono</span></i></p>
            </div>
            <div _ngcontent-okf-c2="" class="detail" bis_skin_checked="1">
              <p _ngcontent-okf-c2="" data-i18n="testimonials-2-name">Giovanna A.</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-2-location">Milano, MI</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-profit2">Profitto $10,578</p>
            </div>
          </div>
          <div _ngcontent-okf-c2="" class="oligarch_box" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="review" bis_skin_checked="1">
              <p _ngcontent-okf-c2=""><i>'<span data-i18n="testimonials-3-text">Sembrerà strano, ma ero un investitore nella Borsa di Milano. Non ho mai visto niente di simile in 10 anni di lavoro presso la mia società. I miei colleghi pensarono che fossi pazzo quando mi licenziai dall'azienda per investire a tempo pieno nel software della Bitcoin Circuit. Ma dopo 38,459€ di guadagni, tutti i miei colleghi adesso mi stanno PREGANDO di farli entrare.</span></i></p>
            </div>
            <div _ngcontent-okf-c2="" class="detail" bis_skin_checked="1">
              <p _ngcontent-okf-c2="" data-i18n="testimonials-3-name">Valeria I.</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-3-location">Roma, RO</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-profit3">Profitto $7,192</p>
            </div>
          </div>
          <div _ngcontent-okf-c2="" class="oligarch_box" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="review" bis_skin_checked="1">
              <p _ngcontent-okf-c2=""><i>'<span data-i18n="testimonials-4-text">Due settimane fa, ero davvero giù. Non avevo sperane e pensavo che la mia vita fosse finita. Adesso sto guadagnando €1,261.42 ogni giorno. E per la prima volta in due mesi, il mio conto non è in rosso. Grazie, Bitcoin Circuit!</span></i></p>
            </div>
            <div _ngcontent-okf-c2="" class="detail" bis_skin_checked="1">
              <p _ngcontent-okf-c2="">Mark K.</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-4-location">Palermo, PA</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-profit4">Profitto $12,923</p>
            </div>
          </div>
        </div>
        <div _ngcontent-okf-c2="" class="v2" bis_skin_checked="1">
          <div _ngcontent-okf-c2="" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="advantages2" bis_skin_checked="1">
              <div _ngcontent-okf-c2="" class="advantages__success" bis_skin_checked="1">
                <div _ngcontent-okf-c2="" class="success_box" bis_skin_checked="1">
                  <div _ngcontent-okf-c2="" class="iconka" bis_skin_checked="1"></div>
                  <h4 _ngcontent-okf-c2="" data-i18n="laser-accurate-header-1">Perfomance con precisione Laser</h4>
                  <p _ngcontent-okf-c2="" data-i18n="laser-accurate-description">Non esistono altre app di trading al mondo in grado di avere il 99,4% di accuratezza che la Bitcoin Circuit è in grado di garantire. Questo è il perché i nostri membri in tutto il mondo si fidano di duplicare, triplicare e quadruplicare i soldi che hanno duramente guadagnato.</p>
                </div>
                <div _ngcontent-okf-c2="" class="success_box" bis_skin_checked="1">
                  <div _ngcontent-okf-c2="" class="iconka" bis_skin_checked="1"></div>
                  <h4 _ngcontent-okf-c2="" data-i18n="superior-technology-header-1">Tecnologia Superiore</h4>
                  <p _ngcontent-okf-c2="" data-i18n="superior-technology-description">Il software della Bitcoin Circuit è stato creato utilizzando il linguaggio di programmazione mai sviluppato nel campo del trading che il mondo abbia mai visto. Il software è un passo avanti al mercato di 0,01 secondi. Questo 'salto nel tempo' rende questo software la migliore app di trading esistente sul pianeta.</p>
                </div>
                <div _ngcontent-okf-c2="" class="success_box" bis_skin_checked="1">
                  <div _ngcontent-okf-c2="" class="iconka" bis_skin_checked="1"></div>
                  <h4 _ngcontent-okf-c2="" data-i18n="award-winning-header-1">App di trading vincitrice di numerosi premi</h4>
                  <p _ngcontent-okf-c2="" data-i18n="award-winning-description">L'app Bitcoin Circuit ha vinto numerosi riconoscimenti. Il premio più recente che abbiamo avuto l'onore di ricevere è stato ottenere la prima posizione nella categoria dei software di trading dalla principale associazione di trading degli Stati Uniti.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div _ngcontent-okf-c2="" class="results" bis_skin_checked="1">
          <button _ngcontent-okf-c2="" class="but2 scroll-to" data-move-to="bitcoin-sub-b" data-i18n="join-now-button">Unisciti Adesso!</button>
          <h2 _ngcontent-okf-c2="" class="results__title" data-i18n="live-profit-table-header">Profitti in Tempo Reale!</h2>
          <section class="live-results-section text-center">
            <div class="container relative tablica" bis_skin_checked="1">
              <div class="live-results-table-wrapper tablica__wrapper" bis_skin_checked="1">
                <table class="table table-win live-results-table">
                  <thead class="thead">
                  <tr>
                    <th scope="col" data-i18n="table-column-1" style="font-weight:600!important">La Bitcoin Circuit</th>
                    <th scope="col" data-i18n="table-column-2" style="font-weight:600!important">Profitti</th>
                    <th scope="col" data-i18n="table-column-3" style="font-weight:600!important">Tempo di Scambio</th>
                    <th scope="col" data-i18n="table-column-4" style="font-weight:600!important">Criptovaluta</th>
                    <th scope="col" data-i18n="table-column-5" style="font-weight:600!important">Risultato</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><b>Brigitta M.</b> just won...</td>
                    <td><b>219€</b></td>
                    <td>09/01/2020</td>
                    <td>BTC/ETH</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  <tr>
                    <td><b>Caligola C.</b> just won...</td>
                    <td><b>300€</b></td>
                    <td>09/01/2020</td>
                    <td>LTC/EOS</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  <tr>
                    <td><b>Rufo B.</b> just won...</td>
                    <td><b>403€</b></td>
                    <td>09/01/2020</td>
                    <td>BTC/ETH</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  <tr>
                    <td><b>Joseph M.</b> just won...</td>
                    <td><b>139€</b></td>
                    <td>09/01/2020</td>
                    <td>ETH/LTC</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  <tr>
                    <td><b>Ausonio D.</b> just won...</td>
                    <td><b>255€</b></td>
                    <td>09/01/2020</td>
                    <td>BTC/ETH</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  <tr>
                    <td><b>Siro S.</b> just won...</td>
                    <td><b>635€</b></td>
                    <td>09/01/2020</td>
                    <td>BTC/ETH</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  <tr>
                    <td><b>Sirio C.</b> just won...</td>
                    <td><b>141€</b></td>
                    <td>09/01/2020</td>
                    <td>ETH/LTC</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  <tr>
                    <td><b>Nico N.</b> just won...</td>
                    <td><b>197€</b></td>
                    <td>09/01/2020</td>
                    <td>LTC/EOS</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  <tr>
                    <td><b>Ortensia M.</b> just won...</td>
                    <td><b>527€</b></td>
                    <td>09/01/2020</td>
                    <td>ETH/LTC</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>
        </div>
        <div _ngcontent-okf-c2="" class="how_it_works" bis_skin_checked="1">
          <h2 _ngcontent-okf-c2="" class="how_it_works__title" data-i18n="how-it-works-header">Come funziona</h2>
          <div _ngcontent-okf-c2="" class="how_it_works__success" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="success_box" bis_skin_checked="1">
              <div _ngcontent-okf-c2="" class="iconka" bis_skin_checked="1"></div>
              <h4 _ngcontent-okf-c2="" data-i18n="how-it-works-1-header">Registrati sul sito</h4>
              <p _ngcontent-okf-c2="" data-i18n="how-it-works-1-description">Una volta che la tua registrazione è accettata, diventerai automaticamente il nuovo membro della Bitcoin Circuit. E potrai richedere di ottenere gratuitamente il nostro software proprietario per il trading in bitcoin</p>
            </div>
            <div _ngcontent-okf-c2="" class="success_box" bis_skin_checked="1">
              <div _ngcontent-okf-c2="" class="iconka" bis_skin_checked="1"></div>
              <h4 _ngcontent-okf-c2="" data-i18n="how-it-works-2-header">Deposita nel tuo account</h4>
              <p _ngcontent-okf-c2=""><span data-i18n="how-it-works-2-description">Come in ogni altra attività, hai bisogno di capitale per iniziare. Così per iniziare ad approfittare della Bitcoin Circuit, devi investire quasiasi somma tu desideri, a partire da 250€ o più.</span> <span>$</span>250 <span>or more.</span></p>
            </div>
            <div _ngcontent-okf-c2="" class="success_box" bis_skin_checked="1">
              <div _ngcontent-okf-c2="" class="iconka" bis_skin_checked="1"></div>
              <h4 _ngcontent-okf-c2="" data-i18n="how-it-works-3-header">Ultimo passo</h4>
              <p _ngcontent-okf-c2="" data-i18n="how-it-works-3-description">Clicca su trade per iniziare a fare trading in modo automatico, preciso e accurato grazie al nostro pluripremiato algoritmo. Puoi anche impostare il trading in manuale se preferisci fare trading da solo.</p>
            </div>
          </div>
        </div>
        <div _ngcontent-okf-c2="" class="ask" bis_skin_checked="1">
          <button _ngcontent-okf-c2="" class="but1 scroll-to" data-move-to="bitcoin-sub-b" data-i18n="open-free-account-button">Apri un account gratuito</button>
          <h2 _ngcontent-okf-c2="" data-i18n="frequently-asked-questions-header">Domande più comuni</h2>
          <div _ngcontent-okf-c2="" class="ask_container" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="ask_box" bis_skin_checked="1">
              <h4 _ngcontent-okf-c2="" data-i18n="faq-1-question">Che tipo di risultati posso aspettarmi?</h4>
              <p _ngcontent-okf-c2=""><span data-i18n="faq-1-answer-1">I membri della Bitcoin Circuit solitamente guadagnano un minimo di</span> <span>$</span>1100 <span data-i18n="faq-1-answer-2">al giorno</span></p>
            </div>
            <div _ngcontent-okf-c2="" class="ask_box" bis_skin_checked="1">
              <h4 _ngcontent-okf-c2="" data-i18n="faq-2-question">Quante ore di lavoro al giorno devo lavorare?</h4>
              <p _ngcontent-okf-c2="" data-i18n="faq-2-answer">I nostri membri lavorano in media 20 minuti al giorno o meno. Questo perché il software gestisce in autonomia il trading e l'ammontare del 'lavoro' richiesto è minimo.</p>
            </div>
            <div _ngcontent-okf-c2="" class="ask_box" bis_skin_checked="1">
              <h4 _ngcontent-okf-c2="" data-i18n="faq-3-question">Qual è il massimo che posso fare?</h4>
              <p _ngcontent-okf-c2="" data-i18n="faq-3-answer">I tuoi profitti sono illimitati con la Bitcoin Circuit. Alcuni membri hanno guadagnato il loro primo milione in appena 61 giorni.</p>
            </div>
            <div _ngcontent-okf-c2="" class="ask_box" bis_skin_checked="1">
              <h4 _ngcontent-okf-c2="" data-i18n="faq-4-question">Quanto costa il software?</h4>
              <p _ngcontent-okf-c2="" data-i18n="faq-4-answer">I membri della Bitcoin Circuit ricevono una copia del nostro software proprietario senza costi aggiuntivi. Per diventare un membro, compila semplicemente il form su questa pagina.</p>
            </div>
            <div _ngcontent-okf-c2="" class="ask_box" bis_skin_checked="1">
              <h4 _ngcontent-okf-c2="" data-i18n="faq-5-question">Si tratta di MLM o di Affiliate Marketing?</h4>
              <p _ngcontent-okf-c2="" data-i18n="faq-5-answer">Non si tratta di MLM, affiliate marketing o qualsiasi cosa del genere. Il software consegue guadagni con il 99,4% di accuratezza.</p>
            </div>
            <div _ngcontent-okf-c2="" class="ask_box" bis_skin_checked="1">
              <h4 _ngcontent-okf-c2="" data-i18n="faq-6-question">Ci sono commissioni?</h4>
              <p _ngcontent-okf-c2="" data-i18n="faq-6-answer">Non ci sono costi nascosti. Nè costi di brokeraggio nè commissioni. Tutti i tuoi soldi sono 100% tuoi e sarai libero di ritilarli in qualunque momento del giorno tu decida senza ritardo.</p>
            </div>
          </div>
        </div>
        <div _ngcontent-okf-c2="" class="v2" bis_skin_checked="1">
          <div _ngcontent-okf-c2="" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="reg_block2" bis_skin_checked="1">
              <div _ngcontent-okf-c2="" class="center" bis_skin_checked="1">
                <div _ngcontent-okf-c2="" class="hero__reg_form" bis_skin_checked="1">
                  <div _ngcontent-okf-c4="" id="regForm" class="member-form_en" bis_skin_checked="1">
                    <div _ngcontent-okf-c4="" class="form-container-unique ti-form-1" id="form1" bis_skin_checked="1">
                      <form class="form" method="post" action="mail.php" enctype="application/json" novalidate="novalidate">
                        <div _ngcontent-okf-c4="" class="form-group field-ti0form-first_name" bis_skin_checked="1">
                          <input data-i18n="form-first-name-place-holder" class="form-control regFormFirstName input" name="name" type="text" placeholder="Nome">
                          <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                        </div>
                        <div _ngcontent-okf-c4="" class="form-group field-ti0form-last_name" bis_skin_checked="1">
                          <input data-i18n="form-last-name-place-holder" class="form-control regFormLastNname input" name="secondname" type="text" placeholder="Cognome">
                          <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                        </div>
                        <div _ngcontent-okf-c4="" class="form-group field-ti0form-email email-group" bis_skin_checked="1">
                          <input data-i18n="form-email-place-holder" class="reg-email form-control regFormEmail input" name="email" type="email" placeholder="Email">
                          <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                        </div>
                        <div class="form-content form-actions" bis_skin_checked="1">
                          <div class="form-group" bis_skin_checked="1">
                            <select name="country" class="bfh-countries form-control input">
                              <option value="">Country</option>

                                <?php if (isset($countries)) : foreach ($countries as $country => $country_data) : ?>
                                    <?php
                                    $selected = '';
                                    if ($choisedCountry!=null){
                                        if ($choisedCountry== $country) {
                                            $phone_code = $country_data['code'];
                                            $selected = 'selected';
                                        } else {
                                            $selected = '';
                                        }}
                                    ?>

                                  <option <?=$selected;?> data-phone-code="<?=$country_data['code']?>" value="<?=$country_data['full_name'];?>"><?=$country_data['full_name'];?></option>
                                <?php endforeach; endif; ?>

                            </select>
                          </div>
                          <div class="form-group">
                            <input class="form-control input" name="phone" type="phone" placeholder="Telefono">
                            <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                          </div>
                          <button data-i18n="get-started-now-button" type="submit" class="get_acc button button-primary register-btn register-btn-en regFormButton">Inizia adesso</button>
                        </div>
                        <input type="hidden" name="country" value="it">
                        <div class="form__preloader" bis_skin_checked="1">
                          <div class="form__loading_2" bis_skin_checked="1">
                            <span class="percent__progress"></span>
                            <span class="chart-one animate">
      <figcaption>
      </figcaption>
    </span>
                            <div class="form__loader_2" bis_skin_checked="1"></div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <offers-confirm-text _ngcontent-okf-c2="" _nghost-okf-c5="">
                    <div _ngcontent-okf-c5="" class="confirm-text" bis_skin_checked="1">
                      <p _ngcontent-okf-c5="" class="confirm-text_links"><span _ngcontent-okf-c5="" data-i18n="CONFIRM">Cliccando sul tasto Iscrizione - Sign Up accetti i nostri </span><span _ngcontent-okf-c5=""><offers-basic-modal-popup _ngcontent-okf-c5="" _nghost-okf-c8=""><a _ngcontent-okf-c8="" data-popbox-target="privacy-policy" id="privacy-policy" data-i18n="CONFIRM_PRIVACY">Politica sulla privacy</a></offers-basic-modal-popup></span><span _ngcontent-okf-c5="" data-i18n="CONFIRM_AND">&ensp;d'uso e la nostra&ensp;</span><span _ngcontent-okf-c5=""><offers-basic-modal-popup _ngcontent-okf-c5="" _nghost-okf-c8=""><a _ngcontent-okf-c8="" data-popbox-target="terms" id="terms" data-i18n="CONFIRM_TERMS">Termini e Condizioni</a></offers-basic-modal-popup></span><span _ngcontent-okf-c5=""></span></p>
                    </div>
                  </offers-confirm-text>
                  <p class="form__error">Something went wrong <br> Please try again later</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer _ngcontent-okf-c2="" class="">
          <div _ngcontent-okf-c2="" class="other_logo__box" bis_skin_checked="1">
            <ul _ngcontent-okf-c2="">
              <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/mcafee.png"></li>
              <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/ersign.png"></li>
              <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/Symantec.png"></li>
              <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/geotrust.png"></li>
              <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/21-layers.png"></li>
            </ul>
          </div>
          <div _ngcontent-okf-c2="" class="risk" bis_skin_checked="1">
            <p _ngcontent-okf-c2="" data-i18n="NOTE_DESC"><b>Nota importante sui rischi :</b>Il trading con FX e CFD comporta un elevato rischio di perdite a causa dell’effetto leva che potrebbe portare alla perdita totale del capitale e potrebbe non essere indicato per tutti i tipi di investitori. Si prega di leggere la nostra avvertenza sui rischi e quella del broker di riferimento al quale ci si registra per comprendere esattamente i rischi esistenti prima di procedere, tenendo conto della propria esperienza in materia. Se necessario, richiedere una consulenza indipendente. Le informazioni e i documenti di sintesi contenuti nel presente sito sono da intendersi di natura meramente generale e non contemplano circostanze, situazione economica ed esigenze personali. Il contratto di intermediazione col cliente va esaminato attentamente e occorre richiedere una consulenza indipendente prima di decidere se il trading con tali prodotti sia confacente al proprio profilo.</p>
          </div>
          <div class="container menu" bis_skin_checked="1">
            <ul class="footer-ul">
              <li><a class="custom_a" data-popbox-target="earnings-disclaimer" id="earnings-disclaimer" href="javascript:;" data-i18n="" bis_skin_checked="1">DISCLAIMER</a></li>
              <li><a class="custom_a" data-popbox-target="terms" id="terms" href="javascript:;" data-i18n="" bis_skin_checked="1">TERMS</a></li>
              <li><a class="custom_a" data-popbox-target="privacy-policy" id="privacy-policy" href="javascript:;" data-i18n="" bis_skin_checked="1">PRIVACY</a></li>
              <li><a class="custom_a" data-popbox-target="spam-policy" id="spam-policy" href="javascript:;" data-i18n="" bis_skin_checked="1">REPORT ABUSE</a></li>
            </ul>
          </div>
        </footer>
        <div data-popbox-id="privacy-policy" class="popbox footer-info-view" bis_skin_checked="1">
          <button data-popbox-close="privacy-policy" class="btn_close">X</button>
          <div class="popbox_container" bis_skin_checked="1">
            <div class="nobottommargin" bis_skin_checked="1">
              <iframe data-src="/pages/privacy-policy.html" frameborder="0" class="popbox-load"></iframe>
            </div>
          </div>
        </div>
        <div data-popbox-id="terms" class="popbox footer-info-view" bis_skin_checked="1">
          <button data-popbox-close="terms" class="btn_close">X</button>
          <div class="popbox_container" bis_skin_checked="1">
            <div class="nobottommargin" bis_skin_checked="1">
              <iframe data-src="/pages/terms.html" frameborder="0" class="popbox-load"></iframe>
            </div>
          </div>
        </div>
        <div data-popbox-id="earnings-disclaimer" class="popbox footer-info-view" bis_skin_checked="1">
          <button data-popbox-close="earnings-disclaimer" class="btn_close">X</button>
          <div class="popbox_container" bis_skin_checked="1">
            <div class="nobottommargin" bis_skin_checked="1">
              <iframe data-src="/pages/earnings-disclaimer.html" frameborder="0" class="popbox-load"></iframe>
            </div>
          </div>
        </div>
        <div data-popbox-id="spam-policy" class="popbox footer-info-view" bis_skin_checked="1">
          <button data-popbox-close="spam-policy" class="btn_close">X</button>
          <div class="popbox_container" bis_skin_checked="1">
            <div class="nobottommargin" bis_skin_checked="1">
              <iframe data-src="/pages/spam-policy.html" frameborder="0" class="popbox-load"></iframe>
            </div>
          </div>
        </div>
      </div>
    </offers-sign-up>
  </section>
</offers-root>
<style>
  .btc-widget-block {
    z-index: 99999;
    position: fixed;
    bottom: 10px;
    left: 10px
  }

  @media (max-width:500px) {
    .btc-widget-block {
      display: none
    }
  }
</style>
<div class="btc-widget-block" bis_skin_checked="1">&#8203; &#8203;
  <div id="btc-widget" style="display:block;background-color:#fff;width:285px;border:2px solid #e1e5ea;border-radius:10px;padding:10px 0;font-family:&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif;overflow:hidden" bis_skin_checked="1"><img alt="logo" src="img/btc.png" id="btc-widget-image" style="width:64px;height:64px;margin:0 40px 0 15px;float:left">
    <div id="btc-widget-wrapper" style="padding-top:9px" bis_skin_checked="1">
      <div id="btc-widget-title" style="color:#1070e0;font-weight:700" bis_skin_checked="1">Bitcoin</div>
      <div style="font-weight:700;font-size:1.17em" bis_skin_checked="1"><span id="btc-widget-price-block" style="color:red">$10315.73</span>&nbsp;<span id="btc-widget-direction-block" style="color:red">↓</span></div>
    </div>
  </div>
</div>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="js/index.js" async=""></script>
<script type="text/javascript" src="js/index1.js" async=""></script>
<script type="text/javascript" src="js/form.js" async=""></script>
<div data-popbox-id="redirect-iframe" class="popbox footer-info-view" bis_skin_checked="1">
  <div class="popbox_container" bis_skin_checked="1">
    <div class="nobottommargin redirect-container" bis_skin_checked="1"></div>
  </div>
</div>
</body>

</html>