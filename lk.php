<?php
session_start();
setcookie('GOODCOOCKIE', session_id(), time() + 86400);

var_dump($_POST);


include __DIR__ . '/autoload.php';

$pageLKTmp = __DIR__ . '/templates/lk.php';

$pageLK = new View($pageLKTmp);
$pageLK->showPage();




