<?php

include __DIR__ . '/classes/View.php';


$regPageTmp = __DIR__ . '/templates/registration.php';

$regPage = new View($regPageTmp);
$regPage->showPage();