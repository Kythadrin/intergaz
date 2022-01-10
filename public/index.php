<?php
require_once '../conf/Config.php';
require_once ROOT . '/vendor/autoload.php';

$controllerName = getController();

$controller = new $controllerName;
$controller->loadPage();