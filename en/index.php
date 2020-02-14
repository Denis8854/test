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
<offers-root _nghost-okf-c0="" ng-version="7.2.15">
  <section _ngcontent-okf-c0="" offerslangclass="" class="style-en">
    <router-outlet _ngcontent-okf-c0=""></router-outlet>
    <offers-sign-up _nghost-okf-c2="">
      <header _ngcontent-wln-c2="" id="wrapper">
        <div _ngcontent-wln-c2="" class="intro-section-1 widget-people warning" data-pause-time="1000" data-animate-time="0" bis_skin_checked="1">
          <p _ngcontent-wln-c2="" class="intro-p"><b data-i18n="">WARNING</b>:<span data-i18n="">Due to extremely high media demand, we will close registration as of</span> <b><span class="tomorrow-date"><span data-content="dateNow" data-format-value="DD/MM/YYYY">09/01/2020</span> </span>- <span data-i18n="">HURRY!</span> </b><span class="countdown-span" data-content="deadline" data-format-value="5">04:55</span></p>
        </div>
        <div _ngcontent-okf-c2="" class="main_row" bis_skin_checked="1">
          <div _ngcontent-okf-c2="" class="widget_box" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="country_box" bis_skin_checked="1">
              <div _ngcontent-okf-c2="" class="exclusive-offers-wrapper intro-margin-div none" bis_skin_checked="1">
                <div _ngcontent-okf-c2="" class="gtd-geo-country-flag-icon" style="background-image:url(https://restcountries.eu/data/usa.svg)" bis_skin_checked="1"></div>
                <div _ngcontent-okf-c2="" class="text" bis_skin_checked="1">
                  <p _ngcontent-okf-c2="" class="purple" data-i18n="exclusive-offer-for">Exclusive offers for</p><span _ngcontent-okf-c2="" class="red"><p _ngcontent-okf-c2="" data-i18n="traders-in-country">trades in <span data-i18n="country-name-custom" _ngcontent-okf-c2="" class="gtd-geo-country-name">United States of America</span></p>
                                        </span>
                </div>
              </div>
            </div>
            <div _ngcontent-okf-c2="" class="user_status animate bounceInDown" style="display:block" bis_skin_checked="1">
              <div class="media notification-top widget-people" data-init="person" bis_skin_checked="1">
                <div class="media-left" bis_skin_checked="1"><img data-attribute="src" data-content="photo" alt="Notification Photo" class="img-circle main_row user_status__img" width="57" height="57" src="/ui-names/photos/female/23.jpg"></div>
                <div _ngcontent-okf-c2="" class="user_status__status" bis_skin_checked="1">
                  <div data-content="name" style="display:inline-block;margin-top:15px" bis_skin_checked="1">Nikolas</div><span>&nbsp; just joined</span></div>
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
                  <h1 data-i18n="bitcoin-header">Bitcoin Is Making People Rich</h1>
                  <p class="video-subheader"><span data-i18n="bitcoin-sub" class="bitcoin-sub">And you can Become The</span> <span class="bitcoin-sub-b" data-i18n="bitcoin-sub-b">Next Millionaire...</span></p>
                </div>
              </div>
              <div class="hero__container" bis_skin_checked="1">
                <div class="hero__video" bis_skin_checked="1">
                  <video class="video" id="video-lite" controls="" muted="" autoplay="autoplay" fluid="" playsinline="" controlslist="nodownload" preload="none">
                    <source data-src="media/en-1.mp4" type="video/mp4" src="media/en-1.mp4">
                    <track kind="subtitles" srclang="en" data-src-ar="subtitles/Spanish.vtt" data-srclang="es" data-src-at="subtitles/German.vtt" data-src-by="subtitles/Russian.vtt" data-src-bo="subtitles/Spanish.vtt" data-src-cl="subtitles/Spanish.vtt" data-src-co="subtitles/Spanish.vtt" data-src-cr="subtitles/Spanish.vtt" data-src-cu="subtitles/Spanish.vtt" data-src-dk="subtitles/Danish.vtt" data-src-do="subtitles/Spanish.vtt" data-src-ec="subtitles/Spanish.vtt" data-src-sv="subtitles/Spanish.vtt" data-src-ee="subtitles/Estonian.vtt" data-src-fo="subtitles/Danish.vtt" data-src-ge="subtitles/Russian.vtt" data-src-de="subtitles/German.vtt" data-src-it="subtitles/Italian.vtt" data-src-kz="subtitles/Russian.vtt" data-src-kg="subtitles/Russian.vtt" data-src-lv="subtitles/Latvian.vtt" data-src-lt="subtitles/Lithuanian.vtt" data-src-mx="subtitles/Spanish.vtt" data-src-md="subtitles/Russian.vtt" data-src-nl="subtitles/Dutch.vtt" data-src-no="subtitles/Norwegian.vtt" data-src-pa="subtitles/Spanish.vtt" data-src-pe="subtitles/Spanish.vtt" data-src-pl="subtitles/Polish.vtt" data-src-pr="subtitles/Spanish.vtt" data-src-ru="subtitles/Russian.vtt" data-src-es="subtitles/Spanish.vtt" data-src-se="subtitles/Swedish.vtt" data-src-ch="subtitles/German.vtt" data-src-ua="subtitles/Ukrainian.vtt" data-src-uz="subtitles/Russian.vtt" data-src-fr="subtitles/French.vtt" data-src-ko="subtitles/Korean.vtt" data-src-ae="subtitles/Arabic.vtt" data-src-fi="subtitles/Finnish.vtt" data-src-tw="subtitles/Chinese.vtt" data-src-cn="subtitles/Chinese.vtt" data-src-pt="subtitles/Portuguese.vtt" data-src-br="subtitles/Portuguese.vtt" data-src-be="subtitles/French.vtt" default="" src="">
                  </video>
                </div>
                <div _ngcontent-okf-c2="" class="hero__reg_form" id="signUpForm" bis_skin_checked="1">
                  <h3 _ngcontent-okf-c2="" data-i18n="form-header">CHANGE YOUR LIFE TODAY!</h3>
                  <offers-reg-form _ngcontent-okf-c2="" _nghost-okf-c4="">
                    <div _ngcontent-okf-c4="" id="regForm" class="top-form-wrapper member-form scroll-trigger reg-form member-form_en" bis_skin_checked="1">
                      <div _ngcontent-okf-c4="" class="form-container-unique ti-form-1" id="form1" bis_skin_checked="1">
                        <form class="form" method="post" action="mail.php" enctype="application/json" novalidate="novalidate">
                          <div _ngcontent-okf-c4="" class="form-group field-ti0form-first_name" bis_skin_checked="1">
                            <input data-i18n="form-first-name-place-holder" class="form-control regFormFirstName input" name="name" type="text" placeholder="Enter your First Name">
                            <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                          </div>
                          <div _ngcontent-okf-c4="" class="form-group field-ti0form-last_name" bis_skin_checked="1">
                            <input data-i18n="form-last-name-place-holder" class="form-control regFormLastNname input" name="secondname" type="text" placeholder="Enter your Last Name">
                            <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                          </div>
                          <div _ngcontent-okf-c4="" class="form-group field-ti0form-email email-group" bis_skin_checked="1">
                            <input data-i18n="form-email-place-holder" class="reg-email form-control regFormEmail input" name="email" type="email" placeholder="Enter your Email Address">
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
                              <input class="form-control input" name="phone" type="phone" placeholder="Phone">
                              <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                            </div>
                            <button data-i18n="form-button" type="submit" class="get_acc button button-primary register-btn register-btn-en regFormButton">Get started now</button>
                          </div>
                          <input type="hidden" name="country" value="us">

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
                      <p _ngcontent-okf-c5="" class="confirm-text_links"><span _ngcontent-okf-c5="" data-i18n="CONFIRM">By clicking the button you agree to our </span><span _ngcontent-okf-c5=""><offers-basic-modal-popup _ngcontent-okf-c5="" _nghost-okf-c8=""><a _ngcontent-okf-c8="" data-popbox-target="privacy-policy" id="privacy-policy" data-i18n="CONFIRM_PRIVACY">&ensp;Privacy Policy&ensp;</a></offers-basic-modal-popup></span><span _ngcontent-okf-c5="" data-i18n="CONFIRM_AND">&ensp; and &ensp;</span><span _ngcontent-okf-c5=""><offers-basic-modal-popup _ngcontent-okf-c5="" _nghost-okf-c8=""><a _ngcontent-okf-c8="" data-popbox-target="terms" id="terms" data-i18n="CONFIRM_TERMS">Terms &amp; Сonditions</a></offers-basic-modal-popup></span><span _ngcontent-okf-c5=""></span></p>
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
            <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="bitgo logo" class="logo" src="en/img/bitgo.png"></li>
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
              <h1 _ngcontent-okf-c2="" data-i18n="join-us-and-start">Join Us and Start Getting Rich with Bitcoin Circuit!</h1>
              <p _ngcontent-okf-c2="" data-i18n="join-us-description">The Bitcoin Circuit is a group reserved exclusively to people who jumped on the insane returns that Bitcoin offers and have quietly amassed a fortune in doing so. Our members enjoy retreats around the world every month while they make money on their laptop with just a few minutes of “work” every day.</p>
            </div>
            <div _ngcontent-okf-c2="" class="other_logo__box" bis_skin_checked="1">
              <h4 _ngcontent-okf-c2="" data-i18n="as-seen-on">As seen on:</h4>
              <ul _ngcontent-okf-c2="">
                <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/Shape_17_copy.jpg"></li>
                <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/Artwork_1.jpg"></li>
                <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/ft-com-1.jpg"></li>
                <li _ngcontent-okf-c2=""><img _ngcontent-okf-c2="" alt="" src="img/time.jpg"></li>
              </ul>
            </div>
          </div>
        </div>
        <h2 _ngcontent-okf-c2="" class="oligarchs__title" data-i18n="testimonials-block-header">REAL TESTIMONIALS FROM OUR USERS</h2>
        <div _ngcontent-okf-c2="" class="oligarchs" bis_skin_checked="1">
          <div _ngcontent-okf-c2="" class="oligarch_box" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="review" bis_skin_checked="1">
              <p _ngcontent-okf-c2=""><i>'<span data-i18n="testimonials-1-text">I finally know what it’s like to live the dream. I no longer feel like I’m on the outside looking in while everyone else has all the fun. Bitcoin Circuit has allowed me to retire early and live the 1% lifestyle.</span>'</i></p>
            </div>
            <div _ngcontent-okf-c2="" class="detail" bis_skin_checked="1">
              <p _ngcontent-okf-c2="" data-i18n="testimonials-1-name">Ernest I.</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-1-location">Orem, UT</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-profit1">Profit $8,519</p>
            </div>
          </div>
          <div _ngcontent-okf-c2="" class="oligarch_box" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="review" bis_skin_checked="1">
              <p _ngcontent-okf-c2=""><i>'<span data-i18n="testimonials-2-text">I've been a member of Bitcoin Circuit for only 47 days. But my life has already changed! Not only have I made my first</span></i></p>
            </div>
            <div _ngcontent-okf-c2="" class="detail" bis_skin_checked="1">
              <p _ngcontent-okf-c2="" data-i18n="testimonials-2-name">Jane K.</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-2-location">Fort Worth, TX</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-profit2">Profit $10,578</p>
            </div>
          </div>
          <div _ngcontent-okf-c2="" class="oligarch_box" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="review" bis_skin_checked="1">
              <p _ngcontent-okf-c2=""><i>'<span data-i18n="testimonials-3-text">Two weeks ago, I got laid off. With no options left, I thought my life was over. Now I’m making over</span></i></p>
            </div>
            <div _ngcontent-okf-c2="" class="detail" bis_skin_checked="1">
              <p _ngcontent-okf-c2="" data-i18n="testimonials-3-name">Jennifer A.</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-3-location">Irvine, CA</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-profit3">Profit $7,192</p>
            </div>
          </div>
          <div _ngcontent-okf-c2="" class="oligarch_box" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="review" bis_skin_checked="1">
              <p _ngcontent-okf-c2=""><i>'<span data-i18n="testimonials-4-text">Surprisingly, I used to be an investor on Wall Street. And I’ve never seen anything like this in my 10 year tenure at the company. My colleagues all thought I was crazy when I quit the firm to invest with the Bitcoin Circuit software full-time.</span></i></p>
            </div>
            <div _ngcontent-okf-c2="" class="detail" bis_skin_checked="1">
              <p _ngcontent-okf-c2="">Mark K.</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-4-location">Nashville, TN</p>
              <p _ngcontent-okf-c2="" data-i18n="testimonials-profit4">Profit $12,923</p>
            </div>
          </div>
        </div>
        <div _ngcontent-okf-c2="" class="v2" bis_skin_checked="1">
          <div _ngcontent-okf-c2="" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="advantages2" bis_skin_checked="1">
              <div _ngcontent-okf-c2="" class="advantages__success" bis_skin_checked="1">
                <div _ngcontent-okf-c2="" class="success_box" bis_skin_checked="1">
                  <div _ngcontent-okf-c2="" class="iconka" bis_skin_checked="1"></div>
                  <h4 _ngcontent-okf-c2="" data-i18n="laser-accurate-header-1">LASER-ACCURATE PERFORMANCE</h4>
                  <p _ngcontent-okf-c2="" data-i18n="laser-accurate-description">There is no other trading app in the world that performs at the 99.4% level of accuaracy that The Bitcoin Circuit is able to hit. That's why our members from around the world trust us to double triple and quadruple their hard-earned money.</p>
                </div>
                <div _ngcontent-okf-c2="" class="success_box" bis_skin_checked="1">
                  <div _ngcontent-okf-c2="" class="iconka" bis_skin_checked="1"></div>
                  <h4 _ngcontent-okf-c2="" data-i18n="superior-technology-header-1">SUPERIOR TECHNOLOGY</h4>
                  <p _ngcontent-okf-c2="" data-i18n="superior-technology-description">The Bitcoin Circuit software has been created using the most advanced programming the trading world has ever seen. The software is ahead of the markets by 0.01 seconds. This 'time leap' makes the software the most consistent trading app on the planet.</p>
                </div>
                <div _ngcontent-okf-c2="" class="success_box" bis_skin_checked="1">
                  <div _ngcontent-okf-c2="" class="iconka" bis_skin_checked="1"></div>
                  <h4 _ngcontent-okf-c2="" data-i18n="award-winning-header-1">AWARD-WINNING TRADING APP</h4>
                  <p _ngcontent-okf-c2="" data-i18n="award-winning-description">The Bitcoin Circuit app has won a number of awards. The most recent awards we have had the honor of receiving is getting #1 in the trading software category for the US Trading Association.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div _ngcontent-okf-c2="" class="results" bis_skin_checked="1">
          <button _ngcontent-okf-c2="" class="but2 scroll-to" data-move-to="bitcoin-sub-b" data-i18n="join-now-button">JOIN NOW!</button>
          <h2 _ngcontent-okf-c2="" class="results__title" data-i18n="live-profit-table-header">LIVE PROFIT RESULTS</h2>
          <section class="live-results-section text-center">
            <div class="container relative tablica" bis_skin_checked="1">
              <div class="live-results-table-wrapper tablica__wrapper" bis_skin_checked="1">
                <table class="table table-win live-results-table">
                  <thead class="thead">
                  <tr>
                    <th scope="col" data-i18n="table-column-1" style="font-weight:600!important">The Crypto Trader</th>
                    <th scope="col" data-i18n="table-column-2" style="font-weight:600!important">Profit</th>
                    <th scope="col" data-i18n="table-column-3" style="font-weight:600!important">Trade Time</th>
                    <th scope="col" data-i18n="table-column-4" style="font-weight:600!important">Cryptocurrency</th>
                    <th scope="col" data-i18n="table-column-5" style="font-weight:600!important">Result</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><b>Brannon P.</b> just won...</td>
                    <td><b>37$</b></td>
                    <td>09/01/2020</td>
                    <td>BTC/ETH</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  <tr>
                    <td><b>Bryana J.</b> just won...</td>
                    <td><b>622$</b></td>
                    <td>09/01/2020</td>
                    <td>LTC/EOS</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  <tr>
                    <td><b>Eve L.</b> just won...</td>
                    <td><b>43$</b></td>
                    <td>09/01/2020</td>
                    <td>BTC/ETH</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  <tr>
                    <td><b>Gaston N.</b> just won...</td>
                    <td><b>333$</b></td>
                    <td>09/01/2020</td>
                    <td>BTC/ETH</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  <tr>
                    <td><b>Claudia W.</b> just won...</td>
                    <td><b>524$</b></td>
                    <td>09/01/2020</td>
                    <td>ETH/LTC</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  <tr>
                    <td><b>Hilton T.</b> just won...</td>
                    <td><b>962$</b></td>
                    <td>09/01/2020</td>
                    <td>LTC/EOS</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  <tr>
                    <td><b>Laurianne S.</b> just won...</td>
                    <td><b>263$</b></td>
                    <td>09/01/2020</td>
                    <td>EOS/ETH</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  <tr>
                    <td><b>Eve L.</b> just won...</td>
                    <td><b>111$</b></td>
                    <td>09/01/2020</td>
                    <td>ETH/LTC</td>
                    <td><i class="brcheck-icon"></i></td>
                  </tr>
                  <tr>
                    <td><b>Marisol S.</b> just won...</td>
                    <td><b>58$</b></td>
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
          <h2 _ngcontent-okf-c2="" class="how_it_works__title" data-i18n="how-it-works-header">HOW IT WORKS</h2>
          <div _ngcontent-okf-c2="" class="how_it_works__success" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="success_box" bis_skin_checked="1">
              <div _ngcontent-okf-c2="" class="iconka" bis_skin_checked="1"></div>
              <h4 _ngcontent-okf-c2="" data-i18n="how-it-works-1-header">REGISTER ON THE SITE</h4>
              <p _ngcontent-okf-c2="" data-i18n="how-it-works-1-description">Once your registration is accepted, you will automatically become the newest member of the Bitcoin Circuit. And you will get to claim our proprietary bitcoin trading software for free.</p>
            </div>
            <div _ngcontent-okf-c2="" class="success_box" bis_skin_checked="1">
              <div _ngcontent-okf-c2="" class="iconka" bis_skin_checked="1"></div>
              <h4 _ngcontent-okf-c2="" data-i18n="how-it-works-2-header">FUND YOUR ACCOUNT</h4>
              <p _ngcontent-okf-c2=""><span data-i18n="how-it-works-2-description">Like any business, you need working capital to get started. So to start profiting with The Bitcoin Circuit, you must invest any amount you desire of</span> <span>$</span>250 <span>or more.</span></p>
            </div>
            <div _ngcontent-okf-c2="" class="success_box" bis_skin_checked="1">
              <div _ngcontent-okf-c2="" class="iconka" bis_skin_checked="1"></div>
              <h4 _ngcontent-okf-c2="" data-i18n="how-it-works-3-header">FINISH</h4>
              <p _ngcontent-okf-c2="" data-i18n="how-it-works-3-description">Click trade to enjoy precise and accurate hands-free trading powered by our award-winning algorithm. You can also set the trading to manual if you prefer to trade on your own.</p>
            </div>
          </div>
        </div>
        <div _ngcontent-okf-c2="" class="ask" bis_skin_checked="1">
          <button _ngcontent-okf-c2="" class="but1 scroll-to" data-move-to="bitcoin-sub-b" data-i18n="open-free-account-button">OPEN FREE ACCOUNT</button>
          <h2 _ngcontent-okf-c2="" data-i18n="frequently-asked-questions-header">FREQUENTLY ASKED QUESTIONS</h2>
          <div _ngcontent-okf-c2="" class="ask_container" bis_skin_checked="1">
            <div _ngcontent-okf-c2="" class="ask_box" bis_skin_checked="1">
              <h4 _ngcontent-okf-c2="" data-i18n="faq-1-question">What kind of results can I expect?</h4>
              <p _ngcontent-okf-c2=""><span data-i18n="faq-1-answer-1">Bitcoin Circuit members typically profit a minimum of</span> <span>$</span>1100 <span data-i18n="faq-1-answer-2">daily.</span></p>
            </div>
            <div _ngcontent-okf-c2="" class="ask_box" bis_skin_checked="1">
              <h4 _ngcontent-okf-c2="" data-i18n="faq-2-question">How many hours per day do I need to work?</h4>
              <p _ngcontent-okf-c2="" data-i18n="faq-2-answer">Our members work an average of 20 minutes a day or less. Because the software handles the trading the amount of 'work' required is minimal.</p>
            </div>
            <div _ngcontent-okf-c2="" class="ask_box" bis_skin_checked="1">
              <h4 _ngcontent-okf-c2="" data-i18n="faq-3-question">What is the maximum amount that I can make?</h4>
              <p _ngcontent-okf-c2="" data-i18n="faq-3-answer">Your profits are unlimited within The Bitcoin Circuit. Some members earned their first million within just 61 days.</p>
            </div>
            <div _ngcontent-okf-c2="" class="ask_box" bis_skin_checked="1">
              <h4 _ngcontent-okf-c2="" data-i18n="faq-4-question">How much does the software cost?</h4>
              <p _ngcontent-okf-c2="" data-i18n="faq-4-answer">Members of The Bitcoin Circuit get a copy of our proprietart software free of charge. To become a member, simply fill out the form on this page.</p>
            </div>
            <div _ngcontent-okf-c2="" class="ask_box" bis_skin_checked="1">
              <h4 _ngcontent-okf-c2="" data-i18n="faq-5-question">Is this like MLM or Affiliate Marketing?</h4>
              <p _ngcontent-okf-c2="" data-i18n="faq-5-answer">This is not like MLM, affiliate marketing or anything else out there. The software wins trades with 99.4% accuaracy.</p>
            </div>
            <div _ngcontent-okf-c2="" class="ask_box" bis_skin_checked="1">
              <h4 _ngcontent-okf-c2="" data-i18n="faq-6-question">Are there any fees?</h4>
              <p _ngcontent-okf-c2="" data-i18n="faq-6-answer">There are no hidden fees. No broker fees or commissions. All of your money is 100% yours and you are free to withdraw it at any time you choose without delay.</p>
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
                          <input data-i18n="form-first-name-place-holder" class="form-control regFormFirstName input" name="name" type="text" placeholder="Enter your First Name">
                          <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                        </div>
                        <div _ngcontent-okf-c4="" class="form-group field-ti0form-last_name" bis_skin_checked="1">
                          <input data-i18n="form-last-name-place-holder" class="form-control regFormLastNname input" name="secondname" type="text" placeholder="Enter your Last Name">
                          <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                        </div>
                        <div _ngcontent-okf-c4="" class="form-group field-ti0form-email email-group" bis_skin_checked="1">
                          <input data-i18n="form-email-place-holder" class="reg-email form-control regFormEmail input" name="email" type="email" placeholder="Enter your Email Address">
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
                            <input class="form-control input" name="phone" type="phone" placeholder="Phone">
                            <p _ngcontent-okf-c4="" class="help-block help-block-error"></p>
                          </div>
                          <button data-i18n="get-started-now-button" type="submit" class="get_acc button button-primary register-btn register-btn-en regFormButton">Get started now</button>
                        </div>
                        <input type="hidden" name="country" value="us">
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
                      <p _ngcontent-okf-c5="" class="confirm-text_links"><span _ngcontent-okf-c5="" data-i18n="CONFIRM">By clicking the button you agree to our </span><span _ngcontent-okf-c5=""><offers-basic-modal-popup _ngcontent-okf-c5="" _nghost-okf-c8=""><a _ngcontent-okf-c8="" data-popbox-target="privacy-policy" id="privacy-policy" data-i18n="CONFIRM_PRIVACY">Privacy Policy</a></offers-basic-modal-popup></span><span _ngcontent-okf-c5="" data-i18n="CONFIRM_AND">and </span><span _ngcontent-okf-c5=""><offers-basic-modal-popup _ngcontent-okf-c5="" _nghost-okf-c8=""><a _ngcontent-okf-c8="" data-popbox-target="terms" id="terms" data-i18n="CONFIRM_TERMS">Terms &amp; Сonditions</a></offers-basic-modal-popup></span><span _ngcontent-okf-c5=""></span></p>
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
            <p _ngcontent-okf-c2="" data-i18n="NOTE_DESC"><b>Important Risk Note:</b> Trading in FX and CFDs involves a high risk of loss due to the leveraged nature of the trading which might lead to the total loss of your capital and which might not be appropriate for all types of investors. Please read our full risk warning and the relevant broker you will be registered with to ensure that you understand the risks involved prior to proceeding, taking into consideration your relevant experience. Seek independent advice if necessary. The information contained in this website and disclosure documents is of a general nature only, and does not take into account your personal circumstances, financial situation or needs. You should consider the brokerage Client Agreement carefully, and seek independent advice before deciding whether trading in such products is suitable for you.</p>
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