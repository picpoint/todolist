<?php

include __DIR__ . '/autoload.php';


if (isset($_POST['regbtn'])) {
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password'])) {
        echo "Не все поля заполнены";
        return;
    } else {
        $userData = [];
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim(password_hash($_POST['password'], PASSWORD_DEFAULT));

        $userData[] = $name;
        $userData[] = $email;
        $userData[] = $password;

        $reg = new Registration();
        $reg->registrationUser($userData);

        header('Location: lk.php');
    }

}


$regPageTmp = __DIR__ . '/templates/registration.php';

$regPage = new View($regPageTmp);
$regPage->showPage();