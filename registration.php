<?php

include __DIR__ . '/classes/View.php';
include __DIR__ . '/classes/Registration.php';

$regPageTmp = __DIR__ . '/templates/registration.php';

$regPage = new View($regPageTmp);
$regPage->showPage();


if (isset($_POST['regbtn'])) {
    if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])) {
        echo "Не все поля заполнены";
        return;
    } else {
        $reg = new Registration();
        $reg->registrationUser($_POST);
    }

}