<?php
/*Path to class files*/
define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("CONTROLLER_PATH", ROOT. "/src/controllers/");
define("MODEL_PATH", ROOT. "/src/models/");
define("VIEW_PATH", ROOT. "/src/views/");

/*Database connection config*/
define("DB_HOST", 'local');
define("DB_USER", '');
define("DB_PASSWORD", '');
define("DB_NAME", 'intergaz');

require_once ROOT. "/src/data/Database.php";
require_once CONTROLLER_PATH. 'Controller.php';
require_once MODEL_PATH. 'Model.php';
require_once VIEW_PATH. 'View.php';

class Config
{
    public static function build() 
    {
        $controllerName = "IndexController";
        $modelName = "IndexModel";
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
                $modelName = $name . "Model";
            }
        }
        
        try {
            if (!file_exists(CONTROLLER_PATH . $controllerName . ".php")) {
                throw new Exception ($controllerName . ' not exist');
            }
            if (!file_exists(MODEL_PATH . $modelName . ".php")) {
                throw new Exception ($modelName . ' not exist');
            }

            include CONTROLLER_PATH . $controllerName . ".php";
            include MODEL_PATH . $modelName . ".php";
        } catch (Exception $e) {
            $controllerName = "ErrorpageController";
            include CONTROLLER_PATH . $controllerName . ".php";
        }

        if (isset($route[2]) && $route[2] != '') {
            $action = $route[2];
        }

        $controller = new $controllerName();
        $controller->$action();
    }
}