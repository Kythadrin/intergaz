<?php
session_start();

include '../conf/Config.php';

require_once ROOT . '/vendor/autoload.php';

$controllerName = "IndexController";
$action = "loadPage";

$route = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

for ($i = 0; $i < count($route); $i++) {
    if ($route[$i] != "") {
        $name = '';

        if (strripos($route[1], '_')) {
            $path = explode("_", $route[1]);

            for($i = 0; $i < count($path); $i++) {
                $name .= ucfirst($path[$i]);
            }

        } else {
            $name = ucfirst($route[1]);
        }

        $controllerName = $name . "Controller";
    }
}

if (isset($route[2]) && $route[2] != '') {
    $action = $route[2];
}

$object = "Intergaz\Controllers\\" . $controllerName;

$controller = new $object;
$controller->$action();