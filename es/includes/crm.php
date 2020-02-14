<?php

function send_wetrafficasa()
{
	$parts = parse_url($_SERVER['HTTP_REFERER']);
	parse_str($parts['query'], $GET);

    $api_url = 'https://platform.wetrafficasa.com/api/signup/procform';
    $jsonObj = array(
        "ai"     => $GET['ai'] ? $GET['ai'] : '',
        "ci"     => $GET['ci'] ? $GET['ci'] : '',
        "gi"     => $GET['gi'] ? $GET['gi'] : '',
        "userip" => $_SERVER["REMOTE_ADDR"],
        "firstname" => $_SESSION['__udata']['name'],
        "lastname" => $_SESSION['__udata']['secondname'],
        "email" => $_SESSION['__udata']['email'],
        "phone" => $_SESSION['__udata']['phone'],
        "password" => $_SESSION['__udata']['password'],
        "sub" => $_SERVER['SERVER_NAME'] ,
        "MPC_1" => $GET['MPC_1'] ? $GET['MPC_1'] : '',
        "MPC_2" => 'wetrafficasa',
        "MPC_3" => $GET['MPC_3'] ? $GET['MPC_3'] : '',
        "MPC_4" => $_SERVER['SERVER_NAME'],
        "MPC_5" => $GET['MPC_5'] ? $GET['MPC_5'] : '',
        "MPC_6" => $GET['MPC_6'] ? $GET['MPC_6'] : '',
        "MPC_7" => $GET['MPC_7'] ? $GET['MPC_7'] : '',
        "MPC_8" => $GET['MPC_8'] ? $GET['MPC_8'] : '',
        "MPC_9" => $GET['MPC_9'] ? $GET['MPC_9'] : '',
        'MPC_10' => $GET['MPC_10'] ? $GET['MPC_10'] : '',
        "fallback" => "false",
        "source" => $_SERVER['SERVER_NAME']
    );

    $curl = curl_init($api_url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($jsonObj));
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        "cache-control: no-cache",
        "content-type: application/json",
        "x-api-key: 2643889w34df345676ssdas323tgc738",
        "x-trackbox-password: Referrallink8354",
        "x-trackbox-username: Referrallink"
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
}

$wetrafficasa = send_wetrafficasa();
$wetrafficasa = json_decode($wetrafficasa);

if (!$wetrafficasa->status){
    $check = [];
    $check['exist'] = true;
    $check['errorMessage'] = $wetrafficasa->data;

}
else {
    $check = [];
    $check['exist'] = false;
    $check['redirect'] = $wetrafficasa->data;
}
