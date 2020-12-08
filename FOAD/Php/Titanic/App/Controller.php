<?php

namespace Titanic;

use Exception;

use Twig\Loader as Loader;
use Twig\Environment as Environment;

abstract class Controller
{
    protected Router $router;

    final public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function run()
    {
        $action = $this->router->getAction();

        if (!method_exists($this, $action)) {
            throw new Exception("Invalide Action.");
        }

        return $this->$action();
    }

    public function view(string $view, array $data = [])
    {
        $loader = new Loader\FilesystemLoader('../App/Template/Titanic');
        $twig = new Environment($loader, [
            'debug' => true,
            'cache' => '../public/cache',
        ]);

        return $twig->render($view, $data);
    }

    abstract public function index();
}