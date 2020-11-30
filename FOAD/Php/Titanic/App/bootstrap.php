<?php

require "../vendor/autoload.php";

use Titanic\Router;
use Titanic\Controllers\HomeController;
use Titanic\Views;

$router = new Router("/Titanic/");

$controllerName = $router->getController();

$controller = new $controllerName($router);

$result = $controller->run();

$smarty = new Smarty();

echo $result;