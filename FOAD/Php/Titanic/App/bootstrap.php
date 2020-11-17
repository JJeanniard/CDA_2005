<?php

function autoload(string $className)
{
    str_replace("\\", "/", $className);

    $className = __DIR__."/".$className.".php";

    if(is_file($className)){
        require($className);
    }else{
        echo "error de chargement de la classe!";
    }
}

spl_autoload_register("autoload");

$router = new Router();

$controllerName = $router->getController();

$controller = new $controllerName($router);
