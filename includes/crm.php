<?php

function send_wetrafficasa()
{
	$parts = parse_url($_SERVER['REQUEST_URI']);
    parse_str($parts['query'], $GET);
	
    $api_url = 'https://platform.wetrafficasa.com/api/signup/procform';
    $jsonObj = array(
        "ai"     => $GET['ai'] ? $GET['ai'] : 2958247,
        "ci"     => $GET['ci'] ? $GET['ci'] : 3220,
        "gi"     => $GET['gi'] ? $GET['gi'] : 1437,
        "userip" => $_SERVER["REMOTE_ADDR"],
        "firstname" => $_SESSION['__udata']['name'],
        "lastname" => $_SESSION['__udata']['secondname'],
        "email" => $_SESSION['__udata']['email'],
        "phone" => $_SESSION['__udata']['phone'],
        "password" => 'Qwer123jgt',
        "sub" => 'app.bitcoincircuit.online',
        "MPC_1" => "Some comment",
        "MPC_2" => 'wetrafficasa',
        "MPC_3" => "free_parameter",
        "MPC_4" => 'app.bitcoincircuit.online',
        'MPC_10' => $_SERVER['SERVER_NAME'],
        "fallback" => "false",
        "source" => 'app.bitcoincircuit.online'
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
