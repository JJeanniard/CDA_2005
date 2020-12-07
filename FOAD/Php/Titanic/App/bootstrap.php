<?php
namespace Titanic;

require '../vendor/autoload.php';

use Twig\Loader as Loader;
use Twig\Environment as Environment;

$router = new Router('Titanic');

$loader = new Loader\FilesystemLoader('../App/Template/Titanic');
$twig = new Environment($loader, [
    'cache' => '../public',
]);

$controllerName = $router->getController();

$controller = new $controllerName($router);

$result = $controller->run();

echo $result;