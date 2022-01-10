<?php
require_once '../conf/Config.php';
require_once ROOT . '/vendor/autoload.php';

session_start();

$controllerName = "Intergaz\Controllers\\" . getControllerName();

$controller = new $controllerName;
$controller->loadPage();