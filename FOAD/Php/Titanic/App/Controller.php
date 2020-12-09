<?php

namespace Titanic;

use Exception;

use Titanic\Session;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

abstract class Controller extends Session
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
        $loader = new FilesystemLoader('../App/Views/Titanic');
        $twig = new Environment($loader, [
            'debug' => true,
            'cache' => '../public/cache',
        ]);
        $twig->addExtension(new DebugExtension());
        return $twig->render($view, $data);
    }

    abstract public function index();
}