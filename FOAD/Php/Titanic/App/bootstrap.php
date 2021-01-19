<?php
namespace Titanic;

require '../vendor/autoload.php';

$router = new Router();

$controllerName = $router->getController();

$controller = new $controllerName($router);

$result = $controller->run();

echo $result;