<?php

include __DIR__ . '/classes/View.php';


$regPageTmp = __DIR__ . '/templates/registration.php';

$regPage = new View($regPageTmp);
$regPage->showPage();

if (isset($_POST['regbtn'])) {
    print_r($_POST);

    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password'])) {
        echo "Не все поля заполнены";
    } else {
        echo "сейчас зарегаем Вас....";
    }

}