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

<body>
<script>
  window.FUNNEL_CONFIG = '{"language":"en","ui_names":[{"name":"Gerardo","surname":"Elizondo","photo":"/ui-names/photos/male/18.jpg"},{"name":"María José","surname":"Mojica","photo":"/ui-names/photos/male/25.jpg"},{"name":"Guillermina","surname":"Gaona","photo":"/ui-names/photos/male/12.jpg"},{"name":"Olivia","surname":"Velásquez","photo":"/ui-names/photos/female/11.jpg"},{"name":"Jerónimo","surname":"Roque","photo":"/ui-names/photos/female/13.jpg"},{"name":"María José","surname":"Benavídez","photo":"/ui-names/photos/male/10.jpg"},{"name":"Santiago","surname":"Rico","photo":"/ui-names/photos/male/9.jpg"},{"name":"Margarita","surname":"Tejeda","photo":"/ui-names/photos/male/25.jpg"},{"name":"Verónica","surname":"Puga","photo":"/ui-names/photos/female/21.jpg"},{"name":"Graciela","surname":"Solorzano","photo":"/ui-names/photos/female/21.jpg"},{"name":"Juan","surname":"Garibay","photo":"/ui-names/photos/female/8.jpg"},{"name":"Carmen","surname":"Irizarry","photo":"/ui-names/photos/female/11.jpg"},{"name":"Sofia","surname":"Mayorga","photo":"/ui-names/photos/female/6.jpg"},{"name":"César","surname":"Santana","photo":"/ui-names/photos/female/14.jpg"},{"name":"Rodrigo","surname":"Carrera","photo":"/ui-names/photos/male/19.jpg"},{"name":"Luz","surname":"Mascareñas","photo":"/ui-names/photos/female/6.jpg"},{"name":"Joaquín","surname":"Delgadillo","photo":"/ui-names/photos/female/6.jpg"},{"name":"Horacio","surname":"Ayala","photo":"/ui-names/photos/male/15.jpg"},{"name":"Adela","surname":"Borrego","photo":"/ui-names/photos/male/16.jpg"},{"name":"José Luis","surname":"Suárez","photo":"/ui-names/photos/male/24.jpg"},{"name":"Mariana","surname":"Alonso","photo":"/ui-names/photos/female/12.jpg"},{"name":"Joaquín","surname":"Sanches","photo":"/ui-names/photos/female/13.jpg"},{"name":"Rosa","surname":"Gamez","photo":"/ui-names/photos/female/16.jpg"},{"name":"Marcos","surname":"Magaña","photo":"/ui-names/photos/male/15.jpg"},{"name":"Susana","surname":"Escobar","photo":"/ui-names/photos/male/26.jpg"},{"name":"Elisa","surname":"Cabán","photo":"/ui-names/photos/male/10.jpg"},{"name":"Santiago","surname":"Tamez","photo":"/ui-names/photos/female/3.jpg"},{"name":"Carla","surname":"Huerta","photo":"/ui-names/photos/male/6.jpg"},{"name":"Jorge Luis","surname":"Terán","photo":"/ui-names/photos/female/6.jpg"},{"name":"María José","surname":"Gallegos","photo":"/ui-names/photos/female/3.jpg"},{"name":"Barbara","surname":"Coronado","photo":"/ui-names/photos/male/24.jpg"},{"name":"José Luis","surname":"Enríquez","photo":"/ui-names/photos/female/1.jpg"},{"name":"Vicente","surname":"Martínez","photo":"/ui-names/photos/female/18.jpg"},{"name":"Francisco","surname":"Palacios","photo":"/ui-names/photos/male/15.jpg"},{"name":"Salvador","surname":"Juárez","photo":"/ui-names/photos/female/26.jpg"},{"name":"Lola","surname":"Hernández","photo":"/ui-names/photos/male/10.jpg"},{"name":"Ramón","surname":"Macías","photo":"/ui-names/photos/female/21.jpg"},{"name":"Bernardo","surname":"Galarza","photo":"/ui-names/photos/male/6.jpg"},{"name":"Jerónimo","surname":"Ríos","photo":"/ui-names/photos/female/15.jpg"},{"name":"Olivia","surname":"Olivares","photo":"/ui-names/photos/male/14.jpg"},{"name":"Olivia","surname":"Ramón","photo":"/ui-names/photos/female/13.jpg"},{"name":"Marta","surname":"Trujillo","photo":"/ui-names/photos/female/1.jpg"},{"name":"Miguel","surname":"Rosales","photo":"/ui-names/photos/male/22.jpg"},{"name":"Agustín","surname":"Leal","photo":"/ui-names/photos/male/18.jpg"},{"name":"Leticia","surname":"Solorzano","photo":"/ui-names/photos/female/13.jpg"},{"name":"Eduardo","surname":"Pabón","photo":"/ui-names/photos/female/16.jpg"},{"name":"Mónica","surname":"Nava","photo":"/ui-names/photos/female/1.jpg"},{"name":"Cristobal","surname":"Gil","photo":"/ui-names/photos/male/16.jpg"},{"name":"Marilu","surname":"Gil","photo":"/ui-names/photos/male/2.jpg"},{"name":"Rafael","surname":"Jiménez","photo":"/ui-names/photos/male/11.jpg"}],"country_data":{"index":212,"languages":["es"],"flag":"https://restcountries.eu/data/esp.svg","name":"Spain","nativeName":"España","country_code":"ES","currency_code":"EUR","currency_symbol":"€"},"validate_locale":{"email":{"remote":"Please enter a valid email"},"phone-number":{"remote":"Please enter a valid phone number"},"name":{"validText":"2 characters minimum, no numbers and special characters"},"lastname":{"validText":"2 characters minimum, no numbers and special characters"}},"currency":{"USDUSD":1,"USDEUR":0.89959},"recaptcha":"6LfpFrIUAAAAAOSv0jR7OHHuKNKpzXbE-vxx-QFN","is_sms_verification":false}'
</script>
<meta property="og:title" content="Bitcoin Circuit">
<offers-root _nghost-okf-c0="" ng-version="7.2.15">
  <section _ngcontent-okf-c0="" offerslangclass="" class="style-en">
    <router-outlet _ngcontent-okf-c0=""></router-outlet>
    <offers-sign-up _nghost-okf-c2="">
      <header _ngcontent-wln-c2="" id="wrapper">
        <div _ngcontent-wln-c2="" class="intro-section-1 widget-people warning" data-pause-time="1000" data-animate-time="0" bis_skin_checked="1">
          <p _ngcontent-wln-c2="" class="intro-p"><b data-i18n="">WARNING</b>:<span data-i18n="">Due to extremely high media demand, we will close registration as of</span> <b><span class="tomorrow-date"><span data-content="dateNow" data-format-value="DD/MM/YYYY">09/01/2020</span> </span>- <span data-i18n="">HURRY!</span> </b><span class="countdown-span" data-content="deadline" data-format-value="5">03:34</span></p>
        </div>
        <div _ngcontent-okf-c2="" class="main_row" bis_skin_checked="1">
          <div _ngcontent-okf-c2="" class="widget_box" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="country_box" bis_skin_checked="1">
              <div _ngcontent-okf-c2="" class="exclusive-offers-wrapper intro-margin-div none" bis_skin_checked="1">
                <div _ngcontent-okf-c2="" class="gtd-geo-country-flag-icon" style="background-image:url(https://restcountries.eu/data/esp.svg)" bis_skin_checked="1"></div>
                <div _ngcontent-okf-c2="" class="text" bis_skin_checked="1">
                  <p _ngcontent-okf-c2="" class="purple" data-i18n="exclusive-offer-for">Exclusivo para</p><span _ngcontent-okf-c2="" class="red"><p _ngcontent-okf-c2="" data-i18n="traders-in-country">Negociadores en</p></span></div>
              </div>
            </div>
            <div _ngcontent-okf-c2="" class="user_status animate bounceInDown" style="display:block" bis_skin_checked="1">
              <div class="media notification-top widget-people animate-next-item" data-init="person" bis_skin_checked="1">
                <div class="media-left" bis_skin_checked="1"><img data-attribute="src" data-content="photo" alt="Notification Photo" class="img-circle main_row user_status__img" width="57" height="57" src="/ui-names/photos/female/6.jpg"></div>
                <div _ngcontent-okf-c2="" class="user_status__status" bis_skin_checked="1">
                  <div data-content="name" style="display:inline-block;margin-top:15px" bis_skin_checked="1">Sofia</div><span>&nbsp; just joined</span></div>
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
                  <h1 data-i18n="bitcoin-header">Bitcoin está haciendo a la gente rica</h1>
                  <p class="video-subheader"><span data-i18n="bitcoin-sub" class="bitcoin-sub">y tú puedes ser el</span> <span class="bitcoin-sub-b" data-i18n="bitcoin-sub-b">Próximo Millonario…</span></p>
                </div>
              </div>
              <div class="hero__container" bis_skin_checked="1">
                <div class="hero__video" bis_skin_checked="1">
                  <video class="video" id="video-lite" controls="" muted="" fluid="" playsinline="" autoplay="autoplay" controlslist="nodownload" preload="none" video-ready="true">
                    <source data-src="media/en-1.mp4" type="video/mp4" src="media/en-1.mp4">
                    <track kind="subtitles" srclang="en" data-src-ar="subtitles/Spanish.vtt" data-srclang="es" data-src-at="subtitles/German.vtt" data-src-by="subtitles/Russian.vtt" data-src-bo="subtitles/Spanish.vtt" data-src-cl="subtitles/Spanish.vtt" data-src-co="subtitles/Spanish.vtt" data-src-cr="subtitles/Spanish.vtt" data-src-cu="subtitles/Spanish.vtt" data-src-dk="subtitles/Danish.vtt" data-src-do="subtitles/Spanish.vtt" data-src-ec="subtitles/Spanish.vtt" data-src-sv="subtitles/Spanish.vtt" data-src-ee="subtitles/Estonian.vtt" data-src-fo="subtitles/Danish.vtt" data-src-ge="subtitles/Russian.vtt" data-src-de="subtitles/German.vtt" data-src-it="subtitles/Italian.vtt" data-src-kz="subtitles/Russian.vtt" data-src-kg="subtitles/Russian.vtt" data-src-lv="subtitles/Latvian.vtt" data-src-lt="subtitles/Lithuanian.vtt" data-src-mx="subtitles/Spanish.vtt" data-src-md="subtitles/Russian.vtt" data-src-nl="subtitles/Dutch.vtt" data-src-no="subtitles/Norwegian.vtt" data-src-pa="subtitles/Spanish.vtt" data-src-pe="subtitles/Spanish.vtt" data-src-pl="subtitles/Polish.vtt" data-src-pr="subtitles/Spanish.vtt" data-src-ru="subtitles/Russian.vtt" data-src-es="subtitles/Spanish.vtt" data-src-se="subtitles/Swedish.vtt" data-src-ch="subtitles/German.vtt" data-src-ua="subtitles/Ukrainian.vtt" data-src-uz="subtitles/Russian.vtt" data-src-fr="subtitles/French.vtt" data-src-ko="subtitles/Korean.vtt" data-src-ae="subtitles/Arabic.vtt" data-src-fi="subtitles/Finnish.vtt" data-src-tw="subtitles/Chinese.vtt" data-src-cn="subtitles/Chinese.vtt" data-src-pt="subtitles/Portuguese.vtt" data-src-br="subtitles/Portuguese.vtt" data-src-be="subtitles/French.vtt" default="" src="subtitles/Spanish.vtt">
                  </video>
                </div>
                <div _ngcontent-okf-c2="" class="hero__reg_form" id="signUpForm" bis_skin_checked="1">
                  <h3 _ngcontent-okf-c2="" data-i18n="form-header">Cambia Tu Vida Hoy!</h3>
                  <offers-reg-form _ngcontent-okf-c2="" _nghost-okf-c4="">
                    <div _ngcontent-okf-c4="" id="regForm" class="top-form-wrapper member-form scroll-trigger reg-form member-form_en" bis_skin_checked="1">
                      <div _ngcontent-okf-c4="" class="form-container-unique ti-form-1" id="form1" bis_skin_checked="1">
                        <form class="form" method="post" action="mail.php" enctype="application/json" novalidate="novalidate">
                          <div _ngcontent-okf-c4="" class="form-group field-ti0form-first_name" bis_skin_checked="1">
                            <input data-i18n="form-first-name-place-holder" class="form-control regFormFirstName input" name="name" type="text" placeholder="Nombre">
                            <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                          </div>
                          <div _ngcontent-okf-c4="" class="form-group field-ti0form-last_name" bis_skin_checked="1">
                            <input data-i18n="form-last-name-place-holder" class="form-control regFormLastNname input" name="secondname" type="text" placeholder="Apellido">
                            <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                          </div>
                          <div _ngcontent-okf-c4="" class="form-group field-ti0form-email email-group" bis_skin_checked="1">
                            <input data-i18n="form-email-place-holder" class="reg-email form-control regFormEmail input" name="email" type="email" placeholder="Dirección de e-mail">
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
                              <input class="form-control input" name="phone" type="phone" placeholder="Número de teléfono">
                              <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                            </div>
                            <button data-i18n="form-button" type="submit" class="get_acc button button-primary register-btn register-btn-en regFormButton">Dame acceso ahora!</button>
                          </div>
                          <input type="hidden" name="country" value="es">
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
                      <p _ngcontent-okf-c5="" class="confirm-text_links"><span _ngcontent-okf-c5="" data-i18n="CONFIRM">Al hacer clic en el botón aceptas nuestros </span><span _ngcontent-okf-c5=""><offers-basic-modal-popup _ngcontent-okf-c5="" _nghost-okf-c8=""><a _ngcontent-okf-c8="" data-popbox-target="privacy-policy" id="privacy-policy" data-i18n="CONFIRM_PRIVACY">Política de Privacidad</a></offers-basic-modal-popup></span><span _ngcontent-okf-c5="" data-i18n="CONFIRM_AND">&ensp;y&ensp;</span><span _ngcontent-okf-c5=""><offers-basic-modal-popup _ngcontent-okf-c5="" _nghost-okf-c8=""><a _ngcontent-okf-c8="" data-popbox-target="terms" id="terms" data-i18n="CONFIRM_TERMS">Términos y Condiciones</a></offers-basic-modal-popup></span><span _ngcontent-okf-c5=""></span></p>
                    </div>
                  </offers-confirm-text>
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
              <h1 _ngcontent-okf-c2="" data-i18n="join-us-and-start">Únase a nosotros y comience a hacerse rico con Bitcoin Circuit!</h1>
              <p _ngcontent-okf-c2="" data-i18n="join-us-description">Bitcoin Circuit es un grupo reservado exclusivamente para aquellas personas que desean participar del mercado de Bitcoin que es uno de los más lucrativos, nuestros membros disfrutan de los viajes alrededor del mundo todos los meses mientras ganan dinero en sus computadoras con apenas "pocos minutos de trabajo" al dia.</p>
            </div>
            <div _ngcontent-okf-c2="" class="other_logo__box" bis_skin_checked="1">
              <h4 _ngcontent-okf-c2="" data-i18n="as-seen-on">Como se ve en</h4>
              <ul _ngcontent-okf-c2="">
                <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/Shape_17_copy.jpg"></li>
                <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/Artwork_1.jpg"></li>
                <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/ft-com-1.jpg"></li>
                <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/time.jpg"></li>
              </ul>
            </div>
          </div>
        </div>
        <h2 _ngcontent-okf-c2="" class="oligarchs__title" data-i18n="testimonials-block-header">Testimonios reales de nuestros usuarios</h2>
        <div _ngcontent-okf-c2="" class="oligarchs" bis_skin_checked="1">
          <div _ngcontent-okf-c2="" class="oligarch_box" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="review" bis_skin_checked="1">
              <p _ngcontent-okf-c2=""><i>'<span data-i18n="testimonials-1-text">Soy miembro desde hace 47 días. ¡Mi vida ya cambió! ¡No sólo ya gané mis primeros 10 mil dólares, sino que también conoci a las mejores personas!</span>'</i></p>
            </div>
            <div _ngcontent-okf-c2="" class="detail" bis_skin_checked="1">
              <p _ngcontent-okf-c2="" data-i18n="testimonials-1-name">Roberto P.</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-1-location">Madrid, España</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-profit1">Lucro $8,519</p>
            </div>
          </div>
          <div _ngcontent-okf-c2="" class="oligarch_box" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="review" bis_skin_checked="1">
              <p _ngcontent-okf-c2=""><i>'<span data-i18n="testimonials-2-text">Le pido a mi esposa que me diga que es real todas las mañanas cuando me levanto y veo el balance de mi cuenta. Nunca había visto estas cifras en mi cuenta bancaria. Es lo que he esperado toda mi vida.</span></i></p>
            </div>
            <div _ngcontent-okf-c2="" class="detail" bis_skin_checked="1">
              <p _ngcontent-okf-c2="" data-i18n="testimonials-2-name">Olga C.</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-2-location">Ecatepec, México</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-profit2">Lucro $10,578</p>
            </div>
          </div>
          <div _ngcontent-okf-c2="" class="oligarch_box" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="review" bis_skin_checked="1">
              <p _ngcontent-okf-c2=""><i>'<span data-i18n="testimonials-3-text">Sorprendentemente, solía ser inversor. Pero nunca imaginé ver algo como esto. Todos mis colegas pensaron que estaba loco cuando decidií renunciar a mi empleo para invertir en Bitcoin Circuit a tiempo completo.en ganancias más tarde, 20 mil doláres despues todos mis colegas ahora me están IMPLORANDO para dejarlos entrar.</span></i></p>
            </div>
            <div _ngcontent-okf-c2="" class="detail" bis_skin_checked="1">
              <p _ngcontent-okf-c2="" data-i18n="testimonials-3-name">Juliya S.</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-3-location">Lima, Perú</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-profit3">Lucro $7,192</p>
            </div>
          </div>
          <div _ngcontent-okf-c2="" class="oligarch_box" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="review" bis_skin_checked="1">
              <p _ngcontent-okf-c2=""><i>'<span data-i18n="testimonials-4-text">Hace dos semanas, me estafaron. Pensé que mi vida había llegado a su fin. Ahora gano más de 1300 dólares todos los días. Y por primera vez en dos meses, mi cuenta no está en rojo. ¡Gracias Bitcoin Circuit!</span></i></p>
            </div>
            <div _ngcontent-okf-c2="" class="detail" bis_skin_checked="1">
              <p _ngcontent-okf-c2="">Mark K.</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-4-location">Iquique, Chile</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-profit4">Lucro $12,923</p>
            </div>
          </div>
        </div>
        <div _ngcontent-okf-c2="" class="v2" bis_skin_checked="1">
          <div _ngcontent-okf-c2="" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="advantages2" bis_skin_checked="1">
              <div _ngcontent-okf-c2="" class="advantages__success" bis_skin_checked="1">
                <div _ngcontent-okf-c2="" class="success_box" bis_skin_checked="1">
                  <div _ngcontent-okf-c2="" class="iconka" bis_skin_checked="1"></div>
                  <h4 _ngcontent-okf-c2="" data-i18n="laser-accurate-header-1">Performance de alta precisión</h4>
                  <p _ngcontent-okf-c2="" data-i18n="laser-accurate-description">No existe otra app de trading en el mundo que tenga la precisión de 99.4% que sí tiene Bitcoin Formula. Es por eso que miembros de todo el mundo confían en nosotros para duplicar, triplicar y cuadriplicar el dinero que tanto les costó ganar.</p>
                </div>
                <div _ngcontent-okf-c2="" class="success_box" bis_skin_checked="1">
                  <div _ngcontent-okf-c2="" class="iconka" bis_skin_checked="1"></div>
                  <h4 _ngcontent-okf-c2="" data-i18n="superior-technology-header-1">Tecnología superior</h4>
                  <p _ngcontent-okf-c2="" data-i18n="superior-technology-description">Bitcoin Circuit ha sido creado con una programación avanzada nunca visto en el mundo de trading. Este software está por delante de los mercados en 0.01 segundos. Y si no sabes nada sobre trading, sabes que esto es un gran problema. Esto hace que este software sea la aplicación de trading más consistente del planeta.</p>
                </div>
                <div _ngcontent-okf-c2="" class="success_box" bis_skin_checked="1">
                  <div _ngcontent-okf-c2="" class="iconka" bis_skin_checked="1"></div>
                  <h4 _ngcontent-okf-c2="" data-i18n="award-winning-header-1">Muchos premios ganados</h4>
                  <p _ngcontent-okf-c2="" data-i18n="award-winning-description">La app de Bitcoin Circuit ha ganado varios premios. El premio más reciente que hemos recibido es el #1 en la categoría de software otorgado por la Asociación de Trading del Reino Unido.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div _ngcontent-okf-c2="" class="results" bis_skin_checked="1">
          <button _ngcontent-okf-c2="" class="but2 scroll-to" data-move-to="bitcoin-sub-b" data-i18n="join-now-button">Únete ahora!</button>
          <h2 _ngcontent-okf-c2="" class="results__title" data-i18n="live-profit-table-header">Live Profit Results!</h2>
          <section class="live-results-section text-center">
            <div class="container relative tablica" bis_skin_checked="1">
              <div class="live-results-table-wrapper tablica__wrapper" bis_skin_checked="1">
                <table class="table table-win live-results-table">
                  <thead class="thead">
                  <tr>
                    <th scope="col" data-i18n="table-column-1" style="font-weight:600!important">The Bitcoin Circuit</th>
                    <th scope="col" data-i18n="table-column-2" style="font-weight:600!important">Lucro</th>
                    <th scope="col" data-i18n="table-column-3" style="font-weight:600!important">Fecha del Trade</th>
                    <th scope="col" data-i18n="table-column-4" style="font-weight:600!important">Criptomoneda</th>
                    <th scope="col" data-i18n="table-column-5" style="font-weight:600!important">Resultado</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><b>Carla H.</b> just won...</td>
                    <td><b>488€</b></td>
                    <td>09/01/2020</td>
                    <td>BTC/ETH</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  <tr>
                    <td><b>Barbara C.</b> just won...</td>
                    <td><b>672€</b></td>
                    <td>09/01/2020</td>
                    <td>LTC/EOS</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  <tr>
                    <td><b>Gerardo E.</b> just won...</td>
                    <td><b>228€</b></td>
                    <td>09/01/2020</td>
                    <td>BTC/ETH</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  <tr>
                    <td><b>Ramón M.</b> just won...</td>
                    <td><b>668€</b></td>
                    <td>09/01/2020</td>
                    <td>LTC/EOS</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  <tr>
                    <td><b>Jerónimo R.</b> just won...</td>
                    <td><b>100€</b></td>
                    <td>09/01/2020</td>
                    <td>ETH/LTC</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  <tr>
                    <td><b>Joaquín S.</b> just won...</td>
                    <td><b>511€</b></td>
                    <td>09/01/2020</td>
                    <td>BTC/ETH</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  <tr>
                    <td><b>Juan G.</b> just won...</td>
                    <td><b>41€</b></td>
                    <td>09/01/2020</td>
                    <td>LTC/EOS</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  <tr>
                    <td><b>Lola H.</b> just won...</td>
                    <td><b>611€</b></td>
                    <td>09/01/2020</td>
                    <td>ETH/LTC</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  <tr>
                    <td><b>José Luis E.</b> just won...</td>
                    <td><b>13€</b></td>
                    <td>09/01/2020</td>
                    <td>BTC/ETH</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>
        </div>
        <div _ngcontent-okf-c2="" class="how_it_works" bis_skin_checked="1">
          <h2 _ngcontent-okf-c2="" class="how_it_works__title" data-i18n="how-it-works-header">Cómo funciona</h2>
          <div _ngcontent-okf-c2="" class="how_it_works__success" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="success_box" bis_skin_checked="1">
              <div _ngcontent-okf-c2="" class="iconka" bis_skin_checked="1"></div>
              <h4 _ngcontent-okf-c2="" data-i18n="how-it-works-1-header">Registrarse en el sitio</h4>
              <p _ngcontent-okf-c2="" data-i18n="how-it-works-1-description">Una vez que el registro sea aceptado, automaticamente te convertirás en nuestro nuevo miembro. Esto implica que podrás obtener el software de trading de Bitcoin de forma gratuita.</p>
            </div>
            <div _ngcontent-okf-c2="" class="success_box" bis_skin_checked="1">
              <div _ngcontent-okf-c2="" class="iconka" bis_skin_checked="1"></div>
              <h4 _ngcontent-okf-c2="" data-i18n="how-it-works-2-header">Financia tu cuenta</h4>
              <p _ngcontent-okf-c2=""><span data-i18n="how-it-works-2-description">Al igual que con cualquier otro negocio, necesitas capital para comenzar. Así que para comenzra a ganar con Bitcoin Circuit, debes invertir la suma que desees de $250 dólares o más.</span> <span>$</span>250 <span>or more.</span></p>
            </div>
            <div _ngcontent-okf-c2="" class="success_box" bis_skin_checked="1">
              <div _ngcontent-okf-c2="" class="iconka" bis_skin_checked="1"></div>
              <h4 _ngcontent-okf-c2="" data-i18n="how-it-works-3-header">Terminar</h4>
              <p _ngcontent-okf-c2="" data-i18n="how-it-works-3-description">Haz clic en auto-trade para disfrutar de una experiencia de trading manos libres y muy precisa gracias a nuestro algoritmo. También puedes hacerlo de forma manual si así lo prefirieras.</p>
            </div>
          </div>
        </div>
        <div _ngcontent-okf-c2="" class="ask" bis_skin_checked="1">
          <button _ngcontent-okf-c2="" class="but1 scroll-to" data-move-to="bitcoin-sub-b" data-i18n="open-free-account-button">Abrir cuenta gratis</button>
          <h2 _ngcontent-okf-c2="" data-i18n="frequently-asked-questions-header">Preguntas frecuentes</h2>
          <div _ngcontent-okf-c2="" class="ask_container" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="ask_box" bis_skin_checked="1">
              <h4 _ngcontent-okf-c2="" data-i18n="faq-1-question">¿Qué tipo de resultados puedo esperar?</h4>
              <p _ngcontent-okf-c2=""><span data-i18n="faq-1-answer-1">Los miembros de Bitcoin Circuit por lo general ganan un promedio de</span> <span>$</span>1100 <span data-i18n="faq-1-answer-2">al día.</span></p>
            </div>
            <div _ngcontent-okf-c2="" class="ask_box" bis_skin_checked="1">
              <h4 _ngcontent-okf-c2="" data-i18n="faq-2-question">¿Cuántas horas debo trabajar?</h4>
              <p _ngcontent-okf-c2="" data-i18n="faq-2-answer">Nuestros miembros trabajan un promedio de 20 minutos al día. Dado que el software trabaja en automático, el trabajo requerido es mínimo.</p>
            </div>
            <div _ngcontent-okf-c2="" class="ask_box" bis_skin_checked="1">
              <h4 _ngcontent-okf-c2="" data-i18n="faq-3-question">¿Cuál es la suma máxima que puedo ganar?</h4>
              <p _ngcontent-okf-c2="" data-i18n="faq-3-answer">Tus ganancias son ilimitadas con Bitcoin Circuit. Algunos miembros ganaron su primero millón en sólo 61 días.</p>
            </div>
            <div _ngcontent-okf-c2="" class="ask_box" bis_skin_checked="1">
              <h4 _ngcontent-okf-c2="" data-i18n="faq-4-question">¿Cuánto cuesta el software?</h4>
              <p _ngcontent-okf-c2="" data-i18n="faq-4-answer">Los miembros de Bitcoin Circuit obtienen una copia de nuestro software libre de costo. Para convertirte en miembro, simplemente completa el formulario en esta página.</p>
            </div>
            <div _ngcontent-okf-c2="" class="ask_box" bis_skin_checked="1">
              <h4 _ngcontent-okf-c2="" data-i18n="faq-5-question">¿Esto es como MLM, marketing por afiliación o Forex?</h4>
              <p _ngcontent-okf-c2="" data-i18n="faq-5-answer">No es como nada de estos. El software opera con un algoritmo que tiene una precisión del 99,4%.</p>
            </div>
            <div _ngcontent-okf-c2="" class="ask_box" bis_skin_checked="1">
              <h4 _ngcontent-okf-c2="" data-i18n="faq-6-question">¿Existen tarifas ocultas?</h4>
              <p _ngcontent-okf-c2="" data-i18n="faq-6-answer">No hay tarifas ocultas. No hay comisiones o tarifas del bróker. Todo el dinero es 100% tuyo y eres libre de retirar los fondos cuando lo desees.</p>
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
                          <input data-i18n="form-first-name-place-holder" class="form-control regFormFirstName input" name="name" type="text" placeholder="Nombre">
                          <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                        </div>
                        <div _ngcontent-okf-c4="" class="form-group field-ti0form-last_name" bis_skin_checked="1">
                          <input data-i18n="form-last-name-place-holder" class="form-control regFormLastNname input" name="secondname" type="text" placeholder="Apellido">
                          <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                        </div>
                        <div _ngcontent-okf-c4="" class="form-group field-ti0form-email email-group" bis_skin_checked="1">
                          <input data-i18n="form-email-place-holder" class="reg-email form-control regFormEmail input" name="email" type="email" placeholder="Dirección de e-mail">
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
                            <input class=" form-control input" name="phone" type="phone" placeholder="Número de teléfono">
                            <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                          </div>
                          <button data-i18n="get-started-now-button" type="submit" class="get_acc button button-primary register-btn register-btn-en regFormButton">Empieza ahora</button>
                        </div>
                        <input type="hidden" name="country" value="es">
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
                      <p _ngcontent-okf-c5="" class="confirm-text_links"><span _ngcontent-okf-c5="" data-i18n="CONFIRM">Al hacer clic en el botón aceptas nuestros </span><span _ngcontent-okf-c5=""><offers-basic-modal-popup _ngcontent-okf-c5="" _nghost-okf-c8=""><a _ngcontent-okf-c8="" data-popbox-target="privacy-policy" id="privacy-policy" data-i18n="CONFIRM_PRIVACY">Política de Privacidad</a></offers-basic-modal-popup></span><span _ngcontent-okf-c5="" data-i18n="CONFIRM_AND">&ensp;y&ensp;</span><span _ngcontent-okf-c5=""><offers-basic-modal-popup _ngcontent-okf-c5="" _nghost-okf-c8=""><a _ngcontent-okf-c8="" data-popbox-target="terms" id="terms" data-i18n="CONFIRM_TERMS">Términos y Condiciones</a></offers-basic-modal-popup></span><span _ngcontent-okf-c5=""></span></p>
                    </div>
                  </offers-confirm-text>
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
            <p _ngcontent-okf-c2="" data-i18n="NOTE_DESC"><b>Nota de riesgo importante:</b> el trading con FX y CFD implica un alto riesgo de pérdida debido a la naturaleza de la negociación, que podría provocar la pérdida total de su capital y que podría no ser adecuada para todos los tipos de inversores. Lea nuestra advertencia de riesgo completa y el agente relevante con el que se registrará para asegurarse de que comprende los riesgos involucrados antes de proceder, teniendo en cuenta su experiencia relevante. Busque asesoramiento independiente si fuera necesario. La información contenida en este sitio web y los documentos de divulgación son solo de carácter general y no tienen en cuenta sus circunstancias personales, su situación financiera o sus necesidades. Debe considerar cuidadosamente el Contrato de cliente y buscar asesoramiento independiente antes de decidir si el trading de dichos productos es adecuado para usted.</p>
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

</html>