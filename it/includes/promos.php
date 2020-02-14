<?php

function getToken($promo){
    $promos =[
        '615' => '4uuC9-5zhV_SkROQr-C-LfgH5qsCpBS0',
        '616' => 'FwqW95jsvYOnt3GyxpYTk0vQS9A0o6RF',
        '325' => '_NKdTTYxqciIvlQJeLMm3gMpsLt2Vam_'
    ];
    if (array_key_exists($promo, $promos)) {
        return $promos[$promo];
    }

    return '';
}
