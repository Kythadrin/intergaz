<?php
define("ROOT", $_SERVER['DOCUMENT_ROOT']);

require_once ROOT . '/vendor/autoload.php';

use Intergaz\Router;

$controllerName = Router::getRoute();

$controller = new $controllerName;
$controller->loadPage();