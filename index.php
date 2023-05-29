<?php

include __DIR__ . '/classes/View.php';
$indexPageTmp = __DIR__ . '/templates/index.php';

$indexPage = new View($indexPageTmp);
$indexPage->showPage();

