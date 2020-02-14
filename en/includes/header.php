<?php

$url_get = explode('/?',$_SERVER['REQUEST_URI']);

if (isset($url_get[1])){
    $_SESSION['commenturi']='comment:'.$url_get[1];
}

if (isset($_GET['btag'])){

    setcookie("Btag", $_GET['btag'], time()+2592000, "/");  // срок 30 дней

}

if(!empty($_GET['promo'])){
    $_SESSION['promo'] = $_GET['promo'];
}


if(!empty($_GET)){
    foreach ($_GET as $name => $key){
        $_SESSION['__udata'][$name] = $key;
    }

    header($url);
    exit();
}


