<?php

include __DIR__ . '/autoload.php';

$pageTemplate = __DIR__ . '/templates/authorization.php';


if (isset($_POST['authbtn'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $userData = [];
        $userData['email'] = trim($_POST['email']);
        $userData['password'] = trim($_POST['password']);

        $auth = new Authorization();
        $auth->checkAuth($userData);
    } else {
        echo "Не все поля заполнены ...";
    }
}

$pageAuth = new View($pageTemplate);
$pageAuth->showPage();