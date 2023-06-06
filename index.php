<?php

include __DIR__ . '/autoload.php';
$indexPageTmp = __DIR__ . '/templates/index.php';

$indexPage = new View($indexPageTmp);
$indexPage->showPage();

