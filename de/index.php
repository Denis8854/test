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
  window.FUNNEL_CONFIG = '{"language":"en","ui_names":[{"name":"Michel","surname":"Teufel","photo":"/ui-names/photos/female/22.jpg"},{"name":"Keno","surname":"Elss","photo":"/ui-names/photos/male/15.jpg"},{"name":"Luk","surname":"Losch","photo":"/ui-names/photos/female/15.jpg"},{"name":"Franziska","surname":"Görlich","photo":"/ui-names/photos/male/11.jpg"},{"name":"Emilia","surname":"Schöckel","photo":"/ui-names/photos/female/12.jpg"},{"name":"Alina","surname":"Bruder","photo":"/ui-names/photos/male/20.jpg"},{"name":"Mats","surname":"Adams","photo":"/ui-names/photos/female/19.jpg"},{"name":"Adriana","surname":"Kleiber","photo":"/ui-names/photos/male/16.jpg"},{"name":"Oliver","surname":"Spitzmüller","photo":"/ui-names/photos/female/4.jpg"},{"name":"Thorben","surname":"Leibold","photo":"/ui-names/photos/female/1.jpg"},{"name":"Stephanie","surname":"Henkel","photo":"/ui-names/photos/female/23.jpg"},{"name":"Luisa","surname":"Farber","photo":"/ui-names/photos/female/6.jpg"},{"name":"Janine","surname":"Waldmann","photo":"/ui-names/photos/male/23.jpg"},{"name":"Enna","surname":"Loogen","photo":"/ui-names/photos/female/18.jpg"},{"name":"Santino","surname":"Losch","photo":"/ui-names/photos/female/16.jpg"},{"name":"Mohamed","surname":"Lenfers","photo":"/ui-names/photos/female/18.jpg"},{"name":"Kaya","surname":"Weyel","photo":"/ui-names/photos/female/16.jpg"},{"name":"Benjamin","surname":"Roecker","photo":"/ui-names/photos/female/17.jpg"},{"name":"Xaver","surname":"Wölpert","photo":"/ui-names/photos/female/9.jpg"},{"name":"Riana","surname":"Giehl","photo":"/ui-names/photos/male/5.jpg"},{"name":"Tamina","surname":"Zanner","photo":"/ui-names/photos/male/3.jpg"},{"name":"Estelle","surname":"Schwarthoff","photo":"/ui-names/photos/female/8.jpg"},{"name":"Imke","surname":"Splinter","photo":"/ui-names/photos/male/23.jpg"},{"name":"Ceyda","surname":"Zipse","photo":"/ui-names/photos/male/16.jpg"},{"name":"Mariella","surname":"Löser","photo":"/ui-names/photos/female/11.jpg"},{"name":"Alana","surname":"Schult","photo":"/ui-names/photos/male/18.jpg"},{"name":"Laura","surname":"Hönig","photo":"/ui-names/photos/female/21.jpg"},{"name":"Arwen","surname":"Häfner","photo":"/ui-names/photos/male/3.jpg"},{"name":"Teo","surname":"Gauder","photo":"/ui-names/photos/female/15.jpg"},{"name":"Nadja","surname":"Schnürer","photo":"/ui-names/photos/male/22.jpg"},{"name":"Elijah","surname":"Rentz","photo":"/ui-names/photos/male/13.jpg"},{"name":"Constantin","surname":"Geese","photo":"/ui-names/photos/male/13.jpg"},{"name":"Meike","surname":"Olbrich","photo":"/ui-names/photos/male/19.jpg"},{"name":"Iven","surname":"Walther","photo":"/ui-names/photos/male/21.jpg"},{"name":"Karlotta","surname":"Bruder","photo":"/ui-names/photos/female/3.jpg"},{"name":"Maja","surname":"Günz","photo":"/ui-names/photos/female/7.jpg"},{"name":"Amelia","surname":"Töpfer","photo":"/ui-names/photos/male/21.jpg"},{"name":"Ariane","surname":"Koubaa","photo":"/ui-names/photos/female/7.jpg"},{"name":"Jakob","surname":"Möhsner","photo":"/ui-names/photos/female/6.jpg"},{"name":"Theo","surname":"Bethke","photo":"/ui-names/photos/male/17.jpg"},{"name":"Sophie","surname":"Letzelter","photo":"/ui-names/photos/male/4.jpg"},{"name":"Lynn","surname":"Nannen","photo":"/ui-names/photos/female/6.jpg"},{"name":"Janek","surname":"Gebhardt","photo":"/ui-names/photos/female/23.jpg"},{"name":"Linus","surname":"Koha","photo":"/ui-names/photos/male/16.jpg"},{"name":"Marla","surname":"Scheurer","photo":"/ui-names/photos/female/10.jpg"},{"name":"Leo","surname":"Tuschmo","photo":"/ui-names/photos/female/2.jpg"},{"name":"Madleen","surname":"Schönfeld","photo":"/ui-names/photos/female/16.jpg"},{"name":"Annabell","surname":"Hentschel","photo":"/ui-names/photos/male/7.jpg"},{"name":"Abby","surname":"Kopf","photo":"/ui-names/photos/female/14.jpg"},{"name":"Dorian","surname":"Tegethof","photo":"/ui-names/photos/male/24.jpg"}],"country_data":{"index":84,"languages":["de"],"flag":"https://restcountries.eu/data/deu.svg","name":"Germany","nativeName":"Deutschland","country_code":"DE","currency_code":"EUR","currency_symbol":"€"},"validate_locale":{"email":{"remote":"Please enter a valid email"},"phone-number":{"remote":"Please enter a valid phone number"},"name":{"validText":"2 characters minimum, no numbers and special characters"},"lastname":{"validText":"2 characters minimum, no numbers and special characters"}},"currency":{"USDUSD":1,"USDEUR":0.89407},"recaptcha":"6LfpFrIUAAAAAOSv0jR7OHHuKNKpzXbE-vxx-QFN","is_sms_verification":false}'
</script>
<meta property="og:title" content="Bitcoin Circuit">
<offers-root _nghost-okf-c0="" ng-version="7.2.15">
  <section _ngcontent-okf-c0="" offerslangclass="" class="style-en">
    <router-outlet _ngcontent-okf-c0=""></router-outlet>
    <offers-sign-up _nghost-okf-c2="">
      <header _ngcontent-wln-c2="" id="wrapper">
        <div _ngcontent-wln-c2="" class="intro-section-1 widget-people hide-content warning" data-pause-time="1000" data-animate-time="0">
          <p _ngcontent-wln-c2="" class="intro-p"><b data-i18n="">WARNING</b>:<span data-i18n="">Due to extremely high media demand, we will close registration as of</span> <b><span class="tomorrow-date"><span data-content="dateNow"data-format-value="DD/MM/YYYY">05/07/2018</span> </span>- <span data-i18n="">HURRY!</span> </b><span class="countdown-span" data-content="deadline" data-format-value="5">5:00</span></p>
        </div>
        <div _ngcontent-okf-c2="" class="main_row">
          <div _ngcontent-okf-c2="" class="widget_box">
            <div _ngcontent-okf-c2="" class="country_box">
              <div _ngcontent-okf-c2="" class="exclusive-offers-wrapper intro-margin-div none">
                <div _ngcontent-okf-c2="" class="gtd-geo-country-flag-icon" style="background-image:url(https://restcountries.eu/data/deu.svg)"></div>
                <div _ngcontent-okf-c2="" class="text">
                  <p _ngcontent-okf-c2="" class="purple" data-i18n="exclusive-offer-for">Exklusives Angebot für</p><span _ngcontent-okf-c2="" class="red"><p _ngcontent-okf-c2=""data-i18n="traders-in-country">Händler aus</p></span></div>
              </div>
            </div>
            <div _ngcontent-okf-c2="" class="user_status animate bounceInDown" style="display:block">
              <div class="media notification-top hide-content widget-people" data-init="person">
                <div class="media-left"><img data-attribute="src" data-content="photo" alt="Notification Photo" class="img-circle main_row user_status__img" width="57" height="57"></div>
                <div _ngcontent-okf-c2="" class="user_status__status">
                  <div data-content="name" style="display:inline-block;margin-top:15px"></div><span>&nbsp; just joined</span></div>
              </div>
            </div>
          </div>
          <div _ngcontent-okf-c2="" class="logo"></div>
        </div>
        <div _ngcontent-okf-c2="" class="v2">
          <div _ngcontent-okf-c2="">
            <div _ngcontent-okf-c2="" class="hero">
              <div class="hero__call">
                <div class="titlebox">
                  <h1 data-i18n="bitcoin-header">Der Bitcoin Macht Menschen Reich</h1>
                  <p class="video-subheader"><span data-i18n="bitcoin-sub" class="bitcoin-sub">Und du könntest dich weiterentwickeln zum</span> <span class="bitcoin-sub-b" data-i18n="bitcoin-sub-b">Nächsten Millionär...</span></p>
                </div>
              </div>
              <div class="hero__container">
                <div class="hero__video">
                  <video class="video" id="video-lite" controls="" autoplay="autoplay" muted="" fluid="" playsinline="" controlslist="nodownload">
                    <source data-src="media/en-1.mp4" type="video/mp4">
                    <track kind="subtitles" srclang="en" data-src-ar="subtitles/Spanish.vtt" data-srclang="es" data-src-at="subtitles/German.vtt" data-src-by="subtitles/Russian.vtt" data-src-bo="subtitles/Spanish.vtt" data-src-cl="subtitles/Spanish.vtt" data-src-co="subtitles/Spanish.vtt" data-src-cr="subtitles/Spanish.vtt" data-src-cu="subtitles/Spanish.vtt" data-src-dk="subtitles/Danish.vtt" data-src-do="subtitles/Spanish.vtt" data-src-ec="subtitles/Spanish.vtt" data-src-sv="subtitles/Spanish.vtt" data-src-ee="subtitles/Estonian.vtt" data-src-fo="subtitles/Danish.vtt" data-src-ge="subtitles/Russian.vtt" data-src-de="subtitles/German.vtt" data-src-it="subtitles/Italian.vtt" data-src-kz="subtitles/Russian.vtt" data-src-kg="subtitles/Russian.vtt" data-src-lv="subtitles/Latvian.vtt" data-src-lt="subtitles/Lithuanian.vtt" data-src-mx="subtitles/Spanish.vtt" data-src-md="subtitles/Russian.vtt" data-src-nl="subtitles/Dutch.vtt" data-src-no="subtitles/Norwegian.vtt" data-src-pa="subtitles/Spanish.vtt" data-src-pe="subtitles/Spanish.vtt" data-src-pl="subtitles/Polish.vtt" data-src-pr="subtitles/Spanish.vtt" data-src-ru="subtitles/Russian.vtt" data-src-es="subtitles/Spanish.vtt" data-src-se="subtitles/Swedish.vtt" data-src-ch="subtitles/German.vtt" data-src-ua="subtitles/Ukrainian.vtt" data-src-uz="subtitles/Russian.vtt" data-src-fr="subtitles/French.vtt" data-src-ko="subtitles/Korean.vtt" data-src-ae="subtitles/Arabic.vtt" data-src-fi="subtitles/Finnish.vtt" data-src-tw="subtitles/Chinese.vtt" data-src-cn="subtitles/Chinese.vtt" data-src-pt="subtitles/Portuguese.vtt" data-src-br="assets/subtitles/Portuguese.vtt" data-src-be="subtitles/French.vtt" default="">
                  </video>
                </div>
                <div _ngcontent-okf-c2="" class="hero__reg_form" id="signUpForm">
                  <h3 _ngcontent-okf-c2="" data-i18n="form-header">Ändere dein Leben Heute!</h3>
                  <offers-reg-form _ngcontent-okf-c2="" _nghost-okf-c4="">
                    <div _ngcontent-okf-c4="" id="regForm" class="top-form-wrapper member-form scroll-trigger reg-form member-form_en">
                      <div _ngcontent-okf-c4="" class="form-container-unique ti-form-1" id="form1">
                        <form class="form" method="post" action="mail.php" enctype="application/json">
                          <div _ngcontent-okf-c4="" class="form-group field-ti0form-first_name">
                            <input data-i18n="form-first-name-place-holder" class="form-control regFormFirstName input" name="name" type="text" placeholder="Vorname">
                            <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                          </div>
                          <div _ngcontent-okf-c4="" class="form-group field-ti0form-last_name">
                            <input data-i18n="form-last-name-place-holder" class="form-control regFormLastNname input" name="secondname" type="text" placeholder="Nachname">
                            <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                          </div>
                          <div _ngcontent-okf-c4="" class="form-group field-ti0form-email email-group">
                            <input data-i18n="form-email-place-holder" class="reg-email form-control regFormEmail input" name="email" type="email" placeholder="E-Mail">
                            <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                          </div>
                          <div class="form-content form-actions">
                            <div class="form-group" bis_skin_checked="1">
                              <select name="country" class="bfh-countries form-control input">


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

                                    <option <?=$selected;?> data-phone-code="<?=$country_data['code']?>" value="<?=$country_data['full_name'];?>"><?=$country_data['full_name'];?>
                                    </option>
                                  <?php endforeach; endif; ?>

                              </select>

                            </div>
                            <div class="form-group">
                              <input class=" form-control input" name="phone" type="phone" placeholder="Telefon">
                            </div>
                            <button data-i18n="form-button" type="submit" class="get_acc button button-primary register-btn register-btn-en regFormButton">Beitreten!</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </offers-reg-form>
                  <offers-confirm-text _ngcontent-okf-c2="" _nghost-okf-c5="">
                    <div _ngcontent-okf-c5="" class="confirm-text">
                      <p _ngcontent-okf-c5="" class="confirm-text_links"><span _ngcontent-okf-c5="" data-i18n="CONFIRM">Indem du hier klickst, stimmst du unseren </span><span _ngcontent-okf-c5=""><offers-basic-modal-popup _ngcontent-okf-c5=""_nghost-okf-c8=""><a _ngcontent-okf-c8=""data-popbox-target="privacy-policy"id="privacy-policy"data-i18n="CONFIRM_PRIVACY">Datenschutzbestimmungen</a></offers-basic-modal-popup></span><span _ngcontent-okf-c5="" data-i18n="CONFIRM_AND"> und </span><span _ngcontent-okf-c5=""><offers-basic-modal-popup _ngcontent-okf-c5=""_nghost-okf-c8=""><a _ngcontent-okf-c8=""data-popbox-target="terms"id="terms"data-i18n="CONFIRM_TERMS">AGBs</a></offers-basic-modal-popup></span><span _ngcontent-okf-c5=""></span></p>
                    </div>
                  </offers-confirm-text>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div _ngcontent-okf-c2="" class="content">
        <div _ngcontent-okf-c2="" class="partners_box">
          <ul _ngcontent-okf-c2="">
            <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="bitgo logo" class="logo" src="img/bitgo.jpg"></li>
            <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="norton logo" class="logo" src="img/norton.jpg"></li>
            <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="secure trading logo" class="logo" src="img/secure-trading.jpg"></li>
            <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="mcafee logo" class="logo" src="img/mcafee.jpg"></li>
            <li _ngcontent-okf-c2="" class="partners_box__crypto">
              <crypto-price-widget _ngcontent-okf-c2="" _nghost-okf-c6="">
                <div _ngcontent-okf-c6="" class="wrapper">
                  <div _ngcontent-okf-c6="" class="wrapper__item wrapper__item_bid" style="color:#f79721"><span _ngcontent-okf-c6="" class="item__status">BID</span><span _ngcontent-okf-c6="" class="item__symbol"> $ </span><span _ngcontent-okf-c6="" class="item__price">10,327.03</span></div>
                  <div _ngcontent-okf-c6="" class="wrapper__item wrapper__item_ask" style="color:#5a6171"><span _ngcontent-okf-c6="" class="item__status">ASK</span><span _ngcontent-okf-c6="" class="item__symbol"> $ </span><span _ngcontent-okf-c6="" class="item__price">10,327.03</span></div>
                </div>
              </crypto-price-widget>
            </li>
          </ul>
        </div>
        <div _ngcontent-okf-c2="" class="area">
          <div _ngcontent-okf-c2="" class="join_us">
            <div _ngcontent-okf-c2="" class="text_box">
              <h1 _ngcontent-okf-c2="" data-i18n="join-us-and-start">Treten Sie uns bei und werden Sie reich mit der Bitcoin Circuit!</h1>
              <p _ngcontent-okf-c2="" data-i18n="join-us-description">Die Bitcoin Circuit ist eine Gruppe, die ausschließlich Leuten vorbehalten, die auf die verrückten Renditen, die Bitcoin gewährt, angesprungen sind und dabei in aller Stille ein Vermögen angesammelt haben. Unsere Mitglieder genießen jeden Monat Retreats auf der ganzen Welt, während sie mit nur wenigen Minuten “Arbeit” täglich Geld durch ihren Laptop verdienen.</p>
            </div>
            <div _ngcontent-okf-c2="" class="other_logo__box">
              <h4 _ngcontent-okf-c2="" data-i18n="as-seen-on">Wie bei den</h4>
              <ul _ngcontent-okf-c2="">
                <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/Shape_17_copy.jpg"></li>
                <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/Artwork_1.jpg"></li>
                <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/ft-com-1.jpg"></li>
                <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/time.jpg"></li>
              </ul>
            </div>
          </div>
        </div>
        <h2 _ngcontent-okf-c2="" class="oligarchs__title lazy-load" data-i18n="testimonials-block-header">Echte Testimonials unserer Anwender</h2>
        <div _ngcontent-okf-c2="" class="oligarchs lazy-load">
          <div _ngcontent-okf-c2="" class="oligarch_box">
            <div _ngcontent-okf-c2="" class="review">
              <p _ngcontent-okf-c2=""><i>'<span data-i18n="testimonials-1-text">Ich bin seit gerade einmal 47 Tagen Mitgtlied der Crypto-Revolt. Aber mein Leben hat sich schon verändert! Ich habe nicht nur meine ersten 10.000 Euro gemacht, sondern auch einige der unglaublichsten Leute getroffen. Und das Dank der Bitcoin Circuit!</span>'</i></p>
            </div>
            <div _ngcontent-okf-c2="" class="detail">
              <p _ngcontent-okf-c2="" data-i18n="testimonials-1-name">Emil G.</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-1-location">München</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-profit1">Gewinn $8,519</p>
            </div>
          </div>
          <div _ngcontent-okf-c2="" class="oligarch_box">
            <div _ngcontent-okf-c2="" class="review">
              <p _ngcontent-okf-c2=""><i>'<span data-i18n="testimonials-2-text">Ich weiß endlich, wie es ist, einen Traum zu leben. Ich habe nicht mehr das Gefühl, dass ich von außen nach innen schaue, während die anderen den ganzen Spaß haben. Die Crypto-Revolt hat es mir ermöglicht, mich vorzeitig zurückzuziehen und den 1% Lebensstil zu leben</span></i></p>
            </div>
            <div _ngcontent-okf-c2="" class="detail">
              <p _ngcontent-okf-c2="" data-i18n="testimonials-2-name">Milena H.</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-2-location">Frankfurt</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-profit2">Gewinn $10,578</p>
            </div>
          </div>
          <div _ngcontent-okf-c2="" class="oligarch_box">
            <div _ngcontent-okf-c2="" class="review">
              <p _ngcontent-okf-c2=""><i>'<span data-i18n="testimonials-3-text">Überraschenderweise war ich mal ein Investor an der Wall Street. Und so etwas habe ich in meiner 10-jährigen Betriebszugehörigkeit noch nie gesehen. Meine Kollegen hielten mich alle für verrückt, als ich die Firma verließ, um mit der Bitcoin Circuit Software Vollzeit zu gehen. 38.459 Euro Gewinn später, sind alle meine Kollegen mich am ANFLEHEN, Sie hereinzulassen</span></i></p>
            </div>
            <div _ngcontent-okf-c2="" class="detail">
              <p _ngcontent-okf-c2="" data-i18n="testimonials-3-name">Clementina I.</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-3-location">Berlin</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-profit3">Gewinn $7,192</p>
            </div>
          </div>
          <div _ngcontent-okf-c2="" class="oligarch_box">
            <div _ngcontent-okf-c2="" class="review">
              <p _ngcontent-okf-c2=""><i>'<span data-i18n="testimonials-4-text">Vor zwei Wochen wurde ich entlassen. Ich dachte, mein Leben sei vorbei. Jetzt verdiene ich jeden Tag über 1.261,42 Euro. Und zum ersten Mal seit 2 Monaten ist mein Konto nicht überzogen. Danke , Bitcoin Circuit!</span></i></p>
            </div>
            <div _ngcontent-okf-c2="" class="detail">
              <p _ngcontent-okf-c2="">Mark K.</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-4-location">Bonn</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-profit4">Gewinn $12,923</p>
            </div>
          </div>
        </div>
        <div _ngcontent-okf-c2="" class="v2 lazy-load">
          <div _ngcontent-okf-c2="">
            <div _ngcontent-okf-c2="" class="advantages2">
              <div _ngcontent-okf-c2="" class="advantages__success">
                <div _ngcontent-okf-c2="" class="success_box">
                  <div _ngcontent-okf-c2="" class="iconka"></div>
                  <h4 _ngcontent-okf-c2="" data-i18n="laser-accurate-header-1">Lasergenaue Leistung</h4>
                  <p _ngcontent-okf-c2="" data-i18n="laser-accurate-description">Es gibt keine andere Handlesanwendung auf der Welt, die mit einer Genauigkeit von 99,4% arbeitet, die die Bitcoin Circuit erreichen kann. Deshalb vertrauen unsere Mitglieder aus der ganzen Welt darauf, dass wir ihr hart verdientes Geld verdoppeln und verviefachen.</p>
                </div>
                <div _ngcontent-okf-c2="" class="success_box">
                  <div _ngcontent-okf-c2="" class="iconka"></div>
                  <h4 _ngcontent-okf-c2="" data-i18n="superior-technology-header-1">Überlegene Technologie</h4>
                  <p _ngcontent-okf-c2="" data-i18n="superior-technology-description">Die Bitcoin Circuit Software wurde mit der fortschrittlichsten Programmierung entwickelt, die die Handelswelt je gesehen hat. Die Software ist den Märkten um 0,01 Sekunden voraus. Dieser 'Zeitsprung' macht die Software zur konsistentesten Handelsanwendung der Welt.</p>
                </div>
                <div _ngcontent-okf-c2="" class="success_box">
                  <div _ngcontent-okf-c2="" class="iconka"></div>
                  <h4 _ngcontent-okf-c2="" data-i18n="award-winning-header-1">Preisgekrönte Handelsapplikation</h4>
                  <p _ngcontent-okf-c2="" data-i18n="award-winning-description">Die Bitcoin Circuit App wurde mehrfach ausgezeichnet. Die letzte Auszeichnung, die wir erhalten haben, ist die Nummer 1 in der Kategorie Handelssoftware für die UK Trading Association.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div _ngcontent-okf-c2="" class="results lazy-load">
          <button _ngcontent-okf-c2="" class="but2 scroll-to" data-move-to="bitcoin-sub-b" data-i18n="join-now-button">Jetzt beitreten!</button>
          <h2 _ngcontent-okf-c2="" class="results__title" data-i18n="live-profit-table-header">Live Profit Ergebnisse!</h2>
          <section class="live-results-section text-center">
            <div class="container relative tablica">
              <div class="live-results-table-wrapper tablica__wrapper">
                <table class="table table-win live-results-table">
                  <thead class="thead">
                  <tr>
                    <th scope="col" data-i18n="table-column-1" style="font-weight:600!important">Die Bitcoin Circuit</th>
                    <th scope="col" data-i18n="table-column-2" style="font-weight:600!important">Profit</th>
                    <th scope="col" data-i18n="table-column-3" style="font-weight:600!important">Handelszeit</th>
                    <th scope="col" data-i18n="table-column-4" style="font-weight:600!important">Kryptowährung</th>
                    <th scope="col" data-i18n="table-column-5" style="font-weight:600!important">Resultate</th>
                  </tr>
                  </thead>
                  <tbody></tbody>
                </table>
              </div>
            </div>
          </section>
        </div>
        <div _ngcontent-okf-c2="" class="how_it_works lazy-load">
          <h2 _ngcontent-okf-c2="" class="how_it_works__title" data-i18n="how-it-works-header">Wie's funktioniert</h2>
          <div _ngcontent-okf-c2="" class="how_it_works__success">
            <div _ngcontent-okf-c2="" class="success_box">
              <div _ngcontent-okf-c2="" class="iconka"></div>
              <h4 _ngcontent-okf-c2="" data-i18n="how-it-works-1-header">Auf der Seite registrieren</h4>
              <p _ngcontent-okf-c2="" data-i18n="how-it-works-1-description">Sobald Ihre Registration akzeptiert wird, werden Sie automatisch das neueste Mitglied der Bitcoin Circuit. Und Sie erhalten unsere proprietäre bitcoin-Handelssoftware kostenlos.</p>
            </div>
            <div _ngcontent-okf-c2="" class="success_box">
              <div _ngcontent-okf-c2="" class="iconka"></div>
              <h4 _ngcontent-okf-c2="" data-i18n="how-it-works-2-header">Auf Ihr Konto einzahlen</h4>
              <p _ngcontent-okf-c2=""><span data-i18n="how-it-works-2-description">Wie jedes Unternehmen benötigen Sie für den Start ein Betriebskapital. Um mit der Bitcoin Circuit zu profitieren, müssen Sie einen beliebigen Betrag von €250 oder mehr investieren.</span> <span>$</span>250 <span>or more.</span></p>
            </div>
            <div _ngcontent-okf-c2="" class="success_box">
              <div _ngcontent-okf-c2="" class="iconka"></div>
              <h4 _ngcontent-okf-c2="" data-i18n="how-it-works-3-header">Abschließen</h4>
              <p _ngcontent-okf-c2="" data-i18n="how-it-works-3-description">Klicken Sie auf Handel, um den präzisen und akkuraten Freihandel mit unserem preisgekrönten Algorithmus zu genießen. Sie können den Handel auch manuell verwalten, wenn Sie es vorziehen, auf eigene Faust zu handeln.</p>
            </div>
          </div>
        </div>
        <div _ngcontent-okf-c2="" class="ask lazy-load">
          <button _ngcontent-okf-c2="" class="but1 scroll-to" data-move-to="bitcoin-sub-b" data-i18n="open-free-account-button">Kostenloses Konto erstellen</button>
          <h2 _ngcontent-okf-c2="" data-i18n="frequently-asked-questions-header">Häufig gestellte Fragen</h2>
          <div _ngcontent-okf-c2="" class="ask_container">
            <div _ngcontent-okf-c2="" class="ask_box">
              <h4 _ngcontent-okf-c2="" data-i18n="faq-1-question">Welche Art von Ergebnissen kann ich erwarten?</h4>
              <p _ngcontent-okf-c2=""><span data-i18n="faq-1-answer-1">Bitcoin Circuit Mitglieder profitieren in der Regel</span> <span>$</span>1100 <span data-i18n="faq-1-answer-2">täglich</span></p>
            </div>
            <div _ngcontent-okf-c2="" class="ask_box">
              <h4 _ngcontent-okf-c2="" data-i18n="faq-2-question">Wie viele Stunden muss ich täglich arbeiten?</h4>
              <p _ngcontent-okf-c2="" data-i18n="faq-2-answer">Unsere Mitglieder arbeiten durchschnittlich 20 Minuten pro Tag oder weniger. Da die Software den Handel abwickelt, ist der Aufwand minimal.</p>
            </div>
            <div _ngcontent-okf-c2="" class="ask_box">
              <h4 _ngcontent-okf-c2="" data-i18n="faq-3-question">Was ist der maximale Betrag, den ich verdienen kann?</h4>
              <p _ngcontent-okf-c2="" data-i18n="faq-3-answer">Die Bitcoin Circuit kennt keine Grenzen. Einige Mitglieder verdienten ihre erste Million innerhalb von nur 61 Tagen.</p>
            </div>
            <div _ngcontent-okf-c2="" class="ask_box">
              <h4 _ngcontent-okf-c2="" data-i18n="faq-4-question">Wie viel kostet die Software?</h4>
              <p _ngcontent-okf-c2="" data-i18n="faq-4-answer">Mitglieder von der Bitcoin Circuit erhalten kostenlos eine Kopie unserer proprietären Software. Um ein Mitglied zu werden, füllen Sie einfach das Formular auf dieser Seite aus.</p>
            </div>
            <div _ngcontent-okf-c2="" class="ask_box">
              <h4 _ngcontent-okf-c2="" data-i18n="faq-5-question">Ist es MLM oder Affiliate Marketing ähnlich?</h4>
              <p _ngcontent-okf-c2="" data-i18n="faq-5-answer">Es ist nicht wie MLM, Teilnehmer-Marketing oder ähnliches. Die Software gewinnt Handel mit einer Genauigkeit von 99,4%.</p>
            </div>
            <div _ngcontent-okf-c2="" class="ask_box">
              <h4 _ngcontent-okf-c2="" data-i18n="faq-6-question">Gibt es Gebühren?</h4>
              <p _ngcontent-okf-c2="" data-i18n="faq-6-answer">Es gibt keine versteckten Gebühren. Keine Maklergebühren oder Provisionen. Ihr gesamtes Geld gehört zu 100% Ihnen und Sie können es jederzeit ohne Verzögerung abheben.</p>
            </div>
          </div>
        </div>
        <div _ngcontent-okf-c2="" class="v2">
          <div _ngcontent-okf-c2="">
            <div _ngcontent-okf-c2="" class="reg_block2">
              <div _ngcontent-okf-c2="" class="center">
                <div _ngcontent-okf-c2="" class="hero__reg_form">
                  <div _ngcontent-okf-c4="" id="regForm" class="member-form_en">
                    <div _ngcontent-okf-c4="" class="form-container-unique ti-form-1" id="form1">
                      <form class="form" method="post" action="mail.php" enctype="application/json">
                        <div _ngcontent-okf-c4="" class="form-group field-ti0form-first_name">
                          <input data-i18n="form-first-name-place-holder" class="form-control regFormFirstName input" name="name" type="text" placeholder="Vorname">
                          <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                        </div>
                        <div _ngcontent-okf-c4="" class="form-group field-ti0form-last_name">
                          <input data-i18n="form-last-name-place-holder" class="form-control regFormLastNname input" name="secondname" type="text" placeholder="Nachname">
                          <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                        </div>
                        <div _ngcontent-okf-c4="" class="form-group field-ti0form-email email-group">
                          <input data-i18n="form-email-place-holder" class="reg-email form-control regFormEmail input" name="email" type="email" placeholder="E-Mail">
                          <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                        </div>
                        <div class="form-content form-actions">
                          <div class="form-group" bis_skin_checked="1">
                            <select name="country" class="bfh-countries form-control input">


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

                                  <option <?=$selected;?> data-phone-code="<?=$country_data['code']?>" value="<?=$country_data['full_name'];?>"><?=$country_data['full_name'];?>
                                  </option>
                                <?php endforeach; endif; ?>

                            </select>

                          </div>
                          <div class="form-group">
                            <input class=" form-control input" name="phone" type="phone" placeholder="Telefon">
                          </div>
                          <button data-i18n="get-started-now-button" type="submit" class="get_acc button button-primary register-btn register-btn-en regFormButton">Starten Sie jetzt</button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <offers-confirm-text _ngcontent-okf-c2="" _nghost-okf-c5="">
                    <div _ngcontent-okf-c5="" class="confirm-text">
                      <p _ngcontent-okf-c5="" class="confirm-text_links"><span _ngcontent-okf-c5="" data-i18n="CONFIRM">Indem du hier klickst, stimmst du unseren </span><span _ngcontent-okf-c5=""><offers-basic-modal-popup _ngcontent-okf-c5=""_nghost-okf-c8=""><a _ngcontent-okf-c8=""data-popbox-target="privacy-policy"id="privacy-policy"data-i18n="CONFIRM_PRIVACY">Datenschutzbestimmungen</a></offers-basic-modal-popup></span><span _ngcontent-okf-c5="" data-i18n="CONFIRM_AND"> und </span><span _ngcontent-okf-c5=""><offers-basic-modal-popup _ngcontent-okf-c5=""_nghost-okf-c8=""><a _ngcontent-okf-c8=""data-popbox-target="terms"id="terms"data-i18n="CONFIRM_TERMS">AGBs</a></offers-basic-modal-popup></span><span _ngcontent-okf-c5=""></span></p>
                    </div>
                  </offers-confirm-text>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer _ngcontent-okf-c2="" class="">
          <div _ngcontent-okf-c2="" class="other_logo__box">
            <ul _ngcontent-okf-c2="">
              <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/mcafee.png"></li>
              <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/ersign.png"></li>
              <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/Symantec.png"></li>
              <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/geotrust.png"></li>
              <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/21-layers.png"></li>
            </ul>
          </div>
          <div _ngcontent-okf-c2="" class="risk">
            <p _ngcontent-okf-c2="" data-i18n="NOTE_DESC"><b>Wichtiger Risikohinweis</b> Der Handel mit FX und CFDs birgt ein hohes Verlustrisiko aufgrund des Hebeleffekts des Handels, der zum Totalverlust Ihres Kapitals führen könnte und der möglicherweise nicht für alle Typen von Anlegern geeignet ist. Bitte lesen Sie unsere vollständige Risikowarnung und den relevanten Broker, bei dem Sie registriert sind, um sicherzustellen, dass Sie die Risiken verstehen bevor Sie fortfahren, unter Berücksichtigung Ihrer relevanten Erfahrung. Suchen Sie gegebenenfalls unabhängigen Rat. Die auf dieser Website und in den Offenlegungsdokumenten enthaltenen Informationen sind allgemeiner Natur und berücksichtigen nicht Ihre persönlichen Umstände, Ihre finanzielle Situation oder Ihre Bedürfnisse. Sie sollten die Maklervereinbarung sorgfältig prüfen und unabhängigen Rat einholen, bevor Sie entscheiden, ob der Handel mit solchen Produkten für Sie geeignet ist.</p>
          </div>
          <div class="container menu">
            <ul class="footer-ul">
              <li><a class="custom_a" data-popbox-target="earnings-disclaimer" id="earnings-disclaimer" href="javascript:;" data-i18n="">DISCLAIMER</a></li>
              <li><a class="custom_a" data-popbox-target="terms" id="terms" href="javascript:;" data-i18n="">TERMS</a></li>
              <li><a class="custom_a" data-popbox-target="privacy-policy" id="privacy-policy" href="javascript:;" data-i18n="">PRIVACY</a></li>
              <li><a class="custom_a" data-popbox-target="spam-policy" id="spam-policy" href="javascript:;" data-i18n="">REPORT ABUSE</a></li>
            </ul>
          </div>
        </footer>
        <div data-popbox-id="privacy-policy" class="popbox footer-info-view">
          <button data-popbox-close="privacy-policy" class="btn_close">X</button>
          <div class="popbox_container">
            <div class="nobottommargin">
              <iframe data-src="/pages/privacy-policy.html" frameborder="0" class="popbox-load"></iframe>
            </div>
          </div>
        </div>
        <div data-popbox-id="terms" class="popbox footer-info-view">
          <button data-popbox-close="terms" class="btn_close">X</button>
          <div class="popbox_container">
            <div class="nobottommargin">
              <iframe data-src="/pages/terms.html" frameborder="0" class="popbox-load"></iframe>
            </div>
          </div>
        </div>
        <div data-popbox-id="earnings-disclaimer" class="popbox footer-info-view">
          <button data-popbox-close="earnings-disclaimer" class="btn_close">X</button>
          <div class="popbox_container">
            <div class="nobottommargin">
              <iframe data-src="/pages/earnings-disclaimer.html" frameborder="0" class="popbox-load"></iframe>
            </div>
          </div>
        </div>
        <div data-popbox-id="spam-policy" class="popbox footer-info-view">
          <button data-popbox-close="spam-policy" class="btn_close">X</button>
          <div class="popbox_container">
            <div class="nobottommargin">
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
<div class="btc-widget-block">​ ​
  <div id="btc-widget" style="display:block;background-color:#fff;width:285px;border:2px solid #e1e5ea;border-radius:10px;padding:10px 0;font-family:&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif;overflow:hidden"><img alt="logo" src="img/btc.png" id="btc-widget-image" style="width:64px;height:64px;margin:0 40px 0 15px;float:left">
    <div id="btc-widget-wrapper" style="padding-top:9px">
      <div id="btc-widget-title" style="color:#1070e0;font-weight:700">Bitcoin</div>
      <div style="font-weight:700;font-size:1.17em"><span id="btc-widget-price-block" style="color:red">$10315.73</span>&nbsp;<span id="btc-widget-direction-block" style="color:red">↓</span></div>
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
<div data-popbox-id="redirect-iframe" class="popbox footer-info-view">
  <div class="popbox_container">
    <div class="nobottommargin redirect-container"></div>
  </div>
</div>
</body>

</html>