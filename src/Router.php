<?php

namespace Intergaz;

class Router 
{
    public static function getRoute() 
    {
        $controllerName = "Intergaz\Controllers\\IndexController";

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

                $controllerName = "Intergaz\Controllers\\" . $name . "Controller";
            }
        }

        if (!class_exists($controllerName)) {
            $controllerName = "Intergaz\Controllers\\ErrorpageController";
        }

        return $controllerName;
    }
}