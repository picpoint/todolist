<?php

include __DIR__ . '/autoload.php';

$pageTemplate = __DIR__ . '/templates/authorization.php';


$pageAuth = new View($pageTemplate);
$pageAuth->showPage();


