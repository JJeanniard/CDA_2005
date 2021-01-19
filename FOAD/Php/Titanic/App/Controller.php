<?php

namespace Titanic;

use Exception;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;
use Twig\Extension\DebugExtension;

abstract class Controller
{
    protected Router $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    /**
     * Vérifie si l'action demandé par l'utilisateur via à l'URI, est existant dans le controller.
     * Dans le cas contraire revoir une exception
     * @return mixed
     * @throws Exception
     */
    public function run()
    {
        $action = $this->router->getAction();

        if (!method_exists($this, $action)) {
            throw new Exception("Invalide Action.");
        }

        return $this->$action();
    }

    /**
     * Charge les templates et les retranscrires en cache pour l'utilisateur.
     * Ou leve des exception en cas d'erreur.
     * @param string $view Le nom du template ex: index.html.twig
     * @param array $data Les différentes données qui seront injecté dans le template
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function view(string $view, array $data = []) : string
    {
        $loader = new FilesystemLoader('../App/Views/Titanic');
        $twig = new Environment($loader, [
            'debug' => true,
            'cache' => '../public/cache',
        ]);
        $twig->addExtension(new DebugExtension());
        $twig->addGlobal('flashMsg', Session::getMessage());

        try{
            $view = $twig->render($view, $data);
        }catch (Exception $e){
            $view = "Error : $e";
        }

        return $view;
    }

    abstract public function index();
}