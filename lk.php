<?php
session_start();
//setcookie($_POST['name'], session_id(), time() + 86400);

include __DIR__ . '/autoload.php';

$pageLKTmp = __DIR__ . '/templates/lk.php';

$pageLK = new View($pageLKTmp);
$pageLK->showPage();




