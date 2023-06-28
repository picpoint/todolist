<?php
session_start();

include __DIR__ . '/autoload.php';

$pageLKTmp = __DIR__ . '/templates/lk.php';

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";


$pageLK = new View($pageLKTmp);
$pageLK->showPage();





