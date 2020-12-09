<?php
namespace Titanic;

require '../vendor/autoload.php';

session_start();

$router = new Router();

$controllerName = $router->getController();

$controller = new $controllerName($router);

$result = $controller->run();

echo $result;