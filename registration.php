<?php
session_start();

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

        $userData['name'] = $name;
        $userData['email'] = $email;
        $userData['password'] = $password;

        $reg = new Registration();
        $res = $reg->checkIssetUser($userData);

        if (!empty($res)) {
            echo "Такой пользователь уже существует";
        } else {
            $reg->registrationUser($userData);

            var_dump($_POST);
            die;

            header('Location: lk.php');
        }
    }

}


$regPageTmp = __DIR__ . '/templates/registration.php';

$regPage = new View($regPageTmp);
$regPage->showPage();