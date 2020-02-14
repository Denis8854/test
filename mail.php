<?php

session_start();

if (isset($_POST['email'])){
    $check['exist'] = false;

    $_SESSION['__udata']['email'] = sanitize($_POST['email']);
    $_SESSION['__udata']['phone'] = sanitize($_POST['phone']);
    $_SESSION['__udata']['name'] = sanitize($_POST['name']);
    $_SESSION['__udata']['secondname'] = sanitize($_POST['secondname']);
    $_SESSION['__udata']['password'] = sanitize($_POST['password']);
    $_SESSION['__udata']['country'] = sanitize($_POST['country']);
    $_SESSION['__udata']['lang'] = 'English';

    if (strlen($_SESSION['promo']) > 1) {
        $_SESSION['__udata']['promo'] = sanitize($_SESSION['promo']);
    }

    if (!$check['exist']){
        include "./includes/crm.php";

        echo json_encode($check);

        if (!$check['exist']){
            $filepath = 'last_email.txt';
            $fo = fopen($filepath, 'a+');
            fwrite($fo, $_SESSION['__udata']['name'] . ' : '
                . $_SESSION['__udata']['secondname'] . ' : '
                . $_SESSION['__udata']['email'] . ' : '
                . $_SESSION['__udata']['country'] . ' : '
                . $_SESSION['__udata']['phone'] . ' : '
                . $_SERVER["REMOTE_ADDR"] . ' : '
                . $_SESSION['__udata']['promo'] . ' : '
                . date('j.n.Y H.i').PHP_EOL);
            fclose($fo);

            session_destroy();

        } else {
            $filepath = 'first_email.txt';
            $fo = fopen($filepath, 'a+');
            fwrite($fo, $_SESSION['__udata']['name'] . ' : '
                . $_SESSION['__udata']['secondname'] . ' : '
                . $_SESSION['__udata']['email'] . ' : '
                . $_SESSION['__udata']['country'] . ' : '
                . $_SESSION['__udata']['phone'] . ' : '
                . $_SERVER["REMOTE_ADDR"] . ' : '
                . $_SESSION['__udata']['promo'] . ' : '
                . date('j.n.Y H.i').PHP_EOL);
            fclose($fo);
        }
    }
}

function sanitize($data)
{
    return htmlspecialchars(trim($data));
}