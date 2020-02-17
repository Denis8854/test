var binomCampaingKey = 's15yun0z67b7t9btickt'; 
/* Key кампании в Binom. Не ID! Узнать key нужной кампании можно в настройках этой кампании. Вот здесь - http://prntscr.com/qua54o  */

/* БОЛЬШЕ НИЧЕГО НЕ МЕНЯТЬ! */

var url = 'https://cloak.site/processing/binom/?bckey='+binomCampaingKey;
var xhr = new XMLHttpRequest();
var cloakResult = 'no';

xhr.open('GET', url, false);
xhr.send();

if (xhr.status == 200) {
  cloakResult = xhr.responseText;
} 

if(cloakResult=="yes"){
  document.write('<script src="land.js" type="text/javascript"></script>');
}
