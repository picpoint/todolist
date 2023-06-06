<?php

include __DIR__ . '/autoload.php';

$pageLKTmp = __DIR__ . '/templates/lk.php';

$pageLK = new View($pageLKTmp);
$pageLK->showPage();



