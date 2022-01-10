<?php
define("ROOT", $_SERVER['DOCUMENT_ROOT']);

/*Database connection config*/
define("DB_HOST", 'local');
define("DB_USER", '');
define("DB_PASSWORD", '');
define("DB_NAME", 'intergaz');

function getControllerName() 
{
    $controllerName = "IndexController";

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

    return $controllerName;
}